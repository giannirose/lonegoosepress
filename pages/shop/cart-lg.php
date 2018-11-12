<?php
	perch_layout('global.above-lg', array(
			'title'           => perch_page_title(true),
			'section_heading' => 'shop',
		));

	PerchSystem::set_var('empty_cart_message', perch_content('Your cart is empty', true));
	perch_shop_cart([
		'template' => 'cart/cart_lg.html'
		]);

//	perch_layout('shop.sidebar', array(
//			'promo' => true,
//			'shipping' => true,
//			'currency' => true,
//		));
?>

<?php
	perch_layout('global.below');
?>

