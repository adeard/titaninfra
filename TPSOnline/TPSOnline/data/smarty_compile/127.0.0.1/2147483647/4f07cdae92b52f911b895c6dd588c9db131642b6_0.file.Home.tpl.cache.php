<?php
/* Smarty version 3.1.30, created on 2017-06-01 00:14:15
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Main\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ef9e713b1a3_89865986',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f07cdae92b52f911b895c6dd588c9db131642b6' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Main\\Home.tpl',
      1 => 1483457987,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592ef9e713b1a3_89865986 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '32038592ef9e709df61_87806075';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/charts-amcharts.js"><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>
jQuery(document).ready(function() {    
   ChartsAmcharts.init();
});
<?php echo '</script'; ?>
>

<!-- BEGIN LOAD CONTENT-->
<div class="page-content-body">
	<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

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
<!-- END LOAD CONTENT--><?php }
}
