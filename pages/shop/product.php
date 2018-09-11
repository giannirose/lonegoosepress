<?php

	perch_layout('global/header');

		perch_shop_product(perch_get('product'), [
			'template' => 'products/product_lg.html',
		]); 

	perch_shop_product(perch_get('s'), [
	'template' => 'products/product.html',
	]);

perch_layout('global/footer');
 
?>

<p>This is product.php in templates - pages - shop</p>