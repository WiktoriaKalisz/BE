<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 15:26:55
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8064755155fb52f2f770740-76203641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f80b516ea0a30f4a6fc9ec147cd118e43f2e36b5' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/homefeatured/homefeatured.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8064755155fb52f2f770740-76203641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb52f2f786099_73926082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb52f2f786099_73926082')) {function content_5fb52f2f786099_73926082($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
