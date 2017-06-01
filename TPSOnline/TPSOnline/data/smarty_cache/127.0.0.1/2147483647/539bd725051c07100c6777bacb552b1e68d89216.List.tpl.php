<?php
/* Smarty version 3.1.30, created on 2017-01-16 22:08:55
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\penerimaan\Persetujuanplp\Persetujuanplpasalkms\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587ce20792e723_86828122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '319ed26515cc657ce39e31588c12605c17375fea' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\penerimaan\\Persetujuanplp\\Persetujuanplpasalkms\\List.tpl',
      1 => 1484489791,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_587ce20792e723_86828122 (Smarty_Internal_Template $_smarty_tpl) {
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
                                        <a data-href="/penerimaan/persetujuanplpasal" class="ajaxify">Respon PLP TPS Asal</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Respon PLP TPS Asal Kemasan</a>
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

<script>
jQuery(document).ready(function() {	
	
	//--------------- BEGIN DATA CONTAINER ------------------//
	var permohonanplpkmsTable	= $('#permohonanplpkmsTable');
	var oPermohonanplpkmsTable 	= permohonanplpkmsTable.dataTable({
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
		"bLengthChange": false,
		"bFilter": false,
		"bDestroy": true,
		"ajax": {
			"url": base_url+"penerimaan/persetujuanplpasalkms/json",
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
		],
		"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
			$(nRow).dblclick(function() {
				$(nRow).attr({"data-href":base_url+"penerimaan/persetujuanplpasalkms/detail/"+aaData[1], "class":"ajaxify"}).click();
			});
			return nRow;
		},

	});
	//--------------- END DATA CONTAINER ------------------//
	
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
</script>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					RESPON PERSETUJUAN PLP TPS ASAL (KEMASAN)
				</div>
				<div class="actions">
					<a data-href="/penerimaan/persetujuanplpasal" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
				</div>
			</div>
			
			<div class="portlet-body form util-btn-margin-bottom-5" style="margin-bottom: -15px">
				<form 	action="/penerimaan/persetujuanplpasalkms/send" 
						method="post" 
						class="SendAll form-horizontal">
						
				<div class="form-body">
					<div class="clearfix">
						<button class="btn btn-circle purple">
							<i class="icon-cloud-upload"></i> Unduh 
						</button>
					</div>
				</div>
			</div>
			
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="permohonanplpkmsTable">
					<thead>
					<tr role="row" class="heading">
                        <th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#permohonanplpkmsTable .checkboxes"/></th>
                        <th>ID</th>
						<th>KD KANTOR</th>
						<th>KD TPS</th>
						<th>REF NUMBER</th>
						<th>NO PLP</th>
						<th>TGL PLP</th>
						<th>ALASAN TOLAK</th>
					</tr>
					</thead>
					
					<tbody></tbody>
					</table>
				</div>
			</div>
				</form>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
<?php }
}
