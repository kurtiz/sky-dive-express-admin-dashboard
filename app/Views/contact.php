<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en">
<?= $this->include("widgets/head") ?>
<body>
<?= $this->include("widgets/preloader") ?>

<?= $this->include("widgets/topbar") ?>

<header class="page-header" data-background="<?=base_url()?>/public/images/slide01.jpg">
    <div class="container">
        <h1>Contact</h1>
        <p>Take the complexity out of customs Freight Solutions<br> with customs brokerage services</p>
    </div>
    <!-- end container -->
</header>
<!-- end page-header -->
<?php /*
<section class="content-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title">
                    <figure><img src="images/section-title-shape.png" alt="Image"></figure>
                    <h2>We’d love to hear from you</h2>
                    <p>Please send your enquiry to <u>sales@Sky Dive Express.co.uk</u>, or contact your local<br>
                        specialists using the contact details below.</p>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->
            <div class="col-lg-5 col-md-6">
                <div class="contact-box">
                    <h5>Hull Office (Head Office)</h5>
                    <address>
                        Matthew Good House, Bridgehead <br>
                        Business Park<br>
                        Phone: +44 (0)1482 325781<br>
                        Email: <a href="javascript:void(0)">shipping@Sky Dive Express.co.uk</a>
                    </address>
                    <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox=""
                       data-width="640" data-height="360" class="custom-button">FIND US ON MAP</a>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-5 -->
            <div class="col-lg-5 col-md-6">
                <div class="contact-box">
                    <h5>Immingham Office</h5>
                    <address>
                        Matthew Good House, Bridgehead <br>
                        Business Park<br>
                        Phone: +44 (0)1482 325781<br>
                        Email: <a href="javascript:void(0)">shipping@Sky Dive Express.co.uk</a>
                    </address>
                    <a href="https://www.google.com/maps/search/?api=1&query=centurylink+field" data-fancybox=""
                       data-width="640" data-height="360" class="custom-button">FIND US ON MAP</a>
                </div>
                <!-- end contact-box -->
            </div>
            <!-- end col-5 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
 */ ?>
<!-- end content-section -->
<section class="content-section" data-background="#f9f7ef">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title text-left">
                    <h6>Have Any Question?</h6>
                    <h2>If you would like to know more <br>
                        about our services, please contact <br>
                        us using this form
                    </h2>
                </div>
                <!-- end section-title -->
            </div>
            <!-- end col-12 -->

            <div class="col-12">
                <form method="post">
                    <div class="contact-form">
                        <div class="row inner">
                            <div class="form-group col-lg-4">
                                <input type="text" placeholder="Full Name">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-lg-4 col-md-6">
                                <input type="text" placeholder="Email Address">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-lg-4 col-md-6">
                                <input type="text" placeholder="Phone No.">
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-12">
                                <textarea placeholder="Message"></textarea>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group col-12">
                                <input class="custom-button" type="button" value="SEND MESSAGE">
                            </div>
                            <!-- end form-group -->
                        </div>
                        <!-- end row inner -->
                    </div>
                </form>
                <!-- end contact-form -->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
<!-- end content-section -->

<?= $this->include("widgets/footer") ?>
</body>
</html>
<?= $this->endSection(); ?>
