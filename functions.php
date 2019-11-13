<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once( 'library/cleanup.php' );

/** Required for Foundation to work properly */
require_once( 'library/foundation.php' );

/** Format comments */
require_once( 'library/class-foundationpress-comments.php' );

/** Register all navigation menus */
require_once( 'library/navigation.php' );

/** Add menu walkers for top-bar and off-canvas */
require_once( 'library/class-foundationpress-top-bar-walker.php' );
require_once( 'library/class-foundationpress-mobile-walker.php' );

/** Create widget areas in sidebar and footer */
require_once( 'library/widget-areas.php' );

/** Return entry meta information for posts */
require_once( 'library/entry-meta.php' );

/** Enqueue scripts */
require_once( 'library/enqueue-scripts.php' );

/** Add theme support */
require_once( 'library/theme-support.php' );

/** Add Nav Options to Customer */
require_once( 'library/custom-nav.php' );

/** Change WP's sticky post class */
require_once( 'library/sticky-posts.php' );

/** Configure responsive image sizes */
require_once( 'library/responsive-images.php' );

/** Custom post types **/
require_once( 'library/post-types.php' );

/** Custom taxonomies **/
require_once( 'library/taxonomies.php' );

/** Visual Composer elements **/
require_once( 'library/vc-elements.php' );

/** Options and filters **/
require_once( 'library/theme-options.php' );

/** Blog ajax **/
require_once( 'library/blog-ajax.php' );

/** Programs ajax **/
require_once( 'library/programs-ajax.php' );

/** Single program ajax **/
require_once( 'library/single-program-ajax.php' );

/** Projects filter ajax **/
require_once( 'library/projects-ajax.php' );

/** Projects load more ajax **/
require_once( 'library/projects-loadmore-ajax.php' );

/** Procedures filter ajax **/
require_once( 'library/procedures-ajax.php' );

/** WPML Language switcher **/
require_once( 'library/wpml-lang-switcher.php' );

/** Taxonomies meta **/
require_once( 'library/tax-meta.php' );

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );
