<?= $this->extend("layouts/base"); ?>
    <!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
    <!DOCTYPE html>
    <html lang="en">
    <?= $this->include("widgets/head") ?>
    <body>
    <?= $this->include("widgets/topbar") ?>

    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url()?>/public/images/bg_5.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 pt-5 text-center">
                    <p class="breadcrumbs"><span class="me-2"><a href="<?=base_url()?>">Home <i
                                        class="fa fa-chevron-right"></i></a></span> <span>Eror 404<i
                                    class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">404</h1>
                    <p style="font-size: 30px">Page Not Found</p>
                </div>
            </div>
        </div>
    </section>
    <?= $this->include("widgets/footer") ?>
    </body>
    </html>
<?= $this->endSection(); ?>