<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">

<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/sweetalert/sweetalert.css" />

<!-- MAIN CSS -->
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
<div id="main-content">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="row">
                <div class="col-xl-12">
                    <hr>
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h1>Gerçekleşen Seferler</h1>
                            <hr>

                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom table-striped">
                                    <thead>
                                        <tr>
                                            <th>SEVK_TARIHI</th>
                                            <th>CARI_KODU</th>
                                            <th>CARI_ADI</th>
                                            <th>MAMUL_ADI</th>
                                            <th>SEVKEDILEN_MIKTAR_KG</th>
                                            <th>SEVK_YERI</th>
                                            <th>PROJE_KODU</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>SEVK_TARIHI</th>
                                            <th>CARI_KODU</th>
                                            <th>CARI_ADI</th>
                                            <th>MAMUL_ADI</th>
                                            <th>SEVKEDILEN_MIKTAR_KG</th>
                                            <th>SEVK_YERI</th>
                                            <th>PROJE_KODU</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($veri as $rs){?>
                                        <tr>
                                            <td><?=$rs->SEVK_TARIHI?></td>
                                            <td><?=$rs->CARI_KODU?></td>
                                            <td><?=$rs->CARI_ADI?></td>
                                            <td><?=$rs->MAMUL_ADI?></td>
                                            <td><?=$rs->SEVKEDILEN_MIKTAR_KG?></td>
                                            <td><?=$rs->SEVK_YERI?></td>
                                            <td><?=$rs->PROJE_KODU?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/libscripts.bundle.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/vendorscripts.bundle.js"></script>

    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/datatablescripts.bundle.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->



    <!-- page js file -->
    <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/mainscripts.bundle.js"></script>
    <script src="<?=base_url()?>assets/yeni_tema/js/pages/tables/jquery-datatable.js"></script>
