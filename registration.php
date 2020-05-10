<?php require_once "php_project.php"; ?>
<?php
// Page Options/Settings
$headLinks = ['Registration' => "javascript:void(0)"];
$pageTitle = "Registration";
$hasHeadline = true;


$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
$confPass = $_POST['conf_pass'] ?? '';
$email = $_POST['email'] ?? '';
$submitted = $_POST['submit'] ?? false;

$errors = array();

if ($submitted == true) {
    if ($pass !== $confPass) {
        $errors[] = 'Passwords are not the same';
    } else {
        $errors = registerUser($conn, $user, $pass, $email);
    }
}

$success = 'Successful registration. <br> Please confirm by the link sended to your email adress.';

?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start registration form -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 center-col">
                    <div class="bg-white padding-30px-all sm-padding-20px-all border border-width-5">
                        <div class="section-heading">
                            <h3>Registration</h3>
                        </div>

                        <div class="badge-warning">
                            <?php
                                foreach ($errors as $error) echo $error."<br/>";
                            ?>
                        </div>
                        <div class="badge-success">
                            <?php if ($errors == [] && $submitted == true) echo $success; ?>
                        </div>
                        <br/>

                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="registration-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" value="<?php echo $user; ?>" name="user" id="firstname" role="form"
                                           required placeholder="Username/Name *" maxlength="70" class="medium-input"
                                           autocomplete='on'>
                                </div>
                                <div class="col-12">
                                    <input type="email" value="<?php echo $email; ?>" name="email" id="email" required
                                           placeholder="Email *" maxlength="70" class="medium-input" autocomplete='on'>
                                </div>
                                <div class="col-12">
                                    <input type="password" value="<?php echo $pass; ?>" name="pass" id="password" required
                                           placeholder="Password *" maxlength="70" class="medium-input"
                                           autocomplete='off'>
                                </div>
                                <div class="col-12">
                                    <input type="password" value="<?php echo $confPass; ?>" name="conf_pass"
                                           id="confirmpassword" required placeholder="Confirm Password *" maxlength="70"
                                           class="medium-input" autocomplete='off'>
                                </div>
                                <div class="col-12">
                                    <input class="butn theme medium" name="submit" type="submit" value="Register">
                                    <p class="no-margin float-right">Already Register? <a href="login.php">Sign in</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end registration form -->

<?php include_once "header-footer/footer.php"; ?>