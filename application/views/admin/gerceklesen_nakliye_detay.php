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
                                <div class="col-lg-12">
                                    <div class="card-box">
                                        <h3><?=$plaka?></h3>
                                        <hr>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Akaryakıt</h2>
                                        </div>
                                        <div class="body">
                                            <div id="akaryakit" style="height: 16rem"></div>
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
                                            <h2>Genel Üretim Giderleri</h2>
                                        </div>
                                        <div class="body">
                                            <div id="gug" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Harcırah</h2>
                                        </div>
                                        <div class="body">
                                            <div id="harcirah" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>HGS - OGS</h2>
                                        </div>
                                        <div class="body">
                                            <div id="hgsogs" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Kasko</h2>
                                        </div>
                                        <div class="body">
                                            <div id="kasko" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Lastik</h2>
                                        </div>
                                        <div class="body">
                                            <div id="lastik" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>MTV</h2>
                                        </div>
                                        <div class="body">
                                            <div id="mtv" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Sigorta</h2>
                                        </div>
                                        <div class="body">
                                            <div id="sigorta" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Trafik Sigortası</h2>
                                        </div>
                                        <div class="body">
                                            <div id="trafiksigorta" style="height: 16rem"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="card">
                                        <div class="header">
                                            <h2>Yağ</h2>
                                        </div>
                                        <div class="body">
                                            <div id="yag" style="height: 16rem"></div>
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
                                                bindto: '#akaryakit', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->akaryakit?>', <?php }?>],
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
                                                        'data1': 'Akaryakıt',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#bakim', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->bakim?>', <?php }?>],
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
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#gug', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->gug?>', <?php }?>],
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
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#harcirah', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->harcirah?>', <?php }?>],
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
                                                        'data1': 'Harcırah',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#hgsogs', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->hgsogs?>', <?php }?>],
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
                                                        'data1': 'HGS - OGS',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#kasko', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->kasko?>', <?php }?>],
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
                                                        'data1': 'Kasko',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#lastik', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->lastik?>', <?php }?>],
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
                                                        'data1': 'Lastik',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#mtv', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->mtv?>', <?php }?>],
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
                                                        'data1': 'MTV',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#sigorta', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->sigorta?>', <?php }?>],
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
                                                        'data1': 'Sigorta',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#trafiksigorta', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->trafiksigorta?>', <?php }?>],
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
                                                        'data1': 'Trafik Sigorta',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
                                    
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    
                                    $(function() {
                                        "use strict";
                                        $(document).ready(function() {
                                            var chart = c3.generate({
                                                bindto: '#yag', // id of chart wrapper
                                                data: {
                                                    columns: [
                                                        // each columns data
                                                        ['data1', <?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->yag?>', <?php }?>],
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
                                                        'data1': 'YAĞ',
                                                        //  'data2': 'Marketing',
                                                        //    'data3': 'Sales'
                                                    }
                                                },
                                                axis: {
                                                    x: {
                                                        type: 'category',
                                                        // name of each category
                                                        categories: [<?php foreach($gerceklesen_nakliye as $rs){ ?> '<?=$rs->rapor_tarih?>', <?php }?>]
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
