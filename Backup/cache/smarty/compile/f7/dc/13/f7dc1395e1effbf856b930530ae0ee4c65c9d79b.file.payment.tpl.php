<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 14:18:20
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13102238215fb51f1cf12eb8-59099158%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7dc1395e1effbf856b930530ae0ee4c65c9d79b' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/cashondelivery/views/templates/hook/payment.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13102238215fb51f1cf12eb8-59099158',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb51f1cf26f58_64538924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb51f1cf26f58_64538924')) {function content_5fb51f1cf26f58_64538924($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
        <p class="payment_module">
            <a class="cash" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('cashondelivery','validation',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>
" rel="nofollow">
            	<?php echo smartyTranslate(array('s'=>'Pay with cash on delivery (COD)','mod'=>'cashondelivery'),$_smarty_tpl);?>

            	<span>(<?php echo smartyTranslate(array('s'=>'You pay for the merchandise upon delivery','mod'=>'cashondelivery'),$_smarty_tpl);?>
)</span>
            </a>
        </p>
    </div>
</div>
<?php }} ?>
