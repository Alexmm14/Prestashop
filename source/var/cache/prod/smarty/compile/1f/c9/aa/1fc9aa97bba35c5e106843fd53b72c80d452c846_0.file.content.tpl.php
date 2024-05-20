<?php
/* Smarty version 4.3.4, created on 2024-05-19 21:11:48
  from '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664abf747fa2d0_41569215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1fc9aa97bba35c5e106843fd53b72c80d452c846' => 
    array (
      0 => '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/content.tpl',
      1 => 1713354799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664abf747fa2d0_41569215 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
