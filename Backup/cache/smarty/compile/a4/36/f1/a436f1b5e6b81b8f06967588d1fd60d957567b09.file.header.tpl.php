<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 15:07:36
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/modules/homeslider/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14869948545fb52aa81b50a7-91096239%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a436f1b5e6b81b8f06967588d1fd60d957567b09' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/homeslider/header.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14869948545fb52aa81b50a7-91096239',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb52aa822b343_90429633',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb52aa822b343_90429633')) {function content_5fb52aa822b343_90429633($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_loop'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['loop'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_width'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['width'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_speed'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['speed'])),$_smarty_tpl);?>

    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('homeslider_pause'=>intval($_smarty_tpl->tpl_vars['homeslider']->value['pause'])),$_smarty_tpl);?>

<?php }?><?php }} ?>
