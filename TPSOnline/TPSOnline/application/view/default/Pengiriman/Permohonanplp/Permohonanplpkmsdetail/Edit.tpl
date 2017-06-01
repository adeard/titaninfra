<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/permohonanplpkmsdetail/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    DETAIL PERMOHONAN PLP (KEMASAN)
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/permohonanplpkms/edit/{$desc['ID_PLP']}" class="btn btn-default btn-sm ajaxify">
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
                                    JNS KMS <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="JNS_KMS" 
                                        id="JNS_KMS"
                                        value="{$desc['JNS_KMS']}"
                                        placeholder="JNS KMS"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi JNS KMS"

                                        data-rule-maxlength="11"
                                        data-msg-maxlength="JNS KMS tidak lebih dari 11 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    JML KMS <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="JML_KMS" 
                                        id="JML_KMS"
                                        value="{$desc['JML_KMS']}"
                                        placeholder="UK CONT" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi JML KMS"
                                        
                                        data-rule-maxlength="2"
                                        data-msg-maxlength="JML KMS tidak lebih dari 2 karakter"
                                        
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
                                    NO BL AWB <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_BL_AWB" 
                                        id="NO_BL_AWB"
                                        value="{$desc['NO_BL_AWB']}"
                                        placeholder="NO BL AWB"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO BL AWB"

                                        data-rule-maxlength="11"
                                        data-msg-maxlength="NO BL AWB tidak lebih dari 11 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_BL_AWB"
                                            id="TGL_BL_AWB"
                                            value="{$desc['TGL_BL_AWB']|date_format:"%d/%m/%Y"}"
                                            placeholder="TGL BL AWB"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">

                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
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
                            <input type="hidden" 
                          	   	   name="ID_DET_PLP" 
                           	   	   id="ID_DET_PLP" 
                            	   value="{$desc['ID_DET_PLP']}" />
                            
                           	<a data-href="{$this->basePath()}/pengiriman/permohonanplpkms/edit/{$desc['ID_PLP']}" class="btn default ajaxify">
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
