<?php
/* Smarty version 3.1.30, created on 2017-06-01 11:35:33
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Admin\Admin\Target\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592f99955db426_52662259',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c59b381ce8dd69a668c0c339cca193488844be48' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Target\\List.tpl',
      1 => 1496253106,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592f99955db426_52662259 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16955592f9995545294_86632289';
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
/admin/target/save" 
        method="post" 
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Target
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
                                    Target Harian <span class="required">* </span>
                                </label>
                                <input 	type="text" 
                                        id="HARIAN" 
                                        name="HARIAN"
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['HARIAN'];?>
"
                                        
                                        data-rule-number="true"
                            			data-msg-number="Target tidak valid"
                                       
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi Target"
                                        
                                        placeholder="Target Harian"
                                        class="form-control">
                            </div>
                    		
                    		<div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                    Target Bulanan <span class="required">* </span>
                                </label>
                                <input 	type="text" 
                                        id="BULANAN" 
                                        name="BULANAN"
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['BULANAN'];?>
"
                                        
                                        data-rule-number="true"
                            			data-msg-number="Target tidak valid"
                                       
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi Target"
                                        
                                        placeholder="Target Bulanan"
                                        class="form-control">
                            </div>
                            
                            <div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                    Target Tahunan <span class="required">* </span>
                                </label>
                                <input 	type="text" 
                                        id="TAHUNAN" 
                                        name="TAHUNAN"
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TAHUNAN'];?>
"
                                        
                                        data-rule-number="true"
                            			data-msg-number="Target tidak valid"
                                       
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi Target"
                                        
                                        placeholder="Target Tahunan"
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
                        	<input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDTARGET" id="IDTARGET" value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['IDTARGET'];?>
" />
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
</form><?php }
}
