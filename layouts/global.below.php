	</div>
	<div class="navbar">
		<nav>
			<ul class="fin">
				<li><a class="members" href="/members/">Member login</a></li>
			</ul>

		</nav>
	</div>
	<script src="/assets/js/jquery.js" type="text/javascript"></script>
	<?php 
		if (perch_layout_var('carousel', true)) {
			echo ' 	<script src="/assets/js/responsive-carousel.min.js" type="text/javascript"></script>
					<script src="/assets/js/responsive-carousel.autoplay.js" type="text/javascript"></script>
					<script src="/assets/js/jquery.magnific-popup.min.js" type="text/javascript"></script>';
		};
	?>
	<script src="/assets/js/nest.js" type="text/javascript"></script>


<?php
/*		include(PERCH_SITEPATH.'/assets/img/nest.svg');*/
?>

</body>
</html>