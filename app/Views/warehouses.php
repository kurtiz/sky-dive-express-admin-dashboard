<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?= $this->include("widgets/head"); ?>
<body>
<!-- page css  -->
<link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/libs/apex-charts/apex-charts.css"/>
<link rel="stylesheet" href="<?= base_url() ?>/public/assets/vendor/css/pages/card-analytics.css"/>
<!-- page css -->

<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
    <div class="layout-container">

        <!-- Menu -->
        <?= $this->include("widgets/sidebar") ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->
            <?= $this->include("widgets/topbar") ?>
            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Warehouse</span></h4>
                    <div class="row">
                        <!-- DataTable with Buttons -->
                        <div class="card p-2">
                            <div class="card-datatable table-responsive">
                                <table id="warehouse_table" class="table border-top">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>Branch</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    if (!empty($warehouses)):
                                        foreach($warehouses as $rows):
                                    ?>
                                    <tr>
                                        <td></td>
                                        <td><?=$rows["warehouse_branch"]?></td>
                                        <td><?=$rows["warehouse_email"]?></td>
                                        <td><?=$rows["warehouse_mobile"]?></td>
                                        <td>
                                            <div class="table-actions">
                                                <a href="javascript:edit()"><i
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Edit"
                                                            class="fas fa-edit text-green"></i></a>
                                                <a href="javascript:void(0)"><i
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="View" onclick=""
                                                            class="fas fa-eye text-blue"></i></a>
                                                <a href="javascript:sendPrint()"><i
                                                            data-toggle="tooltip" data-placement="top"
                                                            title="Print"
                                                            class="fa fa-print text-yellow"></i></a>
                                                <!--                                                --><?php //if (isset($user_role_permissions)):?>
                                                <!--                                                    --><?php //if ($user_role_permissions[2]['state'] == "true"):?>
                                                <a href="javascript:delete_sale()">
                                                    <? //= $row['sales_id'] ?><!--)">-->
                                                    <i data-toggle="tooltip" data-placement="top" title="Delete"
                                                       class="fas fa-trash text-red"></i></a>
                                                <!--                                                    --><?php //endif; ?>
                                                <!--                                                --><?php //endif; ?>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    endforeach;
                                    endif;
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <!--/ DataTable with Buttons -->
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <?= $this->include("widgets/footer") ?>
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
<script src="<?= base_url() ?>/public/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>/public/assets/vendor/libs/hammer/hammer.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/typeahead-js/typeahead.js"></script>

<script src="<?= base_url() ?>/public/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-responsive/datatables.responsive.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-buttons/datatables-buttons.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/jszip/jszip.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/pdfmake/pdfmake.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-buttons/buttons.html5.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-buttons/buttons.print.js"></script>
<!-- Flat Picker -->
<script src="<?= base_url() ?>/public/assets/vendor/libs/moment/moment.js"></script>
<!-- Row Group JS -->
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-rowgroup/datatables.rowgroup.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.js"></script>
<!-- Form Validation -->
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js"></script>
<script src="<?= base_url() ?>/public/assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>/public/assets/js/main.js"></script>

