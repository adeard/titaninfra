<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<!-- BEGIN DATATABLES -->
<link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
<link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
<link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>

<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type='text/javascript' src='{$PATH_THEMES}/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'></script>
<script type='text/javascript' src='{$PATH_THEMES}/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'></script>
<script type='text/javascript' src='{$PATH_THEMES}/assets/admin/pages/scripts/custom.js'></script>
<!-- END DATATABLE -->

<script src="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/custom/custom.selecbox.js"></script>
{literal}
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
	var IDKOTA 		=  "{/literal}{$desc['IDKOTA']}{literal}";
	var IDPROVINSI 	=  "{/literal}{$desc['IDPROVINSI']}{literal}";
	
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
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/admin/perusahaan/save" 
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
                                           value="{$desc['NAMA']}"
                                           
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
                                            value="{$desc['NPWP']}"
                                            
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
                                        {section name=provinsi loop=$provinsi}
                                        {if $desc['IDPROVINSI'] == $provinsi[provinsi].IDPROVINSI}
                                            {assign var='selected' value='selected'}
                                        {else}
                                            {assign var='selected' value=''}
                                        {/if}
                                        <option value="{$provinsi[provinsi].IDPROVINSI}" {$selected}>
                                            {$provinsi[provinsi].PROVINSI|upper}
                                        </option>
                                        {/section}
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
                                              
                                              class="form-control">{$desc['ALAMAT']}</textarea>
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
                                            value="{$desc['KODEPOS']}"
                                            
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
                                            value="{$desc['TELP']}"
                                            
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
                                            value="{$desc['FAX']}"
                                            
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
                                            value="{$desc['EMAIL']}" 
                                            
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
                                                value="{$desc['TGLMULAI']|date_format:"%d/%m/%Y"}"
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
                                            value="{$desc['TAHUNFISKAL']}"
                                            
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
                                            value="{$desc['TPS_USERNAME']}"
                                            
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
                                           
                                           value="{$desc['TPS_PASSWORD']}"
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
                                            value="{$desc['KD_ESEAL']}"
                                            
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
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" value="{$desc['IDPERUSAHAAN']}" />
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
</form>