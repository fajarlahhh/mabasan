<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-03 13:09:52
  from 'app:frontendcomponentsfooter.' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5eaea6807fc2e1_05699539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4dffb64063bb972c37e05619a2ccd9d0ea7473ac' => 
    array (
      0 => 'app:frontendcomponentsfooter.',
      1 => 1588490427,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaea6807fc2e1_05699539 (Smarty_Internal_Template $_smarty_tpl) {
?>
	</main>

		<?php if (empty($_smarty_tpl->tpl_vars['isFullWidth']->value)) {?>
		<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "sidebarCode", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Sidebar"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
		<?php if ($_smarty_tpl->tpl_vars['sidebarCode']->value) {?>
			<aside id="sidebar" class="pkp_structure_sidebar left col-xs-12 col-sm-2 col-md-4" role="complementary" aria-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.navigation.sidebar"),$_smarty_tpl ) ) ));?>
">
				<?php echo $_smarty_tpl->tpl_vars['sidebarCode']->value;?>

			</aside><!-- pkp_sidebar.left -->
		<?php }?>
	<?php }?>
	</div><!-- pkp_structure_content -->

	<footer class="footer" role="contentinfo">

		<div class="container">

			<div class="row">
				<?php if ($_smarty_tpl->tpl_vars['pageFooter']->value) {?>
				<div class="col-md-10">
					<?php echo $_smarty_tpl->tpl_vars['pageFooter']->value;?>

				</div>
				<?php }?>

				<div class="col-md-2" role="complementary">
					<a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"about",'op'=>"aboutThisPublishingSystem"),$_smarty_tpl ) );?>
">
                                                <img class="img-responsive" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"about.aboutThisPublishingSystem"),$_smarty_tpl ) );?>
" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['brandImage']->value;?>
">
                                        </a>
				</div>

			</div> <!-- .row -->
			<hr style="border: 1px solid #dcdcdc;">
			<p>@2018 MABASAN, Kantor Bahasa NTB. Powered by&nbsp;<a title="ojs" href="https://pkp.sfu.ca/" target="_blank" rel="noopener">OJS</a> &nbsp;©Designed by <a title="ls" href="http://www.lestari-informatika.com/" target="_blank" rel="noopener">Lestari Informatika</a></p>
			<p><a href="http://badanbahasa.kemdikbud.go.id/lamanbahasa/" target="_blank" rel="noopener"><img src="https://pkn.kebudayaan.id/wp-content/uploads/2019/09/logo-tutuwuri.png" alt=""  height="40px"></a> <a href="https://www.ristekdikti.go.id/"><img src="http://kapata-arkeologi.kemdikbud.go.id/public/site/images/admin/logo_Dikti.png" alt="" height="40px"></a> <a href="http://lipi.go.id/"><img src="http://kapata-arkeologi.kemdikbud.go.id/public/site/images/admin/lipi.png" alt="" height="40px"></a> <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank" rel="noopener"><img src="data:image/png;base64,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" alt="" height="40px"></a></p>
		</div><!-- .container -->
	</footer>
</div><!-- pkp_structure_page -->

<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_script'][0], array( array('context'=>"frontend",'scripts'=>$_smarty_tpl->tpl_vars['scripts']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['call_hook'][0], array( array('name'=>"Templates::Common::Footer::PageFooter"),$_smarty_tpl ) );?>

</body>
</html>
<?php }
}
