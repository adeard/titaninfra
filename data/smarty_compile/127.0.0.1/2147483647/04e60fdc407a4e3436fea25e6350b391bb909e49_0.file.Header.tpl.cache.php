<?php
/* Smarty version 3.1.30, created on 2017-06-02 00:11:14
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Layout\Header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59304ab2d74370_99407372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e60fdc407a4e3436fea25e6350b391bb909e49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Layout\\Header.tpl',
      1 => 1496336494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59304ab2d74370_99407372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '827759304ab2d53c29_90236969';
?>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<div class="menu-toggler sidebar-toggler"></div>
            
            <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/main" style="margin-top:7px; margin-left:10px; font-size:21px">
				<img class="logo-default"
                	 style="margin-left:5px; margin-top: -5px"
                     src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/<?php echo @constant('VIEW_THEMES');?>
/img/logo.png"
                	 alt="" />
            	
			</a>
		</div>
		<!-- END LOGO -->
        
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
        
		<!-- BEGIN TOP NAVIGATION MENU -->
		<div class="top-menu">
			<button type="button" name="button" class="btn btn-lg btn-danger" style="margin-top:2px;"><b>ALERT</b></button>
			
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value->USERFILES == '') {?>
                    <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo @constant('IMAGES_DIR');?>
/noimage.jpg" height="29" width="29" />
                    <?php } else { ?>
                    <img class="img-circle" src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo @constant('IMAGES_DIR');?>
/userfiles/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value->IDPERUSAHAAN;?>
/account/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value->USERFILES;?>
" alt="" />
                    <?php }?>
                                
					<span class="username username-hide-on-mobile">
						<?php echo $_smarty_tpl->tpl_vars['userinfo']->value->NAMADEPAN;?>
 <?php echo $_smarty_tpl->tpl_vars['userinfo']->value->NAMABELAKANG;?>

                    </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/profile/<?php echo $_smarty_tpl->tpl_vars['userinfo']->value->IDUSER;?>
" class="ajaxify">
							<i class="icon-user"></i> My Profile
                            </a>
						</li>
                        <li>
							<a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/admin/activity" class="ajaxify">
							<i class="icon-rocket"></i> User Activity
							</a>
						</li>
						<!--
						<li>
							<a data-href="javascript:void(0)" class="ajaxify">
							<i class="icon-calendar"></i> My Calendar </a>
						</li>
						<li>
							<a href="javascript:void(0)">
							<i class="icon-envelope-open"></i> My Inbox <span class="badge badge-danger">
							3 </span>
							</a>
						</li>
						-->
						<li class="divider">
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/auth/lock">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/auth/logout">
							<i class="icon-key"></i> Log Out </a>
						</li>
					</ul>
				</li>
				<!-- END USER LOGIN DROPDOWN -->
				
			</ul>
		</div>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix"></div><?php }
}
