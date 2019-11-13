<?php 
	
// Gravity forms hide labels
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


// Advaned custom fields theme options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'ICG Theme Settings',
		'menu_title'	=> 'ICG Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// Custom contact us confirmataion
add_filter( 'gform_confirmation', 'icg_custom_confirmation', 10, 4 );
function icg_custom_confirmation( $confirmation, $form, $entry, $ajax ) {
	if($form["id"] == 1){
		add_filter( 'wp_footer', 'icg_overlay_subscribe_form');	
	}
	else if($form["id"] == 2){
		add_filter( 'wp_footer', 'icg_overlay_contact_form');	
	}	
	return $confirmation;
}
function icg_overlay_contact_form() {
	echo '<div id="contact-overlay">
			<img src="'.get_template_directory_uri().'/src/assets/images/img/contact-confirmation-icon.png" width="126px" height="126px"/>
			<div class="confirmation-title">'.__( 'You successfully sent your inquiry', 'icg' ).'</div>
				<a class="contact-confirmation-button" href="'.get_home_url().'">'.__( 'To the site', 'icg' ) .'</a>
		</div>';
}
function icg_overlay_subscribe_form() {
	echo '<div id="contact-overlay">
			<img src="'.get_template_directory_uri().'/src/assets/images/img/contact-confirmation-icon.png" width="126px" height="126px"/>
			<div class="confirmation-title">'.__( 'You successfully subscribed for our newsletter', 'icg' ).'</div>
				<a class="contact-confirmation-button" href="'.get_home_url().'">'.__( 'To the site', 'icg' ) .'</a>
		</div>';
}
?>