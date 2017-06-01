<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
	<!-- BEGIN HEADER INNER -->
	<div class="page-header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
			<div class="menu-toggler sidebar-toggler"></div>
            
            <a href="{$this->basePath()}/main" style="margin-top:7px; margin-left:10px; font-size:21px">
				<img class="logo-default"
                	 style="margin-left:5px; margin-top: -5px"
                     src="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}/img/logo.png"
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
                    {if $userinfo->USERFILES == ""}
                    <img class="img-circle" src="{$this->basePath()}{$smarty.const.IMAGES_DIR}/noimage.jpg" height="29" width="29" />
                    {else}
                    <img class="img-circle" src="{$this->basePath()}{$smarty.const.IMAGES_DIR}/userfiles/{$userinfo->IDPERUSAHAAN}/account/{$userinfo->USERFILES}" alt="" />
                    {/if}
                                
					<span class="username username-hide-on-mobile">
						{$userinfo->NAMADEPAN} {$userinfo->NAMABELAKANG}
                    </span>
					<i class="fa fa-angle-down"></i>
					</a>
					<ul class="dropdown-menu dropdown-menu-default">
						<li>
							<a data-href="{$this->basePath()}/admin/profile/{$userinfo->IDUSER}" class="ajaxify">
							<i class="icon-user"></i> My Profile
                            </a>
						</li>
                        <li>
							<a data-href="{$this->basePath()}/admin/activity" class="ajaxify">
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
							<a href="{$this->basePath()}/auth/lock">
							<i class="icon-lock"></i> Lock Screen </a>
						</li>
						<li>
							<a href="{$this->basePath()}/auth/logout">
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
<div class="clearfix"></div>