<?php

function validateLength(?string $field, string $fieldName, int $minLength, array &$errors): void
{
    if (strlen("$field") < $minLength) {
        $errors[strtolower("$fieldName")] = "{$fieldName} length under {$minLength} characters";
    }
}


function validateEmail(?string $field, string $fieldName, array &$errors)
{
    if (false === filter_var($field, FILTER_VALIDATE_EMAIL)) {
        $errors[strtolower("$fieldName")] = "{$fieldName} is not a valid email";
    }
}

function validateContactForm(string $user, string $email, string $subject, string $message): array
{
    $errors = [];
    validateLength($user, "Name", 4, $errors);
    validateEmail($email, "Email", $errors);
    validateLength($subject, "Subject", 6, $errors);
    validateLength($message, "Message", 10, $errors);
    return $errors;
}


function writeContentToDB(mysqli $conn, array $data): array
{
    $sqlQuery = "INSERT INTO `messages` 
                (`name`, `email`, `subject`, `message`) 
                VALUES ('%s', '%s', '%s', '%s')";

    $result = mysqli_query(
        $conn,
        sprintf($sqlQuery, $data['user'], $data['email'], $data['subject'], htmlentities($data['message']))
    );

    if (!$result) {
        error_log("Unexpected connexion error");
        return ['Unable to save message to database'];
    }

    return [];
}


///// WRITE MESSAGES TO FILE //////////////////////////////////////////
function getFilenameForMessage(string $filePath): string
{
    $filePath = ROOT_PATH . $filePath;
    if (!file_exists($filePath)) {
        mkdir($filePath, 0777, true);
    }
    return $filePath . "/message.txt";
}

function buildContentAsTxt(string $sentDate, string $user, string $email, string $subject, string $message): string
{
    $content = "Date: $sentDate" . PHP_EOL;
    $content .= "Name: $user" . PHP_EOL;
    $content .= "Email: $email" . PHP_EOL;
    $content .= "Subject: $subject" . PHP_EOL;
    $content .= "Message: $message" . PHP_EOL;
    $content .= "------------------------------" . PHP_EOL;

    return $content;
}

function writeContentToFile(string $filename, string $content, string $writeMode = "a"): bool
{
    if (!$handle = fopen($filename, $writeMode)) {
        error_log("Cannot open file $filename");
        return false;
    }

    if (fwrite($handle, $content) === false) {
        error_log("Cannot write to file $filename");
        return false;
    }

    fclose($handle);

    return true;
}

function writeTxtMessage($subject, string $user, string $email, $message): void
{
    $sentDate = date("Y-m-d H:i:s");
    $filename = getFilenameForMessage("messages");
    $content = buildContentAsTxt($sentDate, $user, $email, $subject, $message);
    writeContentToFile($filename, $content);
}