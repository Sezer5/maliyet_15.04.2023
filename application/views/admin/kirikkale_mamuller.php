
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
                            <div class="body row">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h1>Kırıkkale Mozaik</h1>
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Adı</th>
                                                        <th>Mozaik Kapasite</th>
                                                        <th>Mozaik 1.Dağılım</th>
                                                        <th>Mozaik Üretim</th>
                                                        <th>Mozaik 2.Dağılım</th>
                                                        <th>Mozaik HM</th>
                                                        <th>Mozaik İşçilik</th>
                                                        <th>Mozaik Enerji</th>
                                                        <th>Mozaik Amortisman</th>
                                                        <th>Mozaik GUG</th>
                                                        <th>Mozaik Bakım</th>
                                                        <th>Mozaik GYG</th>
                                                        <th>Mozaik Risk</th>
                                                        <th>Mozaik Diğer</th>
                                                        <th>Mozaik Netmaliyet</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $a=0;
                                                        foreach($gm10 as $as){ 
                                                            $a=$as->Id;
                                                            
                                                            if($a!=7){ 
                                                        ?>
                                                    <tr>
                                                        <td><?=$as->Id?></td>
                                                        <td><?=$as->adi?></td>
                                                        <td><?=$as->gm10_kpst?></td>
                                                        <td><?=$as->gm10_1dag?></td>
                                                        <td><?=$as->gm10_uretim?></td>
                                                        <td><?=$as->gm10_2dag?></td>
                                                        <td><?=$as->gm10_hm?></td>
                                                        <td><?=$as->gm10_iscilik * $as->katsayi?></td>
                                                        <td><?=$as->gm10_enerji * $as->katsayi?></td>
                                                        <td><?=$as->gm10_amortisman * $as->katsayi?></td>
                                                        <td><?=$as->gm10_gug * $as->katsayi?></td>
                                                        <td><?=$as->gm10_bakim * $as->katsayi?></td>
                                                        <td><?=$as->gm10_gyg * $as->katsayi?></td>
                                                        <td><?=$as->gm10_risk * $as->katsayi?></td>
                                                        <td><?=$as->gm10_diger * $as->katsayi?></td>
                                                        <td><?=$as->gm10_netmaliyet * $as->katsayi?></td>
                                                    </tr>
                                                    <?php }else{ ?>
                                                    <tr>
                                                        <td><?=$as->Id?></td>
                                                        <td><?=$as->adi?></td>
                                                        <td><?=$as->gm10_kpst?></td>
                                                        <td><?=$as->gm10_1dag?></td>
                                                        <td><?=$as->gm10_uretim?></td>
                                                        <td><?=$as->gm10_2dag?></td>
                                                        <td><?=$as->gm10_hm?></td>
                                                        <td><?=$as->gm10_iscilik * $as->katsayi?></td>
                                                        <td><?=$as->gm10_enerji * $as->katsayi?></td>
                                                        <td><?=$as->gm10_amortisman * $as->katsayi?></td>
                                                        <td><?=$as->gm10_gug * $as->katsayi?></td>
                                                        <td><?=$as->gm10_bakim * $as->katsayi?></td>
                                                        <td><?=$as->gm10_gyg * $as->katsayi?></td>
                                                        <td><?=$as->gm10_risk * $as->katsayi?></td>
                                                        <td><?=$as->gm10_diger * $as->katsayi?></td>
                                                        <td><?=$as->gm10_netmaliyet * $as->katsayi?></td>


                                                    </tr>
                                                    <?php } } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                <div class="col-lg-12" style="height:100px;">
                                    

                                </div>
                                
                                
                                
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h1>Kırıkkale Sarkaç</h1>
                                        <hr>
                                        <div class="col-lg-12">
                                            <div class="card-box">
                                                <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                                    <table id="tech-companies-1" class="mb-0 table-bordered table-hover" style="width:100%;">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Adı</th>
                                                                <th>Sarkaç Kapasite</th>
                                                                <th>Sarkaç 1.Dağılım</th>
                                                                <th>Sarkaç Üretim</th>
                                                                <th>Sarkaç 2.Dağılım</th>
                                                                <th>Sarkaç HM</th>
                                                                <th>Sarkaç İşçilik</th>
                                                                <th>Sarkaç Enerji</th>
                                                                <th>Sarkaç Amortisman</th>
                                                                <th>Sarkaç GUG</th>
                                                                <th>Sarkaç Bakım</th>
                                                                <th>Sarkaç GYG</th>
                                                                <th>Sarkaç Risk</th>
                                                                <th>Sarkaç Diğer</th>
                                                                <th>Sarkaç Netmaliyet</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach($sarkac as $as) {?>
                                                            <tr>
                                                                <td><?=$as->Id?></td>
                                                                <td><?=$as->adi?></td>
                                                                <td><?=$as->sarkac_kpst?></td>
                                                                <td><?=$as->sarkac_1dag?></td>
                                                                <td><?=$as->sarkac_uretim?></td>
                                                                <td><?=$as->sarkac_2dag?></td>
                                                                <td><?=$as->sarkac_hm?></td>
                                                                <td><?=$as->sarkac_iscilik * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_enerji * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_amortisman * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_gug * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_bakim * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_gyg * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_risk * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_diger * $as->katsayi?></td>
                                                                <td><?=$as->sarkac_netmaliyet * $as->katsayi?></td>

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
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
