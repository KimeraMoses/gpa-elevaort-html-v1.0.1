<?php
/**
 * Widget area and his markup for this theme.
 *
 * @package    WordPress
 * @subpackage Gppaelevator
 * @version    2020
 */

if ( ! function_exists( 'gpa_elevator_widgets_init' ) ) {

	add_action( 'widgets_init', 'gpa_elevator_widgets_init' );
	/**
	 * Register widgetized areas
	 *
	 * @return  void
	 */
	function gpa_elevator_widgets_init() {

		// Area 1
		register_sidebar(
			array(
				'name'          => esc_html__( 'Primary Widget Area', 'gpa_elevator' ),
				'id'            => 'primary-widget-area',
				'description'   => esc_html__(
					'The primary widget area is visible on all pages and posts.', 'gpa_elevator'
				),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
		);

		// Area 2
		register_sidebar(
			array(
				'name'          => esc_html__( 'Secondary Widget Area', 'gpa_elevator' ),
				'id'            => 'secondary-widget-area',
				'description'   => esc_html__(
					'The secondary widget area down below Primary Widget Area only on pages and posts.', 'gpa_elevator'
				),
				'before_widget' => '<aside id="%1$s" class="widget %2$s">',
				'after_widget'  => '</aside>',
				'before_title'  => '<h1 class="widget-title">',
				'after_title'   => '</h1>',
			)
		);
	} // end theme_widgets_init

} // end if func exists