<?php 
add_action("wp_ajax_blog_ajax_callback", "blog_ajax_callback");
add_action("wp_ajax_nopriv_blog_ajax_callback", "blog_ajax_callback");

function blog_ajax_callback() {
	global $post;

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "blog_ajax_nonce")) {
	  exit("No naughty business please");
	}   

	$new_category_id = $_REQUEST["category_id"];
	$number_of_posts = $_REQUEST["number_of_posts"];
	$curr_lang = $_REQUEST["cur_lang"];
	$query_vars = array();
	
	// Single cat handling
	if($new_category_id != 0) {
		$new_category_id = apply_filters( 'wpml_object_id', $new_category_id, 'category', TRUE, $curr_lang );	
		$cat_trid = apply_filters( 'wpml_element_trid', NULL, $new_category_id, 'tax_category');
		$translations = apply_filters( 'wpml_get_element_translations', NULL, $cat_trid, 'tax_category' );
	
		foreach($translations as $translation){
			if($translation->language_code == $curr_lang){
				$category_name = $translation->name;
			}
		}
		
		$cat_array = array($new_category_id);
	}
			
	// Show all handling
	else {
		$cat_array = array();
		$categories = get_categories();
		foreach ($categories as $category) {
		    if ($category->category_nicename != "uncategorized") {
		    	$cat_array[] = apply_filters( 'wpml_object_id', $category->term_id, 'category', TRUE, $curr_lang );
		    }	    
		}
	}
	
	if($number_of_posts == -1){
		$get_posts_args['nopaging'] = true;
		$show_all_posts = true;	
	}
	else {
		$get_posts_args['nopaging'] = false;
		$show_all_posts = false;
	}
	
	// Make the query
	$get_posts_args = array(
		'posts_per_page' => -1,
		'category__in' => $cat_array,
	);
	
	$new_query = get_posts($get_posts_args);
	
	// Compose the HTML
	$curr_number_of_posts = 0;
	foreach($new_query as $single_post){
		if($curr_number_of_posts < 8 || $show_all_posts){
			if($new_category_id == 0){
				$d = wp_get_object_terms($single_post->ID, 'category');
				$curr_cat_id = $d[0]->term_id;
				$cat_trid = apply_filters( 'wpml_element_trid', NULL, $curr_cat_id, 'tax_category');
				$translations = apply_filters( 'wpml_get_element_translations', NULL, $cat_trid, 'tax_category' );
				foreach($translations as $translation){
					if($translation->language_code == $curr_lang){
						$category_name = $translation->name;
					}
				}
			}
			$short_heading = get_field('listing_heading', $single_post);
			$current_post_title = '';
			if($short_heading){
				$current_post_title =  $short_heading;
			}
			else{
				$current_post_title = get_the_title($single_post);
			}
			$result['data'] .= '<a href="'.get_the_permalink($single_post).'" class="cell">
								<div class="single-news-container">
									<div class="news-image-container" style="background:url('.get_the_post_thumbnail_url($single_post,'full').')">
										<div class="category-container">
										'.$category_name.'
										</div>
									</div>
									<div class="header-container">
										<h5 class="news-showcase-title">'.$current_post_title.'</h5>
										<div class="news-date-showcase">'.get_the_date( 'd.m.y', $single_post).'</div>
									</div>
								</div>
							</a>';
			$curr_number_of_posts ++;
		}
	}
	
	$result['new_query_vars'] = json_encode($query_vars);
	$result['number_of_posts'] = count((array)$new_query);
	$result['type'] = 'success';
	$result = json_encode($result);
	echo $result;
   
   die();
}
?>