<!-- INITIALISATION PATH THEME -->
{assign var="PATH_THEMES" value="{$this->basePath()}/public/{$smarty.const.VIEW_THEMES}"}
<!-- END INITIALISATION PATH THEME -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Eisystem</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Eisystem">
    <meta name="author" content="Darto">
	
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
    
    <!-- BEGIN VALIDATE -->
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/form-validation.js"></script>
    <!-- END VALIDATE -->
    
    <!-- BEGIN SELECT2 -->
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/select2/select2.css"/>
	<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/select2/select2.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/form-samples.js"></script>
    <!-- END SELECT2 -->
    
    <!-- BEGIN DATEPICKER -->
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css"/>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/components-pickers.js"></script>
    <!-- END DATEPICKER -->
    
    <!-- BEGIN ICHECK -->
    <link href="{$PATH_THEMES}/assets/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
    <script src="{$PATH_THEMES}/assets/global/plugins/icheck/icheck.min.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/form-icheck.js"></script>
    <!-- END ICHECK -->
    
    <!-- BEGIN MODAL -->
    <link href="{$PATH_THEMES}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet" type="text/css"/>
	<link href="{$PATH_THEMES}/assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet" type="text/css"/>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js" type="text/javascript"></script>
	<script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/ui-extended-modals.js"></script>
	<!-- END MODAL -->
    
    <!-- BEGIN EDITOR -->
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/ckeditor/ckeditor.js"></script>
    <!-- END EDITOR -->
    
    <!-- BEGIN COMPONENTOOLS -->
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/jquery-multi-select/css/multi-select.css"/>
	<script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js" type="text/javascript"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/fuelux/js/spinner.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/jquery-tags-input/jquery.tagsinput.css"/>
    <script src="{$PATH_THEMES}/assets/global/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
    <script src="{$PATH_THEMES}/assets/global/plugins/bootstrap-pwstrength/pwstrength-bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="{$PATH_THEMES}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css"/>   
    <script type="text/javascript" src="{$PATH_THEMES}/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script src="{$PATH_THEMES}/assets/admin/pages/scripts/components-form-tools.js"></script>
    <!-- END COMPONENTOOLS -->
    
    {literal}
    <script>
	jQuery(document).ready(function() {     
		Metronic.init(); // init metronic core components
		Layout.init(); // init current layout
		Login.init();
		Apps.init();
		FormValidation.init();
        FormiCheck.init();
	    ComponentsFormTools.init();
        FormSamples.init();
	    ComponentsPickers.init();
	    UIExtendedModals.init();
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
    <div class="logo" style="margin-bottom:-10px; margin-top:5px">
        <a href="">
        	<img src="{$this->basePath()}/data/uploads/logo-big.png" alt="Logo" />
        </a>
    </div>
    
    <!-- END LOGO -->
    <!-- BEGIN LOGIN -->
    <div class="content" style="margin-top:0px">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form"  {$this->basePath()}/auth/authenticate" method="post">
            <h3 class="form-title">Registration</h3>
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>
                Enter any username and password. </span>
            </div>
            
            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Name</label>
                <input 	type="text" 
                        class="form-control" 
                        name="NAME" 
                        id="NAME"
                        data-rule-required="true"
                        size="26" 
                        minlength ="1" 
                        placeholder="Name" />
                                        
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Serial Key</label>
                <input  type="text"
               			class="form-control" 
                		id="mask_ssn" 
                		data-rule-required="true"
                        placeholder="Serial Key" />
                                        
            </div>
            <div class="form-actions">
                <button type="submit" class="btn btn-success uppercase">Activate</button>
            </div>
            
            <div class="create-account">
                <p></p>
            </div>
        </form>
        <!-- END LOGIN FORM -->
        
    </div>
    <div class="copyright" style="color:#EDEAEA">
         2015 © Executive Information System. Administrator.
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
