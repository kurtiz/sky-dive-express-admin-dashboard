<?= $this->extend("layouts/base"); ?>
<!-- NOTE This keeps this page in the "content" placeholder in the layouts/base.php file  -->
<?= $this->section("content"); ?>
<!DOCTYPE html>
<html lang="en" data-theme="light">
<?= $this->include("widgets/head"); ?>
<body>
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/datatables/css/buttons.dataTables.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/dist/css/theme.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/jquery-toast-plugin/dist/jquery.toast.min.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/sweetalerts2/dist/sweetalert2.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/datatables/css/responsive.bootstrap.css">
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/datatables/css/responsive.dataTables.css">

<?= $this->include("widgets/svg"); ?>
<div class="page-wrapper">
    <?= $this->include("widgets/topbar"); ?>
    <?= $this->include("widgets/sidebar"); ?>
    <main class="page-content">
        <div class="container">
            <div class="page-header">
                <h1 class="page-header__title">Warehouse</h1>
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
                                <li class="breadcrumbs__item active"><span class="breadcrumbs__link">Warehouses</span>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__wrapper">
                    <div class="card__container">
                    <div class="table-responsive">
                        <table id="sales_data_table" class="sales_table cell-border table-hover nowrap table">
                            <thead>
                            <tr>
                                <th>Branch</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th class="nosort">&nbsp</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr style="border-bottom: 2px" border="1">
                                <td id="">Franky Plaza</td>
                                <td><a href="mailto:franky@plaza.com" style="color: #0f38ff">franky@plaza.com</a></td>
                                <td>
                                    <a href="tel:1856984587" style="color: #0f38ff">+1856984587</a>
                                </td>
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
                                <tr border="1">
                                    <td id="">Bens Warehouse</td>
                                    <td><a href="mailto:franky@plaza.com" style="color: #0f38ff">bens@plaza.com</a></td>
                                    <td>
                                        <a href="tel:1856984587" style="color: #0f38ff">+1850384587</a>
                                    </td>
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
                            </tbody>
                        </table>
                    </div>
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

<script src="<?= base_url(); ?>/public/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/public/js/datatables.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/jszip.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/vfs_fonts.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/responsive.bootstrap.js"></script>
<script src="<?= base_url(); ?>/public/plugins/datatables/js/responsive.dataTables.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>/public/plugins/datatables/css/buttons.dataTables.min.css">
<script src="<?= base_url(); ?>/public/js/print.js"></script>
<script src="<?= base_url() ?>/public/plugins/jquery-toast-plugin/dist/jquery.toast.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    let table = $('.sales_table').DataTable({
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
