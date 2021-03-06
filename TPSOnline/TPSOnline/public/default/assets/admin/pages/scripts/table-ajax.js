var TableAjax = function () {
    var handleRecords = function (sAjaxSource) 
	{
        var grid = new Datatable();
        grid.init({
            src: $("#datatable_ajax"),
            onSuccess: function (grid, response) {},
            onError: function (grid) {},
            onDataLoad: function(grid) {},
            loadingMessage: 'Loading...',
            dataTable: { 
				"language": {
					"aria": {
						"sortAscending": ": activate to sort column ascending",
						"sortDescending": ": activate to sort column descending"
					},
					"emptyTable": "No data available in table",
					"info": "Showing _START_ to _END_ of _TOTAL_ entries",
					"infoEmpty": "No entries found",
					"infoFiltered": "(filtered1 from _MAX_ total entries)",
					"lengthMenu": "Show _MENU_ entries",
					"search": "Search:",
					"zeroRecords": "No matching records found",
				},
				"dom": "<'row' <'col-md-12'T>><'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
                "bStateSave": true,
                "lengthMenu": [
                    [10, 20, 50, 100, 150, -1],
                    [10, 20, 50, 100, 150, "All"]
                ],
				"processing": true,
				"serverSide": true,
                "pageLength": 10,
				"pagingType" : "bootstrap_extended",
                "ajax": {
                    "url": sAjaxSource,
                },
				"columnDefs": [{  // set default column settings
                'orderable': false,
                'targets': [0]
            }, {
                "searchable": false,
                "targets": [0]
            }],
                "order": [
                    [1, "asc"]
                ]
            }
        });

    }
	
    return {
        init: function (sAjaxSource) {
            handleRecords(sAjaxSource);
        }
    };

}();