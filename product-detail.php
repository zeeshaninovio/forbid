<!-- header section-->
<?php include 'inc/app.php'; ?>
<!-- header section-->

<!-- Stylesheet -->
<link rel="stylesheet" href="css/product-detail.css">
<!-- Stylesheet -->

<!-- Product Detail Start Here -->
<section class="product_detail">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="picture_box">
                    <div class="product-single-image">
                        <figure><img src="img/detail-img.png" class="img-fluid"></figure>
                        <figure><img src="img/detail-img.png" class="img-fluid"></figure>
                        <figure><img src="img/detail-img.png" class="img-fluid"></figure>
                    </div>
                    <div class="product_images">
                        <figure><img src="img/product1.png" class="img-fluid"></figure>
                        <figure><img src="img/product2.png" class="img-fluid"></figure>
                        <figure><img src="img/product3.png" class="img-fluid"></figure>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product_details_dv">
                    <div class="name_box">
                        <h3>Bavaria Alco</h3>
                    </div>
                    <ul class="ratings">
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                        <li><i class="fa fa-star" aria-hidden="true"></i></li>
                    </ul>
                    <div class="description">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                            Ut enim ad minim veniam
                        </p>
                    </div>
                    <div class="details">
                        <div class="detail_box">
                            <h4 class="property">Price:</h4>
                            <h4 class="value">$525.00</h4>
                        </div>
                        <div class="detail_box">
                            <h4 class="property">Size:</h4>
                            <div class="sizes">
                                <label class="size_container">
                                    <input type="radio" checked="checked" name="size_radio">
                                    <span class="checkmark">
                                        <h5>S</h5>
                                    </span>
                                </label>
                                <label class="size_container">
                                    <input type="radio" name="size_radio">
                                    <span class="checkmark">
                                        <h5>M</h5>
                                    </span>
                                </label>
                                <label class="size_container">
                                    <input type="radio" name="size_radio">
                                    <span class="checkmark">
                                        <h5>L</h5>
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="detail_box">
                            <h4 class="property">Color:</h4>
                            <div class="colors">
                                <label class="colors_container">
                                    <input type="radio" checked="checked" name="color_radio">
                                    <span class="checkmark">
                                        <img src="img/color.png" class="img-fluid">
                                    </span>
                                </label>
                            </div>
                        </div>
                        <div class="detail_box">
                            <h4 class="property">Speciality:</h4>
                            <h4 class="value tag">Alcohol Free</h4>
                        </div>
                        <div class="detail_box">
                            <h4 class="property">Vendor:</h4>
                            <h4 class="value ez">Ez Life</h4>
                        </div>
                        <div class="detail_box">
                            <h4 class="property">Type,Body & Flavor:</h4>
                            <div class="dropdown">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                    id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <img src="img/dropdown1.png" class="img-fluid">
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#"><img src="img/dropchild1.png" class="img-fluid">
                                        Black Wine</a>
                                    <a class="dropdown-item" href="#"><img src="img/dropchild2.png" class="img-fluid">
                                        Medium</a>
                                    <a class="dropdown-item" href="#"><img src="img/dropchild3.png" class="img-fluid">
                                        Floral</a>
                                    <a class="dropdown-item" href="#"><img src="img/dropchild4.png" class="img-fluid">
                                        Black Berry</a>
                                </div>
                            </div>
                        </div>
                        <div class="detail_box mt-4">
                            <h4 class="property">Pairings & Ocassions:</h4>
                            <figure><img src="img/dropdown2.png" class="img-fluid"></figure>
                        </div>
                        <div class="detail_box">
                            <h4 class="property">Quantity:</h4>
                            <div class="quantity_dv">
                                <button class="addCount" getid="countVal1">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                </button>

                                <input type="number" value="01" id="countVal1">

                                <button class="removeCount" getid="countVal1">
                                    <i class="fa fa-minus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn">Add to Cart</button>
                            <button class="btn">Add to Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Detail End Here -->

<!-- Review Sec Start Here -->
<section class="review_sec">
    <div class="container">
        <div class="review_box">
            <div class="client_wrapper">
                <h4>Wine Style</h4>
                <h3>Bavaria Alco States</h3>
            </div>
            <div class="description">
                <div class="country">
                    <img src="img/USA.png" class="img-fluid">
                    <p>UNITED STATES</p>
                </div>
                <p class="para">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vulputate tempus magna non
                    ullamcorper. Donec dapibus lectus vel dolor tincidunt, ut elementum enim vehicula. Quisque ante
                    nunc, pharetra nec lacinia non, sollicitudin non dolor. Cras vel eleifend lorem. Nunc a risus vitae
                    nisl ultrices hendrerit non vitae eros. Quisque sit amet massa leo. Aenean at hendrerit justo, id
                    venenatis nisi. Donec ullamcorper eros aliquam, interdum urna at, iaculis libero. Donec velit dui,
                    tincidunt finibus felis malesuada, porttitor dignissim nisi. Maecenas mauris lectus, pharetra sit
                    amet nunc at, iaculis tempor nulla. Nullam feugiat quam ac lacus sagittis pretium. Donec eu lacus
                    nisl. Nulla nec ex lacus. Praesent eget magna quis tortor sodales tincidunt id eget erat. In
                    aliquam, tellus sit amet convallis eleifend, est sapien vehicula arcu, convallis semper nunc felis
                    sit amet nisl.
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Review Sec End Here -->

