<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <h1>İstasyon Seçimi</h1>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>İstasyon Tipi</th>
                                        <th colspan="4" style="text-align:center;">İstasyonlar</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $d1='d1';
                                     $d2='d2';
                                     $d3='d3';
                                     $d5='d5';
                                     $dik='dik';
                                     $k3='k3';
                                     $k4='k4';
                                     $k6='k6';
                                     $tpl5='tpl5';
                                     $tpl6='tpl6';
                                     $bey='bey';
                                     $moz='moz';
                                
                                
                                ?>
                                    <tr>
                                        <td>Değirmen</td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Degirmenistatistik/<?=$d1?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Değirmen 1</button></a></td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Degirmenistatistik/<?=$d2?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Değirmen 2</button></a></td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Degirmenistatistik/<?=$d3?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Değirmen 3</button></a></td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Degirmenistatistik/<?=$d5?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Değirmen 5</button></a></td>
                                    </tr>
                                    <tr>
                                        <td>Dikdeğirmen</td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Degirmenistatistik/<?=$dik?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Dikdeğirmen</button></a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Kaplama</td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Kaplamaistatistik/<?=$k3?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Kaplama 3</button></a></td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Kaplamaistatistik/<?=$k4?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Kaplama 4</button></a></td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Kaplamaistatistik/<?=$k6?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Kaplama 6</button></a></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Sarkaç</td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Sarkacistatistik/<?=$tpl5?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">TPL 5</button></a></td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Sarkacistatistik/<?=$tpl6?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">TPL 6</button></a></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Granül(Beyaz Taş)</td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Granulistatistik/<?=$bey?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Beyaz Taş</button></a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Granül(Mozaik)</td>
                                        <td><a href="<?=base_url()?>admin/Istatistikler/Granulistatistik/<?=$moz?>"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light">Mozaik</button></a></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
