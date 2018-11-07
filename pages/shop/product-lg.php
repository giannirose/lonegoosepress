<?php
	perch_layout('global/header'); ?>

		<?php	perch_content('Main Navigation'); ?>

			<?php		
 				perch_shop_product(perch_get('product'), [
					'template' => 'products/product_detail.html',
					'variants' => true,
				]);
			?>

<?php
	perch_layout('global/footer'); 
?>
