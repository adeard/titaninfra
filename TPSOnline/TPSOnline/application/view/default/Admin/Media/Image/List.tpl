<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<style type="text/css">
	.dataTables_filter input{
		width: 100%;
		min-width:250px;
		border: 1px solid #e5e5e5;
		padding: 10px 10px;
		height:35px;
	}

</style>

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/admin/image/delete" 
		method="post" 
		class="DeleteAll form-horizontal">    
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					Gate In Container
				</div>
				<div class="actions">
					<!--
					<a data-href="{$this->basePath()}/admin/image/add" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-plus"></i> Tambah 
					</a>
					<button class="btn btn-default btn-sm">
						<i class="fa fa-trash-o"></i> Hapus 
					</button>
					-->
				</div>
			</div>
			<div class="portlet-body">
				
				<div class="form-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="control-label col-md-3">
									Ref Number <span class="required">*</span>
								</label>
								<div class="col-md-8">
									<input 	type="text" 
											name="TITLE" 
											id="TITLE" 
											placeholder="" 

											data-rule-required="true"
											data-msg-required=""

											class="form-control">
								</div>
							</div>

							<div class="form-group">
								<label class="control-label col-md-3">
								   Tgl Entry<span class="required">*</span>
								</label>

								<div class="col-md-5">
									<div class="input-group input-medium date date-picker">
										<input 	type="text" 
												name="TGL_FAKTUR"
												id="TGL_FAKTUR"
												placeholder="Masukan tanggal"

												data-rule-required="true"
												data-msg-required="Silahkan isi tanggal"

												class="form-control" readonly>
										 <span class="input-group-btn">
											<button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
										</span>
									</div>
								</div>
							</div>
							
						</div>
						
					</div>
				</div>
                
                <div class="form-actions" style="margin-bottom:10px ">
                    <div class="row">
                        <div class="col-md-offset-1 col-md-6">
                            <input type="submit" class="btn green" value="Save" />
                            <input type="submit" class="btn green" value="Resend" />
                            <a data-href="{$this->basePath()}/pendapatan/faktur" class="btn default ajaxify">Cancel</a>
                        </div>
                    </div>
                </div>
                
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="imageTable2">
					<thead>
					<tr role="row" class="heading">
                    	<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#imageTable .checkboxes"/></th>
                        <th>NO</th>
						<th>KD DOK</th>
						<th>KD TPS</th>
						<th>NM ANGKUT</th>
						<th>NO NOV FLIGHT</th>
						<th>TGL TIBA</th>
						<th>KD GUDANG</th>
						<th>REF NUMBER</th>
						<th>NO CONT</th>
						<th>UK CONT</th>
						<th>NO SEGEL</th>
					</tr>
					</thead>
					
					<tbody>
						<tr>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
</form>