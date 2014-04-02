<? $make_parallax = get_sub_field('add_parallax_effect'); ?>

<!-- parallax section -->
<div class="<?php if($make_parallax == 1) { ?>parallax <?php } else { ?>static <? } the_sub_field('add_class'); ?>" 
	
	<?php if($make_parallax == 1) { ?>
	
		data-stellar-background-ratio="<?php the_sub_field('scroll_speed'); ?>" 
		
	<?php } ?>
		
	style="background-image:url(<?php the_sub_field('background_image') ?>);">
	
	<div class="row">
		<div class="small-12 small-centered">
			<h2><?php the_sub_field('parallax_headline'); ?></h2>
			<p><?php the_sub_field('parallax_text'); ?></p>	
		</div>
	</div>	
</div>