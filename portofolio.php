<?php require_once "php_project.php"; ?>
<?php
// Page Options/Settings
$headLinks = ['Portofolio' => "javascript:void(0)"];
$pageTitle = "Portofolio";
$hasHeadline = true;

$parents = getObjects($conn, "SELECT * FROM `project_group`");

$projects = getObjects($conn, "SELECT * FROM `portofolio`");

?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start project section -->
    <section>

        <div class="container">
            <div class="section-heading">
                <h3>Our Latest Projects</h3>
                <p class="width-55 sm-width-75 xs-width-95">Business consectetur adipisicing elit eiusmod tempor
                    incididunt ut labore et dolore magna aliqua quis nostrud exercitation consequat.</p>
            </div>
        </div>

        <div class="container-fluid">

            <div class="row">

                <!-- Start links -->
                <div class="filtering col-sm-12 text-center">
                    <span data-filter='*' class="active">All</span>

                    <?php
                    foreach ($parents as $out) {
                        echo '<span data-filter=\'.' . $out['category'] . '\'>' . ucfirst($out['category']) . '</span>';
                    }
                    ?>

                </div>
                <!-- End links -->

                <div class="gallery text-center width-100">


                    <?php
                    foreach ($projects as $project)
                        echo
                            '<div class="col-lg-4 col-md-6 margin-50px-bottom items ' . $project['parent'] . '">
                            <div class="project-grid-style2">
                              <div class="project-details">
                                <img class="width70" src="' . $project['image'] . '" alt="">
                                <div class="portfolio-icon">
                                    <a class="popimg" href="' . $project['image'] . '"><i class="fas fa-search-plus"></i></a>
                                </div>
                                <div class="portfolio-post-border"></div>
                               </div>
                            <div class="portfolio-title">
                                <p>' . $project['parent'] . '</p>
                                <h4>' . $project['project'] . '</h4>
                            </div>
                        </div>
                    </div>';
                    ?>

                </div>
            </div>

        </div>

    </section>
    <!-- end project section -->

<?php include_once "header-footer/footer.php"; ?>