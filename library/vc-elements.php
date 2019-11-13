<?php 
// Services showcase
if(!function_exists('services_showcase')) {
	function services_showcase( $atts, $content =  null) {
		extract(shortcode_atts(array(
			'icon_1_id' => '',
			'text_1' => 'Lorem ipsum',
			'icon_1_link' => '',
			'icon_2_id' => '',
			'text_2' => 'Lorem ipsum',
			'icon_2_link' => '',
			'icon_3_id' => '',
			'text_3' => 'Lorem ipsum',
			'icon_3_link' => '',
			'icon_4_id' => '',
			'text_4' => 'Lorem ipsum',
			'icon_4_link' => '',

		), $atts));
        
        $output = ' <div class="grid-x homepage-services-container">
					  <div class="cell">
					  	<div class="grid-x homepage-services-inner-row">
					  		<a href="'.$icon_1_link.'" class="cell small-12 medium-6">
					  			<div class="grid-x">
						  			<div class="cell small-2 text-center">
						  				<span class="icon-icon-'.$icon_1_id.'"></span>
						  			</div>
						  			<div class="cell small-10">
						  				<p>'.$text_1.'</p>
						  			</div>
						  		</div>
					  		</a>
					  		<a href="'.$icon_2_link.'" class="cell small-12 medium-6">
					  			<div class="grid-x">
					  				<div class="cell small-2 text-center">
						  				<span class="icon-icon-'.$icon_2_id.'"></span>
						  			</div>
						  			<div class="cell small-10">
						  				<p>'.$text_2.'</p>
						  			</div>
						  		</div>
					  		</a>
					  	</div>
					  </div>
					  <div class="cell">
					  	<div class="grid-x homepage-services-inner-row">
					  		<a href="'.$icon_3_link.'" class="cell small-12 medium-6">
					  			<div class="grid-x">
						  			<div class="cell small-2 text-center">
						  				<span class="icon-icon-'.$icon_3_id.'"></span>
						  			</div>
						  			<div class="cell small-10">
						  				<p>'.$text_3.'</p>
						  			</div>
						  		</div>
					  		</a>
					  		<a href="'.$icon_4_link.'" class="cell small-12 medium-6">
					  			<div class="grid-x">
						  			<div class="cell small-2 text-center">
						  				<span class="icon-icon-'.$icon_4_id.'"></span>
						  			</div>
						  			<div class="cell small-10">
						  				<p>'.$text_4.'</p>
						  			</div>
						  		</div>
					  		</a>
					  	</div>
					  </div>
					  
					</div>'; 
        
        return $output;
	}
	add_shortcode('services_showcase', 'services_showcase');		
}
vc_map( array(
	"name" => __("Services showcase", "icg"),
	"base" => "services_showcase",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'First service icon id', 'icg' ),
			'param_name' => 'icon_1_id',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'First service link', 'icg' ),
			'param_name' => 'icon_1_link',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
	    array(
	        "type" => "textarea",
	        "heading" => __("First service text", "icg"),
	        "param_name" => "text_1",
	        'edit_field_class' => 'vc_col-xs-4 services-option',
	    ), 
	    array(
			'type' => 'textfield',
			'heading' => __( 'Second service icon id', 'icg' ),
			'param_name' => 'icon_2_id',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Second service link', 'icg' ),
			'param_name' => 'icon_2_link',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
	    array(
	        "type" => "textarea",
	        "heading" => __("Second service text", "icg"),
	        "param_name" => "text_2",
	        'edit_field_class' => 'vc_col-xs-4 services-option',
	    ), 
	    array(
			'type' => 'textfield',
			'heading' => __( 'Third service icon id', 'icg' ),
			'param_name' => 'icon_3_id',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Third service link', 'icg' ),
			'param_name' => 'icon_3_link',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
	    array(
	        "type" => "textarea",
	        "heading" => __("Third service text", "icg"),
	        "param_name" => "text_3",
	        'edit_field_class' => 'vc_col-xs-4 services-option',
	    ), 
	    array(
			'type' => 'textfield',
			'heading' => __( 'Fourth service icon id', 'icg' ),
			'param_name' => 'icon_4_id',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Fourth service link', 'icg' ),
			'param_name' => 'icon_4_link',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
	    array(
	        "type" => "textarea",
	        "heading" => __("Fourth service text", "icg"),
	        "param_name" => "text_4",
	        'edit_field_class' => 'vc_col-xs-4 services-option',
	    ), 
	    
	),
) );
// Procedures showcase
if(!function_exists('procedures_showcase')) {
	function procedures_showcase( $atts, $content =  null) {
		extract(shortcode_atts(array(
			'procedures_cat' => '',

		), $atts));
		
        $output = ''; 
        
        if($procedures_cat == ''){
	        return $output;
        }
        $args = array(
	        'post_type' => 'procedure',
			'tax_query' => array(
				array(
					'taxonomy' => 'procedure_types',
					'field'    => 'name',
					'terms'    => $procedures_cat,
				),
			),
			'posts_per_page' => 3,
        );
        $procedures_query = new WP_Query($args);
        
        if($procedures_query->have_posts()){
	        $output .= '<div class="procedures-showcase-container grid-x">';
	        $procedures_slider = '<div class="owl-carousel procedures-showcase-container mobile-slider ">';
	        while ( $procedures_query->have_posts() ) {
				$procedures_query->the_post();
				$single_procedure_html = '<a href="'.get_the_permalink().'" class="cell small-12 medium-4">
								<div class="single-procedure-container">
									<div class="proc-image-container" style="background:url('.get_the_post_thumbnail_url(get_the_ID(),'full').')">
										<div class="dates-container">
											<div class="start-date"><img src="'.get_stylesheet_directory_uri().'/src/assets/images/img/calendar-icon.png'.'" class="calendar-icon" width="16px" height="18px"/>'.get_field('start_date').'</div>
											<div class="end-date">'.get_field('end_date').'</div>
										</div>
									</div>
									<div class="header-container">
										<h5 class="procedure-showcase-title">'.get_the_title().'</h5>
									</div>
								</div>
							</a>';
				$output .= $single_procedure_html;
				$procedures_slider .= $single_procedure_html;
			}
			$output .= '</div>';
			$procedures_slider .= '</div>';
			$output .= $procedures_slider;
        }
        wp_reset_query();
        wp_reset_postdata();
        return $output;
	}
	add_shortcode('procedures_showcase', 'procedures_showcase');		
}
vc_map( array(
	"name" => __("Procedures showcase", "icg"),
	"base" => "procedures_showcase",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'Category to showcase', 'icg' ),
			'param_name' => 'procedures_cat',
			'edit_field_class' => 'vc_col-xs-12',
		),
	),
) );

