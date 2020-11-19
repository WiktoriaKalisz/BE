<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 14:18:20
         compiled from "/var/www/html/prestashop/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1180112725fb51f1cead7f6-46493961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9784f8cb4b6124b6e74ea1d8e0d9eb45aec085' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/bankwire/views/templates/hook/payment.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1180112725fb51f1cead7f6-46493961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb51f1cf04be1_05718872',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb51f1cf04be1_05718872')) {function content_5fb51f1cf04be1_05718872($_smarty_tpl) {?>
<div class="row">
	<div class="col-xs-12">
		<p class="payment_module">
			<a class="bankwire" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('bankwire','payment'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Pay by bank wire','mod'=>'bankwire'),$_smarty_tpl);?>
 <span><?php echo smartyTranslate(array('s'=>'(order processing will be longer)','mod'=>'bankwire'),$_smarty_tpl);?>
</span>
			</a>
		</p>
	</div>
</div>
<?php }} ?>
