<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <center>
                    <h1>BİRİMFİYATLAR</h1>
                </center>
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Birimfiyat Parametreler</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Masraflar & Değerler</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences">İşçilik & Çalışma Değerleri</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences2">Nakliye Maliyeti Değerleri</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences3">Ambalaj Maliyeti Değerleri</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Settings">
                            <div class="body">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <center>
                                            <h1>Birimfiyat Parametreler</h1>
                                        </center>
                                        <div class="card-box">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="card-box">
                                                        <h1>Birim Fiyat Parametreler</h1>
                                                        <hr>
                                                        <div class="table-responsive">
                                                            <table class="table-bordered" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <td colspan="3" style="text-align:right;"><a href="<?=base_url()?>admin/birimfiyat/birimfiyat_parametreler_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Adı</th>
                                                                        <th>Fiyatı / Değeri</th>
                                                                        <th>Güncelle</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($parametre as $ps){?>
                                                                    <form action="<?=base_url()?>admin/birimfiyat/parametre_guncelle/<?=$ps->Id?>" method="post">
                                                                        <tr>
                                                                            <td><input type="text" name="adi" value="<?=$ps->adi?>"></td>
                                                                            <td><input type="text" name="fiyat" value="<?=$ps->fiyat?>" size="5"></td>
                                                                            <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                        </tr>
                                                                    </form>
                                                                    <?php }?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="card-box">
                                                        <h1>Birim Fiyat Sarflar</h1>
                                                        <div class="table-responsive">
                                                            <table class="table-bordered" style="width:100%;">
                                                                <thead>
                                                                    <tr>
                                                                        <td colspan="10" style="text-align:right;"><a href="<?=base_url()?>admin/birimfiyat/birimfiyatsarflar_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <th>Adı</th>
                                                                        <th>Yüzde</th>
                                                                        <th>Fiyat</th>
                                                                        <th>Fiyat Birimi</th>
                                                                        <th>Fireli Fiyat</th>
                                                                        <th>Birimi</th>
                                                                        <th>Son Fiyat</th>
                                                                        <th>Birimi</th>
                                                                        <th>Açıklama</th>
                                                                        <th>Değiştir</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <?php foreach($sarflar as $ps){if( $ps->show_hide!=0){?>
                                                                    <form action="<?=base_url()?>admin/birimfiyat/birimfiyatsarf_guncelle/<?=$ps->Id?>" method="post">
                                                                        <tr>
                                                                            <td><input type="text" name="adi" value="<?=$ps->adi?>"></td>
                                                                            <td><input type="text" name="yuzde" size="8" value="<?=$ps->yuzde?>"></td>
                                                                            <td><input type="text" name="fiyat" size="8" value="<?=$ps->fiyat?>"></td>
                                                                            <td><?=$ps->fiyatbirimi?></td>
                                                                            <td><?=$ps->firelifiyat?></td>
                                                                            <td><?=$ps->firelifiyatbirimi?></td>
                                                                            <td><?=$ps->sonfiyat?></td>
                                                                            <td><?=$ps->sonfiyatbirimi?></td>
                                                                            <td><?=$ps->aciklama?></td>
                                                                            <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                        </tr>
                                                                    </form>
                                                                    <?php } }?>
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
                                            <div class="col-lg-4">
                                                <div class="card-box">
                                                    <h1>Masraf Kalemleri Oranları</h1>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Adı</th>
                                                                    <th>Oran</th>
                                                                    <th>Gerçek Oran</th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($gyg as $gs){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/gyg_guncelle/<?=$gs->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" value="<?=$gs->adi?>" size="12"></td>
                                                                        <td><?=$gs->oran?></td>
                                                                        <td><input type="text" name="gercekoran" size="8" value="<?=$gs->gercekoran?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="card-box">
                                                    <h1>Çalışma Günleri</h1>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <tbody>
                                                                <?php foreach($iscilikgun as $is){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/calismagunleri_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td>Dini Bayramlar</td>
                                                                        <td><input type="text" name="dini" size="4" value="<?=$is->dini?>"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Haftasonu</td>
                                                                        <td><input type="text" name="haftasonu" size="4" value="<?=$is->haftasonu?>"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Senelik İzin</td>
                                                                        <td><input type="text" name="senelik" size="4" value="<?=$is->senelik?>"></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Mazeret İzni</td>
                                                                        <td><input type="text" name="mazeret" size="4" value="<?=$is->mazeret?>"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Çalışılmayan Günler</td>
                                                                        <td><?=$is->calisilmayan?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Toplam Gün</td>
                                                                        <td><input type="text" name="toplamgun" size="4" value="<?=$is->toplamgun?>"></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Net Çalışılan Gün</td>
                                                                        <td><?=$is->netcalisilan?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Aylık Ortalama Çalışılan Gün</td>
                                                                        <td><?=$is->aylikortcalis?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Değiştir</td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card-box">
                                                    <h1>Zaman Değerleri</h1>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Adı</th>
                                                                    <th>Günlük Çalışma Saati</th>
                                                                    <th>Aydaki Gün Sayısı</th>
                                                                    <th>Aylık Çalışma Saati</th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($zaman as $zs){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/zamandegeri_guncelle/<?=$zs->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" value="<?=$zs->adi?>"></td>
                                                                        <td><input type="text" name="gunsaati" size="2" value="<?=$zs->gunsaati?>"></td>
                                                                        <td><input type="text" name="aydakigun" size="2" value="<?=$zs->aydakigun?>"></td>
                                                                        <td><?=$zs->aylikcalismasaati?></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i></button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card-box">
                                                    <h1>Stearik Asit</h1>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <td colspan="3" style="text-align:right;"><a href="<?=base_url()?>admin/birimfiyat/sa_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                                </tr>
                                                                <tr>
                                                                    <th>Adı</th>
                                                                    <th>Ton</th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($stearikasit as $sa){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/sa_guncelle/<?=$sa->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" value="<?=$sa->adi?>" size="8"></td>
                                                                        <td><input type="text" name="ton" size="4" value="<?=$sa->ton?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
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
                        <div class="tab-pane" id="preferences">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-box">
                                                    <h1>İşçilik Maliyeti Hesabı</h1>
                                                    <hr>

                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Masraf Kalemi</th>
                                                                    <th>Fiyat TL</th>
                                                                    <th>Değiştir</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($iscilikmaliyet as $is){
                                                        if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/iscilikmaliyeti_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" size="30" value="<?=$is->adi?>"></td>
                                                                        <td><input type="text" name="fiyat" size="8" value="<?=$is->fiyat?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->adi?></td>
                                                                    <td><?=$is->fiyat?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }} ?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card-box">
                                                    <h1>İstasyon İşçilik Maliyetleri(AYLIK)</h1>
                                                    <hr>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>İstasyon</th>
                                                                    <th>Kişi Sayısı</th>
                                                                    <th>Tutar</th>
                                                                    <th>Değiştir</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($istasyon as $is){
                                            if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/iscilikistasyon_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" size="30" value="<?=$is->adi?>"></td>
                                                                        <td><input type="text" name="kisisayisi" size="4" value="<?=$is->kisisayisi?>"></td>
                                                                        <td><?=$is->fiyat?></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->adi?></td>
                                                                    <td><?=$is->kisisayisi?></td>
                                                                    <td><?=$is->fiyat?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="card-box">
                                                    <h1>İşçilik(BAKIM ONARIM USTASI) Maliyeti Hesabı</h1>
                                                    <hr>

                                                    <div class="table-responsive">
                                                        <table class="table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Masraf Kalemi</th>
                                                                    <th>Fiyat TL</th>
                                                                    <th>Değiştir</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($iscilikbakimonarim as $is){
                                                        if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/iscilikbakimonarim_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" size="30" value="<?=$is->adi?>"></td>
                                                                        <td><input type="text" name="fiyat" size="8" value="<?=$is->fiyat?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->adi?></td>
                                                                    <td><?=$is->fiyat?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }} ?>
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
                        <div class="tab-pane" id="preferences2">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-box">
                                            <div class="col-lg-4">
                                                <div class="card-box">
                                                    <h1>Nakliye Birim Fiyat Parametreleri</h1>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered" style="width:100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Adı</th>
                                                                    <th>Fiyatı / Değeri</th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($sbt as $ps){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/parametre_guncelle_nakliye/<?=$ps->Id?>" method="post">
                                                                    <tr>
                                                                        <td><input type="text" name="adi" value="<?=$ps->adi?>" readonly></td>
                                                                        <td><input type="text" name="fiyat" value="<?=$ps->fiyat?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="card-box">
                                                    <h1>Nakliye Lastik Değerleri</h1>
                                                    <hr>
                                                    <div class="table-responsive">
                                                        <table class="table-bordered" style="width:100%;">
                                                            <thead>
                                                                <tr>
                                                                    <th>Lastik Cinsi</th>
                                                                    <th>Adet</th>
                                                                    <th>Lastik Ömrü (KM)</th>
                                                                    <th>Lastik Birim Fiyatı (TL)</th>
                                                                    <th>Toplam Lastik Fiyatı (TL)</th>
                                                                    <th>KM Başına Lastik Yıpranma Fiyatı (TL)</th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($lastik as $rs){?>
                                                                <form action="<?=base_url()?>admin/birimfiyat/parametre_guncelle_lastik/<?=$rs->Id?>" method="post">

                                                                    <tr>
                                                                        <td>Çekici (ÖN LASTİK)</td>
                                                                        <td><input type="text" name="cekicionmiktar" value="<?=$rs->cekicionmiktar?>"></td>
                                                                        <td><input type="text" name="cekicionomur" value="<?=$rs->cekicionomur?>"></td>
                                                                        <td><input type="text" name="cekicionbrfiyat" value="<?=$rs->cekicionbrfiyat?>"></td>
                                                                        <td><?=$rs->cekiciontoplam?></td>
                                                                        <td><?=$rs->cekicionyip?></td>
                                                                        <td rowspan="4"><button class="waves-effect waves-light" style="background-color:#364db3;width:100%;height:100%;"> <i class="icon-reload" style="color:white"></i> </button></td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Çekici (ÇEKER LASTİK)</td>
                                                                        <td><input type="text" name="cekicicekermiktar" value="<?=$rs->cekicicekermiktar?>"></td>
                                                                        <td><input type="text" name="cekicicekeromur" value="<?=$rs->cekicicekeromur?>"></td>
                                                                        <td><input type="text" name="cekicicekerbrfiyat" value="<?=$rs->cekicicekerbrfiyat?>"></td>
                                                                        <td><?=$rs->cekicicekertoplam?></td>
                                                                        <td><?=$rs->cekicicekeryip?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Dorse (PİLOT LASTİK)</td>
                                                                        <td><input type="text" name="dorsepilotmiktar" value="<?=$rs->dorsepilotmiktar?>"></td>
                                                                        <td><input type="text" name="dorsepilotomur" value="<?=$rs->dorsepilotomur?>"></td>
                                                                        <td><input type="text" name="dorsepilotbrfiyat" value="<?=$rs->dorsepilotbrfiyat?>"></td>
                                                                        <td><?=$rs->dorsepilottoplam?></td>
                                                                        <td><?=$rs->dorsepilotyip?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Toplam</td>
                                                                        <td></td>
                                                                        <td><?=$rs->toplamlastikomur?></td>
                                                                        <td>KDV'siz</td>
                                                                        <td><?=$rs->toplamlastikfiyat?></td>
                                                                        <td><?=$rs->toplamkmyip?></td>
                                                                    </tr>
                                                                </form>
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
                        <div class="tab-pane" id="preferences3">
                            <div class="row clearfix">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-box">
                                            <div class="table-responsive">
                                                <table class="table-bordered table-hover" style="width:100%;">
                                                    <thead>
													<tr>
														<td colspan="11" style="text-align:right;"><a href="<?=base_url()?>admin/birimfiyat/paketleme_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
													</tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Satınalma Tipi</th>
                                                            <th>Adı</th>
                                                            <th>Fiyat TL</th>
                                                            <th>Fiyat $</th>
                                                            <th>Fiyat €</th>
                                                            <th>Fire</th>
                                                            <th>Sonuç TL</th>
                                                            <th>Paketleme Maliyeti TL</th>
                                                            <th>Toplam TL</th>
                                                            <th>Güncelle</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($ambalajmaliyeti as $rs){?>
                                                        <form action="<?=base_url()?>admin/birimfiyat/ambalajmaliyeti_guncelleme/<?=$rs->Id?>" method="post">
                                                            <tr>
                                                                <td><?=$rs->Id?></td>
                                                                <td><?=$rs->satinalma_birim?></td>
                                                                <td><?=$rs->adi?></td>
                                                                <td><input type="text" name="fiyat_tl" value="<?=$rs->fiyat_tl?>" style="width:50%;"></td>
                                                                <td><input type="text" name="fiyat_usd" value="<?=$rs->fiyat_usd?>" style="width:50%;"></td>
                                                                <td><input type="text" name="fiyat_euro" value="<?=$rs->fiyat_euro?>" style="width:50%;"></td>
                                                                <td><input type="text" name="fire" value="<?=$rs->fire?>" style="width:50%;"></td>
                                                                <td><?=$rs->sonuc_tl?></td>
                                                                <td><?=$rs->paketleme?></td>
                                                                <td><?=$rs->toplam?></td>
                                                                <td><button type="submit" class="btn-success" title="Save"><i class="icon-reload"></i></button></td>
                                                            </tr>
                                                        </form>
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
