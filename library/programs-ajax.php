<?php 
add_action("wp_ajax_programs_ajax_callback", "programs_ajax_callback");
add_action("wp_ajax_nopriv_programs_ajax_callback", "programs_ajax_callback");

function programs_ajax_callback() {
	global $post;

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "program_ajax_nonce")) {
	  exit("No naughty business please");
	}   

	$query_vars = json_decode(str_replace('\"', '"', $_REQUEST["query_vars"]));
	$number_of_posts = $_REQUEST["number_of_posts"];
	$curr_lang = $_REQUEST["cur_lang"];
	
	$query_vars->posts_per_page = -1;
	$query_vars->nopaging = true;

	$new_query = new WP_Query($query_vars);

	if($new_query->have_posts()){
		foreach($new_query->posts as $single_post){
			$post_id;
			$post_trid = apply_filters( 'wpml_element_trid', NULL, $single_post->ID, 'post_post');
			$translations = apply_filters( 'wpml_get_element_translations', NULL, $post_trid, 'post_post' );
			foreach($translations as $translation){
				if($translation->language_code == $curr_lang){
					$post_id = $translation->element_id;
				}
			}			
			$result['data'] .= '<a href="'.get_the_permalink($post_id).'" class="cell">
								<div class="single-program-container">
									<div class="program-image-container" style="background:url('.get_the_post_thumbnail_url($post_id,'full').')">

									</div>
									<div class="header-container">
										<h5 class="program-showcase-title">'.get_the_title($post_id) .'</h5>
									</div>
								</div>
							</a>';
		}
	}
	
	$result['new_query_vars'] = json_encode($query_vars);
	$result['type'] = 'success';
	$result = json_encode($result);
	echo $result;
   
   die();
}
?>