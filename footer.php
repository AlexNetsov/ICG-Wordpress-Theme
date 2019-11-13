<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>
		<div class="footer-container" data-sticky-footer>
			<?php 
				if(is_front_page()) {
			?>
				<div class="grid-x subscribe-footer-container">
					<div class="cell small-12 medium-10 medium-offset-1">
						<div class="grid-x">
							<div class="cell small-12 medium-4 subscribe-form-title">
								<?php _e( 'Абонирайте се за нашия бюлетин', 'icg' ); ?>
							</div>
							<div class="cell small-12 medium-8 subscribe-form-cell">
								<?php echo do_shortcode( '[gravityform id="1" title="false" description="false" ajax="false"]'); ?>
							</div>
						</div>
					</div>
				</div>				
					
			<?php
				}
			?>
			<footer class="footer grid-x">
				<div class="cell small-4 medium-2"><img src="<?php echo get_stylesheet_directory_uri() .'/src/assets/images/img/icg-logo-white.png' ?>" width="149px" height="57px" /></div>
				<div class="cell small-6 medium-2 medium-offset-1">
					<?php
					wp_nav_menu( array(
					    'menu' => 'footer-menu'
					) );
					?>
				</div>
				<div class="cell small-6">
					<div class="grid-x">
						<div class="cell small-12 medium-4 footer-location-container">
							<h4><?php the_field('footer_location_1_title', 'option'); ?></h4>
							<div class="footer-location-address" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'а:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_1_address', 'option'); ?></span>
							</div>
							<div class="footer-location-phone" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'т:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_1_phone', 'option'); ?></span>
							</div>
							<div class="footer-location-fax" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'ф:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_1_fax', 'option'); ?></span>
							</div>
						</div>
						<div class="cell small-12 medium-4 footer-location-container">
							<h4><?php the_field('footer_location_2_title', 'option'); ?></h4>
							<div class="footer-location-address" data-equalizer>
								<span data-equalizer-watch><span class="footer-before" data-equalizer-watch><?php _e( 'а:', 'icg' )?></span>
								<?php the_field('footer_location_2_address', 'option'); ?>
							</div>
							<div class="footer-location-phone" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'т:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_2_phone', 'option'); ?></span>
							</div>
							<div class="footer-location-fax" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'ф:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_2_fax', 'option'); ?></span>
							</div>
						</div>
						<div class="cell small-12 medium-4 footer-location-container">
							<h4><?php the_field('footer_location_3_title', 'option'); ?></h4>
							<div class="footer-location-address" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'а:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_3_address', 'option'); ?></span>
							</div>
							<div class="footer-location-phone" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'т:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_3_phone', 'option'); ?></span>
							</div>
							<div class="footer-location-fax" data-equalizer>
								<span class="footer-before" data-equalizer-watch><?php _e( 'ф:', 'icg' )?></span>
								<span data-equalizer-watch><?php the_field('footer_location_3_fax', 'option'); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="cell small-1 footer-socials">
					<?php 
						if(get_field('footer_facebook_link', 'option')){
							?>
							<a href="<?php the_field('footer_facebook_link', 'option'); ?>" class="fa fa-facebook" aria-hidden="true"></a>
							<?php		
						}
					?>
					<?php 
						if(get_field('footer_twitter_link', 'option')){
							?>
							<a href="<?php the_field('footer_twitter_link', 'option'); ?>" class="fa fa-twitter" aria-hidden="true"></a>
							<?php		
						}
					?>
					<?php 
						if(get_field('footer_linkedin_link', 'option')){
							?>
							<a href="<?php the_field('footer_linkedin_link', 'option'); ?>" class="fa fa-linkedin" aria-hidden="true"></a>
							<?php		
						}
					?>
				</div>
				<div class="footer-gradient"></div>
				<div class="cell small-12 medium-4 medium-offset-3 footer-credits">
					<span>	
						<a href="http://prodesign.bg/"><?php _e( 'Рекламна агенция: ', 'icg' );?><?php _e( 'ProDesign.bg', 'icg' ); ?></a>
					</span>
					<span>
						<?php _e( 'All rights reserved &#169; 2017', 'icg' );?>
					</span>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
