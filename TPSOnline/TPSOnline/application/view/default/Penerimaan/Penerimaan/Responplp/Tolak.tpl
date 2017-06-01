<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
<!-- END PAGE HEADER-->

{literal}
<style type="text/css">
	.dataTables_filter input{
		width: 100%;
		min-width:250px;
		border: 1px solid #e5e5e5;
		padding: 10px 10px;
		height:35px;
	}

</style>

<script>
jQuery(document).ready(function() {	
	
	//--------------- BEGIN DATA RESPONPLP ------------------//
	var responplptolakTable		= $('#responplptolakTable');
	var oResponplptolakTable 	= responplptolakTable.dataTable({
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
		"bLengthChange": false,
		"bFilter": false,
		"bDestroy": true,
		"ajax": {
			"url": base_url+"penerimaan/responplp/json?ISTERIMA=1",
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
				$(nRow).attr({"data-href":base_url+"penerimaan/responplp/detail/"+aaData[1], "class":"ajaxify"}).click();
			});
			return nRow;
		},

	});
	//--------------- END DATA RESPONPLP ------------------//
	
	$(".myTabs a").click(function (e) {
		e.preventDefault();
		var url = $(this).attr('data-href');
		var href = this.hash;
		var pane = $(this);

		$(href).load(url,function(result){      
			pane.tab("show");
		});
		jQuery.uniform.update(pane);
	});
});
</script>
{/literal}

<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet">

    <div class="portlet-body">
        <div class="table-container">
            <table 	cellpadding="0" 
                    cellspacing="0" 
                    border="0" 
                    
                    class="table table-striped table-bordered table-hover" 
                    id="responplptolakTable">
            <thead>
            <tr role="row" class="heading">
                <th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#responplptolakTable .checkboxes"/></th>
				<th>ID</th>
				<th>KD KANTOR</th> 
				<th>KD TPS</th> 
				<th>REF NUMBER</th> 
				<th>NO POS</th>
				<th>TINDAKAN</th>
            </tr>
            </thead>
            
            <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->
