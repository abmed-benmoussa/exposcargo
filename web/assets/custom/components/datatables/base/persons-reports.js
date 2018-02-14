//== Class definition
var datatable;
var DatatableResponsiveColumnsDemo = function () {
    //== Private functions

    // basic demo
    var demo = function () {

        datatable = $('.m_datatable').mDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: {
                    read: {
                        url: 'http://127.0.0.1/exposcargo/project/web/app_dev.php/person/jsonreport',
                        method: 'GET',
                        params: {
                            // custom query params
                            query: {
                                generalSearch: null,
                                statusperson: "1",
                                range: null,
                                behaivorcategory: null,
                                financialcategory: null,
                                persontype: null,
                                status_project: null,
                                country: null,
                                eventtype: null


                            }
                        },
                    }
                },

                pageSize: 10,
                saveState: {
                    cookie: true,
                    webstorage: true
                },
                serverPaging: true,
                serverFiltering: true,
                serverSorting: true
            },

            // layout definition
            layout: {
                theme: 'default', // datatable theme
                class: '', // custom wrapper class
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                height: 550, // datatable's body's fixed height
                footer: false // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                onEnter: true,

            },

            // columns definition
            columns: [
                {
                    field: "fullname",
                    title: "Name",
                    sortable: false, // disable sort for this column
                    width: 150,
                },
                {
                    field: "idphone",
                    title: "Phone",
                    sortable: false, // disable sort for this column
                    width: 150,
                },
                {
                    field: "fullname",
                    title: "Contact",
                    sortable: false, // disable sort for this column
                    width: 150,
                },
                {
                    field: "job",
                    title: "Job",
                    sortable: false, // disable sort for this column
                    width: 150,
                },
                {
                    field: "email",
                    title: "Email",
                    sortable: false, // disable sort for this column
                    width: 150,
                },
            ]
        });
    };

    return {
        // public functions
        init: function () {
            demo();


        }
    };
}();

jQuery(document).ready(function () {

    DatatableResponsiveColumnsDemo.init();

    $('#generalSearch').on('keyup', function (e) {

        if ($(this).val() != "")
            datatable.search($(this).val(), 'generalSearch');
        else
            datatable.search(null, 'generalSearch');

    });
    $('#statusperson').on('change', function (e) {

        datatable.search($(this).val(), 'statusperson');

    });

    $('#statusperson').on('change', function (e) {

        datatable.search($(this).val(), 'statusperson');

    });

    $('#m_dashboard_daterangepicker').on('change', function (e) {

        datatable.search($(this).val(), 'range');

    });

    $('#behaivorcategory').on('change', function (e) {

        datatable.search($(this).val(), 'behaivorcategory');

    });
    $('#financialcategory').on('change', function (e) {

        datatable.search($(this).val(), 'financialcategory');

    });
    $('#persontype').on('change', function (e) {

        datatable.search($(this).val(), 'persontype');

    });
    $('#status_project').on('change', function (e) {

        datatable.search($(this).val(), 'status_project');

    });
    $('#country').on('change', function (e) {

        datatable.search($(this).val(), 'country');

    });
    $('#eventtype').on('change', function (e) {

        datatable.search($(this).val(), 'eventtype');

    });

    $('#m_dashboard_daterangepicker').on('apply.daterangepicker', function (ev, picker) {
        datatable.search(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'), 'range');
        $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
    });

    $('#m_dashboard_daterangepicker').on('cancel.daterangepicker', function (ev, picker) {

        datatable.search(null, 'range');
        $(this).val(null)

    });



});