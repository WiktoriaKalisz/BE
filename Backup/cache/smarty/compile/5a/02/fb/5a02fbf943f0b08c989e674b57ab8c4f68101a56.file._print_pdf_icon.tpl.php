<?php /* Smarty version Smarty-3.1.19, created on 2020-11-19 14:39:20
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/orders/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10155331715fb67588028c09-86352914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a02fbf943f0b08c989e674b57ab8c4f68101a56' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10155331715fb67588028c09-86352914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb6758804e288_78611395',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb6758804e288_78611395')) {function content_5fb6758804e288_78611395($_smarty_tpl) {?>


<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE')&&$_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
	
	<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateDeliverySlipPDF&amp;id_order=<?php echo $_smarty_tpl->tpl_vars['order']->value->id;?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }} ?>
