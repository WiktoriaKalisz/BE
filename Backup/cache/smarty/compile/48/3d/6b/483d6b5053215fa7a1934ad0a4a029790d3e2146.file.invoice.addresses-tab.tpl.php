<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 16:18:11
         compiled from "/var/www/html/prestashop/pdf/invoice.addresses-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8274358305fb53b336a0628-90135384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '483d6b5053215fa7a1934ad0a4a029790d3e2146' => 
    array (
      0 => '/var/www/html/prestashop/pdf/invoice.addresses-tab.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8274358305fb53b336a0628-90135384',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order_invoice' => 0,
    'delivery_address' => 0,
    'invoice_address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb53b336bb991_50926916',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb53b336bb991_50926916')) {function content_5fb53b336bb991_50926916($_smarty_tpl) {?>
<table id="addresses-tab" cellspacing="0" cellpadding="0">
	<tr>
		<td width="33%"><span class="bold"> </span><br/><br/>
			<?php if (isset($_smarty_tpl->tpl_vars['order_invoice']->value)) {?><?php echo $_smarty_tpl->tpl_vars['order_invoice']->value->shop_address;?>
<?php }?>
		</td>
		<td width="33%"><?php if ($_smarty_tpl->tpl_vars['delivery_address']->value) {?><span class="bold"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

			<?php }?>
		</td>
		<td width="33%"><span class="bold"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br/><br/>
				<?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

		</td>
	</tr>
</table>
<?php }} ?>
