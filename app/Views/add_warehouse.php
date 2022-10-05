<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?= $this->include("widgets/head"); ?>
<body>
<!-- page css  -->

<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css">
<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css">
<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css">
<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css">
<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/flatpickr/flatpickr.css" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
<link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/libs/toastr/toastr.css"/>
<link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/libs/animate-css/animate.css"/>
<!-- page css -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

        <!-- Menu -->
        <?=$this->include("widgets/sidebar")?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <?= $this->include("widgets/topbar")?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Warehouse/</span> Add Warehouse</h4>
                    <div class="card mb-4">
                        <h5 class="card-header">Enter Warehouse Info</h5>
                        <form id="" class="card-body" method="post">
                            <div class="row g-3 mb-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="branch">Branch Name</label>
                                    <input type="text" required name="branch" id="branch" class="form-control" placeholder="branch" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="email">Contact Email</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" required name="email" id="email" class="form-control" placeholder="email" aria-label="john.doe" aria-describedby="multicol-email2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="mobile">Contact Number</label>
                                    <input type="text" required name="mobile" id="mobile" class="form-control phone-mask" placeholder="mobile" aria-label="" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="address">Address</label>
                                    <input type="text" required name="address" id="address" class="form-control" placeholder="address" />
                                </div>
                            </div>
                            <div class="pt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                <button type="reset" class="btn btn-label-secondary">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?=$this->include("widgets/footer")?>
                <!-- / Footer -->
                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>



    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>


    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>

</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?=base_url()?>/public/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/popper/popper.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/js/bootstrap.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?=base_url()?>/public/assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="<?=base_url()?>/public/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?=base_url()?>/public/assets/vendor/libs/cleavejs/cleave.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/cleavejs/cleave-phone.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/moment/moment.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/flatpickr/flatpickr.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/select2/select2.js"></script>

<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<!-- Main JS -->
<script src="<?=base_url()?>/public/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?=base_url()?>/public/assets/js/form-layouts.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/toastr/toastr.js"></script>
<script>
    "use strict";
    const formAuthentication = document.querySelector("#formWarehouse");
    document.addEventListener("DOMContentLoaded", function (e) {
        var t;
        formAuthentication && FormValidation.formValidation(formAuthentication, {
            fields: {
                branch: {
                    validators: {
                        notEmpty: {message: "Please enter branch"},
                        stringLength: {min: 3, message: "Branch name must be more than 3 characters"}
                    }
                },
                email: {
                    validators: {
                        notEmpty: {message: "Please enter email"},
                        emailAddress: {message: "Please enter valid email address"}
                    }
                },
                "mobile": {
                    validators: {
                        notEmpty: {message: "Please enter contact number"},
                        stringLength: {min: 0, message: ""}
                    }
                },
                address: {
                    validators: {
                        notEmpty: {message: "Please enter address"},
                        stringLength: {min: 6, message: "Password must be more than 6 characters"}
                    }
                },
                "confirm-password": {
                    validators: {
                        notEmpty: {message: "Please confirm password"},
                        identical: {
                            compare: function () {
                                return formAuthentication.querySelector('[name="password"]').value
                            }, message: "The password and its confirm are not the same"
                        },
                        stringLength: {min: 6, message: "Password must be more than 6 characters"}
                    }
                },
                terms: {validators: {notEmpty: {message: "Please agree terms & conditions"}}}
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger,
                bootstrap5: new FormValidation.plugins.Bootstrap5({eleValidClass: "", rowSelector: ".mb-3"}),
                submitButton: new FormValidation.plugins.SubmitButton,
                defaultSubmit: new FormValidation.plugins.DefaultSubmit,
                autoFocus: new FormValidation.plugins.AutoFocus
            },
            init: e => {
                e.on("plugins.message.placed", function (e) {
                    e.element.parentElement.classList.contains("input-group") && e.element.parentElement.insertAdjacentElement("afterend", e.messageElement)
                })
            }
        }), (t = document.querySelectorAll(".numeral-mask")).length && t.forEach(e => {
            new Cleave(e, {numeral: !0})
        })
    });

    <?php
    if (!empty(session()->getTempdata('success'))):
    ?>
    toastr.success("<?=session()->getTempdata('success')?>")
    <?php
    endif;
    ?>

    <?php
    if (!empty(session()->getTempdata('error'))):
    ?>
    toastr.error("<?=session()->getTempdata('error')?>")
    <?php
    endif;
    ?>

</script>
</body>
</html>
<?= $this->endSection(); ?>
