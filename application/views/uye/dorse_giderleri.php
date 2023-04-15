<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
<script src="<?=base_url()?>assets/admin/js/pages/draggable.init.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage1.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage2.js"></script>

<h1>Dorse Giderleri</h1>
<br>
<?php foreach($arac_sayisi as $rs){?>
<h4>Toplam Araç Sayısı:<?=$rs->kayitsayisi?></h4>
<?php }?>
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
        </thead>
        <tbody>
            <?php foreach($dorse_giderleri as $rs){?>
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
                    <td><button type="submit" class="btn btn-success"><i class="icon-refresh"></i></button></td>
                    <td>Aktivasyon kısmı 0 ise aktif değildir. <br> Boş veya 1 ise aktiftir.</td>
                </form>
            </tr>
            <?php }?>
        </tbody>
    </table>
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
