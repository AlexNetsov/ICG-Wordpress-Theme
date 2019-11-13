<?php 
	// Register Procedure types Taxonomy
function procedure_types() {

	$labels = array(
		'name'                       => _x( 'Procedure types', 'Taxonomy General Name', 'icg' ),
		'singular_name'              => _x( 'Procedure type', 'Taxonomy Singular Name', 'icg' ),
		'menu_name'                  => __( 'Procedure type', 'icg' ),
		'all_items'                  => __( 'All Procedure types', 'icg' ),
		'parent_item'                => __( 'Parent Procedure type', 'icg' ),
		'parent_item_colon'          => __( 'Parent Procedure type:', 'icg' ),
		'new_item_name'              => __( 'New Procedure type Name', 'icg' ),
		'add_new_item'               => __( 'Add New Procedure type', 'icg' ),
		'edit_item'                  => __( 'Edit Procedure type', 'icg' ),
		'update_item'                => __( 'Update Procedure type', 'icg' ),
		'view_item'                  => __( 'View Procedure type', 'icg' ),
		'separate_items_with_commas' => __( 'Separate procedure types with commas', 'icg' ),
		'add_or_remove_items'        => __( 'Add or remove procedure types', 'icg' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'icg' ),
		'popular_items'              => __( 'Popular Procedure types', 'icg' ),
		'search_items'               => __( 'Search Procedure types', 'icg' ),
		'not_found'                  => __( 'Not Found', 'icg' ),
		'no_terms'                   => __( 'No procedure types', 'icg' ),
		'items_list'                 => __( 'Procedure types list', 'icg' ),
		'items_list_navigation'      => __( 'Procedure types list navigation', 'icg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'procedure_types', array( 'procedure' ), $args );

}
add_action( 'init', 'procedure_types', 0 );

// Register Program types Taxonomy
function program_types() {

	$labels = array(
		'name'                       => _x( 'Program types', 'Taxonomy General Name', 'icg' ),
		'singular_name'              => _x( 'Program type', 'Taxonomy Singular Name', 'icg' ),
		'menu_name'                  => __( 'Program type', 'icg' ),
		'all_items'                  => __( 'All Program types', 'icg' ),
		'parent_item'                => __( 'Parent Program type', 'icg' ),
		'parent_item_colon'          => __( 'Parent Program type:', 'icg' ),
		'new_item_name'              => __( 'New Program type Name', 'icg' ),
		'add_new_item'               => __( 'Add New Program type', 'icg' ),
		'edit_item'                  => __( 'Edit Program type', 'icg' ),
		'update_item'                => __( 'Update Program type', 'icg' ),
		'view_item'                  => __( 'View Program type', 'icg' ),
		'separate_items_with_commas' => __( 'Separate program types with commas', 'icg' ),
		'add_or_remove_items'        => __( 'Add or remove program types', 'icg' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'icg' ),
		'popular_items'              => __( 'Popular Program types', 'icg' ),
		'search_items'               => __( 'Search Program types', 'icg' ),
		'not_found'                  => __( 'Not Found', 'icg' ),
		'no_terms'                   => __( 'No program types', 'icg' ),
		'items_list'                 => __( 'Program types list', 'icg' ),
		'items_list_navigation'      => __( 'Program types list navigation', 'icg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'program_types', array( 'program' ), $args );

}
add_action( 'init', 'program_types', 0 );

// Register Project types Taxonomy
function project_types() {

	$labels = array(
		'name'                       => _x( 'Project types', 'Taxonomy General Name', 'icg' ),
		'singular_name'              => _x( 'Project type', 'Taxonomy Singular Name', 'icg' ),
		'menu_name'                  => __( 'Project type', 'icg' ),
		'all_items'                  => __( 'All Project types', 'icg' ),
		'parent_item'                => __( 'Parent Project type', 'icg' ),
		'parent_item_colon'          => __( 'Parent Project type:', 'icg' ),
		'new_item_name'              => __( 'New Project type Name', 'icg' ),
		'add_new_item'               => __( 'Add New Project type', 'icg' ),
		'edit_item'                  => __( 'Edit Project type', 'icg' ),
		'update_item'                => __( 'Update Project type', 'icg' ),
		'view_item'                  => __( 'View Project type', 'icg' ),
		'separate_items_with_commas' => __( 'Separate project types with commas', 'icg' ),
		'add_or_remove_items'        => __( 'Add or remove project types', 'icg' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'icg' ),
		'popular_items'              => __( 'Popular Project types', 'icg' ),
		'search_items'               => __( 'Search Project types', 'icg' ),
		'not_found'                  => __( 'Not Found', 'icg' ),
		'no_terms'                   => __( 'No items', 'icg' ),
		'items_list'                 => __( 'Project types list', 'icg' ),
		'items_list_navigation'      => __( 'Project types list navigation', 'icg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'project_types', array( 'project' ), $args );

}
add_action( 'init', 'project_types', 0 );

// Register City Taxonomy
function city() {

	$labels = array(
		'name'                       => _x( 'Cities', 'Taxonomy General Name', 'icg' ),
		'singular_name'              => _x( 'City', 'Taxonomy Singular Name', 'icg' ),
		'menu_name'                  => __( 'City', 'icg' ),
		'all_items'                  => __( 'All Cities', 'icg' ),
		'parent_item'                => __( 'Parent City', 'icg' ),
		'parent_item_colon'          => __( 'Parent City:', 'icg' ),
		'new_item_name'              => __( 'New City Name', 'icg' ),
		'add_new_item'               => __( 'Add New City', 'icg' ),
		'edit_item'                  => __( 'Edit City', 'icg' ),
		'update_item'                => __( 'Update City', 'icg' ),
		'view_item'                  => __( 'View City', 'icg' ),
		'separate_items_with_commas' => __( 'Separate cities with commas', 'icg' ),
		'add_or_remove_items'        => __( 'Add or remove city', 'icg' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'icg' ),
		'popular_items'              => __( 'Popular Cities', 'icg' ),
		'search_items'               => __( 'Search Cities', 'icg' ),
		'not_found'                  => __( 'Not Found', 'icg' ),
		'no_terms'                   => __( 'No items', 'icg' ),
		'items_list'                 => __( 'Cities list', 'icg' ),
		'items_list_navigation'      => __( 'Cities list navigation', 'icg' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'city', array( 'map_project' ), $args );

}
add_action( 'init', 'city', 0 );
?>