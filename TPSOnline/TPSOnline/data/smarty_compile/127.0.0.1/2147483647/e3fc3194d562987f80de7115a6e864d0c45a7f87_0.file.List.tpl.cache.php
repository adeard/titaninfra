<?php
/* Smarty version 3.1.30, created on 2017-06-01 00:14:06
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Dokumen\Dokumen\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ef9de440325_66741798',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3fc3194d562987f80de7115a6e864d0c45a7f87' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Dokumen\\Dokumen\\List.tpl',
      1 => 1481388681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ef9de440325_66741798 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '17291592ef9de2af6f1_60353771';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->

<!-- BEGIN DATATABLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/table-advanced.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/custom.js'><?php echo '</script'; ?>
>
<!-- END DATATABLE -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/custom/custom.selecbox.js"><?php echo '</script'; ?>
>

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
jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
<?php echo '</script'; ?>
>



<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/dokumen/dokumen/save" 
        method="post" 
        class="SubmitForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Dokumen
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                	<!-- BEGIN ROW -->
                	<div class="row">
                    	<!-- BEGIN COLS -->
                    	<div class="col-md-6">
                            <div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                    No. Container <span class="required">* </span>
                                </label>
                                <input 	type="text" 
                                        id="NO_CONT" 
                                        name="NO_CONT"
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi No. Container"
                                        
                                        placeholder="No. Container"
                                        class="form-control">
                            </div>
                    		
                    		<div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                   Tanggal <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_TIBA"
                                            id="TGL_TIBA"
                                            value=""
                                            
                                            placeholder="Tanggal"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-6">
                        	
                            <div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                    No. Polisi <span class="required">* </span>
                                </label>
                                <input 	type="text" 
                                        id="NO_POL" 
                                        name="NO_POL"
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi No. Polisi"
                                        
                                        placeholder="No. Polisi"
                                        class="form-control">
                            </div>
                            
                        </div>
                        <!-- END COLS -->
                    </div>
                    <!-- END ROW -->

                </div>
                <div class="form-actions">
                	<div class="row">
                        <div class="col-md-offset-3 col-md-9">
                        	<input type="hidden" name="act" id="act" value="add" />
                            <input type="submit" class="btn green" value="Simpan" />
                            <input type="reset" class="btn default" value="Batal" />
                    	</div>
                  	</div>
                </div>
            </div>
            
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
<!-- END PAGE CONTENT-->
</form>

<!-- BEGIN TABLE -->
<div class="portlet box green-haze">
    <div class="portlet-title">
        <div class="caption">
            Daftar Dokumen
        </div>
        
        <div class="actions"></div>
    </div>
    
    <div class="portlet-body">
        <div class="table-container">
            <table 	cellpadding="0" 
                    cellspacing="0" 
                    border="0" 
                    
                    class="table table-striped table-bordered table-hover" 
                    id="rekening2Table">
            <thead>
            <tr role="row" class="heading">
                <th>No</th>
                <th>No. Container</th>
                <th>NO. Polisi</th>
                <th>Tanggal</th>
                <th>Tindakan</th>
            </tr>
            </thead>
            
            <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<!-- END TABLE --><?php }
}
