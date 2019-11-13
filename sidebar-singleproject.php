<?php
/**
 * The single post sidebar
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar cell small-12 medium-4">
	<div class="more-posts-container">
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
</aside>
