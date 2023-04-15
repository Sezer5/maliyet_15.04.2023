
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
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <center>
                                                <h1>Değirmenler</h1>
                                            </center>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>İstasyon Tipi</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Adı</th>
                                                            <th>HM</th>
                                                            <th>Üretim</th>
                                                            <th>İşçilik</th>
                                                            <th>Enerji</th>
                                                            <th>Amortisman</th>
                                                            <th>S.A.</th>
                                                            <th>Ö.K.</th>
                                                            <th>GÜG</th>
                                                            <th>Bakım</th>
                                                            <th>Net maliyet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($deg as $as) {if($as->uretim !=0){?>
                                                        <tr>
                                                            <td><?=$as->Id?></td>
                                                            <td><?=$as->istasyon_tipi?></td>
                                                            <td><?=$as->istasyon_adi?></td>
                                                            <td><?=$as->adi?></td>
                                                            <td><?=$as->hm?></td>
                                                            <td><?=$as->uretim?></td>
                                                            <td><?=$as->iscilik?></td>
                                                            <td><?=$as->enerji?></td>
                                                            <td><?=$as->amortisman?></td>
                                                            <td><?=$as->sa?></td>
                                                            <td><?=$as->ok?></td>
                                                            <td><?=$as->gug?></td>
                                                            <td><?=$as->bakim?></td>
                                                            <td><?=$as->netmaliyet?></td>
                                                        </tr>
                                                        <?php  }}?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="billings">
                                <div class="body">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <center>
                                                <h1>Dik Değirmenler</h1>
                                            </center>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>İstasyon Tipi</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Adı</th>
                                                            <th>HM</th>
                                                            <th>Üretim</th>
                                                            <th>İşçilik</th>
                                                            <th>Enerji</th>
                                                            <th>Amortisman</th>
                                                            <th>S.A.</th>
                                                            <th>Ö.K.</th>
                                                            <th>GÜG</th>
                                                            <th>Bakım</th>
                                                            <th>Net maliyet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($dik as $as) {if($as->uretim !=0){?>
                                                        <tr>
                                                            <td><?=$as->Id?></td>
                                                            <td><?=$as->istasyon_tipi?></td>
                                                            <td><?=$as->istasyon_adi?></td>
                                                            <td><?=$as->adi?></td>
                                                            <td><?=$as->hm?></td>
                                                            <td><?=$as->uretim?></td>
                                                            <td><?=$as->iscilik?></td>
                                                            <td><?=$as->enerji?></td>
                                                            <td><?=$as->amortisman?></td>
                                                            <td><?=$as->sa?></td>
                                                            <td><?=$as->ok?></td>
                                                            <td><?=$as->gug?></td>
                                                            <td><?=$as->bakim?></td>
                                                            <td><?=$as->netmaliyet?></td>
                                                        </tr>
                                                        <?php  }}?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="preferences">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <center>
                                                <h1>Kaplı</h1>
                                            </center>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>İstasyon Tipi</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Adı</th>
                                                            <th>HM</th>
                                                            <th>Üretim</th>
                                                            <th>İşçilik</th>
                                                            <th>Enerji</th>
                                                            <th>Amortisman</th>
                                                            <th>S.A.</th>
                                                            <th>Ö.K.</th>
                                                            <th>GÜG</th>
                                                            <th>Bakım</th>
                                                            <th>Net maliyet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($kap as $as) {if($as->uretim!=0){?>
                                                        <tr>
                                                            <td><?=$as->Id?></td>
                                                            <td><?=$as->istasyon_tipi?></td>
                                                            <td><?=$as->istasyon_adi?></td>
                                                            <td><?=$as->adi?></td>
                                                            <td><?=$as->hm?></td>
                                                            <td><?=$as->uretim?></td>
                                                            <td><?=$as->iscilik?></td>
                                                            <td><?=$as->enerji?></td>
                                                            <td><?=$as->amortisman?></td>
                                                            <td><?=$as->sa?></td>
                                                            <td><?=$as->ok?></td>
                                                            <td><?=$as->gug?></td>
                                                            <td><?=$as->bakim?></td>
                                                            <td><?=$as->netmaliyet?></td>
                                                        </tr>
                                                        <?php }}?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="preferences2">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <center>
                                                <h1>Sarkaç</h1>
                                            </center>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>İstasyon Tipi</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Adı</th>
                                                            <th>HM</th>
                                                            <th>Üretim</th>
                                                            <th>İşçilik</th>
                                                            <th>Enerji</th>
                                                            <th>Amortisman</th>
                                                            <th>S.A.</th>
                                                            <th>Ö.K.</th>
                                                            <th>GÜG</th>
                                                            <th>Bakım</th>
                                                            <th>Net maliyet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($sar as $as) {if($as->uretim !=0){?>
                                                        <tr>
                                                            <td><?=$as->Id?></td>
                                                            <td><?=$as->istasyon_tipi?></td>
                                                            <td><?=$as->istasyon_adi?></td>
                                                            <td><?=$as->adi?></td>
                                                            <td><?=$as->hm?></td>
                                                            <td><?=$as->uretim?></td>
                                                            <td><?=$as->iscilik?></td>
                                                            <td><?=$as->enerji?></td>
                                                            <td><?=$as->amortisman?></td>
                                                            <td><?=$as->sa?></td>
                                                            <td><?=$as->ok?></td>
                                                            <td><?=$as->gug?></td>
                                                            <td><?=$as->bakim?></td>
                                                            <td><?=$as->netmaliyet?></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php  }}?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="preferences3">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <center>
                                                <h1>Granül</h1>
                                            </center>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>İstasyon Tipi</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Adı</th>
                                                            <th>HM</th>
                                                            <th>Üretim</th>
                                                            <th>İşçilik</th>
                                                            <th>Enerji</th>
                                                            <th>Amortisman</th>
                                                            <th>S.A.</th>
                                                            <th>Ö.K.</th>
                                                            <th>GÜG</th>
                                                            <th>Bakım</th>
                                                            <th>Net maliyet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($moz as $as) {if($as->uretim !=0){?>
                                                        <tr>
                                                            <td><?=$as->Id?></td>
                                                            <td><?=$as->istasyon_tipi?></td>
                                                            <td><?=$as->istasyon_adi?></td>
                                                            <td><?=$as->adi?></td>
                                                            <td><?=$as->hm?></td>
                                                            <td><?=$as->uretim?></td>
                                                            <td><?=$as->iscilik?></td>
                                                            <td><?=$as->enerji?></td>
                                                            <td><?=$as->amortisman?></td>
                                                            <td><?=$as->sa?></td>
                                                            <td><?=$as->ok?></td>
                                                            <td><?=$as->gug?></td>
                                                            <td><?=$as->bakim?></td>
                                                            <td><?=$as->netmaliyet?></td>
                                                        </tr>
                                                        <?php  }}?>
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
                                            <center>
                                                <h1>Granül Ekstra</h1>
                                            </center>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                                    <thead>
                                                        <tr>
                                                            <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>İstasyon Tipi</th>
                                                            <th>İstasyon Adı</th>
                                                            <th>Adı</th>
                                                            <th>HM</th>
                                                            <th>Üretim</th>
                                                            <th>İşçilik</th>
                                                            <th>Enerji</th>
                                                            <th>Amortisman</th>
                                                            <th>S.A.</th>
                                                            <th>Ö.K.</th>
                                                            <th>GÜG</th>
                                                            <th>Bakım</th>
                                                            <th>Net maliyet</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($bey as $as) {if($as->uretim !=0){?>
                                                        <tr>
                                                            <td><?=$as->Id?></td>
                                                            <td><?=$as->istasyon_tipi?></td>
                                                            <td><?=$as->istasyon_adi?></td>
                                                            <td><?=$as->adi?></td>
                                                            <td><?=$as->hm?></td>
                                                            <td><?=$as->uretim?></td>
                                                            <td><?=$as->iscilik * $as->katsayi?></td>
                                                            <td><?=$as->enerji * $as->katsayi ?></td>
                                                            <td><?=$as->amortisman * $as->katsayi?></td>
                                                            <td><?=$as->sa * $as->katsayi?></td>
                                                            <td><?=$as->ok * $as->katsayi?></td>
                                                            <td><?=$as->gug * $as->katsayi?></td>
                                                            <td><?=$as->bakim * $as->katsayi?></td>
                                                            <td><?=$as->netmaliyet * $as->katsayi?></td>
                                                            <td></td>
                                                        </tr>
                                                        <?php  }}?>
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
