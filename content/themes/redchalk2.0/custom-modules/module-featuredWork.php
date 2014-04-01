<!-- Featured Work Section -->

<div class="full-width module">
	<div class="row"
			
		<div class="small-12 small-centered large-8 columns">
			<h2><?php the_sub_field('section_title'); ?></h2>
		</div>
		
		<div class="small-12 small-centered large-8 columns">
			<?php the_sub_field('section_copy'); ?>
			<p><a href="<?php the_sub_field('section_href'); ?>" title="<?php the_sub_field('section_link'); ?>"><?php the_sub_field('section_link'); ?></a></p>
		</div>
		
		<div class="row">
					
				<?php 
				
					$featured_projects = get_sub_field('featured_projects');
 
					if( $featured_projects ): ?>
					    
					    <?php foreach( $featured_projects as $post): // variable must be called $post (IMPORTANT) ?>
					        <?php setup_postdata($post); ?>
					            <div class="small-12 medium-4 large-3 columns">
					            	<a class="portfolio-hover" href="<?php the_permalink(); ?>"><?php the_sub_field('hover_text'); ?></a>
					            	<div class="portfolio-thumb">
					            		<?php echo get_the_post_thumbnail(); ?>
					            	</div>
					            </div>		
					        <?php endforeach; ?>
					    
					    <?php wp_reset_postdata(); ?>
					
					<?php endif; ?>					
				
			</div>
		</div>
					
	</div>
</div>