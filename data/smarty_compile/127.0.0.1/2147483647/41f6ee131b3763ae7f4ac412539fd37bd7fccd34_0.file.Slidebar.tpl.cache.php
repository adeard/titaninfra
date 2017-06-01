<?php
/* Smarty version 3.1.30, created on 2017-06-02 00:21:40
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Layout\Slidebar.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59304d2455cd53_55386355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41f6ee131b3763ae7f4ac412539fd37bd7fccd34' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Layout\\Slidebar.tpl',
      1 => 1496336169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59304d2455cd53_55386355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2307459304d244c63d3_09305887';
?>

<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
 			
            <!--<li class="sidebar-search-wrapper" style="margin-bottom:10px"></li>-->
            <!-- SUPER ADMIN -->
            <li class="start active open">
				<a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();?>
/main">
					<i class="icon-home"></i>
					<span class="title">Home</span>
					<span class="selected"></span>
					<span class="open"></span>
				</a>
			</li>
           
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sMenu']->value, 'Item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Item']->value) {
?>
                <?php if ($_smarty_tpl->tpl_vars['Item']->value['Rows'] == true) {?>
                    <?php $_smarty_tpl->_assignInScope('Routes', 'javascript:;');
?>
                    <?php $_smarty_tpl->_assignInScope('Ajaxify', '');
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_assignInScope('Routes', $_smarty_tpl->tpl_vars['Item']->value['Routes']);
?>
                    <?php $_smarty_tpl->_assignInScope('Ajaxify', 'ajaxify');
?>
                <?php }?>
                
                <?php if ($_smarty_tpl->tpl_vars['sParent']->value == $_smarty_tpl->tpl_vars['Item']->value['Kode']) {?>
                	<?php $_smarty_tpl->_assignInScope('activeParentMenu', 'active open');
?>
                    <?php $_smarty_tpl->_assignInScope('selectParentMenu', '<span class="selected"></span>');
?>
                    <?php $_smarty_tpl->_assignInScope('arrowParentMenu', '<span class="arrow open"></span>');
?>
                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['sKode']->value == $_smarty_tpl->tpl_vars['Item']->value['Kode']) {?>
                        <?php $_smarty_tpl->_assignInScope('activeParentMenu', 'active open');
?>
                        <?php $_smarty_tpl->_assignInScope('selectParentMenu', '<span class="selected"></span>');
?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['Item']->value['Rows'] == true) {?>
                            <?php $_smarty_tpl->_assignInScope('arrowParentMenu', '<span class="arrow open"></span>');
?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('arrowParentMenu', '<span class="open"></span>');
?>
                        <?php }?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_assignInScope('activeParentMenu', '');
?>
                        <?php $_smarty_tpl->_assignInScope('selectParentMenu', '');
?>
                        
                        <?php if ($_smarty_tpl->tpl_vars['Item']->value['Rows'] == true) {?>
                            <?php $_smarty_tpl->_assignInScope('arrowParentMenu', '<span class="arrow"></span>');
?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->_assignInScope('arrowParentMenu', '<span class=""></span>');
?>
                        <?php }?>
                    <?php }?>
               	<?php }?>
                
                <li class="<?php echo $_smarty_tpl->tpl_vars['activeParentMenu']->value;?>
">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo $_smarty_tpl->tpl_vars['Routes']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['Ajaxify']->value;?>
">
                        <i class="<?php echo $_smarty_tpl->tpl_vars['Item']->value['Class'];?>
"></i>
                        <span class="title"><?php echo $_smarty_tpl->tpl_vars['Item']->value['Menu'];?>
</span>
                        <?php echo $_smarty_tpl->tpl_vars['selectParentMenu']->value;?>

                        <?php echo $_smarty_tpl->tpl_vars['arrowParentMenu']->value;?>

                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['Item']->value['Rows'] == true) {?>
                    <ul class="sub-menu">
                    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Item']->value['Child'], 'ItemChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ItemChild']->value) {
?>
                        	<?php if ($_smarty_tpl->tpl_vars['ItemChild']->value['Rows'] == true) {?>
                                <?php $_smarty_tpl->_assignInScope('Routes', 'javascript:;');
?>
                                <?php $_smarty_tpl->_assignInScope('Ajaxify', '');
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('Routes', $_smarty_tpl->tpl_vars['ItemChild']->value['Routes']);
?>
                                <?php $_smarty_tpl->_assignInScope('Ajaxify', 'ajaxify');
?>
                            <?php }?>
                          	
                            <?php if ($_smarty_tpl->tpl_vars['sKode']->value == $_smarty_tpl->tpl_vars['ItemChild']->value['Kode']) {?>
                                <?php $_smarty_tpl->_assignInScope('activeSubMenu', 'active open');
?>
                                <?php $_smarty_tpl->_assignInScope('selectSubMenu', '<span class="selected"></span>');
?>
                                
                                <?php if ($_smarty_tpl->tpl_vars['ItemChild']->value['Rows'] == true) {?>
                                    <?php $_smarty_tpl->_assignInScope('arrowSubMenu', '<span class="arrow open"></span>');
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('arrowSubMenu', '<span class="open"></span>');
?>
                                <?php }?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('activeSubMenu', '');
?>
                                <?php $_smarty_tpl->_assignInScope('selectSubMenu', '');
?>
                                
                                <?php if ($_smarty_tpl->tpl_vars['ItemChild']->value['Rows'] == true) {?>
                                    <?php $_smarty_tpl->_assignInScope('arrowSubMenu', '<span class="arrow"></span>');
?>
                                <?php } else { ?>
                                    <?php $_smarty_tpl->_assignInScope('arrowSubMenu', '<span class=""></span>');
?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['sMenuAct']->value == $_smarty_tpl->tpl_vars['ItemChild']->value['Menu']) {?>
                                        <?php $_smarty_tpl->_assignInScope('activeSubMenu', 'active');
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('activeSubMenu', '');
?>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                			<li class="<?php echo $_smarty_tpl->tpl_vars['activeSubMenu']->value;?>
">
                                <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo $_smarty_tpl->tpl_vars['Routes']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['Ajaxify']->value;?>
">
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['Class'];?>
"></i>
                                    <span class="title"><?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['Menu'];?>
</span>
                                    <?php echo $_smarty_tpl->tpl_vars['selectSubMenu']->value;?>

                                    <?php echo $_smarty_tpl->tpl_vars['arrowSubMenu']->value;?>

                                </a>
                                <?php if ($_smarty_tpl->tpl_vars['ItemChild']->value['Rows'] == true) {?>
                                <ul class="sub-menu">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ItemChild']->value['Child'], 'ItemSubChild');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ItemSubChild']->value) {
?>
                                	<?php if ($_smarty_tpl->tpl_vars['ItemSubChild']->value['Rows'] == true) {?>
                                        <?php $_smarty_tpl->_assignInScope('Routes', 'javascript:;');
?>
                                        <?php $_smarty_tpl->_assignInScope('Ajaxify', '');
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('Routes', $_smarty_tpl->tpl_vars['ItemSubChild']->value['Routes']);
?>
                                        <?php $_smarty_tpl->_assignInScope('Ajaxify', 'ajaxify');
?>
                                    <?php }?>
                                    
                                    <?php if ($_smarty_tpl->tpl_vars['sMenuAct']->value == $_smarty_tpl->tpl_vars['ItemSubChild']->value['Menu']) {?>
                                        <?php $_smarty_tpl->_assignInScope('classActive', 'active');
?>
                                    <?php } else { ?>
                                        <?php $_smarty_tpl->_assignInScope('classActive', '');
?>
                                    <?php }?>
                                    
                                    <li class="<?php echo $_smarty_tpl->tpl_vars['classActive']->value;?>
">
                                        <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo $_smarty_tpl->tpl_vars['Routes']->value;?>
" class="<?php echo $_smarty_tpl->tpl_vars['Ajaxify']->value;?>
">
                                            <i class="<?php echo $_smarty_tpl->tpl_vars['ItemSubChild']->value['Class'];?>
"></i>
                                            <?php echo $_smarty_tpl->tpl_vars['ItemSubChild']->value['Menu'];?>

                                        </a>
                                    </li>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                                </ul>
                                <?php }?>
                            </li>
                            <!--
                            <?php if ($_smarty_tpl->tpl_vars['sMenuAct']->value == $_smarty_tpl->tpl_vars['ItemChild']->value['Menu']) {?>
                                <?php $_smarty_tpl->_assignInScope('classActive', 'active');
?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('classActive', '');
?>
                            <?php }?>
                            
                            <li class="<?php echo $_smarty_tpl->tpl_vars['classActive']->value;?>
">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['Routes']->value;?>
">
                                    <i class="<?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['Class'];?>
"></i>
                                    <?php echo $_smarty_tpl->tpl_vars['ItemChild']->value['Menu'];?>

                                </a>
                            </li>
                            -->
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                    <?php }?>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <div class="page-content">
    	<!--
    	<div class="page-bar page-bar-logo" style="padding:0 0 0 0; height:120px;">
        	<img src="<?php echo @constant('LOGO_HEADER');?>
" width="100%" height="96" style="border-bottom:1px solid #edeef0;">
        </div>
        -->
<?php }
}
