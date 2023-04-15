<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <center>
                    <h1> <?=$gercek_tarih?></h1>
                </center>
                <div class="card">
                    <div class="body">
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
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <center>
                                            <h1>Mikronize</h1>
                                        </center>
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/gerceklesenmaliyetler/action_gerceklesenmaliyetler"><button type="button" class="btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
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
                                                    <tr>
                                                        <td><?=$as->adi?></td>
                                                        <td><?=$as->netmaliyet * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->netmaliyet_usd * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10_usd * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10_usd * $as->katsayi?></td>
                                                    </tr>
                                                    <?php }}?>
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
                                            <h1>Kaplı</h1>
                                        </center>
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-2" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>
                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
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
                                                        <td><?=$as->adi?></td>
                                                        <td><?=$as->netmaliyet  * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->netmaliyet_usd * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10_usd * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10_usd * $as->katsayi?></td>
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
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-4" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>

                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
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
                                                        <td><?=$as->adi?></td>
                                                        <td><?=$as->netmaliyet * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->netmaliyet_usd * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10_usd * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10_usd * $as->katsayi?></td>
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
                                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                                            <table id="tech-companies-3" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                                <thead>

                                                    <tr>
                                                        <td>*</td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTİÇİ</h2>
                                                        </td>
                                                        <td colspan="3" style="text-align:center;">
                                                            <h2>YURTDIŞI</h2>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>Adı</th>
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
                                                        <td><?=$as->adi?></td>
                                                        <td><?=$as->netmaliyet * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10 * $as->katsayi?></td>
                                                        <td><?=$as->netmaliyet_usd * $as->katsayi?></td>
                                                        <td><?=$as->maliyetyuzde10_usd * $as->katsayi?></td>
                                                        <td><?=$as->artiyuzde10_usd * $as->katsayi?></td>
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
