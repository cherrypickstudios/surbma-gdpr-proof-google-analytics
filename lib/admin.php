<?php

include_once( SURBMA_GPGA_PLUGIN_DIR . '/admin/surbma-admin.php');
include_once( SURBMA_GPGA_PLUGIN_DIR . '/pages/settings.php');

/* Admin options menu */
function surbma_gpga_add_menus() {
	global $surbma_gpga_settings_page;
	$surbma_gpga_settings_page = add_menu_page(
		__( 'Surbma - GDPR Proof Google Analytics', 'surbma-gpga' ),
		__( 'GDPR Proof GA', 'surbma-gpga' ),
		'manage_options',
		'surbma-gpga-menu',
		'surbma_gpga_settings_page',
		'dashicons-chart-line'
	);
}
add_action( 'admin_menu', 'surbma_gpga_add_menus' );

function surbma_gpga_admin_notices() {
	$options = get_option( 'surbma_gpga_fields' );
	$limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : '';
	if ( $limitedliabilityValue == '' ) {
		$url = get_admin_url() . 'admin.php?page=surbma-gpga-menu';
		echo '<div class="notice notice-error"><p><strong>';
		_e( 'Thank you for using Surbma - GDPR Proof Google Analytics plugin!', 'surbma-gpga' );
		echo '</strong></p><p>';
		_e( 'By using this plugin, you agree, that all responsibility is yours regarding the GDPR legal compliance. The plugin author does not substitute any legal adequacy.', 'surbma-gpga' );
		echo '</p><p>';
		_e( 'To hide this notice and activate the plugin, please accept the Limited Liability option!', 'surbma-gpga' );
		echo '</p><p><a class="button" href="' . esc_url( $url ) . '">';
		_e( 'Accept Limited Liability option »', 'surbma-gpga' );
		echo '</a></p></div>';
	}
}
// add_action( 'admin_notices', 'surbma_gpga_admin_notices' );
