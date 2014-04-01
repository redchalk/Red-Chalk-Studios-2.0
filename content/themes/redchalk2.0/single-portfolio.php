<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="parallax" data-stellar-background-ratio="0" style="background-image:url(<?php the_field('background_image') ?>);">
	
			<div class="row">
				<div class="small-11 small-centered">
					<h2><?php the_title(); ?></h2>
				</div>
			</div>	
		</div>

		<div class="row">	
			<div class="small-12 large-9 columns">
				<?php the_content(); ?>
				<?php edit_post_link('Edit this entry','','.'); ?>
			</div>

			<div class="small-12 large-3 columns">

				<h3>Project Details</h3>
				
				<h6>Client</h6>
				<?php the_field('client'); ?>

				<h6>Date</h6>
				<?php the_field('date'); ?>

				<h6>Overview</h6>
				<?php the_field('overview_paragraph'); ?>

				<h6>Services</h6>
				<?php 
				
				$designprint = get_field('design_print'); //Assigns array to variable
							      						      
				if ($designprint != "") {       //Checks to see if variable is empty
					the_field('design_print');    //prints array if any option is selected
				}
							      
				$digital = get_field('digital_services');
							      
				if ($digital != "") {							  
				  	
				  	if($designprint == "") {
						echo '';
					} else {
						echo ', ';
					}
					
					the_field('digital_services'); 							  
				}
							      
				$socialmedia = get_field('social_media');
							      
				if ($socialmedia != "") {						      
					echo ', ';
					the_field('social_media');
				}						      
							      
				$broadcastmedia = get_field('broadcast_media');

				if ($broadcastmedia != "") {							  
					echo ', ';
					the_field('broadcast_media'); 
				}
							      						      
				$copywriting = get_field('copywriting');

				if ($copywriting != "") {
					echo ', ';
					the_field('copywriting');							  
				} ?>

				<h6>Share This Project</h6>

				<?php if(get_field('project_url') != ''): ?>
					<a class="button" href="<?php the_field('project_url'); ?>" title="<?php the_title(); ?>" target="_blank">Visit Website</a>
				<?php endif; ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
			
			</div>
		</div>		

	<?php endwhile; endif; ?>

<?php get_footer(); ?>