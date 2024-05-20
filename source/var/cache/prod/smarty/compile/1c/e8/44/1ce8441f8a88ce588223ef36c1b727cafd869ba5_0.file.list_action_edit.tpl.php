<?php
/* Smarty version 4.3.4, created on 2024-05-19 21:25:34
  from '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/helpers/list/list_action_edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664ac2ae90e801_27808812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce8441f8a88ce588223ef36c1b727cafd869ba5' => 
    array (
      0 => '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/helpers/list/list_action_edit.tpl',
      1 => 1713354799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664ac2ae90e801_27808812 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['href']->value,'html','UTF-8' ));?>
" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' ));?>

</a>
<?php }
}
