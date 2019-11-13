<?php 
	// Register Programs Post Type
function programs_post_type() {

	$labels = array(
		'name'                  => _x( 'Programs', 'Post Type General Name', 'icg' ),
		'singular_name'         => _x( 'Program', 'Post Type Singular Name', 'icg' ),
		'menu_name'             => __( 'Programs', 'icg' ),
		'name_admin_bar'        => __( 'Program', 'icg' ),
		'archives'              => __( 'Program Archives', 'icg' ),
		'attributes'            => __( 'Program Attributes', 'icg' ),
		'parent_item_colon'     => __( 'Parent Program:', 'icg' ),
		'all_items'             => __( 'All Programs', 'icg' ),
		'add_new_item'          => __( 'Add New Program', 'icg' ),
		'add_new'               => __( 'Add New', 'icg' ),
		'new_item'              => __( 'New Program', 'icg' ),
		'edit_item'             => __( 'Edit Program', 'icg' ),
		'update_item'           => __( 'Update Program', 'icg' ),
		'view_item'             => __( 'View Program', 'icg' ),
		'view_items'            => __( 'View Programs', 'icg' ),
		'search_items'          => __( 'Search Program', 'icg' ),
		'not_found'             => __( 'Not found', 'icg' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'icg' ),
		'featured_image'        => __( 'Featured Image', 'icg' ),
		'set_featured_image'    => __( 'Set featured image', 'icg' ),
		'remove_featured_image' => __( 'Remove featured image', 'icg' ),
		'use_featured_image'    => __( 'Use as featured image', 'icg' ),
		'insert_into_item'      => __( 'Insert into program', 'icg' ),
		'uploaded_to_this_item' => __( 'Uploaded to this program', 'icg' ),
		'items_list'            => __( 'Programs list', 'icg' ),
		'items_list_navigation' => __( 'Programs list navigation', 'icg' ),
		'filter_items_list'     => __( 'Filter programs list', 'icg' ),
	);
	$args = array(
		'label'                 => __( 'Program', 'icg' ),
		'description'           => __( 'Programs post type', 'icg' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( 'program_types' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-text',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'program', $args );

}
add_action( 'init', 'programs_post_type', 0 );

// Register Procedures Post Type
function procedures_post_type() {

	$labels = array(
		'name'                  => _x( 'Procedures', 'Post Type General Name', 'icg' ),
		'singular_name'         => _x( 'Procedure', 'Post Type Singular Name', 'icg' ),
		'menu_name'             => __( 'Procedures', 'icg' ),
		'name_admin_bar'        => __( 'Procedure', 'icg' ),
		'archives'              => __( 'Procedure Archives', 'icg' ),
		'attributes'            => __( 'Procedure Attributes', 'icg' ),
		'parent_item_colon'     => __( 'Parent Procedure:', 'icg' ),
		'all_items'             => __( 'All Procedures', 'icg' ),
		'add_new_item'          => __( 'Add New Procedure', 'icg' ),
		'add_new'               => __( 'Add New', 'icg' ),
		'new_item'              => __( 'New Procedure', 'icg' ),
		'edit_item'             => __( 'Edit Procedure', 'icg' ),
		'update_item'           => __( 'Update Procedure', 'icg' ),
		'view_item'             => __( 'View Procedure', 'icg' ),
		'view_items'            => __( 'View Procedures', 'icg' ),
		'search_items'          => __( 'Search Procedure', 'icg' ),
		'not_found'             => __( 'Not found', 'icg' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'icg' ),
		'featured_image'        => __( 'Featured Image', 'icg' ),
		'set_featured_image'    => __( 'Set featured image', 'icg' ),
		'remove_featured_image' => __( 'Remove featured image', 'icg' ),
		'use_featured_image'    => __( 'Use as featured image', 'icg' ),
		'insert_into_item'      => __( 'Insert into procedure', 'icg' ),
		'uploaded_to_this_item' => __( 'Uploaded to this procedure', 'icg' ),
		'items_list'            => __( 'Procedures list', 'icg' ),
		'items_list_navigation' => __( 'Procedures list navigation', 'icg' ),
		'filter_items_list'     => __( 'Filter procedures list', 'icg' ),
	);
	$args = array(
		'label'                 => __( 'Procedure', 'icg' ),
		'description'           => __( 'Procedures post type', 'icg' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'revisions', ),
		'taxonomies'            => array( 'procedure_types' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-media-archive',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'procedure', $args );

}
add_action( 'init', 'procedures_post_type', 0 );

// Register Projects Post Type
function projects_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'icg' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'icg' ),
		'menu_name'             => __( 'Projects', 'icg' ),
		'name_admin_bar'        => __( 'Project', 'icg' ),
		'archives'              => __( 'Project Archives', 'icg' ),
		'attributes'            => __( 'Project Attributes', 'icg' ),
		'parent_item_colon'     => __( 'Parent Project:', 'icg' ),
		'all_items'             => __( 'All Projects', 'icg' ),
		'add_new_item'          => __( 'Add New Project', 'icg' ),
		'add_new'               => __( 'Add New', 'icg' ),
		'new_item'              => __( 'New Project', 'icg' ),
		'edit_item'             => __( 'Edit Project', 'icg' ),
		'update_item'           => __( 'Update Project', 'icg' ),
		'view_item'             => __( 'View Project', 'icg' ),
		'view_items'            => __( 'View Project', 'icg' ),
		'search_items'          => __( 'Search Project', 'icg' ),
		'not_found'             => __( 'Not found', 'icg' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'icg' ),
		'featured_image'        => __( 'Featured Image', 'icg' ),
		'set_featured_image'    => __( 'Set featured image', 'icg' ),
		'remove_featured_image' => __( 'Remove featured image', 'icg' ),
		'use_featured_image'    => __( 'Use as featured image', 'icg' ),
		'insert_into_item'      => __( 'Insert into project', 'icg' ),
		'uploaded_to_this_item' => __( 'Uploaded to this project', 'icg' ),
		'items_list'            => __( 'Projects list', 'icg' ),
		'items_list_navigation' => __( 'Projects list navigation', 'icg' ),
		'filter_items_list'     => __( 'Filter projects list', 'icg' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'icg' ),
		'description'           => __( 'Project Description', 'icg' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'taxonomies'            => array( 'project_types' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'projects_post_type', 0 );

// Register Team Post Type
function team_post_type() {

	$labels = array(
		'name'                  => _x( 'Team', 'Post Type General Name', 'icg' ),
		'singular_name'         => _x( 'Team member', 'Post Type Singular Name', 'icg' ),
		'menu_name'             => __( 'Team', 'icg' ),
		'name_admin_bar'        => __( 'Team', 'icg' ),
		'archives'              => __( 'Team Archives', 'icg' ),
		'attributes'            => __( 'Team Attributes', 'icg' ),
		'parent_item_colon'     => __( 'Parent Team:', 'icg' ),
		'all_items'             => __( 'All Team members', 'icg' ),
		'add_new_item'          => __( 'Add New Team member', 'icg' ),
		'add_new'               => __( 'Add New', 'icg' ),
		'new_item'              => __( 'New Team member', 'icg' ),
		'edit_item'             => __( 'Edit Team member', 'icg' ),
		'update_item'           => __( 'Update Team member', 'icg' ),
		'view_item'             => __( 'View Team member', 'icg' ),
		'view_items'            => __( 'View Team members', 'icg' ),
		'search_items'          => __( 'Search Team member', 'icg' ),
		'not_found'             => __( 'Not found', 'icg' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'icg' ),
		'featured_image'        => __( 'Featured Image', 'icg' ),
		'set_featured_image'    => __( 'Set featured image', 'icg' ),
		'remove_featured_image' => __( 'Remove featured image', 'icg' ),
		'use_featured_image'    => __( 'Use as featured image', 'icg' ),
		'insert_into_item'      => __( 'Insert into team member', 'icg' ),
		'uploaded_to_this_item' => __( 'Uploaded to this team member', 'icg' ),
		'items_list'            => __( 'Team list', 'icg' ),
		'items_list_navigation' => __( 'Team list navigation', 'icg' ),
		'filter_items_list'     => __( 'Filter team members list', 'icg' ),
	);
	$args = array(
		'label'                 => __( 'Team', 'icg' ),
		'description'           => __( 'Team Description', 'icg' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'team', $args );

}
add_action( 'init', 'team_post_type', 0 );

// Register Services Post Type
function services_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'icg' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'icg' ),
		'menu_name'             => __( 'Services', 'icg' ),
		'name_admin_bar'        => __( 'Services', 'icg' ),
		'archives'              => __( 'Services Archives', 'icg' ),
		'attributes'            => __( 'Services Attributes', 'icg' ),
		'parent_item_colon'     => __( 'Parent Service:', 'icg' ),
		'all_items'             => __( 'All Services', 'icg' ),
		'add_new_item'          => __( 'Add New Service', 'icg' ),
		'add_new'               => __( 'Add New', 'icg' ),
		'new_item'              => __( 'New Service', 'icg' ),
		'edit_item'             => __( 'Edit Service', 'icg' ),
		'update_item'           => __( 'Update Service', 'icg' ),
		'view_item'             => __( 'View Service', 'icg' ),
		'view_items'            => __( 'View Services', 'icg' ),
		'search_items'          => __( 'Search Service', 'icg' ),
		'not_found'             => __( 'Not found', 'icg' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'icg' ),
		'featured_image'        => __( 'Featured Image', 'icg' ),
		'set_featured_image'    => __( 'Set featured image', 'icg' ),
		'remove_featured_image' => __( 'Remove featured image', 'icg' ),
		'use_featured_image'    => __( 'Use as featured image', 'icg' ),
		'insert_into_item'      => __( 'Insert into service', 'icg' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'icg' ),
		'items_list'            => __( 'Services list', 'icg' ),
		'items_list_navigation' => __( 'Services list navigation', 'icg' ),
		'filter_items_list'     => __( 'Filter services list', 'icg' ),
	);
	$args = array(
		'label'                 => __( 'Services', 'icg' ),
		'description'           => __( 'Services Description', 'icg' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-hammer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'service', $args );

}
add_action( 'init', 'services_post_type', 0 );

// Register Map Projects Post Type
function map_projects_post_type() {

	$labels = array(
		'name'                  => _x( 'Map projects', 'Post Type General Name', 'icg' ),
		'singular_name'         => _x( 'Map project', 'Post Type Singular Name', 'icg' ),
		'menu_name'             => __( 'Map projects', 'icg' ),
		'name_admin_bar'        => __( 'Map projects', 'icg' ),
		'archives'              => __( 'Map projects Archives', 'icg' ),
		'attributes'            => __( 'Map projects Attributes', 'icg' ),
		'parent_item_colon'     => __( 'Parent Map project:', 'icg' ),
		'all_items'             => __( 'All Map projects', 'icg' ),
		'add_new_item'          => __( 'Add New Map project', 'icg' ),
		'add_new'               => __( 'Add New', 'icg' ),
		'new_item'              => __( 'New Map project', 'icg' ),
		'edit_item'             => __( 'Edit Map project', 'icg' ),
		'update_item'           => __( 'Update Map project', 'icg' ),
		'view_item'             => __( 'View Map project', 'icg' ),
		'view_items'            => __( 'View Map projects', 'icg' ),
		'search_items'          => __( 'Search Map project', 'icg' ),
		'not_found'             => __( 'Not found', 'icg' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'icg' ),
		'featured_image'        => __( 'Featured Image', 'icg' ),
		'set_featured_image'    => __( 'Set featured image', 'icg' ),
		'remove_featured_image' => __( 'Remove featured image', 'icg' ),
		'use_featured_image'    => __( 'Use as featured image', 'icg' ),
		'insert_into_item'      => __( 'Insert into map project', 'icg' ),
		'uploaded_to_this_item' => __( 'Uploaded to this map project', 'icg' ),
		'items_list'            => __( 'Map projects list', 'icg' ),
		'items_list_navigation' => __( 'Map projects list navigation', 'icg' ),
		'filter_items_list'     => __( 'Filter map projects list', 'icg' ),
	);
	$args = array(
		'label'                 => __( 'Map projects', 'icg' ),
		'description'           => __( 'Map projects Description', 'icg' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'taxonomies'            => array( 'city' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-location-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'map_project', $args );

}
add_action( 'init', 'map_projects_post_type', 0 );
?>