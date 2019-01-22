<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('global/header'); ?>
		<?php perch_content('Main Navigation'); ?>

<?php
    perch_content_custom('Impressions', array(
         'page' => '/impressions',
         'template' => 'articles/impression_detail.html',
         'filter' => 'slug',
         'match' => 'eq',
         'value' => perch_get('s'),
         'count' => 1,
    ));
?>

<?php perch_layout('global/footer'); ?>
