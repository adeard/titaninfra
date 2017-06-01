<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<script src="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/custom/custom.selecbox.js"></script>
{literal}
<script type="text/javascript">
$(document).ready(function() {
	/** Get kota */
	/**
	var IDKOTA 		=  "{/literal}{$desc['IDKOTA']}{literal}";
	var IDPROVINSI 	=  "{/literal}{$desc['IDPROVINSI']}{literal}";
	
	var url = '/service/getKota?IDPROVINSI='+IDPROVINSI;
	$('#IDKOTA').empty();
	
	$.getJSON(url,{},
		function(data){
			for(i=0;i<data.length;i++){
				if(IDKOTA == data[i].IDKOTA){
					$('#IDKOTA').append(new Option(data[i].KOTA, data[i].IDKOTA));
					$('#IDKOTA').val(IDKOTA);
				}else{
					$('#IDKOTA').append(new Option(data[i].KOTA, data[i].IDKOTA));
					
				}
			}        
		}
	);
	*/
	/** End Get kota */
	 
	getRolesEdit();
});

function getRolesEdit(){
	var IDGROUP = $("#IDGROUP").val();
	if(IDGROUP != '')
	{
		IDGROUP = IDGROUP;
	}else{
		IDGROUP = 0;
	}
	
	{/literal}
	{section name=tabs loop=$tabs}
		var ORDINAL = {$tabs[tabs].ORDINAL};
		var IDUSER  = '{$desc["IDUSER"]}';
		
		$.post( base_url+"admin/user/jsontabs", { 'IDUSER':IDUSER, 'ORDINAL':ORDINAL, IDGROUP:IDGROUP})
		.done(function( data ) {
			var response = jQuery.parseJSON(data);
			if(response.length > 0)
			{
				response.forEach(function(result)
				{
					/** CHECKED VIEW */
					if(result.ROLEVIEW != 0)
					{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', true);
						$("input.GROUP_"+ result.IDMODUL).removeAttr("disabled");
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}else{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', false);
						$('#ROLEVIEW_' + result.IDMODUL).removeAttr('checked');
						$("input.GROUP_"+ result.IDMODUL).attr("disabled", true);
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}
					
					/** CHECKED ADD */
					if(result.ROLEADD != 0)
					{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', false);
						$('#ROLEADD_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED EDIT */
					if(result.ROLEEDIT != 0)
					{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', false);
						$('#ROLEEDIT_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED DELETE */
					if(result.ROLEDEL != 0)
					{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', false);
						$('#ROLEDEL_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED REPORT */
					if(result.ROLERIP != 0)
					{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', false);
						$('#ROLERIP_' + result.IDMODUL).removeAttr('checked');
					}
					
					$.uniform.update(".checkboxes");
				});
			}else{
				$(':checkbox').prop('checked', false);
				$(':checkbox').removeAttr('checked');
				$(':checkbox').removeAttr("disabled");
				$("input[type=checkbox][data-target]").attr("disabled", true);
				$.uniform.update(".checkboxes");
			}
		});
	{/section}
	{literal}
}

function getRoles(){
	$("input[type=submit]").attr("disabled", true);
	var IDGROUP = $("#IDGROUP").val();
	if(IDGROUP != '')
	{
		IDGROUP = IDGROUP;
	}else{
		IDGROUP = 0;
	}
	
	{/literal}
	{section name=tabs loop=$tabs}
		var ORDINAL = {$tabs[tabs].ORDINAL};
		$.post( base_url+"admin/user/jsontabs", { 'IDUSER':'', 'ORDINAL':ORDINAL, IDGROUP:IDGROUP})
		.done(function( data ) {
			var response = jQuery.parseJSON(data);
			if(response.length > 0)
			{
				response.forEach(function(result)
				{
					/** CHECKED VIEW */
					if(result.ROLEVIEW != 0)
					{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', true);
						$("input.GROUP_"+ result.IDMODUL).removeAttr("disabled");
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
			
					}else{
						$('#ROLEVIEW_' + result.IDMODUL).prop('checked', false);
						$('#ROLEVIEW_' + result.IDMODUL).removeAttr('checked');
						$("input.GROUP_"+ result.IDMODUL).attr("disabled", true);
						$(".ROLEVIEW_"+ result.IDMODUL).click("enable_cb_" +result.IDMODUL);
					}
					
					/** CHECKED ADD */
					if(result.ROLEADD != 0)
					{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEADD_' + result.IDMODUL).prop('checked', false);
						$('#ROLEADD_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED EDIT */
					if(result.ROLEEDIT != 0)
					{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEEDIT_' + result.IDMODUL).prop('checked', false);
						$('#ROLEEDIT_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED DELETE */
					if(result.ROLEDEL != 0)
					{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLEDEL_' + result.IDMODUL).prop('checked', false);
						$('#ROLEDEL_' + result.IDMODUL).removeAttr('checked');
					}
					
					/** CHECKED REPORT */
					if(result.ROLERIP != 0)
					{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', true);
					}else{
						$('#ROLERIP_' + result.IDMODUL).prop('checked', false);
						$('#ROLERIP_' + result.IDMODUL).removeAttr('checked');
					}
					
					$.uniform.update(".checkboxes");
				});
				
				$("input[type=submit]").removeAttr("disabled", true);
			}else{
				$(':checkbox').prop('checked', false);
				$(':checkbox').removeAttr('checked');
				$(':checkbox').removeAttr("disabled");
				$("input[type=checkbox][data-target]").attr("disabled", true);
				$.uniform.update(".checkboxes");
			}
		});
	{/section}
	{literal}
}

$(function() {
	{/literal}
	enable_cb_all();
	$(".ROLEVIEW_ALL").click(enable_cb_all);
	
	{section name=module loop=$module}
	enable_cb_{$module[module].IDMODUL}();
	$(".ROLEVIEW_{$module[module].IDMODUL}").click(enable_cb_{$module[module].IDMODUL});
	{/section}
	{literal}
});
{/literal}

function enable_cb_all() {
	
	if (this.checked) {
		{section name=module loop=$module}
		$("input.GROUP_{$module[module].IDMODUL}").removeAttr("disabled");
		{/section}
	} else {
		{section name=module loop=$module}
		$("input.GROUP_{$module[module].IDMODUL}").attr("disabled", true);
		$("input.GROUP_{$module[module].IDMODUL}").prop('checked', false);	
		{/section}			
	}
	
}

{section name=module loop=$module}
function enable_cb_{$module[module].IDMODUL}() {
	
	if (this.checked) {
		$("input.GROUP_{$module[module].IDMODUL}").removeAttr("disabled");
	} else {
		$("input.GROUP_{$module[module].IDMODUL}").attr("disabled", true);
		$("input.GROUP_{$module[module].IDMODUL}").prop('checked', false); 	
	}
	
	$.uniform.update(".checkboxes");
}
{/section}
{literal}
</script>
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/admin/user/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm form-horizontal">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi User
                </div>
                <div class="actions">
                	<a data-href="{$this->basePath()}/admin/user" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
                </div>
            </div>
            
            <div class="portlet-body form">
                <div class="form-body">
                
                	<!-- BEGIN ROW -->
                    <div class="row">
                        <!-- BEGIN COLOMS -->
                        <div class="col-md-3">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="width: 280px; height: 327px;">
                                    {if $desc['USERFILES'] == ""}
                                        <img src="{$this->basePath()}{$smarty.const.IMAGES_DIR}/noimage.png" alt=""/>
                                    {else}
                                        <img src="{$this->basePath()}{$smarty.const.IMAGES_DIR}/userfiles/{$userinfo->IDPERUSAHAAN}/account/{$desc['USERFILES']}">
                                    {/if}
                                    
                                </div>
                                
                                <div id="files" 
                                     class="fileinput-preview fileinput-exists thumbnail" 
                                     style="width: 280px; height: 327px;">
                                </div>
                                <div>
                                    <span class="btn default btn-file">
                                        <span class="fileinput-new">
                                            Select image 
                                        </span>
                                        <span class="fileinput-exists">
                                            Change  
                                        </span>
                                        <input  id="fileupload" 
                                                type="file" 
                                                name="files" 
                                                class="default" multiple>
                                                
                                        <input 	type="hidden" 
                                                name="USERFILES" 
                                                id="USERFILES"/>
                                        
                                        <input 	type="hidden" 
                                                name="USERFILESOLD" 
                                                id="USERFILESOLD"
                                                value="{$desc['USERFILES']}"/>
                                                
                                    </span>
                                    <a href="javascript:;" class="btn default fileinput-exists" data-dismiss="fileinput">
                                    Remove </a>
                                </div>
                            </div>
                        </div>
                        <!-- END COLOMS -->
                        
                        <!-- BEGIN COLOMS -->
                        <div class="col-md-9">
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Username <span class="required">*</span>
                                </label>
                                <div class="col-md-4">
                                    <input type="text"
                                           placeholder="Masukan username" 
                                           
                                           disabled="disabled"
                                           value="{$desc['USERNAME']}"
                                           class="form-control">
                                </div>
                            </div>
                                        
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Password <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password"
                                           name="PASSWORD1"
                                           id="PASSWORD1"
                                           
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi password"
                                            
                                           data-rule-minlength="5"
                                           data-msg-minlength="Password tidak kurang dari 5 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Password tidak lebih dari 20 karakter" 
                                           value="{$password}"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Konfirm Password <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input type="password"
                                           name="PASSWORD2"
                                           id="PASSWORD2"
                                           
                                           placeholder="Masukan konfirm password" 
                                           data-rule-required="true"
                                           data-msg-required="Silahkan isi konfirm password"
                                            
                                           data-rule-minlength="5"
                                           data-msg-minlength="Password tidak kurang dari 5 karakter"
                                            
                                           data-rule-maxlength="20"
                                           data-msg-maxlength="Password tidak lebih dari 20 karakter" 
                                            
                                           data-rule-equalTo="#PASSWORD1"  
                                           data-msg-equalTo="Konfirm password tidak sesuai"
                                           value="{$password}"
                                           class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Depan<span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            name="NAMADEPAN" id="NAMADEPAN" 
                                            value="{$desc['NAMADEPAN']}" 
                                            placeholder="Masukan nama" 
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi nama depan"
                                            
                                            data-rule-minlength="3"
                                            data-msg-minlength="Nama tidak kurang dari 3 karakter"
                                            
                                            data-rule-maxlength="32"
                                            data-msg-maxlength="Nama tidak lebih dari 32 karakter" 
                                            class="form-control NAMADEPAN">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Nama Belakang <span class="required">&nbsp; </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            name="NAMABELAKANG" id="NAMABELAKANG" 
                                            value="{$desc['NAMABELAKANG']}" 
                                            placeholder="Masukan nama belakang"
                                            class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Jenis Kelamin <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="icheck-inline">
                                        {if $desc['JNSKELAMIN'] == 'F'}
                                            {assign var='male_checked' value=''}
                                            {assign var='female_checked' value='checked'}
                                        {else}
                                            {assign var='male_checked' value='checked'}
                                            {assign var='female_checked' value=''}
                                        {/if}
                                        <label>
                                            <input 	type="radio" 
                                                    name="JNSKELAMIN" 
                                                    id="JNSKELAMIN" 
                                                    class="icheck"
                                                    {$male_checked}
                                                    value="M" /> Laki-laki
                                        </label>
                                        <label>
                                            <input 	type="radio" 
                                                    name="JNSKELAMIN"
                                                    id="JNSKELAMIN"
                                                    class="icheck"
                                                    {$female_checked}
                                                    value="F" /> Perempuan
                                        </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Tanggal Lahir <span class="required">*</span>
                                </label>
                                <div class="col-md-4">
                                    <div class="input-group input-medium date date-picker">
                                        <input 	type="text" 
                                                name="TGLLAHIR"
                                                id="TGLLAHIR"
                                                value="{$desc['TGLLAHIR']|date_format:"%d/%m/%Y"}"
                                                placeholder="Masukan tanggal lahir"
                                                
                                                data-rule-required="true"
                                            	data-msg-required="Silahkan isi tanggal"
                                            
                                                class="form-control TGLLAHIR" readonly>
                                        <span class="input-group-btn">
                                            <button class="btn default" type="button"><i class="fa fa-calendar"></i></button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Tempat Lahir <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" 
                                            placeholder="Masukan tempat lahir"
                                            name="TMPLAHIR" 
                                            id="TMPLAHIR"
                                            value="{$desc['TMPLAHIR']}"
                                            class="form-control TMPLAHIR">
                                </div>
                            </div>
                                    
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Email <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input  type="text" 
                                            placeholder="Masukan address email" 
                                            name="EMAIL" 
                                            id="EMAIL"
                                            value="{$desc['EMAIL']}"
                                            
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi address email"
                                            
                                            data-rule-email="true"
                                            data-msg-email="address email tidak valid" 
                                            
                                            class="form-control EMAIL">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    HP <span class="required">* </span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="text" placeholder="Masukan no HP"
                                            name="HP" 
                                            id="HP"
                                            value="{$desc['HP']}"
                                            
                                            data-rule-required="true"
                                            data-msg-required="Silahkan isi nomer handphone"
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer handphone tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control HP">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Telp <span class="required">&nbsp;</span>
                                </label>
                                <div class="col-md-4">
                                    <input 	type="TELP" placeholder="Masukan no telp"
                                            name="TELP" 
                                            id="TELP"
                                            value="{$desc['TELP']}"
                                            
                                            data-rule-number="true"
                                            data-msg-number="Nomer telp tidak valid"
                                            maxlength="18"
                                            
                                            class="form-control TELP">
                                </div>
                            </div>
                            
                            
                            <div class="form-group">
                                <label class="control-label col-md-3">
                                    Group <span class="required">*</span>
                                </label>
                                <div class="col-md-4">
                                    <select name="IDGROUP" 
                                            id="IDGROUP" 
                                            data-rule-required="true"
                                            data-msg-required="Silahkan pilih group" 
                                            onchange="getRoles();"
                                            class="form-control">
                                                
                                        <option value="">-- SILAHKAN PILIH --</option>
                                        {section name=group loop=$group}
                                        {if $desc['IDGROUP'] == $group[group].IDGROUP}
                                            {assign var='sell_group' value='selected'}
                                        {else}
                                            {assign var='sell_group' value=''}
                                        {/if}
                                        <option value="{$group[group].IDGROUP}" {$sell_group}>
                                            {$group[group].NAMAGROUP|upper}
                                        </option>
                                        {/section}
                                    </select>
                                    <input type="hidden" id="REFIDGROUP" name="REFIDGROUP">   
                                </div>
                            </div>
                            
                            
                		</div>
                        <!-- END COLOMS -->
                    </div>
                    <!-- END ROW -->

                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDUSER" id="IDUSER" 
                                   value="{$desc['IDUSER']}" />
                            <input type="hidden" name="USERNAME" id="USERNAME" 
                                   value="{$desc['USERNAME']}" />
                            <input type="hidden" name="ISADMIN" id="ISADMIN" 
                                   value="1" />
                                   
                            <input type="hidden" name="IDPERUSAHAAN" id="IDPERUSAHAAN" 
                            	   value="{$desc['IDPERUSAHAAN']}"
                            	   class="IDPERUSAHAAN">
                            
                            <a data-href="{$this->basePath()}/admin/user" class="btn default ajaxify">
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

<!-- BEGIN TABLE-->
<div class="row">
	<div class="col-md-12">
        <!-- BEGIN EXAMPLE TABLE PORTLET-->
        <div class="portlet box blue">
            <div class="portlet-title">
                <div class="caption">
                    List Role User
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="javascript:;" class="reload"></a>
                </div>
            </div>
            <div class="portlet-body">
            	<div class="panel">
                    <input type="checkbox" name="selectall" id="selectall" 
                           class="group-checkable ROLEVIEW_ALL" data-set=".checkboxes"/>
                           <strong>Pilih Semua</strong>
                </div>
                
            	<div class="tabbable-custom">
                    <ul class="nav nav-tabs">
                    	{section name=tabs loop=$tabs}
                            {if $tabs[tabs].ORDINAL == 1}
                                {assign var='tab_active' value='active'}
                            {else}
                                {assign var='tab_active' value=''}
                            {/if}
                            <li class="{$tab_active}">
                                <a href="#{$tabs[tabs].KODE}" data-toggle="tab">{$tabs[tabs].NAMAMODUL}</a>
                            </li>
                        {/section}
                    </ul>
                    <div class="tab-content">
                    	<!-- MODULES -->
                        {foreach from=$tabmodule item=Item}
                        <div class="tab-pane {$Item['TabActive']}" id="{$Item['TABID']}">
                            <table 	cellpadding="0" 
                                    cellspacing="0" 
                                    border="0" 
                                    class="table table-striped table-bordered">
                                    
                                <thead>
                                <tr>
                                    <th width="50%">Page</th>
                                    <th width="10%" style="text-align:center">List</th>
                                    <th width="10%" style="text-align:center">Add</th>
                                    <th width="10%" style="text-align:center">Edit</th>
                                    <th width="10%" style="text-align:center">Delete</th>
                                    <th width="10%" style="text-align:center">Report</th>
                                </tr>
                                </thead>
                                <tbody>
                                    {foreach from=$Item['Child'] item=ItemChild}
                                    <tr>
                                        <td>
                                           {$ItemChild['NAMAMODUL']}
                                            <input 	type="hidden" name="IDMODUL[]" id="IDMODUL" 
                                                    value="{$ItemChild['IDMODUL']}" />
                                            
                                            <input 	type="hidden" name="ORDINAL[]" id="ORDINAL" 
                                                    value="{$Item['ORDINAL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEVIEW_{$ItemChild['IDMODUL']}" 
                                                    id="ROLEVIEW_{$ItemChild['IDMODUL']}" 
                                                    class="checkboxes ROLEVIEW_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEADD_{$ItemChild['IDMODUL']}" 
                                                    id="ROLEADD_{$ItemChild['IDMODUL']}" 
                                                    data-target="{$ItemChild['IDMODUL']}"
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_{$ItemChild['IDMODUL']}" 
                                                    id="ROLEEDIT_{$ItemChild['IDMODUL']}" 
                                                    data-target="{$ItemChild['IDMODUL']}"
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_{$ItemChild['IDMODUL']}" 
                                                    id="ROLEDEL_{$ItemChild['IDMODUL']}"
                                                    data-target="{$ItemChild['IDMODUL']}" 
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_{$ItemChild['IDMODUL']}" 
                                                    id="ROLERIP_{$ItemChild['IDMODUL']}" 
                                                    data-target="{$ItemChild['IDMODUL']}"
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                    </tr>
                                    {/foreach}
                                
                                </tbody>
                            </table>
                        </div>
                        {/foreach}
                        <!-- END MODULES -->
                    </div>
                </div>
                
            </div>
        </div>
        <!-- END EXAMPLE TABLE PORTLET-->
    </div>
</div>
<!-- END TABLE-->
</form>

<script type='text/javascript' src='{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/blueimp/jquery.ui.widget.js'></script> 
<script type='text/javascript' src='{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/blueimp/jquery.iframe-transport.js'></script> 
<script type='text/javascript' src='{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/blueimp/jquery.fileupload.js'></script>

{literal}
<script type="text/javascript">
$(document).ready(function () {
	'use strict';
	var url = base_url+"upload/images";
	$('#fileupload').fileupload({
		add: function(e, data) {
			var uploadErrors = [];
			var acceptFileTypes = /^image\/(gif|jpe?g|png)$/i;
			if(!acceptFileTypes.test(data.originalFiles[0]['type'])) {
				uploadErrors.push('Not an accepted file type');
			}
			
			/** 
			* Ukuran yg dipakai byte 
			* 1 KB = 1024 byte
			*/
			
			if(data.originalFiles[0]['size'] > 1048576) {
				uploadErrors.push('File terlalu besar, maksimal 1 MB');
			}
			if(uploadErrors.length > 0) {
				alert(uploadErrors.join("\n"));
			} else {
				data.submit();
			}
		},
		url: url,
		dataType: 'json',
		autoUpload: false,
		// acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
		// maxFileSize: 5000000,
		done: function (e, data) {
			$.each(data.result.files, function (index, file) {
				$('#files').html("<img src='{/literal}{$smarty.const.IMAGES_DIR}{literal}/temp/"+file.name+"'>");
				$('#USERFILES').val(file.name);
			});
			
		},
		fail: function (e, data) {
			$.each(data.messages, function (index, error) {
				$('<p style="color: red;">Upload file error: ' + error + '<i class="elusive-remove" style="padding-left:10px;"/></p>')
				.appendTo('#files');
			});
		},
		progressall: function (e, data) {
			var progress = parseInt(data.loaded / data.total * 100, 10);

			$('.progress-bar').css('width', progress + '%');
			
		}
	});
});  
</script>
{/literal}