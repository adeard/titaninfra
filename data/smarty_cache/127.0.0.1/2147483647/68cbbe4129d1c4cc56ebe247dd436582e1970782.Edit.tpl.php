<?php
/* Smarty version 3.1.30, created on 2017-05-30 10:52:13
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Admin\Admin\Group\Edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592cec6d1aaf22_09306147',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69745a8477460911bd39f2e459113019b9e83a35' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Group\\Edit.tpl',
      1 => 1483085522,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592cec6d1aaf22_09306147 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <a data-href="/admin/group" class="ajaxify">Group</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Edit</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->


<script language="javascript">
	$(function() {
		
			enable_cb_all();
			$(".ROLEVIEW_ALL").click(enable_cb_all);
			
							
									
					$("input.GROUP_11001").removeAttr("disabled");
					$(".ROLEVIEW_11001").click(enable_cb_11001);
								$.uniform.update(".checkboxes");
							
									
					$("input.GROUP_11002").removeAttr("disabled");
					$(".ROLEVIEW_11002").click(enable_cb_11002);
								$.uniform.update(".checkboxes");
							
									
					$("input.GROUP_11003").removeAttr("disabled");
					$(".ROLEVIEW_11003").click(enable_cb_11003);
								$.uniform.update(".checkboxes");
							
									
					$("input.GROUP_11004").removeAttr("disabled");
					$(".ROLEVIEW_11004").click(enable_cb_11004);
								$.uniform.update(".checkboxes");
						
		
	});
	
	
	
	function enable_cb_all() {
		
		if (this.checked) {
							$("input.GROUP_11001").removeAttr("disabled");
							$("input.GROUP_11002").removeAttr("disabled");
							$("input.GROUP_11003").removeAttr("disabled");
							$("input.GROUP_11004").removeAttr("disabled");
					} else {
							$("input.GROUP_11001").attr("disabled", true);
							$("input.GROUP_11002").attr("disabled", true);
							$("input.GROUP_11003").attr("disabled", true);
							$("input.GROUP_11004").attr("disabled", true);
						
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
<form 	action="/admin/group/save" 
        method="post" 
        class="EditForm form-horizontal">
                        
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Group User
                </div>
                <div class="actions">
                	<a data-href="/admin/group" class="btn btn-default btn-sm ajaxify">
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
                                     
                                   data-rule-remote="/admin/group/check?CURRENTNAMAGROUP=Super Admin"
                                   data-msg-remote="Nama group sudah terpakai"
                                   
                                   value="Super Admin"
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
                                      class="form-control">Administrator</textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDGROUP" id="IDGROUP" 
                            	   value="1" />
                            
                            <input type="hidden" 
                            	   name="CURRENTNAMAGROUP" 
                            	   id="CURRENTNAMAGROUP" 
                            	   value="Super Admin" />
                            
                            <a data-href="/admin/group" class="btn default ajaxify">
                            	<i class="fa fa-arrow-left"></i> Kembali 
                            </a>
                            
                            <input type="submit" class="btn green" value="Edit" />
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
                                    class="table table-striped table-bordered"
                                    id="example">
                                    
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
                                                    class="checkboxes ROLEVIEW_11001" 
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11001" 
                                                    id="ROLEADD_11001"
                                                    class="checkboxes GROUP_11001"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11001" 
                                                    id="ROLEEDIT_11001"
                                                    class="checkboxes GROUP_11001"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11001" 
                                                    id="ROLEDEL_11001"
                                                    class="checkboxes GROUP_11001"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11001" 
                                                    id="ROLERIP_11001"
                                                    class="checkboxes GROUP_11001"
                                                    checked />
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
                                                    class="checkboxes ROLEVIEW_11002" 
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11002" 
                                                    id="ROLEADD_11002"
                                                    class="checkboxes GROUP_11002"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11002" 
                                                    id="ROLEEDIT_11002"
                                                    class="checkboxes GROUP_11002"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11002" 
                                                    id="ROLEDEL_11002"
                                                    class="checkboxes GROUP_11002"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11002" 
                                                    id="ROLERIP_11002"
                                                    class="checkboxes GROUP_11002"
                                                    checked />
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
                                                    class="checkboxes ROLEVIEW_11003" 
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11003" 
                                                    id="ROLEADD_11003"
                                                    class="checkboxes GROUP_11003"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11003" 
                                                    id="ROLEEDIT_11003"
                                                    class="checkboxes GROUP_11003"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11003" 
                                                    id="ROLEDEL_11003"
                                                    class="checkboxes GROUP_11003"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11003" 
                                                    id="ROLERIP_11003"
                                                    class="checkboxes GROUP_11003"
                                                    checked />
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
                                                    class="checkboxes ROLEVIEW_11004" 
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11004" 
                                                    id="ROLEADD_11004"
                                                    class="checkboxes GROUP_11004"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11004" 
                                                    id="ROLEEDIT_11004"
                                                    class="checkboxes GROUP_11004"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11004" 
                                                    id="ROLEDEL_11004"
                                                    class="checkboxes GROUP_11004"
                                                    checked />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11004" 
                                                    id="ROLERIP_11004"
                                                    class="checkboxes GROUP_11004"
                                                    checked />
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
</form><?php }
}
