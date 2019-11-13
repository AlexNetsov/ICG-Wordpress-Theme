<?php
/*
Template Name: About us subpages
*/

 get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div class="main-wrap full-width" role="main">

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title">
				<?php 
					_e( 'За нас', 'icg' );?>
			</h1>
		</header>
		<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
		<div class="entry-content">
			<?php 
				wp_nav_menu( array(
					'theme_location' => 'about-us-menu',
				));
			?>
			<?php 
				$d = get_field('show_subpage_title');
				if($d[0] == 'yes') {
			?>
			<h2 class="about-us-subtitle"><?php the_title(); ?></h2>
			<?php
				}
			?>
			<?php the_content(); ?>
		</div>
		<footer>
			<p><?php the_tags(); ?></p>
		</footer>
		<?php do_action( 'foundationpress_page_before_comments' ); ?>
		<?php comments_template(); ?>
		<?php do_action( 'foundationpress_page_after_comments' ); ?>
	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

</div>

<?php get_footer();
