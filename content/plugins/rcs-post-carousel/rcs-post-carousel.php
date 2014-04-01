<?php

/*
Plugin Name: RCS Post Carousel
Description: jQuery post slider
Author: Red Chalk Studios
Version: 0.0
Author URI: http://redchalkstudios.com
*/

global $wpdb, $wp_version;

function rcs_team_carousel(&$post_type, &$post_category, &$total_posts, &$id)
{
	global $wpdb;
	
	//Image slider
	global $post;

	$slider_gallery.= '<div class="list_carousel responsive">';
	$slider_gallery.='<ul id="' . $id .'">';

	$args = array( 'numberposts' => $total_posts, 'post_type' => $post_type );
	$myposts = get_posts( $args );
	
	foreach( $myposts as $post ) {

		$post_title = $post->post_title;
		$post_content = $post->post_content;
		$job_title = $post->job_title;
		$pic = get_the_post_thumbnail();
		
		$slider_gallery .= '<li>';
		
		$slider_gallery .= '<a href="#">' . $pic . '</a>';
		$slider_gallery .= '<h5>' . $post_title . '</h5>';
		$slider_gallery .= '<p>' . $job_title . '</p>';
			
		$slider_gallery .= '</li>';
	}		
	$slider_gallery.='</ul>';		
	$slider_gallery.='<div class="clearfix"></div>';
	$slider_gallery.='<a class="next" id="next5" href="#"></a>';
	$slider_gallery.='<a class="prev" id="prev5" href="#"></a>';
	$slider_gallery.='</div>';

	return $slider_gallery;
}
add_action('init', 'rcs_team_carousel');

function rcs_testimonial_carousel(&$post_type, &$total_posts, &$id)
{
	global $wpdb;
	
	//Image slider
	global $post;

	$slider_gallery.= '<div class="list_carousel responsive">';
	$slider_gallery.='<ul id="' . $id .'">';

	$args = array( 'numberposts' => $total_posts, 'post_type' => $post_type );
	$myposts = get_posts( $args );
	
	foreach( $myposts as $post ) {

		$post_title = $post->post_title;
		$post_content = $post->post_content;
		$job_title = $post->job_title;
		$client_company = $post->client_company;
		$rep_position = $post->client_representative_position;
		
		$slider_gallery .= '<li>';
		
		$slider_gallery .= '<p>' . $post_content . '</p>';
		$slider_gallery .= '<h5>' . $post_title . '</h5>';
		$slider_gallery .= '<h6>' . $rep_position . ', ' . $client_company .'</h6>';
		
			
		$slider_gallery .= '</li>';
	}		
	$slider_gallery.='</ul>';		
	$slider_gallery.='<div class="clearfix"></div>';
	$slider_gallery.='<a class="next" id="next4" href="#"></a>';
	$slider_gallery.='<a class="prev" id="prev4" href="#"></a>';
	$slider_gallery.='</div>';

	return $slider_gallery;
}
add_action('init', 'rcs_testimonial_carousel');
?>