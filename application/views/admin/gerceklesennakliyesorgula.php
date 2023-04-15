<script src="<?=base_url()?>assets/admin/jquery.min.js"></script>
<div id="main-content">
    <div class="container-fluid">
        <br>
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-box">
                <html xmlns="http://www.w3.org/1999/xhtml">

                <head>
                    <title>DevExtreme Demo</title>
                    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
                    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

                    <script>
                        window.jQuery || document.write(decodeURIComponent('%3Cscript src="<?=base_url()?>assets/DevExtreme/js/jquery.min.js"%3E%3C/script%3E'))

                    </script>

                    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/DevExtreme/dx.light.css" />
                    <script src="<?=base_url()?>assets/DevExtreme/dx.all.js"></script>

                    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/DevExtreme/styles.css" />

                    <script>
                        $(function() {
                            var dataGrid = $("#gridContainer").dxDataGrid({
                                dataSource: orders,
                                columnsAutoWidth: true,
                                showBorders: true,
                                filterRow: {
                                    visible: false,
                                    applyFilter: "auto"
                                },
                                searchPanel: {
                                    visible: true,
                                    width: 240,
                                    placeholder: "Ara..."
                                },
                                headerFilter: {
                                    visible: true
                                },
                                columns: [{
                                        dataField: "SevkTarihi",

                                        alignment: "right",
                                        caption: "SevkTarihi",
                                        headerFilter: {
                                            groupInterval: 10000
                                        }
                                    }, {
                                        dataField: "CariAdi",
                                        alignment: "right",
                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    }, {
                                        dataField: "MamulAdi",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },
                                    {
                                        dataField: "MamulSatisGrubu",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },

                                    {
                                        dataField: "MamulTasimaTipi",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },
                                    {
                                        dataField: "SevkedilenMiktarKG",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },
                                    {
                                        dataField: "SevkYeri",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },
                                    {
                                        dataField: "ProjeKodu",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },
                                    {
                                        dataField: "NigtasKGNakliyeFiyatı",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },
                                    {
                                        dataField: "NakliyeciKGFiyatı",
                                        alignment: "right",

                                        format: "text",
                                        editorOptions: {
                                            format: "text",
                                            showClearButton: false
                                        },

                                    },






                                ]
                            }).dxDataGrid('instance');

                            var applyFilterTypes = [{
                                key: "auto",
                                name: "Immediately"
                            }, {
                                key: "onClick",
                                name: "On Button Click"
                            }];

                            var applyFilterModeEditor = $("#useFilterApplyButton").dxSelectBox({
                                items: applyFilterTypes,
                                value: applyFilterTypes[0].key,
                                valueExpr: "key",
                                displayExpr: "name",
                                onValueChanged: function(data) {
                                    dataGrid.option("filterRow.applyFilter", data.value);
                                }
                            }).dxSelectBox("instance");

                            $("#filterRow").dxCheckBox({
                                text: "Filter Row",
                                value: true,
                                onValueChanged: function(data) {
                                    dataGrid.clearFilter();
                                    dataGrid.option("filterRow.visible", data.value);
                                    applyFilterModeEditor.option("disabled", !data.value);
                                }
                            });

                            $("#headerFilter").dxCheckBox({
                                text: "Header Filter",
                                value: true,
                                onValueChanged: function(data) {
                                    dataGrid.clearFilter();
                                    dataGrid.option("headerFilter.visible", data.value);
                                }
                            });

                            function getOrderDay(rowData) {
                                return (new Date(rowData.OrderDate)).getDay();
                            }
                        });

                        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                        var orders = [
                            <?php
                                                        $sevkmiktar=0;
                                                        $nigtas=0;
                                                        $nakliyeci=0;
                                                    foreach ($veri as $rs){
                                                     $sevkmiktar=$rs->SEVKEDILEN_MIKTAR_KG / 1000;
                                                     $nigtas=floatval($rs->NIGTAS_NAK_KG_FIYATI) * 1000;
                                                     $nakliyeci=floatval($rs->NAKLIYECI_KG_FIYATI) * 1000;
                                                       ?>

                            {
                                "SevkTarihi": "<?=$rs->SEVK_TARIHI?>",
                                "CariAdi": "<?=$rs->CARI_ADI?>",
                                "MamulAdi": "<?=$rs->MAMUL_ADI?>",
                                "MamulSatisGrubu": "<?=$rs->MAMUL_SATIS_GRUBU?>",
                                "MamulTasimaTipi": "<?=$rs->MAMUL_TASIMA_TIPI?>",
                                "SevkedilenMiktarKG": "<?=$sevkmiktar?>",
                                "SevkYeri": "<?=$rs->SEVK_YERI?>",
                                "ProjeKodu": "<?=$rs->PROJE_KODU?>",
                                "NigtasKGNakliyeFiyatı": "<?=$nigtas?>",
                                "NakliyeciKGFiyatı": "<?=$nakliyeci?>"
                            },
                            <?php }?>
                        ];

                    </script>
                </head>
                <style>
                    table {
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                        border: 1px solid #ddd;
                    }

                    th,
                    td {
                        text-align: left;
                        padding: 16px;
                    }

                    tr:nth-child(even) {
                        background-color: #f2f2f2;
                    }

                </style>
                <body class="dx-viewport">
                    <a href="<?=base_url()?>admin/Gerceklesennakliye/action_Gerceklesennakliyesorgula/<?=$baslangic?>/<?=$bitis?>/<?=$lokasyon?>"><button type="submit" class="btn btn-bordered-success waves-effect  width-md waves-light"><i class="ti-file"></i> Excel Raporu Al</button></a>
                    <hr>
                    <div class="demo-container">
                        <div id="gridContainer" style="margin-top:30px;"></div>
                    </div>
                </body>
                </html>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <form action="<?=base_url()?>admin/Gerceklesennakliye/Gerceklesennakliyesorgula" method="post">
                    <div class="form-group">
                        <table class="table-responsive table-bordered">
                            <tr>
                                <td style="width:50%"><label>Başlangıç Tarihi</label></td>
                                <td style="width:50%"><input type="text" name="baslangic" class="form-control" placeholder="YYYY-AA-GG"></td>


                            </tr>
                            <tr>
                                <td style="width:50%"><label>Bitiş Tarihi</label></td>
                                <td style="width:50%"><input type="text" name="bitis" class="form-control" placeholder="YYYY-AA-GG"></td>
                            </tr>
                            <tr>
                                <td style="width:50%"><label>Lokasyon</label></td>
                                <td style="width:50%"><input type="text" name="lokasyon" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:right;"><button type="submit" class="btn btn-bordered-success waves-effect  width-md waves-light"><i class="ti-search"></i> SORGULA</button></td>
                            </tr>
                        </table>



                    </div>


                </form>
            </div> <!-- end col -->


        </div>
    </div>
</div>
</div>
<script src="<?=base_url()?>assets/yeni_tema/dist/assets/bundles/mainscripts.bundle.js"></script>
