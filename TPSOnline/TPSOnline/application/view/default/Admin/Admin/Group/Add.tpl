<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

{literal}
<script language="javascript">
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
<form 	action="{$this->basePath()}/admin/group/save" 
        method="post" 
        class="SubmitForm form-horizontal">
                        
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Group User
                </div>
                <div class="actions">
                	<a data-href="{$this->basePath()}/admin/group" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
                </div>
            </div>
            <div class="portlet-body form">
 
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Nama Group <span class="required">*</span>
                        </label>
                        <div class="col-md-4">
                            <input type="text" 
                                   name="NAMAGROUP"
                                   id="NAMAGROUP"
                                   
                                   placeholder="Masukan nama group" 
                                   maxlength="20"
                                    
                                   data-rule-required="true"
                                   data-msg-required="Silahkan isi nama group"
                                    
                                   data-rule-minlength="3"
                                   data-msg-minlength="Nama group tidak kurang dari 3 karakter"
                                    
                                   data-rule-maxlength="32"
                                   data-msg-maxlength="Nama group tidak lebih dari 32 karakter"
                                     
                                   data-rule-remote="{$this->basePath()}/admin/group/check"
                                   data-msg-remote="Nama group sudah terpakai"
                                   class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Keterangan<span class="required">&nbsp; </span>
                        </label>
                        <div class="col-md-4">
                        	<textarea name="KETERANGAN"
                                      id="KETERANGAN"
                                      
                                      placeholder="Masukan keterangan group"
                                      data-rule-maxlength="200"
                                      data-msg-maxlength="Nama group tidak lebih dari 200 karakter"
                                      class="form-control"></textarea>
                        </div>
                    </div>
                    
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="add" />
                            
                            <a data-href="{$this->basePath()}/admin/group" class="btn default ajaxify">
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
                <div class="tools"></div>
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
                                    class="table table-striped table-bordered table-hover">
                                    
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
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEEDIT_{$ItemChild['IDMODUL']}" 
                                                    id="ROLEEDIT_{$ItemChild['IDMODUL']}"
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLEDEL_{$ItemChild['IDMODUL']}" 
                                                    id="ROLEDEL_{$ItemChild['IDMODUL']}"
                                                    class="checkboxes GROUP_{$ItemChild['IDMODUL']}" />
                                        </td>
                                        
                                        <td align="center">
                                            <input 	type="checkbox" value="1" 
                                                    name="ROLERIP_{$ItemChild['IDMODUL']}" 
                                                    id="ROLERIP_{$ItemChild['IDMODUL']}"
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