<?php require_once "php_project.php";

// Page Options/Settings
$headLinks = ['Login' => "javascript:void(0)"];
$pageTitle = "Login";
$hasHeadline = true;

$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';
$submitted = $_POST['submit'] ?? false;

$errors = array();

if ($submitted) {
    $errors = loginUser($conn, $user, $pass);

    if (empty($errors)) {
        header("location: index.php");
    }
}

?>

<?php include_once "header-footer/header.php"; ?>


    <!-- start login section -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 center-col">
                    <div class="bg-white padding-30px-all sm-padding-20px-all border border-width-5">
                        <div class="text-center section-heading">
                            <h4>Login</h4><br>
                        </div>

                        <div class="badge-warning">
                            <?php foreach ($errors as $error): ?>
                                <?php echo $error; ?><br/>
                            <?php endforeach; ?>
                        </div>
                        <br/>

                        <form class="login-form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="user" id="username" value="<?php echo $user; ?>" required
                                           placeholder="User Name *" class="medium-input">
                                </div>
                                <div class="col-12">
                                    <input type="password" name="pass" id="password" value="<?php echo $pass; ?>"
                                           required
                                           placeholder="Password *" maxlength="70" class="medium-input">
                                </div>
                                <div class="col-12">
                                    <input class="butn theme medium" name="submit" type="submit" value="Login">
                                    <p class="no-margin float-right">
                                        <a href="registration.php">New Registration?</a>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end under construction section -->

<?php include_once "header-footer/footer.php"; ?>