<?php 
	if(is_page_template('page-templates/page-contacts.php')){
?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACAgZTa1XKMkfhPA1kUjhXMtHlD1_cgC8&callback=initMap"></script>
<script>

var lt;
var lg;
var text_array = [];
var uluru = {};
var gmarkers1 = [];
//create empty LatLngBounds object
//var custom_marker_image = $('.markers-container .img-url').html(); 
var map_array = [];
var i = 0;

$('.markers-container .single-marker-info').each(function(){
	map_array.push({
		lat: +$(this).find('.lt').html(),
		lng: +$(this).find('.lg').html(),
		text: '<div class="mf-marker">'+ $(this).find('.info').html() + '</div>',
	});
});
var map;
var bounds;
function initMap() {
	var custom_marker_image = $('.markers-container .img-url').html(); 
	bounds = new google.maps.LatLngBounds();
	var center = new google.maps.LatLng(42.138190, 24.747140);
	var mapOptions = {
		zoom: 15,
		mapTypeControl: false,
		draggable: true,
		scaleControl: true,
		scrollwheel: true,
		navigationControl: false,
		streetViewControl: false,
		disableDefaultUI: true,
		center: center,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		styles : [
		    {
		        "featureType": "all",
		        "elementType": "labels.text.fill",
		        "stylers": [
		            {
		                "saturation": 36
		            },
		            {
		                "color": "#333333"
		            },
		            {
		                "lightness": 40
		            }
		        ]
		    },
		    {
		        "featureType": "all",
		        "elementType": "labels.text.stroke",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 16
		            }
		        ]
		    },
		    {
		        "featureType": "all",
		        "elementType": "labels.icon",
		        "stylers": [
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative",
		        "elementType": "geometry.fill",
		        "stylers": [
		            {
		                "color": "#fefefe"
		            },
		            {
		                "lightness": 20
		            }
		        ]
		    },
		    {
		        "featureType": "administrative",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "color": "#fefefe"
		            },
		            {
		                "lightness": 17
		            },
		            {
		                "weight": 1.2
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.country",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "color": "#515151"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.province",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "color": "#f2af8d"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.locality",
		        "elementType": "labels.text",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "color": "#f80404"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.locality",
		        "elementType": "labels.text.fill",
		        "stylers": [
		            {
		                "color": "#515151"
		            },
		            {
		                "visibility": "on"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.locality",
		        "elementType": "labels.text.stroke",
		        "stylers": [
		            {
		                "color": "#515151"
		            },
		            {
		                "visibility": "off"
		            }
		        ]
		    },
		    {
		        "featureType": "administrative.locality",
		        "elementType": "labels.icon",
		        "stylers": [
		            {
		                "visibility": "on"
		            },
		            {
		                "color": "#f5f5f5"
		            }
		        ]
		    },
		    {
		        "featureType": "landscape",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#f5f5f5"
		            },
		            {
		                "lightness": 20
		            }
		        ]
		    },
		    {
		        "featureType": "poi",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#f5f5f5"
		            },
		            {
		                "lightness": 21
		            }
		        ]
		    },
		    {
		        "featureType": "poi.park",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#dedede"
		            },
		            {
		                "lightness": 21
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "geometry.fill",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 17
		            }
		        ]
		    },
		    {
		        "featureType": "road.highway",
		        "elementType": "geometry.stroke",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 29
		            },
		            {
		                "weight": 0.2
		            }
		        ]
		    },
		    {
		        "featureType": "road.arterial",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 18
		            }
		        ]
		    },
		    {
		        "featureType": "road.local",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#ffffff"
		            },
		            {
		                "lightness": 16
		            }
		        ]
		    },
		    {
		        "featureType": "transit",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#f2f2f2"
		            },
		            {
		                "lightness": 19
		            }
		        ]
		    },
		    {
		        "featureType": "water",
		        "elementType": "geometry",
		        "stylers": [
		            {
		                "color": "#e9e9e9"
		            },
		            {
		                "lightness": 17
		            }
		        ]
		    }
		]
	};
	map = new google.maps.Map(document.getElementById('icg-map'), mapOptions);
    


	for (i = 0; i < map_array.length; i++) {
	    var pos = new google.maps.LatLng(map_array[i]['lat'], map_array[i]['lng']);
	    var content = map_array[i]['text'];
	
	    var marker1 = new google.maps.Marker({
	        position: pos,
	        map: map,
	        icon: custom_marker_image,
	    });
	    
	    bounds.extend(marker1.position);
	    gmarkers1.push(marker1);
		var infowindow = new google.maps.InfoWindow({
    		content: ''
		});

	    google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
	        return function () {
	            infowindow.setContent(content);
	            infowindow.open(map, marker1);
	        }
	    })(marker1, content));
	    google.maps.event.addListener(map, 'click', (function(marker1, i) {
		    return function() {
		      infowindow.close(marker1);
		    }
		  })(marker1, i));
    }
    map.fitBounds(bounds);

}

</script>
<?php
	}
