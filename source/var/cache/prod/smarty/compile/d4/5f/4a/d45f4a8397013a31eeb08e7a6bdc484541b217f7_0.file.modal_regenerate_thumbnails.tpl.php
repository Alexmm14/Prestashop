<?php
/* Smarty version 4.3.4, created on 2024-05-19 21:25:34
  from '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664ac2ae8cf570_79923863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd45f4a8397013a31eeb08e7a6bdc484541b217f7' => 
    array (
      0 => '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/controllers/images/modal_regenerate_thumbnails.tpl',
      1 => 1713354799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664ac2ae8cf570_79923863 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
