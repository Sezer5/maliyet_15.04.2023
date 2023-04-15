<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
<script src="<?=base_url()?>assets/admin/js/pages/draggable.init.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage1.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage2.js"></script>

<h1>Gerçekleşen Nakliye Maliyeti</h1>
<br>
<h4><?=$baslangic?> / <?=$bitis?> Tarihleri Arasındaki <?=$plaka?> Plakalı Araç'ın <?=$bilgi?> Bilgileri</h4>
<hr>
<div class="table-responsive">
    <table class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
        <thead>
            <th>Plaka</th>
            <th>Hesap İsmi</th>
            <th>Tutar</th>
            <th>Açıklama</th>
            <th>Tarih</th>
            <th>Aktivasyon</th>
            <th>Güncelle</th>
            <th></th>
            <th>Vade Ay Bölümü</th>
            <th>Vade No</th>
            <th>Toplam Vade Sayısı</th>
            <th>Güncelle</th>
        </thead>
        <tbody>
            <?php foreach($veri as $rs){?>
            <tr>
                <td><?=$rs->projenotu?></td>
                <td><?=$rs->hesapadi?></td>
                <td><?=$rs->tutar?></td>
                <td>
                    <textarea class="form-control" rows="3" cols="30" required=""><?=$rs->satiraciklamasi?></textarea>
                </td>
                <td><?=$rs->tarih?></td>
                <form action="<?=base_url()?>uye/Gerceklesennakliye/sarflar_guncelle/<?=$rs->Id?>/<?=$rs->projenotu?>" method="post">
                    <td><input type="text" class="form-control" name="AKTIF" value="<?=$rs->AKTIF?>"></td>
                    <input type="text" class="form-control" name="tur" value="<?=$tur?>" hidden>
                    <td><button type="submit" class="btn btn-success"><i class="icon-refresh"></i></button></td>
                    <td>Aktivasyon kısmı 0 ise aktif değildir. <br> Boş veya 1 ise aktiftir.</td>
                </form>
                <form action="<?=base_url()?>uye/Gerceklesennakliye/bakim_bolumu/<?=$rs->Id?>/<?=$rs->projenotu?>" method="post">
                    <input type="text" class="form-control" name="tur" value="<?=$tur?>" hidden>
                    <td><input type="number" name="vade_bolumu" class="form-control" min="1" value="1"></td>
                    <td><?=$rs->vade_sayisi?></td>
                    <td><?=$rs->vade_toplam_sayi?></td>
                    <td><button type="submit" class="btn btn-success"><i class="icon-refresh"></i></button></td>
                </form>
            </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<!--       <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Gerçekleşen Nakliye Ekstreleri</h1>
                        <br>
                        <h4><?=$baslangic?> / <?=$bitis?> Tarihleri Arasındaki <?=$plaka?> Plakalı Araç'ın <?=$bilgi?> Bilgileri</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                <thead>
                                    <th>Plaka</th>
                                    <th>Özel Kod</th>
                                    <th>Stok Adı</th>
                                    <th>Miktar</th>
                                    <th>Tutar</th>
                                    <th>Açıklama</th>
                                    <th>Tarih</th>
                                    <th>Aktivasyon</th>
                                    <th>Güncelle</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                    <?php foreach($ekstreler as $rs){if($rs->Id!=NULL){?>
                                    <tr>
                                        <td><?=$rs->PROJE_KODU?></td>
                                        <td><?=$rs->OZEL_KOD?></td>
                                        <td><?=$rs->STOK_ADI?></td>
                                        <td><?=$rs->MIKTAR?></td>
                                        <td><?=$rs->TUTAR?></td>
                                        <td>
                                            <textarea class="form-control" rows="3" cols="30" required=""><?=$rs->PROJE_ACIKLAMASI?></textarea>
                                        </td>
                                        <td><?=$rs->TARIH?></td>
                                        
                                        
                                        <form action="<?=base_url()?>uye/Gerceklesennakliye/ekstreler_guncelle/<?=$rs->Id?>/<?=$rs->PROJE_KODU?>" method="post">
                                            <td><input type="text" class="form-control" name="AKTIF" value="<?=$rs->AKTIF?>"></td>
                                            <input type="text" class="form-control" name="tur" value="<?=$tur?>" hidden>
                                            <td><button type="submit" class="btn btn-success">Güncelle</button></td>
                                            <td>Aktivasyon kısmı 0 ise aktif değildir. <br> Boş veya 1 ise aktiftir.</td>
                                        </form>
                                        
                                        
                                        
                                    </tr>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> -->
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
