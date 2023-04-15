<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <hr>
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item">
                                <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                    <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                    <span class="d-none d-sm-block">Güncel Nakliye Raporları</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#home4" data-toggle="tab" aria-expanded="true" class="nav-link">
                                    <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                    <span class="d-none d-sm-block">Gerçekleşen Nakliye Raporları</span>
                                </a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active" id="home2">
                                <div class="col-lg-12 card-box">
                                    <div class="card-box">
                                        <h1>Güncel Nakliye Raporları</h1>
                                        <hr>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <hr>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card-box">

                                                <table class="table-bordered mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Raporlama Tarihi</th>
                                                            <th>İncele</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($guncel_nakliye_raporlari as $rs){?>
                                                        <tr>
                                                            <td><?=$rs->rapor_id?></td>
                                                            <td><?=$rs->rapor_tarih?></td>
                                                            <td>
                                                                <a href="<?=base_url()?>admin/raporlamalar/guncel_nakliye_rapor_detay/<?=$rs->rapor_id?>">
                                                                    <button type="submit" class="btn-success"><i class="fa fa-search"></i> İncele</button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <?php }?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade show" id="home4">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h1>Gerçekleşen Nakliye</h1>
                                        <hr>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card-box">

                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            <h3>
                                                                Plaka
                                                            </h3>
                                                        </th>
                                                        <th>
                                                            <h3>
                                                                İncele
                                                            </h3>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <form action="<?=base_url()?>admin/Istatistikler/gerceklesen_nakliye_detay" method="post" enctype="multipart/form-data">
                                                        <tr>
                                                            <td>
                                                                <select class="form-control" name="plaka">
                                                                    <?php foreach($gerceklesen_nakliye as $rs){?>
                                                                    <option value="<?=$rs->plaka?>"><?=$rs->plaka?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </td>
                                                            <td><button type="submit" class="btn btn-success"><i class="fa fa-search"></i> İncele</button></td>
                                                        </tr>
                                                    </form>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h1>Gerçekleşen Nakliye Raporlamalar</h1>
                                        <hr>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="card-box">

                                            <table class="table table-bordered mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Raporlama Yapan Kişi</th>
                                                        <th>Raporlama Tarihi</th>
                                                        <th>Rapor Hesaplama Tarihi</th>
                                                        <th>İncele</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($gerceklesen_nakliye_raporlar as $rs){?>
                                                    <tr>
                                                        <td><?=$rs->Id?></td>
                                                        <td><?=$rs->adsoy?></td>
                                                        <td><?=$rs->tarih?></td>
                                                        <td><?=$rs->hesaplanan_tarih?></td>
                                                        <td>
                                                            <a href="<?=base_url()?>admin/Istatistikler/gerceklesen_nakliye_rapor_detay/<?=$rs->Id?>">
                                                                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> İncele</button>
                                                            </a>
                                                        </td>
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

                    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

                    <!-- Responsive Table js -->
                    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                    <!-- Init js -->
                    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                    <!-- App js -->
                    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
