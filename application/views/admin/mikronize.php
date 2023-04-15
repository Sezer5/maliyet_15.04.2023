<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Mikronize</h1>
                        <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronize/action_mikronize"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
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
                                        <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Değirmen İçin Kullanılan Ö.K.'nın TL değeri * Değirmenin Saat başı harcadığı Ö.K. kilogramı/değirmenin saatlik kapasite tonajı     NOT:SARKAÇTA ÖK KULLANILMAZ">Ö.K.</th>
                                        <th>Ö.K. Döviz Değeri</th>
                                        <th>Ö.K. %</th>
                                        <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Ürünün üretildiği istasyonun saatlik amortisman değeri / ürünün o istasyondaki saatlik kapasite tonajı">Amortisman</th>
                                        <th>Amortisman %</th>
                                        <th>Bakım</th>
                                        <th>Bakım %</th>
                                        <th>Üretim Maliyeti</th>
                                        <th>Üretim Maliyeti %</th>
                                        <th>Genel Yönetim</th>
                                        <th>Genel Yönetim %</th>
                                        <th>Risk</th>
                                        <th>Risk %</th>
                                        <th>Diğer</th>
                                        <th>Diğer %</th>
                                        <th>Net Maliyet</th>
                                        <th>Maliyet</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($mikronize as $as) { if($as->durum!='0'){ ?>
                                    <tr>
                                        <td><?=$as->Id?></td>
                                        <td><?=$as->istasyon?></td>
                                        <td><?=$as->mamul?></td>
                                        <td><?=$as->saatkapasite /1000?></td>
                                        <td><?=$as->hm?></td>
                                        <td><?=$as->hmyuzde * 100?></td>
                                        <td><?=$as->uretimiscilik?></td>
                                        <td><?=$as->iscilikyuzde * 100?></td>
                                        <td><?=$as->enerji?></td>
                                        <td><?=$as->enerjiyuzde * 100?></td>
                                        <td><?=$as->ok?></td>
                                        <?php if($as->istasyon==''){foreach($dolar as $usd){?>
                                        <td style="background-color:#b5e4cf;"><?=number_format($as->ok / $usd->fiyat, 2, '.', '');?> USD</td>
                                        <?php }}else{ foreach($euro as $eur){?>
                                        <td style="background-color:#8ec5e6;"><?=number_format($as->ok / $eur->fiyat, 2, '.', '');?> EUR</td>
                                        <?php }}?>
                                        <td><?=$as->okyuzde * 100?></td>
                                        <td><?=$as->amortisman?></td>
                                        <td><?=$as->amortismanyuzde * 100?></td>
                                        <td><?=$as->bakim?></td>
                                        <td><?=$as->bakimyuzde * 100?></td>
                                        <td><?=$as->uretimmaliyeti?></td>
                                        <td><?=$as->uretimmaliyetiyuzde * 100?></td>
                                        <td><?=$as->genelyonetim?></td>
                                        <td><?=$as->genelyonetimyuzde * 100?></td>
                                        <td><?=$as->risk?></td>
                                        <td><?=$as->riskyuzde * 100?></td>
                                        <td><?=$as->diger?></td>
                                        <td><?=$as->digeryuzde * 100?></td>
                                        <td><?=$as->netmaliyet?></td>
                                        <td><?=$as->maliyet?></td>

                                    </tr>
                                    <?php }}?>
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
