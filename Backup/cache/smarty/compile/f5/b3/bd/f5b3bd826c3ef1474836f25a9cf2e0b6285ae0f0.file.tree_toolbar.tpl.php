<?php /* Smarty version Smarty-3.1.19, created on 2020-11-19 14:39:25
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2248118765fb6758dcf8fc3-39943431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5b3bd826c3ef1474836f25a9cf2e0b6285ae0f0' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2248118765fb6758dcf8fc3-39943431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb6758dd4aa08_44241864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb6758dd4aa08_44241864')) {function content_5fb6758dd4aa08_44241864($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
