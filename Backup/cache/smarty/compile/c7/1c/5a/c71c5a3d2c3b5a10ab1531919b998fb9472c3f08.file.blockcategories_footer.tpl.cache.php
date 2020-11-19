<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 14:14:34
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15039863305fb51e3ae63be3-91044001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c71c5a3d2c3b5a10ab1531919b998fb9472c3f08' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/blockcategories/blockcategories_footer.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15039863305fb51e3ae63be3-91044001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'isDhtml' => 0,
    'blockCategTree' => 0,
    'child' => 0,
    'numberColumn' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb51e3aedaa56_14530789',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb51e3aedaa56_14530789')) {function content_5fb51e3aedaa56_14530789($_smarty_tpl) {?>

<!-- Block categories module -->
<section class="blockcategories_footer footer-block col-xs-12 col-sm-2">
	<h4><?php echo smartyTranslate(array('s'=>'Categories','mod'=>'blockcategories'),$_smarty_tpl);?>
</h4>
	<div class="category_footer toggle-footer">
		<div class="list">
			<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
			<?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blockCategTree']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['child']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['child']->iteration=0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->_loop = true;
 $_smarty_tpl->tpl_vars['child']->iteration++;
 $_smarty_tpl->tpl_vars['child']->last = $_smarty_tpl->tpl_vars['child']->iteration === $_smarty_tpl->tpl_vars['child']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['iteration']++;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['blockCategTree']['last'] = $_smarty_tpl->tpl_vars['child']->last;
?>
				<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value,'last'=>'true'), 0);?>

				<?php } else { ?>
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['branche_tpl_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('node'=>$_smarty_tpl->tpl_vars['child']->value), 0);?>

				<?php }?>
			
				<?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['iteration']%$_smarty_tpl->tpl_vars['numberColumn']->value)==0&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['blockCategTree']['last']) {?>
			</ul>
		</div>
	</div> <!-- .category_footer -->

	<div class="category_footer">
		<div class="list">
			<ul class="tree <?php if ($_smarty_tpl->tpl_vars['isDhtml']->value) {?>dhtml<?php }?>">
				<?php }?>
			<?php } ?>
			</ul>
		</div>
	</div> <!-- .category_footer -->
</section>
<!-- /Block categories module -->
<?php }} ?>
