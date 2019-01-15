<?php
//Section below is the perch-supplied set-up for manual processing
	if (!perch_member_logged_in()) {
		//PerchSystem::redirect('/shop/register');
	}

//The following was the default entry	
/*
	if (perch_shop_cart_has_property('terms_agreed')) {
		perch_shop_checkout('manual', [
		'return_url' => '/shop/result',
    	'cancel_url' => '/shop',
		]);
}
*/
//End default entry 

//Following  are from Perch Documentation for Paypal Express
if (perch_member_logged_in()) {

  //your 'success' return URL for staging.lonegoosepress.com
//  $return_url = 'http://staging.lonegoosepress.com/payment';
//  $cancel_url = 'http://staging.lonegoosepress.com/index.php/';

  $return_url = 'http://lgoose.loc/store/payment';
  $cancel_url = 'http://lgoose.loc/';

  perch_shop_checkout('paypal-express', [
    'return_url' => $return_url,
    'cancel_url' => $cancel_url,
  ]);
}
//End part 1 of PayPal Express from documentation
//The following is part 2 from documentation
 perch_shop_complete_payment('paypal-express');

  if (perch_shop_order_successful()) {
      echo '<h1>Thank you for your order!</h1>';
    }else{
      echo '<h1>Sorry!</h1>';
    }
//End part 2 of documentation

    

	perch_layout('global.above', array(
			'title'           => perch_page_title(true),
			'section_heading' => 'shop',
		));


    // Show the cart with a non-interactive template
   // perch_shop_cart([
   //     'template'=>'cart/cart_static.html'
   // ]);

    // Show the order addresses
    perch_shop_order_addresses();

    // Display the form with the T&Cs checkbox
    perch_shop_form('checkout/confirm.html');

	perch_layout('shop.sidebar', array(
			'promo' => false,
			'shipping' => false,
			'currency' => false,
			'minicart' => false,
			'social' => false,
      'login' => true,
      'register' => true,
		));

	perch_layout('global.below');
?>
