<?php require_once "php_project.php"; ?>
<?php require_once "lib/contact-func.php"; ?>
<?php

// Page Options/Settings
$headLinks = ['Contact' => "javascript:void(0)"];
$pageTitle = "Get in touch";
$hasHeadline = true;

$user = $_POST['user'] ?? null;
$email = $_POST['email'] ?? null;
$subject = $_POST['subject'] ?? null;
$message = $_POST['message'] ?? null;

$errors = array();

$success = '';

if (!$user && !$email) {
    $user = $_SESSION['user'] ?? null;
    $email = $_SESSION['email'] ?? null;
}

if ($user && $email && $subject && $message) {
    $errors = validateContactForm($user, $email, $subject, $message);

    if (!$errors) {
        $data = [
            'user' => $user,
            'email' => $email,
            'subject' => $subject,
            'message' => $message,
        ];

        $errors = writeContentToDB($conn, $data);

        if (empty($errors)) {
            $success = "Your message was sent. <br> We'll contact you soon.";
            writeTxtMessage($subject, $user, $email, $message);
            $user = $email = $subject = $message = null;
        }
    }
}


?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start FAQ -->
<?php include_once "lib/FAQ.php"; ?>
    <!-- end FAQ -->

    <!-- start advice form section -->
    <section class="parallax" data-overlay-dark="7" data-background="img/bg/bg2.jpg">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-12 sm-margin-30px-bottom">

                    <div class="padding-10px-tb">
                        <div class="row">
                            <div class="col-12">

                                <div class="section-heading white title-style5 left half">
                                    <h4 class="text-uppercase font-weight-600">Get advice any time</h4>
                                    <div class="square">
                                        <span class="separator-left bg-theme"></span>
                                        <span class="separator-right bg-theme"></span>
                                    </div>
                                </div>

                            </div>

                            <div class="col-12 margin-5px-top">
                                <div class="padding-25px-bottom sm-padding-20px-bottom border-bottom border-color-light-white">
                                    <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-light-gray vertical-align-top width-30px xs-width-25px"><i
                                                class="fas fa-phone vertical-align-top"></i></span>
                                    <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                        <h5 class="margin-5px-bottom text-white text-uppercase font-size15 xs-font-size14">
                                            Phone Number</h5>
                                        <p class="no-margin line-height-normal text-light-gray">(+40) 21 254 654</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="padding-25px-tb sm-padding-20px-tb border-bottom border-color-light-white">
                                    <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-light-gray vertical-align-top width-30px xs-width-25px"><i
                                                class="fas fa-map-marker-alt vertical-align-top"></i></span>
                                    <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                        <h5 class="margin-5px-bottom text-white text-uppercase font-size15 xs-font-size14">
                                            Location</h5>
                                        <p class="no-margin line-height-normal text-light-gray">74 Guild Street 542B,
                                            Great North MT.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="padding-25px-tb sm-padding-20px-tb">
                                    <span class="d-inline-block font-size26 sm-font-size22 xs-font-size20 line-height-30 text-light-gray vertical-align-top width-30px xs-width-25px"><i
                                                class="far fa-envelope vertical-align-top"></i></span>
                                    <div class="d-inline-block vertical-align-top padding-10px-left width-75">
                                        <h5 class="margin-5px-bottom text-white text-uppercase font-size15 xs-font-size14">
                                            Email</h5>
                                        <p class="no-margin line-height-normal text-light-gray">office@numwtrade.com</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="margin-10px-top footer-social-icons">
                                    <ul>

                                        <?php include "lib/social-media.php"; ?>

                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="contact-form-box bg-white padding-30px-all sm-padding-20px-all border border-width-8">
                        <h2>Let's talk about your business.</h2>

                        <div class="badge-warning">

                            <?php
                            foreach ($errors as $error) echo $error . "<br/>";
                            ?>

                        </div>
                        <div class="badge-success">

                            <?php
                            if ($success) echo $success;
                            ?>

                        </div>
                        <br/>


                        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mailform off2">
                            <input type="hidden" name="form-type" value="contact">
                            <div class="row">
                                <div class="col-md-12">
                                    <input
                                        <?php if (isset($errors['name'])) echo 'class="bg-warning"'; ?>
                                            type="text"
                                            name="user"
                                            value="<?php echo $user; ?>"
                                            placeholder="Your Name *:"
                                            required
                                            data-rule="minlen:4"
                                            data-msg="Please enter at least 4 chars">
                                </div>
                                <div class="col-md-12">
                                    <input
                                        <?php if (isset($errors['email'])) echo 'class="bg-warning"'; ?>
                                            type="email"
                                            name="email"
                                            value="<?php echo $email; ?>"
                                            placeholder="Email *:"
                                            required
                                            data-rule="email"
                                            data-msg="Please enter a valid email">
                                </div>
                                <div class="col-md-12">
                                    <input
                                        <?php if (isset($errors['subject'])) echo 'class="bg-warning"'; ?>
                                            type="text"
                                            name="subject"
                                            value="<?php echo $subject; ?>"
                                            placeholder="Subject *:"
                                            required
                                            data-rule="minlen:6"
                                            data-msg="Please enter at least 6 chars of subject">
                                </div>
                                <div class="col-md-12">
                                    <textarea
                                        <?php if (isset($errors['message'])) echo 'class="bg-warning"'; ?>
                                        name="message"
                                        rows="3"
                                        placeholder="Message *:"
                                        required
                                        data-rule="minlen:10"
                                        data-msg="Please write something for us"><?php echo $message; ?></textarea>
                                </div>
                                <div class="mfControls col-md-12">
                                    <input type="submit" class="butn theme" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- end advice form section -->

    <!-- start map section -->
    <div class="container margin-15px-tb padding-10px-top border-all border-color-extra-light-gray">
        <iframe width="100%" height="400px"
                src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
    </div>
    <!-- end map section -->


<?php include_once "header-footer/footer.php"; ?>