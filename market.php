<?php require_once "php_project.php"; ?>
<?php
// Page Options/Settings
$headLinks = ['Traded Products' => "javascript:void(0)"];
$pageTitle = "Traded Products";
$hasHeadline = true;

$products = getObjects($conn, "SELECT * FROM `market`");

?>

<?php include_once "header-footer/header.php"; ?>

    <!-- start shop section -->
    <section>
        <div class="container">
            <div class="row">

                <!-- start product grid left panel -->
                <div class="col-lg-3 col-md-12">

                    <div id="accordion" class="accordion-style2 margin-20px-bottom">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne"> Electrical
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-style-5">
                                        <li><a href="javascript:void(0)">Flash Lights</a></li>
                                        <li><a href="javascript:void(0)">Tool Organisers</a></li>
                                        <li><a href="javascript:void(0)">Safety Cables</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        watch
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-style-5">
                                        <li><a href="javascript:void(0)">Women's Watch</a></li>
                                        <li><a href="javascript:void(0)">Men's Watch</a></li>
                                        <li><a href="javascript:void(0)">Kids Watch</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseThree" aria-expanded="false"
                                            aria-controls="collapseThree">
                                        Accessories
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-style-5">
                                        <li><a href="javascript:void(0)">Drives &amp; Storage</a></li>
                                        <li><a href="javascript:void(0)">Networking Devices</a></li>
                                        <li><a href="javascript:void(0)">Software</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFour" aria-expanded="false"
                                            aria-controls="collapseFour">
                                        Clothes
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-style-5">
                                        <li><a href="javascript:void(0)">T-Shirt</a></li>
                                        <li><a href="javascript:void(0)">Pants</a></li>
                                        <li><a href="javascript:void(0)">Saree</a></li>
                                        <li><a href="javascript:void(0)">Joggers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseFive" aria-expanded="false"
                                            aria-controls="collapseFive">
                                        Mobile
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                 data-parent="#accordion">
                                <div class="card-body">
                                    <ul class="list-style-5">
                                        <li><a href="javascript:void(0)">Intex</a></li>
                                        <li><a href="javascript:void(0)">Google</a></li>
                                        <li><a href="javascript:void(0)">Samsung</a></li>
                                        <li><a href="javascript:void(0)">Apple</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="shop-color">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="style1"></a>
                            </li>
                        </ul>
                    </div>

                    <div class="offer-banner bg-theme text-center sm-display-none">
                        <a href="javascript:void(0)"><img src="img/shop/left-panel-banner.png" alt=""/></a>
                    </div>
                </div>
                <!-- end product grid left panel -->

                <!-- start right panel section -->
                <div class="col-lg-9 col-md-12 padding-30px-left sm-padding-15px-lr">

                    <div class="row margin-30px-bottom sm-margin-20px-bottom">

                        <div class="col-12">
                            <div class="float-left bg-light-gray width-100 padding-10px-tb padding-15px-lr">
                                <div class="float-left xs-width-100 text-center">
                                    <p class="no-margin line-height-50">Showing 1–9 of 27 results</p>
                                </div>
                                <div class="float-right margin-5px-top xs-no-margin-top xs-width-100 text-center">

                                    <div class="float-right xs-float-none xs-width-100 xs-margin-15px-bottom">
                                        <label>Show:</label>
                                        <label>
                                            <select class="width-auto display-inline-block no-margin">
                                                <option value="#?limit=24" selected="selected">24</option>
                                                <option value="#?limit=25">25</option>
                                                <option value="#?limit=50">50</option>
                                                <option value="#?limit=75">75</option>
                                                <option value="#?limit=100" selected="">100</option>
                                            </select>
                                        </label>
                                    </div>

                                    <div class="float-right margin-20px-right xs-float-none xs-width-100 xs-no-margin-right xs-margin-10px-bottom">
                                        <label>Sort By:</label>
                                        <label>
                                            <select class="width-120px display-inline-block no-margin">
                                                <option value="#?sort=p.sort_order&amp;order=ASC" selected="selected">
                                                    Default
                                                </option>
                                                <option value="#?sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                                <option value="#?sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                                <option value="#?sort=p.price&amp;order=ASC">Price (Low &gt; High)
                                                </option>
                                                <option value="#?sort=p.price&amp;order=DESC" selected="">Price (High
                                                    &gt; Low)
                                                </option>
                                                <option value="#?sort=rating&amp;order=DESC">Rating (Highest)</option>
                                                <option value="#?sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                                <option value="#?sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                                <option value="#?sort=p.model&amp;order=DESC">Model (Z - A)</option>
                                            </select>
                                        </label>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>


                    <?php foreach ($products as $product) include "lib/market-product.php"; ?>


                    <div class="row">
                        <div class="col-12 no-padding sm-padding-15px-lr">
                            <div class="pagination text-small text-uppercase text-extra-dark-gray">
                                <ul>
                                    <li><a href="javascript:void(0);"><i
                                                    class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i>
                                            Prev</a></li>
                                    <li class="active"><a href="javascript:void(0);">1</a></li>
                                    <li><a href="javascript:void(0);">2</a></li>
                                    <li><a href="javascript:void(0);">3</a></li>
                                    <li><a href="javascript:void(0);">Next <i
                                                    class="fas fa-long-arrow-alt-right margin-5px-left xs-display-none"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- end right panel section -->

            </div>
        </div>
    </section>
    <!-- end shop section -->

<?php include_once "header-footer/footer.php"; ?>