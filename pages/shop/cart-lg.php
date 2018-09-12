			<img src="/perch/resources/images/lonegoose.png" alt="lone goose image" width="72" height="72" />		

		<header class="header secondary-bold pageheader">
			<h1>lone goose presss</h1>
		</header>

<?php
	
	perch_layout('global.above-lg', array(
			'title'           => perch_page_title(true),
			'section_heading' => 'shop',
		));

	PerchSystem::set_var('empty_cart_message', perch_content('Your cart is empty', true));
	perch_shop_cart([
		'template' => 'cart-lg.php']);

	perch_layout('shop.sidebar', array(
			'promo' => true,
			'shipping' => true,
			'currency' => true,
		));
?>

<p>At templates > pages > shop > cart-lg.php</p>

<?php
	perch_layout('global.below');

?>