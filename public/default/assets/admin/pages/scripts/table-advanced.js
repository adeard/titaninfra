var TableAdvanced = function () {
	
	var initTable  = function () {
		
		//--------------- BEGIN DATA TABLE USER ACTIVITY ------------------//
        var activityTable	= $('#activityTable');
		var oActivityTable 	= activityTable.dataTable({
			"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
			"language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                "infoEmpty": "No records found",
                "infoFiltered": "(filtered1 from _MAX_ total records)",
                "lengthMenu": "Show _MENU_ records",
                "search": "Search:",
                "zeroRecords": "No matching records found",
				"paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
			"lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
            ],
			"order": [
                [1, 'asc']
            ],
			"autoWidth": false,
			"pageLength": 10,
			"ajax": {
				"url": base_url+"admin/activity/json",
			},
            "columns": [
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
                    { "orderable": false, "searchable": false, "width": "120px" }
            ]
        });
		
		/**
		setInterval( function () {
			$(oActivityTable).dataTable().fnReloadAjax();
		}, 5000 );
		*/
		
		//--------------- END DATA TABLE USER ACTIVITY ------------------//
		
		
        //--------------- BEGIN DATA TABLE USER ------------------//
        var userTable	= $('#userTable');
		var oUserTable 	= userTable.dataTable({
			"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
			"language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                "infoEmpty": "No records found",
                "infoFiltered": "(filtered1 from _MAX_ total records)",
                "lengthMenu": "Show _MENU_ records",
                "search": "Search:",
                "zeroRecords": "No matching records found",
				"paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
			"lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
            ],
			"order": [
                [1, 'asc']
            ],
			"autoWidth": false,
			"pageLength": 10,
			"ajax": {
				"url": base_url+"admin/user/json",
			},
            "columns": [
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
					{"visible": false, "searchable": false},
					null,
					{"orderable": false, "class":"text-center"},
					{"orderable": false, "class":"text-center"},
					{"orderable": false, "class":"text-center"},
					{"orderable": false, "class":"text-center"},
					{"orderable": false, "class":"text-center"},
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
            ],
			"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
				$(nRow).dblclick(function() {
					$(nRow).attr({"href":base_url+"admin/user/edit/"+aaData[1], "class":"ajaxify"}).click();
				});
				return nRow;
            },
	
        });
		
		//--------------- END DATA TABLE USER ------------------//
        
        //--------------- BEGIN DATA TABLE GROUP ------------------//
        var groupTable	= $('#groupTable');
		var oGroupTable = groupTable.dataTable({
			"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
			"language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                "infoEmpty": "No records found",
                "infoFiltered": "(filtered1 from _MAX_ total records)",
                "lengthMenu": "Show _MENU_ records",
                "search": "Search:",
                "zeroRecords": "No matching records found",
				"paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
			"lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
            ],
			"order": [
                [1, 'asc']
            ],
			"autoWidth": false,
			"pageLength": 10,
			"ajax": {
				"url": base_url+"admin/group/json",
			},
            "columns": [
					{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
					{"visible": false, "searchable": false},
					null,
					null,
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
            ],
			"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
				$(nRow).dblclick(function() {
					$(nRow).attr({"href":base_url+"admin/group/edit/"+aaData[1], "class":"ajaxify"}).click();
				});
				return nRow;
            },
        });
		//"sType": "date"
        //--------------- END DATA TABLE GROUP ------------------//
		
		//--------------- BEGIN DATA TABLE IMAGE ------------------//
        var imageTable	= $('#imageTable');
		var oImageTable = imageTable.dataTable({
			"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
			"language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No data available in table",
                "info": "Showing _START_ to _END_ of _TOTAL_ records",
                "infoEmpty": "No records found",
                "infoFiltered": "(filtered1 from _MAX_ total records)",
                "lengthMenu": "Show _MENU_ records",
                "search": "Search:",
                "zeroRecords": "No matching records found",
				"paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
			"lengthMenu": [
                [10, 15, 20, -1],
                [10, 15, 20, "All"]
            ],
			"order": [
                [1, 'asc']
            ],
			"autoWidth": false,
			"pageLength": 10,
			"ajax": {
				"url": base_url+"admin/image/json",
			},
            "columns": [
					{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
					{"visible": false, "searchable": false},
					null,
					null,
					null,
					null,
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
            ],
			"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
				$(nRow).dblclick(function() {
					$(nRow).attr({"href":base_url+"admin/image/edit/"+aaData[1], "class":"ajaxify"}).click();
				});
				return nRow;
            },
        });
        //--------------- END DATA TABLE IMAGE ------------------//
		
		
		if($.fn.dataTable)
		{
			var tableCheckAll = $.fn.dataTable.fnTables(true);
			$(tableCheckAll).find('.group-checkable').change(function () {
				var set = jQuery(this).attr("data-set");
				var checked = jQuery(this).is(":checked");
				jQuery(set).each(function () {
					if (checked) {
						$(this).attr("checked", true);
					} else {
						$(this).attr("checked", false);
					}
				});
				jQuery.uniform.update(set);
			});
		}

	}
	
    return {
        init: function () {
            if (!jQuery().dataTable) {
                return;
            }
			
            initTable();
        }

    };

}();