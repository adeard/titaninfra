<?php
/* Smarty version 3.1.30, created on 2017-01-22 22:29:49
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Pengiriman\Pembatalanplp\Pembatalanplp\Main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5884cfedd65631_03226799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e87b2a630f2d2fae16f7ca067e682ec0bc41b8e' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Pengiriman\\Pembatalanplp\\Pembatalanplp\\Main.tpl',
      1 => 1484366402,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5884cfedd65631_03226799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '310585884cfedd30799_74756853';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-body">
				<!-- BEGIN MAIN STATS -->
                <div class="tiles" style="margin-left:25px;">
            
                    <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/pengiriman/pembatalanplp/list" class="ajaxify">
                        <div class="tile double bg-purple-studio">
                            <div class="tile-body">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="tile-object">
                                <div class="name">
                                     Pembatalan PLP untuk Peti Kemas
                                </div>
                                <div class="number">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                    <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/pengiriman/pembatalanplpkms" class="ajaxify">
                        <div class="tile double bg-green">
                            <div class="tile-body">
                                <i class="fa fa-cubes"></i>
                            </div>
                            <div class="tile-object">
                                <div class="name">
                                     Pembatalan PLP untuk Kemasan
                                </div>
                                <div class="number">
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
                <!-- END MAIN STATS -->
			</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT--><?php }
}
