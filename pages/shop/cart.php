<?php
	perch_layout('global.above-lg', array(
			'section_heading' => 'shop',
		));
?>

<?php
	PerchSystem::set_var('empty_cart_message', perch_content('Your cart is empty', true));
	perch_shop_cart([
		'template' => 'cart/cart.html',
		]);
?>
<!--
<?php
//	perch_layout('shop.sidebar', array(
//			'promo' => false,
//			'shipping' => false,
//			'currency' => false,
//		));
?>
-->
<!--
<?php
//	perch_layout('global.below');
?>
-->

				</div>
			</div>
		</body>
	</html>