// News showcase
if(!function_exists('news_showcase')) {
	function news_showcase( $atts, $content =  null) {
		extract(shortcode_atts(array(
			'news_tag' => '',

		), $atts));
		
        $output = ''; 
        
        if($news_tag == ''){
	        return $output;
        }
        $news_args = array(
	        'post_type' => 'post',
			'tax_query' => array(
				array(
					'taxonomy' => 'post_tag',
					'field'    => 'name',
					'terms'    => $news_tag,
				),
			),
			'posts_per_page' => 4,
        );
        $news_query = new WP_Query($news_args);
        
        if($news_query->have_posts()){
	        $output .= '<div class="news-showcase-container grid-x">';
	        $news_slider = '<div class="owl-carousel news-showcase-container mobile-slider">';
	        while ( $news_query->have_posts() ) {
				$news_query->the_post();
				$heading_html = '';
				$short_heading = get_field('listing_heading',get_the_ID());
				if($short_heading){
					$heading_html = $short_heading;
				}
				else{
					$heading_html = get_the_title(); 
				}
				$s = get_the_category();
				$single_news = '<a href="'.get_the_permalink().'" class="cell small-12 medium-3">
								<div class="single-news-container">
									<div class="news-image-container" style="background:url('.get_the_post_thumbnail_url(get_the_ID(),'full').')">
										<div class="category-container">'.
										$s[0]->name
										.'</div>
									</div>
									<div class="header-container">
										<h5 class="news-showcase-title">'.$heading_html.'</h5>
										<div class="news-date-showcase">'.get_the_date( 'd.m.y' ).'</div>
									</div>
								</div>
							</a>';
				$output .= $single_news;
				$news_slider .= $single_news;
			}
			$output .= '</div>';
			$news_slider .= '</div>';
			$output .= $news_slider;
        }
        wp_reset_query();
        wp_reset_postdata();
        return $output;
	}
	add_shortcode('news_showcase', 'news_showcase');		
}
vc_map( array(
	"name" => __("News showcase", "icg"),
	"base" => "news_showcase",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'Tag to showcase', 'icg' ),
			'param_name' => 'news_tag',
			'edit_field_class' => 'vc_col-xs-12',
		),
	),
) );

