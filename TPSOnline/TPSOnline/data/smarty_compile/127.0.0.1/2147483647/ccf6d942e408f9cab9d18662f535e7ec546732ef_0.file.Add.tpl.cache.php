<?php
/* Smarty version 3.1.30, created on 2017-05-10 23:26:46
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\User\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59133f46589e62_19411513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccf6d942e408f9cab9d18662f535e7ec546732ef' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Admin\\Admin\\User\\Add.tpl',
      1 => 1483085303,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59133f46589e62_19411513 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1421559133f46361d31_05245012';
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
 src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/<?php echo @constant('VIEW_THEMES');?>
/assets/custom/custom.selecbox.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function() { 
	getRoles();
});

function getRoles(){
	$("input[type=submit]").attr("disabled", true);
	var IDGROUP = $("#IDGROUP").val();
	if(IDGROUP != '')
	{
		IDGROUP = IDGROUP;
	}else{
		IDGROUP = 0;
	}
	
	
	<?php
$__section_tabs_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs'] : false;
$__section_tabs_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tabs_0_total = $__section_tabs_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tabs'] = new Smarty_Variable(array());
if ($__section_tabs_0_total != 0) {
for ($__section_tabs_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] = 0; $__section_tabs_0_iteration <= $__section_tabs_0_total; $__section_tabs_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']++){
?>
		var ORDINAL = <?php echo $_smarty_tpl->tpl_vars['tabs']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] : null)]['ORDINAL'];?>
;
		$.post( base_url+"admin/user/jsontabs", { 'IDUSER':'', 'ORDINAL':ORDINAL, IDGROUP:IDGROUP})
		.done(function( data ) {
			var response = jQuery.parseJSON(data);
			if(response.length > 0)
			{
				response.forEach(function(result)
				{
					/** CHECKED VIEW */
					if(result.ROLEVIEW != 0)
					{
						$("#ROLEVIEW_" + result.IDMODUL).prop('checked', true);
						$("input.GROUP_"+ result.IDMODUL).removeAttr("disabled");
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}else{
						$("#ROLEVIEW_" + result.IDMODUL).prop('checked', false);
						$("#ROLEVIEW_" + result.IDMODUL).removeAttr('checked');
						$("input.GROUP_"+ result.IDMODUL).attr("disabled", true);
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}
					
					/** CHECKED ADD */
					if(result.ROLEADD != 0)
					{
						$("#ROLEADD_" + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', false);
						$('#ROLEADD_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED EDIT */
					if(result.ROLEEDIT != 0)
					{
						$("#ROLEEDIT_" + result.IDMODUL).prop('checked', true);
					}else{
						$("#ROLEEDIT_" + result.IDMODUL).prop('checked', false);
						$("#ROLEEDIT_" + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED DELETE */
					if(result.ROLEDEL != 0)
					{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', true);
					}else{
						$("#ROLEDEL_" + result.IDMODUL).prop('checked', false);
						$("#ROLEDEL_" + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED REPORT */
					if(result.ROLERIP != 0)
					{
						$("#ROLERIP_" + result.IDMODUL).prop('checked', true);
					}else{
						$("#ROLERIP_" + result.IDMODUL).prop('checked', false);
						$("#ROLERIP_" + result.IDMODUL).removeAttr('checked');
					}
					
					$.uniform.update(".checkboxes");
				});
				
				$("input[type=submit]").removeAttr("disabled", true);
			}else{
				$(":checkbox").prop("checked", false);
				$(":checkbox").removeAttr("checked");
				$(":checkbox").removeAttr("disabled");
				$("input[type=checkbox][data-target]").attr("disabled", true);
				$.uniform.update(".checkboxes");
			}
		});
	<?php
}
}
if ($__section_tabs_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tabs'] = $__section_tabs_0_saved;
}
?>
	
}

