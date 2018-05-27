<?php

include_once( SURBMA_GPGA_PLUGIN_DIR . '/admin/surbma-admin.php');
include_once( SURBMA_GPGA_PLUGIN_DIR . '/pages/settings.php');
include_once( SURBMA_GPGA_PLUGIN_DIR . '/pages/social.php');
include_once( SURBMA_GPGA_PLUGIN_DIR . '/pages/cookies.php');
include_once( SURBMA_GPGA_PLUGIN_DIR . '/pages/documentation.php');

/* Admin options menu */
function surbma_gpga_add_menus() {
	global $surbma_gpga_settings_page;
	$surbma_gpga_settings_page = add_menu_page(
		__( 'Surbma - GDPR Proof Cookies', 'surbma-gdpr-proof-google-analytics' ),
		__( 'GDPR Proof Cookies', 'surbma-gdpr-proof-google-analytics' ),
		'manage_options',
		'surbma-gpga-menu',
		'surbma_gpga_settings_page',
		'dashicons-chart-line'
	);
	$surbma_gpga_settings_page = add_submenu_page(
		'surbma-gpga-menu',
		__( 'Settings', 'surbma-gdpr-proof-google-analytics' ),
		__( 'Settings', 'surbma-gdpr-proof-google-analytics' ),
		'manage_options',
		'surbma-gpga-menu',
		'surbma_gpga_settings_page'
	);
	global $surbma_gpga_social_page;
	$surbma_gpga_social_page = add_submenu_page(
		'surbma-gpga-menu',
		__( 'Social Integration', 'surbma-gdpr-proof-google-analytics' ),
		__( 'Social Integration', 'surbma-gdpr-proof-google-analytics' ),
		'manage_options',
		'surbma-gpga-social-menu',
		'surbma_gpga_social_page'
	);
	global $surbma_gpga_cookies_page;
	$surbma_gpga_cookies_page = add_submenu_page(
		'surbma-gpga-menu',
		__( 'Cookie Scan', 'surbma-gdpr-proof-google-analytics' ),
		__( 'Cookie Scan', 'surbma-gdpr-proof-google-analytics' ),
		'read',
		'surbma-gpga-cookies-menu',
		'surbma_gpga_cookies_page'
	);
	global $surbma_gpga_documentation_page;
	$surbma_gpga_documentation_page = add_submenu_page(
		'surbma-gpga-menu',
		__( 'Documentation', 'surbma-gdpr-proof-google-analytics' ),
		__( 'Documentation', 'surbma-gdpr-proof-google-analytics' ),
		'read',
		'surbma-gpga-documentation-menu',
		'surbma_gpga_documentation_page'
	);
}
add_action( 'admin_menu', 'surbma_gpga_add_menus' );

function surbma_gpga_admin_notices() {
	echo '<div class="notice notice-error"><p><strong></strong></p><p></p></div>';
}
// add_action( 'admin_notices', 'surbma_gpga_admin_notices' );
