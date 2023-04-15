<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <center>
                            <h1>Amortisman</h1>
                        </center>
                        <div class="table-responsive">
                            <table class="table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <td colspan="7" style="text-align:right;"><a href="<?=base_url()?>admin/amortisman/action_amortisman"><button type="button" class="btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                    </tr>
                                    <tr>
                                        <th>Adı</th>
                                        <th>Cari Değer</th>
                                        <th>Faydalı Ömür</th>
                                        <th>Yıl / TL</th>
                                        <th>Ay / TL</th>
                                        <th>Saat / TL</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($amortisman as $as) {?>
                                    <tr>
                                        <form action="<?=base_url()?>admin/amortisman/amortisman_guncelle/<?=$as->Id?>" method="post">
                                            <th><input type="text" name="adi" value="<?=$as->adi?>" readonly style="width:100%;"></th>
                                            <th><input type="text" name="carideger" value="<?=$as->carideger?>" style="width:100%;"></th>
                                            <th><input type="text" name="faydaliomur" value="<?=$as->faydaliomur?>" style="width:100%;"></th>
                                            <th><?=$as->yiltl?></th>
                                            <th><?=$as->aytl?></th>
                                            <th><?=$as->saattl?></th>
                                            <th><button class="btn-secondary" style="background-color:#364db3;width:100%;"> <i class="icon-reload" style="color:white;"></i> </button></th>
                                        </form>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <center>
                            <h1>Araç Amortismanları</h1>
                        </center>
                        <div class="table-responsive">
                            <table class="table-bordered" style="width:100%;">
                                <thead>
                                    <tr>
                                        <td colspan="7" style="text-align:right;"><a href="<?=base_url()?>admin/amortisman/action_amortisman_arac"><button type="button" class="btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                    </tr>
                                    <tr>
                                        <th>Adı</th>
                                        <th>Cari Değer</th>
                                        <th>Faydalı Ömür</th>
                                        <th>Yıl / TL</th>
                                        <th>Ay / TL</th>
                                        <th>Saat / TL</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($araclar as $as) {?>
                                    <tr>
                                        <form action="<?=base_url()?>admin/amortisman/amortisman_guncelle_arac/<?=$as->Id?>" method="post">
                                            <th><?=$as->plaka?></th>
                                            <th><input type="text" name="carideger" value="<?=$as->cari_deger?>" style="width:100%;"></th>
                                            <th><input type="text" name="faydaliomur" value="<?=$as->faydali_omur?>" style="width:100%;"></th>
                                            <th><?=$as->yiltl?></th>
                                            <th><?=$as->aytl?></th>
                                            <th><?=$as->saattl?></th>
                                            <th><button class="btn-secondary" style="background-color:#364db3;width:100%;"> <i class="icon-reload" style="color:white;"></i> </button></th>
                                        </form>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>

            <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

            <!-- Init js -->
            <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

            <!-- App js -->
            <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