// Services showcase
if(!function_exists('single_service_block')) {
	function single_service_block( $atts, $content =  null) {
		extract(shortcode_atts(array(
			'icon_id' => '',
			'service_text' => 'Lorem ipsum',
			'service_link' => '#',

		), $atts));
        
        $output = '<a href="'.$service_link.'" class="single-service-block-container">
			  			<div class="single_service_icon">
			  				<span class="icon-icon-'.$icon_id.'"></span>
			  			</div>
			  			<div class="single_service_text">
			  				<p>'.$service_text.'</p>
			  			</div>
			  		</a>'; 
        
        return $output;
	}
	add_shortcode('single_service_block', 'single_service_block');		
}
vc_map( array(
	"name" => __("Single service", "icg"),
	"base" => "single_service_block",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'Service icon id', 'icg' ),
			'param_name' => 'icon_id',
			'edit_field_class' => 'vc_col-xs-4 services-option',
		),
	    array(
	        "type" => "textarea",
	        "heading" => __("Service text", "icg"),
	        "param_name" => "service_text",
	        'edit_field_class' => 'vc_col-xs-4 services-option',
	    ), 
	    array(
	        "type" => "textfield",
	        "heading" => __("Service link", "icg"),
	        "param_name" => "service_link",
	        'edit_field_class' => 'vc_col-xs-4 services-option',
	    ), 
	),
) );

// About us history horizontal icons
if(!function_exists('history_horizontal_icon')) {
	function history_horizontal_icon( $atts, $content = null) {
		extract(shortcode_atts(array(
			'icon_id' => '',

		), $atts));
        
        $content = wpb_js_remove_wpautop($content, true);
        
        $output = '<div class="single-history-timeline-container">
        			<div class="grid-x single-history-timeline">
			  			<div class="cell small-12 medium-1 icon-container">
			  				<span class="icon-icon-'.$icon_id.'"></span>
			  			</div>
			  			<div class="cell small-12 medium-offset-1 medium-8 end text-container">
			  				<p>'.$content.'</p>
			  			</div>
			  		</div>
			  	</div>'; 
        
        return $output;
	}
	add_shortcode('history_horizontal_icon', 'history_horizontal_icon');		
}
vc_map( array(
	"name" => __("Horizontal history timeline", "icg"),
	"base" => "history_horizontal_icon",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'About icon id', 'icg' ),
			'param_name' => 'icon_id',
			'edit_field_class' => 'vc_col-xs-4',
		),
	    array(
	        "type" => "textarea_html",
	        "heading" => __("About text", "icg"),
	        "param_name" => "content",
	        'edit_field_class' => 'vc_col-xs-8',
	    ),  
	),
) );

