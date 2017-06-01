<?php
/* Smarty version 3.1.30, created on 2017-05-19 14:52:48
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\User\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ea450a48953_70805915',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24e6215bf102efa0fee9544654d3c1bb00190765' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Admin\\Admin\\User\\List.tpl',
      1 => 1483632743,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_591ea450a48953_70805915 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="javascript:void(0)">User</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->

<!-- BEGIN RESIZE TABLE -->
<link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/ResizeTable/jquery.resizableColumns.css"/>
<script type="text/javascript" src="/public/default/assets/global/plugins/ResizeTable/store.min.js"></script>
<script type="text/javascript" src="/public/default/assets/global/plugins/ResizeTable/jquery.resizableColumns.min.js"></script>
<!-- END RESIZE TABLE -->


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
$(function(){
	$("table").resizableColumns({
		store: window.store
	});
});
</script>
  


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="/admin/user/delete" 
		method="post" 
		class="DeleteAll form-horizontal">    
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue-madison">
			<div class="portlet-title">
				<div class="caption">
					Daftar User
				</div>
				<div class="actions">
					<a data-href="/admin/user/add" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-plus"></i> Tambah 
					</a>
					<a data-href="javascript:;" class="btn btn-default btn-sm">
						<i class="fa fa-file-excel-o"></i> Excel 
					</a>
					<a data-href="javascript:;" class="btn btn-default btn-sm">
						<i class="fa fa-cloud-upload"></i> Import 
					</a>
					<button class="btn btn-default btn-sm">
						<i class="fa fa-trash-o"></i> Hapus 
					</button>
					<!--
					<a href="javascript:;" class="btn btn-default btn-sm">
						<i class="fa fa-print"></i> Print 
					</a>
					-->
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="userTable">
					<thead>
					<tr role="row" class="heading">
						<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#userTable .checkboxes" data-noresize/></th>
                        <th>ID</th>
						<th>Username</th>
						<th>Perusahaan</th>
						<th>Group</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Status</th>
						<th data-noresize>&nbsp;&nbsp; Tindakan &nbsp;&nbsp;</th>
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
