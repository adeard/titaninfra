<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/permohonanplpdetail/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    DETAIL PERMOHONAN PLP (PETI KEMAS)
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/permohonanplp/edit/{$desc['ID_PLP']}" class="btn btn-default btn-sm ajaxify">
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
                                    NO CONT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_CONT" 
                                        id="NO_CONT"
                                        value="{$desc['NO_CONT']}"
                                        placeholder="NO CONT"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO CONT"

                                        data-rule-maxlength="11"
                                        data-msg-maxlength="NO CONT tidak lebih dari 11 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    UK CONT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="UK_CONT" 
                                        id="UK_CONT"
                                        value="{$desc['UK_CONT']}"
                                        placeholder="UK CONT" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi UK CONT"
                                        
                                        data-rule-maxlength="2"
                                        data-msg-maxlength="UK CONT tidak lebih dari 2 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                        </div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-1"></div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-5"></div>
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
                            <input type="hidden" 
                          	   	   name="ID_DET_PLP" 
                           	   	   id="ID_DET_PLP" 
                            	   value="{$desc['ID_DET_PLP']}" />
                            
                           	<a data-href="{$this->basePath()}/pengiriman/permohonanplp/edit/{$desc['ID_PLP']}" class="btn default ajaxify">
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
