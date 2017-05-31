<?php
/* Smarty version 3.1.30, created on 2017-05-30 09:44:43
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Admin\Admin\Activity\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592cdc9b30b358_68870696',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c4894c3c3742b9850d271fa1fde24ad62597945' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Activity\\List.tpl',
      1 => 1458321744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592cdc9b30b358_68870696 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11340592cdc9b27d653_29133567';
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
	
	input.checkboxes{
		margin-left:5px;
	}
</style>

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->  
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					User Activity
				</div>
				<div class="actions">
					
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="activityTable">
					<thead>
					<tr role="row" class="heading">
						<th>No</th>
						<th>Username</th>
						<th>Organisasi</th>
						<th>Group</th>
						<th>Nama</th>
						<th>IP Address</th>
						<th>OS</th>
						<th>Browser</th>
						<th>Login</th>
						<th>Logout</th>
						<th>Status</th>
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
<?php }
}
