
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2>Masraflar</h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>ACCOUNTCODE</th>
                                        <th>MM_KODU</th>
                                        <th>MM_ADI</th>
                                        <th>MM_OZELKOD</th>
                                        <th>BORC</th>
                                        <th>ACIKLAMA</th>
                                        <th>DEMİRBAS</th>
                                        <th>TARIH</th>
                                        <th>Değiştir</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Id</th>
                                        <th>MM_KODU</th>
                                        <th>MM_ADI</th>
                                        <th>MM_OZELKOD</th>
                                        <th>BORC</th>
                                        <th>ACIKLAMA</th>
                                        <th>DEMİRBAS</th>
                                        <th>TARIH</th>
                                        <th>Değiştir</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php foreach($veri as $rs){?>
                                    <form action="<?=base_url()?>admin/Entegrasyon/Entegrasyon_export3" method="post">
                                        <tr>
                                            <td><input type="text" name="Id" value="<?=$rs->Id?>" size="5" readonly></td>
                                            <td><?=$rs->ACCOUNTCODE?></td>
                                            <td><?=$rs->MM_KODU?></td>
                                            <td><?=$rs->MM_ADI?></td>
                                            <td><?=$rs->MM_OZELKOD?></td>
                                            <td><input type="text" name="BORC" value="<?=$rs->BORC?>"></td>
                                            <td><textarea cols="30" rows="3"><?=$rs->ACIKLAMA?></textarea></td>
                                            <input type="text" name="baslangic" value="<?=$baslangic?>" size="3" hidden>
                                            <input type="text" name="bitis" value="<?=$bitis?>" size="3" hidden>
                                            <td><input type="text" name="DEMIRBAS" value="<?=$rs->DEMIRBAS?>" size="3"></td>
                                            <td><?=$rs->TARIH?></td>
                                            <td class="actions"><button type="submit"><i class="icon-reload"></i></button></td>
                                        </tr>
                                    </form>
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
