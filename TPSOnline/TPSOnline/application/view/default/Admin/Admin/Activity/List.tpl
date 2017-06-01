<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
{$this->partial("layout/layoutcontent")}
{$this->partial("layout/breadcrumbs")}
<!-- END PAGE HEADER-->

<style type="text/css">
	.dataTables_filter input{
		width: 100%;
		min-width:250px;
		border: 1px solid #e5e5e5;
		padding: 10px 10px;
		height:35px;
	}
	
	input.checkboxes{
		margin-left:5px;
	}
</style>

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->  
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box green-haze">
			<div class="portlet-title">
				<div class="caption">
					User Activity
				</div>
				<div class="actions">
					
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<table 	cellpadding="0" 
							cellspacing="0" 
							border="0" 
							
							class="table table-striped table-bordered table-hover" 
							id="activityTable">
					<thead>
					<tr role="row" class="heading">
						<th>No</th>
						<th>Username</th>
						<th>Organisasi</th>
						<th>Group</th>
						<th>Nama</th>
						<th>IP Address</th>
						<th>OS</th>
						<th>Browser</th>
						<th>Login</th>
						<th>Logout</th>
						<th>Status</th>
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
