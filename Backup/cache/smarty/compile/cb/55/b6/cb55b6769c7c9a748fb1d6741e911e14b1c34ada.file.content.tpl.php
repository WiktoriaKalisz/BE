<?php /* Smarty version Smarty-3.1.19, created on 2020-11-18 13:48:35
         compiled from "/var/www/html/prestashop/admin703icuvv0/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14037981485fb51823bcba63-53055704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb55b6769c7c9a748fb1d6741e911e14b1c34ada' => 
    array (
      0 => '/var/www/html/prestashop/admin703icuvv0/themes/default/template/content.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14037981485fb51823bcba63-53055704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb51823be9a14_49663378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb51823be9a14_49663378')) {function content_5fb51823be9a14_49663378($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
