<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <div class="clearfix">
                <div class="row">
                    <div class="col-xl-12">
                        <hr>
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Masraf Merkezleri Kırıkkale</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#profile2" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Yardımcı Hizmetler Kırıkkale</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="home2">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h1>Masraf Merkezleri</h1>
                                        <hr>
                                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/masrafmerkezler/action_masrafmerkezler"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Masraf Merkezi Kodu 1</th>
                                                        <th>Masraf Merkezi Kodu 2</th>
                                                        <th>Masraf Merkezleri</th>
                                                        <th>İşçilik</th>
                                                        <th>Enerji</th>
                                                        <th>Genel Üretim Giderleri</th>
                                                        <th>Toplam</th>
                                                        <th>Oranlar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($masrafmerkezleri as $as) {?>
                                                    <tr>
                                                        <td><?=$as->mmkodu?></td>
                                                        <td><?=$as->mmkodu2?></td>
                                                        <td><?=$as->masrafmerkezi?></td>
                                                        <td><?=$as->iscilik?></td>
                                                        <td><?=$as->enerji?></td>
                                                        <td><?=$as->gug?></td>
                                                        <td><?=$as->toplam?></td>
                                                        <td><?=$as->oranlar *100?></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile2">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h1>Yardımcı Hizmetler</h1>
                                        <hr>
                                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/masrafmerkezler/action_yhy"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Masraf Merkezleri</th>
                                                        <th>Dağılım Oranları</th>
                                                        <th>İşçilik</th>
                                                        <th>Enerji</th>
                                                        <th>Genel Üretim Giderleri</th>
                                                        <th>Toplam</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($yardimcihizmetler as $as) {?>
                                                    <tr>
                                                        <td><?=$as->masrafmerkezi?></td>
                                                        <td><?=$as->oranlar * 100?></td>
                                                        <td><?=$as->iscilik?></td>
                                                        <td><?=$as->enerji?></td>
                                                        <td><?=$as->gug?></td>
                                                        <td><?=$as->toplam?></td>

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

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
