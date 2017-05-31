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
<form 	action="{$this->basePath()}/pengiriman/permohonanplpkms/save" 
        method="post" enctype="multipart/form-data"
        class="SubmitFormLoad horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    PERMOHONAN PLP (KEMASAN)
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/permohonanplpkms" class="btn btn-default btn-sm ajaxify">
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
									<option value="1">Baru</option>
									<option value="2">Manual</option>
								</select>  
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TPS ASAL <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_TPS_ASAL" 
                                        id="KD_TPS_ASAL"
                                        
                                        placeholder="KD TPS ASAL"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD TPS ASAL"

                                        data-rule-maxlength="4"
                                        data-msg-maxlength="KD TPS ASAL tidak lebih dari 4 karakter"

                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO SURAT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_SURAT" 
                                        id="NO_SURAT"
                                        
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
                                            placeholder="TGL BC11"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NM PEMOHON <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="NM_PEMOHON" 
                                        id="NM_PEMOHON"
                                        
                                        placeholder="NM PEMOHON"

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
                            <input type="hidden" name="act" id="act" value="add" />
                            <input type="hidden" id="gobackurl" value="{$this->basePath()}/pengiriman/permohonanplpkms/edit" />
                            
                            <a data-href="{$this->basePath()}/pengiriman/permohonanplpkms" class="btn default ajaxify">
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
