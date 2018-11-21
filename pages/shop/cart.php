<?php
	perch_layout('global.above-lg', array(
			'section_heading' => 'shop',
		));
?>
<!--By removing perch_layout('global/header'); in the php statement above, the layout reverts to the Nest layout with a sidebar. Other results are due to the CSS that is applied-->
<?php
	PerchSystem::set_var('empty_cart_message', perch_content('Your cart is empty', true));
	perch_shop_cart([
		'template' => 'cart/cart.html',
		]);
//	perch_layout('shop.sidebar', array(
//			'promo' => false,
//			'shipping' => false,
//			'currency' => true,
//		));

?>

<?php
	perch_layout('global.below');
?>
