<?php
/* Smarty version 4.3.4, created on 2024-04-13 07:40:32
  from '/var/www/html/admin/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661a1ad074bc73_96075847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feec59e4a5464dd47f886940a051299416fa3f71' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/content.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661a1ad074bc73_96075847 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}