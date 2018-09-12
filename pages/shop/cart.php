<?php
	
	perch_layout('global.above-lg', array(

			'section_heading' => 'shop',
		));

?>

<!--By removing perch_layout('global/header'); in the php statement above, the layout reverts to the Nest layout with a sidebar. Other results are due to the CSS that is applied-->

	<div class="header-cart">

		
			<h1 class="header"><img src="/perch/resources/images/lonegoose.png" alt="lone goose image" width="72" height="72" /> lone goose press</h1>

	</div>

<?php
	PerchSystem::set_var('empty_cart_message', perch_content('Your cart is empty', true));
	perch_shop_cart([
		'template' => 'cart/cart_lg.html',
		]);

	perch_layout('shop.sidebar', array(
			'promo' => true,
			'shipping' => false,
			'currency' => true,
		));

?>

<?php
	perch_layout('global.below');

?>