
    <div id="main-content">
        <div class="container-fluid">
            <br>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <center>
                        <h1>Dağılım Tabloları</h1>
                    </center>
                    <div class="card">
                        <div class="body">
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Değirmenler</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences5">Değirmen 6</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Dik Değirmenler</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences">Kaplı</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences2">Sarkaç</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences3">Granül</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences4">Granül Ekstra</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="Settings">
                                <div class="body">
                                    <h1>Değirmenler</h1>
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                         <!--   <div class="dropdown float-right">
                                                <a href="<?=base_url()?>admin/kapasite/kapasite_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a>
                                            </div> -->
                                            <div class="responsive-table-plugin">
                                                <div class="table-rep-plugin">
                                                    <div class="table-responsive" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Değirmen No</th>
                                                                    <th>Seperatör</th>

                                                                    <th>0,120µ
                                                                    </th>
                                                                    <th>0,95µ
                                                                    </th>
                                                                    <th>0,85µ
                                                                    </th>
                                                                    <th>75µ
                                                                    </th>
                                                                    <th>65µ
                                                                    </th>
                                                                    <th>650µ
                                                                    </th>
                                                                    <th>1µ
                                                                    </th>
                                                                    <th>2µ
                                                                    </th>
                                                                    <th>3µ
                                                                    </th>
                                                                    <th>5µ
                                                                    </th>
                                                                    <th>10µ
                                                                    </th>
                                                                    <th>20µ
                                                                    </th>
                                                                    <th>40µ
                                                                    </th>
                                                                    <th>60µ
                                                                    </th>
                                                                    <th>70µ
                                                                    </th>
                                                                    <th>80µ
                                                                    </th>
                                                                    <th>100µ
                                                                    </th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($degirmenler as $is){if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/kapasite/degirmen_guncelle/<?=$is->Id?>" method="post">

                                                                    <tr>
                                                                        <td><?=$is->degirmen_no?></td>
                                                                        <td><?=$is->adi?></td>

                                                                        <td><input type="text" name="m0120" size="6" value="<?=$is->m0120?>"></td>
                                                                        <td><input type="text" name="m095" size="6" value="<?=$is->m095?>"></td>
                                                                        <td><input type="text" name="m085" size="6" value="<?=$is->m085?>"></td>
                                                                        <td><input type="text" name="m75" size="6" value="<?=$is->m75?>"></td>
                                                                        <td><input type="text" name="m65" size="6" value="<?=$is->m65?>"></td>
                                                                        <td><input type="text" name="m650" size="6" value="<?=$is->m650?>"></td>
                                                                        <td><input type="text" name="m1" size="6" value="<?=$is->m1?>"></td>
                                                                        <td><input type="text" name="m2" size="6" value="<?=$is->m2?>"></td>
                                                                        <td><input type="text" name="m3" size="6" value="<?=$is->m3?>"></td>
                                                                        <td><input type="text" name="m5" size="6" value="<?=$is->m5?>"></td>
                                                                        <td><input type="text" name="m10" size="6" value="<?=$is->m10?>"></td>
                                                                        <td><input type="text" name="m20" size="6" value="<?=$is->m20?>"></td>
                                                                        <td><input type="text" name="m40" size="6" value="<?=$is->m40?>"></td>
                                                                        <td><input type="text" name="m60" size="6" value="<?=$is->m60?>"></td>
                                                                        <td><input type="text" name="m70" size="6" value="<?=$is->m70?>"></td>
                                                                        <td><input type="text" name="m80" size="6" value="<?=$is->m80?>"></td>
                                                                        <td><input type="text" name="m100" size="6" value="<?=$is->m100?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->degirmen_no?></td>
                                                                    <td><?=$is->adi?></td>

                                                                    <td><?=number_format($is->m0120,0,",",".");?></td>
                                                                    <td><?=number_format($is->m095,0,",",".");?></td>
                                                                    <td><?=number_format($is->m085,0,",",".");?></td>
                                                                    <td><?=number_format($is->m75,0,",",".");?></td>
                                                                    <td><?=number_format($is->m65,0,",",".");?></td>
                                                                    <td><?=number_format($is->m650,0,",",".");?></td>
                                                                    <td><?=number_format($is->m1,0,",",".");?></td>
                                                                    <td><?=number_format($is->m2,0,",",".");?></td>
                                                                    <td><?=number_format($is->m3,0,",",".");?></td>
                                                                    <td><?=number_format($is->m5,0,",",".");?></td>
                                                                    <td><?=number_format($is->m10,0,",",".");?></td>
                                                                    <td><?=number_format($is->m20,0,",",".");?></td>
                                                                    <td><?=number_format($is->m40,0,",",".");?></td>
                                                                    <td><?=number_format($is->m60,0,",",".");?></td>
                                                                    <td><?=number_format($is->m70,0,",",".");?></td>
                                                                    <td><?=number_format($is->m80,0,",",".");?></td>
                                                                    <td><?=number_format($is->m100,0,",",".");?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="preferences5">
                                <div class="body">
                                    <h1>Değirmen 6</h1>
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <div class="dropdown float-right">
                                                <a href="<?=base_url()?>admin/kapasite/kapasite_excel"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a>
                                            </div>
                                            <div class="responsive-table-plugin">
                                                <div class="table-rep-plugin">
                                                    <div class="table-responsive" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Değirmen No</th>
                                                                    <th>Seperatör</th>

                                                                    <th>Talk 2X
                                                                    </th>
                                                                    <th>Talk 5X
                                                                    </th>
                                                                    <th>Talk 10X
                                                                    </th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($degirmen_alti as $is){if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/kapasite/degirmenalti_guncelle/<?=$is->Id?>" method="post">

                                                                    <tr>
                                                                        <td><?=$is->degirmen_no?></td>
                                                                        <td><?=$is->adi?></td>

                                                                        <td><input type="text" name="talk2x" size="6" value="<?=$is->talk2x?>"></td>
                                                                        <td><input type="text" name="talk5x" size="6" value="<?=$is->talk5x?>"></td>
                                                                        <td><input type="text" name="talk10x" size="6" value="<?=$is->talk10x?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->degirmen_no?></td>
                                                                    <td><?=$is->adi?></td>

                                                                    <td><?=number_format($is->talk2x,0,",",".");?></td>
                                                                    <td><?=number_format($is->talk5x,0,",",".");?></td>
                                                                    <td><?=number_format($is->talk10x,0,",",".");?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="billings">
                                <div class="body">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h1>Dik Değirmenler</h1>

                                            <div class="responsive-table-plugin">
                                                <div class="table-rep-plugin">
                                                    <div class="table-responsive" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Değirmen Adı</th>
                                                                    <th>0,120µ
                                                                    </th>
                                                                    <th>0,95µ
                                                                    </th>
                                                                    <th>0,85µ
                                                                    </th>
                                                                    <th>0,75µ
                                                                    </th>
                                                                    <th>0,65µ
                                                                    </th>
                                                                    <th>Hidrofil
                                                                    </th>
                                                                    <th>Talk2X
                                                                    </th>
                                                                    <th>Talk5X
                                                                    </th>
                                                                    <th>Hidrofil K
                                                                    </th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($dikdegirmenler as $is){if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/kapasite/dikdegirmen_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td><?=$is->adi?></td>
                                                                        <td><input type="text" name="m0120" size="6" value="<?=$is->m0120?>"></td>
                                                                        <td><input type="text" name="m095" size="6" value="<?=$is->m095?>"></td>
                                                                        <td><input type="text" name="m085" size="6" value="<?=$is->m085?>"></td>
                                                                        <td><input type="text" name="m075" size="6" value="<?=$is->m075?>"></td>
                                                                        <td><input type="text" name="m065" size="6" value="<?=$is->m065?>"></td>
                                                                        <td><input type="text" name="hidrofil" size="6" value="<?=$is->hidrofil?>"></td>
                                                                        <td><input type="text" name="talk2x" size="6" value="<?=$is->talk2x?>"></td>
                                                                        <td><input type="text" name="talk5x" size="6" value="<?=$is->talk5x?>"></td>
                                                                        <td><input type="text" name="hidrofilk" size="6" value="<?=$is->hidrofilk?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->adi?></td>
                                                                    <td><?=$is->m0120?></td>
                                                                    <td><?=$is->m095?></td>
                                                                    <td><?=$is->m085?></td>
                                                                    <td><?=$is->m075?></td>
                                                                    <td><?=$is->m065?></td>
                                                                    <td><?=$is->hidrofil?></td>
                                                                    <td><?=$is->talk2x?></td>
                                                                    <td><?=$is->talk5x?></td>
                                                                    <td><?=$is->hidrofilk?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>

                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="preferences">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h1>Kaplı</h1>

                                            <div class="responsive-table-plugin">
                                                <div class="table-rep-plugin">
                                                    <div class="table-responsive" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>*</th>
                                                                    <th>İstasyon</th>
                                                                    <th>0,95K
                                                                    </th>
                                                                    <th>0,85K
                                                                    </th>
                                                                    <th>0,75K
                                                                    </th>
                                                                    <th>GLS 926</th>
                                                                    <th>0,65K
                                                                    </th>
                                                                    <th>0,650K
                                                                    </th>
                                                                    <th>1FK
                                                                    </th>
                                                                    <th>1K
                                                                    </th>
                                                                    <th>GLS 912
                                                                    </th>
                                                                    <th>2K
                                                                    </th>
                                                                    <th>3K
                                                                    </th>
                                                                    <th>5K
                                                                    </th>
                                                                    <th>10K
                                                                    </th>
                                                                    <th>ECO PRO
                                                                    </th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($kaplama as $is){if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/kapasite/kaplama_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td><?=$is->kplust?></td>
                                                                        <td><?=$is->ist?></td>
                                                                        <td><input type="text" name="k95" size="6" value="<?=$is->k95?>"></td>
                                                                        <td><input type="text" name="k85" size="6" value="<?=$is->k85?>"></td>
                                                                        <td><input type="text" name="k75" size="6" value="<?=$is->k75?>"></td>
                                                                        <td><input type="text" name="gls926" size="6" value="<?=$is->gls926?>"></td>
                                                                        <td><input type="text" name="k65" size="6" value="<?=$is->k65?>"></td>
                                                                        <td><input type="text" name="k650" size="6" value="<?=$is->k650?>"></td>
                                                                        <td><input type="text" name="fk1" size="6" value="<?=$is->fk1?>"></td>
                                                                        <td><input type="text" name="k1" size="6" value="<?=$is->k1?>"></td>
                                                                        <td><input type="text" name="gls912" size="6" value="<?=$is->gls912?>"></td>
                                                                        <td><input type="text" name="k2" size="6" value="<?=$is->k2?>"></td>
                                                                        <td><input type="text" name="k3" size="6" value="<?=$is->k3?>"></td>
                                                                        <td><input type="text" name="k5" size="6" value="<?=$is->k5?>"></td>
                                                                        <td><input type="text" name="k10" size="6" value="<?=$is->k10?>"></td>
                                                                        <td><input type="text" name="ecopro" size="6" value="<?=$is->ecopro?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->kplust?></td>
                                                                    <td><?=$is->ist?></td>
                                                                    <td><?=$is->k95?></td>
                                                                    <td><?=$is->k85?></td>
                                                                    <td><?=$is->k75?></td>
                                                                    <td><?=$is->gls926?></td>
                                                                    <td><?=$is->k65?></td>
                                                                    <td><?=$is->k650?></td>
                                                                    <td><?=$is->fk1?></td>
                                                                    <td><?=$is->k1?></td>
                                                                    <td><?=$is->gls912?></td>
                                                                    <td><?=$is->k2?></td>
                                                                    <td><?=$is->k3?></td>
                                                                    <td><?=$is->k5?></td>
                                                                    <td><?=$is->k10?></td>
                                                                    <td><?=$is->ecopro?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="preferences2">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h1>Sarkaç</h1>

                                            <div class="responsive-table-plugin">
                                                <div class="table-rep-plugin">
                                                    <div class="table-responsive" data-pattern="priority-columns">
                                                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th>Zaman</th>
                                                                    <th>İstasyon Adı</th>
                                                                    <th>100
                                                                    </th>
                                                                    <th>A100
                                                                    </th>
                                                                    <th>KA100
                                                                    </th>
                                                                    <th>Güncelle</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php foreach($sarkac as $is){if($is->toplampivot!=1){?>
                                                                <form action="<?=base_url()?>admin/kapasite/sarkac_guncelle/<?=$is->Id?>" method="post">
                                                                    <tr>
                                                                        <td><?=$is->srk_ust?></td>
                                                                        <td><?=$is->adi?></td>
                                                                        <td><input type="text" name="i100" size="6" value="<?=$is->i100?>"></td>
                                                                        <td><input type="text" name="a100" size="6" value="<?=$is->a100?>"></td>
                                                                        <td><input type="text" name="ka100" size="6" value="<?=$is->ka100?>"></td>
                                                                        <td><button class="waves-effect waves-light" style="background-color:#364db3"> <i class="icon-reload" style="color:white"></i> </button></td>
                                                                    </tr>
                                                                </form>
                                                                <?php }else{?>
                                                                <tr>
                                                                    <td><?=$is->srk_ust?></td>
                                                                    <td><?=$is->adi?></td>
                                                                    <td><?=$is->i100?></td>
                                                                    <td><?=$is->a100?></td>
                                                                    <td><?=$is->ka100?></td>
                                                                    <td></td>
                                                                </tr>
                                                                <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>


                                                </div>

                                            </div>


                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="preferences3">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h1>Granül</h1>

                                            <div class="col-xl-4 table-responsive">
                                                <table class="table-striped table-bordered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Adı</th>
                                                            <th>Saatlik</th>
                                                            <th>Günlük</th>
                                                            <th>Aylık</th>
                                                            <th>Değiştir</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($granulkapasitemozaik as $ds){?>
                                                        <form action="<?=base_url()?>admin/kapasite/granul_guncelle/<?=$ds->Id?>" method="post">
                                                            <tr>
                                                                <td><?=$ds->urunadi?></td>
                                                                <td><input type="text" value="<?=$ds->saatlik?>" size="4" name="saatlik"></td>
                                                                <td><?=$ds->gunluk?></td>
                                                                <td><?=$ds->aylik?></td>
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
                            <div class="tab-pane" id="preferences4">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <h1>Granül Ekstra</h1>
                                            <div class="table-responsive">
                                                <table class="table-striped table-bordered table-hover mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Adı</th>
                                                            <th>Saatlik</th>
                                                            <th>Günlük</th>
                                                            <th>Aylık</th>
                                                            <th>Değiştir</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($granulkapasitebeyaz as $ds){?>
                                                        <form action="<?=base_url()?>admin/kapasite/granul_guncelle/<?=$ds->Id?>" method="post">
                                                            <tr>
                                                                <td><?=$ds->urunadi?></td>
                                                                <td><input type="text" value="<?=$ds->saatlik?>" size="4" name="saatlik"></td>
                                                                <td><?=$ds->gunluk?></td>
                                                                <td><?=$ds->aylik?></td>
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
    </div>
