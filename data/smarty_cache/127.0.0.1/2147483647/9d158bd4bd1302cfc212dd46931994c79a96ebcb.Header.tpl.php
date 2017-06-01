<?php
/* Smarty version 3.1.30, created on 2017-06-01 23:33:37
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Layout\Header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_593041e18a9f52_08100169',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04e60fdc407a4e3436fea25e6350b391bb909e49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Layout\\Header.tpl',
      1 => 1482910081,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_593041e18a9f52_08100169 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<div class="menu-toggler sidebar-toggler"></div>
            
            <a href="/main" style="margin-top:7px; margin-left:10px; font-size:21px">
				<img class="logo-default" 
                	 style="margin-left:5px; margin-top: -5px" 
                     src="/public/default/img/logo.png" 
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
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown dropdown-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                        <img class="img-circle" src="/data/uploads/userfiles/1/account/2102152248001.jpg" alt="" />
                                                    
					<span class="username username-hide-on-mobile">
						Darto   
                    </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a data-href="/admin/profile/2102152248001" class="ajaxify">
							<i class="icon-user"></i> My Profile
                            </a>
						</li>
                        <li>
							<a data-href="/admin/activity" class="ajaxify">
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
							<a href="/auth/lock">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="/auth/logout">
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
