<?php
   /*
   Plugin Name: RCS Custom Post Types
   Plugin URI: http://redchalkstudios.com
   Description: Plugin to register custom post types
   Version: 0.0
   Author: Red Chalk Studios
   Author URI: http://redchalkstudios.com
   */
?>
<?php 

// Creates "Portfolio" Custom Post Type ------------------------------------------------------- /
function custom_post_portfolio() {

	$labels = array(
		'name'               => _x( 'Portfolio', 'post type general name' ),
		'singular_name'      => _x( 'Project', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Project' ),
		'add_new_item'       => __( 'Add New Project' ),
		'edit_item'          => __( 'Edit Project' ),
		'new_item'           => __( 'New Project' ),
		'all_items'          => __( 'All Projects' ),
		'view_item'          => __( 'View Projects' ),
		'search_items'       => __( 'Search Projects' ),
		'not_found'          => __( 'No Projects Found' ),
		'not_found_in_trash' => __( 'No projects found in the trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Portfolio'
	);
		
	$args = array(
		'labels'        => $labels,
		'description'   => 'The entire Red Chalk Studios Portfolio!',
		'public'        => true,
		'menu_position' => 4,
		'taxonomies' => array('project_category'),
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
		'query_var' => true
	);

	register_post_type('portfolio', $args );
}		

add_action('init', 'custom_post_portfolio');

function custom_taxonomies_portfolio() {
	$labels = array(
		'name'              => _x( 'Project Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Project Categories' ),
		'all_items'         => __( 'All Project Categories' ),
		'parent_item'       => __( 'Parent Project Category' ),
		'parent_item_colon' => __( 'Parent Project Category:' ),
		'edit_item'         => __( 'Edit Project Category' ), 
		'update_item'       => __( 'Update Project Category' ),
		'add_new_item'      => __( 'Add Project Category' ),
		'new_item_name'     => __( 'New Project Category' ),
		'menu_name'         => __( 'Project Categories' )
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'project_category', 'portfolio', $args );
}

add_action( 'init', 'custom_taxonomies_portfolio', 0 );


// Creates "Team Members" Custom Post Type ------------------------------------------------------- /
function custom_post_team() {

	$labels = array(
		'name'               => _x( 'Team', 'post type general name' ),
		'singular_name'      => _x( 'Team Member', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'Team Member' ),
		'add_new_item'       => __( 'Add New Team Member' ),
		'edit_item'          => __( 'Edit Team Member' ),
		'new_item'           => __( 'New Team Member' ),
		'all_items'          => __( 'All Team Members' ),
		'view_item'          => __( 'View Team Members' ),
		'search_items'       => __( 'Search Team Members' ),
		'not_found'          => __( 'No Team Members Found' ),
		'not_found_in_trash' => __( 'No Team Members found in the trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Team Members'
	);
		
	$args = array(
		'labels'        => $labels,
		'description'   => 'The entire Red Chalk Studios team!',
		'public'        => true,
		'menu_position' => 5,
		'taxonomies' => array('team_category'),
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
		'query_var' => true
	);

	register_post_type('team', $args );
}		

add_action('init', 'custom_post_team');

function custom_taxonomies_team() {
	$labels = array(
		'name'              => _x( 'Team Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Team Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Team Categories' ),
		'all_items'         => __( 'All Team Categories' ),
		'parent_item'       => __( 'Parent Team Category' ),
		'parent_item_colon' => __( 'Parent Team Category:' ),
		'edit_item'         => __( 'Edit Team Category' ), 
		'update_item'       => __( 'Update Team Category' ),
		'add_new_item'      => __( 'Add Team Category' ),
		'new_item_name'     => __( 'New Team Category' ),
		'menu_name'         => __( 'Team Categories' )
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'team_category', 'team', $args );
}

add_action( 'init', 'custom_taxonomies_team', 0 );

// Creates "Testimonials" Post Type ------------------------------------------------------- /

function custom_post_testimonials() {

	$labels = array(
		'name'               => _x( 'Testimonials', 'post type general name' ),
		'singular_name'      => _x( 'testimonial', 'post type singular name' ),
		'add_new'            => _x( 'Add New', 'testimony' ),
		'add_new_item'       => __( 'Add New Testimony' ),
		'edit_item'          => __( 'Edit Testimony' ),
		'new_item'           => __( 'New Testimony' ),
		'all_items'          => __( 'All Testimonies' ),
		'view_item'          => __( 'View Testimony' ),
		'search_items'       => __( 'Search Testimonies' ),
		'not_found'          => __( 'No testimonies found' ),
		'not_found_in_trash' => __( 'No testimonies found in the trash' ), 
		'parent_item_colon'  => '',
		'menu_name'          => 'Testimonials'
	);
		
	$args = array(
		'labels'        => $labels,
		'description'   => 'Nice testimonials about JWFNS!',
		'public'        => true,
		'menu_position' => 7,
		'taxonomies' => array('testimonials_category'),
		'supports'      => array( 'title', 'editor', 'thumbnail'),
		'has_archive'   => true,
		'query_var' => true
	);

	register_post_type('testimonials', $args );
}		

add_action('init', 'custom_post_testimonials');

function custom_taxonomies_testimonials() {
	$labels = array(
		'name'              => _x( 'Testimonials Categories', 'taxonomy general name' ),
		'singular_name'     => _x( 'Testimonial Category', 'taxonomy singular name' ),
		'search_items'      => __( 'Search Testimonial Categories' ),
		'all_items'         => __( 'All Testimonial Categories' ),
		'parent_item'       => __( 'Parent Testimonial Category' ),
		'parent_item_colon' => __( 'Parent Testimonial Category:' ),
		'edit_item'         => __( 'Edit Testimonial Category' ), 
		'update_item'       => __( 'Update Testimonial Category' ),
		'add_new_item'      => __( 'Add Testimonial Category' ),
		'new_item_name'     => __( 'New Testimonial Category' ),
		'menu_name'         => __( 'Testimonial Categories' )
	);
	$args = array(
		'labels' => $labels,
		'hierarchical' => true,
	);
	register_taxonomy( 'testimonials_category', 'testimonials', $args );
}

add_action( 'init', 'custom_taxonomies_testimonials', 0 ); ?>