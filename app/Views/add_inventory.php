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
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Inventory/</span> Add Inventory</h4>
                    <div class="card mb-4">
                        <h5 class="card-header">Enter Inventory Details</h5>
                        <hr>
                        <form class="card-body">
                            <h4>Sender Details Details</h4>
                            <div class="row g-3 mb-2">
                                <div class="col-md-8">
                                    <label class="form-label" for="multicol-username">Sender Name</label>
                                    <input type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label" for="multicol-email">Sender Contact Email</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="multicol-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <label class="form-label" for="multicol-phone">Sender Contact Number</label>
                                    <input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                </div>
                                <div class="col-md-8">
                                    <label class="form-label" for="multicol-first-name">Sender Address</label>
                                    <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
                                </div>
                            </div>

                            <hr>
                            <h5>Recipient Details</h5>
                            <div class="row g-3 mb-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-username">Recipient Name</label>
                                    <input type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-email">Recipient Contact Email</label>
                                    <div class="input-group input-group-merge">
                                        <input type="text" id="multicol-email" class="form-control" placeholder="john.doe" aria-label="john.doe" aria-describedby="multicol-email2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-phone">Recipient Contact Number</label>
                                    <input type="text" id="multicol-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-first-name">Recipient Address</label>
                                    <input type="text" id="multicol-first-name" class="form-control" placeholder="John" />
                                </div>
                            </div>

                            <hr>
                            <h5>Item Details</h5>
                            <div class="row g-3 mb-2">
                                <div class="col-md-12">
                                    <label class="form-label" for="multicol-username">Item Name</label>
                                    <input type="text" id="multicol-username" class="form-control" placeholder="Books" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="multicol-email">Item Description</label>
                                    <div class="input-group input-group-merge">
                                        <textarea type="text" id="multicol-email" class="form-control"
                                                  placeholder="brown, fragile, etc." aria-label="john.doe"
                                                  aria-describedby="multicol-email2" ></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-phone">Item Weight (kg)</label>
                                    <input type="number" step="0.01" id="multicol-phone" class="form-control phone-mask"
                                           placeholder="25" aria-label="658 799 8941" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="multicol-first-name">Item Dimension (cm)</label>
                                    <input type="text" id="multicol-first-name" class="form-control" placeholder="5x6" />
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
</body>
</html>
<?= $this->endSection(); ?>
