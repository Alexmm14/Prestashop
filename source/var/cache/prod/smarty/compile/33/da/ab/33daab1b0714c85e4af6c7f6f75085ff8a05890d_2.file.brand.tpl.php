<?php
/* Smarty version 4.3.4, created on 2024-04-13 07:40:32
  from '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/brand.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_661a1ad08bb453_42120165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33daab1b0714c85e4af6c7f6f75085ff8a05890d' => 
    array (
      0 => '/var/www/html/themes/classic/templates/catalog/_partials/miniatures/brand.tpl',
      1 => 1708963242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661a1ad08bb453_42120165 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1107573902661a1ad08b6b57_02812469', 'brand_miniature_item');
?>

<?php }
/* {block 'brand_miniature_item'} */
class Block_1107573902661a1ad08b6b57_02812469 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'brand_miniature_item' => 
  array (
    0 => 'Block_1107573902661a1ad08b6b57_02812469',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <li class="brand">
    <div class="brand-img"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy"></a></div>
    <div class="brand-infos">
      <p><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></p>
      <?php echo $_smarty_tpl->tpl_vars['brand']->value['text'];?>

    </div>
    <div class="brand-products">
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['nb_products'], ENT_QUOTES, 'UTF-8');?>
</a>
      <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['brand']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
    </div>
  </li>
<?php
}
}
/* {/block 'brand_miniature_item'} */
}