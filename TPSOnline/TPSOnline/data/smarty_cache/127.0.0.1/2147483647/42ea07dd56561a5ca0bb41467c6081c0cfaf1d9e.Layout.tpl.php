<?php
/* Smarty version 3.1.30, created on 2017-06-01 00:14:15
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Layout\Layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592ef9e7b64c90_61811998',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7730131f6ba61566eab785134b5fa7e16671c1dd' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Layout\\Layout.tpl',
      1 => 1482515234,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592ef9e7b64c90_61811998 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<title>Easygo GPS Tracking</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Eisystem">
	<meta name="author" content="Darto">
	<link rel="icon" href="/data/uploads/favicon.ico" type="image/vnd.microsoft.icon">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    
    
  	<!-- BEGIN GLOBAL STYLES -->
    <link href="/public/default/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/public/default/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL STYLES -->
    
    <script src="/public/jspath.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-quick-sidebar-over-content page-container-bg-solid">
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
<div class="clearfix"></div>
	
    <!-- BEGIN CONTAINER -->
	<div class="page-container">
    	
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
 			
            <!--<li class="sidebar-search-wrapper" style="margin-bottom:10px"></li>-->
            <!-- SUPER ADMIN -->
            <li class="start active open">
				<a href="/main">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					<span class="open"></span>
				</a>
			</li>
           
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="icon-settings"></i>
                        <span class="title">Admin</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="/admin/user" class="ajaxify">
                                    <i class="icon-user "></i>
                                    <span class="title">User</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/admin/user">
                                    <i class="icon-user "></i>
                                    User
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="/admin/group" class="ajaxify">
                                    <i class="icon-users "></i>
                                    <span class="title">Group</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/admin/group">
                                    <i class="icon-users "></i>
                                    Group
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="/admin/perusahaan" class="ajaxify">
                                    <i class="fa fa-building "></i>
                                    <span class="title">Perusahaan</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/admin/perusahaan">
                                    <i class="fa fa-building "></i>
                                    Perusahaan
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="fa fa-truck"></i>
                        <span class="title">Data Coarri - Codeco</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                                                                			<li class="">
                                <a data-href="javascript:;" class="">
                                    <i class="icon-cloud-upload"></i>
                                    <span class="title">Mengirim Data</span>
                                    
                                    <span class="arrow"></span>
                                </a>
                                                                <ul class="sub-menu">
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/pengiriman/container" class="ajaxify">
                                            <i class=""></i>
                                            Transaksi Container
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/pengiriman/kemasan" class="ajaxify">
                                            <i class=""></i>
                                            Transaksi Kemasan
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/pengiriman/tangki" class="ajaxify">
                                            <i class=""></i>
                                            Transaksi Tangki penimbunan
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/pengiriman/terminal" class="ajaxify">
                                            <i class=""></i>
                                            Transaksi Car Terminal
                                        </a>
                                    </li>
                                
                                </ul>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/pengiriman/terminal">
                                    <i class="icon-cloud-upload"></i>
                                    Mengirim Data
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="icon-layers"></i>
                        <span class="title">Pindah Lokasi Penimbunan (PLP)</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                                                                			<li class="">
                                <a data-href="javascript:;" class="">
                                    <i class="icon-cloud-download "></i>
                                    <span class="title">Mengunduh Data</span>
                                    
                                    <span class="arrow"></span>
                                </a>
                                                                <ul class="sub-menu">
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/penerimaan/persetujuanplpasal" class="ajaxify">
                                            <i class=""></i>
                                            Respon Persetujuan PLP TPS Asal
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/penerimaan/persetujuanplptujuan" class="ajaxify">
                                            <i class=""></i>
                                            Respon Persetujuan PLP TPS Tujuan
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Detail PLP
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/penerimaan/pembatalanplpasal" class="ajaxify">
                                            <i class=""></i>
                                            Respon Pembatalan PLP TPS Asal
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/penerimaan/pembatalanplptujuan" class="ajaxify">
                                            <i class=""></i>
                                            Respon Pembatalan PLP TPS Tujuan
                                        </a>
                                    </li>
                                
                                </ul>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/penerimaan/pembatalanplptujuan">
                                    <i class="icon-cloud-download "></i>
                                    Mengunduh Data
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                                                                			<li class="">
                                <a data-href="javascript:;" class="">
                                    <i class="icon-cloud-upload"></i>
                                    <span class="title">Mengirim Data</span>
                                    
                                    <span class="arrow"></span>
                                </a>
                                                                <ul class="sub-menu">
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/pengiriman/permohonanplp" class="ajaxify">
                                            <i class=""></i>
                                            Data Permohonan PLP
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/pengiriman/pembatalanplp" class="ajaxify">
                                            <i class=""></i>
                                            Data Pembatalan PLP
                                        </a>
                                    </li>
                                
                                </ul>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/pengiriman/pembatalanplp">
                                    <i class="icon-cloud-upload"></i>
                                    Mengirim Data
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="icon-docs"></i>
                        <span class="title">Dok Perijinan Impor</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                                                                			<li class="">
                                <a data-href="javascript:;" class="">
                                    <i class="icon-cloud-download "></i>
                                    <span class="title">Mengunduh Data</span>
                                    
                                    <span class="arrow"></span>
                                </a>
                                                                <ul class="sub-menu">
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="/penerimaan/sppbpib" class="ajaxify">
                                            <i class=""></i>
                                            Data SPPB PIB (BC 2.0)
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data SPPB BC23
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data SPJM
                                        </a>
                                    </li>
                                
                                </ul>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="javascript:;">
                                    <i class="icon-cloud-download "></i>
                                    Mengunduh Data
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="icon-docs"></i>
                        <span class="title">Dok Perijinan Ekspor</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                                                                			<li class="">
                                <a data-href="javascript:;" class="">
                                    <i class="icon-cloud-download "></i>
                                    <span class="title">Mengunduh Data</span>
                                    
                                    <span class="arrow"></span>
                                </a>
                                                                <ul class="sub-menu">
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data NPE 1
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data NPE 2
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data NPE 3
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data NPE 4
                                        </a>
                                    </li>
                                                                	                                                                                                                                                        
                                                                                                                  
                                    
                                    <li class="">
                                        <a data-href="javascript:;" class="ajaxify">
                                            <i class=""></i>
                                            Data PKBE
                                        </a>
                                    </li>
                                
                                </ul>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="javascript:;">
                                    <i class="icon-cloud-download "></i>
                                    Mengunduh Data
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="icon-envelope-letter "></i>
                        <span class="title">Cek Data</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="javascript:;" class="ajaxify">
                                    <i class="icon-envelope-open"></i>
                                    <span class="title">Berhasil Terkirim</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="javascript:;">
                                    <i class="icon-envelope-open"></i>
                                    Berhasil Terkirim
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="javascript:;" class="ajaxify">
                                    <i class="fa fa-envelope"></i>
                                    <span class="title">Gagal Terkirim</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="javascript:;">
                                    <i class="fa fa-envelope"></i>
                                    Gagal Terkirim
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="javascript:;" class="ajaxify">
                                    <i class="icon-shield"></i>
                                    <span class="title">Data Reject</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="javascript:;">
                                    <i class="icon-shield"></i>
                                    Data Reject
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="javascript:;" class="ajaxify">
                                    <i class="fa fa-clipboard"></i>
                                    <span class="title">Data SPPB</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="javascript:;">
                                    <i class="fa fa-clipboard"></i>
                                    Data SPPB
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="/dispatch/eseal" class="ajaxify">
                        <i class="icon-puzzle"></i>
                        <span class="title">Dispatch Order</span>
                        
                        <span class=""></span>
                    </a>
                                    </li>
                                                                                                    
                                                                                                            
                                                                                                               	 
                
                <li class="">
                    <a href="javascript:;" class="">
                        <i class="fa fa-archive"></i>
                        <span class="title">Upload Data</span>
                        
                        <span class="arrow"></span>
                    </a>
                                        <ul class="sub-menu">
                    	                        	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="/dokumen/import" class="ajaxify">
                                    <i class="fa fa-cloud-upload"></i>
                                    <span class="title">Import SPPB PIB</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/dokumen/import">
                                    <i class="fa fa-cloud-upload"></i>
                                    Import SPPB PIB
                                </a>
                            </li>
                            -->
                                                	                                                                                                                      	
                                                                                                                            
                                                                                                        
                                                                                                                 
                                                                            			<li class="">
                                <a data-href="/dokumen/dokumen" class="ajaxify">
                                    <i class="icon-note "></i>
                                    <span class="title">Pos Dokumen</span>
                                    
                                    <span class=""></span>
                                </a>
                                                            </li>
                            <!--
                                                                                          
                            
                            <li class="">
                                <a href="/dokumen/dokumen">
                                    <i class="icon-note "></i>
                                    Pos Dokumen
                                </a>
                            </li>
                            -->
                        
                    </ul>
                                    </li>
            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
    	<!--
    	<div class="page-bar page-bar-logo" style="padding:0 0 0 0; height:120px;">
        	<img src="/data/uploads/headerjkt.png" width="100%" height="96" style="border-bottom:1px solid #edeef0;">
        </div>
        -->

    	<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<script src="/public/default/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>

<script src="/public/default/assets/admin/pages/scripts/charts-amcharts.js"></script>


<script>
jQuery(document).ready(function() {    
   ChartsAmcharts.init();
});
</script>

<!-- BEGIN LOAD CONTENT-->
<div class="page-content-body">
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
                    <a href="javascript:void(0)">Home</a>
                </li>
                                        </ul>
</div>

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
    	    	</div>
	</div>
</div>
<!-- END CONTAINER -->

<!-- BEGIN FOOTER -->
<div class="page-footer">
	<div class="page-footer-inner">
		 2016 &copy; Easygo GPS Tracking
	</div>
	<div class="scroll-to-top">
		<i class="icon-arrow-up"></i>
	</div>
</div>

<!-- END FOOTER -->
    
    <!--[if lt IE 9]>
    <script src="/public/default/assets/global/plugins/respond.min.js"></script>
    <script src="/public/default/assets/global/plugins/excanvas.min.js"></script> 
    <![endif]-->
	<script src="/public/default/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    
    <script src="/public/default/assets/global/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"></script>
	<script src="/public/default/assets/global/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"></script>

	<script src="/public/default/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/layout/scripts/apps.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/pages/scripts/ui-idletimeout.js"></script>
    
    <!-- BEGIN SWEET ALERT -->
    <link href="/public/default/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <script src="/public/default/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
    <!-- END SWEET ALERT -->
    
    
    <script>
    jQuery(document).ready(function() {    
       	Metronic.init();
       	Layout.init();
       	QuickSidebar.init();
       	Apps.init();
	   	UIIdleTimeout.init();
	   	$('.page-content .ajaxify.start').click();
	   
		setInterval(function(){
    		$.getJSON( base_url+'service/settimer', function(data){
				if(!data.isAuth){
					swal({ 
					  	title: "Logout",
					   	text: "Login time out",
						type: "warning" 
					  },
					  function(){
						window.location.href = base_url;
					});
					//sweetAlert("Logout", "Session time out", "warning");
					//window.location = base_url;
				}
    		});
  		},3000);

    });
    </script>
    
</body>
</html><?php }
}
