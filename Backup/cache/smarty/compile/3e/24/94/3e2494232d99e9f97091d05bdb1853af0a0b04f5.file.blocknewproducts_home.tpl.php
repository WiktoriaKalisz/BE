<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 15:26:55
         compiled from "/var/www/html/prestashop/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5920947525fb52f2f05ced6-04825633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e2494232d99e9f97091d05bdb1853af0a0b04f5' => 
    array (
      0 => '/var/www/html/prestashop/modules/blocknewproducts/views/templates/hook/blocknewproducts_home.tpl',
      1 => 1603900427,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5920947525fb52f2f05ced6-04825633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb52f2f0780f5_71657944',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb52f2f0780f5_71657944')) {function content_5fb52f2f0780f5_71657944($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['new_products']->value)&&$_smarty_tpl->tpl_vars['new_products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'class'=>'blocknewproducts tab-pane','id'=>'blocknewproducts'), 0);?>

<?php } else { ?>
<ul id="blocknewproducts" class="blocknewproducts tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
