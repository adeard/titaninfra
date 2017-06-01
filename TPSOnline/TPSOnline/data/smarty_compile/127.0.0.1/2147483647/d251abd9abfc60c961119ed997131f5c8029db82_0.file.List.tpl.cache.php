<?php
/* Smarty version 3.1.30, created on 2017-05-19 17:20:23
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Pengiriman\Container\Container\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_591ec6e7a4da32_17142874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd251abd9abfc60c961119ed997131f5c8029db82' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Pengiriman\\Container\\Container\\List.tpl',
      1 => 1483431421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_591ec6e7a4da32_17142874 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '6071591ec6e7a013b3_82408847';
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
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/custom/custom.selecbox.js"><?php echo '</script'; ?>
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
	var containerTable		= $('#containerTable');
	var oContainerTable 	= containerTable.dataTable({
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
			"url": base_url+"pengiriman/container/json",
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
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		],
		"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
			$(nRow).dblclick(function() {
				$(nRow).attr({"data-href":base_url+"pengiriman/container/edit/"+aaData[1], "class":"ajaxify"}).click();
			});
			return nRow;
		},

	});
	//--------------- END DATA CONTAINER ------------------//
	
	$('.SearchForm').live('submit', function(e) {
		e.preventDefault();
		dataString = $(".SearchForm").serialize();
		
		$.ajax({
			type: "POST",
			url: $(this).attr('action'),
			data: dataString,
			dataType: "json",
			success: function(data) {
				if(data.check_valid == "valid"){
					getListContainer(data.REF_NUMBER, data.TGL_TIBA);
				} else {
					sweetAlert("Failed", data.message_info, "error");
				}
			} 
		}); 
	});
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
<?php echo '</script'; ?>
>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					COARRI-CODECO CONTAINER
				</div>
				<div class="actions"></div>
			</div>
			
			<!-- BEGIN FORM SEARCH -->
			<div class="portlet-body form">
				<div class="form-body">
				
					<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/pengiriman/container/search" 
							method="post" 
							class="SearchForm form-horizontal">
					<!-- BEGIN ROW -->
					<div class="row">
					
						<!-- BEGIN COLS -->
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-md-3">
                                    REF NUMBER
                                </label>
                                <div class="col-md-9">
									<input 	type="text" 
											name="REF_NUMBER" 
											id="REF_NUMBER" 
											placeholder="REF NUMBER"

											class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">
                                    TGL ENTRY
                                </label>
                                <div class="col-md-9">
									<div class="input-group input-medium date date-picker">
										<input 	type="text" 
												name="TGL_TIBA"
												id="TGL_TIBA"
												placeholder="TGL ENTRY"

												class="form-control" readonly>
										 <span class="input-group-btn">
											<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-3">&nbsp;</label>
                                <div class="col-md-9">
									<input type="submit" class="btn green" value="Cari" />
                            		<input type="reset" class="btn default" value="Batal" />
								</div>
							</div>
						
						</div>
						<!-- END COLS -->
					</div>
					<!-- END ROW -->
					</form>
					
				</div>
               
                
			</div>
			<!-- END FORM SEARCH -->
			
			
			<div class="portlet-body form util-btn-margin-bottom-5" style="margin-bottom: -15px">
				<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/pengiriman/container/send" 
						method="post" 
						class="SendAll form-horizontal">
			
				<div class="form-body">
					<h4 class="form-section">LIST DATA</h4>
					<div class="clearfix">
						<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/pengiriman/container/add" class="btn btn-circle blue ajaxify">
							<i class="fa fa-plus"></i> Tambah 
						</a>
						
						<button class="btn btn-circle purple">
							<i class="icon-cloud-upload"></i> Kirim 
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
							id="containerTable">
					<thead>
					<tr role="row" class="heading">
                        <th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#containerTable .checkboxes"/></th>
                        <th>ID</th>
                        <th>REF NUMBER</th>
						<th>NM DOK</th>
						<th>KD TPS</th>
						<th>NM ANGKUT</th>
						<th>NO NOV FLIGHT</th>
						<th>CALL SIGN</th>
						<th>TGL TIBA</th>
						<th>KD GUDANG</th>
						<th>TINDAKAN</th>
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
