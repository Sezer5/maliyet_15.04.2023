<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/toastr/toastr.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">
<script src="<?=base_url()?>assets/admin/js/pages/draggable.init.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage1.js"></script>
<script src="<?=base_url()?>assets/admin/dragpage2.js"></script>


<link href="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.css" rel="stylesheet" type="text/css" />

<!-- Bootstrap Css -->
<!-- Icons Css -->
<link href="<?=base_url()?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?=base_url()?>assets/admin/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
<table class="table table-borde#ff7777">
    <tr>
        <td>
            <h1>Gerçekleşen Nakliye</h1>
        </td>
        <td style="text-align:right;">
            <a href="<?=base_url()?>admin/Gerceklesennakliye/Gerceklesennakliyemaliyeti_excelal" style="color:black;"><button type="button" class="btn-success btn"><i class="fa fa-file-excel-o"></i> Excel Raporu Al</button></a>
        </td>
    </tr>
</table>

<hr>
<div class="row">
    <div class="col-lg-3">
        <div class="table table-responsive " data-pattern="priority-columns">
            <table id="tech-companies-1" class="table-bordered">
                <tbody>
                    <?php 
                                  
                                    foreach($gerceklesennakliyemaliyeti as $as) {if($as->aktif == NULL){?>
                    <tr>
                        <th>Id</th>
                        <td><?=$as->Id?></td>
                    </tr>
                    <tr>
                        <th>Lokasyon</th>
                        <?php if($as->lokasyon == 'NİĞDE'){?>
                        <td style="background-color:#56bb57;color:black"><b><?=$as->lokasyon?></b></td>
                        <?php }else{ ?>
                        <td style="background-color:#4e78ff;color:black"><b><?=$as->lokasyon?></b></td>
                        <?php }?>
                    </tr>
                    <tr>
                        <th data-priority="1">Plaka</th>
                        <td><?=$as->plaka?></td>
                    </tr>
                    <tr>
                        <th data-priority="3">Marka</th>
                        <td><?=$as->marka?></td>
                    </tr>
                    <tr>
                        <th data-priority="1">Model</th>
                        <td><?=$as->model?></td>
                    </tr>
                    <tr>
                        <th data-priority="3">Model(YIL)</th>
                        <td><?=$as->model_yili?></td>
                    </tr>
                    <tr>
                        <th data-priority="3">Yol / Km</th>
                        <td><?=$as->yol_km?></td>
                    </tr>


                    <?php }}?>
                </tbody>
            </table>
        </div>

    </div>
    <div class="col-lg-3">
        <div>
            <div class="table table-responsive " data-pattern="priority-columns">
                <table id="tech-companies-1" class="table-bordered">
                    <tbody>
                        <?php 
                                  
                                    foreach($gerceklesennakliyemaliyeti as $as) {if($as->aktif == NULL){?>
                        <tr>
                            <th data-priority="3">Akaryakıt</th>
                            <td><?=$as->akaryakit?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Akaryakıt Ort.</th>
                            <td><?=$as->akaryakit_ort?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Akaryakıt Litre</th>
                            <td><?=$as->akaryakit_lt?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Akaryakıt Ort Litre</th>
                            <td><?=$as->akaryakit_ort_lt?></td>
                        </tr>
                        <tr>
                            <th data-priority="6">Harcırah</th>
                            <td><?=$as->harcirah?></td>
                        </tr>
                        <tr>
                            <th data-priority="6">Harcırah Ort</th>
                            <td><?=$as->harcirah_ort?></td>
                        </tr>
                        <tr>
                            <th data-priority="6">Bakım</th>
                            <td><?=$as->bakim?></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-lg-3">
        <div>
            <div class="table table-responsive " data-pattern="priority-columns">
                <table id="tech-companies-1" class="table-bordered">
                    <tbody>
                        <?php 
                                  
                                    foreach($gerceklesennakliyemaliyeti as $as) {if($as->aktif == NULL){?>
                        <tr>
                            <th data-priority="6">Genel Üretim Giderleri</th>
                            <td><?=$as->gug?></td>
                        </tr>
                        <tr>
                            <th data-priority="1">HGS / OGS</th>
                            <td><?=$as->hgsogs?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Kasko</th>
                            <td><?=$as->kasko?></td>
                        </tr>
                        <tr>
                            <th data-priority="1">Lastik</th>
                            <td><?=$as->lastik?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">MTV</th>
                            <td><?=$as->mtv?></td>
                        </tr>
                        <tr>
                            <th data-priority="6">Sigorta</th>
                            <td><?=$as->sigorta?></td>
                        </tr>
                        <tr>
                            <th data-priority="6">Trafik Sigortası</th>
                            <td><?=$as->trafiksigorta?></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
    <div class="col-lg-3">
        <div>
            <div class="table table-responsive " data-pattern="priority-columns">
                <table id="tech-companies-1" class="table-bordered">
                    <tbody>
                        <?php 
                                  
                                    foreach($gerceklesennakliyemaliyeti as $as) {if($as->aktif == NULL){?>
                        <tr>
                            <th data-priority="6">Yağ Bakım</th>
                            <td><?=$as->yag?></td>
                        </tr>
                        <tr>
                            <th data-priority="1">Aylık Amortisman</th>
                            <td><?=$as->aytl?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Toplam Giderler</th>
                            <td><?=$as->yag + $as->trafiksigorta + $as->sigorta + $as->mtv + $as->lastik + $as->kasko + $as->hgsogs + $as->harcirah + $as->gug + $as->bakim + $as->akaryakit?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Gelirler</th>
                            <td><?=$as->nakliye_geliri?></td>
                        </tr>
                        <tr>
                            <th data-priority="3">Komisyon</th>
                            <td><?=$as->komisyon?></td>
                        </tr>
                        <?php }}?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<hr>
<div class="rox">
    <div class="col-lg-12">
        <div>
            <div class="table" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table-bordered">
                    <thead>
                        <tr>
                            <th>Yapılan Km</th>
                            <th>Komisyon</th>
                            <th>Diğer Gelirler</th>
                            <th>*</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="<?=base_url()?>admin/Gerceklesennakliye/Gerceklesennakliye_ekstralar_guncelle/<?=$arac_id?>" method="post">
                            <tr>
                                <?php foreach($gerceklesennakliyemaliyeti as $as) {?>

                                <input type="text" name="plaka" class="form-control" value="<?=$as->plaka?>" hidden>

                                <?php }?>

                                <td><input type="text" name="yol_km" class="form-control"></td>

                                <td><input type="text" name="komisyon" class="form-control"></td>

                                <td><input type="text" name="diger_gelirler" class="form-control"></td>

                                <td>
                                    <button type="submit" class="btn btn-success waves-effect  width-md waves-light" style="float:right;"><i class="ti-reload"></i> Güncelle</button>
                                </td>
                            </tr>
                        </form>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div>
            <div class="table" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table-bordered">
                    <thead>
                        <tr>
                            <th colspan="7">
                                Mevcut Vergiler
                            </th>
                        </tr>
                        <tr>
                            <th>Id</th>
                            <th>Araç Plakası</th>
                            <th>Hesap Kodu</th>
                            <th>Vergi Türü</th>
                            <th>Açıklama</th>
                            <th>Tutar (Toplam)</th>
                            <th>Sil</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($vergiler as $rs){?>
                        <tr>
                            <td><?=$rs->Id?></td>
                            <td><?=$rs->projenotu?></td>
                            <td><?=$rs->hesapkodu?></td>
                            <td>
                                <?php if($rs->hesapkodu=="740.4.053"){?>
                                Kasko
                                <?php }elseif($rs->hesapkodu=="770.03.021"){?>
                                Trafik Sigortası
                                <?php }else{?>
                                Sigorta
                                <?php }?>
                            </td>
                            <td><?=$rs->satiraciklamasi?></td>
                            <td><?=$rs->tutar?></td>
                            <td>
                                <a href="<?=base_url()?>admin/Gerceklesennakliye/Gerceklesennakliye_ekstralar_vergisil/<?=$rs->Id?>/<?=$rs->projenotu?>/<?=$arac_id?>">
                                    <button type="button" class="btn btn-danger waves-effect"><i class="ti-minus"></i> Sil</button>
                                </a>
                            </td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div>
            <div class="table" data-pattern="priority-columns">
                <table id="tech-companies-1" class="table-bordered">
                    <thead>
                        <tr>
                            <th colspan="5">
                                Vergi Ekle </th>
                        </tr>
                        <tr>
                            <th>Araç Plakası</th>
                            <th>Vergi Türü</th>
                            <th>Açıklama</th>
                            <th>Tutar</th>
                            <th>Ekle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($gerceklesennakliyemaliyeti as $as) {?>
                        <form action="<?=base_url()?>admin/Gerceklesennakliye/Gerceklesennakliye_ekstralar_vergiekle" method="post">
                            <tr>
                                <td><input type="text" name="plaka" class="form-control" value="<?=$as->plaka?>" readonly></td>
                                <input type="text" name="arac_id" value="<?=$arac_id?>" hidden>
                                <td>
                                    <select name="hesapkodu" class="form-control">
                                        <option value="740.4.053">Kasko</option>
                                        <option value="770.03.021">Trafik Sigortası</option>
                                        <option value="730.4.062">Sigorta</option>
                                    </select>
                                </td>

                                <td><textarea name="aciklama" cols="30" rows="3" class="form-control"></textarea></td>
                                <td><input type="text" name="tutar" class="form-control"></td>

                                <td>
                                    <button type="submit" class="btn btn-success waves-effect  width-md waves-light" style="float:right;"><i class="ti-plus"></i> Ekle</button>
                                </td>
                            </tr>
                        </form>
                        <?php }?>
                    </tbody>
                </table>
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