// About us history vertical icons
if(!function_exists('history_vertical_icon')) {
	function history_vertical_icon( $atts, $content = null) {
		extract(shortcode_atts(array(
			'icon_id' => '',

		), $atts));
        $content = wpb_js_remove_wpautop($content, true);
        
        $output = '<div class="grid-x single-history-statistic">
			  			<div class="cell small-12 icon-container">
			  				<span class="icon-icon-'.$icon_id.'"></span>
			  			</div>
			  			<div class="cell small-12 text-container text-center">
			  				<p>'.$content.'</p>
			  			</div>
			  		</div>'; 
        
        return $output;
	}
	add_shortcode('history_vertical_icon', 'history_vertical_icon');		
}
vc_map( array(
	"name" => __("Single history statistic", "icg"),
	"base" => "history_vertical_icon",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'About icon id', 'icg' ),
			'param_name' => 'icon_id',
			'edit_field_class' => 'vc_col-xs-4',
		),
	    array(
	        "type" => "textarea_html",
	        "heading" => __("About text", "icg"),
	        "param_name" => "content",
	        'edit_field_class' => 'vc_col-xs-8',
	    ),  
	),
) );
// Team showcase
if(!function_exists('team_showcase')) {
	function team_showcase( $atts, $content =  null) {
		extract(shortcode_atts(array(
			'team_member_to_show' => '',

		), $atts));
		
        $output = ''; 
        
        $args = array(
	        'post_type' => 'team',
			'p' => $team_member_to_show,
        );
        
        $linked_in_link = '';
        $mail_link = '';
        
        if(get_field('linkedin_link', $team_member_to_show)){
	        $linked_in_link = '<a href="'.get_field('linkedin_link', $team_member_to_show).'" class="member-linked-in"><i class="fa fa-linkedin" aria-hidden="true"></i>
</a>';
        }
        
        if (get_field('mail_link', $team_member_to_show)) {
	        $mail_link = '<a href="mailto:'.get_field('mail_link', $team_member_to_show).'" class="member-mail"><i class="fa fa-envelope" aria-hidden="true"></i>
</a>';
        }
        $team_query = new WP_Query($args);
        if($team_query->have_posts()){
	        while ( $team_query->have_posts() ) {
				$team_query->the_post();
				$member_content = get_the_content();
				$member_content = str_replace("&nbsp;", "</br></br>", $member_content);
				
				$popup_position_html = '';
				
				$position = get_field('position', $team_member_to_show);
				$popup_position = get_field('popup_position', $team_member_to_show);
				
				if($popup_position){
					$popup_position_html = $popup_position;
				}
				else {
					$popup_position_html = $position;
				}
				
				$output .= '<button data-open="member'.$team_member_to_show.'" class="single-team-member-container">
								<div class="single-team-member">
									<div class="team-image-container">
										<img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" width="133px" height="133px" />
									</div>
									<div class="header-container">
										<h5 class="team-member-showcase-title">'.get_the_title().'</h5>
										<h6 class="team-member-position">'.$position.'</h6>
										<div class="team-member-socials">'.$linked_in_link.$mail_link.
										'</div>
										<div class="member-excerpt">'.get_the_excerpt().'</div>
									</div>
								</div>
							</button>
							<div class="full reveal member-popup" id="member'.$team_member_to_show.'" data-reveal>
							  <button class="close-modal" data-close aria-label="Close modal" ><img src="'.get_stylesheet_directory_uri() .'/src/assets/images/img/cross-button.png' .'" height="35px" width="35px" /></button>
							  <img src="'.get_the_post_thumbnail_url(get_the_ID(),'full').'" width="200px" height="200px" />
							  <h5 class="team-member-showcase-title">'.get_the_title().'</h5>
							  <h6 class="team-member-position">'.$popup_position_html.'</h6>
							  <div class="team-member-socials">'.$linked_in_link.$mail_link.'</div>
							  <div class="member-content">'.$member_content.'</div>
							</div>';
			}
        }
        wp_reset_query();
        wp_reset_postdata();
        return $output;
	}
	add_shortcode('team_showcase', 'team_showcase');		
}
$team_args = array(
	'posts_per_page'   => -1,
	'post_type'        => 'team',
	'post_status'      => 'publish',
);
$team_array = get_posts( $team_args );
$vc_team_array = array();
foreach ($team_array as $single_member) {
	$vc_team_array[$single_member->post_title] = $single_member->ID;
}

