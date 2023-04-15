<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                        <table class="table-stripped table-bordered">
                            <thead>
                                <tr>
                                    <td>İl</td>
                                    <td>İlçe</td>
                                    <td>Yol KM</td>
                                    <td>Gidiş Süresi Gün</td>
                                    <td>Değiştir</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($sbt as $rs){?>
                                <form action="<?=base_url()?>admin/lokasyonnakliye/deger_girisi_guncelle/<?=$rs->Id?>" method="post">
                                    <tr>
                                        <td><?=$rs->sehir?></td>
                                        <td><?=$rs->ilce?></td>
                                        <td><input type="text" name="yolkm" value="<?=$rs->yolkm?>"></td>
                                        <td><input type="text" name="yolsuresi" value="<?=$rs->yolsuresi?>"></td>
                                        

                                        <td><button type="submit">Gönder</button></td>
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
