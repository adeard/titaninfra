<?php
/* Smarty version 3.1.30, created on 2017-01-21 00:46:56
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Error\404.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58824d10d664b1_53937295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b82929bd30790f54bc43eede9874788649dbf6e' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Error\\404.tpl',
      1 => 1456629718,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58824d10d664b1_53937295 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1478158824d10d24a52_39238951';
echo $_smarty_tpl->tpl_vars['this']->value->doctype();?>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   
   <?php echo $_smarty_tpl->tpl_vars['this']->value->headMeta()->appendName('viewport','width=device-width, initial-scale=1.0');?>

   
   <?php $_smarty_tpl->_assignInScope('basePath', $_smarty_tpl->tpl_vars['this']->value->basePath());
?>
    
    <!-- Le styles -->
        <?php echo $_smarty_tpl->tpl_vars['this']->value->headLink(array('rel'=>'shortcut icon','type'=>'image/vnd.microsoft.icon','href'=>((string)$_smarty_tpl->tpl_vars['basePath']->value)."/images/favicon.ico"));?>

   
   <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
   
   <?php echo $_smarty_tpl->tpl_vars['this']->value->headTitle('400 Page')->setSeparator(' - ')->setAutoEscape(false);?>

   
	
   	<style type="text/css">
	body{
		font-family: 'Courgette', cursive;
	}
	body{
		background:#f3f3e1;
	}	
	.wrap{
		margin:0 auto;
		width:1000px;
	}
	.logo{
		margin-top:50px;
	}	
	.logo h1{
		font-size:200px;
		color:#8F8E8C;
		text-align:center;
		margin-bottom:1px;
		text-shadow:1px 1px 6px #fff;
	}	
	.logo p{
		color:rgb(228, 146, 162);
		font-size:20px;
		margin-top:1px;
		text-align:center;
	}	
	.logo p span{
		color:lightgreen;
	}	
	.sub a{
		color:white;
		background:#8F8E8C;
		text-decoration:none;
		padding:7px 120px;
		font-size:13px;
		font-family: arial, serif;
		font-weight:bold;
		-webkit-border-radius:3em;
		-moz-border-radius:.1em;
		-border-radius:.1em;
	}	
	.footer{
		color:#8F8E8C;
		position:absolute;
		right:10px;
		bottom:10px;
	}	
	.footer a{
		color:rgb(228, 146, 162);
	}	
	</style>
   	
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<div class="wrap">
		<div class="logo">
			<h1>404</h1>
	    	<p>Error occured! - <?php echo $_smarty_tpl->tpl_vars['this']->value->message;?>
</p>
  	      	<div class="sub">
	        	<p><a href="/main">Back</a></p>
	      	</div>
        </div>
	</div>
	
	<div class="footer"></div>
	
</body>

<!-- END BODY -->
</html>

<?php }
}
