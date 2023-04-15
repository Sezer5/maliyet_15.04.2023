<div id="main-content">
    <div class="container-fluid">
        <div class="clearfix">
            <div class="row">
                <table style="margin-top:100px;" class="table table-responsive table-bordered">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Raporlayan Kişi</td>
                            <td>Raporlanan Tarih</td>
                            <td>Hangi Tarihe Göre Raporlandığı</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($rapor as $rs){?>
                        <tr>
                            <td><?=$rs->Id?></td>
                            <td><?=$rs->adsoy?></td>
                            <td><?=$rs->tarih?></td>
                            <td><?=$rs->hesaplanan_tarih?></td>
                        </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <hr>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade show active" id="home2">
                            <div class="col-lg-12">
                                <div class="card-box">
                                    <h1>Gerçekleşen Nakliye Maliyetleri</h1>
                                    <hr>
                                    <div class="table-responsive">
                                        <table class="table-bordered table-hover table-striped" style="width:100%;">
                                            <thead>
                                                <tr>
                                                    <th>Plaka</th>
                                                    <th>Marka</th>
                                                    <th>İşyeri</th>
                                                    <th>Akaryakıt</th>
                                                    <th>Bakım</th>
                                                    <th>Genel Üretim Giderleri</th>
                                                    <th>Harcırah</th>
                                                    <th>HGS - OGS</th>
                                                    <th>Kasko</th>
                                                    <th>Lastik</th>
                                                    <th>MTV</th>
                                                    <th>Sigorta</th>
                                                    <th>Trafik Sigortası</th>
                                                    <th>Yağ</th>

                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Plaka</th>
                                                    <th>Marka</th>
                                                    <th>İşyeri</th>
                                                    <th>Akaryakıt</th>
                                                    <th>Bakım</th>
                                                    <th>Genel Üretim Giderleri</th>
                                                    <th>Harcırah</th>
                                                    <th>HGS - OGS</th>
                                                    <th>Kasko</th>
                                                    <th>Lastik</th>
                                                    <th>MTV</th>
                                                    <th>Sigorta</th>
                                                    <th>Trafik Sigortası</th>
                                                    <th>Yağ</th>

                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach($gerceklesen_nakliye as $rs){?>
                                                <tr>
                                                    <td><?=$rs->plaka?></td>
                                                    <td><?=$rs->marka?></td>
                                                    <td><?=$rs->isyeri?></td>
                                                    <td><?=$rs->akaryakit?></td>
                                                    <td><?=$rs->bakim?></td>
                                                    <td><?=$rs->gug?></td>
                                                    <td><?=$rs->harcirah?></td>
                                                    <td><?=$rs->hgsogs?></td>
                                                    <td><?=$rs->kasko?></td>
                                                    <td><?=$rs->lastik?></td>
                                                    <td><?=$rs->mtv?></td>
                                                    <td><?=$rs->sigorta?></td>
                                                    <td><?=$rs->trafiksigorta?></td>
                                                    <td><?=$rs->yag?></td>
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
