<?php perch_layout('global/header-blog'); ?>

	<?php perch_content('Blog Heading') ?>

		<!--<?php 
			//perch_content('Main Navigation'); 
			?>
		-->

		<?php perch_content('Timely Alert'); ?>
		
			<div class="primary-content">
		
		   	<div class="post">
		    		<?php perch_blog_post(perch_get('s')); ?>
					
					<!--<?php 
					// perch_blog_author_for_post(perch_get('s')); 
					?>-->

		    			<div class="meta post">
<!--List by Categories
		            	<div class="cats">
		               	<?php 
		               	//perch_blog_post_categories(perch_get('s')); ?>
		            	</div>
-->
<!--List by Tags

		            	<div class="tags">
		               	<?php 
		               	//perch_blog_post_tags(perch_get('s')); 
		               	?>
		            	</div>
-->
		      		</div>

		    		<?php perch_blog_post_comments(perch_get('s')); ?>

		    		<?php perch_blog_post_comment_form(perch_get('s')); ?>

		   	</div>

				<div class="sidebar">
				<nav class="post-right">
		    		<!--<h4>Archive</h4>-->
		    		<!-- The following functions are different ways to display archives. You can use any or all of these.

		    		All of these functions can take a parameter of a template to overwrite the default template, for example:

		    		perch_blog_categories('my_template.html');
		   		-->

		    		<!--  By category listing
		    			<?php 
		   				//perch_blog_categories(); 
		    			?>
		    		-->

		    		<!--  By tag -->
		    		<?php perch_blog_tags(); ?>

		    		<!--<?php 
		    		// perch_blog_author_for_post(perch_get('s')); 
		    		?> -->

				   <!--
				   <?php 
				   	//perch_blog_recent_posts(10); 
				   ?>
				 	-->

		   		<!--  By year
		   		<?php 
		   			//perch_blog_date_archive_years(); 
		   		?>
		   		-->

		   		<!--  By year and then month - can take parameters for two templates. The first displays the years and the second the months see the default templates for examples
		   		<?php 
		   			//perch_blog_date_archive_months(); 
		   		?>
		   		-->
    			</nav>
				</div>
			</div>

<!--</article>-->

<?php perch_layout('global/footer-blog'); ?> 
