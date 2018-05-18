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
	echo '<div class="notice notice-error"><p><strong>IMPORTANT change about the Surbma - GDPR Proof Google Analytics plugin!</strong></p><p>Please go to the <a href="/wp-admin/admin.php?page=surbma-gpga-menu">settings</a> page and follow the guide to upgrade to the brand new <strong>Surbma - GDPR Proof Cookies</strong> plugin, that will cover every cookie on your webpage.</p></div>';
}
// add_action( 'admin_notices', 'surbma_gpga_admin_notices' );