$(function() {
	
	enable_cb_all();
	$(".ROLEVIEW_ALL").click(enable_cb_all);
	
	<?php
$__section_module_1_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_1_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_1_total = $__section_module_1_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_1_total != 0) {
for ($__section_module_1_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_1_iteration <= $__section_module_1_total; $__section_module_1_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
	enable_cb_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
();
	$(".ROLEVIEW_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").click(enable_cb_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
);
	<?php
}
}
if ($__section_module_1_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_1_saved;
}
?>
	
});


function enable_cb_all() {
	
	if (this.checked) {
		<?php
$__section_module_2_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_2_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_2_total = $__section_module_2_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_2_total != 0) {
for ($__section_module_2_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_2_iteration <= $__section_module_2_total; $__section_module_2_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
		$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").removeAttr("disabled");
		<?php
}
}
if ($__section_module_2_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_2_saved;
}
?>
	} else {
		<?php
$__section_module_3_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_3_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_3_total = $__section_module_3_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_3_total != 0) {
for ($__section_module_3_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_3_iteration <= $__section_module_3_total; $__section_module_3_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
?>
		$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").attr("disabled", true);
		$("input.GROUP_<?php echo $_smarty_tpl->tpl_vars['module']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] : null)]['IDMODUL'];?>
").prop('checked', false);	
		<?php
}
}
if ($__section_module_3_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_3_saved;
}
?>			
	}
	
}

