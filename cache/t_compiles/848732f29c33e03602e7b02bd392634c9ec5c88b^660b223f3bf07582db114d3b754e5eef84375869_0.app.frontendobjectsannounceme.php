<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-02 04:20:46
  from 'app:frontendobjectsannounceme' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eacd8feda6a98_50199794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660b223f3bf07582db114d3b754e5eef84375869' => 
    array (
      0 => 'app:frontendobjectsannounceme',
      1 => 1584705100,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eacd8feda6a98_50199794 (Smarty_Internal_Template $_smarty_tpl) {
?><article class="announcement-summary media">
	<div class="media-body">
		<h2 class="media-heading">
			<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>@constant('ROUTE_PAGE'),'page'=>"announcement",'op'=>"view",'path'=>$_smarty_tpl->tpl_vars['announcement']->value->getId()),$_smarty_tpl ) );?>
">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedTitle() ));?>

			</a>
		</h2>
		<p class="date">
			<span class="glyphicon glyphicon-calendar"></span>
			<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getDatePosted() ));?>

		</p>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'strip_unsafe_html' ][ 0 ], array( $_smarty_tpl->tpl_vars['announcement']->value->getLocalizedDescriptionShort() ));?>

	</div>
</article><!-- .announcement-summary -->
<?php }
}
