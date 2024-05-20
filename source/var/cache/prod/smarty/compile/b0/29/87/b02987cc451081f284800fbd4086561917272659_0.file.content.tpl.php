<?php
/* Smarty version 4.3.4, created on 2024-05-19 20:51:20
  from '/var/www/html/admin446f8tiznq6fruc1veh/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664abaa8de8841_30970862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b02987cc451081f284800fbd4086561917272659' => 
    array (
      0 => '/var/www/html/admin446f8tiznq6fruc1veh/themes/new-theme/template/content.tpl',
      1 => 1713354799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664abaa8de8841_30970862 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
