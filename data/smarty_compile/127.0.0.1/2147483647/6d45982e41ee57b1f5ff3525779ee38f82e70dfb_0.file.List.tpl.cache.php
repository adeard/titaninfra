<?php
/* Smarty version 3.1.30, created on 2017-05-31 16:07:42
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Admin\Admin\Profile\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e87de0ea704_03264300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d45982e41ee57b1f5ff3525779ee38f82e70dfb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Profile\\List.tpl',
      1 => 1482910080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e87de0ea704_03264300 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\SYSTEM\\Vendor\\Smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '8037592e87de006298_36007910';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/profile/save" 
        method="post" enctype="multipart/form-data"
        class="ProfileForm form-horizontal">
        
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Profile
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
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
                                    <?php if ($_smarty_tpl->tpl_vars['desc']->value['USERFILES'] == '') {?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo @constant('IMAGES_DIR');?>
/noimage.png" alt=""/>
                                    <?php } else { ?>
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo @constant('IMAGES_DIR');?>
/userfiles/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value->IDPERUSAHAAN;?>
/account/<?php echo $_smarty_tpl->tpl_vars['desc']->value['USERFILES'];?>
">
                                    <?php }?>
                                    
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
                                <div class="col-md-6">
                                    <input type="text"
                                           placeholder="Masukan username" 
                                           
                                           disabled="disabled"
                                           value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['USERNAME'];?>
"
                                           class="form-control">
                                </div>
                            </div>
                                        
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Password <span class="required">* </span>
                                </label>
                                <div class="col-md-6">
                                    <input type="password"
                                           name="PASSWORD1"
                                           id="PASSWORD1"
                                           
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi password"
                                            
                                           data-rule-minlength="5"
                                           data-msg-minlength="Password tidak kurang dari 5 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Password tidak lebih dari 20 karakter" 
                                           value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Konfirm Password <span class="required">* </span>
                                </label>
                                <div class="col-md-6">
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
                                           value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Depan<span class="required">* </span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            name="NAMADEPAN" id="NAMADEPAN" 
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['NAMADEPAN'];?>
" 
                                            placeholder="Masukan nama" 
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi nama depan"
                                            
                                            data-rule-minlength="3"
                                            data-msg-minlength="Nama tidak kurang dari 3 karakter"
                                            
                                            data-rule-maxlength="32"
                                            data-msg-maxlength="Nama tidak lebih dari 32 karakter" 
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Belakang <span class="required">&nbsp; </span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            name="NAMABELAKANG" id="NAMABELAKANG" 
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['NAMABELAKANG'];?>
" 
                                            placeholder="Masukan nama belakang"
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Jenis Kelamin <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="icheck-inline">
                                        <?php if ($_smarty_tpl->tpl_vars['desc']->value['JNSKELAMIN'] == 'F') {?>
                                            <?php $_smarty_tpl->_assignInScope('male_checked', '');
?>
                                            <?php $_smarty_tpl->_assignInScope('female_checked', 'checked');
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('male_checked', 'checked');
?>
                                            <?php $_smarty_tpl->_assignInScope('female_checked', '');
?>
                                        <?php }?>
                                        <label>
                                            <input 	type="radio" 
                                                    name="JNSKELAMIN" 
                                                    id="JNSKELAMIN" 
                                                    class="icheck"
                                                    <?php echo $_smarty_tpl->tpl_vars['male_checked']->value;?>

                                                    value="M" /> Laki-laki
                                        </label>
                                        <label>
                                            <input 	type="radio" 
                                                    name="JNSKELAMIN"
                                                    id="JNSKELAMIN"
                                                    class="icheck"
                                                    <?php echo $_smarty_tpl->tpl_vars['female_checked']->value;?>

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
                                <div class="col-md-6">
                                    <div class="input-group input-medium date date-picker">
                                        <input 	type="text" 
                                                name="TGLLAHIR"
                                                id="TGLLAHIR"
                                                value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['desc']->value['TGLLAHIR'],"%d/%m/%Y");?>
"
                                                placeholder="Masukan tanggal lahir"
                                                
                                                data-rule-required="true"
                                            	data-msg-required="Silahkan isi tanggal"
                                            
                                                class="form-control" readonly>
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
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            placeholder="Masukan tempat lahir"
                                            name="TMPLAHIR" 
                                            id="TMPLAHIR"
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TMPLAHIR'];?>
"
                                            class="form-control">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Email <span class="required">* </span>
                                </label>
                                <div class="col-md-6">
                                    <input  type="text" 
                                            placeholder="Masukan address email" 
                                            name="EMAIL" 
                                            id="EMAIL"
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['EMAIL'];?>
"
                                            
                                            data-rule-required="true"
                                    		data-msg-required="Silahkan isi address email"
                                    
                                            data-rule-email="true"
                                            data-msg-email="address email tidak valid" 
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    HP <span class="required">* </span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" placeholder="Masukan no HP"
                                            name="HP" 
                                            id="HP"
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['HP'];?>
"
                                            
                                            data-rule-required="true"
                                    		data-msg-required="Silahkan isi nomer handphone"
                                    
                                            data-rule-number="true"
                                            data-msg-number="Nomer handphone tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Telp <span class="required">&nbsp; </span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="TELP" placeholder="Masukan no telp"
                                            name="TELP" 
                                            id="TELP"
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TELP'];?>
"
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer telp tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control">
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
                            <input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDUSER" id="IDUSER" 
                                   value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['IDUSER'];?>
" />
                            <input type="submit" class="btn green" value="Simpan" />
                            <input type="reset" class="btn default" value="Cancel" />
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
