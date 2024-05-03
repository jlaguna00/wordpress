<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage cleaning-equipment
 * @since cleaning-equipment 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since cleaning-equipment 1.0
	 *
	 * @return void
	 */
	function cleaning_equipment_register_block_styles() {
		
		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'cleaning-equipment-border',
				'label' => esc_html__( 'Borders', 'cleaning-equipment' ),
			)
		);

		
	}
	add_action( 'init', 'cleaning_equipment_register_block_styles' );
}