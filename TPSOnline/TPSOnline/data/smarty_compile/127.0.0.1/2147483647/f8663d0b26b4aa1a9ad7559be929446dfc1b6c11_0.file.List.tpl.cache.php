<?php
/* Smarty version 3.1.30, created on 2017-05-10 23:23:21
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Admin\Admin\Perusahaan\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59133e79950749_90526689',
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
  'includes' => 
  array (
  ),
),false)) {
function content_59133e79950749_90526689 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\SYSTEM\\Vendor\\Smarty\\libs\\plugins\\modifier.date_format.php';
$_smarty_tpl->compiled->nocache_hash = '2363859133e792d99f8_60748065';
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
/assets/admin/pages/scripts/custom.js'><?php echo '</script'; ?>
>
<!-- END DATATABLE -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/<?php echo @constant('VIEW_THEMES');?>
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
 language="javascript">
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
	var IDKOTA 		=  "<?php echo $_smarty_tpl->tpl_vars['desc']->value['IDKOTA'];?>
";
	var IDPROVINSI 	=  "<?php echo $_smarty_tpl->tpl_vars['desc']->value['IDPROVINSI'];?>
";
	
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
<?php echo '</script'; ?>
>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/perusahaan/save" 
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
                                           value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['NAMA'];?>
"
                                           
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['NPWP'];?>
"
                                            
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
                                        <?php
$__section_provinsi_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_provinsi']) ? $_smarty_tpl->tpl_vars['__smarty_section_provinsi'] : false;
$__section_provinsi_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['provinsi']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_provinsi_0_total = $__section_provinsi_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_provinsi'] = new Smarty_Variable(array());
if ($__section_provinsi_0_total != 0) {
for ($__section_provinsi_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index'] = 0; $__section_provinsi_0_iteration <= $__section_provinsi_0_total; $__section_provinsi_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index']++){
?>
                                        <?php if ($_smarty_tpl->tpl_vars['desc']->value['IDPROVINSI'] == $_smarty_tpl->tpl_vars['provinsi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index'] : null)]['IDPROVINSI']) {?>
                                            <?php $_smarty_tpl->_assignInScope('selected', 'selected');
?>
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->_assignInScope('selected', '');
?>
                                        <?php }?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['provinsi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index'] : null)]['IDPROVINSI'];?>
" <?php echo $_smarty_tpl->tpl_vars['selected']->value;?>
>
                                            <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['provinsi']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_provinsi']->value['index'] : null)]['PROVINSI'], 'UTF-8');?>

                                        </option>
                                        <?php
}
}
if ($__section_provinsi_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_provinsi'] = $__section_provinsi_0_saved;
}
?>
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
                                              
                                              class="form-control"><?php echo $_smarty_tpl->tpl_vars['desc']->value['ALAMAT'];?>
</textarea>
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['KODEPOS'];?>
"
                                            
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TELP'];?>
"
                                            
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['FAX'];?>
"
                                            
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['EMAIL'];?>
" 
                                            
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
                                                value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['desc']->value['TGLMULAI'],"%d/%m/%Y");?>
"
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TAHUNFISKAL'];?>
"
                                            
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TPS_USERNAME'];?>
"
                                            
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
                                           
                                           value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['TPS_PASSWORD'];?>
"
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
                                            value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['KD_ESEAL'];?>
"
                                            
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
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" value="<?php echo $_smarty_tpl->tpl_vars['desc']->value['IDPERUSAHAAN'];?>
" />
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
