<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?= $this->include("widgets/head"); ?>
<body>
<?= $this->include("widgets/svg"); ?>
<div class="modal demo-panel modal--panel modal--right" id="demo">
    <div class="modal__overlay" data-dismiss="modal"></div>
    <div class="modal__wrap">
        <div class="modal__window scrollbar-thin" data-simplebar="data-simplebar">
            <div class="modal__content">
                <div class="modal__body">
                    <div class="modal__container">
                        <div class="row">
                            <div class="col-12 text-center mb-3">
                                <div class="theme-toggle" data-theme="light">
                                    <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g filter="url(#filter-theme0_dd)">
                                            <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                  fill="white"></path>
                                        </g>
                                        <g filter="url(#filter-theme1_dd)">
                                            <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                  fill="url(#schemePattern1)"></path>
                                        </g>
                                        <defs>
                                            <filter id="filter-theme0_dd" x="23" y="183" width="206" height="89"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                <feOffset dy="8"/>
                                                <feGaussianBlur stdDeviation="8"/>
                                                <feColorMatrix type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                         result="effect1_dropShadow"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                <feOffset dy="16"/>
                                                <feGaussianBlur stdDeviation="16"/>
                                                <feColorMatrix type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                <feBlend mode="normal" in2="effect1_dropShadow"
                                                         result="effect2_dropShadow"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow"
                                                         result="shape"/>
                                            </filter>
                                            <filter id="filter-theme1_dd" x="0" y="0" width="252" height="252"
                                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                <feOffset dy="12"/>
                                                <feGaussianBlur stdDeviation="8"/>
                                                <feColorMatrix type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.2 0"/>
                                                <feBlend mode="normal" in2="BackgroundImageFix"
                                                         result="effect1_dropShadow"/>
                                                <feColorMatrix in="SourceAlpha" type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                <feOffset dy="2"/>
                                                <feGaussianBlur stdDeviation="2"/>
                                                <feColorMatrix type="matrix"
                                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.05 0"/>
                                                <feBlend mode="normal" in2="effect1_dropShadow"
                                                         result="effect2_dropShadow"/>
                                                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow"
                                                         result="shape"/>
                                            </filter>
                                            <pattern id="schemePattern1" patternContentUnits="objectBoundingBox"
                                                     width="1" height="1">
                                                <use xlink:href="#scheme1" transform="scale(0.00142857)"></use>
                                            </pattern>
                                            <image id="scheme1" width="700" height="700"
                                                   xlink:href="img/content/demo/scheme-light.jpg"></image>
                                        </defs>
                                    </svg>
                                </div>
                                <h5>Theme Light</h5>
                            </div>
                            <div class="col-12 text-center">
                                <div class="theme-toggle" data-theme="dark">
                                    <svg viewBox="0 0 252 272" xmlns="http://www.w3.org/2000/svg"
                                         xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g filter="url(#filter-theme0_dd)">
                                            <path d="M55 199H197V221C197 221 153.752 224 126 224C98.248 224 55 221 55 221V199Z"
                                                  fill="white"></path>
                                        </g>
                                        <g filter="url(#filter-theme1_dd)">
                                            <path d="M18.235 43.2287C19.2494 23.1848 35.1848 7.24941 55.2287 6.23501C76.8855 5.13899 104.551 4 126 4C147.449 4 175.114 5.13898 196.771 6.23501C216.815 7.24941 232.751 23.1848 233.765 43.2287C234.861 64.8855 236 92.5512 236 114C236 135.449 234.861 163.114 233.765 184.771C232.751 204.815 216.815 220.751 196.771 221.765C175.114 222.861 147.449 224 126 224C104.551 224 76.8855 222.861 55.2287 221.765C35.1848 220.751 19.2494 204.815 18.235 184.771C17.139 163.114 16 135.449 16 114C16 92.5512 17.139 64.8855 18.235 43.2287Z"
                                                  fill="url(#schemePattern2)"></path>
                                        </g>
                                        <defs>
                                            <pattern id="schemePattern2" patternContentUnits="objectBoundingBox"
                                                     width="1" height="1">
                                                <use xlink:href="#scheme2" transform="scale(0.00142857)"></use>
                                            </pattern>
                                            <image id="scheme2" width="700" height="700"
                                                   xlink:href="img/content/demo/scheme-dark.jpg"></image>
                                        </defs>
                                    </svg>
                                </div>
                                <h5>Theme Dark</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__footer">
                    <div class="modal__container">
                        <button class="button button--primary button--block" data-dismiss="modal"><span
                                    class="button__text">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-wrapper">
    <main class="page-auth">
        <div class="page-auth__center">
            <div class="page-auth__screen">
                <div class="auth-logo">
                    <img class="auth-logo__icon" src="<?= base_url() ?>/public/img/content/logo.png" style="width: 120px"
                         alt="#"/>
                </div>
                <img class="page-auth__screen-bg auth-bg-image-light"
                     src="<?= base_url() ?>/public/img/content/auth-bg.jpg" alt="#">
                <img class="page-auth__screen-bg auth-bg-image-dark"
                     src="<?= base_url() ?>/public/img/content/auth-bg-dark.jpg" alt="#">
            </div>
            <div class="auth-card card">
                <div class="card__wrapper">
                    <div class="auth-card__left">
                        <div class="auth-card__logo">
                            <div class="auth-logo">
                                <img class="auth-logo__icon" src="<?= base_url() ?>/public/img/content/logo.png"
                                     style="width: 120px" alt="#"/>
                            </div>
                        </div>
                        <img class="auth-card__bg auth-bg-image-light"
                             src="<?= base_url() ?>/public/img/content/auth-bg.jpg" alt="#">
                        <img class="auth-card__bg auth-bg-image-dark"
                             src="<?= base_url() ?>/public/img/content/auth-bg-dark.jpg" alt="#">
                    </div>
                    <form class="auth-card__right" method="post">
                        <div class="auth-card__top">
                            <h1 class="auth-card__title">Welcome to the<span
                                        class="text-theme"> Dashbaord </span></h1>
                            <p class="auth-card__text">Welcome Back, Please login
                                <br>to your account.</p>
                        </div>
                        <div class="auth-card__body">
                            <div class="form-group">
                                <div class="input-group input-group--prepend"><span class="input-group__prepend">
                        <svg class="icon-icon-user">
                          <use xlink:href="#icon-user"></use>
                        </svg></span>
                                    <input class="input" name="email" type="email" placeholder="example@mail.com"
                                           required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group input-group--prepend"><span class="input-group__prepend">
                        <svg class="icon-icon-password">
                          <use xlink:href="#icon-password"></use>
                        </svg></span>
                                    <input class="input" name="password" type="password" value="" placeholder="password"
                                           required>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="form-group">
                                        <div class="input-group input-group--prepend">
