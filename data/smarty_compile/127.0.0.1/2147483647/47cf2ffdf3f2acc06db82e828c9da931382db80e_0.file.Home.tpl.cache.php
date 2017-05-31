<?php
/* Smarty version 3.1.30, created on 2017-05-31 12:32:23
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Main\Home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e556777f399_68423360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47cf2ffdf3f2acc06db82e828c9da931382db80e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Main\\Home.tpl',
      1 => 1496201527,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592e556777f399_68423360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20836592e5567729f33_90314343';
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
      	
      	
    </div>
    <!-- END MAIN STATS -->
    
    <!-- BEGIN ROW -->
	<div class="row">
		<div class="col-md-6">
			<!-- BEGIN CHART PORTLET-->
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Yearly Data</span>
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
		</div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Monthly Data</span>
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
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Daily Data</span>
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
					<div id="chartdiv3" class="chart" style="height: 500px;">
					</div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
        <div class="col-md-6">
            <!-- BEGIN CHART PORTLET-->
			
			<div class="portlet light bordered">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bar-chart font-green-haze"></i>
						<span class="caption-subject bold uppercase font-green-haze">Daily Data</span>
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
					<div id="chartdiv4" class="chart" style="height: 500px;">
					</div>
				</div>
			</div>
			
			<!-- END CHART PORTLET-->
        </div>
	</div>
	<!-- END ROW -->
    
    <div class="clearfix"></div>
</div>
<!-- END LOAD CONTENT--><?php }
}
