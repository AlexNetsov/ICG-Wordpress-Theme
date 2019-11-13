<?php
/**
 * The template for displaying single posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 
$d = get_the_category();
$category = $d[0];
?>

<div class="main-wrap grid-x" role="main">
<h1 class="entry-title"><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
<div class="page-breadcrumbs">
	<a href="<?php echo get_category_link($category->term_id) ?>"><?php echo $category->name; ?></a>
	<span> > </span>
	<span class="page-breadcrumbs-current-page"><?php the_title(); ?></span>
</div>
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content cell small-12 medium-8') ?> id="post-<?php the_ID(); ?>">
		<header>
			<div class="featured-image-container" style="background:url(<?php the_post_thumbnail_url('full') ?>) no-repeat center center">
			</div>
			<h3 class="single-title"><?php echo the_title(); ?></h3>
			<div class="single-meta">
				<a href="/category/<?php echo $category->slug; ?>" class="category"><?php echo $category->name;?></a>
				<span class="date">
					<?php _e( 'Date: ', 'icg' );?>
					<?php echo get_the_date( 'd.m.y' ); ?>
				</span>
			</div>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>

			<div class="tag-container">
			<?php $tags = get_the_tags();
					if ($tags) {
						foreach($tags as $tag){
							$tag_link = get_tag_link($tag->term_id);
							echo '<a href="'.$tag_link.'">'.$tag->name.'</a>';
						}
					}
				?>
			</div>
			<div class="share-buttons">
				<a href="<?php echo 'http://www.facebook.com/share.php?u='.rawurlencode(get_permalink($post->ID)).'&amp;t='.rawurlencode($p->post_title); ?>">
					<i class="fa fa-facebook-square" aria-hidden="true"></i>
					<span><?php _e( 'Share', 'icg' ); ?></span>
				</a>
			</div>
		</footer>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar('singlepost'); ?>
</div>
<?php get_footer();