<?php
$__section_module_4_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_module']) ? $_smarty_tpl->tpl_vars['__smarty_section_module'] : false;
$__section_module_4_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['module']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_module_4_total = $__section_module_4_loop;
$_smarty_tpl->tpl_vars['__smarty_section_module'] = new Smarty_Variable(array());
if ($__section_module_4_total != 0) {
for ($__section_module_4_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index'] = 0; $__section_module_4_iteration <= $__section_module_4_total; $__section_module_4_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_module']->value['index']++){
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
if ($__section_module_4_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_module'] = $__section_module_4_saved;
}
?>

<?php echo '</script'; ?>
>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/user/save" 
        method="post" 
        class="SubmitForm form-horizontal">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi User
                </div>
                <div class="actions">
                	<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/user" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
                </div>
            </div>
            
            <div class="portlet-body form">
                <div class="form-body">
                
                	<!-- BEGIN ROW -->
                    <div class="row">
                        <!-- BEGIN COLOMS -->
                        <div class="col-md-3">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 280px; height: 327px;">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo @constant('IMAGES_DIR');?>
/noimage.png" alt=""/>
                                </div>
                                
                                <div id="files" 
                                     class="fileinput-preview fileinput-exists thumbnail" 
                                     style="width: 280px; height: 327px;">
                                </div>
                                <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new">
                                            Select image 
                                        </span>
                                        <span class="fileinput-exists">
                                            Change  
                                        </span>
                                        <input  id="fileupload" 
                                                type="file" 
                                                name="files" 
                                                class="default" multiple>
                                                
                                        <input 	type="hidden" 
                                                name="USERFILES" 
                                                id="USERFILES"/>
                                        
                                        <input 	type="hidden" 
                                                name="USERFILESOLD" 
                                                id="USERFILESOLD"
                                                value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['USERFILES'];?>
"/>
                                                
                                    </span>
                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                                </div>
                            </div>
                        </div>
                        <!-- END COLOMS -->
                        
                        <!-- BEGIN COLOMS -->
                        <div class="col-md-9">
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Username <span class="required">*</span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text" 
                                           name="USERNAME"
                                           id="USERNAME"
                                           
                                           placeholder="Masukan username" 
                                           maxlength="20"
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi username"
                                            
                                           data-rule-matchuser="true"
                                           data-msg-matchuser="Username tidak valid"
                                            
                                           data-rule-minlength="5" 
                                           data-msg-minlength="Username tidak kurang dari 5 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Username tidak lebih dari 20 karakter"
                                            
                                           data-rule-remote="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/user/check" 
                                           data-msg-remote="Username tidak valid / sudah terpakai"
                                           class="form-control">
                                </div>
                            </div>
                                        
                            <div class="form-group last password-strength">
                                <label class="control-label col-md-3">
                                    Password <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password"
                                           name="PASSWORD1"
                                           id="PASSWORD1"
                                           
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi password"
                                            
                                           data-rule-minlength="5"
                                           data-msg-minlength="Password tidak kurang dari 5 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Password tidak lebih dari 20 karakter" 
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Konfirm Password <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password"
                                           name="PASSWORD2"
                                           id="PASSWORD2"
                                           
                                           placeholder="Masukan konfirm password" 
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi konfirm password"
                                            
                                           data-rule-minlength="5"
                                           data-msg-minlength="Password tidak kurang dari 5 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Password tidak lebih dari 20 karakter" 
                                            
                                           data-rule-equalTo="#PASSWORD1"  
                                           data-msg-equalTo="Konfirm password tidak sesuai"
                                           class="form-control">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Depan<span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            name="NAMADEPAN" 
                                            id="NAMADEPAN" 
                                            placeholder="Masukan nama" 
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi nama depan"
                                            
                                            data-rule-minlength="3"
                                            data-msg-minlength="Nama tidak kurang dari 3 karakter"
                                            
                                            data-rule-maxlength="32"
                                            data-msg-maxlength="Nama tidak lebih dari 32 karakter" 
                                            class="form-control NAMADEPAN">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Belakang <span class="required">&nbsp; </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            name="NAMABELAKANG" id="NAMABELAKANG" 
                                            placeholder="Masukan nama belakang"
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Jenis Kelamin <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="icheck-inline">
                                        <label>
                                            <input 	type="radio" 
                                                    name="JNSKELAMIN" 
                                                    id="JNSKELAMIN" 
                                                    class="icheck"
                                                    checked="checked"
                                                    value="M" /> Laki-laki
                                        </label>
                                        <label>
                                            <input 	type="radio" 
                                                    name="JNSKELAMIN"
                                                    id="JNSKELAMIN"
                                                    class="icheck"
                                                    value="F" /> Perempuan
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Tanggal Lahir <span class="required">*</span>
                                </label>
                                <div class="col-md-4">  
                                    <div class="input-group input-medium date date-picker">
                                        <input 	type="text" 
                                                name="TGLLAHIR"
                                                id="TGLLAHIR"
                                                placeholder="Masukan tanggal lahir"
                                                
                                                data-rule-required="true"
                                            	data-msg-required="Silahkan isi tanggal"
                                            
                                                class="form-control TGLLAHIR" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Tempat Lahir <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            placeholder="Masukan tempat lahir"
                                            name="TMPLAHIR" 
                                            id="TMPLAHIR"
                                            
                                            class="form-control TMPLAHIR">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Email <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input  type="text" 
                                            placeholder="Masukan address email" 
                                            name="EMAIL" 
                                            id="EMAIL" 
                                            
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi address email"
                                            
                                            data-rule-email="true"
                                            data-msg-email="address email tidak valid" 
                                            
                                            class="form-control EMAIL">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    HP <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" placeholder="Masukan no HP"
                                            name="HP" 
                                            id="HP"
                                            
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi nomer handphone"
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer handphone tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control HP">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Telp <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="TELP" placeholder="Masukan no telp"
                                            name="TELP" 
                                            id="TELP"
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer telp tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control TELP">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Group <span class="required">*</span>
                                </label>
                                <div class="col-md-4">
                                    <select name="IDGROUP" 
                                            id="IDGROUP" 
                                            data-rule-required="true"
                                            data-msg-required="Silahkan pilih group" 
                                            onchange="getRoles();"
                                            class="form-control">
                                                
                                        <option value="">-- SILAHKAN PILIH --</option>
                                        <?php
$__section_group_5_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_group']) ? $_smarty_tpl->tpl_vars['__smarty_section_group'] : false;
$__section_group_5_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['group']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_group_5_total = $__section_group_5_loop;
$_smarty_tpl->tpl_vars['__smarty_section_group'] = new Smarty_Variable(array());
if ($__section_group_5_total != 0) {
for ($__section_group_5_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_group']->value['index'] = 0; $__section_group_5_iteration <= $__section_group_5_total; $__section_group_5_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_group']->value['index']++){
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['group']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_group']->value['index'] : null)]['IDGROUP'];?>
">
                                            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['group']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_group']->value['index'] : null)]['NAMAGROUP'], 'UTF-8');?>

                                        </option>
                                        <?php
}
}
if ($__section_group_5_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_group'] = $__section_group_5_saved;
}
?>
                                    </select>
                                    <input type="hidden" id="REFIDGROUP" name="REFIDGROUP">   
                                </div>
                            </div>
                            
                            
                		</div>
                        <!-- END COLOMS -->
                    </div>
                    <!-- END ROW -->

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="add" />
                            <input type="hidden" name="ISADMIN" id="ISADMIN" 
                                   value="1" />
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" class="IDPERUSAHAAN">
                            
                            <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/user" class="btn default ajaxify">
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
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
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
$__section_tabs_6_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_tabs']) ? $_smarty_tpl->tpl_vars['__smarty_section_tabs'] : false;
$__section_tabs_6_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['tabs']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_tabs_6_total = $__section_tabs_6_loop;
$_smarty_tpl->tpl_vars['__smarty_section_tabs'] = new Smarty_Variable(array());
if ($__section_tabs_6_total != 0) {
for ($__section_tabs_6_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index'] = 0; $__section_tabs_6_iteration <= $__section_tabs_6_total; $__section_tabs_6_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_tabs']->value['index']++){
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
if ($__section_tabs_6_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_tabs'] = $__section_tabs_6_saved;
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
                                    class="table table-striped table-bordered">
                                    
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
                                                    data-target="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
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
                                                    data-target="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
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
                                                    data-target="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
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
                                                    data-target="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['IDMODUL'];?>
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
</form>

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/<?php echo @constant('VIEW_THEMES');?>
/assets/global/plugins/blueimp/jquery.ui.widget.js'><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/<?php echo @constant('VIEW_THEMES');?>
/assets/global/plugins/blueimp/jquery.iframe-transport.js'><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/<?php echo @constant('VIEW_THEMES');?>
/assets/global/plugins/blueimp/jquery.fileupload.js'><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
$(document).ready(function () {
	'use strict';
	var url = base_url+"upload/images";
	$('#fileupload').fileupload({
		add: function(e, data) {
			var uploadErrors = [];
			var acceptFileTypes = /^image\/(gif|jpe?g|png)$/i;
			if(!acceptFileTypes.test(data.originalFiles[0]['type'])) {
				uploadErrors.push('Not an accepted file type');
			}
			
			/** 
			* Ukuran yg dipakai byte 
			* 1 KB = 1024 byte
			*/
			
			if(data.originalFiles[0]['size'] > 1048576) {
				uploadErrors.push('File terlalu besar, maksimal 1 MB');
			}
			if(uploadErrors.length > 0) {
				alert(uploadErrors.join("\n"));
			} else {
				data.submit();
			}
		},
		url: url,
		dataType: 'json',
		autoUpload: false,
		// acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
		// maxFileSize: 5000000,
		done: function (e, data) {
			$.each(data.result.files, function (index, file) {
				$('#files').html("<img src='<?php echo @constant('IMAGES_DIR');?>
/temp/"+file.name+"'>");
				$('#USERFILES').val(file.name);
			});
			
		},
		fail: function (e, data) {
			$.each(data.messages, function (index, error) {
				$('<p style="color: red;">Upload file error: ' + error + '<i class="elusive-remove" style="padding-left:10px;"/></p>')
				.appendTo('#files');
			});
		},
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);

			$('.progress-bar').css('width', progress + '%');
			
		}
	});
});  
<?php echo '</script'; ?>
>
<?php }
}
