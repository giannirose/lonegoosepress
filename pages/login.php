<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
	<?php perch_layout('global/header'); ?>
		<?php perch_content('Main Navigation'); ?>
<?php perch_member_form('register.html'); ?>

	<?php perch_layout('global/footer'); ?>