<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 15:07:37
         compiled from "/var/www/html/prestashop/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13778290675fb52aa9024b67-09345223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fce4c9a8462ebb34be3de93d1ca371e6e2d3646' => 
    array (
      0 => '/var/www/html/prestashop/modules/blockbestsellers/views/templates/hook/blockbestsellers-home.tpl',
      1 => 1603900426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13778290675fb52aa9024b67-09345223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'best_sellers' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb52aa903ccf9_21042183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb52aa903ccf9_21042183')) {function content_5fb52aa903ccf9_21042183($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['best_sellers']->value)&&$_smarty_tpl->tpl_vars['best_sellers']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['best_sellers']->value,'class'=>'blockbestsellers tab-pane','id'=>'blockbestsellers'), 0);?>

<?php } else { ?>
<ul id="blockbestsellers" class="blockbestsellers tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No best sellers at this time.','mod'=>'blockbestsellers'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
