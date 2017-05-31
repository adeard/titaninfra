<?php
/* Smarty version 3.1.30, created on 2017-05-30 10:50:12
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Auth\Login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592cebf4712926_23208605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd3ffae8d5e9d67f2996d77d65a5084bf11daedc8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Auth\\Login.tpl',
      1 => 1494434604,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_592cebf4712926_23208605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '27579592cebf46ac4a2_77515093';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Easygo GPS Tracking</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eisystem">
    <meta name="author" content="Darto">
    <link rel="icon" href="<?php echo @constant('IMAGES_DIR');?>
/favicon.ico" type="image/vnd.microsoft.icon">
	
	<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/public/jspath.js"><?php echo '</script'; ?>
>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
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
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/jquery-validation/js/additional-methods.min.js"><?php echo '</script'; ?>
>
    
    <!--- SweetAlert-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/global/plugins/sweetalert/sweetalert-dev.js"><?php echo '</script'; ?>
>
    <!--- SweetAlert-->

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
/assets/admin/layout/scripts/apps.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['PATH_THEMES']->value;?>
/assets/admin/pages/scripts/login.js" type="text/javascript"><?php echo '</script'; ?>
>
    
    
    <?php echo '<script'; ?>
>
	jQuery(document).ready(function() {     
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Login.init();
		Apps.init();
	});
	<?php echo '</script'; ?>
>
    
</head>

<!-- BEGIN BODY -->
<body class="login">
    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    <div class="menu-toggler sidebar-toggler">
    </div>
    <!-- END SIDEBAR TOGGLER BUTTON -->
    <!-- BEGIN LOGO -->
    <div class="logo" style="margin-bottom:-10px; margin-top:55px">
        <a href="">
        	<img src="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/data/uploads/logo-big.png" alt="Logo" />
        </a>
    </div>
    
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content" style="margin-top:0px">
        <!-- BEGIN LOGIN FORM -->
  		
       	<form 	action="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/auth/authenticate"
       			method="post"
       			class="login-form">
           
            <h3 class="form-title">Sign In</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
            </div>
            
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <input 	type="text" 
                        class="form-control" 
                        name="USERNAME" 
                        id="USERNAME"
                        data-rule-required="true"
                        size="26" 
                        minlength ="1" 
                        placeholder="Username" />
                                        
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <input 	type="password" 
                        class="form-control" 
                        name="PASSWORD" 
                        id="PASSWORD" 
                        data-rule-required="true"
                        size="26"
                        minlength="1" 
                        placeholder="Password" />
                                        
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success uppercase">Login</button>
                <label class="rememberme check">
                	<input 	type="checkbox" 
                            class="checkbox"
                            name="rememberme" 
                            id="rememberme" 
                            value="1" />Remember
                </label>
                <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
            </div>
            
            <div class="create-account">
                <p></p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        
        <!-- BEGIN FORGOT PASSWORD FORM -->
        <form class="forget-form" action="index.html" method="post">
            <h3>Forget Password ?</h3>
            <p>
                 Enter your e-mail address below to reset your password.
            </p>
            <div class="form-group">
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email"/>
            </div>
            <div class="form-actions">
                <button type="button" id="back-btn" class="btn btn-default">Back</button>
                <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
            </div>
        </form>
        <!-- END FORGOT PASSWORD FORM -->
        
    </div>
    <div class="copyright" style="color:#EDEAEA">
         2016 © Easygo GPS Tracking.
    </div>
    <!-- END LOGIN -->
    
    <!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
    <!-- BEGIN CORE PLUGINS -->
    <!--[if lt IE 9]>
    <?php echo '<script'; ?>
 src="../../assets/global/plugins/respond.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../assets/global/plugins/excanvas.min.js"><?php echo '</script'; ?>
> 
    <![endif]-->

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<?php }
}
