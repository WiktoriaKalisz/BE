<?php /* Smarty version Smarty-3.1.19, created on 2020-11-19 14:39:27
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629163715fb6758f411c10-54361576%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b3a0195653d2a459d259a741866f8a6b136eddc' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629163715fb6758f411c10-54361576',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb6758f41d7b3_04230430',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb6758f41d7b3_04230430')) {function content_5fb6758f41d7b3_04230430($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
