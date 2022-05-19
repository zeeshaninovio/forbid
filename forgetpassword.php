<?php include 'inc/app.php'; ?>

<!--    Custom CSS-->
<link rel="stylesheet" href="css/forgetpassword.css">
<!--    Custom CSS-->
<!-- contact us page start here -->
<section class="contact-us-page forget_pass_section">
    <section class="section-head">
        <div class="head">
            <h4>Forget Password</h4>
            <p>
                Home / Forget Password
            </p>
        </div>
    </section>
    <section class="section-detail-form">
        <div class='container'>
            <div class="row">
                <div class="col"></div>
                <div class="col-md-5">
                    <div class="contact-us-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Forget Password</h5>
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
                            <div class="row align-items-center mt-3">
                                <div class="col-md-8">
                                    <p class="haveacc1">6 digit code will be sent to your email</p>
                                    <small>
                                        Haven't Recieved the code? try again
                                    </small>
                                </div>
                                <div class="col-md-4 text-right">
                                    <a type="submit" class="custombtn" href="forgetpassword2.php">SEND CODE
                                        <!-- <input class="contact-submit custombtn" type="submit" value="SIGN IN"> -->
                                        <!-- <button type="submit" class="custombtn">SIGN IN</button> -->
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col"></div>
            </div>
        </div>
    </section>
</section>
<!-- contact us page end here -->

<!-- footer start here -->
<?php include 'inc/footer.php'; ?>
<!-- footer end here -->