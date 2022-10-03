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
            <div class="page-header">
                <h1 class="page-header__title">Add Warehouse</h1>
            </div>
            <div class="page-tools">
                <div class="page-tools__breadcrumbs">
                    <div class="breadcrumbs">
                        <div class="breadcrumbs__container">
                            <ol class="breadcrumbs__list">
                                <li class="breadcrumbs__item">
                                    <a class="breadcrumbs__link" href="<?= base_url() ?>/dashboard">
                                        <svg class="icon-icon-home breadcrumbs__icon">
                                            <use xlink:href="#icon-home"></use>
                                        </svg>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__item disabled"><a class="breadcrumbs__link"
                                                                          href="javascript:void(0)"><span>Warehouses</span>
                                        <svg class="icon-icon-keyboard-right breadcrumbs__arrow">
                                            <use xlink:href="#icon-keyboard-right"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="breadcrumbs__item active"><span
                                            class="breadcrumbs__link">Add Warehouse</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card add-product card--content-center">
                <div class="card__wrapper">
                    <div class="card__container">
                        <form class="add-product__form">
                            <div class="col-md-12">
                                <div class="row row--md">
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Warehouse Branch</label>
                                        <div class="input-group">
                                            <input class="input" type="text" placeholder="eg. Frank Plaza" value=""
                                                   required>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Address</label>
                                        <div class="input-group">
                                                <textarea class="input" type="text"
                                                          placeholder="eg. Hayford Street, APt Suite 4, New York - USA"
                                                          required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12 form-group form-group--lg">
                                        <label class="form-label">Warehouse email</label>
                                        <div class="input-group">
                                            <input class="input" type="email" placeholder="eg. store@domain.com" value=""
                                                   required>
                                        </div>
                                    </div>
                                    <div class="add-product__submit">
                                        <div class="modal__footer-button">
                                            <button class="button button--primary button--block" data-dismiss="modal"
                                                    data-modal="#addProductSuccess"><span
                                                        class="button__text">Create</span>
                                            </button>
                                        </div>
                                        <div class="modal__footer-button">
                                            <button class="button button--secondary button--block" href=""><span
                                                        class="button__text">Cancel</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

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
