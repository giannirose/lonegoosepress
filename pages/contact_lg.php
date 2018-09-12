<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout('global/header'); ?>
<div class="contact contact-group">
	<div class="contact-image">
		<img src="/perch/resources/images/lonegoose.png" />
	</div>
		<div class="contact-address">
			<?php perch_content_custom('Contact Info',[
					'page' => '/common-info',
					'template' => '_contact_page.html'
					]);
			?>
		</div>
			<div class="contact-text">
				<?php perch_content('text_block.html'); ?>
			</div> 
				<div class="contact-form">
					<?php perch_form('contact_lg.html'); ?>
					<perch:template path="content/forms/contact_lg.html" />
				</div>
</div>
<?php perch_layout('global/footer'); ?>
