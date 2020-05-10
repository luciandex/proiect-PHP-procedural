

<div class="row product-list margin-50px-bottom sm-margin-30px-bottom">

    <div class="col-12 margin-30px-bottom sm-margin-20px-bottom">

        <div class="border border-color-extra-light-gray float-left width-100 bg-light-gray">

            <a href="<?php echo $product['link']; ?>" class="product-block width-25 xs-width-35 float-left position-relative">
                <div class="label-offer bg-red">Sale</div><img src="<?php echo $product['image']; ?>" alt="" />
            </a>

            <div class="float-right width-75 xs-width-65 padding-20px-all bg-light-gray border-color-extra-light-gray  border-left">
                <div class="text-left">
                    <h3 class="font-size18 sm-font-size16 margin-10px-bottom"><a href="<?php echo $product['link']; ?>"><?php echo $product['name']; ?></a></h3>
                    <p class="margin-10px-bottom"><?php echo $product['description']; ?></p>
                    <p>
                        <span class="red line-through margin-10px-right font-size18">$<?php echo $product['price']; ?></span>
                        <span class="font-size18 font-weight-600">$<?php echo $product['old_price']; ?></span>
                    </p>
                </div>
                <div class="buttons">
                    <a href="javascript:void(0)" class="butn theme"><span><i class="fas fa-shopping-cart margin-10px-right"></i>Add to Cart</span></a>
                </div>
            </div>

        </div>
    </div>

</div>
