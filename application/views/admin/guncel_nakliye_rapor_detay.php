<div class="content-page">
    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
    <div id="main-content">
        <div class="container-fluid">
            <br>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card-box">
                        <h1>Nakliye Raporu</h1>
                        <hr>
                        <div class="table-responsive responsive-table-plugin dragscroll" data-pattern="priority-columns">
                            <table id="tech-companies-1" class="table-striped mb-0 table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Şirket</th>
                                        <th>Şehir</th>
                                        <th>İlçe</th>
                                        <th>Personel Maaşı</th>
                                        <th>Kasko</th>
                                        <th>Trafik Sigortası</th>
                                        <th>MTV</th>
                                        <th>Bakım Onarım</th>
                                        <th>Amortisman</th>
                                        <th>Yakıt Kull. Bedeli</th>
                                        <th>Lastik Kull. Bedeli</th>
                                        <th>Tamir & Bakım</th>
                                        <th>HGS / OGS</th>
                                        <th>Harcırah</th>
                                        <th>Değişen Giderler <br> Toplamı</th>
                                        <th>Ton başı maliyet</th>
                                        <th>Araç başı kârlılık</th>
                                        <th>Ton başına kârlılık</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($rapor as $ps){?>
                                    <tr>
                                        <td><?=$ps->sirket?></td>
                                        <td><?=$ps->sehir?></td>
                                        <td><?=$ps->ilce?></td>
                                        <td><?=number_format($ps->personelmaas, 2, '.','');?></td>
                                        <td><?=number_format($ps->kasko, 2, '.','');?></td>
                                        <td><?=number_format($ps->trafiksigorta, 2, '.','');?></td>
                                        <td><?=number_format($ps->mtv, 2, '.','');?></td>
                                        <td><?=number_format($ps->bakimonarimaylik, 2, '.','');?></td>
                                        <td><?=number_format($ps->amortismanaylik, 2, '.','');?></td>
                                        <td><?=number_format($ps->yakitkullanim, 2, '.','');?></td>
                                        <td><?=number_format($ps->lastikkullanim, 2, '.','');?></td>
                                        <td><?=number_format($ps->tamirbakim, 2, '.','');?></td>
                                        <td><?=number_format($ps->hgsogs, 2, '.','');?></td>
                                        <td><?=number_format($ps->harcirah, 2, '.','');?></td>
                                        <td><?=number_format($ps->degisengiderlertop, 2, '.','');?></td>
                                        <td><?=number_format($ps->tonbasimaliyet, 2, '.','');?></td>
                                        <td><?=number_format($ps->aracbasikar, 2, '.','');?></td>
                                        <td><?=number_format($ps->tonbasikar, 2, '.','');?></td>
                                    </tr>
                                    <?php }?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <hr>
                    <script src="<?=base_url()?>assets/admin/js/vendor.min.js"></script>
                    <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>
                    <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>
                    <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
                    <script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
                </div>
