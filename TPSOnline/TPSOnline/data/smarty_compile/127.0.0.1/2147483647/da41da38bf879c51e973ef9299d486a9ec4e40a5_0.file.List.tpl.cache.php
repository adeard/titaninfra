<?php
/* Smarty version 3.1.30, created on 2017-01-15 22:43:03
  from "D:\WEBAPPS\Public_html\Development\TPSOnline\application\view\default\Penerimaan\Penerimaan\Responplp\List.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_587b9887e1e8a8_61832247',
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
  'includes' => 
  array (
  ),
),false)) {
function content_587b9887e1e8a8_61832247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '12628587b9887de8b87_81060241';
?>
<!-- INITIALISATION PATH THEME -->
<?php $_smarty_tpl->_assignInScope('PATH_THEMES', ((string)$_smarty_tpl->tpl_vars['this']->value->basePath())."/public/".((string)@constant('VIEW_THEMES')));
?>
<!-- END INITIALISATION PATH THEME -->

<!-- BEGIN PAGE HEADER-->
<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/layoutcontent");?>

<?php echo $_smarty_tpl->tpl_vars['this']->value->partial("layout/breadcrumbs");?>

<!-- END PAGE HEADER-->


<?php echo '<script'; ?>
>
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
<?php echo '</script'; ?>
>


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
                        <a 	data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/penerimaan/responplp/terima" 
                        	data-target="#terima"
                            data-toggle="tab">
                        	Di Terima 
                        </a>
                    </li>
                    <li>
                        <a 	data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/penerimaan/responplp/tolak" 
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
