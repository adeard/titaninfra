<?php
/* Smarty version 3.1.30, created on 2017-01-16 22:09:17
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\penerimaan\Persetujuanplptujuan\Persetujuanplptujuankms\Detail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587ce21d5e4606_43921640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '27785f544cf344bb4d8ab22e775f0d0d278fe452' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\penerimaan\\Persetujuanplptujuan\\Persetujuanplptujuankms\\Detail.tpl',
      1 => 1484494324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_587ce21d5e4606_43921640 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\SYSTEM\\Vendor\\Smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '8821587ce21d57d133_42254066';
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
	
	//--------------- BEGIN DATA DET CONTAINER ------------------//
	var ID_RESPONPLP						= "<?php echo $_smarty_tpl->tpl_vars['desc']->value['ID_RESPONPLP'];?>
";
	var permohonanplpkmsdetailTable	= $('#permohonanplpkmsdetailTable');
	var oPermohonanplpkmsdetailTable= permohonanplpkmsdetailTable.dataTable({
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
		"ajax": {
			"url": base_url+"penerimaan/persetujuanplptujuankmsdetail/json?ID_RESPONPLP="+ID_RESPONPLP,
		},
		"columns": [
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
				{"visible": false, "searchable": false},
				null,
				null,
				null,
				null,
				null,
		],

	});
	//--------------- END DATA DET CONTAINER ------------------//
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
<?php echo '</script'; ?>
>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/penerimaan/persetujuanplptujuankms/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    RESPON Persetujuan PLP TPS Tujuan (KEMASAN)
                </div>
                
                <div class="actions">
                	<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/penerimaan/persetujuanplptujuankms" class="btn btn-default btn-sm ajaxify">
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
                                    KD KANTOR <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" disabled
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['KD_KANTOR'];?>
"
                                        
                                        placeholder="KD KANTOR"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TPS <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" disabled
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['KD_TPS'];?>
"
                                        
                                        placeholder="KD TPS"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    REF NUMBER <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" disabled
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['REF_NUMBER'];?>
"
                                        disable
                                        
                                        placeholder="REF NUMBER"

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
                                    NO PLP <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" disabled
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['NO_PLP'];?>
"
                                        
                                        placeholder="NO PLP"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL PLP <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" disabled
                                            name="TGL_PLP"
                                            id="TGL_PLP"
                                            value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['desc']->value['TGL_PLP'],"%d/%m/%Y");?>
"
                                            
                                            placeholder="TGL PLP"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    ALASAN TOLAK <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" disabled
                                        value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['ALASAN_TOLAK'];?>
"
                                        
                                        placeholder="ALASAN TOLAK"

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
                           	<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/penerimaan/persetujuanplptujuankms" class="btn default ajaxify">
                            	<i class="fa fa-arrow-left"></i> Kembali 
                            </a>
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


<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box purple">
			<div class="portlet-title">
				<div class="caption">
					LIST DETAIL
				</div>
				<div class="actions"></div>
			</div>
			
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="permohonanplpkmsdetailTable">
					<thead>
					<tr role="row" class="heading">
                        <th>NO</th>
                        <th>ID</th>
                        <th>JNS KMS</th>
						<th>JML KMS</th>
						<th>NO BL AWB</th>
						<th>TGL BL AWB</th>
						<th>FL SETUJU</th>
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
<?php }
}
