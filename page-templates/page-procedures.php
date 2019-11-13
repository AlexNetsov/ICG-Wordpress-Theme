<?php
/**
Template Name: Procedures
*/

get_header(); 
global $wp_query;
$nonce = wp_create_nonce("procedures_ajax_nonce"); 
?>

<div class="main-wrap full-width" role="main">
	<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
		<?php 
			$procedure_query = array(
	        'post_type' => 'procedure',
			'tax_query' => array(
				array(
					'taxonomy' => 'procedure_types',
					'field'    => 'name',
					'terms'    => 'Procedures featured',
				),
			),
			'posts_per_page' => 1,
        );
        $procedure_query = new WP_Query($procedure_query);
        if($procedure_query->have_posts()){
	    ?>
	    <div class="featured-procedure-container grid-x">
	    <?php
	        while ( $procedure_query->have_posts() ) {
				$procedure_query->the_post();
				?>
				<div class="procedure-image cell small-12 medium-6" style="background: url(<?php the_post_thumbnail_url( 'full' )?>) no-repeat center">
				<div class="dates-container">
					<div class="deadline"><?php _e( 'Deadline', 'icg' ); ?></div>
					<div class="start-date"><img src="<?php echo get_stylesheet_directory_uri().'/src/assets/images/img/calendar-icon.png'; ?>" class="calendar-icon" width="16px" height="18px"/><?php echo get_field('start_date'); ?></div>
					<div class="end-date"><?php echo get_field('end_date'); ?></div>
				</div>
				</div>
				<div class="procedure-content cell small-12 medium-6">
					<h3><?php the_title(); ?></h3>
					<div class="excerpt"><?php the_excerpt(); ?></div>
					<a class="read-more-button" href="<?php the_permalink(); ?>"><?php _e( "Read more", 'icg' )?></a>
				</div>
				<?php
			}
			?>
		</div>
		<?php
        }
		?>
	<?php
	// Active/inactive filter
	$terms = get_terms('procedure_types', array(
		'include' => array(34,35,36,37),
	));
	$terms_html = '';
	foreach($terms as $term) {
		$terms_html .= '<li><a href="#" class="single-procedure-filter" category-id="'.$term->term_id.'">'.$term->name.'</a></li>';
	}
	
	// Dropdown filters
	$program_filter_args = array(
		'post_type' => 'program',
		'posts_per_page' => -1,
	);
	
	$dropdown_terms_html = '';
	$filters_query = new WP_Query( $program_filter_args );
	foreach($filters_query->posts as $single_filter){
		if($ids = get_field('program_procedures', $single_filter->ID, false)){
			$dropdown_terms_html .= '<option value='.$single_filter->ID.'>'.$single_filter->post_title.'</option>';
		}
	}

	?>
	<div class="query-vars" style="display: none" data-nonce="<?php echo $nonce ?>" data-language="<?php echo ICL_LANGUAGE_CODE ?>"></div>
	<div class="procedures-filters">
		<ul>
			<li class="active-procedure-filter"><a href="#" class="single-procedure-filter" category-id="0"><?php _e( 'All', 'icg' ) ?></a></li><?php echo $terms_html; ?>
		</ul>
		<div class="procedures-filters-dropdown">
			<select><option value="0" selected><?php _e( 'Filter by program', 'icg' ) ?></option><?php echo $dropdown_terms_html ?></select>
		</div>
	</div>
	<div class="procedure-showcase-container grid-x small-up-1 medium-up-3">
	<?php do_action( 'foundationpress_before_content' ); ?>
	
	<?php 
			$programs_args = array(
	        'post_type' => 'procedure',
			'posts_per_page' => 6,
        );
        $programs_query = new WP_Query($programs_args);
        if($programs_query->have_posts()){
	        while ( $programs_query->have_posts() ) {
				$programs_query->the_post();
				?>
				<a href="<?php the_permalink() ?>" class="cell">
					<div class="single-procedure-container">
						<div class="procedure-image-container" style="background:url(<?php the_post_thumbnail_url('archieve-thumb')?>)">
						</div>
						<div class="header-container">
							<h5 class="procedure-showcase-title"><?php the_title(); ?></h5>
						</div>
					</div>
				</a>
				<?php
			}
        }
		?>
	
	<?php do_action( 'foundationpress_after_content' ); ?>
	</div>
	<div class="query-vars" style="display: none" data-nonce="<?php echo $nonce?>"><?php echo json_encode($programs_query->query_vars); ?></div>
	<div class="current-language-holder" style="display: none"><?php echo ICL_LANGUAGE_CODE;?></div>
	<?php if($programs_query->post_count >= 6 ) {?>
		<div class="load-more-button-container white-icg-button">
			<a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-classic vc_btn3-color-grey" href="#" title=""><?php _e( 'Покажи още', 'icg' )?></a>
		</div>
	<?php } ?>
</div>

<?php get_footer();
