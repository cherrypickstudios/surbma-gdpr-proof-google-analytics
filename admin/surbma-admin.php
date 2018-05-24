<?php

// Custom styles and scripts for admin pages
function surbma_gpga_admin_scripts( $hook ) {
	global $surbma_gpga_settings_page;
	global $surbma_gpga_cookies_page;
	global $surbma_gpga_documentation_page;
    if ( $hook == $surbma_gpga_settings_page || $hook == $surbma_gpga_cookies_page || $hook == $surbma_gpga_documentation_page ) {
		$admin_url = plugins_url( '', __FILE__ );
		wp_enqueue_script( 'uikit-js', $admin_url . '/uikit/js/uikit.min.js', array( 'jquery' ), '3.0.0-rc.2', true );
		wp_enqueue_script( 'uikit-icons', $admin_url . '/uikit/js/uikit-icons.min.js', array( 'jquery' ), '3.0.0-rc.2', true );
		wp_enqueue_style( 'uikit-css', $admin_url . '/uikit/css/uikit.min.css', false, '3.0.0-rc.2' );
    	wp_enqueue_style( 'surbma-admin', $admin_url . '/surbma-admin.css' );
    }
}
add_action( 'admin_enqueue_scripts', 'surbma_gpga_admin_scripts', 9999 );

function surbma_gpga_admin_header() {
	$plugin_data = get_plugin_data( SURBMA_GPGA_PLUGIN_FILE );
	$plugin_name = $plugin_data['Name'];
	?><nav class="uk-navbar-container uk-margin" id="surbma-header" uk-navbar>
		<div class="uk-navbar-left">
			<div class="uk-navbar-item uk-logo">
	        	<div><span uk-icon="icon: settings; ratio: 2"></span> <?php echo $plugin_name ?></div>
	    	</div>
	    </div>
	</nav><?php
}

function surbma_gpga_admin_footer() {
	$plugin_data = get_plugin_data( SURBMA_GPGA_PLUGIN_FILE );
	$plugin_version = $plugin_data['Version'];
	$plugin_name = $plugin_data['Name'];
	$plugin_authorURI = $plugin_data['AuthorURI'];
	$plugin_pluginURI = $plugin_data['PluginURI'];
	?><div class="uk-section uk-section-small">
    	<div class="uk-text-center">
        	<p>
				<strong><a class="uk-link-reset" href="<?php echo $plugin_pluginURI; ?>" target="_blank"><?php echo $plugin_name; ?></a></strong><br>
				<a href="<?php echo $plugin_authorURI; ?>" target="_blank">Made with &hearts; by Surbma</a><br>
				v.<?php echo $plugin_version; ?>
			</p>
		</div>
	</div><?php
}
