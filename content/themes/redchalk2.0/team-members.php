<?php
/*
Template Name: Team Members
*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>			
		
		<div class="parallax" data-stellar-background-ratio="<?php the_field('scroll_speed'); ?>" style="background-color:#<?php the_field('bg_color') ?>; background-image:url(<?php the_field('background_image'); ?>);">
	
			<h1><?php the_title(); ?></h1>		
			<p><?php the_field('subhead'); ?></p>
		
		</div>
		
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="entry">
				<?php // Determines if page has any custom modules
					
					if( have_rows('custom_modules') ):
					
						//Access main module template file
						get_template_part('custom-modules/module','index');
						
					endif;
					
					the_content(); ?>		

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php //comments_template(); ?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>