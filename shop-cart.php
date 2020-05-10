<?php include_once "header-footer/header.php"; ?>

    <!-- start page title section -->
    <section class="page-title-section bg-img cover-background padd" data-overlay-dark="7"
             data-background="img/bg/bg13.jpg">
    </section>
    <!-- end page title section -->

    <!-- start cart table section -->
    <section>
        <div class="container">


            <div class="row">

                <!-- Start Product Table -->
                <div class="col-12 shop-cart-table">
                    <table class="table shop-cart text-center">
                        <colgroup>
                            <col class="width-100px">
                            <col>
                            <col class="width-1px">
                            <col>
                            <col class="width-120px">
                            <col class="width-1px">
                        </colgroup>

                        <thead>
                        <tr>
                            <th class="first"></th>
                            <th class="text-left text-uppercase font-weight-500">Product</th>
                            <th class="text-left text-uppercase font-weight-500">Price</th>
                            <th class="text-center text-uppercase font-weight-500">Qty</th>
                            <th class="text-left text-uppercase font-weight-500">Sub Total</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="product-thumbnail text-left">
                                <a href="javascript:void(0)" class="display-inline-block width-70px"><img
                                            src="img/shop/cart-thumb01.jpg" alt="" class="width-70px"/></a>
                            </td>
                            <td class="text-left">
                                <a href="javascript:void(0)">Yellow lightbulb</a>
                                <span class="text-uppercase display-block">SKU: 290397</span>
                                <a href="javascript:void(0)" class="font-size13"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                            <td class="text-left">
                                $599
                            </td>
                            <td class="product-quantity">
                                <label>
                                    <input type="text" name="qty"/>
                                </label>
                            </td>
                            <td class="product-subtotal text-left">$599</td>
                            <td class="product-remove text-center">
                                <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail text-left">
                                <a href="javascript:void(0)" class="display-inline-block width-70px"><img
                                            src="img/shop/cart-thumb02.jpg" alt="" class="width-70px"/></a>
                            </td>
                            <td class="text-left">
                                <a href="javascript:void(0)">Leather watch</a>
                                <span class="text-uppercase display-block">SKU: 290392</span>
                                <a href="javascript:void(0)" class="font-size13"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                            <td class="text-left">
                                $300
                            </td>
                            <td class="product-quantity">
                                <label>
                                    <input type="text" name="qty"/>
                                </label>
                            </td>
                            <td class="product-subtotal text-left">$300</td>
                            <td class="product-remove text-center">
                                <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td class="product-thumbnail text-left">
                                <a href="javascript:void(0)" class="display-inline-block width-70px"><img
                                            src="img/shop/cart-thumb03.jpg" alt="" class="width-70px"/></a>
                            </td>
                            <td class="text-left">
                                <a href="javascript:void(0)">High-heeled shoe</a>
                                <span class="text-uppercase display-block">SKU: 290347</span>
                                <a href="javascript:void(0)" class="font-size13"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                            <td class="text-left">
                                $100
                            </td>
                            <td class="product-quantity">
                                <label>
                                    <input type="text" name="qty"/>
                                </label>
                            </td>
                            <td class="product-subtotal text-left"> $100</td>
                            <td class="product-remove text-center">
                                <a href="javascript:void(0)"><i class="fas fa-times"></i></a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <!-- End Product Table -->

                <!-- Start Button Set -->
                <div class="col-12 border-bottom border-top padding-40px-tb sm-padding-20px-tb sm-margin-20px-bottom xs-margin-15px-bottom">
                    <button class="butn small xs-margin-10px-bottom"><span>Empty Cart</span></button>
                    <button class="butn small float-right margin-10px-left xs-margin-10px-bottom"><span>Continue Shopping</span>
                    </button>
                    <button class="butn small float-right margin-10px-left"><span>Update Shopping Cart</span></button>
                </div>
                <!-- End Button Set -->

                <!-- Start Total Block Set -->
                <div class="col-12 cart-total padding-40px-top sm-padding-20px-tb">
                    <div class="row">

                        <div class="col-lg-5 col-md-5 xs-margin-30px-bottom">
                            <div id="accordion" class="accordion-style2">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                Coupon Code
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <form action="#">

                                                <label>
                                                    <input type="text" placeholder="Enter Your Coupon code">
                                                </label>
                                                <button class="butn small"><span>Apply Code</span></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse"
                                                    data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                Calculate Shipping
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                         data-parent="#accordion">
                                        <div class="card-body">
                                            <form action="#">

                                                <label>
                                                    <input type="text" placeholder="Country">
                                                </label>
                                                <label>
                                                    <input type="text" placeholder="State / County">
                                                </label>
                                                <label>
                                                    <input type="text" placeholder="Postcode">
                                                </label>
                                                <button class="butn small"><span>Update Totals</span></button>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 offset-lg-1 col-md-7 offset-md-0">
                            <table class="table cart-sub-total">
                                <tbody>
                                <tr>
                                    <th class="text-right no-padding-right text-uppercase">Cart Subtotal</th>
                                    <td class="text-uppercase text-right no-padding-right">$1598</td>
                                </tr>
                                <tr>
                                    <th class="text-right no-padding-right text-uppercase">Shipping and Handling</th>
                                    <td class="text-uppercase text-right no-padding-right">Free</td>
                                </tr>
                                <tr>
                                    <td class="no-padding-right xs-no-padding" colspan="2">
                                        <hr>
                                    </td>
                                </tr>
                                <tr class="total">
                                    <th class="text-uppercase text-right no-padding-right xs-no-padding">Order Total
                                    </th>
                                    <td class="text-uppercase text-right no-padding-right xs-no-padding">$1598</td>
                                </tr>
                                <tr>
                                    <td class="no-padding-right xs-no-padding" colspan="2">
                                        <hr class="no-margin-bottom">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <a class="butn theme medium float-right"
                               href="/shop-checkout.php"><span>Proceed to Checkout</span></a>
                        </div>
                    </div>
                </div>
                <!-- End Total Block Set -->

            </div>

        </div>
    </section>
    <!-- end cart table section -->


<?php include_once "header-footer/footer.php"; ?>