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
	var ID_PLP						= "{/literal}{$desc['ID_PLP']}{literal}";
	var pembatalanplpdetailTable	= $('#pembatalanplpdetailTable');
	var oPembatalanplpdetailTable 	= pembatalanplpdetailTable.dataTable({
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
			"url": base_url+"pengiriman/pembatalanplpdetail/json?ID_PLP="+ID_PLP,
		},
		"columns": [
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "10px" },
				{"visible": false, "searchable": false},
				null,
				null,
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		],
		"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
			$(nRow).dblclick(function() {
				$(nRow).attr({"data-href":base_url+"pengiriman/pembatalanplppos/edit/"+aaData[1], "class":"ajaxify"}).click();
			});
			return nRow;
		},

	});
	//--------------- END DATA DET CONTAINER ------------------//
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
</script>
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/pembatalanplp/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    PEMBATALAN PLP (PETI KEMAS)
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/pembatalanplp/list" class="btn btn-default btn-sm ajaxify">
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
                                        value="{$desc['KD_KANTOR']}"
                                        
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
									{if $desc['TIPE_DATA'] == 1}
										{assign var='sell1' value='selected'}
										{assign var='sell2' value=''}
									{else}
										{assign var='sell1' value=''}
										{assign var='sell2' value='selected'}
									{/if}
									<option value="1" {$sell1}>Baru</option>
									<option value="2" {$sell2}>Manual</option>
								</select> 
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TPS ASAL <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_TPS_ASAL" 
                                        id="KD_TPS_ASAL"
                                        value="{$desc['KD_TPS_ASAL']}"
                                        
                                        placeholder="KD TPS ASAL"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD TPS ASAL"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="KD TPS ASAL tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    REF NUMBER <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="REF_NUMBER" 
                                        id="REF_NUMBER"
                                        value="{$desc['REF_NUMBER']}"
                                        disable
                                        
                                        placeholder="REF NUMBER"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi REF NUMBER"

                                        data-rule-maxlength="16"
                                        data-msg-maxlength="REF NUMBER tidak lebih dari 16 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO SURAT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_SURAT" 
                                        id="NO_SURAT"
                                        value="{$desc['NO_SURAT']}"
                                        
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
                                            value="{$desc['TGL_SURAT']|date_format:"%d/%m/%Y"}"
                                            
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
                                        value="{$desc['GUDANG_ASAL']}"
                                        
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
                                        value="{$desc['KD_TPS_TUJUAN']}"
                                        
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
                                        value="{$desc['GUDANG_TUJUAN']}"
                                        
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
                                        value="{$desc['KD_ALASAN_PLP']}"
                                        
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
                                        value="{$desc['YOR_ASAL']}"
                                        
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
                                        value="{$desc['YOR_TUJUAN']}"
                                        
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
                                        value="{$desc['CALL_SIGN']}"
                                        
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
                                        value="{$desc['NM_ANGKUT']}"
                                        
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
                                        value="{$desc['NO_VOY_FLIGHT']}"
                                        
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
                                    NO BC11 <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_BC11" 
                                        id="NO_BC11"
                                        value="{$desc['NO_BC11']}"
                                        
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
                                            value="{$desc['TGL_BC11']|date_format:"%d/%m/%Y"}"
                                            
                                            placeholder="TGL BC11"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NM PEMOHON <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NM_PEMOHON" 
                                        id="NM_PEMOHON"
                                        value="{$desc['NM_PEMOHON']}"
                                        
                                        placeholder="NM PEMOHON"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NM PEMOHON"

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
                            <input type="hidden" name="act" id="act" value="edit" />
                            
                            <input type="hidden" name="ID_PLP" id="ID_PLP" 
                            	   value="{$desc['ID_PLP']}" />
                            <input type="hidden" name="REF_NUMBER" id="REF_NUMBER" 
                            	   value="{$desc['REF_NUMBER']}" />
                            	   
                           	<a data-href="{$this->basePath()}/pengiriman/pembatalanplp/list" class="btn default ajaxify">
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
		<div class="portlet box purple">
			<div class="portlet-title">
				<div class="caption">
					LIST DETAIL
				</div>
				<div class="actions"></div>
			</div>
			
			<div class="portlet-body form util-btn-margin-bottom-5" style="margin-bottom: -15px">
				<div class="form-body">
					<div class="clearfix">
						<a data-href="{$this->basePath()}/pengiriman/pembatalanplpdetail/add?ID_PLP={$desc['ID_PLP']}" class="btn btn-circle purple ajaxify">
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
							id="pembatalanplpdetailTable">
					<thead>
					<tr role="row" class="heading">
                        <th>NO</th>
                        <th>ID</th>
                        <th>NO CONT</th>
						<th>UK CONT</th>
						<th>TINDAKAN</th>
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
