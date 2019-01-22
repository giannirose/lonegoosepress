<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('global/header'); ?>
	<?php perch_content('Main Navigation'); ?>

		  <?php
    		perch_content_create('Impressions', array(
         	'template'   => 'articles/impression_detail.html',
         	'multiple'    => true,
         	'edit-mode' => 'listdetail',
    		));
   	
   	    	perch_content_custom('Impressions', array(
         	'template' => 'articles/impression_listing.html',
    			));
    		?>

	<?php perch_layout('global/footer'); ?>