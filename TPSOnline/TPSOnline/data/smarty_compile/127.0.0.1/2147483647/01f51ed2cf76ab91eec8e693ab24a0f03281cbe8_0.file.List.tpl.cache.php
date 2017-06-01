<?php
/* Smarty version 3.1.30, created on 2017-05-19 14:52:59
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\Group\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ea45b6233a4_53812506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01f51ed2cf76ab91eec8e693ab24a0f03281cbe8' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Group\\List.tpl',
      1 => 1470320485,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591ea45b6233a4_53812506 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6891591ea45b528a58_30040800';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

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

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/group/delete" 
		method="post" 
		class="DeleteAll form-horizontal">
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					Daftar Group User
				</div>
				<div class="actions">
					<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/group/add" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-plus"></i> Tambah 
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
							id="groupTable">
					<thead>
					<tr role="row" class="heading">
                    	<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#groupTable .checkboxes"/></th>
                        <th>ID</th>
						<th>Nama Group</th>
						<th>Keterangan</th>
						<th>Tindakan</th>
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
<?php }
}
