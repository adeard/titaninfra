{$this->doctype()}
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
   <meta charset="utf-8" />
   
   {$this->headMeta()->appendName('viewport', 'width=device-width, initial-scale=1.0')}
   
   {$basePath = $this->basePath()}
    
    <!-- Le styles -->
        {$this->headLink([ 'rel' 	=> 'shortcut icon', 
                           'type' 	=> 'image/vnd.microsoft.icon', 
                           'href' 	=> "$basePath/images/favicon.ico"])}
   
   <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
   
   {$this->headTitle('500 Page')->setSeparator(' - ')->setAutoEscape(false)}
   
	{literal}
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
   	{/literal}
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body>
	<div class="wrap">
		<div class="logo">
			<h1>500</h1>
	    	<p>Error occured! - {$this->message}</p>
  	      	<div class="sub">
	        	<p><a href="/main">Back</a></p>
	      	</div>
        </div>
	</div>
	
	<div class="footer"></div>
	
</body>

<!-- END BODY -->
</html>

