<?php
/* Smarty version 3.1.30, created on 2017-01-15 22:43:04
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Penerimaan\Penerimaan\Responplp\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587b988826e449_15447305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'da41da38bf879c51e973ef9299d486a9ec4e40a5' => 
    array (
      0 => 'D:\\WEBAPPS\\Public_html\\Development\\TPSOnline\\application\\view\\default\\Penerimaan\\Penerimaan\\Responplp\\List.tpl',
      1 => 1483527976,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_587b988826e449_15447305 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<!-- INITIALISATION PATH THEME -->
<!-- END INITIALISATION PATH THEME -->

<script src="/public/default/assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/public/default/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- BEGIN SWEET ALERT -->
<link href="/public/default/assets/global/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>
<script src="/public/default/assets/global/plugins/sweetalert/sweetalert-dev.js"></script>
<!-- END SWEET ALERT -->
    
<!-- BEGIN TABLE JS -->
	<!-- BEGIN SELECT2 -->
	<link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/select2/select2.css"/>
    <script type="text/javascript" src="/public/default/assets/global/plugins/select2/select2.min.js"></script>
    <!-- END SELECT2 -->
    
    <!-- BEGIN DATATABLES -->
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/extensions/Scroller/css/dataTables.scroller.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css"/>
    <link rel="stylesheet" type="text/css" href="/public/default/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
    
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
    <script type="text/javascript" src="/public/default/assets/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
    <script type='text/javascript' src='/public/default/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js'></script>
    <script type='text/javascript' src='/public/default/assets/global/plugins/datatables/plugins/bootstrap/fnReloadAjax.js'></script>
    <script type='text/javascript' src='/public/default/assets/admin/pages/scripts/table-advanced.js'></script>
    <!-- END DATATABLE -->

    <script type='text/javascript' src='/public/default/assets/admin/pages/scripts/custom.js'></script>
    
    
    <script>
    jQuery(document).ready(function() {
       Custom.init();
       TableAdvanced.init();
    });
    </script>
    
<!-- END TABLE JS -->
    
<!-- BEGIN FORM JS -->
<!-- END FORM JS -->
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
                    <a href="/main">Home</a>
                    <i class="fa fa-angle-right"></i>
                                    </li>
                                            	                <li class='active'>
                    <a href="javascript:void(0)">Respon PLP</a>
                </li>
                                        </ul>
</div>

<!-- END PAGE HEADER-->


<script>
jQuery(document).ready(function() {
	$(".nav-tabs a").click(function (e) {
		e.preventDefault();
		var url = $(this).attr('data-href');
		var href = this.hash;
		var pane = $(this);
		var target = $(this).attr('data-target');

		$(href).load(url,function(result){      
			pane.tab("show");
		});
		
		$(target).load(url, function() {
			$('.nav-tabs').tab();
		}); 
		jQuery.uniform.update(pane);
	});
	
	var baseURL = base_url+"penerimaan/responplp/terima";
    $('#terima').load(baseURL, function() {
        $('.nav-tabs').tab();
    }); 
	
});
</script>


<h3 class="page-title"></h3>

<!-- BEGIN PAGE CONTENT-->
<div class="row">
    <div class="col-md-12">
        <div class="portlet box blue-madison">
            <div class="portlet-title">
                <div class="caption">
                    Respon PLP
                </div>
                <div class="actions"></div>
            </div>
            <div class="portlet-body">
                <ul class="nav nav-tabs">
                	<li class="active">
                        <a 	data-href="/penerimaan/responplp/terima" 
                        	data-target="#terima"
                            data-toggle="tab">
                        	Di Terima 
                        </a>
                    </li>
                    <li>
                        <a 	data-href="/penerimaan/responplp/tolak" 
                        	data-target="#tolak" 
                            data-toggle="tab">
                        	Di Tolak 
                        </a>
                    </li>
                </ul>
                
                <div class="tab-content">
                	<div class="tab-pane fade active in" id="terima">
                    	Page is loading, please wait .....
                    </div>
                    
                    <div class="tab-pane fade" id="tolak">
                    	Page is loading, please wait .....
                    </div>
                </div>
        	</div>
		</div>
	</div>
</div>
<!-- END PAGE CONTENT--><?php }
}
