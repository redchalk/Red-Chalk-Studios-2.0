	<?php if (!is_page('contact-us')) { ?>
	
		<div id="contact-us" class="full-width">	
			<div class="row">
				<div class="small-12 large-9 columns">
					<h2>Ready to talk about your project?</h2>
				</div>
				<div class="small-12 large-3 columns">
					<a class="button" href="<?php echo site_url(); ?>/contact-us/">Contact Us</a>
				</div>
			</div>		
		</div>
	
	<?php } ?>
	
	<div class="full-width" style="background:<?php the_field('info_bg_color','option'); ?> url(<?php the_field('info_bg_image','option'); ?>) repeat">
		<div class="row">
			<div class="small-7 small-centered large-2 large-uncentered columns">
				<div id="social-wrapper">
					<a class="social facebook" href="<?php the_field('facebook','option'); ?>" title="Like Red Chalk Studios on Facebook" target="_blank"></a>
					<a class="social linkedin" href="<?php the_field('linkedin','option'); ?>" title="Connect with Red Chalk Studios on Linkedin" target="_blank"></a>
					<a class="social pinterest" href="<?php the_field('pinterest','option'); ?>" title="Follow Red Chalk Studios on Pinterest" target="_blank"></a>
					<a class="social instagram" href="<?php the_field('instagram','option'); ?>" title="Follow Red Chalk Studios on Instagram" target="_blank"></a>
				</div>		
			</div>
			
			<div class="small-12 large-3 columns">
				<ul id="contact-info">
				    <li id="contact-address"><?php the_field('address','option'); ?></li>
					<li id="contact-phone"><?php the_field('phone','option'); ?></li>
					<li id="contact-email"><a href="mailto:<?php the_field('contact_email','option'); ?>"><?php the_field('contact_email','option'); ?></a></li>
				</ul>	
			</div>
			
			<div class="small-12 large-7 columns">
				<img class="alignleft" src ="http://redchalkstudios.com/dev/wp-content/uploads/2013/08/RCS-Logomark.png" />
				<?php the_field('footer_copy','option'); ?>	
			</div>
		</div>
	</div>	
	
	<?php if(get_field('display_hiring_tab','option')): ?>
		<a id="hiring" href="<?php the_field('job_description_link', 'option'); ?>" title="Red Chalk Studios is hiring"><?php the_field('hiring_tab_text','option'); ?></a>
	<?php endif; ?>
	
	<a id="go-to-top" href="#" title="Back to top" style="display: inline;">Scroll To Top</a>

	<footer id="footer" style="background-color:<?php the_field('copy_bg_color','option'); ?>">
		<div class="small-12 small-centered large-12 large-centered columns">
			<p>&copy; 1999 &dash; <?php echo date("Y"); echo " "; the_field('copyright_info','option'); ?></p>
		</div>
	</footer>

	<!-- START Google Analytics -->
	<!-- END Google Analytics -->
	
	<script src="<?php bloginfo('template_url'); ?>/js/libs/jquery.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/foundation.min.js"></script>			
		
	<!-- Parallax Effect -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/stellar.min.js"></script>
	
	<!--Scrolling Effect-->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/waypoints.min.js"></script>
	
	<!-- Carousel -->
	<script src="<?php bloginfo('template_url'); ?>/js/libs/carouFredSel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/libs/helper-plugins/jquery.touchSwipe.min.js"></script>
	
	<!-- fire plugin onDocumentReady -->
	<script type="text/javascript" language="javascript">
		jQuery(function($) {
			//	Fuild layout, centering the items
			
			$('#testimonial').carouFredSel({
				items:1,
				auto: false,
				width: '100%',
				scroll: 1,
				prev: '#prev4',
				next: '#next4',
				swipe: {onTouch: true}
			});
			
			$('#team').carouFredSel({
				auto: false,
				width: '100%',
				scroll: 1,
				prev: '#prev5',
				next: '#next5',
				swipe: {onTouch: true}
			});
		});
	</script>
	
	<!-- Custom JS for Red Chalk -->
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rcs.js"></script>
	
	<?php if(is_front_page()): ?>
		
		<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
		<script>
		      function initialize() {
		        var map_canvas = document.getElementById('map-wrap');        
		        var myLatlng = new google.maps.LatLng(36.843896,-76.0216449);
		        var map_options = {
		          center: myLatlng,
		          zoom: 18,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        }
		        var map = new google.maps.Map(map_canvas, map_options)        
		                
		        var marker = new google.maps.Marker({
					position: myLatlng,
					map: map,
					title: 'Red Chalk Studios'
				});       
		      }     
			  google.maps.event.addDomListener(window, 'load', initialize);
		</script>	
	
	<?php endif; ?>	
				 
	<script>
    	$(document).foundation();
	</script>
	
	<?php wp_footer(); ?>	
	
</body>

</html>
