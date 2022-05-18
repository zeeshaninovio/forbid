<?php include 'inc/app.php'; ?>

<!--    Custom CSS-->
<link rel="stylesheet" href="css/contact-us.css">
<!--    Custom CSS-->
<!-- contact us page start here -->
<section class="contact-us-page">
    <section class="section-head">
        <div class="head">
            <h4>Contact Us</h4>
            <p>
                Home / Contact Us
            </p>
        </div>
    </section>
    <section class="section-detail-form">
        <div class='container'>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="contact-us-detail">
                        <h5>Contact Details </h5>
                        <p>If you still have any questions, please contact us at our request.</p>
                        <p class="bold_txt">Phone:</p>
                        <p>Toll-Free: <span>866-936-1112</span></p>
                        <p>Local: <span> 415-756-8296</span></p>
                        <p>Fax: <span>800-790-4172</span></p>
                        <p class="bold_txt">Address:</p>
                        <strong class="cofcolor">Corporate Office:</strong>
                        <span class="cofcolor"> 538 Stone
                            Road, Ste D, Benicia, CA 94510</span>
                        <p>
                            <strong class="cofcolor">Local Office:</strong>
                            <span class="cofcolor"> 909 Geary St. #324, San Francisco, CA 94109</span>
                        </p>
                        <p >State of California ID # TSW 385</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5>Contact Form</h5>
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
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Your Subject</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="1"
                                            required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">

                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"
                                            required=""></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <input type="checkbox" id="monthlynews">
                                        <label class="monthys" for="monthlynews">Click Here for Monthly
                                            Newsletter</label>
                                    </div>
                                </div>
                                <div class="col-md-4 text-right">
                                    <input class="contact-submit custombtn" type="submit" value="SEND MESSAGES">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
</section>
<!-- contact us page end here -->

<!-- footer start here -->
<?php include 'inc/footer.php'; ?>
<!-- footer end here -->