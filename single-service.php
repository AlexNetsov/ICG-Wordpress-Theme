<?php
/**
 * The template for displaying single services
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php 
	if(ICL_LANGUAGE_CODE == 'bg'){
		$services_link = '/services/';
	}
	else if (ICL_LANGUAGE_CODE == 'en'){
		$services_link = '/services/?lang=en';
	}
?>
<div class="page-breadcrumbs mobile-breadcrumbs">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e( 'Home', 'icg' ); ?></a>
		<span> > </span>
		<a href="<?php echo esc_url( $services_link ); ?>"><?php _e( 'Services', 'icg' ); ?></a>
		<span> > </span>
		<span class="page-breadcrumbs-current-page"><?php the_title(); ?></span>
	</div>
</div>
<div class="single-service-featured-image-container" style="background:url(<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>)">
	<div class="ss-inner">
		<div class="page-breadcrumbs">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e( 'Home', 'icg' ); ?></a>
			<span> > </span>
			<a href="<?php echo esc_url( $services_link ); ?>"><?php _e( 'Services', 'icg' ); ?></a>
			<span> > </span>
			<span class="page-breadcrumbs-current-page"><?php the_title(); ?></span>
		</div>
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</div>
</div>
<div class="service-logos-container">
	<div class="service-logos-inner">
		<?php $logos = get_field('logos_below_header');
			if($logos) {
				foreach($logos as $logo) {
					echo '<img src="'.$logo['icg_logo'].'" width="113px" height="42px"/>';
				}
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
			<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
		</div>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
</div>
<?php get_footer();
