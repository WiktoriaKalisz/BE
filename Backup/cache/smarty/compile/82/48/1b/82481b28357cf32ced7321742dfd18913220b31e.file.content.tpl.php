<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 15:37:52
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/cms_content/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8403716645fb531c0e8bd32-16134716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82481b28357cf32ced7321742dfd18913220b31e' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/cms_content/content.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8403716645fb531c0e8bd32-16134716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cms_breadcrumb' => 0,
    'content' => 0,
    'url_prev' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb531c0ee1966_91619214',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb531c0ee1966_91619214')) {function content_5fb531c0ee1966_91619214($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['cms_breadcrumb']->value)) {?>
	<ul class="breadcrumb cat_bar">
		<?php echo $_smarty_tpl->tpl_vars['cms_breadcrumb']->value;?>

	</ul>
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['url_prev']->value)) {?>
	<script type="text/javascript">
	$(document).ready(function () {
		var re = /url_preview=(.*)/;
		var url = re.exec(window.location.href);
		if (typeof url !== 'undefined' && url !== null && typeof url[1] !== 'undefined' && url[1] === "1")
			window.open("<?php echo $_smarty_tpl->tpl_vars['url_prev']->value;?>
", "_blank");
	});
	</script>
<?php }?>
<?php }} ?>
