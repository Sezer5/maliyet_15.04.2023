<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <h1>Granül(GÜNCEL)</h1>
                        <hr>
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                <thead>

                                    <tr>
                                        <th>Id</th>
                                        <th>İstasyon</th>
                                        <th>Mamul</th>
                                        <th>Üretim Maliyeti</th>
                                        <th>Net Maliyet</th>
                                        <th>Maliyet</th>
                                        <th>Granül Yüzdesi</th>
                                        <th>Değiştir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($granul_genel as $as) {?>
                                    <form action="<?=base_url()?>admin/home/sysggeor_updt" method="post">
                                        <tr>
                                            <td><input size="2" type="text" name="Id" value="<?=$as->Id?>" readonly></td>
                                            <td><?=$as->istasyon?></td>
                                            <td><?=$as->mamul?></td>
                                            <td><?=$as->uretimmaliyeti?></td>
                                            <td><?=$as->netmaliyet?></td>
                                            <td><?=$as->maliyet?></td>
                                            <td><input type="text" name="granulyuzdesi" value="<?=$as->granulyuzdesi?>"></td>
                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>

                                        </tr>
                                    </form>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Kırıkkale(GÜNCEL)</h1>
                        <hr>
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                <thead>

                                    <tr>
                                        <th>Id</th>
                                        <th>Mamul</th>
                                        <th>Net Maliyet</th>
                                        <th>Görünen Net Maliyet</th>
                                        <th>Katsayı</th>
                                        <th>Değiştir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($kirikkale_dagitim as $as) {if($as->Id!=6){?>
                                    <form action="<?=base_url()?>admin/home/sysggeor_kirikkale_gm10" method="post">
                                        <tr>
                                            <td><input size="2" type="text" name="Id" value="<?=$as->Id?>" readonly></td>
                                            <td><?=$as->adi?></td>
                                            <td><?=$as->gm10_netmaliyet?></td>
                                            <td><?=$as->gm10_netmaliyet * $as->katsayi?></td>
                                            <td><input type="text" name="katsayi" value="<?=$as->katsayi?>"></td>
                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>

                                        </tr>
                                    </form>
                                    <?php }else{?>
                                    <form action="<?=base_url()?>admin/home/sysggeor_kirikkale_gm10" method="post">
                                        <tr>
                                            <td><input size="2" type="text" name="Id" value="<?=$as->Id?>" readonly></td>
                                            <td><?=$as->adi?></td>
                                            <td><?=$as->sarkac_netmaliyet?></td>
                                            <td><?=$as->sarkac_netmaliyet * $as->katsayi?></td>
                                            <td><input type="text" name="katsayi" value="<?=$as->katsayi?>"></td>
                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>

                                        </tr>
                                    </form>
                                    <?php }}?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Mikronize(Niğde Gerçekleşen)</h1>
                        <hr>
                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                <thead>

                                    <tr>
                                        <th>Id</th>
                                        <th>İstasyon</th>
                                        <th>Adı</th>
                                        <th>İşçilik</th>
                                        <th>Enerji</th>
                                        <th>ÖK</th>
                                        <th>Amortisman</th>
                                        <th>GÜG</th>
                                        <th>Değiştir</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($ozel_urunler as $as) {?>
                                    <form action="<?=base_url()?>admin/home/sysggeor_mikronize_gerceklesen" method="post">
                                        <tr>
                                            <td><input size="2" type="text" name="Id" value="<?=$as->Id?>" readonly></td>
                                            <td><?=$as->istasyon_adi?></td>
                                            <td><?=$as->adi?></td>
                                            <td><input type="text" name="iscilik" value="<?=$as->iscilik?>" style="width:100%;"></td>
                                            <td><input type="text" name="enerji" value="<?=$as->enerji?>" style="width:100%;"></td>
                                            <td><input type="text" name="amortisman" value="<?=$as->amortisman?>" style="width:100%;"></td>
                                            <td><input type="text" name="ok" value="<?=$as->ok?>" style="width:100%;"></td>
                                            <td><input type="text" name="gug" value="<?=$as->gug?>" style="width:100%;"></td>
                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>

                                        </tr>
                                    </form>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="body">
                        <!--        <?php foreach($son_rapor as $rs){?>
                        <b><li>Son rapor alınan tarih:<?=$rs->tarih?></li></b>
                        <?php }?> -->
                        <h1>Satış Maliyetleri</h1>
                        <hr>
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#Settings">Mikronize</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#billings">Kaplı</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences">Granül</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#preferences2">Granül Extra</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="Settings">
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12">
                                        <div class="card-box">
                                            <center>
                                                <h1>Mikronize</h1>
                                            </center>

                                            <hr>
                                            <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                    <thead>
                                                        <tr>
                                                            <td>*</td>
                                                            <td colspan="4" style="text-align:center;">
                                                                <h2>YURTİÇİ</h2>
                                                            </td>
                                                            <td colspan="4" style="text-align:center;">
                                                                <h2>YURTDIŞI</h2>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Adı</th>
                                                            <th>HA_Oranı</th>
                                                            <th>Değiştir</th>
                                                            <th>Net Maliyet</th>
                                                            <th>Maliyet %10</th>
                                                            <th>+ %10</th>
                                                            <th>Net Maliyet USD</th>
                                                            <th>Maliyet %10 USD</th>
                                                            <th>+ %10 USD</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php foreach($mikronize as $as) {if($as->durum!='0'){?>
                                                        <form action="<?=base_url()?>admin/home/maliyet_ha/<?=$as->Id?>" method="post">

                                                            <tr>
                                                                <td><?=$as->adi?></td>
                                                                <td><input type="text" name="ha_kodu"><?=$as->ha_kodu?></td>
                                                                <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>
                                                                <td><?=$as->netmaliyet * $as->ha_kodu?></td>
                                                                <td><?=$as->maliyetyuzde10 * $as->ha_kodu?></td>
                                                                <td><?=$as->artiyuzde10 * $as->ha_kodu?></td>
                                                                <td><?=$as->netmaliyet_usd * $as->ha_kodu?></td>
                                                                <td><?=$as->maliyetyuzde10_usd * $as->ha_kodu?></td>
                                                                <td><?=$as->artiyuzde10_usd * $as->ha_kodu?></td>
                                                            </tr>
                                                        </form>
                                                        <?php }}?>
                                                    </tbody>
                                                </table>
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
                                        <center>
                                            <h1>Kaplı</h1>
                                        </center>
                                        <hr>
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                            <table id="tech-companies-2" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="4" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="4" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
                                                        <th>HA_Oranı</th>
                                                        <th>Değiştir</th>
                                                        <th>Net Maliyet</th>
                                                        <th>Maliyet %10</th>
                                                        <th>+ %10</th>
                                                        <th>Net Maliyet USD</th>
                                                        <th>Maliyet %10 USD</th>
                                                        <th>+ %10 USD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($kapli as $as) {?>
                                                    <tr>
                                                        <form action="<?=base_url()?>admin/home/maliyet_ha/<?=$as->Id?>" method="post">

                                                            <td><?=$as->adi?></td>
                                                            <td><input type="text" name="ha_kodu"><?=$as->ha_kodu?></td>
                                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>
                                                            <td><?=$as->netmaliyet * $as->ha_kodu?></td>
                                                            <td><?=$as->maliyetyuzde10 * $as->ha_kodu?></td>
                                                            <td><?=$as->artiyuzde10 * $as->ha_kodu?></td>
                                                            <td><?=$as->netmaliyet_usd * $as->ha_kodu?></td>
                                                            <td><?=$as->maliyetyuzde10_usd * $as->ha_kodu?></td>
                                                            <td><?=$as->artiyuzde10_usd * $as->ha_kodu?></td>
                                                        </form>
                                                    </tr>
                                                    <?php }?>
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
                                            <h1>Granül</h1>
                                        </center>
                                        <hr>
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                            <table id="tech-companies-4" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="4" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="4" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
                                                        <th>HA_Oranı</th>
                                                        <th>Değiştir</th>
                                                        <th>Net Maliyet</th>
                                                        <th>Maliyet %10</th>
                                                        <th>+ %10</th>
                                                        <th>Net Maliyet USD</th>
                                                        <th>Maliyet %10 USD</th>
                                                        <th>+ %10 USD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($granul as $as) {?>
                                                    <tr>
                                                        <form action="<?=base_url()?>admin/home/maliyet_ha/<?=$as->Id?>" method="post">

                                                            <td><?=$as->adi?></td>
                                                            <td><input type="text" name="ha_kodu"><?=$as->ha_kodu?></td>
                                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>
                                                            <td><?=$as->netmaliyet * $as->ha_kodu?></td>
                                                            <td><?=$as->maliyetyuzde10 * $as->ha_kodu?></td>
                                                            <td><?=$as->artiyuzde10 * $as->ha_kodu?></td>
                                                            <td><?=$as->netmaliyet_usd * $as->ha_kodu?></td>
                                                            <td><?=$as->maliyetyuzde10_usd * $as->ha_kodu?></td>
                                                            <td><?=$as->artiyuzde10_usd * $as->ha_kodu?></td>
                                                        </form>
                                                    </tr>
                                                    <?php }?>
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
                                            <h1>Granül Extra</h1>
                                        </center>
                                        <hr>
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                                            <table id="tech-companies-3" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>

                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="4" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="4" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
                                                        <th>HA_Oranı</th>
                                                        <th>Değiştir</th>
                                                        <th>Net Maliyet</th>
                                                        <th>Maliyet %10</th>
                                                        <th>+ %10</th>
                                                        <th>Net Maliyet USD</th>
                                                        <th>Maliyet %10 USD</th>
                                                        <th>+ %10 USD</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($granulextra as $as) {?>
                                                    <tr>
                                                        <form action="<?=base_url()?>admin/home/maliyet_ha/<?=$as->Id?>" method="post">

                                                            <td><?=$as->adi?></td>
                                                            <td><input type="text" name="ha_kodu"><?=$as->ha_kodu?></td>
                                                            <td><button class="btn-success waves-effect  btn-icon waves-success"> <i class=" icon-reload"></i></button></td>
                                                            <td><?=$as->netmaliyet * $as->ha_kodu?></td>
                                                            <td><?=$as->maliyetyuzde10 * $as->ha_kodu?></td>
                                                            <td><?=$as->artiyuzde10 * $as->ha_kodu?></td>
                                                            <td><?=$as->netmaliyet_usd * $as->ha_kodu?></td>
                                                            <td><?=$as->maliyetyuzde10_usd * $as->ha_kodu?></td>
                                                            <td><?=$as->artiyuzde10_usd * $as->ha_kodu?></td>
                                                        </form>
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
    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>

    <!-- Responsive Table js -->
    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

    <!-- Init js -->
    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

    <!-- App js -->
    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
