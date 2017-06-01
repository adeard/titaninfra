<?php
/* Smarty version 3.1.30, created on 2017-06-01 00:14:00
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Dokumen\Import\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ef9d8e898e3_76357930',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4541b8918a75a66882f32a5f6717339617e5cdd2' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Dokumen\\Import\\List.tpl',
      1 => 1481381076,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592ef9d8e898e3_76357930 (Smarty_Internal_Template $_smarty_tpl) {
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
                    <a href="javascript:void(0)">Import SPPB PIB</a>
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
<script type='text/javascript' src='/public/default/assets/admin/pages/scripts/table-advanced.js'></script>
<script type='text/javascript' src='/public/default/assets/admin/pages/scripts/custom.js'></script>
<!-- END DATATABLE -->

<script type='text/javascript' src='/public/default/assets/global/plugins/jquery.form.min.js'></script>


<style type="text/css">
.dataTables_filter input{
	width: 100%;
	min-width:250px;
	border: 1px solid #e5e5e5;
	padding: 10px 10px;
	height:35px;
}
</style>

<script>
jQuery(document).ready(function() {	
	
	//--------------- BEGIN DATA CONTAINER ------------------//

	var uploadTable		= $('#uploadTable');
	var oUploadTable 	= uploadTable.dataTable({
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
			[0, 'asc']
		],
		"autoWidth": false,
		"pageLength": 10,
		"bLengthChange": false,
		"bFilter": false,
		"bDestroy": true,
		"ajax": {
			"url": base_url+"dokumen/import/json",
		},
		"columns": [
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
				{"visible": false, "searchable": false},
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,	
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,	
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,	
				null,
				null,
				{ "orderable": false, "searchable": false },
				{ "orderable": false, "searchable": false },
				{ "orderable": false, "searchable": false }
				//{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		]

	});

	//--------------- END DATA CONTAINER ------------------//
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
	
	$('#UploadForm').ajaxForm({
		beforeSend: function() {
			$('.progress-bar').css('width', '0%');
			$('.progress-percentage').html('0%');
		},
		uploadProgress: function(event, position, total, progress) {
			$('.progress-bar').css('width', progress + '%');
			$('.progress-percentage').html(progress + '% Processing ...');
		},
		complete: function(data) {
			$('.progress-bar').css('width', '100%');
			$('.progress-percentage').html('100% Processing ...');
			
			var response = data.responseText;
			alert(response);
			getListUpload();
			$('.progress-bar').css('width', '0%');
			$('.progress-percentage').html('0% Done');
		}
	});
	
});

function getListUpload()
{
	//--------------- BEGIN DATA CONTAINER ------------------//
	var uploadTable		= $('#uploadTable');
	var oUploadTable 	= uploadTable.dataTable({
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
			[0, 'asc']
		],
		"autoWidth": false,
		"pageLength": 10,
		"bLengthChange": false,
		"bFilter": false,
		"bDestroy": true,
		"ajax": {
			"url": base_url+"dokumen/import/json",
		},
		"columns": [
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
				{"visible": false, "searchable": false},
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,	
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,	
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,
				null,	
				null,
				null,
				{ "orderable": false, "searchable": false },
				{ "orderable": false, "searchable": false },
				{ "orderable": false, "searchable": false }
				//{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		]

	});
	//--------------- END DATA CONTAINER ------------------//
}
</script>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="/dokumen/import/upload" 
		method="post" enctype="multipart/form-data"
        class="form-horizontal" id="UploadForm">
		  
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					IMPORT DATA SPPB PIB
				</div>
				<div class="actions">
					<!--
					<a data-href="/admin/image/add" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-plus"></i> Tambah 
					</a>
					<button class="btn btn-default btn-sm">
						<i class="fa fa-trash-o"></i> Hapus 
					</button>
					-->
				</div>
			</div>
			
			<!-- BEGIN FORM SEARCH -->
			<div class="portlet-body form">
				<div class="form-body">
					<!-- BEGIN ROW -->
					<div class="row">
					
						<!-- BEGIN COLS -->
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-md-3">
                                    UPLOAD FILE
                                </label>
                                <div class="col-md-9">
                                	<div class="fileinput fileinput-new" data-provides="fileinput">
										<div class="input-group input-large">
											<div class="form-control uneditable-input" data-trigger="fileinput">
												<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
												</span>
											</div>
											
											<span class="input-group-addon btn default btn-file">
												<span class="fileinput-new">Select file </span>
												<span class="fileinput-exists">
													Change 
												</span>
												<input type="file" 
													   name="USERFILES"
													   id="USERFILES">
											</span>
											
											<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
											Remove 
											</a>
											
										</div>
										
										<div class="progress progress-striped active" style="margin-top: 10px">
											<div class="progress-bar progress-bar-danger" 
												 role="progressbar" 
												 aria-valuenow="80" 
												 aria-valuemin="0" 
												 aria-valuemax="100">
												<span class="sr-only" ></span>
											</div>
											<div class="progress-percentage">0%</div>
										</div>

									</div>
								</div>
							</div>
							
							<div class="form-group" style="margin-top: -20px">
								<label class="control-label col-md-3">&nbsp;</label>
                                <div class="col-md-9">
									<input type="submit" class="btn green" value="Upload" />
									<a href="/data/TPS.xlsx" class="btn red">
										Download Format Excel <i class="fa fa-file-excel-o"></i>
									</a>
								</div>
							</div>
						
						</div>
						<!-- END COLS -->
						
					</div>
					<!-- END COLS -->
				</div>
               
                
			</div>
			<!-- END FORM SEARCH -->
			
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="uploadTable">
					<thead>
					<tr role="row" class="heading">
                        <th>NO</th>
                        <th>ID</th>
						<th>REF_NUMBER</th>
							
						<th>NM_DOK</th>
						<th>KD_TPS</th>
						<th>NM_ANGKUT</th>
						<th>NO_VOY_FLIGHT</th>
						<th>CALL_SIGN</th>
						<th>TGL_TIBA</th>
						<th>KD_GUDANG</th>

						<th>NO_CONT</th>
						<th>UK_CONT</th>
						<th>NO_SEGEL</th>
						<th>JNS_CONT</th>
						<th>NO_BL_AWB</th>
						<th>TGL_BL_AWB</th>
						<th>NO_MASTER_BL_AWB</th>
						<th>TGL_MASTER_BL_AWB</th>
						<th>ID_CONSIGNEE</th>
						<th>CONSIGNEE</th>
						<th>BRUTO</th>
						<th>NO_BC11</th>
						<th>TGL_BC11</th>
						<th>NO_POS_BC11</th>

						<th>CONT_ASAL</th>
						<th>SERI_KEMAS</th>
						<th>KD_KEMAS</th>
						<th>JML_KEMAS</th>

						<th>KD_TIMBUN</th>
						<th>NM_DOK_INOUT</th>
						<th>NO_DOK_INOUT</th>
						<th>TGL_DOK_INOUT</th>
						<th>WK_INOUT</th>
						<th>NM_SAR_ANGKUT</th>
						<th>NO_POL</th>
						<th>NM_FL_CONT</th>
						<th>ISO_CODE</th>
						<th>PEL_MUAT</th>
						<th>PEL_TRANSIT</th>
						<th>PEL_BONGKAR</th>
						<th>GUDANG_TUJUAN</th>

						<th>KD_KANTOR_PABEAN</th>
						<th>NO_DAFTAR_PABEAN</th>
						<th>TGL_DAFTAR_PABEAN</th>

						<th>NO_SEGEL_BC</th>
						<th>TGL_SEGEL_BC</th>

						<th>NO_DOK_IJIN_TPS</th>
						<th>TGL_DOK_IJIN_TPS</th>
					</tr>
					</thead>
					
					<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
</form>
<?php }
}
