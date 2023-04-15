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
                                <h1 style="display:inline;">Raporlar</h1>

                                <hr>
                                <div class="table-responsive">
                                    <table class="table-striped table-bordered" style="width:100%;">
                                        <thead>

                                            <tr>
                                                <th>Id</th>
                                                <th>Raporlama Tarihi</th>
                                                <th>Raporlayan Kişi</th>
                                                <th>Görüntüle</th>
                                                <th>Excel Raporu</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($rapor as $rs){?>
                                            <tr>
                                                <td><?=$rs->Id?></td>
                                                <td><?=$rs->tarih?></td>
                                                <td><?=$rs->adsoy?></td>
                                                <td><a href="<?=base_url()?>admin/raporlamalar/rapor_guncel_detay/<?=$rs->Id?>"><button class="btn-icon waves-effect waves-light btn-success" style="width:100%;"> <i class="fa fa-search"></i></button></a></td>
                                                <td><a href="<?=base_url()?>admin/Butunexceller_eski/Butunexceller_eski/<?=$rs->Id?>"><button class="btn-icon waves-effect waves-light btn-success" style="width:100%;"> <i class="fa fa-file-excel-o"></i></button></a></td>
                                            </tr>
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
