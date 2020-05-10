<?php

function lnk(string $uri): string
{
    return BASE_URL . $uri;
}

// HEAD LINKS ************************
function buildHeadLinks(array $menuLnk, bool $includeHomeLink = true): string
{
    $headLinks = "<ul>";

    if ($includeHomeLink) {
        $headLinks .= '<li><a href="' . lnk("index.php") . '">Home</a></li>' . PHP_EOL;
    }

    foreach ($menuLnk as $title => $link) {
        if ($link == "javascript:void(0)") {
            $headLinks .= '<li><a href="javascript:void(0)">' . $title . '</a></li>' . PHP_EOL;
        } else {
            $headLinks .= "<li><a href='" . lnk($link) . "'>{$title}</a></li>" . PHP_EOL;
        }
    }

    return $headLinks . "</ul>";
}


// URL LIST FROM DB ************************
function getLinksFromDB(mysqli $conn,
                        string $table,
                        string $text1,
                        string $type1,
                        string $text2,
                        string $index = '',
                        string $type2 = '',
                        string $text3 = ''): void
{
    $sqlQuery = "SELECT * FROM `{$table}` {$index}"; // $index = "WHERE `.....` = INT/STR"
    $result = mysqli_query($conn, $sqlQuery);
    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo PHP_EOL;
    foreach ($items as $column):
        echo $text1 . $column["$type1"] . $text2 . ($column["$type2"] ?? '') . $text3 . PHP_EOL;
    endforeach;
}


// REGISTER USER ************************
function registerUser(mysqli $conn,
                      string $user,
                      string $pass,
                      string $email): array
{
    if (strlen($user) < 3) {
        return ['Username under 3 chars'];
    }

    if (strlen($pass) < 3) {
        return ['Password must be over 3 chars'];
    }

    $sqlQuery = "INSERT INTO `users` (`user`, `pass`, `email`)
                VALUES('%s', '%s', '%s')";

    $result = mysqli_query($conn, sprintf($sqlQuery, $user, hashPass($pass), $email));

    if ($result) {
        return [];
    }

    return [mysqli_error($conn)];
}


function hashPass(string $pass): string
{
    return md5(PASS_SALT . $pass);
}

// LOGIN USER ************************
function loginUser(mysqli $conn,
                   string $user,
                   string $pass): array
{
    $sqlQuery = "SELECT * FROM `users` WHERE `user` = '%s' AND `pass` = '%s'";
    $result = mysqli_query($conn, sprintf($sqlQuery, $user, hashPass($pass)));
    if (!$result) {
        return ['User selection from database failed'];
    }

    $user = mysqli_fetch_assoc($result);

    if ($user) {
        $sqlQuery = "UPDATE `users` SET `last_login` = '%s' WHERE `id` = '%d'";
        $updateResult = mysqli_query($conn, sprintf($sqlQuery, date('Y-m-d H:i:s'), $user['id']));

        if (!$updateResult) {
            return ['Update last_login for user failed.'];
        }

        $_SESSION['uid'] = md5($user['id']);
        $_SESSION['user'] = $user['user'];
        $_SESSION['email'] = $user['email'];

    } else {
        return ['User/Pass combination invalid'];
    }

    return [];
}


// GET USER PROFILE DATA
function getUserData(mysqli $conn): string
{
    $sqlQuery = "SELECT `pass` FROM `users` WHERE `user`= '{$_SESSION['user']}'
                                        AND `email` = '{$_SESSION['email']}'";

    $result = mysqli_query($conn, $sqlQuery);
    $pass = mysqli_fetch_assoc($result);
    $pass = $pass['pass'];

    return $pass;
}

function getPassword($pass2, mysqli $conn)
{
    if (hashPass($pass2) == getUserData($conn)) {
        return $pass2;
    }
    return 'Password not the same';
}


// GET ARTICLES, SERVICES, PROJECTS ************************
function getObjects(mysqli $conn, string $query): array
{
    $result = mysqli_query($conn, $query);

    if (!$result) {
        return [];
    }

    $getObjects = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $getObjects;
}