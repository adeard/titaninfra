<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="{$PATH_THEMES}/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

<script src="{$PATH_THEMES}/assets/admin/pages/scripts/charts-amcharts.js"></script>

{literal}
<script>
jQuery(document).ready(function() {    
   ChartsAmcharts.init();
});
</script>
{/literal}
<!-- BEGIN LOAD CONTENT-->
<div class="page-content-body">
	{$this->partial("layout/breadcrumbs")}
    <h3 class="page-title"></h3>
                
    <!-- BEGIN MAIN STATS -->
    <div class="tiles" style="margin-left:25px;">
      	
      	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat red-intense">
				<div class="visual">
					<i class="fa fa-globe"></i>
				</div>
				<div class="details">
					<div class="number">
						 1250
					</div>
					<div class="desc">
						 Total Respon BC
					</div>
				</div>
				<a class="more" href="javascript:;"></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat green-haze">
				<div class="visual">
					<i class="fa fa-puzzle-piece"></i>
				</div>
				<div class="details">
					<div class="number">
						 549
					</div>
					<div class="desc">
						 Total Container
					</div>
				</div>
				<a class="more" href="javascript:;"></a>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="dashboard-stat purple-plum">
				<div class="visual">
					<i class="fa fa-bar-chart-o"></i>
				</div>
				<div class="details">
					<div class="number">
						 74%
					</div>
					<div class="desc">
						 Prosentase
					</div>
				</div>
				<a class="more" href="javascript:;"></a>
			</div>
		</div>
    </div>
    <!-- END MAIN STATS -->
    
    <!-- BEGIN ROW -->
	<div class="row">
		<div class="col-md-12">
			<!-- BEGIN CHART PORTLET-->
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze"> Rekapitulasi FCL</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="chartdiv" class="chart" style="height: 500px;">
					</div>
				</div>
			</div>
			<!-- END CHART PORTLET-->
			
			<!-- BEGIN CHART PORTLET-->
			<!--
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze"> Rekapitulasi LCL</span>
					</div>
					<div class="tools">
						<a href="javascript:;" class="collapse">
						</a>
						<a href="#portlet-config" data-toggle="modal" class="config">
						</a>
						<a href="javascript:;" class="reload">
						</a>
						<a href="javascript:;" class="fullscreen">
						</a>
						<a href="javascript:;" class="remove">
						</a>
					</div>
				</div>
				<div class="portlet-body">
					<div id="chartdiv2" class="chart" style="height: 500px;">
					</div>
				</div>
			</div>
			-->
			<!-- END CHART PORTLET-->
		</div>
	</div>
	<!-- END ROW -->
    
    <div class="clearfix"></div>
</div>
<!-- END LOAD CONTENT-->