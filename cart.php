<?php include 'inc/app.php'; ?>
<!-- css file starts here -->
<link rel="stylesheet" href="css/cart.css">
<!-- css file ends here -->
<section class="section-head">
    <div class="head">
        <h4>Your Shopping Cart</h4>
        <p>
            Home / Your Shopping Cart
        </p>
    </div>
</section>

<!-- cart starts here -->
<section class="add-to-cart">
    <div class="container">
        <h5 class="page-head">Products</h5>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cart-items-wrapper">
                            <div class="single-cart-wrapper mb-4">
                                <div class="single-cart-img-wrapper">
                                    <figure>
                                        <img src="img/add-to-cart.png" class="img-fluid" alt="">
                                    </figure>
                                </div>
                                <div class="single-cart-content-wrapper">
                                    <h4>Borges Unfiltered
                                        Organic </h4>
                                    <p>S / Yellow / Low Sodium</p>
                                    <h4 class="price">$539.00</h4>
                                    <div class="number">
                                        <span class="plus">+</span>
                                        <input type="text" value="01">
                                        <span class="minus">-</span>
                                    </div>
                                    <h6>Total : <span class="total-price">$1052.00</span></h6>
                                </div>
                                <button><i class="fa fa-close"></i></button>
                            </div>
                            <div class="single-cart-wrapper">
                                <div class="single-cart-img-wrapper">
                                    <figure>
                                        <a href="#">
                                            <img src="img/add-to-cart.png" class="img-fluid" alt="">
                                        </a>
                                    </figure>
                                </div>
                                <div class="single-cart-content-wrapper">
                                    <h4>Bavria Alco</h4>
                                    <p>L / Green / Alcohol Free</p>
                                    <h4 class="price">$432</h4>
                                    <div class="number">
                                        <span class="plus">+</span>
                                        <input type="text" value="01">
                                        <span class="minus">-</span>
                                    </div>
                                    <h6>Total : <span class="total-price">$805.00</span></h6>
                                </div>
                                <button><i class="fa fa-close"></i></button>
                            </div>
                        </div>
                        <div class="order-summry-wrapper mt-4">
                            <div class="button-group-wrapper d-flex justify-content-between">
                                <button onclick="location.href='Item-details.php'" class="btn up-btn">Continue Shopping</button>
                                <button onclick="location.href='checkout.php'" class="btn up-btn">Update Cart</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 align-self">
                        <div class="order-summry-wrapper">
                            <div class="summary-content-wrapper">
                                <h4>Order Summary</h4>
                                <h5>Sub Total : <span class="total-price">$3025</span></h5>
                                <button class="btn Add-a-note">Add a note to your order </button>
                                <div class="note-wrapper mt-4">
                                    <label for="">Special Instructions for seller</label>
                                    <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                </div>
                                <p class="my-4">Shipping, Taxes and discounts will be calculated at
                                    checkout</h3>
                                <div class="delievery-btn-wrapper mb-4">
                                    <a href="checkout.php" class="btn form-control custombtn">Proceed to Checkout</a>
                                </div>
                                <!-- <button onclick="location.href='Item-details.php'" class="btn up-btn">UPDATE</button>
                                <button onclick="location.href='checkout.php'" class="btn up-btn">CHECKOUT</button> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- cart ends here -->
<!-- footer start here -->
<?php include 'inc/footer.php'; ?>
<!-- footer end here -->