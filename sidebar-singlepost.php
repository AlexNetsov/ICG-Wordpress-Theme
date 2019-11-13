<?php
/**
 * The single post sidebar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar cell small-12 medium-3 medium-offset-1">
	<h4><?php _e( 'More news from this category', 'icg' ); ?></h4>
	<?php 
		$c = get_the_category();
		$post_category_id = $c[0]->term_id;
		$post_category_name = $c[0]->name;
		$args = array(
	    'post_type' => 'post',
	    'orderby'   => 'rand',
	    'posts_per_page' => 2, 
	    'post__not_in' => array( get_the_id() ),
	    'tax_query' => array(
		    array(
				'taxonomy' => 'category',
				'field'    => 'term_id',
				'terms'    => $post_category_id,
				),
		),
	    );
	 
		$post_sidebar_query = new WP_Query( $args );
		if ( $post_sidebar_query->have_posts() ) {
			echo '<div class="more-posts-container">';
		    while ( $post_sidebar_query->have_posts() ) {
		        $post_sidebar_query->the_post();
		        $heading_html = '';
		        $short_heading = get_field('listing_heading',get_the_ID());
				if($short_heading){
					$heading_html = $short_heading;
				}
				else{
					$heading_html = get_the_title(); 
				}
		        echo '<a href="'.get_the_permalink().'" class="single-more-post">
								<div class="single-news-container">
									<div class="news-image-container" style="background:url('.get_the_post_thumbnail_url(get_the_ID(),'full').')">
										<div class="category-container">'.
										$post_category_name
										.'</div>
									</div>
									<div class="header-container">
										<h5 class="news-showcase-title">'.$heading_html.'</h5>
										<div class="news-date-showcase">'.get_the_date( 'd.m.y' ).'</div>
									</div>
								</div>
							</a>';
		    }
		    echo '</div>';
		    /* Restore original Post Data */
		    wp_reset_postdata();
		}
	?>
</aside>
