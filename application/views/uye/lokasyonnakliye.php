<div class="content-page">
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
    <div id="main-content">
        <div class="container-fluid">
            <br>
            <div class="row clearfix">

                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Basic Table <small>Basic example without any additional modification classes</small> </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                    <thead>
                                        <tr>
                                            <th>İncele</th>
                                            <th>Şirket</th>
                                            <th>Şehir</th>
                                            <th>İlçe</th>
                                            <th>Personel Maaşı</th>
                                            <th>Kasko</th>
                                            <th>Trafik Sigortası</th>
                                            <th>MTV</th>
                                            <th>Bakım Onarım</th>
                                            <th>Amortisman</th>
                                            <th>Yakıt Kull. Bedeli</th>
                                            <th>Lastik Kull. Bedeli</th>
                                            <th>Tamir & Bakım</th>
                                            <th>HGS / OGS</th>
                                            <th>Harcırah</th>
                                            <th>Değişen Giderler <br> Toplamı</th>
                                            <th>Ton başı maliyet</th>
                                            <th>Araç başı kârlılık</th>
                                            <th>Ton başına kârlılık</th>
                                            <th>Sil</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>İncele</th>
                                            <th>Şirket</th>
                                            <th>Şehir</th>
                                            <th>İlçe</th>
                                            <th>Personel Maaşı</th>
                                            <th>Kasko</th>
                                            <th>Trafik Sigortası</th>
                                            <th>MTV</th>
                                            <th>Bakım Onarım</th>
                                            <th>Amortisman</th>
                                            <th>Yakıt Kull. Bedeli</th>
                                            <th>Lastik Kull. Bedeli</th>
                                            <th>Tamir & Bakım</th>
                                            <th>HGS / OGS</th>
                                            <th>Harcırah</th>
                                            <th>Değişen Giderler <br> Toplamı</th>
                                            <th>Ton başı maliyet</th>
                                            <th>Araç başı kârlılık</th>
                                            <th>Ton başına kârlılık</th>
                                            <th>Sil</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach($sbt as $ps){?>
                                        <tr>
                                            <form action="<?=base_url()?>uye/Lokasyonnakliye/lokasyonnakliye_detay/<?=$ps->Id?>" method="post">

                                                <td><button class="waves-effect waves-light" style="background-color:#364db3;width:100%;"><i class="fa fa-search" style="color:white"></i> </button></td>
                                                <td><?=$ps->sirket?></td>
                                                <td><?=$ps->sehir?></td>
                                                <td><?=$ps->ilce?></td>
                                                <td><?=number_format($ps->personelmaas, 2, '.','');?></td>
                                                <td><?=number_format($ps->kasko, 2, '.','');?></td>
                                                <td><?=number_format($ps->trafiksigorta, 2, '.','');?></td>
                                                <td><?=number_format($ps->mtv, 2, '.','');?></td>
                                                <td><?=number_format($ps->bakimonarimaylik, 2, '.','');?></td>
                                                <td><?=number_format($ps->amortismanaylik, 2, '.','');?></td>
                                                <td><?=number_format($ps->yakitkullanim, 2, '.','');?></td>
                                                <td><?=number_format($ps->lastikkullanim, 2, '.','');?></td>
                                                <td><?=number_format($ps->tamirbakim, 2, '.','');?></td>
                                                <td><?=number_format($ps->hgsogs, 2, '.','');?></td>
                                                <td><?=number_format($ps->harcirah, 2, '.','');?></td>
                                                <td><?=number_format($ps->degisengiderlertop, 2, '.','');?></td>
                                                <td><?=number_format($ps->tonbasimaliyet, 2, '.','');?></td>
                                                <td><?=number_format($ps->aracbasikar, 2, '.','');?></td>
                                                <td><?=number_format($ps->tonbasikar, 2, '.','');?></td>
                                            </form>
                                            <td><a href="<?=base_url()?>uye/lokasyonnakliye/lokasyon_sil/<?=$ps->Id?>"><button class="waves-effect waves-light" style="background-color:red;width:100%;"><i class="fa fa-minus" style="color:white"></i> </button></a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <h1>Nakliye Lokasyonu Girişi</h1>
                    <hr>
                    <table class="table-responsive table-bordered">

                        <form action="<?=base_url()?>uye/lokasyonnakliye/lokasyonnakliye_ekle" method="post">
                            <tr>
                                <td colspan="2">Şirket:</td>
                                <td colspan="2">
                                    <select name="sirket" style="width:100%;">
                                        <option>-- Şirket Seçiniz --</option>
                                        <?php foreach($cari_adi as $cari){ ?>
                                        <option value="<?=$cari->cari_kodu?>"><?=$cari->cari_adi?></option>

                                        <?php }?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Şehir</td>
                                <td>
                                    <select id='sel_city' name="sehirid" style="width:180px;">
                                        <option>-- Şehir Seçiniz --</option>
                                        <?php
           foreach($cities as $city){ ?>
                                        <option value="<?=$city['Id']?>"><?=$city['adi']?></option>

                                        <?php }?>
                                    </select>
                                </td>
                                <td>İlçe</td>
                                <td>
                                    <select id='sel_depart' style="width:180px;" name="ilceid">
                                        <option>-- İlçe Seçiniz --</option>
                                        <?php
           foreach($towns as $town){?>
                                        <option value=".$town['Id']."><?=$town['adi']?></option>
                                        <?php  }
           ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Yapılan KM</td>
                                <td><input type="text" name="yolkm" style="width:100%;"></td>
                                <td>Ortalama Yakıt Tüketimi</td>
                                <td><input type="text" name="yakittuk" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td>Yolculuk Süresi(GÜN)</td>
                                <td><input type="text" name="yolsure" style="width:100%;"></td>
                                <td>Bakım Onarım (Görünmeyen Gider)</td>
                                <td><input type="text" name="bakimonarim" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td>Araç Amortismanı</td>
                                <td><input type="text" name="amortisman" style="width:100%;"></td>
                                <td>Ömrü</td>
                                <td><input type="text" name="omur" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td>Çekici Yağ Bakım (KM)</td>
                                <td><input type="text" name="cekiciyagkm" style="width:100%;"></td>
                                <td>Çekici Yağ Bakım (Fiyat)</td>
                                <td><input type="text" name="cekiciyagfiyat" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td>Dorse-Silobas Bakım (KM)</td>
                                <td><input type="text" name="dorseyagkm" style="width:100%;"></td>
                                <td>Dorse-Silobas Bakım (Fiyat)</td>
                                <td><input type="text" name="dorsebakim" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td>Yük Kapasitesi</td>
                                <td><input type="text" name="tonaj" style="width:100%;"></td>
                                <td>Liste Fiyatı</td>
                                <td><input type="text" name="listefiyat" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td>HGS / OGS</td>
                                <td><input type="text" name="hgs" style="width:100%;"></td>
                                <td>Harcırah</td>
                                <td><input type="text" name="harcirah" style="width:100%;"></td>
                            </tr>
                            <tr>
                                <td colspan="4">
                                    <button class="waves-effect  width-md waves-light" style="background-color:#364db3;float:right;color:white;">Ekle</button>
                                </td>
                            </tr>
                        </form>
                    </table>



                    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

                    <!-- Responsive Table js -->
                    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                    <!-- Init js -->
                    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                    <!-- App js -->
                    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>

                    <hr>
                    <!-- Script -->
                    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>

                    <script type='text/javascript'>
                        // baseURL variable
                        var baseURL = "<?php echo base_url();?>";

                        $(document).ready(function() {

                            // City change
                            $('#sel_city').change(function() {
                                var city = $(this).val();

                                // AJAX request
                                $.ajax({
                                    url: '<?=base_url()?>uye/Birimfiyatnakliye/getCityDepartment',
                                    method: 'post',
                                    data: {
                                        city: city
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        // Remove options 
                                        $('#sel_user').find('option').not(':first').remove();
                                        $('#sel_depart').find('option').not(':first').remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#sel_depart').append('<option value="' + data['Id'] + '">' + data['adi'] + '</option>');
                                        });
                                    }
                                });
                            });



                        });

                    </script>

                </div>







                <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css">
                <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
                <link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">

                <style>
                    td.details-control {
                        background: url('<?=base_url()?>assets/yeni_tema/dist/assets/images/details_open.png') no-repeat center center;
                        cursor: pointer;
                    }

                    tr.shown td.details-control {
                        background: url('<?=base_url()?>assets/yeni_tema/dist/assets/images/details_close.png') no-repeat center center;
                    }

                </style>

                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/libscripts.bundle.js"></script>


                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/datatablescripts.bundle.js"></script>
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/dataTables.buttons.min.js"></script>
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.bootstrap4.min.js"></script>
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.colVis.min.js"></script>
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.html5.min.js"></script>
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/jquery-datatable/buttons/buttons.print.min.js"></script>

                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/sweetalert/sweetalert.min.js"></script> <!-- SweetAlert Plugin Js -->




                <script src="<?=base_url()?>assets/yeni_tema/js/pages/tables/jquery-datatable.js"></script>
