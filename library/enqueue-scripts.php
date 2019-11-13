<?php
/**
 * Enqueue all styles and scripts
 *
 * Learn more about enqueue_script: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_script}
 * Learn more about enqueue_style: {@link https://codex.wordpress.org/Function_Reference/wp_enqueue_style }
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
function ikreativ_async_scripts($url)
{
    if ( strpos( $url, '#asyncload') === false )
        return $url;
    else if ( is_admin() )
        return str_replace( '#asyncload', '', $url );
    else
	return str_replace( '#asyncload', '', $url )."' async='async"; 
    }
add_filter( 'clean_url', 'ikreativ_async_scripts', 11, 1 );

if ( ! function_exists( 'foundationpress_scripts' ) ) :
	function foundationpress_scripts() {

	// Deregister the jquery version bundled with WordPress.
	wp_deregister_script( 'jquery' );
	
	// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
	wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), '', false );
	
	// Enqueue the main Stylesheet.
	wp_enqueue_style( 'main-stylesheet', get_template_directory_uri() . '/dist/assets/css/app.css', array(), '2.10.3', 'all' );

	// Enqueue Founation scripts
	wp_enqueue_script( 'foundation', get_template_directory_uri() . '/dist/assets/js/app.js', array( 'jquery' ), '2.10.3', true );

	// Enqueue FontAwesome from CDN. Uncomment the line below if you don't need FontAwesome.
	//wp_enqueue_script( 'fontawesome', 'https://use.fontawesome.com/5016a31c8c.js', array(), '4.7.0', true );
	
	// Owl JS
	wp_enqueue_script( 'owl-carousel-js', get_template_directory_uri() . '/owl-carousel/owl.carousel.min.js', array() ,'2.21', true );
	wp_enqueue_script( 'owl-custom-js', get_template_directory_uri() . '/src/assets/owl-custom-js/owl-custom.js#asyncload', array(),'', true );
	
	// Blog ajax
	wp_register_script( "blog_ajax", get_template_directory_uri() . '/src/assets/js/ajax/blog_ajax.js', array('jquery') );
	wp_localize_script( 'blog_ajax', 'blogAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'blog_ajax' );
	
	// Programs load more ajax
	wp_register_script( "programs_ajax", get_template_directory_uri() . '/src/assets/js/ajax/programs_ajax.js', array('jquery') );
	wp_localize_script( 'programs_ajax', 'programsAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'programs_ajax' );
	
	// Single program ajax
	wp_register_script( "single_program_ajax", get_template_directory_uri() . '/src/assets/js/ajax/single_program_ajax.js', array('jquery') );
	wp_localize_script( 'single_program_ajax', 'singleProgramAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'single_program_ajax' );
	
	// Filter projects ajax
	wp_register_script( "projects_ajax", get_template_directory_uri() . '/src/assets/js/ajax/projects_ajax.js', array('jquery') );
	wp_localize_script( 'projects_ajax', 'projectsAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'projects_ajax' );
	
	// Load more projects ajax
	wp_register_script( "projects_loadmore_ajax", get_template_directory_uri() . '/src/assets/js/ajax/projects_ajax.js', array('jquery') );
	wp_localize_script( 'projects_loadmore_ajax', 'projectsLoadMoreAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'projects_loadmore_ajax' );
	
	// Filter procedures ajax
	wp_register_script( "procedures_ajax", get_template_directory_uri() . '/src/assets/js/ajax/procedures_ajax.js', array('jquery') );
	wp_localize_script( 'procedures_ajax', 'proceduresAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' )));        
	wp_enqueue_script( 'procedures_ajax' );
   
	// Add the comment-reply library on pages where it is necessary
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	}

	add_action( 'wp_enqueue_scripts', 'foundationpress_scripts' );
endif;

function defer_parsing_of_js ( $url ) {
	if ( FALSE === strpos( $url, '.js' ) ) return $url;
	if ( strpos( $url, 'jquery.js' ) ) return $url;
	if ( strpos( $url, 'ajax.js' ) ){
		 return "$url' defer ";
	}
	else {
		return $url;
	}
}
add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
