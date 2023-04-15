<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/vendor/charts-c3/plugin.css" />
<link rel="stylesheet" href="<?=base_url()?>assets/yeni_tema/dist/assets/css/main.css">

<body data-theme="light" class="font-nunito">
    <div id="wrapper" class="theme-cyan">
        <div class="sidebar-scroll">
            <div class="user-account">
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
                                <ul class="nav nav-tabs nav-justified">
                                    <li class="nav-item">
                                        <a href="#home2" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                            <span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
                                            <span class="d-none d-sm-block">
                                                <h1><?=$istasyon?></h1>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home2">
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
                                                    <h2>Öğütme Kolaylaştırıcı</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="ogutme" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>Genel Üretim Giderleri</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="gug" style="height: 16rem"></div>
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
                                        ['data1', <?php foreach($hm as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        categories: [<?php foreach($hm as $rs){ ?> '<?=$rs->tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($degirmen as $rs){ ?> '<?=$rs->iscilik?>', <?php }?>],
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
                                        categories: [<?php foreach($degirmen as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($degirmen as $rs){ ?> '<?=$rs->enerji?>', <?php }?>],
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
                                        categories: [<?php foreach($degirmen as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                        ['data1', <?php foreach($degirmen as $rs){ ?> '<?=$rs->ok?>', <?php }?>],
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
                                        categories: [<?php foreach($degirmen as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#gug', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($degirmen as $rs){ ?> '<?=$rs->gug?>', <?php }?>],
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
                                        'data1': 'Genel Üretim Giderleri',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($degirmen as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
