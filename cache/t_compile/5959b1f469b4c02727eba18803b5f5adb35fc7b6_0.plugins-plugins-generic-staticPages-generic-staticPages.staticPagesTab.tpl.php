<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-05 00:23:58
  from 'plugins-plugins-generic-staticPages-generic-staticPages:staticPagesTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eb095fecb9067_24288318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5959b1f469b4c02727eba18803b5f5adb35fc7b6' => 
    array (
      0 => 'plugins-plugins-generic-staticPages-generic-staticPages:staticPagesTab.tpl',
      1 => 1586500796,
      2 => 'plugins-plugins-generic-staticPages-generic-staticPages',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eb095fecb9067_24288318 (Smarty_Internal_Template $_smarty_tpl) {
?><tab id="staticPages" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.staticPages.staticPages"),$_smarty_tpl ) );?>
">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'staticPageGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_COMPONENT'),'component'=>"plugins.generic.staticPages.controllers.grid.StaticPageGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"staticPageGridContainer",'url'=>$_smarty_tpl->tpl_vars['staticPageGridUrl']->value),$_smarty_tpl ) );?>

</tab>
<?php }
}
