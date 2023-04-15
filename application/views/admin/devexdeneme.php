<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Masraf Merkezi Düzenleme</title>
</head>
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
                                                dataField: "ID",

                                                alignment: "right",
                                                caption: "ID",
                                                headerFilter: {
                                                    groupInterval: 10000
                                                }
                                            }, {
                                                dataField: "Departman",
                                                alignment: "right",
                                                format: "text",
                                                editorOptions: {
                                                    format: "text",
                                                    showClearButton: false
                                                },

                                            }, {
                                                dataField: "Mülakat Yapılan Kişi",
                                                alignment: "right",

                                                format: "text",
                                                editorOptions: {
                                                    format: "text",
                                                    showClearButton: false
                                                },

                                            },
                                            {
                                                dataField: "Başlangıç Tarihi",
                                                alignment: "right",

                                                format: "text",
                                                editorOptions: {
                                                    format: "text",
                                                    showClearButton: false
                                                },

                                            },

                                            {
                                                dataField: "Bitiş Tarihi",
                                                alignment: "right",

                                                format: "text",
                                                editorOptions: {
                                                    format: "text",
                                                    showClearButton: false
                                                },

                                            },
                                            {
                                                dataField: "Yönetime Gönderilen Tarih",
                                                alignment: "right",

                                                format: "text",
                                                editorOptions: {
                                                    format: "text",
                                                    showClearButton: false
                                                },

                                            },
                                            {
                                                dataField: "Yönetimden Cevaplananlar",
                                                caption: "",
                                                alignment: "center",
                                                width: 100,
                                                cellTemplate: function(container, options) {
                                                    return $("<a>", {
                                                        "href": options.value,
                                                        "target": "_blank"
                                                    }).text('Yönetim Cevapları');
                                                }
                                            },
                                            {
                                                dataField: "Personele Gönderilen Tarih",
                                                alignment: "right",

                                                format: "text",
                                                editorOptions: {
                                                    format: "text",
                                                    showClearButton: false
                                                },

                                            },
                                            {
                                                dataField: "Personelden Cevaplananlar",
                                                caption: "",
                                                alignment: "center",
                                                width: 100,
                                                cellTemplate: function(container, options) {
                                                    return $("<a>", {
                                                        "href": options.value,
                                                        "target": "_blank"
                                                    }).text('Personel Cevapları');
                                                }
                                            },
                                            {
                                                dataField: "İncele",
                                                caption: "",
                                                alignment: "center",
                                                width: 100,
                                                cellTemplate: function(container, options) {
                                                    return $("<a>", {
                                                        "href": options.value,
                                                        "target": "_blank"
                                                    }).text('İncele');
                                                }
                                            }






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
                                var orders = [
                                    <?php
                                                    foreach ($admin as $rs){
                                                     
                                                       ?>

                                    {
                                        "ID": "<?=$rs->Id?>",
                                        "Departman": "<?=$rs->Id?>",
                                        "Mülakat Yapılan Kişi": "<?=$rs->Id?>",
                                        "Başlangıç Tarihi": "<?=$rs->BORC?>",
                                        "Bitiş Tarihi": "<?=str_replace(array('.'), '_',$rs->ACIKLAMA);?>",
                                        "Yönetime Gönderilen Tarih": "<?=$rs->Id?>",
                                        "Yönetimden Cevaplananlar": "<?=base_url()?>admin/kullanicilar/tumbulgular_detay_yonetim/<?=$rs->Id?>",
                                        "Personele Gönderilen Tarih": "<?=$rs->Id?>",
                                        "Personelden Cevaplananlar": "<?=base_url()?>admin/kullanicilar/tumbulgular_detay_personel/<?=$rs->Id?>",
                                        "İncele": "<?=base_url()?>admin/kullanicilar/tumbulgular_detay/<?=$rs->Id?>"
                                    },
                                    <?php }?>
                                ];

                            </script>
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
                            <div class="demo-container">
                                <div id="gridContainer" style="margin-top:30px;"></div>

                            </div>
                        </body>
</html>
   

