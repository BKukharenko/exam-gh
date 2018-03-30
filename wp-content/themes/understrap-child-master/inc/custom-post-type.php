<?php

//Projects Type

add_action( 'init', 'projects_post_type_register' );
/**
 * Register a partner post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function projects_post_type_register() {
	$labels = array(
		'name'               => _x( 'Projects', 'post type general name', 'understrap' ),
		'singular_name'      => _x( 'Project', 'post type singular name', 'understrap' ),
		'menu_name'          => _x( 'Projects', 'admin menu', 'understrap' ),
		'name_admin_bar'     => _x( 'Projects', 'add new on admin bar', 'understrap' ),
		'add_new'            => _x( 'Add new project', 'project', 'understrap' ),
		'add_new_item'       => __( 'Add new project', 'understrap' ),
		'new_item'           => __( 'New project', 'understrap' ),
		'edit_item'          => __( 'Edit project', 'understrap' ),
		'view_item'          => __( 'View project', 'understrap' ),
		'all_items'          => __( 'All projects', 'understrap' ),
		'search_items'       => __( 'Search projects', 'understrap' ),
		'parent_item_colon'  => __( 'Parent projects:', 'understrap' ),
		'not_found'          => __( 'Projects not found', 'understrap' ),
		'not_found_in_trash' => __( 'No projects found in Trash', 'understrap' )
	);

	$args = array(
		'labels'             => $labels,
		'description'        => __( 'This is a list of projects.', 'understrap' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'projects' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('thumbnail', 'title', 'page-attributes', 'editor')
	);

	register_post_type( 'projects', $args );
}
