<?php
/**
 * The template for displaying single programs
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php 
	if(ICL_LANGUAGE_CODE == 'bg'){
		$programs_link = '/programs/';
	}
	else if (ICL_LANGUAGE_CODE == 'en'){
		$programs_link = '/programs/?lang=en';
	}
?>
<div class="page-breadcrumbs mobile-breadcrumbs">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e( 'Home', 'icg' ); ?></a>
	<span> > </span>
	<a href="<?php echo esc_url( $programs_link ); ?>"><?php _e( 'Programs', 'icg' ); ?></a>
	<span> > </span>
	<span class="page-breadcrumbs-current-page"><?php the_title(); ?></span>
</div>
<div class="single-program-featured-image-container" style="background:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>)">
	<div class="image-overlay"></div>
	<div class="mobile-featured-image" style="background:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>)"></div>
	<div class="ss-inner">
		<div class="page-breadcrumbs">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e( 'Home', 'icg' ); ?></a>
			<span> > </span>
			<a href="<?php echo esc_url( $programs_link ); ?>"><?php _e( 'Programs', 'icg' ); ?></a>
			<span> > </span>
			<span class="page-breadcrumbs-current-page"><?php the_title(); ?></span>
		</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="excerpt"><?php the_excerpt(); ?></div>
		<?php 
			if(get_field('program_website')){
		?>
		<a class="program-link" target="_blank" href="<?php the_field('program_website'); ?>"><?php _e( 'To the operational program\'s website', 'icg' )?></a>
		<?php
			}
		?>
	</div>
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