?>
<?php 
	if(is_page_template('page-templates/page-about-us-subpages.php')){
?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACAgZTa1XKMkfhPA1kUjhXMtHlD1_cgC8&callback=initProjectsMap"></script>
<script>
	if($('#projects-map').length > 0){
		var lt;
		var lg;
		var text_array = [];
		var uluru = {};
		var gmarkers1 = [];
		//create empty LatLngBounds object
		//var custom_marker_image = $('.markers-container .img-url').html(); 
		var map_array = [];
		var i = 0;
		
		$('.map-projects-markers .single-project-marker').each(function(){
			map_array.push({
				lat: +$(this).find('.lat').html(),
				lng: +$(this).find('.lg').html(),
				text: '<div class="mf-marker">'+ $(this).find('.count').html() + '</div>',
			});
		});
		var map;
		var bounds;
		function initProjectsMap() {
			var custom_marker_image = $('.markers-image').html(); 
			bounds = new google.maps.LatLngBounds();
			var center = new google.maps.LatLng(42.138190, 24.747140);
			var mapOptions = {
				zoom: 15,
				mapTypeControl: false,
				draggable: true,
				scaleControl: true,
				scrollwheel: true,
				navigationControl: false,
				streetViewControl: false,
				disableDefaultUI: true,
				center: center,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				styles : [
				    {
				        "featureType": "all",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "saturation": 36
				            },
				            {
				                "color": "#333333"
				            },
				            {
				                "lightness": 40
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "all",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "administrative",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#fefefe"
				            },
				            {
				                "lightness": 17
				            },
				            {
				                "weight": 1.2
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.country",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#515151"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.province",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#f2af8d"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.locality",
				        "elementType": "labels.text",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#f80404"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.locality",
				        "elementType": "labels.text.fill",
				        "stylers": [
				            {
				                "color": "#515151"
				            },
				            {
				                "visibility": "on"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.locality",
				        "elementType": "labels.text.stroke",
				        "stylers": [
				            {
				                "color": "#515151"
				            },
				            {
				                "visibility": "off"
				            }
				        ]
				    },
				    {
				        "featureType": "administrative.locality",
				        "elementType": "labels.icon",
				        "stylers": [
				            {
				                "visibility": "on"
				            },
				            {
				                "color": "#f5f5f5"
				            }
				        ]
				    },
				    {
				        "featureType": "landscape",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 20
				            }
				        ]
				    },
				    {
				        "featureType": "poi",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f5f5f5"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "featureType": "poi.park",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#dedede"
				            },
				            {
				                "lightness": 21
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.fill",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    },
				    {
				        "featureType": "road.highway",
				        "elementType": "geometry.stroke",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 29
				            },
				            {
				                "weight": 0.2
				            }
				        ]
				    },
				    {
				        "featureType": "road.arterial",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 18
				            }
				        ]
				    },
				    {
				        "featureType": "road.local",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#ffffff"
				            },
				            {
				                "lightness": 16
				            }
				        ]
				    },
				    {
				        "featureType": "transit",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#f2f2f2"
				            },
				            {
				                "lightness": 19
				            }
				        ]
				    },
				    {
				        "featureType": "water",
				        "elementType": "geometry",
				        "stylers": [
				            {
				                "color": "#e9e9e9"
				            },
				            {
				                "lightness": 17
				            }
				        ]
				    }
				]
			};
			map = new google.maps.Map(document.getElementById('projects-map'), mapOptions);
		    
		
		
			for (i = 0; i < map_array.length; i++) {
			    var pos = new google.maps.LatLng(map_array[i]['lat'], map_array[i]['lng']);
			    var content = map_array[i]['text'];
			
			    var marker1 = new google.maps.Marker({
			        position: pos,
			        map: map,
			        icon: custom_marker_image,
			    });
			    
			    bounds.extend(marker1.position);
			    gmarkers1.push(marker1);
				var infowindow = new google.maps.InfoWindow({
		    		content: ''
				});
		
			    google.maps.event.addListener(marker1, 'click', (function (marker1, content) {
			        return function () {
			            infowindow.setContent(content);
			            infowindow.open(map, marker1);
			        }
			    })(marker1, content));
			    google.maps.event.addListener(map, 'click', (function(marker1, i) {
				    return function() {
				      infowindow.close(marker1);
				    }
				  })(marker1, i));
		    }
		    map.fitBounds(bounds);
		
		}	
	}
</script>
<?php
	}
?>
<script src="https://use.fontawesome.com/9745de407b.js" async></script>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/owl-carousel/owl.carousel.min.css' ?>" async>
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_template_directory_uri() . '/owl-carousel/owl.theme.default.min.css' ?>" async>
</body>
</html>