vc_map( array(
	"name" => __("Team showcase", "icg"),
	"base" => "team_showcase",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'dropdown',
			'heading' => __( 'Team member to show', 'icg' ),
			'param_name' => 'team_member_to_show',
			'edit_field_class' => 'vc_col-xs-12',
			'value' => $vc_team_array,
		),
	),
) );
// Offered service
if(!function_exists('offered_service')) {
	function offered_service( $atts, $content = null) {
		extract(shortcode_atts(array(
			'icon_id' => '',

		), $atts));
        $content = wpb_js_remove_wpautop($content, true);
        
        $output = '<div class="grid-x single-offered_service">
			  			<div class="cell small-12 icon-container">
			  				<span class="icon-icon-'.$icon_id.'"></span>
			  			</div>
			  			<div class="cell small-12 text-container">
			  				<p>'.$content.'</p>
			  			</div>
			  		</div>'; 
        
        return $output;
	}
	add_shortcode('offered_service', 'offered_service');		
}
vc_map( array(
	"name" => __("Offered service", "icg"),
	"base" => "offered_service",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'About icon id', 'icg' ),
			'param_name' => 'icon_id',
			'edit_field_class' => 'vc_col-xs-4',
		),
	    array(
	        "type" => "textarea_html",
	        "heading" => __("About text", "icg"),
	        "param_name" => "content",
	        'edit_field_class' => 'vc_col-xs-8',
	    ),  
	),
) );

// Single service slider
if(!function_exists('stages_slider')) {
	function stages_slider() {
        $slides = get_field('stages_slider');
        $nav_html = '';
        $slides_html = '';
        $i = 0;
        if ($slides){
	        $slides_count = count($slides);
	        $margin_right = (100/$slides_count)/1.5;
	        foreach($slides as $slide){
		        if($i == 0){
			        $first_class = ' activeTopNav';
		        }
		        else {
			        $first_class = '';
			    }
			    
			    if($i != $slides_count-1){
				    $margin_right_html = ' style="margin-right:'.$margin_right.'%" ';
			    }
			    else {
				    $margin_right_html = '';
			    }
		        $nav_html .= '<a class="slider-single-nav'.$first_class.'" href="#s'.$i.'"'.$margin_right_html.'>'.($i+1).'</a>';
		        $slides_html .= '<div class="single-slide" data-hash="s'.$i.'"><h5>'.$slide['slide_heading'].'</h5><div class="slide-content">'.$slide['slide_content'].'</div></div>';
		        $i++;
	        }
	        
        }
        $output = '<div class="stages-slider-container grid-x">
			  			<div class="slider-navigation cell small-12"><div class="inner-nav"><div class="grey-line"></div><div class="orange-line"></div>'.$nav_html.'</div></div>
			  			<button class="cell small-1 medium-1 slider-back-arrow"><i class="fa fa-chevron-left" aria-hidden="true"></i>
</button>
			  			<div class="owl-carousel cell small-10 small-offset-1 medium-offset-1 medium-8">'.$slides_html.'</div>
			  			<button class="cell small-1 medium-1 medium-offset-1 slider-forward-arrow"><i class="fa fa-chevron-right" aria-hidden="true"></i>
</div>
			  		</button>'; 
        
        return $output;
	}
	add_shortcode('stages_slider', 'stages_slider');		
}
vc_map( array(
	"name" => __("Stages Slider", "icg"),
	"base" => "stages_slider",
	"show_settings_on_create" => true,
	"category" => 'Icg',
) );

// Contacts map
if(!function_exists('contacts_map')) {
	function contacts_map() { 
        $current_post = get_the_ID();
		$markers_array = get_field('single-marker', $current_post);
		$custom_marker_image = get_field('marker_image', $current_post);
		$output = '<div class="markers-container" style="display:none"><span class="img-url">'.$custom_marker_image.'</span>';
		for($i = 0; $i < count($markers_array); $i++){
			$output .= '<div class="single-marker-info"><span class="lg">'.$markers_array[$i]['longtitude'].'</span>';
			$output .= '<span class="lt">'.$markers_array[$i]['latitude'].'</span>';
			$output .= '<span class="info">'.$markers_array[$i]['info_window_text'].'</span></div>';
		}
		$output .= '</div><div id="icg-map"></div>';
	   return $output;
	}
	add_shortcode('contacts_map', 'contacts_map');		
}
vc_map( array(
	"name" => __("Contacts map", "icg"),
	"base" => "contacts_map",
	"show_settings_on_create" => true,
	"category" => 'Icg',
) );

