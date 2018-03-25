<?php

include_once( SURBMA_GPGA_PLUGIN_DIR . '/admin/surbma-admin.php');
include_once( SURBMA_GPGA_PLUGIN_DIR . '/pages/settings.php');

/* Admin options menu */
function surbma_gpga_add_menus() {
	global $surbma_gpga_settings_page;
	$surbma_gpga_settings_page = add_options_page(
		__( 'Surbma - GDPR Proof Google Analytics', 'surbma-gpga' ),
		__( 'GDPR Proof GA', 'surbma-gpga' ),
		'manage_options',
		'surbma-gpga-menu',
		'surbma_gpga_settings_page'
	);
}
add_action( 'admin_menu', 'surbma_gpga_add_menus' );

function surbma_gpga_admin_notices() {
	$options = get_option( 'surbma_gpga_fields' );
	$limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : '';
	if ( $limitedliabilityValue == '' ) {
		echo '<div class="error notice"><p><strong>Thank you for using Surbma - GDPR Proof Google Analytics plugin!</strong></p><p>By using this plugin, you agree, that all responsibility is yours regarding the GDPR legal compliance. The plugin author does not substitute any legal adequacy.</p><p>To hide this notice and activate the plugin, please go to <a href="/wp-admin/options-general.php?page=surbma-gpga-menu"><strong>Settings -> GDPR Proof GA</strong></a> menu and accept the Limited Liability option!</p></div>';
	}
}
add_action( 'admin_notices', 'surbma_gpga_admin_notices' );
