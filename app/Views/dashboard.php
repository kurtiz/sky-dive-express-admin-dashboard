<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?= $this->include("widgets/head"); ?>
<body>
<?= $this->include("widgets/svg"); ?>
<div class="page-wrapper">
    <?= $this->include("widgets/topbar"); ?>
    <?= $this->include("widgets/sidebar"); ?>
    <main class="page-content">
        <div class="container">
            <div class="widgets">
                <div class="widgets__row row gutter-bottom-xl">
                    <div class="col-12 col-md-6 col-xl-4 d-flex">
                        <div class="widget">
                            <div class="widget__wrapper">
                                <div class="widget__row">
                                    <div class="widget__left">
                                        <h3 class="widget__title">Deliveries</h3>
                                        <div class="widget__status-title text-grey">Total Deliveries today</div>
                                        <div class="widget__trade"><span
                                                    class="widget__trade-count">4000</span><span
                                                    class="trade-icon trade-icon--up">
                                                    <svg class="icon-icon-trade-up">
                                                        <use xlink:href="#icon-trade-up"></use>
                                                    </svg></span><span class="badge badge--sm badge--green">7%</span>
                                        </div>
                                        <div class="widget__details">
                                        </div>
                                    </div>
                                    <div class="widget__chart">
                                        <div class="widget__chart-inner">
                                            <div class="widget__chart-percentage">50<small>%</small>
                                            </div>
                                            <div class="widget__chart-caption">New Visits</div>
                                        </div>
                                        <div class="widget__chart-canvas js-progress-circle" data-value="0.5"
                                             data-color="#22CCE2">
                                            <canvas width="112" height="112"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 d-flex">
                        <div class="widget">
                            <div class="widget__wrapper">
                                <div class="widget__row">
                                    <div class="widget__left">
                                        <h3 class="widget__title">Packages</h3>
                                        <div class="widget__status-title text-grey">Total packages received today</div>
                                        <div class="widget__trade"><span
                                                    class="widget__trade-count">1000</span><span
                                                    class="trade-icon trade-icon--down">
                                                    <svg class="icon-icon-trade-down">
                                                        <use xlink:href="#icon-trade-down"></use>
                                                    </svg></span><span class="badge badge--sm badge--red">3%</span>
                                        </div>
                                        <div class="widget__details">
                                        </div>
                                    </div>
                                    <div class="widget__chart">
                                        <div class="widget__chart-inner">
                                            <div class="widget__chart-percentage">75<small>%</small>
                                            </div>
                                            <div class="widget__chart-caption">New Orders</div>
                                        </div>
                                        <div class="widget__chart-canvas js-progress-circle" data-value="0.75"
                                             data-color="#FDBF5E">
                                            <canvas width="112" height="112"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 d-flex">
                        <div class="widget">
                            <div class="widget__wrapper">
                                <div class="widget__row">
                                    <div class="widget__left">
                                        <h3 class="widget__title">Deliveries</h3>
                                        <div class="widget__status-title text-grey">Total Deliveries this Month</div>
                                        <div class="widget__trade"><span
                                                    class="widget__trade-count">$500</span><span
                                                    class="trade-icon trade-icon--up">
                                                    <svg class="icon-icon-trade-up">
                                                        <use xlink:href="#icon-trade-up"></use>
                                                    </svg></span><span class="badge badge--sm badge--green">9%</span>
                                        </div>
                                        <div class="widget__details">
                                        </div>
                                    </div>
                                    <div class="widget__chart">
                                        <div class="widget__chart-inner">
                                            <div class="widget__chart-percentage">80<small>%</small>
                                            </div>
                                            <div class="widget__chart-caption">New Sales</div>
                                        </div>
                                        <div class="widget__chart-canvas js-progress-circle" data-value="0.8"
                                             data-color="#FF3D57">
                                            <canvas width="112" height="112"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 d-flex">
                        <div class="widget">
                            <div class="widget__wrapper">
                                <div class="widget__row">
                                    <div class="widget__left">
                                        <h3 class="widget__title">Packages</h3>
                                        <div class="widget__status-title text-grey">Total packages received this month
                                        </div>
                                        <div class="widget__trade"><span
                                                    class="widget__trade-count">$500</span><span
                                                    class="trade-icon trade-icon--up">
                                                    <svg class="icon-icon-trade-up">
                                                        <use xlink:href="#icon-trade-up"></use>
                                                    </svg></span><span class="badge badge--sm badge--green">9%</span>
                                        </div>
                                        <div class="widget__details">
                                        </div>
                                    </div>
                                    <div class="widget__chart">
                                        <div class="widget__chart-inner">
                                            <div class="widget__chart-percentage">80<small>%</small>
                                            </div>
                                            <div class="widget__chart-caption"></div>
                                        </div>
                                        <div class="widget__chart-canvas js-progress-circle" data-value="0.8"
                                             data-color="#FF3D57">
                                            <canvas width="112" height="112"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<!--<script src="--><? //=base_url()?><!--/public/js/photoswipe/photoswipe-lightbox.esm.min.js"></script>-->
<!--<script src="--><? //=base_url()?><!--/public/js/photoswipe/photoswipe.esm.min.js"></script>-->
<script src="<?= base_url() ?>/public/js/gsap/gsap.min.js"></script>
<script src="<?= base_url() ?>/public/js/gsap/ScrollToPlugin.min.js"></script>
<script src="<?= base_url() ?>/public/js/gsap/ScrollTrigger.min.js"></script>
<script src="<?= base_url() ?>/public/js/vendor.min.js"></script>
<script src="<?= base_url() ?>/public/js/common.js"></script>
<script src="<?= base_url() ?>/public/plugins/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
<?= $this->endSection(); ?>
