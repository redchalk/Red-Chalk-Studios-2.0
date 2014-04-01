<!-- Services Module -->
<div class="full-width clearfix">
	<div class="row">
		
		<?php if (have_rows('services')):
			while (have_rows('services')): the_row(); ?>
			
			<div class="small-12 large-4 columns">
		
				<div class="small-12 medium-12 large-4 columns">
					<img class="icon" alt="<?php the_sub_field('service_title'); ?>" src="<?php the_sub_field('service_image'); ?>" />
				</div>
				<div class="small-12 medium-12 large-8 columns">
					<h2><?php the_sub_field('service_title'); ?></h2>
				</div>
				<div class="small-12 columns">
					<p><?php the_sub_field('service_description'); ?></p>
				</div>		
			
			</div>
		
		<?php endwhile; endif; ?>	
			
	</div>	
</div>