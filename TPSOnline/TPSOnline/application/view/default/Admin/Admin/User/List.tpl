<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<!-- BEGIN RESIZE TABLE -->
<link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/ResizeTable/jquery.resizableColumns.css"/>
<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/ResizeTable/store.min.js"></script>
<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/ResizeTable/jquery.resizableColumns.min.js"></script>
<!-- END RESIZE TABLE -->

{literal}
<style type="text/css">
	.dataTables_filter input{
		width: 100%;
		min-width:250px;
		border: 1px solid #e5e5e5;
		padding: 10px 10px;
		height:35px;
	}

</style>

<script>
$(function(){
	$("table").resizableColumns({
		store: window.store
	});
});
</script>
  
{/literal}

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<form 	action="{$this->basePath()}/admin/user/delete" 
		method="post" 
		class="DeleteAll form-horizontal">    
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue-madison">
			<div class="portlet-title">
				<div class="caption">
					Daftar User
				</div>
				<div class="actions">
					<a data-href="{$this->basePath()}/admin/user/add" class="btn btn-default btn-sm ajaxify">
						<i class="fa fa-plus"></i> Tambah 
					</a>
					<a data-href="javascript:;" class="btn btn-default btn-sm">
						<i class="fa fa-file-excel-o"></i> Excel 
					</a>
					<a data-href="javascript:;" class="btn btn-default btn-sm">
						<i class="fa fa-cloud-upload"></i> Import 
					</a>
					<button class="btn btn-default btn-sm">
						<i class="fa fa-trash-o"></i> Hapus 
					</button>
					<!--
					<a href="javascript:;" class="btn btn-default btn-sm">
						<i class="fa fa-print"></i> Print 
					</a>
					-->
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="userTable">
					<thead>
					<tr role="row" class="heading">
						<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#userTable .checkboxes" data-noresize/></th>
                        <th>ID</th>
						<th>Username</th>
						<th>Perusahaan</th>
						<th>Group</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Status</th>
						<th data-noresize>&nbsp;&nbsp; Tindakan &nbsp;&nbsp;</th>
					</tr>
					</thead>
					
					<tbody></tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
</form>