<?php
   if(perch_shop_successful_order_id()) {
   // successful payment
      perch_shop_empty_cart();
      perch_member_log_out();
   }
?>

   <?php
	   perch_layout('global.above-lg', array(
		    'section_heading' => 'shop',
		  ));
  ?>

   <?php
      perch_shop_complete_payment('paypal-express');
         if (perch_shop_order_successful()) {
            echo '<h2>Thank you for your order!</h2>';
         }else{
            echo '<h2>Sorry!</h2>';
      }
   ?>
    
<!--
      <?php
         // if (perch_member_is_passwordless()) {
         //perch_member_form('set_passwordless.html');
         // }
      ?>
-->
<?php
	perch_layout('global.below');
?>


