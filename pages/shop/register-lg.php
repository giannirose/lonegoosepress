<?php
	if (perch_member_logged_in()) {
		PerchSystem::redirect('/shop/checkout');
	}

	perch_layout('global.above', array(
			'title'           => perch_page_title(true),
			'section_heading' => 'shop',
		));

	PerchSystem::set_var('shipping_weight', perch_shop_get_shipping_weight());

	
		perch_shop_registration_form([
			'template' => 'checkout/register_lg.html'
		]);	

	perch_layout('shop.sidebar', array(
			'promo' => false,
			'shipping' => false,
			'currency' => false,
			'minicart' => false,
			'login' => false,
		));
?>

<p>in pages/shop/register-lg.php</p>

<?php
	perch_layout('global.below');
?>




