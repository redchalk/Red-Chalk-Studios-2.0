<!-- Testimonials Section -->

<div class="full-width" style="background-color:#<?php the_sub_field('bg_color'); ?>;">
	<div class="row"
			
		<div class="small-12 large-12 columns">
				
				<?php 
				
					$post_type = 'testimonials';
					$total_posts = get_sub_field('total_testimonials');
					$id = get_sub_field('id');
												
					echo rcs_testimonial_carousel($post_type, $total_posts, $id);					
					
					wp_reset_query();
					 
				?>					
				
			</div>
		</div>
					
	</div>
</div>