<!--                                            <label class="checkbox">-->
<!--                                                <input type="checkbox" checked>-->
<!--                                                <span class="checkbox__marker">-->
<!--                                                    <span class="checkbox__marker-icon">-->
<!--                                                        <svg class="icon-icon-checked">-->
<!--                                                          <use xlink:href="#icon-checked"></use>-->
<!--                                                        </svg>-->
<!--                                                    </span>-->
<!--                                                </span>-->
<!--                                             <span class="ml-2">Remember Me</span>-->
<!--                                            </label>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="form-group">
                                        <a class="text-blue" href="javascript:void(0)">
                                            Forgot Password?
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="auth-card__bottom">
                            <div class="auth-card__buttons">
                                <div class="auth-card__button">
                                    <button onclick="javascript:location.href='<?=base_url()?>/dashboard'"
                                            class="button button--primary button--block" type="button">
                                        <span class="button__text">Login</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
<script>
    <?php
    if (!empty(session()->getTempdata('login_error'))):
    ?>
    $.toast({
        heading: 'Error',
        text: "<?=session()->getTempdata('login_error')?>",
        showHideTransition: 'fade',
        icon: 'error',
        color: '#ff2450',
        position: "top-right",
        hideAfter: 5000,
    })
    <?php
    endif;
    ?>
</script>
</body>
</html>
<?= $this->endSection(); ?>
