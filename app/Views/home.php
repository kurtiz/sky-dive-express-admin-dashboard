<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" class="light-style  customizer-hide" dir="ltr" data-theme="theme-bordered"
      data-assets-path="<?= base_url() ?>/public/assets/" data-template="vertical-menu-template-bordered">
<?= $this->include("widgets/head"); ?>
<body>
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="javascript:void(0)" class="app-brand-link gap-2">
                          <span class="app-brand-logo demo">
<!--                              <?//= $this->include("widgets/svg"); ?> -->
                          </span>
                            <span class="app-brand-text demo text-body fw-bolder">C-Panel</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome 👋</h4>
                    <p class="mb-4">Sign in to your account</p>

                    <form id="formAuthentication" class="mb-3" action="" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                   placeholder="Enter your email" autofocus>
                        </div>
                        <div class="mb-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">Password</label>
                                <a href="javascript:void(0)">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control" name="password"
                                       placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                       aria-describedby="password"/>
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button onclick="javascript:location.href='<?=base_url()?>/dashboard'"
                                    class="btn btn-primary d-grid w-100" type="button">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<script src="<?= base_url() ?>/public/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>/public/assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="<?= base_url() ?>/public/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>/public/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url() ?>/public/assets/js/pages-auth.js"></script>
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
