<?php /* Smarty version Smarty-3.1.19, created on 2020-11-19 14:39:25
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/products/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17884675235fb6758dd842a6-71364568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69918dccbff0414e388ac132420f002961a60aa8' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/products/helpers/tree/tree_header.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17884675235fb6758dd842a6-71364568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_url' => 0,
    'is_category_filter' => 0,
    'toolbar' => 0,
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb6758dd9d723_59997033',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb6758dd9d723_59997033')) {function content_5fb6758dd9d723_59997033($_smarty_tpl) {?>
<script type="text/javascript">
	$(document).ready(function(){
		$('#filter-by-category').click(function() {
			if ($(this).is(':checked')) {
				$('#block_category_tree').show();
				$('#category-tree-toolbar').show();
			} else {
				$('#block_category_tree').hide();
				$('#category-tree-toolbar').hide();
				location.href = '<?php echo $_smarty_tpl->tpl_vars['base_url']->value;?>
&reset_filter_category=1';
			}
		});
	});
</script>

<div class="tree-panel-heading-controls clearfix">
	<div id="category-tree-toolbar" <?php if (!$_smarty_tpl->tpl_vars['is_category_filter']->value) {?>style="display:none;"<?php }?>>
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
	<label class="tree-panel-label-title">
		<input type="checkbox" id="filter-by-category" name="filter-by-category" <?php if ($_smarty_tpl->tpl_vars['is_category_filter']->value) {?>checked="checked"<?php }?> />
		<i class="icon-tags"></i>
		<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

	</label>
</div>
<?php }} ?>
