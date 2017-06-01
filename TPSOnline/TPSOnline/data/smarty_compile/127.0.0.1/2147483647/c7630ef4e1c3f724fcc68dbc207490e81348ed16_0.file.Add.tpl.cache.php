<?php
/* Smarty version 3.1.30, created on 2017-05-11 22:12:40
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\Group\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59147f680ca710_77820217',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c7630ef4e1c3f724fcc68dbc207490e81348ed16' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Group\\Add.tpl',
      1 => 1483085561,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59147f680ca710_77820217 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1495859147f67dea372_90067437';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->


<?php echo '<script'; ?>
 language="javascript">
	$(function() {
		
		enable_cb_all();
		$(".ROLEVIEW_ALL").click(enable_cb_all);
		
		<?php
$__section_module_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_0_total = $__section_module_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_0_total != 0) {
for ($__section_module_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_0_iteration <= $__section_module_0_total; $__section_module_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
		enable_cb_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
();
		$(".ROLEVIEW_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").click(enable_cb_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
);
		<?php
}
}
if ($__section_module_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_0_saved;
}
?>
		
	});
	
	
	function enable_cb_all() {
		
		if (this.checked) {
			<?php
$__section_module_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_1_total = $__section_module_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_1_total != 0) {
for ($__section_module_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_1_iteration <= $__section_module_1_total; $__section_module_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
			$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").removeAttr("disabled");
			<?php
}
}
if ($__section_module_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_1_saved;
}
?>
		} else {
			<?php
$__section_module_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_2_total = $__section_module_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_2_total != 0) {
for ($__section_module_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_2_iteration <= $__section_module_2_total; $__section_module_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
			$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").attr("disabled", true);
			$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").prop('checked', false);
			<?php
}
}
if ($__section_module_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_2_saved;
}
?>			
		}
		
	}
	
	<?php
$__section_module_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_3_total = $__section_module_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_3_total != 0) {
for ($__section_module_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_3_iteration <= $__section_module_3_total; $__section_module_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
	function enable_cb_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
() {
		
		if (this.checked) {
			$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").removeAttr("disabled");
		} else {
			$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").attr("disabled", true);
			$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").prop('checked', false);
		}
		
		$.uniform.update(".checkboxes");
	}
	<?php
}
}
if ($__section_module_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_3_saved;
}
?>
	

<?php echo '</script'; ?>
>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/group/save" 
        method="post" 
        class="SubmitForm form-horizontal">
                        
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Group User
                </div>
                <div class="actions">
                	<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/group" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
                </div>
            </div>
            <div class="portlet-body form">
 
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Nama Group <span class="required">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" 
                                   name="NAMAGROUP"
                                   id="NAMAGROUP"
                                   
                                   placeholder="Masukan nama group" 
                                   maxlength="20"
                                    
                                   data-rule-required="true"
                                   data-msg-required="Silahkan isi nama group"
                                    
                                   data-rule-minlength="3"
                                   data-msg-minlength="Nama group tidak kurang dari 3 karakter"
                                    
                                   data-rule-maxlength="32"
                                   data-msg-maxlength="Nama group tidak lebih dari 32 karakter"
                                     
                                   data-rule-remote="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/group/check"
                                   data-msg-remote="Nama group sudah terpakai"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Keterangan<span class="required">&nbsp; </span>
                        </label>
                        <div class="col-md-4">
                        	<textarea name="KETERANGAN"
                                      id="KETERANGAN"
                                      
                                      placeholder="Masukan keterangan group"
                                      data-rule-maxlength="200"
                                      data-msg-maxlength="Nama group tidak lebih dari 200 karakter"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="add" />
                            
                            <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/group" class="btn default ajaxify">
                            	<i class="fa fa-arrow-left"></i> Kembali 
                            </a>
                            <input type="submit" class="btn green" value="Simpan" />
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
        <!-- END VALIDATION STATES-->
    </div>
</div>
<!-- END PAGE CONTENT-->

<!-- BEGIN TABLE-->
<div class="row">
	<div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List Role User
                </div>
                <div class="tools"></div>
            </div>
            <div class="portlet-body">
            	<div class="panel">
                    <input type="checkbox" name="selectall" id="selectall" 
                    	   class="group-checkable ROLEVIEW_ALL" data-set=".checkboxes"/>
                           <strong>Pilih Semua</strong>
                </div>
                
            	<div class="tabbable-custom">
                    <ul class="nav nav-tabs">
                    	<?php
$__section_tabs_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs'] : false;
$__section_tabs_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tabs_4_total = $__section_tabs_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tabs'] = new Smarty_Variable(array());
if ($__section_tabs_4_total != 0) {
for ($__section_tabs_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] = 0; $__section_tabs_4_iteration <= $__section_tabs_4_total; $__section_tabs_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']++){
?>
                            <?php if ($_smarty_tpl->tpl_vars['tabs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] : null)]['ORDINAL'] == 1) {?>
                                <?php $_smarty_tpl->_assignInScope('tab_active', 'active');
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('tab_active', '');
?>
                            <?php }?>
                            <li class="<?php echo $_smarty_tpl->tpl_vars['tab_active']->value;?>
">
                                <a href="#<?php echo $_smarty_tpl->tpl_vars['tabs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] : null)]['KODE'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['tabs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] : null)]['NAMAMODUL'];?>
</a>
                            </li>
                        <?php
}
}
if ($__section_tabs_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tabs'] = $__section_tabs_4_saved;
}
?>
                    </ul>
                    <div class="tab-content">
                    	<!-- MODULES -->
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabmodule']->value, 'Item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->value) {
?>
                        <div class="tab-pane <?php echo $_smarty_tpl->tpl_vars['Item']->value['TabActive'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['Item']->value['TABID'];?>
">
                            <table 	cellpadding="0" 
                                    cellspacing="0" 
                                    border="0" 
                                    class="table table-striped table-bordered table-hover">
                                    
                                <thead>
                                <tr>
                                    <th width="50%">Page</th>
                                    <th width="10%" style="text-align:center">List</th>
                                    <th width="10%" style="text-align:center">Add</th>
                                    <th width="10%" style="text-align:center">Edit</th>
                                    <th width="10%" style="text-align:center">Delete</th>
                                    <th width="10%" style="text-align:center">Report</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Item']->value['Child'], 'ItemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ItemChild']->value) {
?>
                                    <tr>
                                        <td>
                                           <?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['NAMAMODUL'];?>

                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="<?php echo $_smarty_tpl->tpl_vars['Item']->value['ORDINAL'];?>
" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" 
                                                    id="ROLEVIEW_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" 
                                                    class="checkboxes ROLEVIEW_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" 
                                                    id="ROLEADD_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
"
                                                    class="checkboxes GROUP_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" 
                                                    id="ROLEEDIT_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
"
                                                    class="checkboxes GROUP_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" 
                                                    id="ROLEDEL_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
"
                                                    class="checkboxes GROUP_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" 
                                                    id="ROLERIP_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
"
                                                    class="checkboxes GROUP_<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
" />
                                        </td>
                                        
                                    </tr>
                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                
                                </tbody>
                            </table>
                        </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                        <!-- END MODULES -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END TABLE-->
</form><?php }
}
