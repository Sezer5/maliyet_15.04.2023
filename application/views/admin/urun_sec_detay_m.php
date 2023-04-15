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
                                                    <div id="hammaddeyuzde" style="height: 16rem"></div>
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
                                                    <div id="iscilikyuzde" style="height: 16rem"></div>
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
                                                    <div id="enerjiyuzde" style="height: 16rem"></div>
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
                                                    <div id="amortismanyuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Öğütme Kolaylaştırıcı</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="ok" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Öğütme Kolaylaştırıcı Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="okyuzde" style="height: 16rem"></div>
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
                                                    <div id="bakimyuzde" style="height: 16rem"></div>
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
                                                    <div id="uretimmaliyetiyuzde" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Genel Yönetim Giderleri</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gyg" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Genel Yönetim Giderleri Yüzde</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gygyuzde" style="height: 16rem"></div>
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
                                                    <div id="riskyuzde" style="height: 16rem"></div>
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
                                                    <div id="digeryuzde" style="height: 16rem"></div>
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
                                                    <h2>Öğütme Kolaylaştırıcı</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gercekok" style="height: 16rem"></div>
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->hm?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#hammaddeyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->hmyuzde?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->uretimiscilik?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#iscilikyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->iscilikyuzde?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->enerji?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#enerjiyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->enerjiyuzde?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->amortisman?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#amortismanyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->amortismanyuzde?>', <?php }?>],
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
                                        'data1': 'Amortisman Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#ok', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->ok?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#okyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->okyuzde?>', <?php }?>],
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
                                        'data1': 'Öğütme Kolaylaştırıcı Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->bakim?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#bakimyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->bakimyuzde?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->uretimmaliyeti?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#uretimmaliyetiyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->uretimmaliyetiyuzde?>', <?php }?>],
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
                                        'data1': 'Üretim Maliyeti Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->genelyonetim?>', <?php }?>],
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
                                        'data1': 'Genel Yönetim Giderleri',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gygyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->genelyonetimyuzde?>', <?php }?>],
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
                                        'data1': 'Genel Yönetim Giderleri Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->risk?>', <?php }?>],
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
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#riskyuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->riskyuzde?>', <?php }?>],
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
                                        'data1': 'Risk Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->diger?>', <?php }?>],
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
                                        'data1': 'Diğer',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#digeryuzde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->digeryuzde?>', <?php }?>],
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
                                        'data1': 'Diğer Yüzde',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#netmaliyet', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($guncel as $rs){ ?> '<?=$rs->netmaliyet?>', <?php }?>],
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
                                        'data1': 'Net Maliyet',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($guncel as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gercekhammadde', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->hm?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen HM',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gercekiscilik', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->iscilik?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen İşçilik',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gercekenerji', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->enerji?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen Enerji',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gercekamortisman', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->amortisman?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen Amortisman',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gercekok', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->ok?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen ÖK',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gercekgug', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->gug?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen Genel Üretim Giderleri',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gerceknetmaliyet', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($gercek as $rs){ ?> '<?=$rs->netmaliyet?>', <?php }?>],
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
                                        'data1': 'Gerçekleşen Netmaliyet',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($gercek as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
