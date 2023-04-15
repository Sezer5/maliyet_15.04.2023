<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">

<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">



        <!-- main left menu -->
        <div class="sidebar-scroll">
            <div class="user-account">


                <!-- Tab panes -->
                <div class="tab-content padding-0">
                    <div class="tab-pane active" id="menu">

                    </div>
                    <div class="tab-pane" id="setting">




                        <ul class="list-unstyled mt-3">
                            <li class="d-flex align-items-center mb-2">
                                <label class="toggle-switch theme-switch">
                                    <input type="checkbox">
                                    <span class="toggle-switch-slider"></span>
                                </label>
                                <span class="ml-3">Enable Dark Mode!</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <label class="toggle-switch theme-rtl">
                                    <input type="checkbox">
                                    <span class="toggle-switch-slider"></span>
                                </label>
                                <span class="ml-3">Enable RTL Mode!</span>
                            </li>
                            <li class="d-flex align-items-center mb-2">
                                <label class="toggle-switch theme-high-contrast">
                                    <input type="checkbox">
                                    <span class="toggle-switch-slider"></span>
                                </label>
                                <span class="ml-3">Enable High Contrast Mode!</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div id="main-content">
            <div class="container-fluid">





                <div class="row clearfix">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-box">
                                <hr>
                                <a href="<?=base_url()?>admin/Istatistikler/urun"><button type="button" class="btn btn-bordered-success waves-effect  width-md waves-light"><i class="ti-search"></i> Sorgu Ekranı</button></a>
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item">
                                        <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">Güncel Değerler</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#home3" data-toggle="tab" aria-expanded="true" class="nav-link">
                                            <span class="d-block d-sm-none"><i class="far fa-user"></i></span>
                                            <span class="d-none d-sm-block">Gerçekleşen Değerler</span>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home2">
                                        <div class="col-lg-12">
                                            <div class="card-box">
                                                <h1>Güncel Değerler <?php $d=0; foreach($guncel as $as) { if($d<1){?>

                                                    (<?=$as->mamul?>)

                                                    <?php };$d++;}?></h1>
                                                <hr>
                                            </div>

                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Hammadde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="hammadde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Hammadde Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="hammadde-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>İşçilik</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="iscilik" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>İşçilik Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="iscilik-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Enerji</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="enerji" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Enerji Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="enerji-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Ö.K.</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="ogutme" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Ö.K. Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="ogutme-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Amortisman</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="amortisman" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Amortisman Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="amortisman-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Bakım</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="bakim" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Bakım Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="bakim-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Üretim Maliyeti</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="uretimmaliyeti" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Üretim Maliyeti Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="uretimmaliyeti-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>GYG</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gyg" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>GYG Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gyg-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Risk</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="risk" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Risk Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="risk-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Diğer</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="diger" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Diğer Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="diger-yuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Net Maliyet</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="netmaliyet" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <!--TABPANEL BİTİŞİ  TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ TABPANEL BİTİŞİ -->
                                    <div role="tabpanel" class="tab-pane fade show" id="home3">
                                        <div class="col-lg-12">
                                            <div class="card-box">
                                                <h1>Gerçekleşen Değerler <?php $d=0; foreach($guncel as $as) { if($d<1){?>

                                                    (<?=$as->mamul?>)

                                                    <?php };$d++;}?></h1>
                                                <hr>
                                            </div>


                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Hammadde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekhammadde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>İşçilik</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekiscilik" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Enerji</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekenerji" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Ö.K.</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekogutme" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Amortisman</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekamortisman" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Genel Üretim Giderleri</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekgug" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                                                                
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Net Maliyet</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gerceknetmaliyet" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>



                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/libscripts.bundle.js"></script>
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/vendorscripts.bundle.js"></script>

                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/c3.bundle.js"></script>

                <!-- page js file -->
                <script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/mainscripts.bundle.js"></script>
                <script>
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#hammadde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->hm?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Hammadde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#hammadde-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->hmyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Hammadde Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#iscilik', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->uretimiscilik?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'İşçilik',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#iscilik-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->uretimiscilikyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'İşçilik Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#enerji', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->enerji?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Enerji',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#enerji-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->enerjiyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Enerji Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#amortisman', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->amortisman?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Amortisman',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#amortisman-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->amortismanyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Hammadde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#ogutme', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->ok?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Öğütme Kolaylaştırıcı',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#ogutme-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->okyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Hammadde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#bakim', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->bakim?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Bakım',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#bakim-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->bakimyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Bakım Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#uretimmaliyeti', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->uretimmaliyeti?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Üretim Maliyeti',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#uretimmaliyeti-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->uretimmaliyetiyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Hammadde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#gyg', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->genelyonetim?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Genel Yönetim',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#gyg-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->genelyonetimyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Genel Yönetim Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#risk', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->risk?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Risk',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#risk-yuzde', // id of chart wrapper
                                 data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?><?=$rs->riskyuzde?>, <?php }?>],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Hammadde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?php echo"$rs->rapor_tarih"; ?>', <?php }?>]
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });
                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#diger', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', 2.12, 8, 6, 7, 14, 11],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Development',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: ['2014', '2015', '2016', '2017', '2018', '2019']
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });

                    $(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#diger-yuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', 2.12, 8, 6, 7, 14, 33],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Development',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: ['2014', '2015', '2016', '2017', '2018', '2021']
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });$(function() {
                        "use strict";
                        $(document).ready(function() {
                            var chart = c3.generate({
                                bindto: '#netmaliyet', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', 2.12, 8, 6, 7, 14, 11],
                                        //   ['data2', 5, 15, 11, 15, 21, 25],
                                        //    ['data3', 17, 18, 21, 20, 30, 29]
                                    ],
                                    type: 'line', // default type of chart
                                    colors: {
                                        'data1': Iconic.colors["theme-cyan1"],
                                        //  'data2': Iconic.colors["theme-cyan2"],
                                        //    'data3': Iconic.colors["theme-cyan3"]
                                    },
                                    names: {
                                        // name of each serie
                                        'data1': 'Development',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: ['2014', '2015', '2016', '2017', '2018', '2019']
                                    },
                                },
                                legend: {
                                    show: true, //hide legend
                                },
                                padding: {
                                    bottom: 0,
                                    top: 0
                                },
                            });
                        });

                    });






                </script>
