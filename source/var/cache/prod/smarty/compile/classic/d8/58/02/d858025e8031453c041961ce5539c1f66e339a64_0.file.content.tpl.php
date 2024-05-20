<?php
/* Smarty version 4.3.4, created on 2024-05-19 21:12:01
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664abf81c72175_97209072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd858025e8031453c041961ce5539c1f66e339a64' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1713354801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_664abf81c72175_97209072 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
