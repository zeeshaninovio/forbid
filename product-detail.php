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
                                        <img src="img/color.png" class="img-fluid ">
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
                            <div class="ez_life_img_sec">
                                <img src="img/dropdown1.png" class="img-fluid">
                            </div>
                            <!-- <div class="dropdown">
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
                            </div> -->
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
                            <button class="custombtn atc">Add to Cart</button>
                            <button class="custombtn">Add to Wishlist</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="right_bar_addtocart">
        <div class="cancel">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x"
                viewBox="0 0 16 16">
                <path
                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                </path>
            </svg>
        </div>
        <div class="addtocart_right">
            <div>
                <p>Your Cart</p>
                <hr>
                <div class="add_to_cart_content">
                    <div class="addto_cart_img">
                        <img src="img/sharab1.png" alt="">
                    </div>
                    <div>
                        <p>Borges Unfiltered Organic</p>
                        <p>S / Yellow / Low Sodium</p>
                        <p>$539</p>
                        <div>
                            <span>-</span>
                            <span>2</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="add_to_cart_content">
                    <div class="addto_cart_img">
                        <img src="img/sharab2.png" alt="">
                    </div>
                    <div>
                        <p>Bavaria Alco</p>
                        <p>L / Green / Low Sodium</p>
                        <p>$1218</p>
                        <div>
                            <span>-</span>
                            <span>2</span>
                            <span>+</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div>
            <hr>
            <div class="total-addtocart">
                <p>Total</p>
                <p>$1820</p>
            </div>
            <hr>
            <p>Shipping, Taxes and discounts will be calculated at checkout</p>
        </div>
        <div class="btn-group">
            <a class="custombtn ptc" href="checkout.php">Proceed To Checkout</a>
        </div>
        <div class="btn-group">
            <a class="custombtn ptc mt-5" href="cart.php">View Cart</a>
        </div>
    </section>
</section>
<!-- Product Detail End Here -->

<!-- product page tabs section start here -->

<section class="product_tabs_section">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="desc-tab" data-toggle="tab" href="#desc" role="tab" aria-controls="desc"
                    aria-selected="true">Product Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="ship-tab" data-toggle="tab" href="#ship" role="tab" aria-controls="ship"
                    aria-selected="false">Shipping Details</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="Reviews-tab" data-toggle="tab" href="#Reviews" role="tab"
                    aria-controls="Reviews" aria-selected="false">Reviews</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="desc" role="tabpanel" aria-labelledby="desc-tab">
                <p>
                    Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam
                    dolor, elementum etos lobortis des mollis ut risus.
                    Sedcus faucibus an sullamcorper mattis drostique des commodo pharetras loremos.Donec pretium egestas
                    sapien et mollis.

                </p>
                <strong>
                    Lorem ipsum dolor sit amet
                </strong>
                <p>
                    Sonsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                    enim ad minim veniam, quis nostrud exercitation ullamco
                    laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                    velit esse cillum dolore eu fugiat nulla pariatur.

                </p>
                <strong>
                    Busey ipsum dolor sit amet
                </strong>
                <p>
                    Cupcake ipsum dolor. Sit amet marshmallow topping cheesecake muffin. Halvah croissant candy canes
                    bonbon candy. Apple pie jelly beans topping carrot cake
                    danish tart cake cheesecake. Muffin danish chocolate soufflé pastry icing bonbon oat cake. Powder
                    cake jujubes oat cake. Lemon drops tootsie roll
                    marshmallow halvah carrot cake.

                </p>
                <strong>
                    Sample Paragraph Text
                </strong>
                <p>
                    Praesent vestibulum congue tellus at fringilla. Curabitur vitae semper sem, eu convallis est. Cras
                    felis nunc commodo eu convallis vitae interdum non nisl.
                    Maecenas ac est sit amet augue pharetra convallis nec danos dui. Cras suscipit quam et turpis
                    eleifend vitae malesuada magna congue. Damus id ullamcorper
                    neque. Sed vitae mi a mi pretium aliquet ac sed elit. Pellentesque nulla eros accumsan quis justo at
                    tincidunt lobortis denimes loremous. Suspendisse
                    vestibulum lectus in lectus volutpat, ut dapibus purus pulvinar. Vestibulum sit amet auctor ipsum.
                </p>
            </div>
            <div class="tab-pane fade" id="ship" role="tabpanel" aria-labelledby="ship-tab">
                <p>
                    Returns policy
                </p>
                <p>
                    You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay
                    the return shipping costs if the return is a result of our
                    error (you received an incorrect or defective item, etc.).
                </p>
                <p>
                    You should expect to receive your refund within four weeks of giving your package to the return
                    shipper, however, in many cases you will receive a refund more
                    quickly. This time period includes the transit time for us to receive your return from the shipper
                    (5 to 10 business days), the time it takes us to process your
                    return once we receive it (3 to 5 business days), and the time it takes your bank to process our
                    refund request (5 to 10 business days).
                </p>
                <p>
                    If you need to return an item, simply login to your account, view the order using the 'Complete
                    Orders' link under the My Account menu and click the Return
                    Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the
                    returned item.
                </p>
                <p>
                    Shipping details
                </p>
                <p>
                    We can ship to virtually any address in the world. Note that there are restrictions on some
                    products, and some products cannot be shipped to international destinations.
                </p>
                <p>
                    When you place an order, we will estimate shipping and delivery dates for you based on the
                    availability of your items and the shipping options you choose.
                    Depending on the shipping provider you choose, shipping date estimates may appear on the shipping
                    quotes page.
                </p>
            </div>
            <div class="tab-pane fade" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                <div class="">
                    <div>
                        <h4 class="cusrev">
                            Customer Reviews
                        </h4>
                        <div class="review-content">
                            <div>
                                <div class="product_stars_icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <span class="bo2r">Based on 2 reviews</span>
                            </div>
                            <div>
                                <button class="custombtn reviewbtn">Write a Review</button>
                            </div>
                        </div>
                        <div>
                            <p>
                                Write a review
                            </p>
                            <form  class="review_form">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="inputname">Name</label>
                                            <input type="text" class="form-control" id="inputname" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="inputemail">Email</label>
                                            <input type="email" class="form-control" id="inputemail" required="">
                                        </div>
                                    </div>
                                </div>





                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="inputcity">Review Title</label>
                                            <input type="text" class="form-control" id="inputcity" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Body of Review (1500)</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="8"></textarea>
                                        </div>
                                    </div>


                                </div>
                                <div class="row align-items-center">

                                    <div class="col-md-4 text-left">
                                        <input class="contact-submit custombtn" type="submit" value="Submit Review">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="product_stars_icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div>
                                <p class="inital_para">
                                    Consequat ac felis donec
                                </p>
                                <p class="review_date">
                                    Setson on july-29-2021
                                </p>

                            </div>
                            <div class="review_detail">
                                <p class="review_botm_para">
                                    Pretium lectus quam id leo in vitae turpis massa sed. At lectus urna duis convallis
                                    convallis tellus.
                                </p>
                                <p class="small_txt">
                                    <small>Report as inappropriate</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="product_stars_icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <div>
                            <div>
                                <p class="inital_para">
                                    Consequat ac felis donec
                                </p>
                                <p class="review_date">
                                    Setson on july-29-2021
                                </p>

                            </div>
                            <div class="review_detail">
                                <p class="review_botm_para">
                                    Pretium lectus quam id leo in vitae turpis massa sed. At lectus urna duis convallis
                                    convallis tellus.
                                </p>
                                <p class="small_txt">
                                    <small>The review has been reported</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product page tabs section end here -->
