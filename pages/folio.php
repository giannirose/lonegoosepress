<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout('global/header'); ?>
	<?php perch_content('Main Navigation'); ?>
		<div>
			<div class="folio"><!--close before footer-->
				<div class="center-content">
					<h2 class="text-center"><?php perch_content('Page Headline'); ?></h2>	
					<?php perch_content('Page Intro'); ?>
				</div>
					<aside class="aside-left"></aside><!--Even if unused, this maintains the margins and look from the home page-->
						<aside class="aside-right"></aside><!--Even if unused, this maintains the margins and look from the home page-->
			</div><!--end class="folio"-->
				<?php perch_content('Featured Image'); ?>
				<?php perch_content('Folio of Items'); ?>
		</div>

<?php perch_layout('global/footer'); ?>
