</div>

<div class="content-page">
    <div id="main-content">
        <div class="container-fluid">
            <br>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-box">
                            <h1>GUG Kalemleri MM</h1>
                            <a href="<?=base_url()?>admin/logosorgulari/action_gugsorgulatum/<?=$baslangic?>/<?=$bitis?>">
                                <button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i>Tüm İstasyonlar İçin Excel Raporu Al</button></a>
                            <hr>
                            <div class="table" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
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
                                        <?php foreach($gug as $as) {?>
                                        <tr>
                                            <td><?=$as->ACCOUNTCODE?></td>
                                            <td><?=$as->MM_KODU?></td>
                                            <td><?=$as->MM_ADI?></td>
                                            <td><?=$as->MM_OZELKOD?></td>
                                            <td><?=$as->BORC?></td>
                                            <td><textarea rows="3" cols="50" readonly><?=$as->ACIKLAMA?></textarea> </td>
                                            <td><?=$as->TARIH?></td>
                                        </tr>
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

    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

    <!-- Responsive Table js -->
    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

    <!-- Init js -->
    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

    <!-- App js -->
    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
