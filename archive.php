<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header();
global $wp_query;
 ?>

<div class="main-wrap full-width" role="main">
	<?php error_log(print_r($wp_query, true)); ?>
	<h1 class="entry-title"><?php echo $wp_query->queried_object->name; ?></h1>
	<article class="main-content news-showcase-container grid-x small-up-1 medium-up-4">
	<?php if ( have_posts() ) : ?>
		<?php if($wp_query->queried_object->taxonomy == 'category' || $wp_query->queried_object->taxonomy == 'post_tag') {?>
			<?php while ( have_posts() ) : the_post(); ?>
				<a href="<?php the_permalink() ?>" class="cell">
					<div class="single-news-container">
						<div class="news-image-container" style="background:url(<?php the_post_thumbnail_url('archieve-thumb')?>)">
							<div class="category-container">
							<?php  
								$c = get_the_category();
								echo $c[0]->name; ?>
							</div>
						</div>
						<div class="header-container">
							<h5 class="news-showcase-title"><?php 
								$short_heading = get_field('listing_heading');
								if($short_heading){
									echo $short_heading;
								}
								else{
									the_title(); 
								}
								?></h5>
							<div class="news-date-showcase"><?php echo get_the_date( 'd.m.y' );?></div>
						</div>
					</div>
				</a>
			<?php endwhile; ?>
		<?php } else {?>
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
			<?php endwhile; ?>
		<?php } ?>
		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

	</article>
	<?php
	if ( function_exists( 'foundationpress_pagination' ) ) :
		foundationpress_pagination();
	elseif ( is_paged() ) :
	?>
		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
		</nav>
	<?php endif; ?>

</div>

<?php get_footer();
