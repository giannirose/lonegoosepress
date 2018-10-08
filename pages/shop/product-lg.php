<?php
	perch_layout('global/header');
		perch_content('Main Navigation');
			perch_shop_product(perch_get('product'), [
			'template' => 'products/product_lg.html',
			]);
	perch_layout('global/footer'); 
?>
