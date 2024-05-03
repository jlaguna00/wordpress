<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage cleaning-equipment
 * @since cleaning-equipment 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cleaning_equipment_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Cleaning_Equipment_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Cleaning Equipment Pro', 'cleaning-equipment' ),
		'button_text'      => __( 'Upgrade Pro', 'cleaning-equipment' ),
		'url'              => 'https://www.wpradiant.net/products/equipments-wordpress-theme/',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'cleaning_equipment_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function cleaning_equipment_custom_control_scripts() {
	wp_enqueue_script( 'cleaning-equipment-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
}
add_action( 'customize_controls_enqueue_scripts', 'cleaning_equipment_custom_control_scripts' );