// Contacts map
if(!function_exists('contacts_location')) {
	function contacts_location( $atts, $content = null) { 
        extract(shortcode_atts(array(
			'location_title' => '',
			'address' => '',
			'phone' => '',
			'fax' => '',
			'phone_fax' => '',
			'mobile_phone' => '',
		), $atts));
        
        $phone_html = '';
        $fax_html = '';
        $phone_fax_html = '';
        $mobile_phone_html = '';
        
        if($phone) {
	        $phone_html = '<div class="contact-location-row" data-equalizer><span class="clr_heading" data-equalizer-watch>'.__( 't:', 'icg' ).'</span><span class="clr_content" data-equalizer-watch>'.$phone.'</span></div>';
        }
        if($fax) {
	        $fax_html = '<div class="contact-location-row" data-equalizer><span class="clr_heading" data-equalizer-watch>'.__( 'f:', 'icg' ).'</span><span class="clr_content" data-equalizer-watch>'.$fax.'</span></div>';
        }
        if($phone_fax) {
	        $phone_fax_html = '<div class="contact-location-row" data-equalizer><span class="clr_heading" data-equalizer-watch>'.__( 't/f:', 'icg' ).'</span><span class="clr_content" data-equalizer-watch>'.$phone_fax.'</span></div>';
        }
        if($mobile_phone) {
	        $mobile_phone_html = '<div class="contact-location-row" data-equalizer><span class="clr_heading" data-equalizer-watch>'.__( 'm:', 'icg' ).'</span><span class="clr_content" data-equalizer-watch>'.$mobile_phone.'</span></div>';
        }
        
        $output = '<div class="contact-location">
        			<div class="location-icon">
        				<img src="'.get_stylesheet_directory_uri() .'/src/assets/images/img/contacts-icon.png'.'" width="67px" height="67px"/>
        			</div>
        			<div class="location-content">
        				<h4>'.$location_title.'</h4>
        				<div class="contact-location-row" data-equalizer>
        					<span class="clr_heading" data-equalizer-watch>'.__( 'a:', 'icg' ).'</span>
        					<span class="clr_content" data-equalizer-watch>'.$address.'</span>
        				</div>'.$phone_html.$fax_html.$phone_fax_html.$mobile_phone_html.'</div>
        		   </div>';
	   return $output;
	}
	add_shortcode('contacts_location', 'contacts_location');		
}
vc_map( array(
	"name" => __("Contacts location", "icg"),
	"base" => "contacts_location",
	"show_settings_on_create" => true,
	"category" => 'Icg',
	"params" => array(
	    array(
			'type' => 'textfield',
			'heading' => __( 'Location title', 'icg' ),
			'param_name' => 'location_title',
		), 
		array(
			'type' => 'textfield',
			'heading' => __( 'Address', 'icg' ),
			'param_name' => 'address',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Phone', 'icg' ),
			'param_name' => 'phone',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Fax', 'icg' ),
			'param_name' => 'fax',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Phone/fax', 'icg' ),
			'param_name' => 'phone_fax',
		),
		array(
			'type' => 'textfield',
			'heading' => __( 'Mobile phone', 'icg' ),
			'param_name' => 'mobile_phone',
		),
	),
) );
// Program's procedures
if(!function_exists('program_procedures')) {
	function program_procedures() { 
        $current_post = get_the_ID();
		$ids = get_field('program_procedures', false, false);
		$output = '';
		$nonce = wp_create_nonce("single_program_ajax_nonce"); 
		
		if ($ids){			
			$get_posts_args = array(
				'post_type'      	=> 'procedure',
				'posts_per_page'	=> 6,
				'post__in'			=> $ids,
				'orderby'        	=> 'post__in',
			);
			
			$query = get_posts($get_posts_args);
	
			$terms = get_terms('procedure_types', array(
				'include' => array(34,35,36,37),
			));
			$terms_html = '';
			foreach($terms as $term) {
				$terms_html .= '<li><a href="#" class="single-procedure-filter" category-id="'.$term->term_id.'">'.$term->name.'</a></li>';
			}
			
			
			$output .= '<div class="query-vars" style="display: none" data-nonce="'.$nonce.'">'.implode(',', $ids).'</div><div class="program-procedures-filters">
							<ul>
								<li class="active-procedure-filter"><a href="#" class="single-procedure-filter" category-id="0">'. __( 'All', 'icg' ) .'</a></li>'.$terms_html.'</ul>
						</div><div class="procedures-showcase-container grid-x small-up-1 medium-up-3">';
		        foreach($query as $single_post){
					$output .= '<a href="'.get_the_permalink($single_post).'" class="cell">
									<div class="single-procedure-container">
										<div class="proc-image-container" style="background:url('.get_the_post_thumbnail_url($single_post->ID,'full').')">
											<div class="dates-container">
												<div class="start-date"><img src="'.get_stylesheet_directory_uri().'/src/assets/images/img/calendar-icon.png'.'" class="calendar-icon" width="16px" height="18px"/>'.get_field('start_date',$single_post->ID).'</div>
												<div class="end-date">'.get_field('end_date',$single_post->ID).'</div>
											</div>
										</div>
										<div class="header-container">
											<h5 class="procedure-showcase-title">'.$single_post->post_title.'</h5>
										</div>
									</div>
								</a>';
				}
	        
	        
	        wp_reset_query();
	        wp_reset_postdata();
	        
	        $output .= '</div>';	
		}
	   return $output;
	}
	add_shortcode('program_procedures', 'program_procedures');		
}
vc_map( array(
	"name" => __("Program's procedures", "icg"),
	"base" => "program_procedures",
	"show_settings_on_create" => true,
	"category" => 'Icg',
) );

