<?php
/* Smarty version 3.1.30, created on 2017-05-12 23:32:13
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Pengiriman\Permohonanplp\Permohonanplp\Add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5915e38dc7abd8_34945277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da52235acae04019a356211830333a84c8b9fbdc' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Pengiriman\\Permohonanplp\\Permohonanplp\\Add.tpl',
      1 => 1484363946,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_5915e38dc7abd8_34945277 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="load-content">
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
                                        <a data-href="/pengiriman/permohonanplp" class="ajaxify">Permohonan PLP</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                                <li>
                                        <a data-href="/pengiriman/permohonanplp/list" class="ajaxify">Permohonan PLP Peti Kemas 

</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Add</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="/pengiriman/permohonanplp/save" 
        method="post" enctype="multipart/form-data"
        class="SubmitFormLoad horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    PERMOHONAN PLP (PETI KEMAS)
                </div>
                
                <div class="actions">
                	<a data-href="/pengiriman/permohonanplp/list" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <!-- BEGIN ROW -->
                	<div class="row">
                    	<!-- BEGIN COLS -->
                    	<div class="col-md-5">
                           	
                            <div class="form-group">
                                <label class="control-label">
                                    KD KANTOR <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_KANTOR" 
                                        id="KD_KANTOR"
                                        
                                        placeholder="KD KANTOR"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD KANTOR"

                                        data-rule-maxlength="6"
                                        data-msg-maxlength="KD KANTOR tidak lebih dari 6 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TIPE DATA <span class="required">*</span>
                                </label>
                                <select name="TIPE_DATA" 
										id="TIPE_DATA" 
										data-rule-required="true"
										data-msg-required="Silahkan pilih TIPE DATA" 
										class="form-control">

									<option value="">-- SILAHKAN PILIH --</option>
									<option value="1">Baru</option>
									<option value="2">Manual</option>
								</select>  
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TPS ASAL <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_TPS_ASAL" 
                                        id="KD_TPS_ASAL"
                                        
                                        placeholder="KD TPS ASAL"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD TPS ASAL"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="KD TPS ASAL tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO SURAT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_SURAT" 
                                        id="NO_SURAT"
                                        
                                        placeholder="NO SURAT"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO SURAT"

                                        data-rule-maxlength="30"
                                        data-msg-maxlength="NO SURAT tidak lebih dari 30 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL SURAT <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_SURAT"
                                            id="TGL_SURAT"
                                            placeholder="TGL SURAT"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    GUDANG ASAL <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="GUDANG_ASAL" 
                                        id="GUDANG_ASAL"
                                        
                                        placeholder="GUDANG ASAL"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi GUDANG ASAL"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="GUDANG ASAL tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TPS TUJUAN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_TPS_TUJUAN" 
                                        id="KD_TPS_TUJUAN"
                                        
                                        placeholder="KD TPS TUJUAN"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD TPS TUJUAN"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="KD TPS TUJUAN tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    GUDANG TUJUAN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="GUDANG_TUJUAN" 
                                        id="GUDANG_TUJUAN"
                                        
                                        placeholder="GUDANG TUJUAN"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi GUDANG TUJUAN"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="GUDANG TUJUAN tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD ALASAN PLP <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_ALASAN_PLP" 
                                        id="KD_ALASAN_PLP"
                                        
                                        placeholder="KD ALASAN PLP"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="KD ALASAN PLP tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                        </div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-1"></div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-5">
                            <div class="form-group">
                                <label class="control-label">
                                    YOR ASAL <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="YOR_ASAL" 
                                        id="YOR_ASAL"
                                        
                                        placeholder="YOR ASAL"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    YOR TUJUAN <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="YOR_TUJUAN" 
                                        id="YOR_TUJUAN"
                                        
                                        placeholder="YOR TUJUAN"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    CALL SIGN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="CALL_SIGN" 
                                        id="CALL_SIGN"
                                        
                                        placeholder="CALL SIGN"

                                        data-rule-maxlength="8"
                                        data-msg-maxlength="CALL SIGN tidak lebih dari 8 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NM ANGKUT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NM_ANGKUT" 
                                        id="NM_ANGKUT"
                                        
                                        placeholder="NM ANGKUT"

                                        data-rule-maxlength="25"
                                        data-msg-maxlength="NM ANGKUT tidak lebih dari 25 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO VOY FLIGHT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_VOY_FLIGHT" 
                                        id="NO_VOY_FLIGHT"
                                        
                                        placeholder="NO VOY FLIGHT"

                                        data-rule-maxlength="20"
                                        data-msg-maxlength="NO VOY FLIGHT tidak lebih dari 20 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL TIBA <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_TIBA"
                                            id="TGL_TIBA"
                                            placeholder="TGL TIBA"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO BC11 <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_BC11" 
                                        id="NO_BC11"
                                        
                                        placeholder="NO BC11"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO BC11"

                                        data-rule-maxlength="6"
                                        data-msg-maxlength="NO BC11 tidak lebih dari 6 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL BC11 <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_BC11"
                                            id="TGL_BC11"
                                            placeholder="TGL BC11"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NM PEMOHON <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="NM_PEMOHON" 
                                        id="NM_PEMOHON"
                                        
                                        placeholder="NM PEMOHON"

                                        data-rule-maxlength="25"
                                        data-msg-maxlength="NM PEMOHON tidak lebih dari 25 karakter"

                                        class="form-control">
                            </div>
                            
                            
                        </div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-1"></div>
                        <!-- END COLS -->
                        
                    </div>
                    <!-- END ROW -->
                    
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="add" />
                            <input type="hidden" id="gobackurl" value="/pengiriman/permohonanplp/edit" />
                            
                            <a data-href="/pengiriman/permohonanplp/list" class="btn default ajaxify">
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
</form>

</div>
<?php }
}
