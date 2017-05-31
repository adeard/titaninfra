<?php
/* Smarty version 3.1.30, created on 2017-05-30 10:52:58
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Admin\Admin\User\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592cec9af36fc4_25710337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f80adc34aef9c788c04a96aba8829101aecb360c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Admin\\Admin\\User\\Edit.tpl',
      1 => 1483085248,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592cec9af36fc4_25710337 (Smarty_Internal_Template $_smarty_tpl) {
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
<!-- END TABLE JS -->
    
<!-- BEGIN FORM JS -->

    <!-- BEGIN VALIDATE -->
    <script type="text/javascript" src="/public/default/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
    <script src="/public/default/assets/admin/pages/scripts/form-validation.js"></script>
    <!-- END VALIDATE -->
    
    <!-- BEGIN SELECT2 -->
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/select2/select2.css"/>
	<script type="text/javascript" src="/public/default/assets/global/plugins/select2/select2.min.js"></script>
    <script src="/public/default/assets/admin/pages/scripts/form-samples.js"></script>
    <!-- END SELECT2 -->
    
    <!-- BEGIN DROPDOWN -->
    <!--
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/bootstrap-select/bootstrap-select.min.css"/>
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="/public/default/assets/admin/pages/scripts/components-dropdowns.js"></script>
    -->
    <!-- END DROPDOWN -->
    
    <!-- BEGIN DATEPICKER -->
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="/public/default/assets/admin/pages/scripts/components-pickers.js"></script>
    <!-- END DATEPICKER -->
    
    <!-- BEGIN ICHECK -->
    <link href="/public/default/assets/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
    <script src="/public/default/assets/global/plugins/icheck/icheck.min.js"></script>
    <script src="/public/default/assets/admin/pages/scripts/form-icheck.js"></script>
    <!-- END ICHECK -->
    
    <!-- BEGIN MODAL -->
    <link href="/public/default/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
	<link href="/public/default/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <script src="/public/default/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
	<script src="/public/default/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/pages/scripts/ui-extended-modals.js"></script>
	<!-- END MODAL -->
    
    <!-- BEGIN EDITOR -->
    <!--
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css"/>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-markdown/lib/markdown.js"></script>
    -->
    <script type="text/javascript" src="/public/default/assets/global/plugins/ckeditor/ckeditor.js"></script>
    <!-- END EDITOR -->
    
    <!-- BEGIN COMPONENTOOLS -->
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
	<script type="text/javascript" src="/public/default/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="/public/default/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/fuelux/js/spinner.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
    <script src="/public/default/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script src="/public/default/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>   
    <script type="text/javascript" src="/public/default/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script src="/public/default/assets/admin/pages/scripts/components-form-tools.js"></script>
    <!-- END COMPONENTOOLS -->
    
    
    <script>
    jQuery(document).ready(function() { 
       FormValidation.init();
       FormiCheck.init();
	   ComponentsFormTools.init();
       FormSamples.init();
	   ComponentsPickers.init();
	   UIExtendedModals.init();
	   //ComponentsDropdowns.init();
    });
    </script>
    
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
                                                <li>
                                        <a data-href="/admin/user" class="ajaxify">User</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Edit</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->

<script src="/public/default/assets/custom/custom.selecbox.js"></script>

<script type="text/javascript">
$(document).ready(function() {
	/** Get kota */
	/**
	var IDKOTA 		=  "";
	var IDPROVINSI 	=  "";
	
	var url = '/service/getKota?IDPROVINSI='+IDPROVINSI;
	$('#IDKOTA').empty();
	
	$.getJSON(url,{},
		function(data){
			for(i=0;i<data.length;i++){
				if(IDKOTA == data[i].IDKOTA){
					$('#IDKOTA').append(new Option(data[i].KOTA, data[i].IDKOTA));
					$('#IDKOTA').val(IDKOTA);
				}else{
					$('#IDKOTA').append(new Option(data[i].KOTA, data[i].IDKOTA));
					
				}
			}        
		}
	);
	*/
	/** End Get kota */
	 
	getRolesEdit();
});

