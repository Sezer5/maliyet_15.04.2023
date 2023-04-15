
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
                            <table style="margin-top:100px;">
                                <tr>
                                    <form action="<?=base_url()?>admin/Uretimduzenleme/Gerceklesendegerlerduzenleme2" method="post">
                                        <td>Değiştirmek İstediğiniz Veriler Kaç Ay Öncesine Ait ? </td>
                                        <?php foreach($aydegeri as $rs){?>
                                        <td><input type="text" name="aydeger" value="<?=$rs->aydegeri?>"></td>
                                        <input type="text" name="id" value="<?=$rs->Id?>" hidden>
                                        <?php }?>
                                        <td><button>Değiştir</button></td>
                                    </form>
                                </tr>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <hr>
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item">
                                        <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Gerçekleşen Üretimler</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#profile2" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Üretim Bilgisi Ekle</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home2">
                                        <div class="col-lg-12">
                                            <div class="card-box">
                                                <h1>Gerçekleşen Üretimler</h1>
                                                <hr>

                                                <div class="table-responsive">
                                                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>Tarih</th>
                                                                <th>Malzeme Kodu</th>
                                                                <th>Malzeme Adı</th>
                                                                <th>Gerçekleşen</th>
                                                                <th>Operasyon Kodu</th>
                                                                <th>Operasyon Adı</th>
                                                                <th>İstasyon Kodu</th>
                                                                <th>İstasyon Adı</th>

                                                                <th>Değiştir</th>
                                                                <th>Sil</th>

                                                            </tr>
                                                        </thead>
                                                        <tfoot>
                                                            <tr>
                                                                <th>Tarih</th>
                                                                <th>Malzeme Kodu</th>
                                                                <th>Malzeme Adı</th>
                                                                <th>Gerçekleşen</th>
                                                                <th>Operasyon Kodu</th>
                                                                <th>Operasyon Adı</th>
                                                                <th>İstasyon Kodu</th>
                                                                <th>İstasyon Adı</th>

                                                                <th>Değiştir</th>
                                                                <th>Sil</th>

                                                            </tr>
                                                        </tfoot>
                                                        <tbody>
                                                            <?php foreach($uretim as $rs){?>
                                                            <tr>
                                                                <form action="<?=base_url()?>admin/Uretimduzenleme/Uretimduzenleme_guncelle/<?=$rs->Id?>" method="post">
                                                                    <td><?=$rs->TARIH?></td>
                                                                    <td><?=$rs->MALZEME_KODU?></td>
                                                                    <td><?=$rs->MALZEME_ADI?></td>
                                                                    <td><input type="text" name="gerceklesen" value="<?=$rs->GERCEKLESEN?>" size="6"></td>
                                                                    <td><?=$rs->OPERASYON_KODU?></td>
                                                                    <td><?=$rs->OPERASYON_ADI?></td>
                                                                    <td><?=$rs->ISTASYON_KODU?></td>
                                                                    <td><?=$rs->ISTASYON_ADI?></td>
                                                                    <td><button type="submit" class="btn-success"><i class="icon-reload"></i></button></td>
                                                                </form>
                                                                <td><a href="<?=base_url()?>admin/Uretimduzenleme/Uretimduzenleme_sil/<?=$rs->Id?>"><button type="button" class="btn-danger"><i class="icon-close"></i></button></a></td>
                                                            </tr>
                                                            <?php }?>
                                                        </tbody>
                                                    </table>
                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile2">
                                        <div class="col-lg-12">
                                            <div class="card-box">
                                                <h1>Eklenen Üretim Bilgileri</h1>
                                                <hr>
                                                <table id="datatable" class=" table table-hover table-bordered" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Tarih</th>
                                                            <th>Malzeme Kodu</th>
                                                            <th>Malzeme Adı</th>
                                                            <th>Gerçekleşen</th>
                                                            <th>Operasyon Kodu</th>
                                                            <th>Operasyon Adı</th>
                                                            <th>İstasyon Kodu</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Sil</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($eklenti as $rs){?>
                                                        <tr>
                                                            <td style="width:7%"><?=$rs->TARIH?></td>
                                                            <td style="width:5%"><?=$rs->MALZEME_KODU?></td>
                                                            <td style="width:7%"><?=$rs->MALZEME_ADI?></td>
                                                            <td style="width:6%"><input type="text" name="gerceklesen" value="<?=$rs->GERCEKLESEN?>" size="6"></td>
                                                            <td style="width:5%"><?=$rs->OPERASYON_KODU?></td>
                                                            <td style="width:5%"><?=$rs->OPERASYON_ADI?></td>
                                                            <td style="width:5%"><?=$rs->ISTASYON_KODU?></td>
                                                            <td style="width:45%"><?=$rs->ISTASYON_ADI?></td>
                                                            <td style="width:10%"><a href="<?=base_url()?>admin/Uretimduzenleme/Uretimduzenleme_sil/<?=$rs->Id?>"><button type="button" class="btn-danger"><i class="ti-close"></i></button></a></td>

                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                                <hr>
                                                <h1>Üretim Ekle</h1>
                                                <hr>
                                                <table id="datatable" class=" table table-hover table-bordered" style="width:10%;">
                                                    <thead>
                                                        <tr>
                                                            <th>Örnek Excel</th>
                                                            <th>Dosya</th>
                                                            <th>Ekle</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><a href="<?=base_url()?>uploads/ornek_uretim.xlsx" download>İndir</a></td>
                                                            <form action="<?=base_url()?>admin/Uretimduzenleme/uretim_import" method="post" enctype="multipart/form-data">

                                                                <td><input type="file" name="uploadFile"></td>
                                                                <td><input type="submit" name="submit" value="Upload" /></td>
                                                            </form>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
