<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <table style="margin-top:100px;">
                <tr>
                    <form action="<?=base_url()?>admin/Gerceklesendegerlerduzenleme/Gerceklesendegerlerduzenleme2" method="post">
                        <td>Değiştirmek İstediğiniz Veriler Kaç Ay Öncesine Ait ? </td>
                        <?php foreach($aydegeri as $rs){?>
                        <td><input type="text" name="aydeger" value="<?=$rs->aydegeri?>"></td>
                        <input type="text" name="id" value="<?=$rs->Id?>" hidden>
                        <?php }?>
                        <td><button>Değiştir</button></td>
                    </form>
                </tr>
            </table>
            <hr>
            <div class="row">
                <hr>
                <div class="col-lg-6" style="border:1px solid black;">
                    <div class="card-box">
                        <h1>Masraf Merkezleri</h1>
                        <hr>
                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Masraf Merkezleri</th>
                                        <th>İşçilik</th>
                                        <th>Enerji</th>
                                        <th>Genel Üretim Giderleri</th>
                                        <th>Toplam</th>
                                        <th>Oranlar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($masrafmerkezleri as $as) {?>
                                    <tr>
                                        <td><?=$as->masrafmerkezi?></td>
                                        <td><?=$as->iscilik?></td>
                                        <td><?=$as->enerji?></td>
                                        <td><?=$as->gug?></td>
                                        <td><?=$as->toplam?></td>
                                        <td><?=$as->oranlar *100?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6" style="border:1px solid black;border-left:none;">
                    <div class="card-box">
                        <h1>Yardımcı Hizmetler</h1>
                        <hr>
                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Masraf Merkezleri</th>
                                        <th>Dağılım Oranları</th>
                                        <th>İşçilik</th>
                                        <th>Enerji</th>
                                        <th>Genel Üretim Giderleri</th>
                                        <th>Toplam</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($yardimcihizmetler as $as) {?>
                                    <tr>
                                        <td><?=$as->masrafmerkezi?></td>
                                        <td><?=$as->oranlar * 100?></td>
                                        <td><?=$as->iscilik?></td>
                                        <td><?=$as->enerji?></td>
                                        <td><?=$as->gug?></td>
                                        <td><?=$as->toplam?></td>

                                    </tr>
                                    <?php }?>
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
