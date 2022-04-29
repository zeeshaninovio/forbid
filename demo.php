<div class="row profile-row">
            <div class="col-lg-3">
                <div class="profile-tabs-wrapper">
                    <div class="img-and-username-wrapper">
                        <div class="profile-img">
                            <figure>
                                <img src="assets/images/profile/profile.png" class="img-fluid" alt="">
                            </figure>
                            <div class="edit-img">
                                <a href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="username mt-4">
                            <h3 class="username">John Doe</h3>
                        </div>
                    </div>
                    <div class="profile-links-wrapper">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="true">Account</a>
                            <a class="nav-link" id="v-pills-order-tab" data-toggle="pill" href="#v-pills-order" role="tab" aria-controls="v-pills-order" aria-selected="false">My Order</a>
                            <a class="nav-link" id="v-pills-wishlist-tab" data-toggle="pill" href="#v-pills-wishlist" role="tab" aria-controls="v-pills-wishlist" aria-selected="false">My Wishlist</a>
                            <a class="nav-link" id="v-pills-security-tab" data-toggle="pill" href="#v-pills-security" role="tab" aria-controls="v-pills-security" aria-selected="false">Security</a>
                            <a class="nav-link" id="v-pills-Payment-tab" data-toggle="pill" href="#v-pills-Payment" role="tab" aria-controls="v-pills-Payment" aria-selected="false">Payment</a>
                            <a class="nav-link" id="v-pills-Address-tab" data-toggle="pill" href="#v-pills-Address" role="tab" aria-controls="v-pills-Address" aria-selected="false">Address</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                        <div class="col-lg-10">
                            <div class="account-form-wrapper">
                                <h3 class="form-heading">Account</h3>
                                <form action="">
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="FirstName">First Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="lastName">last Name</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-lg-6">
                                            <label for="PhoneNumber">Phone Number</label>
                                            <input type="number" class="form-control">
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="Email">Email</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <button class="btn btn-submit">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-order" role="tabpanel" aria-labelledby="v-pills-order-tab">
                        <!-- orders starts here -->
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="form-heading">My Orders</h3>
                                <div class="order-table-wrapper table-responsive">
                                    <table>
                                        <tbody>
                                            <tr class="row1">
                                                <th class="order-no">OrderNo</th>
                                                <th class="order-date">Order Date</th>
                                                <th class="order-status">Status</th>
                                                <th class="order-pay">Payment Status</th>
                                                <th class="order-total">Total</th>
                                                <th class="details"></th>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td>
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a class="order-details-btn" data-toggle="modal" data-target="#exampleModalLong">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td>
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td>
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                            <tr class="row2">
                                                <td class="number">#1084598423154</td>
                                                <td class="date">04-12-21</td>
                                                <td class="status">Confirm</td>
                                                <td class="paid">Paid <i class="fa fa-check-circle" aria-hidden="true"></i>
                                                </td>
                                                <td class="total-price">$590.00</td>
                                                <td class="order-details">
                                                    <a href="#">view Details</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- pagination starts here -->
                                <div class="pagination-wrapper">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <!-- pagination starts here -->
                            </div>
                        </div>
                        <!-- orders starts here -->
                        <!-- Modal starts here-->
                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="model-header pt-5">
                                        <h5 class="modal-title" id="exampleModalLongTitle">OrderNo</h5>
                                        <h6>#1084598423154</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <h6 class="text-center mb-4">Product Detail</h6>
                                        <div class="product-deatail-wrapper my-3 active">
                                            <div class="product-img">
                                                <figure>
                                                    <img src="assets/images/profile/product.png" class="img-fluid" alt="">
                                                </figure>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">JSC FASHION WOMEN'S BAG</h5>
                                                <h6 class="product-size">X3 | 2XL | Sliver</h6>
                                            </div>
                                            <div class="product-price">
                                                <h6 class="product-price">$158.07 </h6>
                                            </div>
                                        </div>
                                        <div class="product-deatail-wrapper my-3">
                                            <div class="product-img">
                                                <figure>
                                                    <img src="assets/images/profile/product.png" class="img-fluid" alt="">
                                                </figure>
                                            </div>
                                            <div class="product-content">
                                                <h5 class="product-name">JSC FASHION WOMEN'S BAG</h5>
                                                <h6 class="product-size">X3 | 2XL | Sliver</h6>
                                            </div>
                                            <div class="product-price">
                                                <h6 class="product-price">$158.07 </h6>
                                            </div>
                                        </div>
                                        <div class="order-details">
                                            <h6 class="text-center">Order Detail</h6>
                                            <div class="order-details-wrapper mt-5">
                                                <h6><span>Date :</span> <span class="date">#10005165551651</span></h6>
                                                <h6><span>Subtotal :</span> <span class="subtotal">$785.00</span></h6>
                                                <h6><span>Tax fee :</span> <span class="tax-fee">$80.00</span></h6>
                                                <h6><span>Shipping Fee :</span> <span class="shipping-fee">$5.00</span></h6>
                                                <h6><span>Coupon Discount :</span> <span class="Coupon">$50.00</span></h6>
                                            </div>
                                        </div>
                                        <div class="order-details pb-5">
                                            <h6 class="text-center">Shipment</h6>
                                            <div class="order-details-wrapper mt-5">
                                                <h6><span>Estimated Arrival:</span> <span class="date">24 November</span></h6>
                                            </div>
                                        </div>
                                        <!-- </div> -->
                                        <!-- <div class="row">
                                           
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal ends here-->
                    </div>
                    <div class="tab-pane fade" id="v-pills-wishlist" role="tabpanel" aria-labelledby="v-pills-wishlist-tab">
                        <div class="row">
                            <div class="col-lg-12">

                                <div class="wishlist-table-wrapper">
                                    <h3 class="form-heading">My Wishlist</h3>
                                    <div class="table-responsive">
                                        <table>
                                            <tbody>
                                                <tr class="row1">
                                                    <th class="wish-img"></th>
                                                    <th class="wish-product-name">PRODUCT NAME </th>
                                                    <th class="wish-unit-price">UNIT PRICE</th>
                                                    <th class="wish-cancel"></th>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="wishlist-image">
                                                        <figure>
                                                            <img src="assets/images/profile/wishlist1.png" class="img-fluid" alt="">
                                                        </figure>
                                                    </td>
                                                    <td class="wishlist-product">
                                                        <h4>JSC FASHION WOMEN'S BAG</h4>
                                                    </td>
                                                    <td class="wishlist-price">
                                                        <h6>$158.07 </h6>
                                                    </td>
                                                    <td class="wishlist-cancel"><a href="#" class="wishlist-cancel"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="wishlist-image">
                                                        <figure>
                                                            <img src="assets/images/profile/wishlist2.png" class="img-fluid" alt="">
                                                        </figure>
                                                    </td>
                                                    <td class="wishlist-product">
                                                        <h4>JSC FASHION WOMEN'S BAG</h4>
                                                    </td>
                                                    <td class="wishlist-price">
                                                        <h6>$158.07 </h6>
                                                    </td>
                                                    <td class="wishlist-cancel"><a href="#" class="wishlist-cancel"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                </tr>
                                                <tr class="row2">
                                                    <td class="wishlist-image">
                                                        <figure>
                                                            <img src="assets/images/profile/wishlist3.png" class="img-fluid" alt="">
                                                        </figure>
                                                    </td>
                                                    <td class="wishlist-product">
                                                        <h4>JSC FASHION WOMEN'S BAG</h4>
                                                    </td>
                                                    <td class="wishlist-price">
                                                        <h6>$158.07 </h6>
                                                    </td>
                                                    <td class="wishlist-cancel"><a href="#" class="wishlist-cancel"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- pagination starts here -->
                                    <div class="pagination-wrapper mt-5">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <!-- pagination starts here -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-security" role="tabpanel" aria-labelledby="v-pills-security-tab">
                        <div class="security-form-wrapper">
                            <h3 class="form-heading">Security</h3>
                            <form action="">
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="oldpassword">Old Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="newpassword">New Password</label>
                                        <input type="password" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-lg-6">
                                        <label for="confirmpassword">Confirm Password</label>
                                        <input type="number" class="form-control">
                                    </div>
                                </div>
                                <button class="btn btn-submit">Save Changes</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="v-pills-Payment" role="tabpanel" aria-labelledby="v-pills-Payment-tab">
                        <!-- Second Tab Content Start Here -->
                        <div class="heading">
                            <h2>Card Details</h2>
                        </div>
                        <div class="row card-wrapper">
                            <div class="col-lg-8 col-md-12">
                                <form>
                                    <div class="form-group">
                                        <label for="CardNumber">Card Number</label>
                                        <input type="text">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8 p-0">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                <label class="form-check-label" for="inlineRadio1"><img class="p-4" src="assets/images/profile/1.png" alt=""></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                <label class="form-check-label" for="inlineRadio2"><img class="p-2" src="assets/images/profile/2.png" alt=""></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option2">
                                                <label class="form-check-label" for="inlineRadio3"><img class="p-3" src="assets/images/profile/3.png" alt=""></label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option2">
                                                <label class="form-check-label" for="inlineRadio4"><img src="assets/images/profile/4.png" alt=""></label>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <button class="btn-card">ADD CARD</button>
                                        </div>
                                    </div>
                                    <hr>
                                    <!-- Save Cards -->
                                    <div class="saveCards">
                                        <div class="heading">
                                            <h2>Saved Cards</h2>
                                        </div>
                                        <label class="container">
                                            <input type="radio" checked="checked" name="for-payment-radio">
                                            <span class="checkmark">
                                                <div class="card-options">
                                                    <div class="visa-card">
                                                        <div class="img-box">
                                                            <figure><img src="assets/images/profile/savedcards.png" alt=""></figure>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="card-label">My Personal Card</label>
                                                            <input type="text" class="form-control" value="**********1239">
                                                        </div>
                                                    </div>
                                                    <div class="action-btns">
                                                        <button class="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                        <div class="use-default">
                                                            <label>Use as default</label>
                                                            <span class="check-box"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </label>
                                       
                                        <label class="container mt-4">
                                            <input type="radio" name="for-payment-radio">
                                            <span class="checkmark">
                                                <div class="card-options">
                                                    <div class="visa-card">
                                                        <div class="img-box">
                                                            <figure><img src="assets/images/profile/savedcards.png" alt=""></figure>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="card-label">My Personal Card</label>
                                                            <input type="text" class="form-control" value="**********1239">
                                                        </div>
                                                    </div>
                                                    <div class="action-btns">
                                                        <button class="delete"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                        <div class="use-default">
                                                            <label>Use as default</label>
                                                            <span class="check-box"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span>
                                        </label>
                                    </div>
                                    <!-- Save Cards -->

                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12"></div>
                        </div>
                        <!-- Second Tab Content End Here -->
                    </div>
                    <div class="tab-pane fade" id="v-pills-Address" role="tabpanel" aria-labelledby="v-pills-Address-tab">
                        <div class="row">
                            <div class="col-lg-10 ">
                                <div class="address-form-wrapper">
                                    <h3 class="form-heading">Addresses</h3>
                                    <form action="">
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="FirstName">First Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="LastName">Last Name</label>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="Phone">Phone</label>
                                                <input type="number" class="form-control">
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="Email">Email</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-6">
                                                <label for="Address">Address</label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="7"></textarea>
                                            </div>
                                            <div class="col-lg-6">
                                                <label for="Apartment">Suite, Apartment, etc </label>
                                                <textarea name="" class="form-control" id="" cols="30" rows="7"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-3">
                                                <label for="City">City</label>
                                                <input type="text" class="form-control">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="State">State</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="Country/Region">Country/Region</label>
                                                <input type="email" class="form-control">
                                            </div>
                                            <div class="col-lg-3">
                                                <label for="ZipCode">Zip Code</label>
                                                <input type="email" class="form-control">
                                            </div>
                                        </div>
                                        <button class="btn btn-submit">Add Address</button>
                                    </form>
                                </div>
                                <hr>
                                <div class="saved-address">
                                    <h4 class="mb-5">Saved Address</h4>
                                    <div class="plans">
                                        <label class="plan basic-plan" for="basic">
                                            <input checked type="radio" name="plan" id="basic" />
                                            <div class="plan-content">
                                                <div class="address-info">
                                                    <h6><span>Country:</span>&nbsp; &nbsp;<span class="country">United States</span></h6>
                                                    <h6><span>Address:</span>&nbsp; &nbsp;<span class="address">10515 Fox Ave Fairdale, Kentucky(KY), 40118</span></h6>
                                                    <h6><span>Phone:</span>&nbsp; &nbsp;<span class="phone">+44-123-456-789</span></h6>
                                                    <h6><span>State:</span>&nbsp; &nbsp;<span class="states">Texas</span></h6>
                                                </div>
                                                <div class="edits text-right">
                                                    <div class="update">
                                                        <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                    <h6>Use as default</h6>
                                                </div>
                                            </div>
                                        </label>
                                        <label class="plan complete-plan" for="complete">
                                            <input type="radio" id="complete" name="plan" />
                                            <div class="plan-content">
                                                <div class="address-info">
                                                    <h6><span>Country:</span>&nbsp; &nbsp;<span class="country">United States</span></h6>
                                                    <h6><span>Address:</span>&nbsp; &nbsp;<span class="address">10515 Fox Ave Fairdale, Kentucky(KY), 40118</span></h6>
                                                    <h6><span>Phone:</span>&nbsp; &nbsp;<span class="phone">+44-123-456-789</span></h6>
                                                    <h6><span>State:</span>&nbsp; &nbsp;<span class="states">Texas</span></h6>
                                                </div>
                                                <div class="edits text-right">
                                                    <div class="update">
                                                        <a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                        <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                    </div>
                                                    <h6>Use as default</h6>
                                                </div>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>