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
<script type='text/javascript' src='{$PATH_THEMES}/assets/admin/pages/scripts/table-advanced.js'></script>
<script type='text/javascript' src='{$PATH_THEMES}/assets/admin/pages/scripts/custom.js'></script>
<!-- END DATATABLE -->

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

<script>
jQuery(document).ready(function() {	
	
	//--------------- BEGIN DATA DET CONTAINER ------------------//
	var ID_COARRICODECO				= "{/literal}{$desc['ID_COARRICODECO']}{literal}";
	var kemasandetailTable			= $('#kemasandetailTable');
	var oKemasandetailTable 		= kemasandetailTable.dataTable({
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
		"ajax": {
			"url": base_url+"pengiriman/kemasandetail/json?ID_COARRICODECO="+ID_COARRICODECO,
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
				//{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		],
		"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
			$(nRow).dblclick(function() {
				$(nRow).attr({"data-href":base_url+"pengiriman/kemasandetail/edit/"+aaData[1], "class":"ajaxify"}).click();
			});
			return nRow;
		},

	});
	//--------------- END DATA DET KEMASAN ------------------//
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
</script>
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/kemasan/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    COARRI-CODECO KEMASAN
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/kemasan" class="btn btn-default btn-sm ajaxify">
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
                                    REF NUMBER <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="REF_NUMBER" 
                                        id="REF_NUMBER" 
                                        value="{$desc['REF_NUMBER']}"
                                        
                                        placeholder="REFERENSI NUMBER" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi referensi number"
                                        
                                        data-rule-maxlength="16"
                                        data-msg-maxlength="Ref number tidak lebih dari 16 karakter"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                           	<div class="form-group">
                                <label class="control-label">
                                    KD DOK <span class="required">*</span>
                                </label>
                                <select name="KD_DOK"
                                        id="KD_DOK"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan pilih kode dokumen"
                                        
                                        class="form-control">
                                        
                                    <option value="">-- SILAHKAN PILIH --</option>
                                    {section name=kode_dok loop=$kode_dok}
                                    {if $desc['KD_DOK'] == $kode_dok[kode_dok].KD_DOK}
										{assign var='sell_kode' value='selected'}
									{else}
										{assign var='sell_kode' value=''}
									{/if}
                                    <option value="{$kode_dok[kode_dok].KD_DOK}" {$sell_kode}>
                                        {$kode_dok[kode_dok].KD_DOK} - {$kode_dok[kode_dok].NM_DOK|upper}
                                    </option>
                                    {/section}
                                </select>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TPS <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_TPS" 
                                        id="KD_TPS"
                                        value="{$desc['KD_TPS']}"
                                        
                                        placeholder="KODE TPS"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi kode TPS"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="Kode tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NM ANGKUT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NM_ANGKUT" 
                                        id="NM_ANGKUT" 
                                        value="{$desc['NM_ANGKUT']}"
                                        
                                        placeholder="NAMA SARANA PENGANGKUTAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi sarana pengangkutan"
                                        
                                        data-rule-maxlength="25"
                                        data-msg-maxlength="Nama Angkut tidak lebih dari 25 karakter"
                                        
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
                                    NO VOY FLIGHT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_VOY_FLIGHT" 
                                        id="NO_VOY_FLIGHT"
                                        value="{$desc['NO_VOY_FLIGHT']}"
                                        
                                        placeholder="NOMOR PELAYARAN/PENERBANGAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi nomor pelayaran/penerbangan"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="Nomor tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    CALL SIGN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="CALL_SIGN" 
                                        id="CALL_SIGN"
                                        value="{$desc['CALL_SIGN']}"
                                        
                                        placeholder="KODE SARANA PENGANGKUTAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi kode sarana pengangkutan"
                                        
                                        data-rule-maxlength="8"
                                        data-msg-maxlength="Kode tidak lebih dari 8 karakter"
                                        
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
                                            value="{$desc['TGL_TIBA']|date_format:"%d/%m/%Y"}"
                                            
                                            placeholder="TGL TIBA"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD GUDANG <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_GUDANG" 
                                        id="KD_GUDANG"
                                        value="{$desc['KD_GUDANG']}"
                                        
                                        placeholder="KODE GUDANG"
                                        
                                        data-rule-maxlength="4"
                                        data-msg-maxlength="Kode tidak lebih dari 4 karakter"
                                        
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
                            <input type="hidden" name="act" id="act" value="edit" />
                            
                            <input type="hidden" name="ID_COARRICODECO" id="ID_COARRICODECO" 
                            	   value="{$desc['ID_COARRICODECO']}" />
                            <input type="hidden" name="REF_NUMBER" id="REF_NUMBER" 
                            	   value="{$desc['REF_NUMBER']}" />
                            	   
                           	<a data-href="{$this->basePath()}/pengiriman/kemasan" class="btn default ajaxify">
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

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					LIST DETAIL
				</div>
				<div class="actions"></div>
			</div>
			
			<div class="portlet-body form util-btn-margin-bottom-5" style="margin-bottom: -15px">
				<div class="form-body">
					<div class="clearfix">
						<a data-href="{$this->basePath()}/pengiriman/kemasandetail/add?ID_COARRICODECO={$desc['ID_COARRICODECO']}" class="btn btn-circle purple ajaxify">
							<i class="fa fa-plus"></i> Tambah 
						</a>
					</div>
				</div>
			</div>

			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="kemasandetailTable">
					<thead>
					<tr role="row" class="heading">
                        <th>NO</th>
                        <th>ID</th>
						<th>REF_NUMBER</th>
						<th>NM_DOK</th>
						
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
