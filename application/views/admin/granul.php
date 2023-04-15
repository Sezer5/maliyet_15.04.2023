<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <center>
                            <h1>Granül</h1>
                        </center>
                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover table" style="width:100%;">
                                <thead>
                                    <tr>
                                        <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/granul/action_granul"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                    </tr>
                                    <tr>
                                        <th>Id</th>
                                        <th>İstasyon</th>
                                        <th>Mamul</th>
                                        <th data-toggle="tooltip" data-placement="top" title="" data-original-title="İstasyonun bu ürün için saatlik kapasitesi / 1000">Saat Kapasite</th>
                                        <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Birimfiyatparametreler tablosundan uygun istasyon tipine uygun değer kopyalanıyor">HM</th>
                                        <th>HM%</th>
                                        <th data-toggle="tooltip" data-placement="top" title="" data-original-title="İstasyonun işçilik maaşları toplamı / istasyonun o ürün için aylık kapasite tonajı    NOT:TPL 'nin işçilik maaşları için sarkaç 2'ye bölünür">İşçilik</th>
                                        <th>İşçilik%</th>
                                        <th>Enerji</th>
                                        <th>Enerji%</th>
                                        <th>Enerji Kwh</th>
                                        <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Ürünün üretildiği istasyonun saatlik amortisman değeri / ürünün o istasyondaki saatlik kapasite tonajı">Amortisman</th>
                                        <th>Amortisman%</th>
                                        <th>Bakım</th>
                                        <th>Bakım%</th>
                                        <th>Üretim Maliyeti</th>
                                        <th>Üretim Maliyeti%</th>
                                        <th>Genel Yönetim</th>
                                        <th>Genel Yönetim%</th>
                                        <th>Risk</th>
                                        <th>Risk%</th>
                                        <th>Net Maliyet</th>
                                        <th>Maliyet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($granul as $as) {?>
                                    <tr>
                                        <td><?=$as->Id?></td>
                                        <td><?=$as->istasyon?></td>
                                        <td><?=$as->mamul?></td>
                                        <td><?=$as->saatkapasite?></td>
                                        <td><?=number_format($as->hm,2)?></td>
                                        <td><?=number_format($as->hmyuzde * 100,2)?></td>
                                        <td><?=number_format($as->uretimiscilik  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->iscilikyuzde * 100,2)?></td>
                                        <td><?=number_format($as->enerji  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->enerjiyuzde * 100,2)?></td>
                                        <td><?=number_format($as->enerji / $brfiyat,2)?></td>
                                        <td><?=number_format($as->amortisman  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->amortismanyuzde * 100,2)?></td>
                                        <td><?=number_format($as->bakim  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->bakimyuzde * 100,2)?></td>
                                        <td><?=number_format($as->uretimmaliyeti  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->uretimmaliyetiyuzde * 100,2)?></td>
                                        <td><?=number_format($as->genelyonetim  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->genelyonetimyuzde * 100,2)?></td>
                                        <td><?=number_format($as->risk  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->riskyuzde * 100,2)?></td>
                                        <td><?=number_format($as->netmaliyet  * $as->granulyuzdesi,2)?></td>
                                        <td><?=number_format($as->maliyet  * $as->granulyuzdesi,2)?></td>

                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
