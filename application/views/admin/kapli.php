<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Kaplı</h1>
                                <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/kapli/action_kapli"><button type="button" class="btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>İstasyon</th>
                                                <th>Mamul</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="İstasyonun bu ürün için saatlik kapasitesi / 1000">Saat Kapasite</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Birimfiyatparametreler tablosundan uygun istasyon tipine uygun değer kopyalanıyor">HM</th>
                                                <th>HM %</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="İstasyonun işçilik maaşları toplamı / istasyonun o ürün için aylık kapasite tonajı    NOT:TPL 'nin işçilik maaşları için sarkaç 2'ye bölünür">İşçilik</th>
                                                <th>İşçilik %</th>
                                                <th>Enerji</th>
                                                <th>Enerji %</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Değirmen İçin Kullanılan Ö.K.'nın TL değeri * Değirmenin Saat başı harcadığı Ö.K. kilogramı/değirmenin saatlik kapasite tonajı     NOT:SARKAÇTA ÖK KULLANILMAZ">S.A.</th>
                                                <th>S.A. Döviz Değeri</th>
                                                <th>S.A. %</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Ürünün üretildiği istasyonun saatlik amortisman değeri / ürünün o istasyondaki saatlik kapasite tonajı">Amortisman</th>
                                                <th>Amortisman %</th>
                                                <th>Bakım</th>
                                                <th>Bakım %</th>
                                                <th>Kaplama Maliyeti</th>
                                                <th>Kaplama Maliyeti %</th>
                                                <th>Net Maliyet</th>
                                                <th>Maliyet</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($kapli as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->istasyon?></td>
                                                <td><?=$as->mamul?></td>
                                                <td><?=$as->saatkapasite?></td>
                                                <td><?=$as->hm?></td>
                                                <td><?=$as->hmyuzde * 100?></td>
                                                <td><?=$as->uretimiscilik?></td>
                                                <td><?=$as->iscilikyuzde * 100?></td>
                                                <td><?=$as->enerji?></td>
                                                <td><?=$as->enerjiyuzde * 100?></td>
                                                <td><?=$as->sa?></td>
                                                <?php foreach($dolar as $rs){?>
                                                <td style="background-color:#b5e4cf;"><?=number_format($as->sa / $rs->fiyat, 2, '.', '');?> USD</td>
                                                <?php }?>
                                                <td><?=$as->sayuzde * 100?></td>
                                                <td><?=$as->amortisman?></td>
                                                <td><?=$as->amortismanyuzde * 100?></td>
                                                <td><?=$as->bakim?></td>
                                                <td><?=$as->bakimyuzde * 100?></td>
                                                <td><?=$as->kaplamamaliyeti?></td>
                                                <td><?=$as->kaplamamaliyetiyuzde * 100?></td>
                                                <td><?=$as->netmaliyet?></td>
                                                <td><?=$as->maliyet?></td>

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
