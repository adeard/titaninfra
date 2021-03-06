<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
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
	
	//--------------- BEGIN DATA ESEAL ------------------//
	var esealTable		= $('#esealTable');
	var oEsealTable 	= esealTable.dataTable({
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
				"url": base_url+"dispatch/eseal/json",
			},
            "columns": [
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
					{"visible": false, "searchable": false},
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
					null,
                    { "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
            ],

	});
	//--------------- END DATA CONTAINER ------------------//

});
</script>
{/literal}
<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="#" 
		method="post" 
		class="DeleteAll form-horizontal">    
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue-madison">
			<div class="portlet-title">
				<div class="caption">
					Daftar Dispatch Order
				</div>
				<div class="actions">
					<button class="btn btn-default btn-sm">
						<i class="fa fa-recycle"></i> Sinkronis 
					</button>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="esealTable">
					<thead>
					<tr role="row" class="heading">
						<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#esealTable .checkboxes"/></th>
                        <th>ID</th>
						<th>KD ESEAL</th>
						<th>NO PLP</th>
						<th>TGL PLP</th>
						<th>NO POL</th>
						<th>NO CONT</th>
						<th>KD TPS ASAL</th>
						<th>KD GUDANG</th>
						<th>GUDANG TUJUAN</th>
						<th>UK CONT</th>
						<th>JNS CONT</th>
						<th>STATUS</th>
						<th>&nbsp;&nbsp; TINDAKAN &nbsp;&nbsp;</th>
					</tr>
					</thead>
					
					<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
</form>