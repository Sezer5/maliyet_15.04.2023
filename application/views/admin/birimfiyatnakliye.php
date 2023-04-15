<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
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
                                            <form action="<?=base_url()?>admin/birimfiyatnakliye/parametre_guncelle/<?=$ps->Id?>" method="post">
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
                                            <form action="<?=base_url()?>admin/birimfiyatnakliye/parametre_guncelle_lastik/<?=$rs->Id?>" method="post">

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

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
