<?php
/* Smarty version 4.3.4, created on 2024-04-13 07:40:32
  from '/var/www/html/admin/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661a1ad0c53078_17622289',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1be9ecd024bb85aa8d909fd0348f9bddd7753491' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1709832552,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661a1ad0c53078_17622289 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
