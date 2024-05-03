<?php
/**
 * Patterns Handler.
 *
 * @since cleaning-equipment 1.0
 */

namespace cleaning_equipment;

use WP_Block_Pattern_Categories_Registry;

/**
 * Class Block_Patterns
 *
 * @package cleaning-equipment
 */
class Block_Patterns {

	/**
	 * Patterns categories.
	 *
	 * @var array
	 */
	private $categories = array();
	/**
	 * The patterns array.
	 *
	 * These use the file names without termination inside the `inc/patterns` directory.
	 *
	 * @var array
	 */
	private $patterns = array();

	/**
	 * Block_Patterns constructor.
	 */
	public function __construct() {
		$this->setup_properties();

		add_action( 'init', array( $this, 'run' ) );
	}

	/**
	 * Run the class functionality.
	 *
	 * @return void
	 */
	public function run() {
		$this->register_categories();
		$this->register_patterns();
	}

	/**
	 * Setup class properties.
	 *
	 * @return void
	 */
	private function setup_properties() {

		$categories = array(
			'cleaning-equipment' => array( 'label' => __( 'Cleaning Equipment Patterns', 'cleaning-equipment' ) ),
		);

		$patterns = array(
			'banner',
			'post-category-section',
			'primary-sidebar',
			'404-page',
			'search-header',
			'search',
			'footer-default'
		);

		$this->categories = apply_filters( 'cleaning_equipment_block_patterns_categories', $categories );
		$this->patterns   = apply_filters( 'cleaning_equipment_block_patterns', $patterns );
	}

	/**
	 * Register block patterns categories.
	 *
	 * @return void
	 */

	private function register_categories() {

		foreach ( $this->categories as $slug => $args ) {
			if ( WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $slug ) ) {
				continue;
			}

			register_block_pattern_category( $slug, $args );
		}

	}

	/**
	 * Register Patterns.
	 *
	 * @return void
	 */

	private function register_patterns() {

		foreach ( $this->patterns as $pattern ) {

			$file = get_theme_file_path( '/patterns/' . $pattern . '.php' );

			if ( ! is_file( $file ) ) {

				continue;

			}

			register_block_pattern( 'cleaning-equipment/' . $pattern, require $file );
		}
	}
}

new Block_Patterns();