<?php 
add_action("wp_ajax_procedures_ajax_callback", "procedures_ajax_callback");
add_action("wp_ajax_nopriv_procedures_ajax_callback", "procedures_ajax_callback");

function procedures_ajax_callback() {
	global $post;

	if ( !wp_verify_nonce( $_REQUEST['nonce'], "procedures_ajax_nonce")) {
	  exit("No naughty business please");
	}   

	$new_program_id = $_REQUEST["program_id"];
	$curr_lang = $_REQUEST["cur_lang"];
	$procedure_state = $_REQUEST["procedure_state"];
	
	$ids = get_field('program_procedures', $new_program_id, false);
	
	if($new_program_id == 0){
		if($procedure_state != 0) {
			$query_args = array(
				'post_type'      	=> 'procedure',
				'posts_per_page'	=> 6,
				'tax_query' => array(
					array(
						'taxonomy' => 'procedure_types',
						'field'    => 'id',
						'terms'    => array($procedure_state),
					),
				),
			);
		}
		else {
			if ($curr_lang == 'bg'){
				$procedures_cats = array(36,37);
			}
			else {
				$procedures_cats = array(34,35);
			}
			$query_args = array(
				'post_type'      	=> 'procedure',
				'posts_per_page'	=> 6,
				'tax_query' => array(
					array(
						'taxonomy' => 'procedure_types',
						'field'    => 'id',
						'terms'    => $procedures_cats,
					),
				),
			);
		}
	}
	else {
		if($procedure_state != 0) {
			$query_args = array(
				'post_type'      	=> 'procedure',
				'posts_per_page'	=> 6,
				'post__in' => $ids,
				'tax_query' => array(
					array(
						'taxonomy' => 'procedure_types',
						'field'    => 'id',
						'terms'    => array($procedure_state),
					),
				),
			);
		}
		else {
			$query_args = array(
				'post_type'      	=> 'procedure',
				'posts_per_page'	=> 6,
				'post__in' => $ids,
			);
		}
	}
	
	$procedures = get_posts( $query_args );

	foreach($procedures as $single_procedure){
		$result['data'] .= '<a href="'. get_the_permalink($single_procedure->ID) .'" class="cell">
					<div class="single-procedure-container">
						<div class="procedure-image-container" style="background:url('. get_the_post_thumbnail_url($single_procedure->ID, 'archieve-thumb').')">
						</div>
						<div class="header-container">
							<h5 class="procedure-showcase-title">'.get_the_title($single_procedure->ID) .'</h5>
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