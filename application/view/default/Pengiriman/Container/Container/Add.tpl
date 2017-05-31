<div class="load-content">
<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/container/save" 
        method="post" enctype="multipart/form-data"
        class="SubmitFormLoad horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    COARRI-CODECO CONTAINER
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/container" class="btn btn-default btn-sm ajaxify">
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
                                    KD DOK <span class="required">*</span>
                                </label>
                                <select name="KD_DOK"
                                        id="KD_DOK"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan pilih kode dokumen"
                                        
                                        class="form-control">
                                        
                                    <option value="">-- SILAHKAN PILIH --</option>
                                    {section name=kode_dok loop=$kode_dok}
                                    <option value="{$kode_dok[kode_dok].KD_DOK}">
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
                                        
                                        placeholder="NAMA SARANA PENGANGKUTAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi sarana pengangkutan"
                                        
                                        data-rule-maxlength="25"
                                        data-msg-maxlength="Nama Angkut tidak lebih dari 25 karakter"
                                        
                                        class="form-control">
                            </div>
                    		
                    		<div class="form-group">
                                <label class="control-label">
                                    NO VOY FLIGHT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_VOY_FLIGHT" 
                                        id="NO_VOY_FLIGHT"
                                        
                                        placeholder="NOMOR PELAYARAN/PENERBANGAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi nomor pelayaran/penerbangan"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="Nomor tidak lebih dari 20 karakter"
                                        
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
                                    CALL SIGN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="CALL_SIGN" 
                                        id="CALL_SIGN"
                                        
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
                            <input type="hidden" name="act" id="act" value="add" />
                            <input type="hidden" id="gobackurl" value="{$this->basePath()}/pengiriman/container/edit" />
                            
                            <a data-href="{$this->basePath()}/pengiriman/container" class="btn default ajaxify">
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

</div>
