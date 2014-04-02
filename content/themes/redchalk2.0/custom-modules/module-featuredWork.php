<!-- Featured Work Section -->

<div class="full-width module <?php the_sub_field('add_class'); ?>" style="background-color:<?php the_sub_field('bg_color'); ?>">
	
	<div class="row">			
		<div class="small-12 small-centered large-8 columns">
			<h2><?php the_sub_field('section_title'); ?></h2>
		</div>
	</div>
	
	<div class="row">	
		<div class="small-12 small-centered large-8 columns">
			<?php the_sub_field('section_copy'); ?>
			<p><a class="module-link" href="<?php the_sub_field('section_href'); ?>" title="<?php the_sub_field('section_link'); ?>"><?php the_sub_field('section_link'); ?></a></p>
		</div>
	</div>
	
	<div class="row">						
		<?php if( have_rows('featured_projects_repeater')):				
				while( have_rows('featured_projects_repeater')) : the_row();
				
					$post_object = get_sub_field('project');
		 
					if( $post_object ): 
							 
						// override $post
						$post = $post_object;
						setup_postdata( $post ); ?>
							
				         <div class="small-12 medium-4 large-3 columns">
				            <div class="portfolio-thumb">
				            	<a class="portfolio-hover" href="<?php the_permalink(); ?>"><?php the_field('hover_text'); ?></a>
				            	<?php echo get_the_post_thumbnail(); ?>
				            </div>
				         </div>
							    
				    <?php wp_reset_postdata(); ?>
							
			    	<?php endif; ?>
					
				<?php endwhile; endif; ?>					
	</div><!-- END row -->
</div> <!-- END Full-width -->