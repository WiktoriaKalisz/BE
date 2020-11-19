<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 16:18:16
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8144606775fb53b38988157-34566293%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2ef2b475433ad3c34faa7a424258dbd08d5a67a' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/confirmation.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8144606775fb53b38988157-34566293',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb53b389e6b58_97723875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb53b389e6b58_97723875')) {function content_5fb53b389e6b58_97723875($_smarty_tpl) {?>
<div class="box">
    <p><?php echo smartyTranslate(array('s'=>'Your order on','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <span class="bold"><?php echo $_smarty_tpl->tpl_vars['shop_name']->value;?>
</span> <?php echo smartyTranslate(array('s'=>'is complete.','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <br />
        <?php echo smartyTranslate(array('s'=>'You have chosen the cash on delivery method.','mod'=>'cashondelivery'),$_smarty_tpl);?>

        <br /><span class="bold"><?php echo smartyTranslate(array('s'=>'Your order will be sent very soon.','mod'=>'cashondelivery'),$_smarty_tpl);?>
</span>
        <br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'cashondelivery'),$_smarty_tpl);?>
 <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact-form',true), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'cashondelivery'),$_smarty_tpl);?>
</a>.
    </p>
</div><?php }} ?>
