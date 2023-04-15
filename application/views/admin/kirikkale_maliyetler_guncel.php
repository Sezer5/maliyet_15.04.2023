
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <ul class="nav nav-tabs">

                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Settings">
                            <div class="body">
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <center>
                                            <h1>Kırıkkale Güncel Maliyetleri</h1>
                                        </center>

                                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Adı</th>
                                                        <th>HM</th>
                                                        <th>İşçilik</th>
                                                        <th>Enerji</th>
                                                        <th>Amortisman</th>
                                                        <th>GUG</th>
                                                        <th>Bakım</th>
                                                        <th>GYG</th>
                                                        <th>Risk</th>
                                                        <th>Diğer</th>
                                                        <th>Netmaliyet</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($gm10 as $as) {?>
                                                    <tr>
                                                        <td><?=$as->Id?></td>
                                                        <td><?=$as->adi?></td>
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
                                                    <?php }?>
                                                    <?php foreach($sarkac as $as) {?>
                                                    <tr>
                                                        <td><?=$as->Id?></td>
                                                        <td><?=$as->adi?></td>
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
