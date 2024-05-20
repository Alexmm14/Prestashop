<?php
/* Smarty version 4.3.4, created on 2024-05-19 21:25:34
  from '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/controllers/images/modal_confirm_delete_type.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664ac2ae8d20c0_24038267',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e891538fab17b72fa1136fd48a0d1dae7fb50646' => 
    array (
      0 => '/var/www/html/admin446f8tiznq6fruc1veh/themes/default/template/controllers/images/modal_confirm_delete_type.tpl',
      1 => 1713354799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664ac2ae8d20c0_24038267 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <div class="form-group">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"If you delete this image format, the theme won't be able to use it anymore. This will result in a degraded experience on your front office.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

  </div>

  <div class="modal-checkbox">
    <input type="checkbox" id="delete_linked_images" name="delete">
    <label for="delete_linked_images"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Delete the images linked to this image setting",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>
</label>
  </div>
</div>
<?php }
}
