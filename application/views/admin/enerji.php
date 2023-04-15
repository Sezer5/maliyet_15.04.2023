
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings"></a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Settings">
                            <div class="body">
                                <div class="row">
                                    <div class="col-xl-12 table-responsive card-box">
                                        <h1>ENERJİ</h1>
                                        <table class="table-striped table-bordered table-hover mb-0" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <td colspan="7" style="text-align:right;"><a href="<?=base_url()?>admin/enerji/enerji_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                </tr>
                                                <tr>
                                                    <th>Adı</th>
                                                    <th>Saatlik Tüketim (Sa/Kw)</th>
                                                    <th>Günlük Tüketim</th>
                                                    <th>Aylık Tüketim</th>
                                                    <th>Günlük Çalışma Saati</th>
                                                    <th>Aylık Çalışılan Gün</th>
                                                    <th>Değiştir</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($enerji as $ds){?>
                                                <form action="<?=base_url()?>admin/enerji/enerji_guncelle/<?=$ds->Id?>" method="post">
                                                    <tr>
                                                        <td><?=$ds->adi?></td>
                                                        <td><input type="text" value="<?=$ds->saatliktuketim?>" size="6" name="saatlik"></td>
                                                        <td><?=$ds->gunluktuketim?></td>
                                                        <td><?=$ds->ayliktuketim?></td>
                                                        <td><?=$ds->gunsaati?></td>
                                                        <td><?=$ds->aydakigun?></td>
                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
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
                </div>
            </div>
        </div>
    </div>
</div>
</div>
