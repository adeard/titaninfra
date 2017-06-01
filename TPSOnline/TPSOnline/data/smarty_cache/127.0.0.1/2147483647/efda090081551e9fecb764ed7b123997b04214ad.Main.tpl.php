<?php
/* Smarty version 3.1.30, created on 2017-01-22 22:29:49
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Pengiriman\Pembatalanplp\Pembatalanplp\Main.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5884cfede67714_59659184',
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
  'cache_lifetime' => 0,
),true)) {
function content_5884cfede67714_59659184 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<style type="text/css">
.page-breadcrumb li.active a{
	text-decoration: none;
	cursor:auto;
}
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
                                    <li>
                                        <i class="fa fa-home"></i>
                    <a href="/main">Home</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Pembatalan PLP</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->

<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
	<div class="col-md-12">
		<div class="portlet light bordered">
			<div class="portlet-body">
				<!-- BEGIN MAIN STATS -->
                <div class="tiles" style="margin-left:25px;">
            
                    <a data-href="/pengiriman/pembatalanplp/list" class="ajaxify">
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
                    
                    <a data-href="/pengiriman/pembatalanplpkms" class="ajaxify">
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
