<?php
/* Smarty version 3.1.30, created on 2017-06-01 00:14:00
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Dokumen\Import\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ef9d86efe30_64072005',
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
  'includes' => 
  array (
  ),
),false)) {
function content_592ef9d86efe30_64072005 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '7526592ef9d8510c61_67074715';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->

<!-- BEGIN DATATABLES -->
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/table-advanced.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/custom.js'><?php echo '</script'; ?>
>
<!-- END DATATABLE -->

<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery.form.min.js'><?php echo '</script'; ?>
>


<style type="text/css">
.dataTables_filter input{
	width: 100%;
	min-width:250px;
	border: 1px solid #e5e5e5;
	padding: 10px 10px;
	height:35px;
}
</style>

<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/dokumen/import/upload" 
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
					<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/image/add" class="btn btn-default btn-sm ajaxify">
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
									<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/data/TPS.xlsx" class="btn red">
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
