$(function(){
    var dataGrid = $("#gridContainer").dxDataGrid({
        dataSource: orders,
        columnsAutoWidth: true,
        showBorders: true,
        filterRow: {
            visible: false,
            applyFilter: "auto"
        },
        searchPanel: {
            visible: false,
            width: 240,
            placeholder: "Search..."
        },
        headerFilter: {
            visible: true
        },
        columns: [{
            dataField: "Siparis",
            caption: "Siparis No",
            width: 140,
            headerFilter: {
                groupInterval: 10000
            }
        },{
            dataField: "SaleAmount",
            alignment: "right",
            format: "currency",
            editorOptions: {
                format: "currency",
                showClearButton: false
            },
            
        }, "Employee", {
            caption: "City",
            dataField: "CustomerStoreCity",
            headerFilter: {
                allowSearch: true
            }
            }
                 , "Firma", {
            caption: "City",
            dataField: "CustomerStoreCity",
            headerFilter: {
                allowSearch: true
            }
            }]
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