<?php
/* Smarty version 3.1.30, created on 2017-05-10 23:26:46
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\User\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59133f46b76355_05085834',
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
  'cache_lifetime' => 0,
),true)) {
function content_59133f46b76355_05085834 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="javascript:void(0)">Add</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->

<script src="/public/default/assets/custom/custom.selecbox.js"></script>

<script type="text/javascript">
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
			var ORDINAL = 2;
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
			var ORDINAL = 3;
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
			var ORDINAL = 4;
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
			var ORDINAL = 6;
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
		enable_cb_11101();
	$(".ROLEVIEW_11101").click(enable_cb_11101);
		enable_cb_11102();
	$(".ROLEVIEW_11102").click(enable_cb_11102);
		enable_cb_11103();
	$(".ROLEVIEW_11103").click(enable_cb_11103);
		enable_cb_11104();
	$(".ROLEVIEW_11104").click(enable_cb_11104);
		enable_cb_11105();
	$(".ROLEVIEW_11105").click(enable_cb_11105);
		enable_cb_11106();
	$(".ROLEVIEW_11106").click(enable_cb_11106);
		enable_cb_11201();
	$(".ROLEVIEW_11201").click(enable_cb_11201);
		enable_cb_11202();
	$(".ROLEVIEW_11202").click(enable_cb_11202);
		enable_cb_11203();
	$(".ROLEVIEW_11203").click(enable_cb_11203);
		enable_cb_11204();
	$(".ROLEVIEW_11204").click(enable_cb_11204);
		enable_cb_11205();
	$(".ROLEVIEW_11205").click(enable_cb_11205);
		enable_cb_11206();
	$(".ROLEVIEW_11206").click(enable_cb_11206);
		enable_cb_11301();
	$(".ROLEVIEW_11301").click(enable_cb_11301);
		enable_cb_11302();
	$(".ROLEVIEW_11302").click(enable_cb_11302);
		enable_cb_11303();
	$(".ROLEVIEW_11303").click(enable_cb_11303);
		enable_cb_11304();
	$(".ROLEVIEW_11304").click(enable_cb_11304);
		enable_cb_11501();
	$(".ROLEVIEW_11501").click(enable_cb_11501);
		enable_cb_11502();
	$(".ROLEVIEW_11502").click(enable_cb_11502);
		
});


function enable_cb_all() {
	
	if (this.checked) {
				$("input.GROUP_11001").removeAttr("disabled");
				$("input.GROUP_11002").removeAttr("disabled");
				$("input.GROUP_11003").removeAttr("disabled");
				$("input.GROUP_11004").removeAttr("disabled");
				$("input.GROUP_11101").removeAttr("disabled");
				$("input.GROUP_11102").removeAttr("disabled");
				$("input.GROUP_11103").removeAttr("disabled");
				$("input.GROUP_11104").removeAttr("disabled");
				$("input.GROUP_11105").removeAttr("disabled");
				$("input.GROUP_11106").removeAttr("disabled");
				$("input.GROUP_11201").removeAttr("disabled");
				$("input.GROUP_11202").removeAttr("disabled");
				$("input.GROUP_11203").removeAttr("disabled");
				$("input.GROUP_11204").removeAttr("disabled");
				$("input.GROUP_11205").removeAttr("disabled");
				$("input.GROUP_11206").removeAttr("disabled");
				$("input.GROUP_11301").removeAttr("disabled");
				$("input.GROUP_11302").removeAttr("disabled");
				$("input.GROUP_11303").removeAttr("disabled");
				$("input.GROUP_11304").removeAttr("disabled");
				$("input.GROUP_11501").removeAttr("disabled");
				$("input.GROUP_11502").removeAttr("disabled");
			} else {
				$("input.GROUP_11001").attr("disabled", true);
		$("input.GROUP_11001").prop('checked', false);	
				$("input.GROUP_11002").attr("disabled", true);
		$("input.GROUP_11002").prop('checked', false);	
				$("input.GROUP_11003").attr("disabled", true);
		$("input.GROUP_11003").prop('checked', false);	
				$("input.GROUP_11004").attr("disabled", true);
		$("input.GROUP_11004").prop('checked', false);	
				$("input.GROUP_11101").attr("disabled", true);
		$("input.GROUP_11101").prop('checked', false);	
				$("input.GROUP_11102").attr("disabled", true);
		$("input.GROUP_11102").prop('checked', false);	
				$("input.GROUP_11103").attr("disabled", true);
		$("input.GROUP_11103").prop('checked', false);	
				$("input.GROUP_11104").attr("disabled", true);
		$("input.GROUP_11104").prop('checked', false);	
				$("input.GROUP_11105").attr("disabled", true);
		$("input.GROUP_11105").prop('checked', false);	
				$("input.GROUP_11106").attr("disabled", true);
		$("input.GROUP_11106").prop('checked', false);	
				$("input.GROUP_11201").attr("disabled", true);
		$("input.GROUP_11201").prop('checked', false);	
				$("input.GROUP_11202").attr("disabled", true);
		$("input.GROUP_11202").prop('checked', false);	
				$("input.GROUP_11203").attr("disabled", true);
		$("input.GROUP_11203").prop('checked', false);	
				$("input.GROUP_11204").attr("disabled", true);
		$("input.GROUP_11204").prop('checked', false);	
				$("input.GROUP_11205").attr("disabled", true);
		$("input.GROUP_11205").prop('checked', false);	
				$("input.GROUP_11206").attr("disabled", true);
		$("input.GROUP_11206").prop('checked', false);	
				$("input.GROUP_11301").attr("disabled", true);
		$("input.GROUP_11301").prop('checked', false);	
				$("input.GROUP_11302").attr("disabled", true);
		$("input.GROUP_11302").prop('checked', false);	
				$("input.GROUP_11303").attr("disabled", true);
		$("input.GROUP_11303").prop('checked', false);	
				$("input.GROUP_11304").attr("disabled", true);
		$("input.GROUP_11304").prop('checked', false);	
				$("input.GROUP_11501").attr("disabled", true);
		$("input.GROUP_11501").prop('checked', false);	
				$("input.GROUP_11502").attr("disabled", true);
		$("input.GROUP_11502").prop('checked', false);	
					
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
function enable_cb_11101() {
	
	if (this.checked) {
		$("input.GROUP_11101").removeAttr("disabled");
	} else {
		$("input.GROUP_11101").attr("disabled", true);
		$("input.GROUP_11101").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11102() {
	
	if (this.checked) {
		$("input.GROUP_11102").removeAttr("disabled");
	} else {
		$("input.GROUP_11102").attr("disabled", true);
		$("input.GROUP_11102").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11103() {
	
	if (this.checked) {
		$("input.GROUP_11103").removeAttr("disabled");
	} else {
		$("input.GROUP_11103").attr("disabled", true);
		$("input.GROUP_11103").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11104() {
	
	if (this.checked) {
		$("input.GROUP_11104").removeAttr("disabled");
	} else {
		$("input.GROUP_11104").attr("disabled", true);
		$("input.GROUP_11104").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11105() {
	
	if (this.checked) {
		$("input.GROUP_11105").removeAttr("disabled");
	} else {
		$("input.GROUP_11105").attr("disabled", true);
		$("input.GROUP_11105").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11106() {
	
	if (this.checked) {
		$("input.GROUP_11106").removeAttr("disabled");
	} else {
		$("input.GROUP_11106").attr("disabled", true);
		$("input.GROUP_11106").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11201() {
	
	if (this.checked) {
		$("input.GROUP_11201").removeAttr("disabled");
	} else {
		$("input.GROUP_11201").attr("disabled", true);
		$("input.GROUP_11201").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11202() {
	
	if (this.checked) {
		$("input.GROUP_11202").removeAttr("disabled");
	} else {
		$("input.GROUP_11202").attr("disabled", true);
		$("input.GROUP_11202").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11203() {
	
	if (this.checked) {
		$("input.GROUP_11203").removeAttr("disabled");
	} else {
		$("input.GROUP_11203").attr("disabled", true);
		$("input.GROUP_11203").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11204() {
	
	if (this.checked) {
		$("input.GROUP_11204").removeAttr("disabled");
	} else {
		$("input.GROUP_11204").attr("disabled", true);
		$("input.GROUP_11204").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11205() {
	
	if (this.checked) {
		$("input.GROUP_11205").removeAttr("disabled");
	} else {
		$("input.GROUP_11205").attr("disabled", true);
		$("input.GROUP_11205").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11206() {
	
	if (this.checked) {
		$("input.GROUP_11206").removeAttr("disabled");
	} else {
		$("input.GROUP_11206").attr("disabled", true);
		$("input.GROUP_11206").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11301() {
	
	if (this.checked) {
		$("input.GROUP_11301").removeAttr("disabled");
	} else {
		$("input.GROUP_11301").attr("disabled", true);
		$("input.GROUP_11301").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11302() {
	
	if (this.checked) {
		$("input.GROUP_11302").removeAttr("disabled");
	} else {
		$("input.GROUP_11302").attr("disabled", true);
		$("input.GROUP_11302").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11303() {
	
	if (this.checked) {
		$("input.GROUP_11303").removeAttr("disabled");
	} else {
		$("input.GROUP_11303").attr("disabled", true);
		$("input.GROUP_11303").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11304() {
	
	if (this.checked) {
		$("input.GROUP_11304").removeAttr("disabled");
	} else {
		$("input.GROUP_11304").attr("disabled", true);
		$("input.GROUP_11304").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11501() {
	
	if (this.checked) {
		$("input.GROUP_11501").removeAttr("disabled");
	} else {
		$("input.GROUP_11501").attr("disabled", true);
		$("input.GROUP_11501").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}
function enable_cb_11502() {
	
	if (this.checked) {
		$("input.GROUP_11502").removeAttr("disabled");
	} else {
		$("input.GROUP_11502").attr("disabled", true);
		$("input.GROUP_11502").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
	
}

</script>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="/admin/user/save" 
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
                                    <img src="/data/uploads/noimage.png" alt=""/>
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
                                                value=""/>
                                                
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
                                            
                                           data-rule-remote="/admin/user/check" 
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
                                                                                <option value="1">
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
                            <input type="hidden" name="act" id="act" value="add" />
                            <input type="hidden" name="ISADMIN" id="ISADMIN" 
                                   value="1" />
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" class="IDPERUSAHAAN">
                            
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
                                                                                                                                            <li class="">
                                <a href="#PENERIMAAN_DATA" data-toggle="tab">MENGUNDUH DATA</a>
                            </li>
                                                                                                                                            <li class="">
                                <a href="#PENGIRIMAN_DATA" data-toggle="tab">PENGIRIMAN DATA</a>
                            </li>
                                                                                                                                            <li class="">
                                <a href="#CEK_DATA" data-toggle="tab">CEK DATA</a>
                            </li>
                                                                                                                                            <li class="">
                                <a href="#UPLOAD_DATA" data-toggle="tab">UPLOAD DATA</a>
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
                                                <div class="tab-pane " id="PENERIMAAN_DATA">
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
                                           DATA SPPB PIB
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11101" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="2" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11101" 
                                                    id="ROLEVIEW_11101" 
                                                    class="checkboxes ROLEVIEW_11101" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11101" 
                                                    id="ROLEADD_11101"
                                                    data-target="11101"
                                                    class="checkboxes GROUP_11101" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11101" 
                                                    id="ROLEEDIT_11101"
                                                    data-target="11101"
                                                    class="checkboxes GROUP_11101" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11101" 
                                                    id="ROLEDEL_11101"
                                                    data-target="11101" 
                                                    class="checkboxes GROUP_11101" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11101" 
                                                    id="ROLERIP_11101"
                                                    data-target="11101"
                                                    class="checkboxes GROUP_11101" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           DATA SPPB BC23
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11102" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="2" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11102" 
                                                    id="ROLEVIEW_11102" 
                                                    class="checkboxes ROLEVIEW_11102" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11102" 
                                                    id="ROLEADD_11102"
                                                    data-target="11102"
                                                    class="checkboxes GROUP_11102" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11102" 
                                                    id="ROLEEDIT_11102"
                                                    data-target="11102"
                                                    class="checkboxes GROUP_11102" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11102" 
                                                    id="ROLEDEL_11102"
                                                    data-target="11102" 
                                                    class="checkboxes GROUP_11102" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11102" 
                                                    id="ROLERIP_11102"
                                                    data-target="11102"
                                                    class="checkboxes GROUP_11102" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           DATA SPJM
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11103" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="2" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11103" 
                                                    id="ROLEVIEW_11103" 
                                                    class="checkboxes ROLEVIEW_11103" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11103" 
                                                    id="ROLEADD_11103"
                                                    data-target="11103"
                                                    class="checkboxes GROUP_11103" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11103" 
                                                    id="ROLEEDIT_11103"
                                                    data-target="11103"
                                                    class="checkboxes GROUP_11103" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11103" 
                                                    id="ROLEDEL_11103"
                                                    data-target="11103" 
                                                    class="checkboxes GROUP_11103" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11103" 
                                                    id="ROLERIP_11103"
                                                    data-target="11103"
                                                    class="checkboxes GROUP_11103" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           RESPON PLP
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11104" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="2" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11104" 
                                                    id="ROLEVIEW_11104" 
                                                    class="checkboxes ROLEVIEW_11104" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11104" 
                                                    id="ROLEADD_11104"
                                                    data-target="11104"
                                                    class="checkboxes GROUP_11104" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11104" 
                                                    id="ROLEEDIT_11104"
                                                    data-target="11104"
                                                    class="checkboxes GROUP_11104" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11104" 
                                                    id="ROLEDEL_11104"
                                                    data-target="11104" 
                                                    class="checkboxes GROUP_11104" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11104" 
                                                    id="ROLERIP_11104"
                                                    data-target="11104"
                                                    class="checkboxes GROUP_11104" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           DATA PKBE
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11105" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="2" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11105" 
                                                    id="ROLEVIEW_11105" 
                                                    class="checkboxes ROLEVIEW_11105" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11105" 
                                                    id="ROLEADD_11105"
                                                    data-target="11105"
                                                    class="checkboxes GROUP_11105" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11105" 
                                                    id="ROLEEDIT_11105"
                                                    data-target="11105"
                                                    class="checkboxes GROUP_11105" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11105" 
                                                    id="ROLEDEL_11105"
                                                    data-target="11105" 
                                                    class="checkboxes GROUP_11105" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11105" 
                                                    id="ROLERIP_11105"
                                                    data-target="11105"
                                                    class="checkboxes GROUP_11105" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           DATA NPE (NOTA PELAYANAN EKSPOR)
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11106" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="2" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11106" 
                                                    id="ROLEVIEW_11106" 
                                                    class="checkboxes ROLEVIEW_11106" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11106" 
                                                    id="ROLEADD_11106"
                                                    data-target="11106"
                                                    class="checkboxes GROUP_11106" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11106" 
                                                    id="ROLEEDIT_11106"
                                                    data-target="11106"
                                                    class="checkboxes GROUP_11106" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11106" 
                                                    id="ROLEDEL_11106"
                                                    data-target="11106" 
                                                    class="checkboxes GROUP_11106" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11106" 
                                                    id="ROLERIP_11106"
                                                    data-target="11106"
                                                    class="checkboxes GROUP_11106" />
                                        </td>
                                        
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                                                <div class="tab-pane " id="PENGIRIMAN_DATA">
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
                                           TRANSAKSI CONTAINER
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11201" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="3" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11201" 
                                                    id="ROLEVIEW_11201" 
                                                    class="checkboxes ROLEVIEW_11201" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11201" 
                                                    id="ROLEADD_11201"
                                                    data-target="11201"
                                                    class="checkboxes GROUP_11201" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11201" 
                                                    id="ROLEEDIT_11201"
                                                    data-target="11201"
                                                    class="checkboxes GROUP_11201" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11201" 
                                                    id="ROLEDEL_11201"
                                                    data-target="11201" 
                                                    class="checkboxes GROUP_11201" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11201" 
                                                    id="ROLERIP_11201"
                                                    data-target="11201"
                                                    class="checkboxes GROUP_11201" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           TRANSAKSI KEMASAN
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11202" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="3" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11202" 
                                                    id="ROLEVIEW_11202" 
                                                    class="checkboxes ROLEVIEW_11202" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11202" 
                                                    id="ROLEADD_11202"
                                                    data-target="11202"
                                                    class="checkboxes GROUP_11202" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11202" 
                                                    id="ROLEEDIT_11202"
                                                    data-target="11202"
                                                    class="checkboxes GROUP_11202" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11202" 
                                                    id="ROLEDEL_11202"
                                                    data-target="11202" 
                                                    class="checkboxes GROUP_11202" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11202" 
                                                    id="ROLERIP_11202"
                                                    data-target="11202"
                                                    class="checkboxes GROUP_11202" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           TRANSAKSI TANGKI PENIMBUNAN
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11203" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="3" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11203" 
                                                    id="ROLEVIEW_11203" 
                                                    class="checkboxes ROLEVIEW_11203" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11203" 
                                                    id="ROLEADD_11203"
                                                    data-target="11203"
                                                    class="checkboxes GROUP_11203" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11203" 
                                                    id="ROLEEDIT_11203"
                                                    data-target="11203"
                                                    class="checkboxes GROUP_11203" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11203" 
                                                    id="ROLEDEL_11203"
                                                    data-target="11203" 
                                                    class="checkboxes GROUP_11203" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11203" 
                                                    id="ROLERIP_11203"
                                                    data-target="11203"
                                                    class="checkboxes GROUP_11203" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           TRANSAKSI CAR TERMINAL
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11204" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="3" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11204" 
                                                    id="ROLEVIEW_11204" 
                                                    class="checkboxes ROLEVIEW_11204" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11204" 
                                                    id="ROLEADD_11204"
                                                    data-target="11204"
                                                    class="checkboxes GROUP_11204" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11204" 
                                                    id="ROLEEDIT_11204"
                                                    data-target="11204"
                                                    class="checkboxes GROUP_11204" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11204" 
                                                    id="ROLEDEL_11204"
                                                    data-target="11204" 
                                                    class="checkboxes GROUP_11204" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11204" 
                                                    id="ROLERIP_11204"
                                                    data-target="11204"
                                                    class="checkboxes GROUP_11204" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           PERMOHONAN PLP
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11205" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="3" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11205" 
                                                    id="ROLEVIEW_11205" 
                                                    class="checkboxes ROLEVIEW_11205" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11205" 
                                                    id="ROLEADD_11205"
                                                    data-target="11205"
                                                    class="checkboxes GROUP_11205" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11205" 
                                                    id="ROLEEDIT_11205"
                                                    data-target="11205"
                                                    class="checkboxes GROUP_11205" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11205" 
                                                    id="ROLEDEL_11205"
                                                    data-target="11205" 
                                                    class="checkboxes GROUP_11205" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11205" 
                                                    id="ROLERIP_11205"
                                                    data-target="11205"
                                                    class="checkboxes GROUP_11205" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           PEMBATALAN PLP
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11206" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="3" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11206" 
                                                    id="ROLEVIEW_11206" 
                                                    class="checkboxes ROLEVIEW_11206" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11206" 
                                                    id="ROLEADD_11206"
                                                    data-target="11206"
                                                    class="checkboxes GROUP_11206" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11206" 
                                                    id="ROLEEDIT_11206"
                                                    data-target="11206"
                                                    class="checkboxes GROUP_11206" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11206" 
                                                    id="ROLEDEL_11206"
                                                    data-target="11206" 
                                                    class="checkboxes GROUP_11206" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11206" 
                                                    id="ROLERIP_11206"
                                                    data-target="11206"
                                                    class="checkboxes GROUP_11206" />
                                        </td>
                                        
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                                                <div class="tab-pane " id="CEK_DATA">
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
                                           BERHASIL TERKIRIM
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11301" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="4" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11301" 
                                                    id="ROLEVIEW_11301" 
                                                    class="checkboxes ROLEVIEW_11301" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11301" 
                                                    id="ROLEADD_11301"
                                                    data-target="11301"
                                                    class="checkboxes GROUP_11301" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11301" 
                                                    id="ROLEEDIT_11301"
                                                    data-target="11301"
                                                    class="checkboxes GROUP_11301" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11301" 
                                                    id="ROLEDEL_11301"
                                                    data-target="11301" 
                                                    class="checkboxes GROUP_11301" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11301" 
                                                    id="ROLERIP_11301"
                                                    data-target="11301"
                                                    class="checkboxes GROUP_11301" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           GAGAL TERKIRIM
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11302" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="4" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11302" 
                                                    id="ROLEVIEW_11302" 
                                                    class="checkboxes ROLEVIEW_11302" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11302" 
                                                    id="ROLEADD_11302"
                                                    data-target="11302"
                                                    class="checkboxes GROUP_11302" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11302" 
                                                    id="ROLEEDIT_11302"
                                                    data-target="11302"
                                                    class="checkboxes GROUP_11302" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11302" 
                                                    id="ROLEDEL_11302"
                                                    data-target="11302" 
                                                    class="checkboxes GROUP_11302" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11302" 
                                                    id="ROLERIP_11302"
                                                    data-target="11302"
                                                    class="checkboxes GROUP_11302" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           DATA REJECT
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11303" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="4" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11303" 
                                                    id="ROLEVIEW_11303" 
                                                    class="checkboxes ROLEVIEW_11303" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11303" 
                                                    id="ROLEADD_11303"
                                                    data-target="11303"
                                                    class="checkboxes GROUP_11303" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11303" 
                                                    id="ROLEEDIT_11303"
                                                    data-target="11303"
                                                    class="checkboxes GROUP_11303" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11303" 
                                                    id="ROLEDEL_11303"
                                                    data-target="11303" 
                                                    class="checkboxes GROUP_11303" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11303" 
                                                    id="ROLERIP_11303"
                                                    data-target="11303"
                                                    class="checkboxes GROUP_11303" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           DATA SPPB
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11304" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="4" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11304" 
                                                    id="ROLEVIEW_11304" 
                                                    class="checkboxes ROLEVIEW_11304" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11304" 
                                                    id="ROLEADD_11304"
                                                    data-target="11304"
                                                    class="checkboxes GROUP_11304" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11304" 
                                                    id="ROLEEDIT_11304"
                                                    data-target="11304"
                                                    class="checkboxes GROUP_11304" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11304" 
                                                    id="ROLEDEL_11304"
                                                    data-target="11304" 
                                                    class="checkboxes GROUP_11304" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11304" 
                                                    id="ROLERIP_11304"
                                                    data-target="11304"
                                                    class="checkboxes GROUP_11304" />
                                        </td>
                                        
                                    </tr>
                                    
                                
                                </tbody>
                            </table>
                        </div>
                                                <div class="tab-pane " id="UPLOAD_DATA">
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
                                           IMPORT DATA SPPB PIB
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11501" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="6" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11501" 
                                                    id="ROLEVIEW_11501" 
                                                    class="checkboxes ROLEVIEW_11501" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11501" 
                                                    id="ROLEADD_11501"
                                                    data-target="11501"
                                                    class="checkboxes GROUP_11501" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11501" 
                                                    id="ROLEEDIT_11501"
                                                    data-target="11501"
                                                    class="checkboxes GROUP_11501" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11501" 
                                                    id="ROLEDEL_11501"
                                                    data-target="11501" 
                                                    class="checkboxes GROUP_11501" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11501" 
                                                    id="ROLERIP_11501"
                                                    data-target="11501"
                                                    class="checkboxes GROUP_11501" />
                                        </td>
                                        
                                    </tr>
                                                                        <tr>
                                        <td>
                                           POS DOKUMEN
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="11502" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="6" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_11502" 
                                                    id="ROLEVIEW_11502" 
                                                    class="checkboxes ROLEVIEW_11502" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_11502" 
                                                    id="ROLEADD_11502"
                                                    data-target="11502"
                                                    class="checkboxes GROUP_11502" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_11502" 
                                                    id="ROLEEDIT_11502"
                                                    data-target="11502"
                                                    class="checkboxes GROUP_11502" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_11502" 
                                                    id="ROLEDEL_11502"
                                                    data-target="11502" 
                                                    class="checkboxes GROUP_11502" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_11502" 
                                                    id="ROLERIP_11502"
                                                    data-target="11502"
                                                    class="checkboxes GROUP_11502" />
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
