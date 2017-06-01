<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

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
{/literal}


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/admin/vehicle/save" 
        method="post" 
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Vehicle
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                	<!-- BEGIN ROW -->
                	<div class="row">
                    	<!-- BEGIN COLS -->
                    	<div class="col-md-6">
                            <div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                    Vehicle Active <span class="required">&nbsp; </span>
                                </label>
                                <input 	type="text" 
                                        id="ACTIVE" 
                                        name="ACTIVE"
                                        value="{$desc['ACTIVE']}"
                                        
                                        data-rule-number="true"
                            			data-msg-number="Jumlah Vehicle tidak valid"
                                        
                                        placeholder="Vehicle Active"
                                        class="form-control">
                            </div>
                    		
                    		<div class="form-group col-md-12" style="padding-left:0px;">
                                <label class="control-label">
                                    Vehicle Inactive <span class="required">&nbsp; </span>
                                </label>
                                <input 	type="text" 
                                        id="INACTIVE" 
                                        name="INACTIVE"
                                        value="{$desc['INACTIVE']}"
                                        
                                        data-rule-number="true"
                            			data-msg-number="Jumlah Vehicle tidak valid"
                                        
                                        placeholder="Vehicle Inactive"
                                        class="form-control">
                            </div>
                        </div>
                        <!-- END COLS -->
                        
                    </div>
                    <!-- END ROW -->

                </div>
                <div class="form-actions">
                	<div class="row">
                        <div class="col-md-offset-3 col-md-9">
                        	<input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDVEHICLE" id="IDVEHICLE" value="{$desc['IDVEHICLE']}" />
                            <input type="submit" class="btn green" value="Simpan" />
                            <input type="reset" class="btn default" value="Batal" />
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