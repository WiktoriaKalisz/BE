<?php /*%%SmartyHeaderCode:17735592075fb51e3b0e8159-58609141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '39e4da6fa93a02c1577f0aa329c737d8b459b4ea' => 
    array (
      0 => '/var/www/html/prestashop/themes/default-bootstrap/modules/blockcms/blockcms.tpl',
      1 => 1452095428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17735592075fb51e3b0e8159-58609141',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5fb581d01808d0_36812889',
  'has_nocache_code' => true,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5fb581d01808d0_36812889')) {function content_5fb581d01808d0_36812889($_smarty_tpl) {?>
	<!-- Block CMS module footer -->
	<section class="footer-block col-xs-12 col-sm-2" id="block_various_links_footer">
		<h4>Informacja</h4>
		<ul class="toggle-footer">
							<li class="item">
					<a href="https://localhost/prestashop/promocje" title="Promocje">
						Promocje
					</a>
				</li>
									<li class="item">
				<a href="https://localhost/prestashop/nowe-produkty" title="Nowe produkty">
					Nowe produkty
				</a>
			</li>
										<li class="item">
					<a href="https://localhost/prestashop/najczesciej-kupowane" title="Najczęściej kupowane">
						Najczęściej kupowane
					</a>
				</li>
												<li class="item">
				<a href="https://localhost/prestashop/kontakt" title="Kontakt z nami">
					Kontakt z nami
				</a>
			</li>
															<li class="item">
						<a href="https://localhost/prestashop/content/1-dostawa" title="Dostawa">
							Dostawa
						</a>
					</li>
																<li class="item">
						<a href="https://localhost/prestashop/content/2-nota-prawna" title="Nota Prawna">
							Nota Prawna
						</a>
					</li>
																<li class="item">
						<a href="https://localhost/prestashop/content/3-regulamin-uzytkowania" title="Regulamin użytkowania">
							Regulamin użytkowania
						</a>
					</li>
																<li class="item">
						<a href="https://localhost/prestashop/content/4-o-nas" title="O nas">
							O nas
						</a>
					</li>
																<li class="item">
						<a href="https://localhost/prestashop/content/5-bezpieczna-platnosc" title="Bezpieczna płatność">
							Bezpieczna płatność
						</a>
					</li>
												</ul>
		
	</section>
		<section class="bottom-footer col-xs-12">
		<div>
			<?php echo smartyTranslate(array('s'=>'[1] %3$s %2$s - Ecommerce software by %1$s [/1]','mod'=>'blockcms','sprintf'=>array('PrestaShop™',date('Y'),'©'),'tags'=>array('<a class="_blank" href="http://www.prestashop.com">')),$_smarty_tpl);?>

		</div>
	</section>
		<!-- /Block CMS module footer -->
<?php }} ?>
