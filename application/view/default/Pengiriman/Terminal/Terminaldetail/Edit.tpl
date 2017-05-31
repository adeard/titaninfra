<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/terminaldetail/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    DETAIL COARRI-CODECO CAR TERMINAL
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/terminal/edit/{$desc['ID_COARRICODECO']}" class="btn btn-default btn-sm ajaxify">
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
                                    NO BL AWB <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_BL_AWB" 
                                        id="NO_BL_AWB"
                                        value="{$desc['NO_BL_AWB']}"
                                        placeholder="NO BL AWB" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO BL AWB"
                                        
                                        data-rule-maxlength="30"
                                        data-msg-maxlength="NO BL AWB tidak lebih dari 30 karakter"
                                        
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
                            
                            <div class="form-group">
                                <label class="control-label">
                                    ID CONSIGNEE <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="ID_CONSIGNEE" 
                                        id="ID_CONSIGNEE"
                                        value="{$desc['ID_CONSIGNEE']}"
                                        placeholder="ID CONSIGNEE" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi ID CONSIGNEE"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="ID CONSIGNEE tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    CONSIGNEE <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="CONSIGNEE" 
                                        id="CONSIGNEE"
                                        value="{$desc['CONSIGNEE']}" 
                                        placeholder="CONSIGNEE" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi CONSIGNEE"
                                        
                                        data-rule-maxlength="100"
                                        data-msg-maxlength="CONSIGNEE tidak lebih dari 100 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    BRUTO <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="BRUTO" 
                                        id="BRUTO"
                                        value="{$desc['BRUTO']}" 
                                        placeholder="BRUTO" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi BRUTO"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="BRUTO tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
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
                                    TGL BC11 <span class="required">*</span>
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
                                    NO POS BC11 <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_POS_BC11" 
                                        id="NO_POS_BC11"
                                        value="{$desc['NO_POS_BC11']}" 
                                        placeholder="NO POS BC11"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="NO POS BC11 tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD TIMBUN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_TIMBUN" 
                                        id="KD_TIMBUN"
                                        value="{$desc['KD_TIMBUN']}"
                                        placeholder="KD TIMBUN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD TIMBUN"
                                        
                                        data-rule-maxlength="10"
                                        data-msg-maxlength="KD TIMBUN tidak lebih dari 10 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD DOK INOUT <span class="required">*</span>
                                </label>
                                <select name="KD_DOK_INOUT"
                                        id="KD_DOK_INOUT"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan pilih kode dokumen"
                                        
                                        class="form-control">
                                        
                                    <option value="">-- SILAHKAN PILIH --</option>
                                    {section name=dokinout loop=$dokinout}
                                    {if $desc['KD_DOK_INOUT'] == $dokinout[dokinout].KD_DOK_INOUT}
										{assign var='sell_kode' value='selected'}
									{else}
										{assign var='sell_kode' value=''}
									{/if}
                                    <option value="{$dokinout[dokinout].KD_DOK_INOUT}" {$sell_kode}>
                                        {$dokinout[dokinout].KD_DOK_INOUT} - {$dokinout[dokinout].NM_DOK_INOUT|upper}
                                    </option>
                                    {/section}
                                </select>
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO DOK INOUT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_DOK_INOUT" 
                                        id="NO_DOK_INOUT"
                                        value="{$desc['NO_DOK_INOUT']}" 
                                        placeholder="NO DOK INOUT" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO DOK INOUT"
                                        
                                        data-rule-maxlength="30"
                                        data-msg-maxlength="NO DOK INOUT tidak lebih dari 30 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL DOK INOUT <span class="required">*</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_DOK_INOUT"
                                            id="TGL_DOK_INOUT"
                                            value="{$desc['TGL_DOK_INOUT']|date_format:"%d/%m/%Y"}"
                                            placeholder="TGL DOK INOUT"
                                            
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
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-5">
                            
                            <div class="form-group">
                                <label class="control-label">
                                    WK INOUT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="WK_INOUT" 
                                        id="WK_INOUT"
                                        value="{$desc['WK_INOUT']}" 
                                        placeholder="WK INOUT" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi WK INOUT"
                                        
                                        data-rule-maxlength="16"
                                        data-msg-maxlength="WK INOUT tidak lebih dari 16 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    KD SAR ANGKUT INOUT <span class="required">*</span>
                                </label>
                                <select name="KD_SAR_ANGKUT_INOUT"
                                        id="KD_SAR_ANGKUT_INOUT"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan pilih kode dokumen"
                                        
                                        class="form-control">
                                        
                                    <option value="">-- SILAHKAN PILIH --</option>
                                    {section name=sar_angkut loop=$sar_angkut}
                                    {if $desc['KD_SAR_ANGKUT_INOUT'] == $sar_angkut[sar_angkut].KD_SAR_ANGKUT}
										{assign var='sell_kode' value='selected'}
									{else}
										{assign var='sell_kode' value=''}
									{/if}
                                    <option value="{$sar_angkut[sar_angkut].KD_SAR_ANGKUT}" {$sell_kode}>
                                        {$sar_angkut[sar_angkut].KD_SAR_ANGKUT} - {$sar_angkut[sar_angkut].NM_SAR_ANGKUT|upper}
                                    </option>
                                    {/section}
                                </select>
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO POL <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_POL" 
                                        id="NO_POL"
                                        value="{$desc['NO_POL']}" 
                                        placeholder="NO POL" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO POL"
                                        
                                        data-rule-maxlength="10"
                                        data-msg-maxlength="NO POL tidak lebih dari 10 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    PEL MUAT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="PEL_MUAT" 
                                        id="PEL_MUAT"
                                        value="{$desc['PEL_MUAT']}" 
                                        placeholder="PEL MUAT" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi PEL MUAT"
                                        
                                        data-rule-maxlength="5"
                                        data-msg-maxlength="PEL MUAT tidak lebih dari 5 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    PEL TRANSIT <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="PEL_TRANSIT" 
                                        id="PEL_TRANSIT" 
                                        value="{$desc['PEL_TRANSIT']}"
                                        placeholder="PEL TRANSIT"
                                        
                                        data-rule-maxlength="5"
                                        data-msg-maxlength="PEL TRANSIT tidak lebih dari 5 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    PEL BONGKAR <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="PEL_BONGKAR" 
                                        id="PEL_BONGKAR"
                                        value="{$desc['PEL_BONGKAR']}" 
                                        placeholder="PEL BONGKAR" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi PEL BONGKAR"
                                        
                                        data-rule-maxlength="5"
                                        data-msg-maxlength="PEL BONGKAR tidak lebih dari 5 karakter"
                                        
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
                                    VIN NUMBER <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="VIN_NUMBER" 
                                        id="VIN_NUMBER"
                                        value="{$desc['VIN_NUMBER']}" 
                                        placeholder="VIN NUMBER" 
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="VIN NUMBER tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO RANGKA <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_RANGKA" 
                                        id="NO_RANGKA"
                                        value="{$desc['NO_RANGKA']}" 
                                        placeholder="NO RANGKA" 
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="NO RANGKA tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO MESIN <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_MESIN" 
                                        id="NO_MESIN"
                                        value="{$desc['NO_MESIN']}" 
                                        placeholder="NO MESIN" 
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="NO MESIN tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TIPE <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="TIPE" 
                                        id="TIPE"
                                        value="{$desc['TIPE']}" 
                                        placeholder="TIPE" 
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="TIPE tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    WARNA <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="WARNA" 
                                        id="WARNA"
                                        value="{$desc['WARNA']}" 
                                        placeholder="WARNA" 
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="WARNA tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    MERK <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="MERK" 
                                        id="MERK"
                                        value="{$desc['MERK']}" 
                                        placeholder="MERK" 
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="MERK tidak lebih dari 20 karakter"
                                        
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
                            <input type="hidden" 
                          	   	   name="ID_DET_COARRICODECO" 
                           	   	   id="ID_DET_COARRICODECO" 
                            	   value="{$desc['ID_DET_COARRICODECO']}" />
                            
                           	<a data-href="{$this->basePath()}/pengiriman/terminal/edit/{$desc['ID_COARRICODECO']}" class="btn default ajaxify">
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