function getRolesEdit(){
	var IDGROUP = $("#IDGROUP").val();
	if(IDGROUP != '')
	{
		IDGROUP = IDGROUP;
	}else{
		IDGROUP = 0;
	}
	
	
			var ORDINAL = 1;
		var IDUSER  = '2108162301001';
		
		$.post( base_url+"admin/user/jsontabs", { 'IDUSER':IDUSER, 'ORDINAL':ORDINAL, IDGROUP:IDGROUP})
		.done(function( data ) {
			var response = jQuery.parseJSON(data);
			if(response.length > 0)
			{
				response.forEach(function(result)
				{
					/** CHECKED VIEW */
					if(result.ROLEVIEW != 0)
					{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', true);
						$("input.GROUP_"+ result.IDMODUL).removeAttr("disabled");
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}else{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', false);
						$('#ROLEVIEW_' + result.IDMODUL).removeAttr('checked');
						$("input.GROUP_"+ result.IDMODUL).attr("disabled", true);
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}
					
					/** CHECKED ADD */
					if(result.ROLEADD != 0)
					{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', false);
						$('#ROLEADD_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED EDIT */
					if(result.ROLEEDIT != 0)
					{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', false);
						$('#ROLEEDIT_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED DELETE */
					if(result.ROLEDEL != 0)
					{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', false);
						$('#ROLEDEL_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED REPORT */
					if(result.ROLERIP != 0)
					{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', false);
						$('#ROLERIP_' + result.IDMODUL).removeAttr('checked');
					}
					
					$.uniform.update(".checkboxes");
				});
			}else{
				$(':checkbox').prop('checked', false);
				$(':checkbox').removeAttr('checked');
				$(':checkbox').removeAttr("disabled");
				$("input[type=checkbox][data-target]").attr("disabled", true);
				$.uniform.update(".checkboxes");
			}
		});
		
}

function getRoles(){
	$("input[type=submit]").attr("disabled", true);
	var IDGROUP = $("#IDGROUP").val();
	if(IDGROUP != '')
	{
		IDGROUP = IDGROUP;
	}else{
		IDGROUP = 0;
	}
	
	
			var ORDINAL = 1;
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
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', true);
						$("input.GROUP_"+ result.IDMODUL).removeAttr("disabled");
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
			
					}else{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', false);
						$('#ROLEVIEW_' + result.IDMODUL).removeAttr('checked');
						$("input.GROUP_"+ result.IDMODUL).attr("disabled", true);
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}
					
					/** CHECKED ADD */
					if(result.ROLEADD != 0)
					{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', false);
						$('#ROLEADD_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED EDIT */
					if(result.ROLEEDIT != 0)
					{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', false);
						$('#ROLEEDIT_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED DELETE */
					if(result.ROLEDEL != 0)
					{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', false);
						$('#ROLEDEL_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED REPORT */
					if(result.ROLERIP != 0)
					{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', false);
						$('#ROLERIP_' + result.IDMODUL).removeAttr('checked');
					}
					
					$.uniform.update(".checkboxes");
				});
				
				$("input[type=submit]").removeAttr("disabled", true);
			}else{
				$(':checkbox').prop('checked', false);
				$(':checkbox').removeAttr('checked');
				$(':checkbox').removeAttr("disabled");
				$("input[type=checkbox][data-target]").attr("disabled", true);
				$.uniform.update(".checkboxes");
			}
		});
		
}

$(function() {
	
	enable_cb_all();
	$(".ROLEVIEW_ALL").click(enable_cb_all);
	
		enable_cb_11001();
	$(".ROLEVIEW_11001").click(enable_cb_11001);
		enable_cb_11002();
	$(".ROLEVIEW_11002").click(enable_cb_11002);
		enable_cb_11003();
	$(".ROLEVIEW_11003").click(enable_cb_11003);
		enable_cb_11004();
	$(".ROLEVIEW_11004").click(enable_cb_11004);
		
});


function enable_cb_all() {
	
	if (this.checked) {
				$("input.GROUP_11001").removeAttr("disabled");
				$("input.GROUP_11002").removeAttr("disabled");
				$("input.GROUP_11003").removeAttr("disabled");
				$("input.GROUP_11004").removeAttr("disabled");
			} else {
				$("input.GROUP_11001").attr("disabled", true);
		$("input.GROUP_11001").prop('checked', false);	
				$("input.GROUP_11002").attr("disabled", true);
		$("input.GROUP_11002").prop('checked', false);	
				$("input.GROUP_11003").attr("disabled", true);
		$("input.GROUP_11003").prop('checked', false);	
				$("input.GROUP_11004").attr("disabled", true);
		$("input.GROUP_11004").prop('checked', false);	
					
	}
	
}

function enable_cb_11001() {
	
	if (this.checked) {
		$("input.GROUP_11001").removeAttr("disabled");
	} else {
		$("input.GROUP_11001").attr("disabled", true);
		$("input.GROUP_11001").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
}
function enable_cb_11002() {
	
	if (this.checked) {
		$("input.GROUP_11002").removeAttr("disabled");
	} else {
		$("input.GROUP_11002").attr("disabled", true);
		$("input.GROUP_11002").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
}
function enable_cb_11003() {
	
	if (this.checked) {
		$("input.GROUP_11003").removeAttr("disabled");
	} else {
		$("input.GROUP_11003").attr("disabled", true);
		$("input.GROUP_11003").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
}
function enable_cb_11004() {
	
	if (this.checked) {
		$("input.GROUP_11004").removeAttr("disabled");
	} else {
		$("input.GROUP_11004").attr("disabled", true);
		$("input.GROUP_11004").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
}

</script>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="/admin/user/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm form-horizontal">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi User
                </div>
                <div class="actions">
                	<a data-href="/admin/user" class="btn btn-default btn-sm ajaxify">
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
                                                                            <img src="/data/uploads/userfiles/1/account/2108162301001.jpg">
                                                                        
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
                                                value="2108162301001.jpg"/>
                                                
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
                                           placeholder="Masukan username" 
                                           
                                           disabled="disabled"
                                           value="administrator"
                                           class="form-control">
                                </div>
                            </div>
                                        
                            <div class="form-group">
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
                                           value="admin"
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
                                           value="admin"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Depan<span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            name="NAMADEPAN" id="NAMADEPAN" 
                                            value="Admin" 
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
                                            value="" 
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
                                                    checked
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
                                                value="20/11/2012"
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
                                            value="Jakarta"
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
                                            value="admin@gmail.com"
                                            
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
                                            value="082983833"
                                            
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
                                            value=""
                                            
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
                                                                                                                                                                                                            <option value="1" selected>
                                            SUPER ADMIN
                                        </option>
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
                            <input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDUSER" id="IDUSER" 
                                   value="2108162301001" />
                            <input type="hidden" name="USERNAME" id="USERNAME" 
                                   value="administrator" />
                            <input type="hidden" name="ISADMIN" id="ISADMIN" 
                                   value="1" />
                                   
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" 
                            	   value="1"
                            	   class="IDPERUSAHAAN">
                            
                            <a data-href="/admin/user" class="btn default ajaxify">
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
                    	                                                                                                                    <li class="active">
                                <a href="#ADMIN" data-toggle="tab">ADMIN</a>
                            </li>
                                            </ul>
                    <div class="tab-content">
                    	<!-- MODULES -->
                                                <div class="tab-pane active" id="ADMIN">
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
                                                                        <tr>
                                        <td>
                                           GROUP
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11001" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="1" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11001" 
                                                    id="ROLEVIEW_11001" 
                                                    class="checkboxes ROLEVIEW_11001" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11001" 
                                                    id="ROLEADD_11001" 
                                                    data-target="11001"
                                                    class="checkboxes GROUP_11001" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11001" 
                                                    id="ROLEEDIT_11001" 
                                                    data-target="11001"
                                                    class="checkboxes GROUP_11001" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11001" 
                                                    id="ROLEDEL_11001"
                                                    data-target="11001" 
                                                    class="checkboxes GROUP_11001" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11001" 
                                                    id="ROLERIP_11001" 
                                                    data-target="11001"
                                                    class="checkboxes GROUP_11001" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           USER
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11002" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="1" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11002" 
                                                    id="ROLEVIEW_11002" 
                                                    class="checkboxes ROLEVIEW_11002" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11002" 
                                                    id="ROLEADD_11002" 
                                                    data-target="11002"
                                                    class="checkboxes GROUP_11002" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11002" 
                                                    id="ROLEEDIT_11002" 
                                                    data-target="11002"
                                                    class="checkboxes GROUP_11002" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11002" 
                                                    id="ROLEDEL_11002"
                                                    data-target="11002" 
                                                    class="checkboxes GROUP_11002" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11002" 
                                                    id="ROLERIP_11002" 
                                                    data-target="11002"
                                                    class="checkboxes GROUP_11002" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           PROFILE
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11003" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="1" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11003" 
                                                    id="ROLEVIEW_11003" 
                                                    class="checkboxes ROLEVIEW_11003" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11003" 
                                                    id="ROLEADD_11003" 
                                                    data-target="11003"
                                                    class="checkboxes GROUP_11003" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11003" 
                                                    id="ROLEEDIT_11003" 
                                                    data-target="11003"
                                                    class="checkboxes GROUP_11003" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11003" 
                                                    id="ROLEDEL_11003"
                                                    data-target="11003" 
                                                    class="checkboxes GROUP_11003" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11003" 
                                                    id="ROLERIP_11003" 
                                                    data-target="11003"
                                                    class="checkboxes GROUP_11003" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           PERUSAHAAN
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11004" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="1" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11004" 
                                                    id="ROLEVIEW_11004" 
                                                    class="checkboxes ROLEVIEW_11004" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11004" 
                                                    id="ROLEADD_11004" 
                                                    data-target="11004"
                                                    class="checkboxes GROUP_11004" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11004" 
                                                    id="ROLEEDIT_11004" 
                                                    data-target="11004"
                                                    class="checkboxes GROUP_11004" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11004" 
                                                    id="ROLEDEL_11004"
                                                    data-target="11004" 
                                                    class="checkboxes GROUP_11004" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11004" 
                                                    id="ROLERIP_11004" 
                                                    data-target="11004"
                                                    class="checkboxes GROUP_11004" />
                                        </td>
                                        
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                        
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

<script type='text/javascript' src='/public/default/assets/global/plugins/blueimp/jquery.ui.widget.js'></script> 
<script type='text/javascript' src='/public/default/assets/global/plugins/blueimp/jquery.iframe-transport.js'></script> 
<script type='text/javascript' src='/public/default/assets/global/plugins/blueimp/jquery.fileupload.js'></script>


<script type="text/javascript">
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
				$('#files').html("<img src='/data/uploads/temp/"+file.name+"'>");
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
</script>
<?php }
}
