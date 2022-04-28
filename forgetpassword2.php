<?php include 'inc/app.php'; ?>

<!--    Custom CSS-->
<link rel="stylesheet" href="css/forgetpassword.css">
<!--    Custom CSS-->
<!-- contact us page start here -->
<section class="contact-us-page">
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
                <div class="col-md-6">
                    <div class="contact-us-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Forget Password</h5>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputopassword">Old Password</label>
                                        <input type="password" class="form-control" id="inputopassword" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputnpassword">New Password</label>
                                        <input type="password" class="form-control" id="inputnpassword" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-8">

                                </div>
                                <div class="col-md-4 text-right">
                                    <a type="submit" class="custombtn" href="forgetpassword2.php">CONFIRM PASSWORD
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