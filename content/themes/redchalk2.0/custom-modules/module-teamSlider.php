<!-- Tan Section -->

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
			<div class="small-12 large-12">
				
				<?php 
				
					$post_type = 'team';
					$post_category = 2; //get_sub_field('post_category'); //will need category id numbers
					$total_posts = get_sub_field('total_team');
					$id = get_sub_field('id');
												
					echo rcs_team_carousel($post_type, $post_category, $total_posts, $id);					
					
					wp_reset_query();
					 
				?>					
				
			</div>
		</div>
					
	</div>
</div>