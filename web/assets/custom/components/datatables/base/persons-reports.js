//== Class definition
var datatable ;
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
                                                method : 'GET'
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
        
                         $('#generalSearch').on('keyup', function(e) {
            
                        datatable.search($(this).val(),'generalSearch');
                        //datatable.reload();
                        });
                    $('#statusperson').on('change', function(e) {
                         alert('ici')
                        datatable.search($(this).val(),'statusperson');
                        //datatable.reload();
                        });
});