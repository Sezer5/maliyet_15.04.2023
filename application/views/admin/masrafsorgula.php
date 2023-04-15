<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h1>Masraf Kalemleri</h1>
                    <a href="<?=base_url()?>admin/logosorgulari/action_masrafsorgula/<?=$istasyonadi?>/<?=$baslangic?>/<?=$bitis?>/<?=$masrafturu?>">
                        <button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a>
                    <a href="<?=base_url()?>admin/logosorgulari/action_masrafsorgulatum/<?=$baslangic?>/<?=$bitis?>/<?=$masrafturu?>">
                        <button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i>Tüm İstasyonlar İçin Excel Raporu Al</button></a>
                    <hr>
                    <div class="table-responsive responsive-table-plugin" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                            <thead>
                                <tr>
                                    <td>ACCOUNT CODE</td>
                                    <td>MM_KODU</td>
                                    <td>MM_ADI</td>
                                    <td>MM_OZELKOD</td>
                                    <td>BORC</td>
                                    <td>GUNCELLE</td>
                                    <td>ACIKLAMA</td>
                                    <td>TARİH</td>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach($masraf as $as) {?>
                                <form action="<?=base_url()?>admin/logosorgulari/masraf_guncelle" method="post">
                                    <tr>
                                        <td><?=$as->ACCOUNTCODE?></td>
                                        <td><?=$as->MM_KODU?></td>
                                        <td><?=$as->MM_ADI?></td>
                                        <td><?=$as->MM_OZELKOD?></td>
                                        <td><input type="text" name="borc" value="<?=$as->BORC?>"></td>
                                        <input type="text" name="Id" value="<?=$as->Id?>" hidden>
                                        <input type="text" name="istasyonadi" value="<?=$istasyonadi?>" hidden>
                                        <input type="text" name="baslangic" value="<?=$baslangic?>" hidden>
                                        <input type="text" name="bitis" value="<?=$bitis?>" hidden>
                                        <input type="text" name="masrafturu" value="<?=$masrafturu?>" hidden>
                                        <td><button><i class="icon-reload"></i></button></td>
                                        <td><textarea rows="3" cols="50" readonly><?=$as->ACIKLAMA?></textarea> </td>
                                        <td><?=$as->TARIH?></td>

                                    </tr>
                                </form>
                                <?php }?>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
        <?php 
            
            
            echo $istasyonadi; ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box">
                    <h1>Masraf Sorgula</h1>
                    <hr>
                    <form action="<?=base_url()?>admin/logosorgulari/masrafsorgula" method="post">
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">İstasyon Adı</label>
                            <div class="col-md-3">
                                <select class="form-control" name="istasyonadi">
                                    <option value="001.008">Değirmen 1</option>
                                    <option value="001.009">Değirmen 2</option>
                                    <option value="001.010">Değirmen 3</option>
                                    <option value="001.011">Değirmen 5</option>
                                    <option value="001.012">Dik değirmen</option>
                                    <option value="001.006">TPL 5</option>
                                    <option value="001.007">TPL 6</option>
                                    <option value="001.016">Kaplama 3</option>
                                    <option value="001.017">Kaplama 4</option>
                                    <option value="001.019">Kaplama 6</option>
                                    <option value="001.004">Beyaztaş</option>
                                    <option value="001.005">Mozaik</option>
                                </select>

                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label">Masraf Türü</label>
                            <div class="col-md-3">
                                <select class="form-control" name="masrafturu">
                                    <option value="730.3.033">Enerji</option>
                                    <option value="720.1.100">İşçilik</option>
                                    <option value="710.0.111">Ö.K. veya S.A.</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="simpleinput">Başlangıç</label>
                            <div class="col-md-3">
                                <input type="text" id="simpleinput" class="form-control" name="baslangic" placeholder="YYYY/AA/GG">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-2 col-form-label" for="simpleinput">Bitiş</label>
                            <div class="col-md-3">
                                <input type="text" id="simpleinput" class="form-control" name="bitis" placeholder="YYYY/AA/GG">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success btn-rounded width-md waves-effect waves-light">Sorgula</button>
                    </form>
                </div>

            </div>
        </div>

        <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
