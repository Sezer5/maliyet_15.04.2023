<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="row col-lg-12">
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
                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliyemaliyeti_excelal" style="color:black;"><button type="button" class="btn-success btn"><i class="fa fa-file-excel-o"></i> Excel Raporu Al</button></a>
                        </td>
                    </tr>
                </table>

                <hr>
                <div class="responsive-table-plugin col-lg-12">
                    <div class="table-rep-plugin">
                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table table-striped mb-0 table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>*</th>
                                        <th>Id</th>
                                        <th>Bilgi</th>
                                        <th>Lokasyon</th>
                                        <th data-priority="1">Plaka</th>
                                        <th data-priority="3">Marka</th>
                                        <th data-priority="1">Model</th>
                                        <th data-priority="3">Model(YIL)</th>
                                        <th data-priority="3">Yol / Km</th>
                                        <th data-priority="3">Akaryakıt</th>
                                        <th data-priority="3">Akaryakıt Ort.</th>
                                        <th data-priority="3">Akaryakıt Litre</th>
                                        <th data-priority="3">Akaryakıt Ort Litre</th>
                                        <th data-priority="6">Harcırah</th>
                                        <th data-priority="6">Harcırah Ort</th>
                                        <th data-priority="6">Bakım</th>
                                        <!--   <th data-priority="6">Genel Üretim Giderleri</th> -->
                                        <th data-priority="1">HGS / OGS</th>
                                        <th data-priority="3">Kasko</th>
                                        <th data-priority="1">Lastik</th>
                                        <th data-priority="3">MTV</th>
                                        <th data-priority="6">Sigorta</th>
                                        <th data-priority="6">Trafik Sigortası</th>
                                        <th data-priority="6">Yağ Bakım</th>
                                        <th data-priority="1">Aylık Amortisman</th>
                                        <th data-priority="1">Dorse Giderleri</th>
                                        <th data-priority="1">İşçilik</th>
                                        <th data-priority="3">Sabit Giderler</th>
                                        <th data-priority="3">Değişken Giderler</th>
                                        <th data-priority="3">Toplam Giderler</th>
                                        <th data-priority="3">Gelirler</th>
                                        <th data-priority="3">Diğer Gelirler</th>
                                        <th data-priority="3">Komisyon</th>
                                        <th data-priority="1">Gerçekleşen Seferler</th>
                                        <th data-priority="1">Bilgi Girişi</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $counter=1;
                                    $a=1; //akaryakit
                                    $b=2; //bakim
                                    $c=3; //gug
                                    $d=4; //harcirah
                                    $e=5; //hgs / ogs
                                    $f=6; //kasko
                                    $g=7; //lastik
                                    $h=8; //mtv
                                    $i=9; //sigorta
                                    $j=10; //trafik sigorta
                                    $k=11; //yağ bakım
                                        
                                    
                                    foreach($gerceklesennakliyemaliyeti as $as) {if($as->aktif == NULL){?>
                                    <tr>
                                        <td><?=$counter?></td>
                                        <td><?=$as->Id?></td>
                                        <?php if($as->durum2 == 'BETEK'){?>
                                        <td style="background-color:#56bb57;color:black"><b><?=$as->durum2?></b></td>
                                        <?php }else{ ?>
                                        <td style="background-color:#4e78ff;color:black"><b><?=$as->durum2?></b></td>
                                        <?php }?>
                                        <?php if($as->lokasyon == 'NİĞDE'){?>
                                        <td style="background-color:#56bb57;color:black"><b><?=$as->lokasyon?></b></td>
                                        <?php }else{ ?>
                                        <td style="background-color:#4e78ff;color:black"><b><?=$as->lokasyon?></b></td>
                                        <?php }?>
                                        <td><?=$as->plaka?></td>
                                        <td><?=$as->marka?></td>
                                        <td><?=$as->model?></td>
                                        <td><?=$as->model_yili?></td>
                                        <td><?=$as->yol_km?></td>
                                        <?php if($as->akaryakit_ort > $as->akaryakit){?>
                                        <td style="background-color:#56bb57">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$a?>" style="color:black;" title="<?=$as->plaka?>" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <b><?=$as->akaryakit?></b>
                                            </a>
                                        </td>
                                        <?php }else{ ?>
                                        <td style="background-color:#ff7777" title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$a?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <b><?=$as->akaryakit?></b>
                                            </a>
                                        </td>
                                        <?php }?>
                                        <td title="<?=$as->plaka?>"><?=$as->akaryakit_ort?></td>
                                        <?php if($as->akaryakit_ort_lt > $as->akaryakit_lt){?>
                                        <td style="background-color:#56bb57">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$a?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <b><?=$as->akaryakit_lt?></b>
                                            </a>
                                        </td>
                                        <?php }else{ ?>
                                        <td style="background-color:#ff7777" title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$a?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <b><?=$as->akaryakit_lt?></b>
                                            </a>
                                        </td>
                                        <?php }?>
                                        <td title="<?=$as->plaka?>"><?=$as->akaryakit_ort_lt?></td>
                                        <?php if($as->harcirah_ort > $as->harcirah){?>
                                        <td style="background-color:#56bb57" title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$d?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <b><?=$as->harcirah?></b>
                                            </a>
                                        </td>
                                        <?php }else{ ?>
                                        <td style="background-color:#ff7777" title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$d?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <b><?=$as->harcirah?></b>
                                            </a>
                                        </td>
                                        <?php }?>
                                        <td title="<?=$as->plaka?>">
                                            <?=$as->harcirah_ort?>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$b?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->bakim?>
                                            </a>
                                        </td>
                                        <!--      <td title="<?=$as->plaka?>"><a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$c?>" style="color:black;"><?=$as->gug?></a></td> -->
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$e?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->hgsogs?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$f?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->kasko?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$g?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->lastik?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$h?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->mtv?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$i?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->sigorta?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$j?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->trafiksigorta?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$k?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->yag?>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_detaylar/<?=$as->plaka?>/<?=$k?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                <?=$as->aytl?>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/dorse_giderleri/<?=$as->plaka?>" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" style="text-decoration: none;">
                                                <?=$as->dorse_gideri?>
                                            </a>
                                        </td>

                                        <td><?=$as->iscilik?></td>
                                        <td title="<?=$as->plaka?>"><?=$as->trafiksigorta + $as->sigorta + $as->mtv + $as->kasko?></td>
                                        <td title="<?=$as->plaka?>"><?=$as->yag + $as->lastik + $as->hgsogs + $as->harcirah + $as->gug + $as->bakim + $as->akaryakit?></td>
                                        <td title="<?=$as->plaka?>"><?=$as->yag + $as->trafiksigorta + $as->sigorta + $as->mtv + $as->lastik + $as->kasko + $as->hgsogs + $as->harcirah + $as->gug + $as->bakim + $as->akaryakit?></td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_nakliye_gelirleri_detay/<?=$as->plaka?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" style="text-decoration: none;">
                                                <?=$as->nakliye_geliri?>
                                            </a>
                                        </td>
                                        <td><?=$as->diger_gelirler?></td>
                                        <td title="<?=$as->plaka?>">
                                            <?=$as->komisyon?>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_seferler/<?=$as->plaka?>" style="color:black;">
                                                <button type="button" class="btn-success" style="width:100%;">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </a>
                                        </td>
                                        <td title="<?=$as->plaka?>">
                                            <a href="<?=base_url()?>uye/Gerceklesennakliye/Gerceklesennakliye_ekstralar/<?=$as->Id?>/<?=$as->plaka?>" style="color:black;" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')" style="text-decoration: none;">
                                                <button type="button" class="btn-success" style="width:100%;">
                                                    <i class="fa fa-gear"></i></button>
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $counter++; }}?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
            </div>

        </div>
    </div>
</div>
