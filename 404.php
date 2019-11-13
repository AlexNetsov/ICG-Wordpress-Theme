<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

 <div class="main-wrap-404" role="main">
	<h1 class="title-404">404</h1>
	<h4><?php _e( 'The page you are looking for cannot be found.' , 'icg' )?></h4>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php _e( 'Back to home page', 'icg' )?></a>

</div>

<?php get_footer();
