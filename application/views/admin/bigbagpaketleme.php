<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <center>
                            <h1>Bigbag Paketleme</h1>
                        </center>
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Maliyet Kalemi</th>
                                        <th>Sayı</th>
                                        <th>Maliyet</th>
                                        <th>Birim Maliyeti</th>
                                        <th>Günlük Maliyet</th>
                                        <th>Ton Başı Maliyet</th>
                                        <th>Ton Değeri</th>
                                        <th>Güncelle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($bigbagpaketleme as $rs){?>
                                    <form action="<?=base_url()?>admin/Ambalajmaliyeti/bigbag_paketleme_guncelleme/<?=$rs->Id?>" method="post">
                                        <tr>
                                            <td><?=$rs->Id?></td>
                                            <td><?=$rs->maliyetkalemi?></td>
                                            <td><input type="text" name="sayi" value="<?=$rs->sayi?>" size="3"></td>
                                            <td><input type="text" name="maliyet" value="<?=$rs->maliyet?>"></td>
                                            <td><?=$rs->birimmaliyet?></td>
                                            <td><?=$rs->gunlukmaliyet?></td>
                                            <td><?=$rs->tonbasimaliyet?></td>
                                            <td><?=$rs->tondegeri?></td>
                                            <td><button type="submit" class="btn-success" title="Save"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                        <hr>
                        <div class="table-responsive" style="width:25%;">
                            <table class="table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Ton Değeri</th>
                                        <th>Değiştir</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($tonaj as $rs){?>
                                    <form action="<?=base_url()?>admin/Ambalajmaliyeti/bigbag_paketleme_tonaj_guncelleme" method="post">
                                        <tr>
                                            <td><input type="text" name="tondegeri" value="<?=$rs->tondegeri?>"></td>

                                            <td><button type="submit" class="btn-success" title="Save"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
                                    <?php }?>
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
