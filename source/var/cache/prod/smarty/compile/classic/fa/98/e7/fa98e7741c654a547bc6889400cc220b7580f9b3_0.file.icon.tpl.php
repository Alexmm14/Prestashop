<?php
/* Smarty version 4.3.4, created on 2024-05-19 21:12:01
  from '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_664abf81c99b38_37550391',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa98e7741c654a547bc6889400cc220b7580f9b3' => 
    array (
      0 => '/var/www/html/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/icon.tpl',
      1 => 1713354801,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_664abf81c99b38_37550391 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3 first-block">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Image','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 first-block">
        <div class="psr_picto_showing input-group col-lg-4">
            <img class="psr-picto picto_by_module svg"
                 src="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['icon']) {
echo $_smarty_tpl->tpl_vars['block']->value['icon'];
} elseif ((isset($_smarty_tpl->tpl_vars['block']->value)) && $_smarty_tpl->tpl_vars['block']->value['custom_icon']) {
echo $_smarty_tpl->tpl_vars['block']->value['custom_icon'];
}?>"/>
            <div class="svg_chosed_here">
                <img class="image-preview-lang img-thumbnail hide" src="" alt="" width="24px" height="24px"/>
            </div>
            <div>
                <i class="material-icons">landscape</i>
            </div>
            <span class="modify_icon" data-id="<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Modify icon','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</span>
        </div>
        <div class="input-group upload_file_button">
            <label class="file_label" for="file<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>" data-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or upload file','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'or upload file','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>
</label>
            <label class="input-group-btn">
                <span>
                    <i class="icon-file"></i><input id="file<?php if ((isset($_smarty_tpl->tpl_vars['block']->value))) {
echo $_smarty_tpl->tpl_vars['block']->value['id_psreassurance'];
}?>" class="slide_image" data-preview="image-preview-lang" type="file" name="image-lang">
                </span>
            </label>
        </div>
        <div class="help-block">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose SVG for better customization. Other allowed formats are: .gif, .jpg, .png','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}