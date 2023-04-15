<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="card">
                <a href="<?=base_url()?>uye/lokasyonnakliye/lokasyonnakliye"><button class=" btn-icon waves-effect waves-light" style="background-color:#364db3;color:white;"><i class="ti-arrow-left"></i> Geri Dön</button></a>
                <div class="col-md-6">
                    <div class="card-box">
                        <div class="table-responsive">
                            <table class="table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Yolculuk Süresi(GÜN)</th>
                                        <th>Yapılan KM</th>
                                        <th>Ortalama Yakıt Tüketimi</th>
                                        <th>Yakıt Birim Fiyatı</th>
                                        <th>Yakıt Litre</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sbt as $rs){?>
                                    <form action="<?=base_url()?>uye/lokasyonnakliye/yolbilgileri_guncelle/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td><input type="text" name="yolsuresi" value="<?=$rs->yolsuresi?>" size="10"></td>
                                            <td><input type="text" name="yolkm" value="<?=$rs->yolkm?>" size="10"></td>
                                            <td><input type="text" name="yakittukort" value="<?=$rs->yakittukort?>" size="10"></td>
                                            <td><?=$rs->yakitbrfiyat?></td>
                                            <td><?=$rs->yakitlitre?></td>
                                            <td><button class=" btn-icon waves-effect waves-light" style="background-color:#364db3;color:white;"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Amortisman Değeri</th>
                                        <th>Amortisman Ömrü</th>
                                        <th>Amortisman (Yıllık)</th>
                                        <th>Amortisman (Aylık)</th>
                                        <th>Amortisman (Günlük)</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sbt as $rs){?>
                                    <form action="<?=base_url()?>uye/lokasyonnakliye/amortisman_guncelle/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td><input type="text" name="amortismandeger" value="<?=$rs->amortismandeger?>" size="10"></td>
                                            <td><input type="text" name="amortismanomur" value="<?=$rs->amortismanomur?>" size="10"></td>
                                            <td><?=$rs->amortismanyillik?></td>
                                            <td><?=$rs->amortismanaylik?></td>
                                            <td><?=$rs->amortismangunluk?></td>
                                            <td><button class=" btn-icon waves-effect waves-light" style="background-color:#364db3;color:white;"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Lastik Cinsi</th>
                                        <th>Adet</th>
                                        <th>Lastik Ömrü (KM)</th>
                                        <th>Lastik Birim Fiyatı (TL)</th>
                                        <th>Toplam Lastik Fiyatı (TL)</th>
                                        <th>KM Başına Lastik Yıpranma Fiyatı (TL)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($lastik as $rs){?>
                                    <tr>
                                        <td>Çekici (ÖN LASTİK)</td>
                                        <td><?=$rs->cekicionmiktar?></td>
                                        <td><?=$rs->cekicionomur?></td>
                                        <td><?=$rs->cekicionbrfiyat?></td>
                                        <td><?=$rs->cekiciontoplam?></td>
                                        <td><?=$rs->cekicionyip?></td>
                                    </tr>
                                    <tr>
                                        <td>Çekici (ÇEKER LASTİK)</td>
                                        <td><?=$rs->cekicicekermiktar?></td>
                                        <td><?=$rs->cekicicekeromur?></td>
                                        <td><?=$rs->cekicicekerbrfiyat?></td>
                                        <td><?=$rs->cekicicekertoplam?></td>
                                        <td><?=$rs->cekicicekeryip?></td>
                                    </tr>
                                    <tr>
                                        <td>Dorse (PİLOT LASTİK)</td>
                                        <td><?=$rs->dorsepilotmiktar?></td>
                                        <td><?=$rs->dorsepilotomur?></td>
                                        <td><?=$rs->dorsepilotbrfiyat?></td>
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
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Tamir Bakım Bedeli</th>
                                        <th>Bakım KM</th>
                                        <th>Bakım Fiyatı</th>
                                        <th>KM Başına Maliyet</th>
                                        <th>400 KM Bakım Miktarı</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sbt as $rs){?>
                                    <form action="<?=base_url()?>uye/lokasyonnakliye/tamirbakim_guncelle/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td>Çekici Yağ Bakım</td>
                                            <td><input type="text" name="cekicibakimkm" value="<?=$rs->cekicibakimkm?>" size="10"></td>
                                            <td><input type="text" name="cekicibakimfiyat" value="<?=$rs->cekicibakimfiyat?>" size="10"></td>
                                            <td><?=$rs->cekicikmbasina?></td>
                                            <td><?=$rs->cekicidortyuz?></td>
                                        </tr>
                                        <tr>
                                            <td>Dorse + Silobas Bakım</td>
                                            <td><input type="text" name="silobasbakimkm" value="<?=$rs->silobasbakimkm?>" size="10"></td>
                                            <td><input type="text" name="silobasbakimfiyat" value="<?=$rs->silobasbakimfiyat?>" size="10"></td>
                                            <td><?=$rs->silobaskmbasina?></td>
                                            <td><?=$rs->silobasdortyuz?></td>
                                        </tr>
                                        <tr>
                                            <td>Toplam</td>
                                            <td></td>
                                            <td></td>
                                            <td><?=$rs->ortbrfiyatkm?></td>
                                            <td><?=$rs->ortbrfiyat400?></td>
                                            <td><button class=" btn-icon waves-effect waves-light" style="background-color:#364db3;color:white;"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered table-responsive table-hover">
                                <thead>
                                    <tr>
                                        <th>Liste Fiyatı</th>
                                        <th>Yakıt Pompa Fiyatı</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sbt as $rs){?>
                                    <form action="<?=base_url()?>uye/lokasyonnakliye/listefiyat_guncelle/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td><input type="text" name="listefiyat" value="<?=$rs->listefiyat?>" size="10"></td>
                                            <td><?=$rs->yakitpompafiyat?></td>
                                            <td><button class=" btn-icon waves-effect waves-light" style="background-color:#364db3;color:white;"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table-bordered table-responsive table-hover" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Şirket Adı</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($sbt as $rs){?>
                                    <form action="<?=base_url()?>uye/lokasyonnakliye/sirket_guncelle/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td><input type="text" name="sirket" value="<?=$rs->sirket?>" size="50"></td>
                                            <td><button class=" btn-icon waves-effect waves-light" style="background-color:#364db3;color:white;"><i class="icon-reload"></i></button></td>
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
        <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>
        <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
    </div>
</div>
