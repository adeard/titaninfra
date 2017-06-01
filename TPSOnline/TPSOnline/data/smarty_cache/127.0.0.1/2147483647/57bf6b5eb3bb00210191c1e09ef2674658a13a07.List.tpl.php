<?php
/* Smarty version 3.1.30, created on 2017-05-10 23:23:22
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\Perusahaan\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59133e7a321f36_76152850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8663d0b26b4aa1a9ad7559be929446dfc1b6c11' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Admin\\Admin\\Perusahaan\\List.tpl',
      1 => 1483882855,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_59133e7a321f36_76152850 (Smarty_Internal_Template $_smarty_tpl) {
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
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Perusahaan</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->

<!-- BEGIN DATATABLES -->
<link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<script type="text/javascript" src="/public/default/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type='text/javascript' src='/public/default/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'></script>
<script type='text/javascript' src='/public/default/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'></script>
<script type='text/javascript' src='/public/default/assets/admin/pages/scripts/custom.js'></script>
<!-- END DATATABLE -->

<script src="/public/default/assets/custom/custom.selecbox.js"></script>

<style type="text/css">
.dataTables_filter input{
	width: 100%;
	min-width:250px;
	border: 1px solid #e5e5e5;
	padding: 10px 10px;
	height:35px;
}
</style>

<script language="javascript">
jQuery(document).ready(function() {
	//--------------- BEGIN DATA TABLE PERUSAHAAN ------------------//
	var perusahaanTable		= $('#perusahaanTable');
	var oPerusahaanTable	= perusahaanTable.dataTable({
		"dom": "<'row'<'col-md-6 col-sm-12'l><'col-md-6 col-sm-12'f>r><'table-scrollable't><'row'<'col-md-5 col-sm-12'i><'col-md-7 col-sm-12'p>>",
		"language": {
			"aria": {
				"sortAscending": ": activate to sort column ascending",
				"sortDescending": ": activate to sort column descending"
			},
			"emptyTable": "No data available in table",
			"info": "Showing _START_ to _END_ of _TOTAL_ records",
			"infoEmpty": "No records found",
			"infoFiltered": "(filtered1 from _MAX_ total records)",
			"lengthMenu": "Show _MENU_ records",
			"search": "Search:",
			"zeroRecords": "No matching records found",
			"paginate": {
				"previous":"Prev",
				"next": "Next",
				"last": "Last",
				"first": "First"
			}
		},
		"lengthMenu": [
			[10, 15, 20, -1],
			[10, 15, 20, "All"]
		],
		"order": [
			[1, 'asc']
		],
		"autoWidth": false,
		"pageLength": 10,
		"ajax": {
			"url": base_url+"admin/perusahaan/json",
		},
		"columns": [
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
				{"visible": false, "searchable": false},
				null,
				null,
				null,
				{ "orderable": false, "searchable": false },
				{ "orderable": false, "searchable": false },
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		]
	});
	//--------------- END DATA TABLE PERUSAHAAN ------------------//
	
	<!-- BEGIN CHECK/UNCHEK ALL CHECKBOX DATATABLE -->
	if($.fn.dataTable)
	{
		var tableCheckAll = $.fn.dataTable.fnTables(true);
		$(tableCheckAll).find('.group-checkable').change(function () {
			var set = jQuery(this).attr("data-set");
			var checked = jQuery(this).is(":checked");
			jQuery(set).each(function () {
				if (checked) {
					$(this).attr("checked", true);
				} else {
					$(this).attr("checked", false);
				}
			});
			jQuery.uniform.update(set);
		});
	}
	<!-- END CHECK/UNCHEK ALL CHECKBOX DATATABLE -->
	
	<!-- BEGIN MODAL BOX -->
	/**	
	$('[data-toggle="ajaxModalPerusahaan"]').live('click',function(e) 
	{
		$('#ajaxModalPerusahaan').remove();
		e.preventDefault();
		var $this = $(this)
		  , $remote = $this.data('remote') || $this.attr('href')
		  , $modal = $('<div class="modal fade" id="ajaxModalPerusahaan" tabindex="-1" role="dialog" aria-labelledby="ajaxModalPerusahaan" aria-hidden="true"><div class="modal-body"></div></div>');
		$('body').append($modal);

		$modal.modal({backdrop: 'static', keyboard: false});
		$modal.load($remote);
		jQuery.uniform.update($this);
	});
	*/
	<!-- END MODAL BOX -->
	
	/** Get kota */
	var IDKOTA 		=  "";
	var IDPROVINSI 	=  "";
	
	var url = base_url+'service/getKota?IDPROVINSI='+IDPROVINSI;
	$('.IDKOTA').empty();
	
	$.getJSON(url,{},
		function(data){
			for(i=0;i<data.length;i++){
				if(IDKOTA == data[i].IDKOTA){
					$('.IDKOTA').append(new Option(data[i].KOTA, data[i].IDKOTA));
					$('.IDKOTA').val(IDKOTA);
				}else{
					$('.IDKOTA').append(new Option(data[i].KOTA, data[i].IDKOTA));
					
				}
			}        
		}
	);
	/** End Get kota */
	
	Custom.init();
});
</script>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="/admin/perusahaan/save" 
        method="post" 
        class="EditForm form-horizontal">
                        
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Perusahaan
                </div>
            </div>
            <div class="portlet-body">
 				<div class="tabbable-custom nav-justified">
                	<ul class="nav nav-tabs nav-justified">
                        <li class="active">
                            <a href="#informasi" data-toggle="tab">
                            Informasi </a>
                        </li>
                        <li>
                            <a href="#setting" data-toggle="tab">
                            Setting </a>
                        </li>
                    </ul>
                    
                    <div class="tab-content">
						<div class="tab-pane active" id="informasi">
                        	<div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Perusahaan <span class="required">* </span>
                                </label>
                                <div class="col-md-6">
                                    <input type="text" 
                                           name="NAMA"
                                           id="NAMA"
                                           value="PT Easygo GPS"
                                           
                                           placeholder="Masukan nama perusahaan" 
                                           maxlength="20"
                                           
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi nama perusahaan"
                                            
                                           data-rule-minlength="3" 
                                           data-msg-minlength="Nama tidak kurang dari 3 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Nama tidak lebih dari 20 karakter"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    N.P.W.P <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            placeholder="Masukan nomor NPWP"
                                            name="NPWP" 
                                            id="NPWP"
                                            value=""
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Provinsi / Kota <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-3">
                                    <select name="IDPROVINSI" 
                                            id="IDPROVINSI" 
                                            class="form-control"
                                            onchange="return onChangeMenuKota(this.value);">
                                        
                                        <option value="">-- SILAHKAN PILIH --</option>
                                                                                                                                                                                                            <option value="51" >
                                            BALI
                                        </option>
                                                                                                                                                                                                            <option value="36" >
                                            BANTEN
                                        </option>
                                                                                                                                                                                                            <option value="17" >
                                            BENGKULU
                                        </option>
                                                                                                                                                                                                            <option value="34" >
                                            D.I. YOGYAKARTA
                                        </option>
                                                                                                                                                                                                            <option value="31" >
                                            DKI JAKARTA
                                        </option>
                                                                                                                                                                                                            <option value="75" >
                                            GORONTALO
                                        </option>
                                                                                                                                                                                                            <option value="15" >
                                            JAMBI
                                        </option>
                                                                                                                                                                                                            <option value="32" >
                                            JAWA BARAT
                                        </option>
                                                                                                                                                                                                            <option value="33" >
                                            JAWA TENGAH
                                        </option>
                                                                                                                                                                                                            <option value="35" >
                                            JAWA TIMUR
                                        </option>
                                                                                                                                                                                                            <option value="61" >
                                            KALIMANTAN BARAT
                                        </option>
                                                                                                                                                                                                            <option value="63" >
                                            KALIMANTAN SELATAN
                                        </option>
                                                                                                                                                                                                            <option value="62" >
                                            KALIMANTAN TENGAH
                                        </option>
                                                                                                                                                                                                            <option value="64" >
                                            KALIMANTAN TIMUR
                                        </option>
                                                                                                                                                                                                            <option value="19" >
                                            KEPULAUAN BANGKA BELITUNG
                                        </option>
                                                                                                                                                                                                            <option value="20" >
                                            KEPULAUAN RIAU
                                        </option>
                                                                                                                                                                                                            <option value="18" >
                                            LAMPUNG
                                        </option>
                                                                                                                                                                                                            <option value="81" >
                                            MALUKU
                                        </option>
                                                                                                                                                                                                            <option value="82" >
                                            MALUKU UTARA
                                        </option>
                                                                                                                                                                                                            <option value="11" >
                                            NANGGROE ACEH DARUSSALAM
                                        </option>
                                                                                                                                                                                                            <option value="52" >
                                            NUSA TENGGARA BARAT
                                        </option>
                                                                                                                                                                                                            <option value="53" >
                                            NUSA TENGGARA TIMUR
                                        </option>
                                                                                                                                                                                                            <option value="94" >
                                            PAPUA
                                        </option>
                                                                                                                                                                                                            <option value="14" >
                                            RIAU
                                        </option>
                                                                                                                                                                                                            <option value="76" >
                                            SULAWESI BARAT
                                        </option>
                                                                                                                                                                                                            <option value="73" >
                                            SULAWESI SELATAN
                                        </option>
                                                                                                                                                                                                            <option value="72" >
                                            SULAWESI TENGAH
                                        </option>
                                                                                                                                                                                                            <option value="74" >
                                            SULAWESI TENGGARA
                                        </option>
                                                                                                                                                                                                            <option value="71" >
                                            SULAWESI UTARA
                                        </option>
                                                                                                                                                                                                            <option value="13" >
                                            SUMATERA BARAT
                                        </option>
                                                                                                                                                                                                            <option value="16" >
                                            SUMATERA SELATAN
                                        </option>
                                                                                                                                                                                                            <option value="12" >
                                            SUMATERA UTARA
                                        </option>
                                                                            </select>
                                </div>
                                
                                <div class="col-md-3">
                                    <select name="IDKOTA" 
                                            id="IDKOTA"
                                            class="form-control IDKOTA">
                                        <option value="">-- SILAHKAN PILIH --</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Alamat <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <textarea placeholder="Masukan alamat"
                                              name="ALAMAT" 
                                              id="ALAMAT"
                                              
                                              data-rule-maxlength="200"
                                              data-msg-maxlength="Alamat tidak lebih dari 200 karakter"
                                              
                                              class="form-control"></textarea>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Kode Pos <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            placeholder="Masukan kode pos"
                                            name="KODEPOS" 
                                            id="KODEPOS"
                                            value=""
                                            
                                            data-rule-number="true"
                                            data-msg-number="Kode pos tidak valid"
                                            
                                            data-rule-rangelength="[5,5]"
                                            data-msg-rangelength="Kode pos tidak valid"
                                            
                                            maxlength="5"
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Telp <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" placeholder="Masukan no telp"
                                            name="TELP" 
                                            id="TELP"
                                            value=""
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer telp tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Fax <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" placeholder="Masukan no telp"
                                            name="FAX" 
                                            id="FAX"
                                            value=""
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer fax tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Email <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            placeholder="Masukan address email" 
                                            name="EMAIL" 
                                            id="EMAIL"
                                            value="" 
                                            
                                            data-rule-email="true"
                                            data-msg-email="email address tidak valid" 
                                            
                                            class="form-control">
                                </div>
                            </div>
                        </div>
                        
                        <div class="tab-pane" id="setting">
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Tanggal Mulai <span class="required">*</span>
                                </label>
                                <div class="col-md-3">
                                    <div class="input-group input-medium date date-picker">
                                        <input 	type="text" 
                                                name="TGLMULAI"
                                                id="TGLMULAI"
                                                value=""
                                                placeholder="Masukan tanggal mulai" 
                                                
                                                data-rule-required="true"
                                                data-msg-required="Silahkan isi tanggal mulai"
                                                
                                                class="form-control" readonly>
                                         <span class="input-group-btn">
                                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Tahun Fiskal <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-3">
                                    <input 	type="text" 
                                            placeholder="Masukan Tahun Fiskal"
                                            name="TAHUNFISKAL" 
                                            id="TAHUNFISKAL"
                                            value=""
                                            
                                            data-rule-number="true"
                                            data-msg-number="Tahun Fiskal tidak valid"
                                            
                                            data-rule-rangelength="[4,4]"
                                            data-msg-rangelength="Tahun Fiskal tidak valid"
                                            
                                            maxlength="4"
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Username TPS <span class="required">* </span>
                                </label>
                                <div class="col-md-6">
                                    <input 	type="text" 
                                            name="TPS_USERNAME"
                                            id="TPS_USERNAME"
                                           
                                            placeholder="Masukan username" 
                                            maxlength="20"
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi username"
                                            value="TES"
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Password TPS <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password"
                                           name="TPS_PASSWORD"
                                           id="TPS_PASSWORD"
                                           
                                           placeholder="Masukan password" 
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi password"
                                           
                                           value="1234"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    No Eseal <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-6">
                                    <input  type="text" 
                                            placeholder="Masukan nomor eseal"
                                            name="KD_ESEAL" 
                                            id="KD_ESEAL" 
                                            value=""
                                            
                                            class="form-control">
                                </div>
                            </div>
                            
                        </div>
                        
                  	</div>
                </div>
                
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" value="1" />
                            <input type="hidden" name="PARENT" id="PARENT" value="0" />
                            <input type="hidden" name="LEVEL" id="LEVEL" value="0" />
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
</form><?php }
}
