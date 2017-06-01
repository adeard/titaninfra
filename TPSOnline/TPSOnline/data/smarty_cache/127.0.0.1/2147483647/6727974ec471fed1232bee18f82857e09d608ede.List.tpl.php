<?php
/* Smarty version 3.1.30, created on 2017-06-01 00:13:56
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Dispatch\Dispatch\Eseal\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ef9d46fcb76_71877593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1457c912ec3e1d59e81b363c8c0b3440778e774e' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Dispatch\\Dispatch\\Eseal\\List.tpl',
      1 => 1481820146,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592ef9d46fcb76_71877593 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<script src="/public/default/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- BEGIN SWEET ALERT -->
<link href="/public/default/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
<script src="/public/default/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
<!-- END SWEET ALERT -->
    
<!-- BEGIN TABLE JS -->
	<!-- BEGIN SELECT2 -->
	<link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/select2/select2.css"/>
    <script type="text/javascript" src="/public/default/assets/global/plugins/select2/select2.min.js"></script>
    <!-- END SELECT2 -->
    
    <!-- BEGIN DATATABLES -->
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script type='text/javascript' src='/public/default/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'></script>
    <script type='text/javascript' src='/public/default/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'></script>
    <script type='text/javascript' src='/public/default/assets/admin/pages/scripts/table-advanced.js'></script>
    <!-- END DATATABLE -->

    <script type='text/javascript' src='/public/default/assets/admin/pages/scripts/custom.js'></script>
    
    
    <script>
    jQuery(document).ready(function() {
       Custom.init();
       TableAdvanced.init();
    });
    </script>
    
<!-- END TABLE JS -->
    
<!-- BEGIN FORM JS -->
<!-- END FORM JS -->
<style type="text/css">
.page-breadcrumb li.active a{
	text-decoration: none;
	cursor:auto;
}
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                    <a href="/main">Home</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Dispatch Order</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->


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
</form><?php }
}
