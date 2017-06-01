<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/obplp/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                   OB/PLP(Pindah TPS)
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/penerimaan/obplp" class="btn btn-default btn-sm ajaxify">
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
                                   KD DOK <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text"
                                        value="{$desc['KD_DOK']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TPS ASAL <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['TPS_ASAL']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NM ANGKUT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NM_ANGKUT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO VOY FLIGHT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_VOY_FLIGHT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    CALL SIGN <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['CALL_SIGN']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                   TGL TIBA <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            value="{$desc['TGL_TIBA']|date_format:"%d/%m/%Y"}"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    GUDANG TUJUAN <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['GUDANG_TUJUAN']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO CONT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_CONT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    UK CONT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['UK_CONT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO SEGEL <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_SEGEL']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    JNS CONT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['JNS_CONT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO A11 <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_A11']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                   TGL A11 <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            value="{$desc['TGL_A11']|date_format:"%d/%m/%Y"}"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_BL_AWB']}"
                                        
                                        disabled
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
                                   TGL BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            value="{$desc['TGL_BL_AWB']|date_format:"%d/%m/%Y"}"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO MASTER BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_MASTER_BL_AWB']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                   TGL MASTER BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            value="{$desc['TGL_MASTER_BL_AWB']|date_format:"%d/%m/%Y"}"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    ID CONSIGNEE <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['ID_CONSIGNEE']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    CONSIGNEE <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['CONSIGNEE']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    BRUTO <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['BRUTO']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO BC11 <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_BC11']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                   TGL BC11 <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            value="{$desc['TGL_BC11']|date_format:"%d/%m/%Y"}"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO POS BC11 <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['NO_POS_BC11']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    ISO CODE <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['ISO_CODE']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    PEL MUAT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['PEL_MUAT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    PEL TRANSIT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['PEL_TRANSIT']}"
                                        
                                        disabled
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    PEL BONGKAR <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        value="{$desc['PEL_BONGKAR']}"
                                        
                                        disabled
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
                        	<a data-href="{$this->basePath()}/penerimaan/obplp" class="btn default ajaxify">
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