<!-- Related Product Sec Start Here -->
<section class="related_sec">
    <div class="container">
        <div class="heading_wrapper">
            <h2>Related Products</h2>
        </div>
        <div class="related_slider">
            <div class="product-sec">
                <div class="product-img">
                    <a href="product-detail.php">
                        <img class="img-fluid" src="img/sharab6.png" alt="">
                    </a>
                </div>
                <div>
                    <p>Bavaria Alco</p>
                </div>
                <div class="product-icon">
                    <hr>
                    <img class="img-fluid" src="img/diamondicon.png" alt="">
                    <hr>
                </div>
                <div class="products-par">
                    <p>
                        $525.00
                    </p>
                </div>
                <div class="product_stars_icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="addtocartbtn ">
                    <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                        to
                        Cart</button>
                </div>
            </div>
            <div class="product-sec">
                <div class="product-img">
                    <a href="product-detail.php">
                        <img class="img-fluid" src="img/sharab4.png" alt="">
                    </a>
                </div>
                <div>
                    <p>Bavaria Alco</p>
                </div>
                <div class="product-icon">
                    <hr>
                    <img class="img-fluid" src="img/diamondicon.png" alt="">
                    <hr>
                </div>
                <div class="products-par">
                    <p>
                        $525.00
                    </p>
                </div>
                <div class="product_stars_icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="addtocartbtn ">
                    <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                        to
                        Cart</button>
                </div>
            </div>
            <div class="product-sec">
                <div class="product-img">
                    <a href="product-detail.php">
                        <img class="img-fluid" src="img/sharab8.png" alt="">
                    </a>
                </div>
                <div>
                    <p>Bavaria Alco</p>
                </div>
                <div class="product-icon">
                    <hr>
                    <img class="img-fluid" src="img/diamondicon.png" alt="">
                    <hr>
                </div>
                <div class="products-par">
                    <p>
                        $525.00
                    </p>
                </div>
                <div class="product_stars_icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="addtocartbtn ">
                    <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                        to
                        Cart</button>
                </div>
            </div>
            <div class="product-sec">
                <div class="product-img">
                    <a href="product-detail.php">
                        <img class="img-fluid" src="img/sharab1.png" alt="">
                    </a>
                </div>
                <div>
                    <p>Bavaria Alco</p>
                </div>
                <div class="product-icon">
                    <hr>
                    <img class="img-fluid" src="img/diamondicon.png" alt="">
                    <hr>
                </div>
                <div class="products-par">
                    <p>
                        $525.00
                    </p>
                </div>
                <div class="product_stars_icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="addtocartbtn ">
                    <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                        to
                        Cart</button>
                </div>
            </div>
            <div class="product-sec">
                <div class="product-img">
                    <a href="product-detail.php">
                        <img class="img-fluid" src="img/sharab6.png" alt="">
                    </a>
                </div>
                <div>
                    <p>Bavaria Alco</p>
                </div>
                <div class="product-icon">
                    <hr>
                    <img class="img-fluid" src="img/diamondicon.png" alt="">
                    <hr>
                </div>
                <div class="products-par">
                    <p>
                        $525.00
                    </p>
                </div>
                <div class="product_stars_icon">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                </div>
                <div class="addtocartbtn ">
                    <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                        to
                        Cart</button>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Sec End Here -->

<!-- Related Product Sec Start Here -->
<section class="recommend_sec">
    <div class="container">
        <div class="heading_wrapper">
            <h2>Recommended Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="product-sec">
                    <div class="product-img">
                        <a href="product-detail.php">
                            <img class="img-fluid" src="img/sharab6.png" alt="">
                        </a>
                    </div>
                    <div>
                        <p>Bavaria Alco</p>
                    </div>
                    <div class="product-icon">
                        <hr>
                        <img class="img-fluid" src="img/diamondicon.png" alt="">
                        <hr>
                    </div>
                    <div class="products-par">
                        <p>
                            $525.00
                        </p>
                    </div>
                    <div class="product_stars_icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="addtocartbtn ">
                        <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                            to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-sec">
                    <div class="product-img">
                        <a href="product-detail.php">
                            <img class="img-fluid" src="img/sharab4.png" alt="">
                        </a>
                    </div>
                    <div>
                        <p>Bavaria Alco</p>
                    </div>
                    <div class="product-icon">
                        <hr>
                        <img class="img-fluid" src="img/diamondicon.png" alt="">
                        <hr>
                    </div>
                    <div class="products-par">
                        <p>
                            $525.00
                        </p>
                    </div>
                    <div class="product_stars_icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="addtocartbtn ">
                        <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                            to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-sec">
                    <div class="product-img">
                        <a href="product-detail.php">
                            <img class="img-fluid" src="img/sharab8.png" alt="">
                        </a>
                    </div>
                    <div>
                        <p>Bavaria Alco</p>
                    </div>
                    <div class="product-icon">
                        <hr>
                        <img class="img-fluid" src="img/diamondicon.png" alt="">
                        <hr>
                    </div>
                    <div class="products-par">
                        <p>
                            $525.00
                        </p>
                    </div>
                    <div class="product_stars_icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="addtocartbtn ">
                        <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                            to
                            Cart</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="product-sec">
                    <div class="product-img">
                        <a href="product-detail.php">
                            <img class="img-fluid" src="img/sharab1.png" alt="">
                        </a>
                    </div>
                    <div>
                        <p>Bavaria Alco</p>
                    </div>
                    <div class="product-icon">
                        <hr>
                        <img class="img-fluid" src="img/diamondicon.png" alt="">
                        <hr>
                    </div>
                    <div class="products-par">
                        <p>
                            $525.00
                        </p>
                    </div>
                    <div class="product_stars_icon">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="addtocartbtn ">
                        <button class="custombtn atc"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Add
                            to
                            Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Related Product Sec End Here -->

<!-- header section-->
<?php include 'inc/footer.php'; ?>
<!-- header section-->