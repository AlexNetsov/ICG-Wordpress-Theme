<?php
/**
 * The template for displaying blog
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 
global $wp_query;
$nonce = wp_create_nonce("blog_ajax_nonce"); 
?>

<div class="main-wrap full-width" role="main">
<h1 class="entry-title"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
<div class="blog-filters">
	<ul>
		<li class="active-blog-filter"><a href="#" class="single-blog-filter" category-id="0"><?php _e( 'All news', 'icg' ); ?></a></li>
<?php 
$terms = get_terms('category');
foreach($terms as $term) {
	?>
	<li><a href="#" class="single-blog-filter" category-id="<?php echo $term->term_id?>"><?php echo $term->name ?></a></li>
	<?php
}
?>
	</ul>
</div>
<div class="current-language-holder" style="display: none"><?php echo ICL_LANGUAGE_CODE;?></div>
<div class="query-vars" style="display: none" data-nonce="<?php echo $nonce?>"><?php echo json_encode($wp_query->query_vars); ?></div>
	<div class="news-showcase-container grid-x small-up-1 medium-up-4">
	<?php do_action( 'foundationpress_before_content' ); ?>
	
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
	<?php endwhile;?>
	
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	<?php if($wp_query->post_count >= 8) { ?>
		<div class="load-more-button-container white-icg-button">
			<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-color-grey" href="#" title=""><?php _e( 'Покажи още', 'icg' )?></a>
		</div>
	<?php } ?>
</div>

<?php get_footer();
