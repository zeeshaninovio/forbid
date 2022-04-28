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
    <section>
        <div class='container'>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="contact-us-detail">
                        <h5>Contact Details </h5>
                        <p>If you still have any questions, please contact us at our request.</p>
                        <p>Phone:</p>
                        <p>Toll-Free: <span>866-936-1112</span></p>
                        <p>Local: <span> 415-756-8296</span></p>
                        <p>Fax: <span>800-790-4172</span></p>
                        <p>Address:</p>
                        <p>Corporate Office: 538 Stone
                            Road, Ste D, Benicia, CA 94510</p>
                        <p>Local Office: 909 Geary St. #324, San Francisco, CA 94109</p>
                        <p>State of California ID # TSW 385</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-us-form">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputname">Name</label>
                                        <input type="text" class="form-control" id="inputname" required="">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="inputemail">E-mail</label>
                                        <input type="email" class="form-control" id="inputemail" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="">
                                        <label for="inlineFormInputGroup">Phone Number</label>
                                        <input type="tel" class="form-control" name="number" id="number"
                                            placeholder="+ 123 456 789" required="">
                                        <div class="input-group mb-2">


                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="">
                                        <label for="inputdate">Date</label>
                                        <input type="text" class="form-control" name="inputdate" id="inputdate"
                                            placeholder="mm/dd/yyyy" required="">
                                        <div class="input-group mb-2">


                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Message *</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"
                                            required="" placeholder="Message"></textarea>
                                    </div>
                                </div>
                            </div>
                            <input class="contact-submit" type="submit" value="book online now">
                        </form>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </section>
</section>
<!-- contact us page end here -->

<!-- footer start here -->
<?php include 'inc/footer.php'; ?>
<!-- footer end here -->