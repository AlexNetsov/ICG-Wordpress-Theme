<?php 
add_action("wp_ajax_projects_loadmore_callback", "projects_loadmore_callback");
add_action("wp_ajax_nopriv_projects_loadmore_callback", "projects_loadmore_callback");

function projects_loadmore_callback() {
	global $post;

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "projects_ajax_nonce")) {
	  exit("No naughty business please");
	}   

	$new_program_id = $_REQUEST["program_id"];
	$curr_lang = $_REQUEST["cur_lang"];
	
	$ids = get_field('program_projects', $new_program_id, false);

	if ($ids){
		foreach($ids as $single_project_id){
			$term_list_single = wp_get_post_terms($single_project_id, 'project_types', array("fields" => "all"));
			$single_display_cat;
			foreach($term_list_single as $single_term){
				if($single_term->term_id != 33 && $single_term->term_id != 5){
					$single_display_cat = $single_term;
					break;
				}
			}
			$result['data'] .= '<a href="'.get_the_permalink($single_project_id).'" class="cell">
										<div class="single-project-container">
											<div class="project-image-container" style="background:url('.get_the_post_thumbnail_url($single_project_id,'full').')">
											<div class="category-container">'.
												$single_display_cat->name
											.'</div>
												
											</div>
											<div class="header-container">
												<h5 class="project-showcase-title">'.get_the_title($single_project_id).'</h5>
											</div>
										</div>
									</a>';
		}
	}
	else if ($new_program_id == 0){
		
		$projects_args = array(
			'post_type'      	=> 'project',
			'posts_per_page'	=> -1,
		);
		$projects_query = get_posts($projects_args);
		$odd_counter = 1;
		foreach($projects_query as $single_project){
			$single_project_ID = apply_filters( 'wpml_object_id', $single_project->ID, 'post', TRUE, $curr_lang);
			if($odd_counter % 2 == 1){
				$term_list_single = wp_get_post_terms($single_project_ID, 'project_types', array("fields" => "all"));
				$single_display_cat;
				foreach($term_list_single as $single_term){
					if($single_term->term_id != 33 && $single_term->term_id != 5){
						$single_display_cat = $single_term;
						break;
					}
				}
				$result['data'] .= '<a href="'.get_the_permalink($single_project_ID).'" class="cell">
										<div class="single-project-container">
											<div class="project-image-container" style="background:url('.get_the_post_thumbnail_url($single_project_ID,'full').')">
											<div class="category-container">'.
												$single_display_cat->name
											.'</div>
												
											</div>
											<div class="header-container">
												<h5 class="project-showcase-title">'.get_the_title( $single_project_ID ).'</h5>
											</div>
										</div>
									</a>';
			}
			$odd_counter++;
		}
	}

	$result['type'] = 'success';
	$result = json_encode($result);
	echo $result;
   
   die();
}
?>