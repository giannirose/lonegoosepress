<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout('global/header'); ?>

	<?php perch_content('Main Navigation'); ?>

		<div class="folio">

			<div class="center-content">
				<h2 class="text-center"><?php perch_content('Page Headline'); ?></h2>	
				<?php perch_content('Page Intro'); ?>
			</div>

				<aside class="aside-left"></aside><!--Even if unused, this maintains the margins and look from the home page-->
				<aside class="aside-right"></aside><!--Even if unused, this maintains the margins and look from the home page-->
		</div><!--end class="folio"-->

		<div class="folio-list">
			<?php perch_shop_products([
    			'template' => '/products/folio_featured_item_shop.html',
			]); ?>
		</div>

    	<div class="folio-list-shop product boxer">

			<?php perch_shop_products([
    			'template' => '/products/list_lg.html',
    			'category' => 'products/books',
    			'sort' => 'sorting_number',
    			'sort-order' => 'ASC',
    			'sort-type' => 'numeric',
    			'variants' => true,
			]); ?>

    	</div><!--Close div class=folio-list product boxer-->
 
<?php perch_layout('global/footer'); ?>