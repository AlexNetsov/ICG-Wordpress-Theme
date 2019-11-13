<?php
/**
 * The template for displaying single procedures
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php 
	if(ICL_LANGUAGE_CODE == 'bg'){
		$programs_link = '/procedures/';
	}
	else if (ICL_LANGUAGE_CODE == 'en'){
		$programs_link = '/procedures/?lang=en';
	}
?>

<div class="top-single-procedure">
	<h1 class="entry-title"><?php _e( 'Procedures', 'icg' ); ?></h1>
	<div class="page-breadcrumbs">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e( 'Home', 'icg' ); ?></a>
		<span> > </span>
		<a href="<?php echo esc_url( $programs_link ); ?>"><?php _e( 'Procedures', 'icg' ); ?></a>
		<span> > </span>
		<span class="page-breadcrumbs-current-page"><?php the_title(); ?></span>
	</div>
	<h3 class="procedure-title"><?php the_title(); ?></h3>
</div>
<div class="main-wrap full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
