<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <h1>YHY Kalemleri</h1>
                        <a href="<?=base_url()?>admin/logosorgulari/action_masrafsorgula/<?=$baslangic?>/<?=$bitis?>/<?=$masrafturu?>">
                            <button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a>
                        <a href="<?=base_url()?>admin/logosorgulari/action_masrafsorgulatum/<?=$baslangic?>/<?=$bitis?>/<?=$masrafturu?>">
                            <button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i>Tüm İstasyonlar İçin Excel Raporu Al</button></a>
                        <hr>
                        <div class="table-responsive dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-bordered table-hover table">
                                <thead>
                                    <tr>
                                        <td>ACCOUNT CODE</td>
                                        <td>MM_KODU</td>
                                        <td>MM_ADI</td>
                                        <td>MM_OZELKOD</td>
                                        <td>BORC</td>
                                        <td>ACIKLAMA</td>
                                        <td>TARİH</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($yhy as $as) {?>
                                    <tr>
                                        <td><?=$as->ACCOUNTCODE?></td>
                                        <td><?=$as->MM_KODU?></td>
                                        <td><?=$as->MM_ADI?></td>
                                        <td><?=$as->MM_OZELKOD5?></td>
                                        <td><?=$as->BORÇ?></td>
                                        <td><?=$as->LINEEXP?></td>
                                        <td><?=$as->DATE_?></td>

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
                        <h1>YHY Sorgula</h1>
                        <hr>
                        <form action="<?=base_url()?>admin/logosorgulariyhy/logosorgulariyhy2server" method="post">
                            <div class="form-group row">
                                <label class="col-md-2 col-form-label">Masraf Türü</label>
                                <div class="col-md-3">
                                    <select class="form-control" name="masrafturu">
                                        <option value="730.3.033">Enerji</option>
                                        <option value="720.1.100">İşçilik</option>
                                        <option value="gug">GÜG</option>
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
        </div>
    </div>
    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

    <!-- Responsive Table js -->
    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

    <!-- Init js -->
    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

    <!-- App js -->
    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
