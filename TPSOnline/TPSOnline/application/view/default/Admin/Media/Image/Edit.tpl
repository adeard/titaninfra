<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/admin/image/save" 
        method="post" enctype="multipart/form-data"
        class="EditForm form-horizontal">
<div class="row">
    <div class="col-md-12">
        <!-- BEGIN VALIDATION STATES-->
        <div class="portlet box blue-hoki">
            <div class="portlet-title">
                <div class="caption">
                    Informasi Gallery
                </div>
                <div class="actions">
                	<a data-href="{$this->basePath()}/admin/image" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-arrow-left"></i> Kembali 
					</a>
                </div>
            </div>
            <div class="portlet-body form">
                <div class="form-body">
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Title <span class="required">*</span>
                        </label>
                        <div class="col-md-4">
                            <input 	type="text" 
                                    name="TITLE" 
                                    id="TITLE" 
                                    value="{$desc['TITLE']}" 
                                    placeholder="Masukan Title" 
                                    
                                    data-rule-required="true"
                                    data-msg-required="Silahkan isi Title"
                                    
                                    class="form-control">
                        </div>
                    </div>
                                
                    <div class="form-group">
                        <label class="control-label col-md-3">
                            Keterangan <span class="required">&nbsp; </span>
                        </label>
                        <div class="col-md-4">
                            <textarea name="KETERANGAN"
                                      id="KETERANGAN"
                                      class="form-control">{$desc['KETERANGAN']}</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                    	<label class="control-label col-md-3">
                            Upload Images <span class="required">&nbsp; </span>
                        </label>
                        <div class="col-md-4">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 300px; height: auto;">
                                	{if $desc['USERFILES'] == ""}
                                      	<img src="{$this->basePath()}{$smarty.const.IMAGES_DIR}/header/noimage.jpg">
                                   	{else}
                                      	<img src="{$this->basePath()}{$smarty.const.IMAGES_DIR}/userfiles/{$userinfo->IDPERUSAHAAN}/header/thumbnail/{$desc['USERFILES']}">
                                   	{/if}
                                </div>
                                
                                <div id="files" 
                                	 class="fileinput-preview fileinput-exists thumbnail" 
                                     style="max-width: 300px; max-height: 150px;">
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
                    </div>
                    
                </div>
                <div class="form-actions">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <input type="hidden" name="act" id="act" value="edit" />
                            <input type="hidden" name="IDIMAGE" id="IDIMAGE" 
                            	   value="{$desc['IDIMAGE']}" />
                            <input type="submit" class="btn green" value="Edit" />
                            <a data-href="{$this->basePath()}/admin/image" class="btn default ajaxify">Batal</a>
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

<script type='text/javascript' src='{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/blueimp/jquery.ui.widget.js'></script> 
<script type='text/javascript' src='{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/blueimp/jquery.iframe-transport.js'></script> 
<script type='text/javascript' src='{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/assets/global/plugins/blueimp/jquery.fileupload.js'></script> 

 
{literal}
<script type="text/javascript">
$(document).ready(function () {
	'use strict';
	var url = base_url+"upload/images?thumb=thumbnail&&size=300x92";
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
