<?php
/* Smarty version 3.1.30, created on 2017-05-31 11:46:39
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Auth\Lock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_592e4aafe0cdd3_03909510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f93ee66bcc1551f5e2e4200e1c2ece014a3443e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Auth\\Lock.tpl',
      1 => 1483111631,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_592e4aafe0cdd3_03909510 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- INITIALISATION PATH THEME -->
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
	
	<script type="text/javascript" src="/public/jspath.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/admin/pages/css/lock.css" rel="stylesheet" type="text/css"/>
    <link href="/public/default/assets/global/css/components.css" id="style_components" rel="stylesheet" type="text/css"/>
    
    <link href="/public/default/assets/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="/public/default/assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="/public/default/assets/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/public/default/assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    
    <script src="/public/default/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    
    <script type="text/javascript" src="/public/default/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
    
    <!--- SweetAlert-->
    <link href="/public/default/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
    <script src="/public/default/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
    <!--- SweetAlert-->
	
    <script src="/public/default/assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
    <script src="/public/default/assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/layout/scripts/apps.js" type="text/javascript"></script>
    <script src="/public/default/assets/admin/pages/scripts/login.js" type="text/javascript"></script>
    
    
    <script>
	jQuery(document).ready(function() {     
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Login.init();
		Apps.init();
		
		setInterval(function(){
    		$.get( base_url+'service/settimer', function(newRowCount){
    		});
  		},10000); 
	});
	</script>
    
    <style type="text/css">
	.lock-avatar-block img{ width:110px; height:110px;}
	</style>
    
</head>

<!-- BEGIN BODY -->
<body>
<div class="page-lock" style="margin-top:10px">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
		<a class="brand" href="">
			<img src="/data/uploads/logo-big.png" alt="Logo" />
		</a>
	</div>
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="page-body" style="margin-top:0px">
    	<div class="lock-head">
			 Locked
		</div>
        
        <div class="lock-body">
			<div class="pull-left lock-avatar-block">
            	                <img src="/data/uploads/userfiles/1/account/2102152248001.jpg" class="lock-avatar">
                				
			</div>
           
           	<form 	action="/auth/authenticate"
       				method="post"
       				class="login-form lock-form pull-left">
           
				<h4>Darto </h4>
				<div class="form-group">
                	<input 	type="hidden" 
                    		name="USERNAME" 
                            id="USERNAME" 
                            value="admin"/>
                                   
					<input 	type="password" 
                    		name="PASSWORD"
                            id="PASSWORD"
                            data-rule-required="true"
                    		class="form-control placeholder-no-fix"  
                            autocomplete="off" 
                            placeholder="Password"/>
                  
                  	<span class="alert-danger display-hide" style="background-color:transparent">Enter any password.</span>
				</div>
				<div class="form-actions">
					<button type="submit" class="btn btn-success uppercase">Unlock</button>
				</div>
			</form>
		</div>
		<div class="lock-bottom">
			
		</div>
    </div>
    <div class="page-footer-custom">
         2016 © Easygo GPS Tracking.
    </div>
    <!-- END LOGIN -->
</div>
</body>
<!-- END BODY -->
</html>
<?php }
}
