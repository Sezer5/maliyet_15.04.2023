</div>

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Mikronize</h1>
                        <hr>
                        <div class="table-responsive responsive-table-plugin table-rep-plugin" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table">
                                <thead>
                                    <tr>
                                        <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/maliyetler/action_maliyetler"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                    </tr>
                                    <tr>
                                        <th>Id</th>
                                        <th>ACCOUNTCODE</th>
                                        <th>MM_KODU</th>
                                        <th>MM_ADI</th>
                                        <th>MM_OZELKOD</th>
                                        <th>BORC</th>
                                        <th>RAPORDOVIZ_NET</th>
                                        <th>ACIKLAMA</th>
                                        <th>TARIH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($deger as $as) {?>
                                    <tr>
                                        <td><?=$as->Id?></td>
                                        <td><?=str_replace(".",",","$as->ACCOUNTCODE")?></td>
                                        <td><?=str_replace(".",",","$as->MM_KODU")?></td>
                                        <td><?=str_replace(".",",","$as->MM_ADI")?></td>
                                        <td><?=str_replace(".",",","$as->MM_OZELKOD")?></td>
                                        <td><?=str_replace(".",",","$as->BORC")?></td>
                                        <td><?=str_replace(".",",","$as->RAPORDOVIZ_NET")?></td>
                                        <td><?=str_replace(".",",","$as->ACIKLAMA")?></td>
                                        <td><?=str_replace(".",",","$as->TARIH")?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
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
