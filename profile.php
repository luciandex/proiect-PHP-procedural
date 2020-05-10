<?php require_once "php_project.php"; ?>
<?php
// Page Options/Settings
$headLinks = ['Profile' => "javascript:void(0)"];
$pageTitle = "User Profile";
$hasHeadline = true;

$user = $_POST['user'] ?? '';
$email = $_POST['email'] ?? '';
$pass = $_POST['pass'] ?? '';


if (!$user && !$email) {
    $user = $_SESSION['user'] ?? null;
    $email = $_SESSION['email'] ?? null;
}

$pass = getUserData($conn);

$pass2 = $_POST['psw2'] ?? '';

if ($pass2) {
    $pass = getPassword($pass2, $conn);
    $pass2 = null;
}

?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start registration form -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 center-col">
                    <div class="bg-white padding-30px-all sm-padding-20px-all border border-width-5">
                        <div class="section-heading">
                            <h3>User Profile Data</h3>
                        </div>

                        <!--                        <form action="-->
                        <? //= $_SERVER['PHP_SELF']; ?><!--" method="post" class="form">-->
                        <div class="row">
                            <div class="col-md-12">
                                <label for="user">(User)Name:</label>
                                <input type="text"
                                       value="<?php echo $user; ?>"
                                       name="user"
                                       id="user"
                                       role="form"
                                       class="medium-input"
                                       disabled>
                            </div>
                            <div class="col-12">
                                <label for="email">Em@il:</label>
                                <input type="text"
                                       value="<?php echo $email; ?>"
                                       name="email"
                                       id="email"
                                       class="medium-input"
                                       disabled>
                            </div>
                            <div class="col-12">
                                <label for="password">Password:</label>
                                <input type="text"
                                       value="<?php echo $pass; ?>"
                                       name="pass"
                                       id="password"
                                       class="medium-input"
                                       disabled>
                            </div>
                        </div>


                        <form method="post" action="" class="mailform off2">
                            <div class="container">
                                <div class="bg-white padding-30px-all sm-padding-20px-all border border-width-5">
                                    <label for="pass">Type your password to show it above:</label>
                                    <input type="text"
                                           value="<?php echo $pass2; ?>"
                                           name="psw2"
                                           id="password2"
                                           class="medium-input">
                                    <div class="mfControls col-md-12">
                                        <input type="submit" class="butn theme" value="Submit">
                                    </div>
                                </div>
                        </form>
                    </div>

                    <!--                        </form>-->

                </div>
            </div>
        </div>

        </div>
    </section>
    <!-- end registration form -->

<?php include_once "header-footer/footer.php"; ?>