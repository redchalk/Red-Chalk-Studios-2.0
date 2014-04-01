<!-- Main Custom Module loop -->
<?php while ( have_rows('custom_modules') ) : the_row();

	 if( get_row_layout() == 'parallax_section' ):
       	
       	get_template_part('custom-modules/module', 'parallax'); //Get Parallax Module -> module-parallax.php
     
     elseif( get_row_layout() == 'testimonial_slider' ): 
       	
       	get_template_part('custom-modules/module', 'testimonialSlider'); //Get TestimonialS Slider Module -> 
       	
     elseif( get_row_layout() == 'team_slider' ): 
       	
       	get_template_part('custom-modules/module', 'teamSlider'); //Get Team Slider Module -> 
       	
     elseif( get_row_layout() == 'featured_portfolio_projects' ): 
       	
       	get_template_part('custom-modules/module', 'featuredWork'); //Get Featured Works Module ->   	
       	
     elseif( get_row_layout() == 'accordion' ):
       	
       	get_template_part('custom-modules/module', 'accordion'); //Get Accordion Module -> module-accordion.php
       	
     elseif( get_row_layout() == 'services' ): 
       	
       	get_template_part('custom-modules/module', 'services'); //Get Accordion Module -> module-services.php
       	
     elseif( get_row_layout() == 'client_grid' ): 
       	
       	get_template_part('custom-modules/module', 'clientGrid'); //Get Accordion Module ->
       	
     elseif( get_row_layout() == 'google_map' ): 
       	
       	get_template_part('custom-modules/module', 'googleMap'); //Get Accordion Module -> 
       	
     elseif( get_row_layout() == 'grid_2' ): 
       	
       	get_template_part('custom-modules/module', 'grid2'); //Get Accordion Module -> 
     
     elseif( get_row_layout() == 'grid_4' ): 
       	
       	get_template_part('custom-modules/module', 'grid4'); //Get Accordion Module -> 
     
     endif;

endwhile; ?>