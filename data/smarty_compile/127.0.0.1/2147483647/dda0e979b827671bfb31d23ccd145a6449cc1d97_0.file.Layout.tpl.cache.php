<?php
/* Smarty version 3.1.30, created on 2017-06-02 00:01:34
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Layout\Layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5930486ea8aba6_37994912',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dda0e979b827671bfb31d23ccd145a6449cc1d97' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Layout\\Layout.tpl',
      1 => 1482515234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5930486ea8aba6_37994912 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '97205930486ea5e947_77088985';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!DOCTYPE html>
<html lang="en"><head>
	<meta charset="utf-8">
	<title>Easygo GPS Tracking</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Eisystem">
	<meta name="author" content="Darto">
	<link rel="icon" href="<?php echo @constant('IMAGES_DIR');?>
/favicon.ico" type="image/vnd.microsoft.icon">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    
    
  	<!-- BEGIN GLOBAL STYLES -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL STYLES -->
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/jspath.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    
</head>
<!-- END HEAD -->
<body class="page-header-fixed page-quick-sidebar-over-content page-container-bg-solid">
    <?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/header");?>

	
    <!-- BEGIN CONTAINER -->
	<div class="page-container">
    	<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/slidebar");?>

    	<?php echo $_smarty_tpl->tpl_vars['this']->value->content;?>

    	<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/footer");?>

    
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/respond.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/excanvas.min.js"><?php echo '</script'; ?>
> 
    <![endif]-->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-idle-timeout/jquery.idletimeout.js" type="text/javascript"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-idle-timeout/jquery.idletimer.js" type="text/javascript"><?php echo '</script'; ?>
>

	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/scripts/metronic.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/layout/scripts/layout.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/layout/scripts/quick-sidebar.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/layout/scripts/apps.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/ui-idletimeout.js"><?php echo '</script'; ?>
>
    
    <!-- BEGIN SWEET ALERT -->
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/sweetalert/sweetalert-dev.js"><?php echo '</script'; ?>
>
    <!-- END SWEET ALERT -->
    
    
    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
    
</body>
</html><?php }
}
