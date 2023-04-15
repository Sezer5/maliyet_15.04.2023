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
                                                <h1>YAPI KİMYASALLARI İSTATİSTİKLERİ</h1>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade show active" id="home2">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>SUSUZ ÖĞÜTME KOLAYLAŞTIRICI (€)</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="yatayok" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>TRİETANOMALİN</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="trietanomalin" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>SARI ASİT</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="sariasit" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>STEARİK ASİT(GLS ÜRÜNLER İÇİN OLMAYANLAR)</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="sa" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>DOLAR</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="dolar" style="height: 16rem"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="card">
                                                <div class="header">
                                                    <h2>EURO</h2>
                                                </div>
                                                <div class="body">
                                                    <div id="euro" style="height: 16rem"></div>
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
                                bindto: '#yatayok', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($ok as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        'data1': 'Ö.K.',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($ok as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#trietanomalin', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($trietanomalin as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        'data1': 'Trietanomalin',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($trietanomalin as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#sariasit', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($sariasit as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        'data1': 'Sarı Asit',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($sariasit as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#sa', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($stearikasit as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        'data1': 'Stearik Asit',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($stearikasit as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#dolar', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($dolar as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        'data1': 'Dolar',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($dolar as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                bindto: '#euro', // id of chart wrapper
                                data: {
                                    columns: [
                                        // each columns data
                                        ['data1', <?php foreach($euro as $rs){ ?> '<?=$rs->fiyat?>', <?php }?>],
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
                                        'data1': 'Euro',
                                        //  'data2': 'Marketing',
                                        //    'data3': 'Sales'
                                    }
                                },
                                axis: {
                                    x: {
                                        type: 'category',
                                        // name of each category
                                        categories: [<?php foreach($euro as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
