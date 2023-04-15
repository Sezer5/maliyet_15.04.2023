<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
<script src="<?=base_url()?>assets/admin/js/pages/draggable.init.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage1.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage2.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-18">
                <center>
                    <h1>Nakliye Gelirleri</h1>
                </center>
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Nakliye Satışı Geliri</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Ürün Satışı Üzerinden Nakliye Gelirleri</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Settings">
                            <div class="body">
                                <div class="col-lg-18">
                                    <div class="card-box">
                                        <center>
                                            <h1>Nakliye Satışı Geliri</h1>
                                        </center>
                                        <div class="card-box">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="card-box">
                                                        <h1>Birim Fiyat Parametreler</h1>
                                                        <hr>
                                                        <div class="table-responsive">
                                                            <table class=" table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Id</th>
                                                                        <th>FATURA_TURU</th>
                                                                        <th>TUR_KODU</th>
                                                                        <th>FATURA_TARIHI</th>
                                                                        <th>CARI_KODU</th>
                                                                        <th>CARI_ADI</th>
                                                                        <th>MALZEME_ADI</th>
                                                                        <th>MIKTAR</th>
                                                                        <th>FIYAT</th>
                                                                        <th>TOPLAM</th>
                                                                        <th>PROJE_KODU</th>
                                                                        <th>PROJE_ACIKLAMASI</th>
                                                                        <th></th>
                                                                        <th></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($yalniz_nakliye as $ps){?>
                                                                    <tr>
                                                                        <form action="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_yalniz_nakliye_guncelle" method="post">
                                                                            <td><input type="text" name="Id" value="<?=$ps->Id?>" class="form-control" readonly title="<?=$ps->Id?>"></td>
                                                                            <td><input type="text" name="FATURA_TURU" value="<?=$ps->FATURA_TURU?>" class="form-control" title="<?=$ps->FATURA_TURU?>"></td>
                                                                            <td><input type="text" name="TUR_KODU" value="<?=$ps->TUR_KODU?>" class="form-control" title="<?=$ps->TUR_KODU?>"></td>
                                                                            <td><input type="text" name="FATURA_TARIHI" value="<?=$ps->FATURA_TARIHI?>" class="form-control" title="<?=$ps->FATURA_TARIHI?>"></td>
                                                                            <td><input type="text" name="CARI_KODU" value="<?=$ps->CARI_KODU?>" class="form-control" title="<?=$ps->CARI_KODU?>"></td>
                                                                            <td><input type="text" name="CARI_ADI" value="<?=$ps->CARI_ADI?>" class="form-control" title="<?=$ps->CARI_ADI?>"></td>
                                                                            <td><input type="text" name="MALZEME_ADI" value="<?=$ps->MALZEME_ADI?>" class="form-control" title="<?=$ps->MALZEME_ADI?>"></td>
                                                                            <td><input type="text" name="MIKTAR" value="<?=$ps->MIKTAR?>" class="form-control" title="<?=$ps->MIKTAR?>"></td>
                                                                            <td><input type="text" name="FIYAT" value="<?=$ps->FIYAT?>" class="form-control" title="<?=$ps->FIYAT?>"></td>
                                                                            <td><input type="text" name="TOPLAM" value="<?=$ps->TOPLAM?>" class="form-control" title="<?=$ps->TOPLAM?>"></td>
                                                                            <td><input type="text" name="PROJE_KODU" value="<?=$ps->PROJE_KODU?>" class="form-control" title="<?=$ps->PROJE_KODU?>"></td>
                                                                            <td>
                                                                                <textarea name="PROJE_ACIKLAMASI" id="" cols="30" rows="3" class="form-control" title="<?=$ps->PROJE_ACIKLAMASI?>"><?=$ps->PROJE_ACIKLAMASI?></textarea>

                                                                            <td>
                                                                                <button type="submit" class="btn btn-success"><i class="icon-reload"></i></button>
                                                                            </td>
                                                                        </form>
                                                                        <td>
                                                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_yalniz_nakliye_sil/<?=$ps->Id?>/<?=$ps->PROJE_KODU?>"><button class="btn btn-danger"><i class="icon-trash"></i></button></a>
                                                                        </td>
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
                            </div>
                        </div>
                        <div class="tab-pane" id="billings">
                            <div class="body">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="card-box">
                                                    <h1>Ürün Satışı Üzerinden Nakliye Gelirleri</h1>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered" style="width:100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Id</th>
                                                                    <th>FABRIKA</th>
                                                                    <th>SEVK TARIHI</th>
                                                                    <th>MUSTERI ADI</th>
                                                                    <th>MIKTAR</th>
                                                                    <th>LISTE NAKLIYE BIRIM FIYATI</th>
                                                                    <th>NAKLIYE GERCEKLESEN BIRIM FIYAT</th>
                                                                    <th>LISTE NAKLIYE TOPLAMI</th>
                                                                    <th>GERCEKLESEN NAKLIYE TOPLAMI</th>
                                                                    <th>PROJE KODU</th>
                                                                    <th></th>
                                                                    <th></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($urun_satisindan as $ps){?>
                                                                <tr>
                                                                    <form action="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_urun_satisindan_guncelle" method="post">

                                                                        <td><input type="text" name="Id" value="<?=$ps->Id?>" class="form-control" readonly title="<?=$ps->Id?>"></td>
                                                                        <td><input type="text" name="FABRIKA" value="<?=$ps->FABRIKA?>" class="form-control" title="<?=$ps->FABRIKA?>"></td>
                                                                        <td><input type="text" name="SEVK_TARIHI" value="<?=$ps->SEVK_TARIHI?>" class="form-control" title="<?=$ps->SEVK_TARIHI?>"></td>
                                                                        <td><input type="text" name="MUSTERI_ADI" value="<?=$ps->MUSTERI_ADI?>" class="form-control" title="<?=$ps->MUSTERI_ADI?>"></td>
                                                                        <td><input type="text" name="MIKTAR" value="<?=$ps->MIKTAR?>" class="form-control" title="<?=$ps->MIKTAR?>"></td>
                                                                        <td><input type="text" name="LISTE_NAKLIYE_BIRIM_FIYATI" value="<?=$ps->LISTE_NAKLIYE_BIRIM_FIYATI?>" class="form-control" title="<?=$ps->LISTE_NAKLIYE_BIRIM_FIYATI?>"></td>
                                                                        <td><input type="text" name="NAKLIYE_GERCEKLESEN_BIRIM_FIYAT" value="<?=$ps->NAKLIYE_GERCEKLESEN_BIRIM_FIYAT?>" class="form-control" title="<?=$ps->NAKLIYE_GERCEKLESEN_BIRIM_FIYAT?>"></td>
                                                                        <td><input type="text" name="LISTE_NAKLIYE_TOPLAMI" value="<?=$ps->LISTE_NAKLIYE_TOPLAMI?>" class="form-control" title="<?=$ps->LISTE_NAKLIYE_TOPLAMI?>"></td>
                                                                        <td><input type="text" name="GERCEKLESEN_NAKLIYE_TOPLAMI" value="<?=$ps->GERCEKLESEN_NAKLIYE_TOPLAMI?>" class="form-control" title="<?=$ps->GERCEKLESEN_NAKLIYE_TOPLAMI?>"></td>
                                                                        <td><input type="text" name="PROJE_KODU" value="<?=$ps->PROJE_KODU?>" class="form-control" title="<?=$ps->PROJE_KODU?>"></td>
                                                                        <td>
                                                                            <button type="submit" class="btn btn-success"><i class="icon-reload"></i></button>
                                                                        </td>
                                                                    </form>
                                                                    <td>
                                                                        <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_urun_satisindan_sil/<?=$ps->Id?>/<?=$ps->PROJE_KODU?>"><button class="btn btn-danger"><i class="icon-trash"></i></button></a>
                                                                    </td>


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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/libscripts.bundle.js"></script>
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/vendorscripts.bundle.js"></script>

<!-- page vendor js file -->
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/toastr/toastr.js"></script>
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/c3.bundle.js"></script>

<!-- page js file -->
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/mainscripts.bundle.js"></script>
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/js/index.js"></script>


<script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-progressbar/js/bootstrap-progressbar.min.js"></script>

<script>
    $(function() {
        $('#progress-format1 .progress-bar').progressbar({
            display_text: 'fill'
        });

        $('#progress-format2 .progress-bar').progressbar({
            display_text: 'fill',
            use_percentage: false
        });

        $('#progress-custom-format .progress-bar').progressbar({
            display_text: 'fill',
            use_percentage: false,
            amount_format: function(p, t) {
                return p + ' of ' + t;
            }
        });

        $('#progress-striped .progress-bar, #progress-striped-active .progress-bar, #progress-stacked .progress-bar').progressbar({
            display_text: 'fill'
        });

        $('.progress.vertical .progress-bar').progressbar();
        $('.progress.vertical.wide .progress-bar').progressbar({
            display_text: 'fill'
        });
    });

</script>
