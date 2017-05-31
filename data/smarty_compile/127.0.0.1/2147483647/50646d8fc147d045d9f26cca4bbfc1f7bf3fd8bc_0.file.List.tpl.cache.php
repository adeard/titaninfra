<?php
/* Smarty version 3.1.30, created on 2017-05-30 10:52:49
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Admin\Admin\User\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592cec91da2049_70543464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50646d8fc147d045d9f26cca4bbfc1f7bf3fd8bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Admin\\Admin\\User\\List.tpl',
      1 => 1483632743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592cec91da2049_70543464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1004592cec91d4c267_09225153';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->

<!-- BEGIN RESIZE TABLE -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/ResizeTable/jquery.resizableColumns.css"/>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/ResizeTable/store.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/ResizeTable/jquery.resizableColumns.min.js"><?php echo '</script'; ?>
>
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

<?php echo '<script'; ?>
>
$(function(){
	$("table").resizableColumns({
		store: window.store
	});
});
<?php echo '</script'; ?>
>
  


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/user/delete" 
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
					<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/user/add" class="btn btn-default btn-sm ajaxify">
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
