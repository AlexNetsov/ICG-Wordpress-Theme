<?php 
add_action("wp_ajax_single_program_ajax_callback", "single_program_ajax_callback");
add_action("wp_ajax_nopriv_single_program_ajax_callback", "single_program_ajax_callback");

function single_program_ajax_callback() {
	global $post;

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "single_program_ajax_nonce")) {
	  exit("No naughty business please");
	}   

	$new_category_id = $_REQUEST["category_id"];
	$ids = explode(',', $_REQUEST["ids"]);
	
	$query_vars = array();
	
	
	if($new_category_id == 0) {
		$get_posts_args = array(
			'post_type'      	=> 'procedure',
			'posts_per_page'	=> 6,
			'post__in'			=> $ids,
			'orderby'        	=> 'post__in',
		);
	}
	else {
		$get_posts_args = array(
			'post_type'      	=> 'procedure',
			'posts_per_page'	=> 6,
			'post__in'			=> $ids,
			'orderby'        	=> 'post__in',
			'tax_query' => array(
				array(
					'taxonomy' => 'procedure_types',
					'field'    => 'id',
					'terms'    => $new_category_id,
				),
			),
		);	
	}
	
	$new_query = get_posts($get_posts_args);
	error_log(print_r($new_query,true));
	// Compose the HTML
	foreach($new_query as $single_post){
			
			$result['data'] .= '<a href="'.get_the_permalink($single_post).'" class="cell">
								<div class="single-procedure-container">
									<div class="proc-image-container" style="background:url('.get_the_post_thumbnail_url($single_post,'full').')">
										<div class="dates-container">
											<div class="start-date"><img src="'.get_stylesheet_directory_uri().'/src/assets/images/img/calendar-icon.png'.'" class="calendar-icon" width="16px" height="18px"/>'.get_field('start_date',$single_post->ID).'</div>
												<div class="end-date">'.get_field('end_date',$single_post->ID).'</div>
										</div>
									</div>
									<div class="header-container">
										<h5 class="procedure-showcase-title">'.get_the_title($single_post) .'</h5>
									</div>
								</div>
							</a>';
		
	}
	
	$result['type'] = 'success';
	$result = json_encode($result);
	echo $result;
   
   die();
}
?>