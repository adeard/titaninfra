<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<title>Easygo GPS Tracking</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Eisystem">
	<meta name="author" content="Darto">
	<link rel="icon" href="{$smarty.const.IMAGES_DIR}/favicon.ico" type="image/vnd.microsoft.icon">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    
    
  	<!-- BEGIN GLOBAL STYLES -->
    <link href="{$PATH_THEMES}/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{$PATH_THEMES}/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL STYLES -->
    
    <script src="{$this->basePath()}/public/jspath.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-quick-sidebar-over-content page-container-bg-solid">
    {$this->partial("layout/header")}
	
    <!-- BEGIN CONTAINER -->
	<div class="page-container">
    	{$this->partial("layout/slidebar")}
    	{$this->content}
    	{$this->partial("layout/footer")}
    
    <!--[if lt IE 9]>
    <script src="{$PATH_THEMES}/assets/global/plugins/respond.min.js"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/excanvas.min.js"></script> 
    <![endif]-->
	<script src="{$PATH_THEMES}/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
    
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"></script>
	<script src="{$PATH_THEMES}/assets/global/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"></script>

	<script src="{$PATH_THEMES}/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/layout/scripts/apps.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/ui-idletimeout.js"></script>
    
    <!-- BEGIN SWEET ALERT -->
    <link href="{$PATH_THEMES}/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <script src="{$PATH_THEMES}/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
    <!-- END SWEET ALERT -->
    
    {literal}
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
    {/literal}
</body>
</html>