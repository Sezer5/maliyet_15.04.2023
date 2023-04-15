<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <center>
                                    <h1>Kaplı Ortalama</h1>
                                </center>
                                <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/kapliort/action_kapliort"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>

                                                <th>Mamul</th>

                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Birimfiyatparametreler tablosundan uygun istasyon tipine uygun değer kopyalanıyor">HM</th>
                                                <th>HM %</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="İstasyonun işçilik maaşları toplamı / istasyonun o ürün için aylık kapasite tonajı    NOT:TPL 'nin işçilik maaşları için sarkaç 2'ye bölünür">İşçilik</th>
                                                <th>İşçilik %</th>
                                                <th>Enerji</th>
                                                <th>Enerji %</th>
                                                <th>Enerji Kwh</th>
                                                <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Değirmen İçin Kullanılan Ö.K.'nın TL değeri * Değirmenin Saat başı harcadığı Ö.K. kilogramı/değirmenin saatlik kapasite tonajı     NOT:SARKAÇTA ÖK KULLANILMAZ">S.A.</th>
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
                                            <?php foreach($kapliort as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->mamul?></td>
                                                <td><?=number_format($as->hm,2)?></td>
                                                <td><?=number_format($as->hmyuzde * 100,2)?></td>
                                                <td><?=number_format($as->uretimiscilik,2)?></td>
                                                <td><?=number_format($as->iscilikyuzde * 100,2)?></td>
                                                <td><?=number_format($as->enerji,2)?></td>
                                                <td><?=number_format($as->enerjiyuzde * 100,2)?></td>
                                                <td><?=number_format($as->enerji/$brfiyat,2)?></td>
                                                <td><?=number_format($as->sa,2)?></td>
                                                <td><?=number_format($as->sayuzde * 100,2)?></td>
                                                <td><?=number_format($as->amortisman,2)?></td>
                                                <td><?=number_format($as->amortismanyuzde * 100,2)?></td>
                                                <td><?=number_format($as->bakim,2)?></td>
                                                <td><?=number_format($as->bakimyuzde * 100,2)?></td>
                                                <td><?=number_format($as->kaplamamaliyeti,2)?></td>
                                                <td><?=number_format($as->kaplamamaliyetiyuzde * 100,2)?></td>
                                                <td><?=number_format($as->netmaliyet,2)?></td>
                                                <td><?=number_format($as->maliyet,2)?></td>
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
