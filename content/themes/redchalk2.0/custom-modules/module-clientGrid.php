<!-- Client Section -->

<div class="full-width module">
	<div class="row"
			
		<div class="small-12 small-centered large-8 large-centered columns">
			<h2><?php the_sub_field('section_title') ?></h2>
		</div>
		
		<div class="small-12 small-centered large-8 large-centered columns">
			<p><?php the_sub_field('section_copy') ?></p>
			<p><a href="<?php the_sub_field('section_href'); ?>" title="<?php the_sub_field('section_link'); ?>"><?php the_sub_field('section_link'); ?></a></p>
		</div>		
		
		<div class="row">
		
		<?php
		
			if ( have_rows('our_clients')):
				while ( have_rows('our_clients')): the_row(); ?>			
					
					<div class="small-6 medium-4 large-2 columns">
						<img alt="<?php the_sub_field('client_name');?>" src="<?php the_sub_field('client_logo'); ?>" />
					</div>
			
			<?php endwhile; endif; ?>
		</div>
		
				
	</div>
</div>	