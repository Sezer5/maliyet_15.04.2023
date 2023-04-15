<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <center>
                            <h1>Ambalaj Paketleme</h1>
                        </center>
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Adı</th>
                                        <th>Fiyat TL</th>
                                        <th>Fiyat $</th>
                                        <th>Fiyat €</th>
                                        <th>Fire</th>
                                        <th>Sonuç TL</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($ambalajmaliyeti as $rs){?>
                                    <form action="<?=base_url()?>admin/Ambalajmaliyeti/ambalajmaliyeti_guncelleme/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->adi?></td>
                                            <td><input type="text" name="fiyat_tl" value="<?=$rs->fiyat_tl?>"></td>
                                            <td><input type="text" name="fiyat_usd" value="<?=$rs->fiyat_usd?>"></td>
                                            <td><input type="text" name="fiyat_euro" value="<?=$rs->fiyat_euro?>"></td>
                                            <td><input type="text" name="fire" value="<?=$rs->fire?>"></td>
                                            <td><?=$rs->sonuc_tl?></td>
                                            <td><button type="submit" class="btn-success" title="Save"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <table class="table-responsive table-bordered table table-hover">
                            <tr>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Dolar</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($dolar as $rs){?>
                                                <form action="<?=base_url()?>admin/Ambalajmaliyeti/otomatik_paketleme_tonaj_guncelleme" method="post">
                                                    <tr>
                                                        <td><?=$rs->fiyat?></td>

                                                    </tr>
                                                </form>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                                <td>
                                    <div class="table-responsive">
                                        <table class="table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Euro</th>
                                                    <th>Değiştir</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($euro as $rs){?>
                                                <form action="<?=base_url()?>admin/Ambalajmaliyeti/otomatik_paketleme_tonaj_guncelleme" method="post">
                                                    <tr>
                                                        <td><?=$rs->fiyat?></td>

                                                        <td><button type="submit" class="btn-success" title="Save"><i class="icon-reload"></i></button></td>
                                                    </tr>
                                                </form>
                                                <?php }?>
                                            </tbody>
                                        </table>
                                    </div>
                                </td>
                            </tr>
                        </table>


                    </div>

                </div>

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
