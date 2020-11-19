<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 14:23:54
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/helpers/list/list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1651386385fb5206aab73f1-47209771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d5cc2955186e51259789c3a1356fbec489db6be' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/helpers/list/list_action_details.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651386385fb5206aab73f1-47209771',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'params' => 0,
    'id' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb5206aad41c3_74801104',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb5206aad41c3_74801104')) {function content_5fb5206aad41c3_74801104($_smarty_tpl) {?>

<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" id="details_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value['action'], ENT_QUOTES, 'UTF-8', true);?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="">
	<i class="icon-eye-open"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
