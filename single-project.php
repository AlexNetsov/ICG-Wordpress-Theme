<?php
/**
 * The template for displaying single projects
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); 
global $post;
?>
<?php
	if(ICL_LANGUAGE_CODE == 'bg'){
		$projects_link = '/successful-projects/';
	}
	else if (ICL_LANGUAGE_CODE == 'en'){
		$projects_link = '/successful-projects/?lang=en';
	}	
	$display_cat;
?>
<div class="main-wrap grid-x" role="main">
<h1 class="entry-title"><?php _e( 'Successful projects', 'icg' ) ?></h1>
<div class="page-breadcrumbs">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>"> <?php _e( 'Home', 'icg' ); ?></a>
	<span> > </span>
	<a href="<?php echo esc_url( $projects_link ); ?>"><?php _e( 'Successful projects', 'icg' ); ?></a>
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
				<span class="category"><?php 
					$term_list = wp_get_post_terms($post->ID, 'project_types', array("fields" => "all"));
					foreach($term_list as $single_term){
						if($single_term->term_id != 33 && $single_term->term_id != 5){
							$display_cat = $single_term;
							echo $single_term->name;
							break;
						}
					}
					?>
				</span>
			</div>
		</header>
		<div class="project-meta-mobile-container">
			<!-- Project value field -->
			<?php 
				if(get_field('project_value')){
			?>
			<div class="project-meta">
				<div class="project-meta-img-container">
					<img src="<?php echo get_stylesheet_directory_uri() .'/src/assets/images/img/money-icon.PNG' ?>" width="54px" height="50px" />
				</div>
				<div class="field-value">
					<h5><?php _e( 'Project value:', 'icg' )?></h5>
			<?php
					the_field('project_value');
			?>
				</div>
			</div>
			<?php
				}
			?>		
			<!-- Project value field -->
			<?php 
				if(get_field('bfp_value')){
			?>
			<div class="project-meta">
				<div class="project-meta-img-container">
					<img src="<?php echo get_stylesheet_directory_uri() .'/src/assets/images/img/money-icon.PNG' ?>" width="54px" height="50px" />
				</div>
				<div class="field-value">
					<h5><?php _e( 'BFP value:', 'icg' )?></h5>
			<?php
					the_field('bfp_value');
			?>
				</div>
			</div>
			<?php
				}
			?>
			<!-- Deadline field -->
			<?php 
				if(get_field('deadline')){
			?>
			<div class="project-meta">
				<div class="project-meta-img-container">
					<img src="<?php echo get_stylesheet_directory_uri() .'/src/assets/images/img/deadline-icon.PNG' ?>" width="41px" height="41px" />
				</div>
				<div class="field-value">
					<h5><?php _e( 'Deadline:', 'icg' )?></h5>
			<?php
					the_field('deadline');
			?>
				</div>
			</div>
			<?php
				}
			?>
			
		</div>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
		<footer>

		</footer>

	</article>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_sidebar('singleproject'); ?>
<h4 class="more-projects"><?php _e( 'More successful projects', 'icg' )?></h4>
<div class="grid-x more-projects">
	<?php 
		$more_projects_slider = '<div class="owl-carousel mobile-slider ">';
		$args = array(
	    'post_type' => 'project',
	    'orderby'   => 'rand',
	    'post__not_in' => array($post->ID),
	    'posts_per_page' => 3,
	    'tax_query' => array(
			'taxonomy' => 'project_types',
			'field'    => 'id',
			'terms'    => $display_cat->term_id,
			),
	    );
	 
		$post_sidebar_query = new WP_Query( $args );
		if ( $post_sidebar_query->have_posts() ) {
		    while ( $post_sidebar_query->have_posts() ) {
			    $single_display_cat;
		        $post_sidebar_query->the_post();
		        $term_list_single = wp_get_post_terms($post->ID, 'project_types', array("fields" => "all"));
				foreach($term_list_single as $single_term){
					if($single_term->term_id != 33 && $single_term->term_id != 5){
						$single_display_cat = $single_term;
						break;
					}
				}
				$current_project = '<a href="'.get_the_permalink().'" class="cell small-12 medium-4">
								<div class="single-project-container">
									<div class="project-image-container" style="background:url('.get_the_post_thumbnail_url(get_the_ID(),'full').')">
										<div class="category-container">'.
										$single_display_cat->name
										.'</div>
									</div>
									<div class="header-container">
										<h5 class="project-showcase-title">'.get_the_title().'</h5>
									</div>
								</div>
							</a>';
		        echo $current_project;
		        $more_projects_slider .= $current_project;
		    }
		    
		    $more_projects_slider .= '</div>';
		    /* Restore original Post Data */
		    wp_reset_postdata();
		}
		
	?>
	
</div>
<div class="mobile-slider-container">
<?php echo $more_projects_slider; ?>
</div>
<div class="load-more-button-container white-icg-button">
		<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-color-grey" href="<?php echo $projects_link ?>" title=""><?php _e( 'See all', 'icg' ) ?></a>
	</div>
</div>
<?php get_footer();
