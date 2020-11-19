<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 15:07:36
         compiled from "/var/www/html/prestashop/modules/blockspecials/views/templates/hook/blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8980092845fb52aa8f10ba4-67409840%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2457bbf6f300207570f16c28545d70fb093f84f' => 
    array (
      0 => '/var/www/html/prestashop/modules/blockspecials/views/templates/hook/blockspecials-home.tpl',
      1 => 1603900428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8980092845fb52aa8f10ba4-67409840',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb52aa8f28f76_26921466',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb52aa8f28f76_26921466')) {function content_5fb52aa8f28f76_26921466($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