<!-- Page JS -->
<!--<script src="--><?// //=base_url()?><!--/public/assets/js/tables-datatables-basic.js"></script>-->
<script>
    let table = $('#warehouse_table').DataTable({
        responsive: true,
        dom: 'Bflrtip',
        buttons: [
            // 'copy', 'csv', 'excel', 'pdf',
            {
                extend: 'copyHtml5',
                text: '<i class="fas fa-copy"></i>Copy',
                titleAttr: 'Copy',
                className: 'btn btn-secondary',
                attr: {
                    id: 'copy_btn'
                }
            }, {
                extend: 'excelHtml5',
                text: '<i class="fas fa-file-excel"></i>Excel',
                titleAttr: 'Excel',
                className: 'btn btn-success',
                attr: {
                    id: 'xcel_btn'
                }
            }, {
                extend: 'csvHtml5',
                text: '<i class="fas fa-file-text"></i>CSV',
                titleAttr: 'CSV',
                className: 'btn btn-info',
                attr: {
                    id: 'csv_btn'
                }
            }, {
                extend: 'pdfHtml5',
                text: '<i class="fas fa-file-pdf"></i>PDF',
                titleAttr: 'PDF',
                className: 'btn btn-primary',
                attr: {
                    id: 'pdf_btn'
                }
            }, {
                extend: 'print',
                text: '<i class="fa fa-print"></i>Print',
                titleAttr: 'Print',
                className: 'btn btn-dark',
                attr: {
                    id: 'print_btn'
                },
                repeatingHead: {
                    <?php if (isset($store_data->logo)):?>
                    logo: '<?=$store_data->logo?>',
                    <?php else:?>
                    logo: '<?=base_url()?>/public/favicon.ico',
                    <?php endif;?>
                    logoPosition: 'right',
                    logoStyle: '',
                    title: '<h3>Enter stuff here</h3>'
                },
            },
        ],
        "order": [
            [0, "desc"]
        ],

        'aoColumnDefs': [{
            'bSortable': false,
            'aTargets': ['nosort'],

        }]

    });
    $(document).ready(function () {

        $("#copy_btn").removeClass("dt-button buttons-copy buttons-html5");
        $("#xcel_btn").removeClass("dt-button buttons-excel buttons-html5");
        $("#csv_btn").removeClass("dt-button buttons-excel buttons-html5");
        $("#pdf_btn").removeClass("dt-button buttons-excel buttons-html5");
        $("#print_btn").removeClass("dt-button buttons-excel buttons-html5");
        $("#warehouse_table_filter").addClass("float-end");
        $(".pagination").eq(0).addClass("float-end");

    });

    /**
     *
     * @param {string | int | any} id
     */
    function edit(id) {
        let domain = $("#domain").prop("href");

        //  Shows Pop Up to confirm edit event
        Swal.fire({
            title: 'Are you sure you want to edit this product?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Yes`,
            denyButtonText: `No`,
        }).then((result) => {
            //  when confirm button (yes) is clicked
            if (result.isConfirmed) {
                // shows loading screen overlay
                loading_overlay(1)
                // redirects to the edit page
                window.location.assign(domain + "/store/sales/edit/" + id)
            } else if (result.isDenied) { // when the denied button (no) is clicked
                // Denial message pop up
                Swal.fire('Edit Discarded', '', 'info');
            }
        });
    }

    function sendPrint(id) {
        let domain = $("#domain").prop("href");

        //  Shows Pop Up to confirm edit event
        Swal.fire({
            title: 'Are you sure you want to print this receipt?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Yes`,
            denyButtonText: `No`,
        }).then((result) => {
            //  when confirm button (yes) is clicked
            if (result.isConfirmed) {
                // shows loading screen overlay
                loading_overlay(1)
                // redirects to the edit page
                window.location.assign(domain + "/store/print/receipt/" + id)
            } else if (result.isDenied) { // when the denied button (no) is clicked
                // Denial message pop up
                Swal.fire('Print Discarded', '', 'info');
            }
        });
    }

    /**
     * sends a post request to delete a product for the list
     * @param {string | int | any} id the id of the product to be deleted
     */
    function delete_sale(id) {
        let domain = $("#domain").prop("href");
        url = (domain + "/store/sales/delete/" + id);

        //  Shows Pop Up to confirm edit event
        Swal.fire({
            title: 'Are you sure you want to delete this sales record?',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: `Yes`,
            denyButtonText: `No`,
        }).then((result) => {
            //  when confirm button (yes) is clicked
            if (result.isConfirmed) {
                // post request to delete product
                $.post(url, function (data) {
                    data = JSON.parse(data);
                    if (data.msg === "success") {

                        let table = $("#sales_data_table");
                        let data_table = table.dataTable();
                        let index = findRecordRow(table, id);
                        data_table.fnDeleteRow(index);

                        $.toast({
                            text: "Record has been successfully deleted",
                            showHideTransition: 'fade',
                            icon: 'success',
                            position: "top-right",
                            bgColor: '#2dce89',
                            textColor: 'white'
                        });

                    } else {
                        $.toast({
                            text: "Record could not be deleted",
                            showHideTransition: 'fade',
                            icon: 'success',
                            position: "top-right",
                            bgColor: '#f5365c',
                            textColor: 'white'
                        });
                    }
                })

            } else if (result.isDenied) { // when the denied button (no) is clicked
                // Denial message pop up
                Swal.fire('Deletion Discarded', '', 'info')
            }
        });
    }

    /**
     *
     * @param element {object | any} the element
     * @param id the id of the product to be deleted
     * @returns {number} returns the index of the row of the product to be deleted
     */
    function findRecordRow(element, id) {
        table = element.dataTable();
        table = table.fnGetData();
        let index;
        for (i = 0; i < table.length; i++) {
            console.log(table[i].DT_RowId)
            if (table[i].DT_RowId === "sale" + id) {
                index = i;
                break;
            }
        }
        return index;
    }

</script>

</body>
</html>
<?= $this->endSection(); ?>
