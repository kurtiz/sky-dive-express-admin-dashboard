<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?= $this->include("widgets/head"); ?>
<body>
<!-- page css  -->

<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/flatpickr/flatpickr.css" />
<link rel="stylesheet" href="../../assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
<link rel="stylesheet" href=".<?=base_url()?>/public/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="<?=base_url()?>/public/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css">
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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Delivery/</span> Add Delivery</h4>
                    <div class="card mb-4">
                        <h5 class="card-header">Enter Delivery Details</h5>
                        <hr>
                        <form class="card-body">
                            <div class="row g-3 mb-2">
                                <div class="col-md-4">
                                    <label class="form-label" for="multicol-username">Package Code</label>
                                    <input type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-email">Destination</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="multicol-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3" id="transit">
                                <div class="col-md-12">
                                    <label class="form-label" for="multicol-phone">Transits</label>
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="multicol-first-name">Head</label>
                                    <input type="text" id="multicol-first-name" class="form-control" placeholder="Packaged" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-first-name">Location</label>
                                    <input type="text" id="multicol-first-name" class="form-control" placeholder="New Orleans" />
                                </div>
                                <!-- Datetime Picker-->
                                <div class="col-md-6 col-12 mb-2">
                                    <label for="flatpick-datetime" class="form-label">Datetime Picker</label>
                                    <input type="text" class="form-control flatpickr-datetime"
                                           placeholder="YYYY-MM-DD HH:MM AM" id="flatpick-datetime" />
                                </div>
                            </div>
                            <div class="pt-4 row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary">Cancel</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" id="newTransit" class="btn rounded-pill btn-icon btn-warning float-end">
                                        <i class="bx bx-plus"></i>
                                    </button>
                                </div>
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
<script src="<?=base_url()?>/public/assets/vendor/libs/moment/moment.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/flatpickr/flatpickr.js"></script>
<!--<script src="--><?//=base_url()?><!--/public/assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>-->
<script src="<?=base_url()?>/public/assets/vendor/libs/select2/select2.js"></script>
<script src="<?=base_url()?>/public/assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>

<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<!-- Main JS -->
<script src="<?=base_url()?>/public/assets/js/main.js"></script>

<!-- Page JS -->
<!--<script src="--><?//=base_url()?><!--/public/assets/js/form-layouts.js"></script>-->
<script>
    $(".flatpickr-datetime").flatpickr({enableTime: true, dateFormat: "Y-m-d h:i K"});


    let newline = '<div class="col-md-12">' +
        '<label class="form-label" for="multicol-first-name">Head</label>'+
        '<input type="text" id="multicol-first-name" class="form-control" placeholder="Packaged" />'+
    '</div>'+
    '<div class="col-md-6">'+
        '<label class="form-label" for="multicol-first-name">Location</label>'+
        '<input type="text" id="multicol-first-name" class="form-control" placeholder="New Orleans" />'+
    '</div>'+
    '<!-- Datetime Picker-->'+
    '<div class="col-md-6 col-12 mb-2">'+
        '<label for="flatpick-datetime" class="form-label">Datetime Picker</label>'+
        '<input type="text" class="form-control flatpickr-datetime" '+
               'placeholder="YYYY-MM-DD HH:MM AM" id="flatpick-datetime" />'+
    '</div>'+
    '</div>'

    $("#newTransit").on("click", function(){
        $("#transit").append(newline)
    })
</script>
</body>
</html>
<?= $this->endSection(); ?>
