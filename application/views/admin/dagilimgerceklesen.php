<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-justified">
                    <li class="nav-item">
                        <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                            <span class="d-none d-sm-block">Değirmenler Dağılım</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#profile2" data-toggle="tab" aria-expanded="true" class="nav-link">
                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                            <span class="d-none d-sm-block">Dik Değirmen Dağılım</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#messages2" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
                            <span class="d-none d-sm-block">Kaplı Dağılım</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings2" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Sarkaç Dağılım</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings3" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Granül Dağılım</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#settings4" data-toggle="tab" aria-expanded="false" class="nav-link">
                            <span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
                            <span class="d-none d-sm-block">Granül Ekstra Dağılım</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="home2">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Değirmenler Dağılım</h1>
                                <hr>
                                <div class="table-responsive responsive-table-plugin dragscroll " data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped dragscroll mb-0 table-bordered table-hover table">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/dagilimgerceklesen/action_degirmenlergerceklesen"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Değirmen 1</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Değirmen 2</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Değirmen 3</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Değirmen 5</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>Değirmen 1</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>Değirmen 2</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>Değirmen 3</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>Değirmen 5</h3>
                                                </td>


                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>Mamul</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Ö.K.</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Ö.K.</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Ö.K.</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Ö.K.</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($yddagitimilk as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->d1_kpst?></td>
                                                <td><?=$as->d1_1dag?></td>
                                                <td><?=$as->d1_uretim?></td>
                                                <td><?=$as->d1_2dag?></td>
                                                <td><?=$as->d2_kpst?></td>
                                                <td><?=$as->d2_1dag?></td>
                                                <td><?=$as->d2_uretim?></td>
                                                <td><?=$as->d2_2dag?></td>
                                                <td><?=$as->d3_kpst?></td>
                                                <td><?=$as->d3_1dag?></td>
                                                <td><?=$as->d3_uretim?></td>
                                                <td><?=$as->d3_2dag?></td>
                                                <td><?=$as->d5_kpst?></td>
                                                <td><?=$as->d5_1dag?></td>
                                                <td><?=$as->d5_uretim?></td>
                                                <td><?=$as->d5_2dag?></td>
                                                <td><?=$as->d1_iscilik?></td>
                                                <td><?=$as->d1_enerji?></td>
                                                <td><?=$as->d1_ok?></td>
                                                <td><?=$as->d1_amortisman?></td>
                                                <td><?=$as->d1_gug?></td>
                                                <td><?=$as->d2_iscilik?></td>
                                                <td><?=$as->d2_enerji?></td>
                                                <td><?=$as->d2_ok?></td>
                                                <td><?=$as->d2_amortisman?></td>
                                                <td><?=$as->d2_gug?></td>
                                                <td><?=$as->d3_iscilik?></td>
                                                <td><?=$as->d3_enerji?></td>
                                                <td><?=$as->d3_ok?></td>
                                                <td><?=$as->d3_amortisman?></td>
                                                <td><?=$as->d3_gug?></td>
                                                <td><?=$as->d5_iscilik?></td>
                                                <td><?=$as->d5_enerji?></td>
                                                <td><?=$as->d5_ok?></td>
                                                <td><?=$as->d5_amortisman?></td>
                                                <td><?=$as->d5_gug?></td>





                                            </tr>
                                            <?php }?>
                                            <?php foreach($yddagitim as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->d1_kpst?></td>
                                                <td><?=$as->d1_1dag?></td>
                                                <td><?=$as->d1_uretim?></td>
                                                <td><?=$as->d1_2dag?></td>
                                                <td><?=$as->d2_kpst?></td>
                                                <td><?=$as->d2_1dag?></td>
                                                <td><?=$as->d2_uretim?></td>
                                                <td><?=$as->d2_2dag?></td>
                                                <td><?=$as->d3_kpst?></td>
                                                <td><?=$as->d3_1dag?></td>
                                                <td><?=$as->d3_uretim?></td>
                                                <td><?=$as->d3_2dag?></td>
                                                <td><?=$as->d5_kpst?></td>
                                                <td><?=$as->d5_1dag?></td>
                                                <td><?=$as->d5_uretim?></td>
                                                <td><?=$as->d5_2dag?></td>
                                                <td><?=$as->d1_iscilik?></td>
                                                <td><?=$as->d1_enerji?></td>
                                                <td><?=$as->d1_ok?></td>
                                                <td><?=$as->d1_amortisman?></td>
                                                <td><?=$as->d1_gug?></td>
                                                <td><?=$as->d2_iscilik?></td>
                                                <td><?=$as->d2_enerji?></td>
                                                <td><?=$as->d2_ok?></td>
                                                <td><?=$as->d2_amortisman?></td>
                                                <td><?=$as->d2_gug?></td>
                                                <td><?=$as->d3_iscilik?></td>
                                                <td><?=$as->d3_enerji?></td>
                                                <td><?=$as->d3_ok?></td>
                                                <td><?=$as->d3_amortisman?></td>
                                                <td><?=$as->d3_gug?></td>
                                                <td><?=$as->d5_iscilik?></td>
                                                <td><?=$as->d5_enerji?></td>
                                                <td><?=$as->d5_ok?></td>
                                                <td><?=$as->d5_amortisman?></td>
                                                <td><?=$as->d5_gug?></td>





                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="profile2">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Dik Değirmen Dağılım</h1>
                                <hr>
                                <div class="table-responsive responsive-table-plugin dragscroll " data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped dragscroll mb-0 table-bordered table-hover table">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/dagilimgerceklesen/action_dikdegirmenlergerceklesen"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Dik Değirmen</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>Dik Değirmen</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>Mamul</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Ö.K.</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($dddagitimilk as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->dik_kpst?></td>
                                                <td><?=$as->dik_1dag?></td>
                                                <td><?=$as->dik_uretim?></td>
                                                <td><?=$as->dik_2dag?></td>
                                                <td><?=$as->dik_iscilik?></td>
                                                <td><?=$as->dik_enerji?></td>
                                                <td><?=$as->dik_ok?></td>
                                                <td><?=$as->dik_amortisman?></td>
                                                <td><?=$as->dik_gug?></td>
                                            </tr>
                                            <?php }?>
                                            <?php foreach($dddagitim as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->dik_kpst?></td>
                                                <td><?=$as->dik_1dag?></td>
                                                <td><?=$as->dik_uretim?></td>
                                                <td><?=$as->dik_2dag?></td>
                                                <td><?=$as->dik_iscilik?></td>
                                                <td><?=$as->dik_enerji?></td>
                                                <td><?=$as->dik_ok?></td>
                                                <td><?=$as->dik_amortisman?></td>
                                                <td><?=$as->dik_gug?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="messages2">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Kaplı Dağılım</h1>
                                <hr>
                                <div class="table-responsive responsive-table-plugin dragscroll " data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped dragscroll mb-0 table-bordered table-hover table">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/dagilimgerceklesen/action_kapligerceklesen"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>K03</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>K04</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>K06</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>K03</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>K04</h3>
                                                </td>
                                                <td colspan="5" style="text-align:center;">
                                                    <h3>K06</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>Mamul</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>S.A.</th>
                                                <th>Amortisman</th>
                                                <th>Bakım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>S.A.</th>
                                                <th>Amortisman</th>
                                                <th>Bakım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>S.A.</th>
                                                <th>Amortisman</th>
                                                <th>Bakım</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($kaplidagitimilk as $as) {?>
                                            
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->k03_kpst?></td>
                                                <td><?=$as->k03_1dag?></td>
                                                <td><?=$as->k03_uretim?></td>
                                                <td><?=$as->k03_2dag?></td>
                                                <td><?=$as->k04_kpst?></td>
                                                <td><?=$as->k04_1dag?></td>
                                                <td><?=$as->k04_uretim?></td>
                                                <td><?=$as->k04_2dag?></td>
                                                <td><?=$as->k06_kpst?></td>
                                                <td><?=$as->k06_1dag?></td>
                                                <td><?=$as->k06_uretim?></td>
                                                <td><?=$as->k06_2dag?></td>
                                                <td><?=$as->k03_iscilik?></td>
                                                <td><?=$as->k03_enerji?></td>
                                                <td><?=$as->k03_sa?></td>
                                                <td><?=$as->k03_amortisman?></td>
                                                <td><?=$as->k03_bakim?></td>
                                                <td><?=$as->k04_iscilik?></td>
                                                <td><?=$as->k04_enerji?></td>
                                                <td><?=$as->k04_sa?></td>
                                                <td><?=$as->k04_amortisman?></td>
                                                <td><?=$as->k04_bakim?></td>
                                                <td><?=$as->k06_iscilik?></td>
                                                <td><?=$as->k06_enerji?></td>
                                                <td><?=$as->k06_sa?></td>
                                                <td><?=$as->k06_amortisman?></td>
                                                <td><?=$as->k06_bakim?></td>
                                            </tr>
                                            <?php }?>
                                            <?php foreach($kaplidagitim as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->k03_kpst?></td>
                                                <td><?=$as->k03_1dag?></td>
                                                <td><?=$as->k03_uretim?></td>
                                                <td><?=$as->k03_2dag?></td>
                                                <td><?=$as->k04_kpst?></td>
                                                <td><?=$as->k04_1dag?></td>
                                                <td><?=$as->k04_uretim?></td>
                                                <td><?=$as->k04_2dag?></td>
                                                <td><?=$as->k06_kpst?></td>
                                                <td><?=$as->k06_1dag?></td>
                                                <td><?=$as->k06_uretim?></td>
                                                <td><?=$as->k06_2dag?></td>
                                                <td><?=$as->k03_iscilik?></td>
                                                <td><?=$as->k03_enerji?></td>
                                                <td><?=$as->k03_sa?></td>
                                                <td><?=$as->k03_amortisman?></td>
                                                <td><?=$as->k03_bakim?></td>
                                                <td><?=$as->k04_iscilik?></td>
                                                <td><?=$as->k04_enerji?></td>
                                                <td><?=$as->k04_sa?></td>
                                                <td><?=$as->k04_amortisman?></td>
                                                <td><?=$as->k04_bakim?></td>
                                                <td><?=$as->k06_iscilik?></td>
                                                <td><?=$as->k06_enerji?></td>
                                                <td><?=$as->k06_sa?></td>
                                                <td><?=$as->k06_amortisman?></td>
                                                <td><?=$as->k06_bakim?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings2">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Sarkaç Dağılım</h1>
                                <hr>
                                <div class="table-responsive responsive-table-plugin dragscroll " data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped dragscroll mb-0 table-bordered table-hover table">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/dagilimgerceklesen/action_tplgerceklesen"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>5 TPL</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>6 TPL</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>5 TPL</h3>
                                                </td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>6 TPL</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>Mamul</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Amortisman</th>
                                                <th>Bakım</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Amortisman</th>
                                                <th>Bakım</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($sarkacdagitimilk as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->tpl5_kpst?></td>
                                                <td><?=$as->tpl5_1dag?></td>
                                                <td><?=$as->tpl5_uretim?></td>
                                                <td><?=$as->tpl5_2dag?></td>
                                                <td><?=$as->tpl6_kpst?></td>
                                                <td><?=$as->tpl6_1dag?></td>
                                                <td><?=$as->tpl6_uretim?></td>
                                                <td><?=$as->tpl6_2dag?></td>
                                                <td><?=$as->tpl5_iscilik?></td>
                                                <td><?=$as->tpl5_enerji?></td>
                                                <td><?=$as->tpl5_amortisman?></td>
                                                <td><?=$as->tpl5_bakim?></td>
                                                <td><?=$as->tpl6_iscilik?></td>
                                                <td><?=$as->tpl6_enerji?></td>
                                                <td><?=$as->tpl6_amortisman?></td>
                                                <td><?=$as->tpl6_bakim?></td>
                                            </tr>
                                            <?php }?>
                                            <?php foreach($sarkacdagitim as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->tpl5_kpst?></td>
                                                <td><?=$as->tpl5_1dag?></td>
                                                <td><?=$as->tpl5_uretim?></td>
                                                <td><?=$as->tpl5_2dag?></td>
                                                <td><?=$as->tpl6_kpst?></td>
                                                <td><?=$as->tpl6_1dag?></td>
                                                <td><?=$as->tpl6_uretim?></td>
                                                <td><?=$as->tpl6_2dag?></td>
                                                <td><?=$as->tpl5_iscilik?></td>
                                                <td><?=$as->tpl5_enerji?></td>
                                                <td><?=$as->tpl5_amortisman?></td>
                                                <td><?=$as->tpl5_bakim?></td>
                                                <td><?=$as->tpl6_iscilik?></td>
                                                <td><?=$as->tpl6_enerji?></td>
                                                <td><?=$as->tpl6_amortisman?></td>
                                                <td><?=$as->tpl6_bakim?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings3">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Granül Dağılım</h1>
                                <hr>
                                <div class="table-responsive responsive-table-plugin dragscroll " data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped dragscroll mb-0 table-bordered table-hover table">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/dagilimgerceklesen/action_granulgerceklesen"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Granül</h3>
                                                </td>
                                                <td colspan="6" style="text-align:center;">
                                                    <h3>Granül</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>Mamul</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>HM</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                                <th>Üretim Maliyeti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($granuldagitimilk as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->granul_kpst?></td>
                                                <td><?=$as->granul_1dag?></td>
                                                <td><?=$as->granul_uretim?></td>
                                                <td><?=$as->granul_2dag?></td>
                                                <td><?=$as->granul_hm?></td>
                                                <td><?=$as->granul_iscilik?></td>
                                                <td><?=$as->granul_enerji?></td>
                                                <td><?=$as->granul_amortisman?></td>
                                                <td><?=$as->granul_gug?></td>
                                                <td><?=$as->uretimmaliyeti?></td>
                                            </tr>
                                            <?php }?>
                                            <?php foreach($granuldagitim as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->granul_kpst?></td>
                                                <td><?=$as->granul_1dag?></td>
                                                <td><?=$as->granul_uretim?></td>
                                                <td><?=$as->granul_2dag?></td>
                                                <td><?=$as->granul_hm?></td>
                                                <td><?=$as->granul_iscilik?></td>
                                                <td><?=$as->granul_enerji?></td>
                                                <td><?=$as->granul_amortisman?></td>
                                                <td><?=$as->granul_gug?></td>
                                                <td><?=$as->uretimmaliyeti?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="settings4">
                        <div class="col-lg-12">
                            <div class="card-box">
                                <h1>Granül Ekstra Dağılım</h1>
                                <hr>
                                <div class="table-responsive responsive-table-plugin dragscroll " data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table-striped dragscroll mb-0 table-bordered table-hover table">
                                        <thead>
                                            <tr>
                                                <td colspan="29" style="text-align:center;"><a href="<?=base_url()?>admin/dagilimgerceklesen/action_granulekstragerceklesen"><button type="button" class="btn btn-success waves-effect  width-md waves-dark"><i class="fas fa-file-excel"></i> Excel Raporu Al</button></a></td>
                                            </tr>
                                            <tr>
                                                <td colspan="2"></td>
                                                <td colspan="4" style="text-align:center;">
                                                    <h3>Granül Ekstra</h3>
                                                </td>
                                                <td colspan="6" style="text-align:center;">
                                                    <h3>Granül Ekstra</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Id</th>
                                                <th>Mamul</th>
                                                <th>Kapasite</th>
                                                <th>1. Dağılım</th>
                                                <th>Üretim</th>
                                                <th>2. Dağılım</th>
                                                <th>HM</th>
                                                <th>İşçilik</th>
                                                <th>Enerji</th>
                                                <th>Amortisman</th>
                                                <th>GÜG</th>
                                                <th>Üretim Maliyeti</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($granulekstradagitimilk as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->granulekstra_kpst?></td>
                                                <td><?=$as->granulekstra_1dag?></td>
                                                <td><?=$as->granulekstra_uretim?></td>
                                                <td><?=$as->granulekstra_2dag?></td>
                                                <td><?=$as->granulekstra_hm?></td>
                                                <td><?=$as->granulekstra_iscilik?></td>
                                                <td><?=$as->granulekstra_enerji?></td>
                                                <td><?=$as->granulekstra_amortisman?></td>
                                                <td><?=$as->granulekstra_gug?></td>
                                                <td><?=$as->uretimmaliyeti?></td>
                                            </tr>
                                            <?php }?>
                                            <?php foreach($granulekstradagitim as $as) {?>
                                            <tr>
                                                <td><?=$as->Id?></td>
                                                <td><?=$as->adi?></td>
                                                <td><?=$as->granulekstra_kpst?></td>
                                                <td><?=$as->granulekstra_1dag?></td>
                                                <td><?=$as->granulekstra_uretim?></td>
                                                <td><?=$as->granulekstra_2dag?></td>
                                                <td><?=$as->granulekstra_hm?></td>
                                                <td><?=$as->granulekstra_iscilik?></td>
                                                <td><?=$as->granulekstra_enerji?></td>
                                                <td><?=$as->granulekstra_amortisman?></td>
                                                <td><?=$as->granulekstra_gug?></td>
                                                <td><?=$as->uretimmaliyeti?></td>
                                            </tr>
                                            <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <script src="<?=base_url()?>assets/admin/libs/rwd-table/rwd-table.min.js"></script>

                <!-- Init js -->
                <script src="<?=base_url()?>assets/admin/js/pages/responsive-table.init.js"></script>

                <!-- App js -->
                <script src="<?=base_url()?>assets/admin/js/app.min.js"></script>
