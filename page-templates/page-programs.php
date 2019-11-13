<?php
/**
Template Name: Programs
*/

get_header(); 
global $wp_query;
$nonce = wp_create_nonce("program_ajax_nonce"); 
?>

<div class="main-wrap full-width" role="main">
	<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
		<?php 
			$program_args = array(
	        'post_type' => 'program',
			'tax_query' => array(
				array(
					'taxonomy' => 'program_types',
					'field'    => 'name',
					'terms'    => 'Programs featured',
				),
			),
			'posts_per_page' => 1,
        );
        $program_query = new WP_Query($program_args);
        if($program_query->have_posts()){
	    ?>
	    <div class="featured-program-container grid-x">
	    <?php
	        while ( $program_query->have_posts() ) {
				$program_query->the_post();
				?>
				<div class="program-image cell small-12 medium-6" style="background: url(<?php the_post_thumbnail_url( 'full' )?>) no-repeat center"></div>
				<div class="program-content cell small-12 medium-6">
					<h3><?php the_title(); ?></h3>
					<div class="excerpt"><?php the_excerpt(); ?></div>
					<a class="read-more-button" href="<?php the_permalink(); ?>"><?php _e( "Read more", 'icg' )?></a>
				</div>
				<?php
			}
			?>
		</div>
		<?php
        }
		?>
	<div class="program-showcase-container grid-x small-up-1 medium-up-3">
	<?php do_action( 'foundationpress_before_content' ); ?>
	
	<?php 
			$programs_args = array(
	        'post_type' => 'program',
			'posts_per_page' => 6,
        );
        $programs_query = new WP_Query($programs_args);
        if($programs_query->have_posts()){
	        while ( $programs_query->have_posts() ) {
				$programs_query->the_post();
				?>
				<a href="<?php the_permalink() ?>" class="cell">
					<div class="single-program-container">
						<div class="program-image-container" style="background:url(<?php the_post_thumbnail_url('archieve-thumb')?>)">
						</div>
						<div class="header-container">
							<h5 class="program-showcase-title"><?php the_title(); ?></h5>
						</div>
					</div>
				</a>
				<?php
			}
        }
		?>
	
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	<div class="query-vars" style="display: none" data-nonce="<?php echo $nonce?>"><?php echo json_encode($programs_query->query_vars); ?></div>
	<div class="current-language-holder" style="display: none"><?php echo ICL_LANGUAGE_CODE;?></div>
	<?php if($programs_query->post_count >= 6 ) {?>
		<div class="load-more-button-container white-icg-button">
			<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-color-grey" href="#" title=""><?php _e( 'Покажи още', 'icg' )?></a>
		</div>
	<?php } ?>
</div>

<?php get_footer();