<!-- section wine taste like start here -->
<section class="wine_taste_like_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="wine_taste_sec">
                    <h3>
                        What does this wine taste like ?
                    </h3>
                    <div class="progress_bar_txt">
                        <p>
                            Light
                        </p>
                        <p>
                            Bold
                        </p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress_bar_txt">
                        <p>
                            Smooth
                        </p>
                        <p>
                            Tanic
                        </p>
                    </div>
                    <div class="progress progress_2">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="progress_bar_txt">
                        <p>
                            Dry
                        </p>
                        <p>
                            Sweet
                        </p>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div>
                    <h3>
                        WINE LOVERS TASTE SUMMARY
                    </h3>
                    <p>
                        The taste profile of Martinelli Vigneto di Evo
                        Zinfandel is based on 429 user reviews
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- section wine taste like end here -->

<section class="food_that_good_sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div>
                    <h3>
                        Food that goes well
                        with this wine
                    </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit,sed do eiusmod tempor
                        incididunt ut labore et dolore.

                    </p>
                    <p>
                        Are you cooking something else? Search
                        for wines by food pairings
                    </p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7">
                <div class="row">
                    <div class="col-md-2">
                        <img src="img/pngegg4.png" class="img-fluid ftgw" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="img/pngegg3.png" class="img-fluid ftgw" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="img/pngegg2.png" class="img-fluid ftgw" alt="">
                    </div>
                    <div class="col-md-2">
                        <img src="img/pngegg.png" class="img-fluid ftgw" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                <div class="product_name">
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
                <div class="product_name">
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
                <div class="product_name">
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
                <div class="product_name">
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
                <div class="product_name">
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

<!-- Recommended Product Sec Start Here -->
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
                    <div class="product_name">
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
                    <div class="product_name">
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
                    <div class="product_name">
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
                    <div class="product_name">
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
<!-- Recommended Product Sec End Here -->

<!-- header section-->
<?php include 'inc/footer.php'; ?>
<!-- header section-->