<?php include 'inc/app.php'; ?>

<!--    Custom CSS-->
<link rel="stylesheet" href="css/faqs.css">
<!--    Custom CSS-->
<!-- faqs page start here -->
<section class="faq">
    <section class="section-head">
        <div class="head">
            <h4>FAQS</h4>
            <p>
                Home / Faqs
            </p>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="faq-wrapper">
                    <div class="faq-heading-wrapper">
                        <h2>The most frequently asked questions</h2>

                    </div>
                    <div id="accordion">

                        <div class="card">
                            <div class="card-header">
                                <a class="card-link collapsed" data-toggle="collapse" href="#collapseOnes"
                                    aria-expanded="false">
                                    <i class="fa fa-angle-down"></i> How Long a bottle last?
                                </a>
                            </div>
                            <div id="collapseOnes" class="collapse" data-parent="#accordion" aria-expanded="false"
                                style="">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Luctus venenatis lectus magna fringilla urna.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                                    <i class="fa fa-angle-down"></i> What to go with the wine?
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Luctus venenatis lectus magna fringilla urna.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                                    <i class="fa fa-angle-down"></i> You want to resell the product, is that possible?
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Luctus venenatis lectus magna fringilla urna.</p>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                                    <i class="fa fa-angle-down"></i> I want to be a vine gloss franchise, Can I?
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" data-parent="#accordion">
                                <div class="card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua.
                                        Luctus venenatis lectus magna fringilla urna.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</section>
<!-- faqs page end here -->

<!-- footer start here -->
<?php include 'inc/footer.php'; ?>
<!-- footer end here -->