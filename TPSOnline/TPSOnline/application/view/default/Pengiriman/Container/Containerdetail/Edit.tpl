<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/pengiriman/containerdetail/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm horizontal-form">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    DETAIL COARRI-CODECO CONTAINER
                </div>
                
                <div class="actions">
                	<a data-href="{$this->basePath()}/pengiriman/container/edit/{$desc['ID_COARRICODECO']}" class="btn btn-default btn-sm ajaxify">
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
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO SEGEL <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_SEGEL" 
                                        id="NO_SEGEL"
                                        value="{$desc['NO_SEGEL']}"
                                        placeholder="NO SEGEL" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO SEGEL"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="NO SEGEL tidak lebih dari 20 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    JNS CONT <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="JNS_CONT" 
                                        id="JNS_CONT"
                                        value="{$desc['JNS_CONT']}"
                                        placeholder="JNS CONT" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi JNS CONT"
                                        
                                        data-rule-maxlength="1"
                                        data-msg-maxlength="JNS CONT tidak lebih dari 1 karakter"
                                        
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
                                    NO MASTER BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_MASTER_BL_AWB" 
                                        id="NO_MASTER_BL_AWB"
                                        value="{$desc['NO_MASTER_BL_AWB']}"
                                        placeholder="NO MASTER BL AWB"
                                        
                                        data-rule-maxlength="30"
                                        data-msg-maxlength="NO MASTER BL AWB tidak lebih dari 30 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL MASTER BL AWB <span class="required">&nbsp;</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_MASTER_BL_AWB"
                                            id="TGL_MASTER_BL_AWB"
                                            value="{$desc['TGL_MASTER_BL_AWB']|date_format:"%d/%m/%Y"}"
                                            placeholder="TGL MASTER BL AWB"
                                            
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
                            
                        </div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-1"></div>
                        <!-- END COLS -->
                        
                        <!-- BEGIN COLS -->
                    	<div class="col-md-5">
                           
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
                                    FL CONT KOSONG <span class="required">*</span>
                                </label>
                                <select name="FL_CONT_KOSONG"
                                        id="FL_CONT_KOSONG"
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan pilih kode dokumen"
                                        
                                        class="form-control">
                                        
                                    <option value="">-- SILAHKAN PILIH --</option>
                                    {section name=flcont loop=$flcont}
                                    {if $desc['FL_CONT_KOSONG'] == $flcont[flcont].ID_FL_CONT}
										{assign var='sell_kode' value='selected'}
									{else}
										{assign var='sell_kode' value=''}
									{/if}
                                    <option value="{$flcont[flcont].ID_FL_CONT}" {$sell_kode}>
                                        {$flcont[flcont].ID_FL_CONT} - {$flcont[flcont].NM_FL_CONT|upper}
                                    </option>
                                    {/section}
                                </select>
                                
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    ISO CODE <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="ISO_CODE" 
                                        id="ISO_CODE"
                                        value="{$desc['ISO_CODE']}" 
                                        placeholder="ISO CODE" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi ISO CODE"
                                        
                                        data-rule-maxlength="20"
                                        data-msg-maxlength="ISO CODE tidak lebih dari 20 karakter"
                                        
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
                                    KD KANTOR PABEAN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="KD_KANTOR_PABEAN" 
                                        id="KD_KANTOR_PABEAN"
                                        value="{$desc['KD_KANTOR_PABEAN']}" 
                                        placeholder="KD KANTOR PABEAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi KD KANTOR PABEAN"
                                        
                                        data-rule-maxlength="6"
                                        data-msg-maxlength="KD KANTOR PABEAN tidak lebih dari 6 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO DAFTAR PABEAN <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_DAFTAR_PABEAN" 
                                        id="NO_DAFTAR_PABEAN"
                                        value="{$desc['NO_DAFTAR_PABEAN']}" 
                                        placeholder="NO DAFTAR PABEAN" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO DAFTAR PABEAN"
                                        
                                        data-rule-maxlength="6"
                                        data-msg-maxlength="NO DAFTAR PABEAN tidak lebih dari 6 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL DAFTAR PABEAN <span class="required">*</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_DAFTAR_PABEAN"
                                            id="TGL_DAFTAR_PABEAN"
                                            value="{$desc['TGL_DAFTAR_PABEAN']|date_format:"%d/%m/%Y"}"
                                            placeholder="TGL DAFTAR PABEAN"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO SEGEL BC <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_SEGEL_BC" 
                                        id="NO_SEGEL_BC"
                                        value="{$desc['NO_SEGEL_BC']}" 
                                        placeholder="NO SEGEL BC" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO SEGEL BC"
                                        
                                        data-rule-maxlength="30"
                                        data-msg-maxlength="NO SEGEL BC tidak lebih dari 30 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL SEGEL BC <span class="required">*</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_SEGEL_BC"
                                            id="TGL_SEGEL_BC"
                                            value="{$desc['TGL_SEGEL_BC']|date_format:"%d/%m/%Y"}"
                                            placeholder="TGL SEGEL BC"
                                            
                                            class="form-control" readonly>
                                     <span class="input-group-btn">
                                        <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                    </span>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    NO DOK IJIN TPS <span class="required">*</span>
                                </label>
                                <input 	type="text" 
                                        name="NO_DOK_IJIN_TPS" 
                                        id="NO_DOK_IJIN_TPS"
                                        value="{$desc['NO_DOK_IJIN_TPS']}"
                                        placeholder="NO DOK IJIN TPS" 
                                        
                                        data-rule-required="true"
                                        data-msg-required="Silahkan isi NO DOK IJIN TPS"
                                        
                                        data-rule-maxlength="30"
                                        data-msg-maxlength="NO DOK IJIN TPS tidak lebih dari 30 karakter"
                                        
                                        class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label">
                                    TGL DOK IJIN TPS <span class="required">*</span>
                                </label>
                                <div class="input-group input-medium date date-picker">
                                	<input 	type="text" 
                                            name="TGL_DOK_IJIN_TPS"
                                            id="TGL_DOK_IJIN_TPS"
                                            value="{$desc['TGL_DOK_IJIN_TPS']|date_format:"%d/%m/%Y"}"
                                            placeholder="TGL DOK IJIN TPS"
                                            
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
                          	   	   name="ID_DET_COARRICODECO" 
                           	   	   id="ID_DET_COARRICODECO" 
                            	   value="{$desc['ID_DET_COARRICODECO']}" />
                            
                           	<a data-href="{$this->basePath()}/pengiriman/container/edit/{$desc['ID_COARRICODECO']}" class="btn default ajaxify">
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
