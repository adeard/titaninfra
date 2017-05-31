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
<script src="{$PATH_THEMES}/assets/custom/custom.selecbox.js"></script>
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
	
	//--------------- BEGIN DATA CONTAINER ------------------//
	var sppbpibTable		= $('#sppbpibTable');
	var oSppbpibTable 		= sppbpibTable.dataTable({
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
			"url": base_url+"penerimaan/sppbpib/json",
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
				{ "orderable": false, "searchable": false, "class":"text-center", "width": "120px" }
		],
		"fnRowCallback": function (nRow, aaData, iDisplayIndex, iDisplayIndexFull) {
			$(nRow).dblclick(function() {
				$(nRow).attr({"data-href":base_url+"penerimaan/sppbpib/detail/"+aaData[1], "class":"ajaxify"}).click();
			});
			return nRow;
		},

	});
	//--------------- END DATA CONTAINER ------------------//
	
	//--------------- BEGIN SEARCH ------------------//
	var SearchForm = $('.SearchForm');
	var error1 = $('.alert-danger', SearchForm);
	var success1 = $('.alert-success', SearchForm);

	SearchForm.on('submit', function() {
		for(var instanceName in CKEDITOR.instances) {
			CKEDITOR.instances[instanceName].updateElement();
		}
	})

	SearchForm.validate({
		errorElement: 'span',
		errorClass: 'help-block help-block-error',
		focusInvalid: false,
		ignore: "",
		messages: {
			select_multi: {
				maxlength: jQuery.validator.format("Max {0} items allowed for selection"),
				minlength: jQuery.validator.format("At least {0} items must be selected")
			}
		},
		rules: {
			name: {
				minlength: 2,
				required: true
			},
			email: {
				required: true,
				email: true
			},
			url: {
				required: true,
				url: true
			},
			number: {
				required: true,
				number: true
			},
			digits: {
				required: true,
				digits: true
			},
			creditcard: {
				required: true,
				creditcard: true
			},
			occupation: {
				minlength: 5,
			},
			select: {
				required: true
			},
			select_multi: {
				required: true,
				minlength: 1,
				maxlength: 3
			},
			membership: {
				required: true
			},
			service: {
				required: true,
				minlength: 2
			},
			editor1: {
				required: true
			},
			editor2: {
				required: true
			}
		},

		messages: { // custom messages for radio buttons and checkboxes
			membership: {
				required: "Please select a Membership type"
			},
			service: {
				required: "Please select  at least 2 types of Service",
				minlength: jQuery.validator.format("Please select  at least {0} types of Service")
			}
		},

		errorPlacement: function (error, element) { // render error placement for each input type
			if (element.parent(".input-group").size() > 0) {
				error.insertAfter(element.parent(".input-group"));
			} else if (element.attr("data-error-container")) { 
				error.appendTo(element.attr("data-error-container"));
			} else if (element.parents('.radio-list').size() > 0) { 
				error.appendTo(element.parents('.radio-list').attr("data-error-container"));
			} else if (element.parents('.radio-inline').size() > 0) { 
				error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
			} else if (element.parents('.checkbox-list').size() > 0) {
				error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
			} else if (element.parents('.checkbox-inline').size() > 0) { 
				error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
			} else {
				error.insertAfter(element); // for other inputs, just perform default behavior
			}
		},

		invalidHandler: function (event, validator) { //display error alert on form submit              
			success1.hide();
			error1.show();
			Metronic.scrollTo(error1, -200);
		},

		highlight: function (element) { // hightlight error inputs
			$(element)
				.closest('.form-group').addClass('has-error'); // set error class to the control group
		},

		unhighlight: function (element) { // revert the change done by hightlight
			$(element)
				.closest('.form-group').removeClass('has-error'); // set error class to the control group
		},

		success: function (label) {
			label.closest('.form-group').removeClass('has-error'); // set success class to the control group
		},

		submitHandler: function (form) {
			success1.show();
			error1.hide();

			$.ajax({
				type: "POST",
				url: $(form).attr('action'),
				data: $(form).serialize(),
				dataType: "json",
				success: function(data) {
					if(data.check_valid == "valid"){
						getListSPPBPIB(data.NO_SPPB, data.TGL_SPPB, data.NPWP_IMP);
					} else {
						sweetAlert("Failed", data.message_info, "error");
					}
				} 
			});
		}
	});
	
	//--------------- END SEARCH ------------------//
	
});

jQuery(document).ready(function() {
	Custom.init();
   	TableAdvanced.init();
});
</script>
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					DATA SPPB PIB
				</div>
				<div class="actions"></div>
			</div>
			
			<!-- BEGIN FORM SEARCH -->
			<div class="portlet-body form">
				<div class="form-body">
				
					<form 	action="{$this->basePath()}/penerimaan/sppbpib/search" 
							method="post" 
							class="SearchForm form-horizontal">
					<!-- BEGIN ROW -->
					<div class="row">
					
						<!-- BEGIN COLS -->
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-md-4">
                                    NO SPPB <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
									<input 	type="text" 
											name="NO_SPPB" 
											id="NO_SPPB" 
											placeholder="NO SPPB"
											
											data-rule-required="true"
                                        	data-msg-required="Silahkan isi NO SPPB"

											class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-4">
                                    TGL SPPB <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
									<div class="input-group input-medium date date-picker">
										<input 	type="text" 
												name="TGL_SPPB"
												id="TGL_SPPB"
												placeholder="TGL SPPB"
												
												data-rule-required="true"
                                        		data-msg-required="Silahkan isi TGL SPPB"

												class="form-control" readonly>
										 <span class="input-group-btn">
											<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-4">
                                    NPWP IMPORTIR <span class="required">*</span>
                                </label>
                                <div class="col-md-8">
									<input 	type="text" 
											name="NPWP_IMP" 
											id="NPWP_IMP" 
											placeholder="NPWP IMPORTIR"
											
											data-rule-required="true"
                                        	data-msg-required="Silahkan isi NPWP"

											class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="control-label col-md-4">&nbsp;</label>
                                <div class="col-md-8">
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
				<div class="form-body">
					<h4 class="form-section">LIST DATA</h4>
				</div>
			</div>
			
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="sppbpibTable">
					<thead>
					<tr role="row" class="heading">
                        <th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#sppbpibTable .checkboxes"/></th>
                        <th>ID</th>
                        <th>CAR</th> 
						<th>NO SPPB</th> 
						<th>TGL SPPB</th> 
						<th>KD KPBC</th> 
						<th>NO PIB</th> 
						<th>TGL PIB</th> 
						<th>NPWP IMP</th> 
						<th>NAMA IMP</th> 
						<th>ALAMAT IMP</th> 
						<th>NPWP PPJK</th> 
						<th>NAMA PPJK</th> 
						<th>ALAMAT PPJK</th> 
						<th>NM ANGKUT</th> 
						<th>NO VOY FLIGHT</th> 
						<th>BRUTO</th> 
						<th>NETTO</th> 
						<th>GUDANG</th> 
						<th>STATUS JALUR</th> 
						<th>JML CONT</th> 
						<th>NO BC11</th> 
						<th>TGL BC11</th> 
						<th>NO POS BC11</th> 
						<th>NO BL AWB</th> 
						<th>TG BL AWB</th> 
						<th>NO MASTER BL AWB</th> 
						<th>TG MASTER BL AWB</th>
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
