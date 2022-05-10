<?php include 'inc/app.php'; ?>

<!--    Custom CSS-->
<link rel="stylesheet" href="css/signup.css">
<!--    Custom CSS-->
<!-- contact us page start here -->
<section class="sign-up-page">
    <section class="section-head">
        <div class="head">
            <h4>Sign Up</h4>
            <p>
                Home / Sign Up
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
                                    <h5>Sign Up</h5>
                                </div>
                                <div class="col-lg-6">
                                    <p class="haveacc">Already Have an account?<a href="signin.php">Log in</a> </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputname">First Name</label>
                                        <input type="text" class="form-control" id="inputname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputname">Last Name</label>
                                        <input type="text" class="form-control" id="inputname" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <label for="inlineFormInputGroup">Phone</label>
                                        <input type="tel" class="form-control" name="number" id="number" required="">
                                        <div class="input-group mb-2">


                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
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
                                    <div class="form-group">
                                        <label for="inputcpassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="inputcpassword" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputaddress">Address</label>
                                        <input type="text" class="form-control" id="inputaddress" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputsae">Suite, Apartment, etc </label>
                                        <input type="text" class="form-control" id="inputsae" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputcity">City</label>
                                        <input type="text" class="form-control" id="inputcity" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputcity">Country/Region</label>
                                        <input type="text" class="form-control" id="inputcity" required="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputcity">State</label>
                                        <input type="text" class="form-control" id="inputcity" required="">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="inputcity">Zip Code</label>
                                        <input type="text" class="form-control" id="inputcity" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <div class="form-group signup">
                                        <input type="checkbox" id="attc">
                                        <label for="attc">Agree to Terms & conditions</label>
                                    </div>
                                    <!-- <div class="form-group">
                                        <input type="checkbox" id="monthlynews">
                                        <label class="monthys" for="monthlynews">Agree to Terms &amp; conditions</label>
                                    </div> -->
                                </div>
                                <div class="col-md-4 text-right">
                                    <input class="contact-submit custombtn" type="submit" value="SIGN UP">
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