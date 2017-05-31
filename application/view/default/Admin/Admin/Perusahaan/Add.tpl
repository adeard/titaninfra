{literal}
<script>
jQuery(document).ready(function() { 
   FormValidation.init();
   FormiCheck.init();
   FormSamples.init();
   ComponentsPickers.init();
});
</script>
{/literal}
    
<form 	action="{$this->basePath()}/sdm/organisasi/perusahaan/save" 
        method="post" enctype="multipart/form-data"
        class="SubmitTableForm horizontal-form">
                    
<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Informasi Perusahaan</h4>
</div>

<!-- BEGIN MODAL BODY -->
<div class="modal-body">
    <!-- BEGIN ROW -->
    <div class="row">
        
        <!-- BEGIN COLS-MD-12 -->
        <div class="col-md-12">
        
            <!-- BEGIN COLS-MD-6 -->
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label">
                        Nama Perusahaan <span class="required">* </span>
                    </label>
                    <input type="text" 
                           name="NAMA"
                           id="NAMA"
                           
                           placeholder="Masukan nama perusahaan" 
                           maxlength="20"
                           
                           data-rule-required="true"
                           data-msg-required="Silahkan isi nama perusahaan"
                            
                           data-rule-minlength="3" 
                           data-msg-minlength="Nama tidak kurang dari 3 karakter"
                            
                           data-rule-maxlength="20"
                           data-msg-maxlength="Nama tidak lebih dari 20 karakter"
                           class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        N.P.W.P <span class="required">*</span>
                    </label>
                    <input 	type="text" 
                            placeholder="Masukan nomor NPWP"
                            name="NPWP" 
                            id="NPWP"
                            value="{$desc['NPWP']}"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Provinsi <span class="required">*</span>
                    </label>
                    <select name="IDPROVINSI" 
                            id="IDPROVINSI" 
                            class="form-control"
                            onchange="return onChangeMenuKota(this.value);">
                        
                        <option value="">-- SILAHKAN PILIH --</option>
                        {section name=provinsi loop=$provinsi}
                        <option value="{$provinsi[provinsi].IDPROVINSI}">
                            {$provinsi[provinsi].PROVINSI|upper}
                        </option>
                        {/section}
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Alamat <span class="required">*</span>
                    </label>
                    <textarea placeholder="Masukan alamat"
                              name="ALAMAT" 
                              id="ALAMAT"
                              
                              data-rule-maxlength="200"
                              data-msg-maxlength="Alamat tidak lebih dari 200 karakter"
                              
                              class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Kode Pos <span class="required">*</span>
                    </label>
                    <input 	type="text" 
                            placeholder="Masukan kode pos"
                            name="KODEPOS" 
                            id="KODEPOS"
                            
                            data-rule-number="true"
                            data-msg-number="Kode pos tidak valid"
                            
                            data-rule-rangelength="[5,5]"
                            data-msg-rangelength="Kode pos tidak valid"
                            
                            maxlength="5"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Telp <span class="required">*</span>
                    </label>
                    <input 	type="text" placeholder="Masukan no telp"
                            name="TELP" 
                            id="TELP"
                            
                            data-rule-number="true"
                            data-msg-number="Nomer telp tidak valid"
                            maxlength="18"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Fax <span class="required">*</span>
                    </label>
                    <input 	type="text" placeholder="Masukan no telp"
                            name="FAX" 
                            id="FAX"
                            
                            data-rule-number="true"
                            data-msg-number="Nomer fax tidak valid"
                            maxlength="18"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Email <span class="required">*</span>
                    </label>
                    <input 	type="text" 
                            placeholder="Masukan address email" 
                            name="EMAIL" 
                            id="EMAIL"
                            
                            data-rule-email="true"
                            data-msg-email="email address tidak valid" 
                            
                            class="form-control">
                </div>
            </div>
            <!-- END COLS-MD-6 -->
            
            <!-- BEGIN COLS-MD-6 -->
            <div class="col-md-6">
                
                <div class="form-group">
                    <label class="control-label">
                       Kota <span class="required">*</span>
                    </label>
                    <select name="IDKOTA" 
                            id="IDKOTA" 
                            class="form-control IDKOTA">
                        <option value="">-- SILAHKAN PILIH --</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Tanggal Mulai <span class="required">*</span>
                    </label>
                    <div class="input-group input-medium date date-picker">
                        <input 	type="text" 
                                name="TGLMULAI"
                                id="TGLMULAI"
                                value="{$desc['TGLMULAI']|date_format:"%d/%m/%Y"}"
                                placeholder="Masukan tanggal mulai" 
                                
                                data-rule-required="true"
                                data-msg-required="Silahkan isi tanggal mulai"

                                class="form-control" readonly>
                         <span class="input-group-btn">
                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Tahun Fiskal <span class="required">*</span>
                    </label>
                    <input 	type="text" 
                            placeholder="Masukan Tahun Fiskal"
                            name="TAHUNFISKAL" 
                            id="TAHUNFISKAL"
                            value="{$desc['TAHUNFISKAL']}"
                            
                            data-rule-number="true"
                            data-msg-number="Tahun Fiskal tidak valid"
                            
                            data-rule-rangelength="[4,4]"
                            data-msg-rangelength="Tahun Fiskal tidak valid"
                            
                            maxlength="4"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        No Seri Faktur Pajak <span class="required">*</span>
                    </label>
                    <input  type="text" 
                            placeholder="Masukan nomor faktur pajak"
                            name="NOPAJAK" 
                            id="NOPAJAK" 
                            value="{$desc['NOPAJAK']}"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        N.P.W.P <span class="required">*</span>
                    </label>
                    <input 	type="text" 
                            placeholder="Masukan nomor NPWP"
                            name="NPWP" 
                            id="NPWP"
                            value="{$desc['NPWP']}"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        P.K.P <span class="required">*</span>
                    </label>
                    <input  type="text" 
                            placeholder="Masukan PKP"
                            name="PKP" 
                            id="PKP" 
                            value="{$desc['PKP']}"
                            
                            class="form-control">
                </div>
                
                <div class="form-group">
                    <label class="control-label">
                        Tanggal P.K.P <span class="required">*</span>
                    </label>
                    <div class="input-group input-medium date date-picker">
                        <input 	type="text" 
                                name="TGLPKP"
                                id="TGLPKP"
                                value="{$desc['TGLPKP']|date_format:"%d/%m/%Y"}"
                                placeholder="Masukan tanggal PKP" 
                                
                                data-rule-required="true"
                                data-msg-required="Silahkan isi tanggal PKP"

                                class="form-control" readonly>
                         <span class="input-group-btn">
                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                </div>
                
                
            </div>
            <!-- END COLS-MD-6 -->
            
        </div>
        <!-- END COLS-MD-12 -->
        
    </div>
    <!-- END ROW -->
</div>
<!-- END MODAL BODY -->

<!-- BEGIN MODAL FOOTER -->
<div class="modal-footer">
    <input type="hidden" name="act" id="act" value="add" />
    <input type="hidden" name="PARENT" id="PARENT" value="{$PARENT}" />
    <input type="hidden" name="LEVEL" id="LEVEL" value="1" />
    <button type="submit" class="btn blue">Simpan</button>
    <button type="button" class="btn default" data-dismiss="modal">Batal</button>
</div>
<!-- END MODAL FOOTER -->
</form>

