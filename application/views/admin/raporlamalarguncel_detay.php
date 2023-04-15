<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">

                <div class="card-box">
                    <center>
                        <h1>Maliyetler</h1>
                    </center>
                    <hr>
                    <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
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
                                <?php foreach($rapor as $as) {if($as->adi!=NULL){?>
                                <tr>
                                    <td><?=$as->adi?></td>
                                    <td><?=$as->netmaliyet?></td>
                                    <td><?=$as->maliyetyuzde10?></td>
                                    <td><?=$as->artiyuzde10?></td>
                                    <td><?=$as->netmaliyet_usd?></td>
                                    <td><?=$as->maliyetyuzde10_usd?></td>
                                    <td><?=$as->artiyuzde10_usd?></td>
                                </tr>
                                <?php }}?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>

        <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

        <!-- Init js -->
        <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

        <!-- App js -->
        <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
