
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">

                    <center>
                        <h1>Güncel Mikronize Ortalama</h1>
                    </center>

                    <div class="table-responsive responsive-table-plugin table-rep-plugin dragscroll" data-pattern="priority-columns">
                        <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                            <thead>
                                <tr>
                                    <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/mikronizeort/action_mikronize"><button type="button" class="btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
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
                                    <th data-toggle="tooltip" data-placement="top" title="" data-original-title="Değirmen İçin Kullanılan Ö.K.'nın TL değeri * Değirmenin Saat başı harcadığı Ö.K. kilogramı/değirmenin saatlik kapasite tonajı     NOT:SARKAÇTA ÖK KULLANILMAZ">Ö.K.</th>
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($mikronize as $as) { if($as->durum!='0'){?>
                                <tr>
                                    <td><?=$as->Id?></td>
                                    <td><?=$as->mamul?></td>
                                    <td><?=number_format($as->hm,2)?></td>
                                    <td><?=number_format($as->hmyuzde * 100,2)?></td>
                                    <td><?=number_format($as->uretimiscilik,2)?></td>
                                    <td><?=number_format($as->iscilikyuzde * 100,2)?></td>
                                    <td><?=number_format($as->enerji,2)?></td>
                                    <td><?=number_format($as->enerjiyuzde * 100,2)?></td>
                                    <td><?=number_format($as->enerji / $brfiyat,2)?></td>
                                    <td><?=number_format($as->ok,2)?></td>
                                    <td><?=number_format($as->okyuzde * 100,2)?></td>
                                    <td><?=number_format($as->amortisman,2)?></td>
                                    <td><?=number_format($as->amortismanyuzde * 100,2)?></td>
                                    <td><?=number_format($as->bakim,2)?></td>
                                    <td><?=number_format($as->bakimyuzde * 100,2)?></td>
                                    <td><?=number_format($as->uretimmaliyeti,2)?></td>
                                    <td><?=number_format($as->uretimmaliyetiyuzde * 100,2)?></td>
                                    <td><?=number_format($as->genelyonetim,2)?></td>
                                    <td><?=number_format($as->genelyonetimyuzde * 100,2)?></td>
                                    <td><?=number_format($as->risk,2)?></td>
                                    <td><?=number_format($as->riskyuzde * 100,2)?></td>
                                    <td><?=number_format($as->diger,2)?></td>
                                    <td><?=number_format($as->digeryuzde * 100,2)?></td>
                                    <td><?=number_format($as->netmaliyet,2)?></td>
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
