<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
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
    <link rel="icon" href="{$smarty.const.IMAGES_DIR}/favicon.ico" type="image/vnd.microsoft.icon">
	
	<script type="text/javascript" src="{$this->basePath()}/public/jspath.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/admin/pages/css/login.css" rel="stylesheet" type="text/css"/>
    <link href="{$PATH_THEMES}/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
    
    <!--- SweetAlert-->
    <link href="{$PATH_THEMES}/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <script src="{$PATH_THEMES}/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
    <!--- SweetAlert-->

    <script src="{$PATH_THEMES}/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/layout/scripts/apps.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
    
    {literal}
    <script>
	jQuery(document).ready(function() {     
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Login.init();
		Apps.init();
	});
	</script>
    {/literal}
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
        	<img src="{$this->basePath()}/data/uploads/logo-big.png" alt="Logo" />
        </a>
    </div>
    
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content" style="margin-top:0px">
        <!-- BEGIN LOGIN FORM -->
  		
       	<form 	action="{$this->basePath()}/auth/authenticate"
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
    <script src="../../assets/global/plugins/respond.min.js"></script>
    <script src="../../assets/global/plugins/excanvas.min.js"></script> 
    <![endif]-->

	<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
