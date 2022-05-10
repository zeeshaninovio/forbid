<?php include 'inc/app.php'; ?>

<!--    Custom CSS-->
<link rel="stylesheet" href="css/signin.css">
<!--    Custom CSS-->
<!-- contact us page start here -->
<section class="contact-us-page signin_sec">
    <section class="section-head">
        <div class="head">
            <h4>Sign In</h4>
            <p>
                Home / Sign In
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
                                <div class="col-lg-6">
                                    <h5>Sign In</h5>
                                </div>
                                <div class="col-lg-6">
                                    <p class="haveacc">Does'nt Have an account? <a href="signup.php">Sign Up</a>
                                    </p>
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
                                        <label for="inputpassword">Password</label>
                                        <input type="password" class="form-control" id="inputpassword" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="haveacc"><a href="forgetpassword.php">Forgets Password?</a> </p>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="form-group signin">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me">Remember Me</label>
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="checkbox" id="monthlynews">
                                        <label class="monthys" for="monthlynews">Remember Me</label>
                                    </div> -->
                                </div>
                                <div class="col-md-4 text-right">
                                    <a type="submit" class="custombtn" href="userprofile.php">SIGN IN
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