<?php
/**
 * Admin functions.
 *
 * @package Cleaning Equipment
 */

define('CLEANING_EQUIPMENT_SUPPORT',__('https://wordpress.org/support/theme/cleaning-equipment/','cleaning-equipment'));
define('CLEANING_EQUIPMENT_REVIEW',__('https://wordpress.org/support/theme/cleaning-equipment/reviews/#new-post','cleaning-equipment'));
define('CLEANING_EQUIPMENT_BUY_NOW',__('https://www.wpradiant.net/products/equipments-wordpress-theme/','cleaning-equipment'));
define('CLEANING_EQUIPMENT_LIVE_DEMO',__('https://preview.wpradiant.net/cleaning-equipment/','cleaning-equipment'));
define('CLEANING_EQUIPMENT_PRO_DOC',__('https://preview.wpradiant.net/tutorial/cleaning-equipment-pro/','cleaning-equipment'));

/**
 * Register admin page.
 *
 * @since 1.0.0
 */

function cleaning_equipment_admin_menu_page() {

	$theme = wp_get_theme( get_template() );

	add_theme_page(
		$theme->display( 'Name' ),
		$theme->display( 'Name' ),
		'manage_options',
		'cleaning-equipment',
		'cleaning_equipment_do_admin_page'
	);

}
add_action( 'admin_menu', 'cleaning_equipment_admin_menu_page' );

function cleaning_equipment_admin_theme_style() {
	wp_enqueue_style('cleaning-equipment-custom-admin-style', esc_url(get_template_directory_uri()) . '/get-started/getstart.css');
    wp_enqueue_script( 'admin-notice-script', get_template_directory_uri() . '/get-started/js/admin-notice-script.js', array( 'jquery' ) );
	wp_localize_script('admin-notice-script', 'example_ajax_obj', array('ajaxurl' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'cleaning_equipment_admin_theme_style');

/**
 * Render admin page.
 *
 * @since 1.0.0
 */
function cleaning_equipment_do_admin_page() {

	$theme = wp_get_theme( get_template() );
	?>
	<div class="cleaning-equipment-appearence wrap about-wrap">
		<div class="head-btn">
			<div><h1><?php echo $theme->display( 'Name' ); ?></h1></div>
			<div class="demo-btn">
				<span>
					<a class="button button-pro" href="<?php echo esc_url( CLEANING_EQUIPMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Buy Now', 'cleaning-equipment' ); ?></a>
				</span>
				<span>
					<a class="button button-demo" href="<?php echo esc_url( CLEANING_EQUIPMENT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Live Preview', 'cleaning-equipment' ); ?></a>
				</span>
				<span>
					<a class="button button-doc" href="<?php echo esc_url( CLEANING_EQUIPMENT_PRO_DOC ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'cleaning-equipment' ); ?></a>
				</span>
			</div>
		</div>
		
		<div class="two-col">

			<div class="about-text">
				<?php
					$description_raw = $theme->display( 'Description' );
					$main_description = explode( 'Official', $description_raw );
					?>
				<?php echo wp_kses_post( $main_description[0] ); ?>
			</div><!-- .col -->

			<div class="about-img">
				<a href="<?php echo esc_url( $theme->display( 'ThemeURI' ) ); ?>" target="_blank"><img src="<?php echo trailingslashit( get_template_directory_uri() ); ?>screenshot.png" alt="<?php echo esc_attr( $theme->display( 'Name' ) ); ?>" /></a>
			</div><!-- .col -->

		</div><!-- .two-col -->
		<div class="four-col">

			<div class="col">

				<h3><i class="dashicons dashicons-cart"></i><?php esc_html_e( 'Upgrade to Pro', 'cleaning-equipment' ); ?></h3>

				<p>
					<?php esc_html_e( 'To gain access to extra theme options and more interesting features, upgrade to pro version.', 'cleaning-equipment' ); ?>
				</p>

				<p>
					<a class="button green button-primary" href="<?php echo esc_url( CLEANING_EQUIPMENT_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Upgrade to Pro', 'cleaning-equipment' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-admin-customizer"></i><?php esc_html_e( 'Full Site Editing', 'cleaning-equipment' ); ?></h3>

				<p>
					<?php esc_html_e( 'We have used Full Site Editing which will help you preview your changes live and fast.', 'cleaning-equipment' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( admin_url( 'site-editor.php' ) ); ?>" ><?php esc_html_e( 'Use Site Editor', 'cleaning-equipment' ); ?></a>
				</p>

			</div><!-- .col -->

			<div class="col">

				<h3><i class="dashicons dashicons-book-alt"></i><?php esc_html_e( 'Leave us a review', 'cleaning-equipment' ); ?></h3>
				<p>
					<?php esc_html_e( 'We would love to hear your feedback.', 'cleaning-equipment' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( CLEANING_EQUIPMENT_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Review', 'cleaning-equipment' ); ?></a>
				</p>

			</div><!-- .col -->


			<div class="col">

				<h3><i class="dashicons dashicons-sos"></i><?php esc_html_e( 'Help &amp; Support', 'cleaning-equipment' ); ?></h3>

				<p>
					<?php esc_html_e( 'If you have any question/feedback regarding theme, please post in our official support forum.', 'cleaning-equipment' ); ?>
				</p>

				<p>
					<a class="button button-primary" href="<?php echo esc_url( CLEANING_EQUIPMENT_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Get Support', 'cleaning-equipment' ); ?></a>
				</p>

			</div><!-- .col -->

		</div><!-- .four-col -->


	</div><!-- .wrap -->
	<?php

}