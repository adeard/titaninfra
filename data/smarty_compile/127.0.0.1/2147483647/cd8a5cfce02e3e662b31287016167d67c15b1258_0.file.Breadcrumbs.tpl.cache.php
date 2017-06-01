<?php
/* Smarty version 3.1.30, created on 2017-06-02 00:21:40
  from "C:\xampp\htdocs\TPSOnline\application\view\default\Layout\Breadcrumbs.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59304d243f8900_10696230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd8a5cfce02e3e662b31287016167d67c15b1258' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPSOnline\\application\\view\\default\\Layout\\Breadcrumbs.tpl',
      1 => 1482909378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59304d243f8900_10696230 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '155959304d243d0817_87078267';
?>
<style type="text/css">
.page-breadcrumb li.active a{
	text-decoration: none;
	cursor:auto;
}
</style>
<div class="page-bar">
    <ul class="page-breadcrumb">
        <?php
$__section_menu_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_menu']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu'] : false;
$__section_menu_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['dashMenu']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_menu_0_total = $__section_menu_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_menu'] = new Smarty_Variable(array());
if ($__section_menu_0_total != 0) {
for ($__section_menu_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] = 0; $__section_menu_0_iteration <= $__section_menu_0_total; $__section_menu_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']++){
?>
            <?php if ($_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['active'] == 'active') {?>
            	<?php if ($_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['name'] == 'Home') {?>
                <li>
                	<i class="fa fa-home"></i>
                    <a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['name'];?>
</a>
                </li>
                <?php } else { ?>
                <li class='active'>
                    <a href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['name'];?>
</a>
                </li>
                <?php }?>
            <?php } else { ?>
                <li>
                    <?php if ($_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['name'] == 'Home') {?>
                    <i class="fa fa-home"></i>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo $_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['name'];?>
</a>
                    <i class="fa fa-angle-right"></i>
                    <?php } else { ?>
                    <a data-href="<?php echo $_smarty_tpl->tpl_vars['this']->value->basePath();
echo $_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['url'];?>
" class="ajaxify"><?php echo $_smarty_tpl->tpl_vars['dashMenu']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_menu']->value['index'] : null)]['name'];?>
</a>
                    <i class="fa fa-angle-right"></i>
                    <?php }?>
                </li>
            <?php }?>
        <?php
}
}
if ($__section_menu_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_menu'] = $__section_menu_0_saved;
}
?>
    </ul>
</div>
<?php }
}
