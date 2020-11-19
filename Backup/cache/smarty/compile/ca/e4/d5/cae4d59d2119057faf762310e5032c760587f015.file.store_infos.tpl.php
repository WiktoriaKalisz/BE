<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 17:54:44
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/store_infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13074720815fb551d4084fa6-95556102%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cae4d59d2119057faf762310e5032c760587f015' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/store_infos.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13074720815fb551d4084fa6-95556102',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'days_datas' => 0,
    'one_day' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb551d40f0dc2_32464054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb551d40f0dc2_32464054')) {function content_5fb551d40f0dc2_32464054($_smarty_tpl) {?>


	<?php  $_smarty_tpl->tpl_vars['one_day'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['one_day']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['days_datas']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['one_day']->key => $_smarty_tpl->tpl_vars['one_day']->value) {
$_smarty_tpl->tpl_vars['one_day']->_loop = true;
?>
	<p>
		<strong class="dark"><?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['one_day']->value['day']),$_smarty_tpl);?>
: </strong> &nbsp;<span><?php echo $_smarty_tpl->tpl_vars['one_day']->value['hours'];?>
</span>
	</p>
	<?php } ?>

<?php }} ?>