// Successful projects
if(!function_exists('successful_projects')) {
	function successful_projects() { 
			$nonce = wp_create_nonce("projects_ajax_nonce"); 
			// find filters
			$program_filter_args = array(
				'post_type' => 'program',
				'posts_per_page' => -1,
			);
			
			$terms_html = '';
			$filters_query = new WP_Query( $program_filter_args );
			foreach($filters_query->posts as $single_filter){
				if($ids = get_field('program_projects', $single_filter->ID, false)){
					$terms_html .= '<option value='.$single_filter->ID.'>'.$single_filter->post_title.'</option>';
				}
			}
			$output = '<div class="projects-program-filters" data-nonce="'.$nonce.'" data-language="'.ICL_LANGUAGE_CODE.'">
							<select><option value="0" selected>'. __( 'Filter by program', 'icg' ) .'</option>'.$terms_html.'</select>
						</div><div class="projects-filter-showcase-container grid-x small-up-1 medium-up-3">';
		        
	        // Find projects
	        $projects_args = array(
				'post_type'      	=> 'project',
				'posts_per_page'	=> 6,
			);	
			$projects_query = new WP_Query($projects_args);
			$single_display_cat;
			foreach($projects_query->posts as $single_project) {
				$term_list_single = wp_get_post_terms($single_project->ID, 'project_types', array("fields" => "all"));
				foreach($term_list_single as $single_term){
					if($single_term->term_id != 33 && $single_term->term_id != 5){
						$single_display_cat = $single_term;
						break;
					}
				}
				$output .= '<a href="'.get_the_permalink($single_project).'" class="cell">
									<div class="single-project-container">
										<div class="project-image-container" style="background:url('.get_the_post_thumbnail_url($single_project->ID,'full').')">
										<div class="category-container">'.
											$single_display_cat->name
										.'</div>
											
										</div>
										<div class="header-container">
											<h5 class="project-showcase-title">'.$single_project->post_title.'</h5>
										</div>
									</div>
								</a>';
			}
	        	        
	        if($projects_query->post_count >= 6) {
		        $output .= '<div class="load-more-button-container white-icg-button">
										<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-color-grey" href="#" title="">'.__( 'Show more', 'icg' ).'</a>
									</div>';
	        }
	        	
			$output .= '</div>';
							
			wp_reset_query();
	        wp_reset_postdata();
		
	   return $output;
	}
	add_shortcode('successful_projects', 'successful_projects');		
}
vc_map( array(
	"name" => __("Successful projects", "icg"),
	"base" => "successful_projects",
	"show_settings_on_create" => true,
	"category" => 'Icg',
) );
// Contacts map
if(!function_exists('projects_map')) {
	function projects_map() { 
		$terms = get_terms( array(
		    'taxonomy' => 'city',
		    'hide_empty' => true,
		) );
		$output = '<div id="projects-map"></div>';
		
		$map_projects_markers_array_html = '<div class="markers-image" style="display:none">'.get_stylesheet_directory_uri() .'/src/assets/images/img/icg-map-pin.png</div><div class="map-projects-markers" style="display:none">';
		
		$accordeon_html = '<div class="vc_tta-container projects-map-accordeon" data-vc-action="collapseAll">
								<div class="vc_general vc_tta vc_tta-accordion vc_tta-color-white vc_tta-style-classic vc_tta-shape-rounded vc_tta-o-shape-group vc_tta-controls-align-left vc_tta-o-no-fill vc_tta-o-all-clickable">
									<div class="vc_tta-panels-container">
										<div class="vc_tta-panels">';
		foreach($terms as $single_term){
			$lt = get_term_meta( $single_term->term_id, 'latitude', true );
			$lg = get_term_meta( $single_term->term_id, 'longtitude', true );
			if($lt && $lg) {	
				$args = array(
				'post_type' => 'map_project',
				'posts_per_page' => -1,
				'tax_query' => array(
				    array(
				    'taxonomy' => 'city',
				    'field' => 'id',
				    'terms' => $single_term->term_id
				     )
				  )
				);
				$map_posts = get_posts( $args );

				$map_projects_markers_array_html .= '<div class="single-project-marker">
														<span class="lat">'.$lt.'</span>
														<span class="lg">'.$lg.'</span>
														<span class="count"><h5>'.__( 'Municipality', 'icg' ).' '.$single_term->name.'</h5><span class="info">'.$single_term->count.' '.__( 'Completed projects', 'icg' ).'</span><div class="white-icg-button"><a href="#m'.$single_term->term_id.'">'.__( 'View all projects', 'icg' ).'</a></div></span>
													</div>';
				$accordeon_html .='<div class="vc_tta-panel" id="m'.$single_term->term_id.'" data-vc-content=".vc_tta-panel-body">
													<div class="vc_tta-panel-heading">
														<h4 class="vc_tta-panel-title vc_tta-controls-icon-position-left">
															<a href="#m'.$single_term->term_id.'" data-vc-accordion="" data-vc-container=".vc_tta-container">
																<span class="vc_tta-title-text">'.$single_term->name.'</span>
																<i class="vc_tta-controls-icon vc_tta-controls-icon-chevron"></i>
															</a>
														</h4>
													</div>
													<div class="vc_tta-panel-body">
														<div class="top-row">
															<div class="beneficient">'.__( 'Beneficient', 'icg' ).'</div>
															<div class="minicipality">'.__( 'Municipality', 'icg' ).'</div>
															<div class="proj_title">'.__( 'Project title', 'icg' ).'</div>
															<div class="proj_value">'.__( 'Project value', 'icg' ).'</div>
															<div class="bfp_value">'.__( 'BFP Value', 'icg' ).'</div>
														</div>';
														
				foreach($map_posts as $single_map_post){
					$accordeon_html .= '<div class="project-row">
											<div class="beneficient"><span class="mobile-title">'.__( 'Beneficient', 'icg' ).'</span>'.get_field('beneficient', $single_map_post->ID).'</div>
											<div class="minicipality"><span class="mobile-title">'.__( 'Municipality', 'icg' ).'</span>'.$single_term->name.'</div>
											<div class="proj_title"><span class="mobile-title">'.__( 'Project title', 'icg' ).'</span>'.$single_map_post->post_title.'</div>
											<div class="proj_value"><span class="mobile-title">'.__( 'Project value', 'icg' ).'</span>'.get_field('map_project_value', $single_map_post->ID).'</div>
											<div class="bfp_value"><span class="mobile-title">'.__( 'BFP Value', 'icg' ).'</span>'.get_field('map_project_bfp_value', $single_map_post->ID).'</div>
										</div>';
				}
				$accordeon_html.= '</div>
			</div>';
			}
		}
		$map_projects_markers_array_html .= '</div>';
		$accordeon_html .= '	</div></div></div></div>';
		
		$output .= $map_projects_markers_array_html;
		$output .= $accordeon_html;
	   return $output;
	}
	add_shortcode('projects_map', 'projects_map');		
}
vc_map( array(
	"name" => __("Projects map", "icg"),
	"base" => "projects_map",
	"show_settings_on_create" => false,
	"category" => 'Icg',
) );
?>