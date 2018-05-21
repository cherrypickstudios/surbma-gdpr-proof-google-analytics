<?php

/*
Plugin Name: Surbma - GDPR Proof Cookies
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Adds GDPR compatible cookie management to your website.

Version: 8.0

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-gdpr-proof-google-analytics
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Freemius SDK wrap to prevent conflicts with premium version
if ( !function_exists( 'surbma_gpga_fs' ) ) {

// Create a helper function for easy SDK access.
function surbma_gpga_fs() {
    global $surbma_gpga_fs;

    if ( ! isset( $surbma_gpga_fs ) ) {
        // Include Freemius SDK.
        require_once dirname(__FILE__) . '/freemius/start.php';

        $surbma_gpga_fs = fs_dynamic_init( array(
            'id'                  => '1930',
            'slug'                => 'surbma-gdpr-proof-google-analytics',
            'type'                => 'plugin',
            'public_key'          => 'pk_ec2dc653523a01a2ca1fd5a0ff31e',
            'is_premium'          => true,
            'has_addons'          => false,
            'has_paid_plans'      => true,
            'has_affiliation'     => 'selected',
            'menu'                => array(
				'slug'           => 'surbma-gpga-menu',
				'support'        => false,
            ),
        ) );
    }

    return $surbma_gpga_fs;
}

// Init Freemius.
surbma_gpga_fs();
// Signal that SDK was initiated.
do_action( 'surbma_gpga_fs_loaded' );

function surbma_gpga_fs_custom_connect_message_on_update(
	$message,
	$user_first_name,
	$plugin_title,
	$user_login,
	$site_link,
	$freemius_link
) {
	return sprintf(
		__( 'Hey %1$s', 'surbma-gdpr-proof-google-analytics' ) . ',<br>' .
		__( 'Please help us improve %2$s plugin! If you opt-in, some data about your usage of this plugin will be sent to us. If you skip this, that\'s okay! The plugin will still work just fine.', 'surbma-gdpr-proof-google-analytics' ),
		$user_first_name,
		'<b>' . $plugin_title . '</b>',
		'<b>' . $user_login . '</b>',
		$site_link,
		$freemius_link
	);
}
surbma_gpga_fs()->add_filter('connect_message_on_update', 'surbma_gpga_fs_custom_connect_message_on_update', 10, 6);

define( 'SURBMA_GPGA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SURBMA_GPGA_PLUGIN_URL', plugins_url( '', __FILE__ ) );
define( 'SURBMA_GPGA_PLUGIN_FILE', __FILE__ );

// Localization
function surbma_gpga_init() {
	load_plugin_textdomain( 'surbma-gpga', false, plugin_basename( dirname( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_gpga_init' );

// Include files
if ( is_admin() ) {
	include_once( SURBMA_GPGA_PLUGIN_DIR . '/lib/admin.php' );
}

function surbma_gpga_activated() {
	$defaultfields = get_option( 'surbma_gpga_fields' );
	if ( !$defaultfields ) {
		$defaultfields['popuptitle'] = 'We are using cookies on our website';
		$defaultfields['popuptext'] = 'Please confirm, if you accept our tracking cookies. You can also decline the tracking, so you can continue to visit our website without any data sent to third party services.';
		$defaultfields['popupbutton1text'] = 'Decline';
		$defaultfields['popupbutton1style'] = 'default';
		$defaultfields['popupbutton2text'] = 'Accept';
		$defaultfields['popupbutton2style'] = 'primary';
		$defaultfields['popupbuttonsize'] = 'large';
		$defaultfields['popupbuttonalignment'] = 'left';
		$defaultfields['popupthemes'] = 'normal';
		$defaultfields['popupcookiedays'] = 30;
		$defaultfields['gaanonymizeip'] = 1;
		$defaultfields['gascript'] = 'gtagjs';
		update_option( 'surbma_gpga_fields', $defaultfields );
	}
}
register_activation_hook( __FILE__, 'surbma_gpga_activated' );

function surbma_gpga_google_analytics_load() {
	$options = get_option( 'surbma_gpga_fields' );

	$popupdebugValue = isset( $options['popupdebug'] ) && is_user_logged_in() && !is_admin() ? $options['popupdebug'] : 0;

	$galoadadminValue = isset( $options['galoadadmin'] ) ? $options['galoadadmin'] : 1;
	$galoadloginValue = isset( $options['galoadlogin'] ) ? $options['galoadlogin'] : 1;
	$galoadloggedinValue = isset( $options['galoadloggedin'] ) ? $options['galoadloggedin'] : 1;

	$limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : 0;

	if ( $limitedliabilityValue == 1 ) {
		if ( $popupdebugValue == 1 || !is_user_logged_in() || $galoadloggedinValue == 1 ) {
			add_action( 'wp_head', 'surbma_gpga_header_scripts', 999 );
			add_action( 'wp_head', 'surbma_gpga_google_analytics_display', 999 );
			add_action( 'wp_footer', 'surbma_gpga_block', 999 );
			add_action( 'wp_enqueue_scripts', 'surbma_gpga_enqueue_scripts', 999 );
		}
		if ( $galoadadminValue == 1 ) {
			add_action( 'admin_head', 'surbma_gpga_header_scripts', 999 );
			add_action( 'admin_head', 'surbma_gpga_google_analytics_display', 999 );
			// add_action( 'admin_print_footer_scripts', 'surbma_gpga_block', 999 );
			// add_action( 'admin_enqueue_scripts', 'surbma_gpga_enqueue_scripts', 999 );
		}
		if ( $galoadadminValue == 1 || $galoadloginValue == 1 ) {
			add_action( 'login_head', 'surbma_gpga_header_scripts', 999 );
			add_action( 'login_footer', 'surbma_gpga_block', 999 );
			add_action( 'login_enqueue_scripts', 'surbma_gpga_enqueue_scripts', 999 );
		}
		if ( $galoadloginValue == 1 ) {
			add_action( 'login_head', 'surbma_gpga_google_analytics_display', 999 );
		}
	}
}
add_action( 'wp_loaded', 'surbma_gpga_google_analytics_load' );

function surbma_gpga_enqueue_scripts() {
	wp_enqueue_script( 'surbma-gpga-scripts', plugins_url( '', __FILE__ ) . '/js/scripts-min.js', array( 'jquery' ), '2.27.1', true );
	wp_enqueue_style( 'surbma-gpga-styles', plugins_url( '', __FILE__ ) . '/css/styles.css', false, '2.27.1' );
}

function surbma_gpga_header_scripts() {
?>
<script type="text/javascript">
	function surbma_gpga_readCookie(cookieName) {
		var re = new RegExp('[; ]'+cookieName+'=([^\\s;]*)');
		var sMatch = (' '+document.cookie).match(re);
		if (cookieName && sMatch) return unescape(sMatch[1]);
		return '';
	}
</script>
<?php
}

function surbma_gpga_google_analytics_display() {
	$options = get_option( 'surbma_gpga_fields' );

	$popupcookiepolicypageValue = isset( $options['popupcookiepolicypage'] ) ? $options['popupcookiepolicypage'] : 0;

	$gaValue = $options['ga'];
	$gaanonymizeipValue = isset( $options['gaanonymizeip'] ) ? $options['gaanonymizeip'] : 1;
	$gascriptValue = isset( $options['gascript'] ) ? $options['gascript'] : 'gtagjs';

	if ( $popupcookiepolicypageValue == 0 || !is_page( $popupcookiepolicypageValue ) ) {
		if( $gascriptValue == 'analyticsjs' ) {
?>
<!-- Google Analytics -->
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	if( surbma_gpga_readCookie('surbma-gpga') == 'yes' ) {
		ga('create', '<?php echo $gaValue; ?>', 'auto');
<?php if ( $gaanonymizeipValue == '1' ) { ?>
		ga('send', 'pageview', { 'anonymizeIp': true });
<?php } else { ?>
		ga('send', 'pageview');
<?php } ?>
<?php do_action( 'surbma_gpga_analyticsjs_settings' ); ?>
	}
</script>
<?php } else {
?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gaValue; ?>"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	if( surbma_gpga_readCookie('surbma-gpga') == 'yes' ) {
<?php if ( $gaanonymizeipValue == '1' ) { ?>
		gtag('config', '<?php echo $gaValue; ?>', { 'anonymize_ip': true });
<?php } else { ?>
		gtag('config', '<?php echo $gaValue; ?>');
<?php } ?>
<?php do_action( 'surbma_gpga_gtagjs_settings' ); ?>
	}
</script>
<?php }
	}
}

function surbma_gpga_block() {
	$options = get_option( 'surbma_gpga_fields' );

	$popuptextValue = isset( $options['popuptext'] ) ? $options['popuptext'] : '';

	$popupcookiepolicytextValue = isset( $options['popupcookiepolicytext'] ) ? $options['popupcookiepolicytext'] : '';
	$popupcookiepolicypageValue = isset( $options['popupcookiepolicypage'] ) ? $options['popupcookiepolicypage'] : 0;

	$popupbutton1styleValue = isset( $options['popupbutton1style'] ) ? $options['popupbutton1style'] : 'default';
	$popupbutton1textValue = isset( $options['popupbutton1text'] ) ? $options['popupbutton1text'] : 'Decline';
	$popupbutton2styleValue = isset( $options['popupbutton2style'] ) ? $options['popupbutton2style'] : 'primary';
	$popupbutton2textValue = isset( $options['popupbutton2text'] ) ? $options['popupbutton2text'] : 'Accept';
	$popupbuttonsizeValue = isset( $options['popupbuttonsize'] ) ? $options['popupbuttonsize'] : 'large';
	$popupbuttonalignmentValue = isset( $options['popupbuttonalignment'] ) ? $options['popupbuttonalignment'] : 'left';

	$popupthemesValue = isset( $options['popupthemes'] ) ? $options['popupthemes'] : 'normal';
	$popupdarkmodeValue = isset( $options['popupdarkmode'] ) && $options['popupdarkmode'] == 1 ? ' surbma-gpga-dark' : '';
	$popupcentertextValue = isset( $options['popupcentertext'] ) && $options['popupcentertext'] == 1 ? ' surbma-gpga-text-center' : '';
	$popupverticalcenterValue = isset( $options['popupverticalcenter'] ) && $options['popupverticalcenter'] == 1 ? 'true' : 'false';
	$popuplargeValue = isset( $options['popuplarge'] ) && $options['popuplarge'] == 1 ? ' uk-modal-dialog-large' : '';

	$popupdebugValue = isset( $options['popupdebug'] ) && is_user_logged_in() && !is_admin() ? $options['popupdebug'] : 0;

	$popupclosebuttonValue = isset( $options['popupclosebutton'] ) ? $options['popupclosebutton'] : 0;
	$popupclosekeyboardValue = $popupdebugValue == 1 || ( isset( $options['popupclosekeyboard'] ) && $options['popupclosekeyboard'] == 1 ) ? 'true' : 'false';
	$popupclosebgcloseValue = isset( $options['popupclosebgclose'] ) && $options['popupclosebgclose'] == 1 ? 'true' : 'false';

	$popupdelayValue = isset( $options['popupdelay'] ) ? $options['popupdelay'] : 0;
	$popupdelayValue = 1000 * (int)$popupdelayValue;

	$gaValue = isset( $options['ga'] ) ? $options['ga'] : '';
	$gaanonymizeipValue = isset( $options['gaanonymizeip'] ) ? $options['gaanonymizeip'] : 1;
	$gascriptValue = isset( $options['gascript'] ) ? $options['gascript'] : 'gtagjs';

	$popupcookiedaysValue = isset( $options['popupcookiedays'] ) && $options['popupcookiedays'] != 0 ? $options['popupcookiedays'] : 30;

	$limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : '';

	if ( $limitedliabilityValue == 1 && ( $popupcookiepolicypageValue == 0 || !is_page( $popupcookiepolicypageValue ) ) ) {
?>
<input type="hidden" id="surbma-gpga-popupdebug" value="<?php echo $popupdebugValue; ?>" />
<script type="text/javascript">
	function surbma_gpga_openModal() {
		UIkit.modal(('#surbma-gpga-modal'), {center: <?php echo $popupverticalcenterValue; ?>,keyboard: <?php echo $popupclosekeyboardValue; ?>,bgclose: <?php echo $popupclosebgcloseValue; ?>}).show();
	}
	jQuery(document).ready(function($) {
		var show_modal = 0;
		if( $('#surbma-gpga-popupdebug').val() == '1' ) {
			show_modal = 1;
		} else {
			if( !surbma_gpga_readCookie('surbma-gpga') ) {
				show_modal = 1;
			}
		}
		if( show_modal == 1 ) {
			setTimeout(function() {
				surbma_gpga_openModal();
			}, <?php echo $popupdelayValue; ?>);
		}
		// console.log('show_modal = '+show_modal);
		// $snackContent = '<a href="#"></a>';
		// https://www.polonel.com/snackbar/
		// Snackbar.show({
		// 	text: $snackContent,
		// 	textColor: '#fff',
		// 	pos: 'bottom-left',
		// 	// width: '50%',
		// 	// showAction: true,
		// 	actionText: 'Cookie policy',
		// 	actionTextColor: '#4CAF50',
		// 	backgroundColor: '#323232',
		// 	duration: 0,
		// 	onActionClick: function(element) {
		// 		//Set opacity of element to 0 to close Snackbar
		// 		$(element).css('opacity', 0);
		// 		surbma_gpc_openModal();
		// 	}
		// });
	});
</script>
<div id="surbma-gpga-modal" class="uk-modal <?php echo 'surbma-gpga-' . $popupthemesValue; ?><?php echo $popupdarkmodeValue; ?><?php echo $popupcentertextValue; ?>">
	<div class="uk-modal-dialog<?php echo $popuplargeValue; ?>">
		<?php if( $popupclosebuttonValue == 1 ) { ?>
		<a class="uk-modal-close uk-close"></a>
		<?php } ?>
		<div class="uk-modal-header">
			<h2><a href="#"></a><?php echo stripslashes( $options['popuptitle'] ); ?></h2>
		</div>
		<div class="uk-modal-content">
			<?php
				echo stripslashes( $popuptextValue );
				if( $popupcookiepolicytextValue != '' && $popupcookiepolicypageValue != 0 ) {
					echo '<p class="cookie-policy"><a href="' . esc_url( get_permalink( $popupcookiepolicypageValue ) ) . '" target="_blank">';
					echo stripslashes( $popupcookiepolicytextValue );
					echo '</a></p>';
				}
			?>
		</div>
		<div class="uk-modal-footer <?php echo 'surbma-gpga-button-' . $popupbuttonalignment; ?>">
			<button id="button1" type="button" class="uk-button uk-button-<?php echo $popupbuttonsizeValue; ?> uk-button-<?php echo $popupbutton1styleValue; ?> uk-modal-close"><?php echo stripslashes( $popupbutton1textValue ); ?></button>
			<span>&nbsp;</span>
			<button id="button2" type="button" class="uk-button uk-button-<?php echo $popupbuttonsizeValue; ?> uk-button-<?php echo $popupbutton2styleValue; ?> uk-modal-close"><?php echo stripslashes( $popupbutton2textValue ); ?></button>
		</div>
	</div>
</div>
<script type="text/javascript">
	function surbma_gpga_setCookie(cookieValue) {
	    var value = cookieValue;
	    var d = new Date();
	    d.setTime(d.getTime() + (<?php echo $popupcookiedaysValue; ?>*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	    document.cookie = "surbma-gpga=" + value + ";" + expires + ";path=/";
	}
	document.getElementById("button1").onclick = function () {
		surbma_gpga_setCookie('no');
	};
	document.getElementById("button2").onclick = function () {
		surbma_gpga_setCookie('yes');
<?php if( $gascriptValue == 'analyticsjs' ) { ?>
<?php if ( $gaanonymizeipValue == '1' ) { ?>
		ga('send', 'pageview', { 'anonymizeIp': true });
<?php } else { ?>
		ga('send', 'pageview');
<?php } ?>
<?php } else { ?>
<?php if ( $gaanonymizeipValue == '1' ) { ?>
		gtag('config', '<?php echo $gaValue; ?>', { 'anonymize_ip': true });
<?php } else { ?>
		gtag('config', '<?php echo $gaValue; ?>');
<?php } ?>
<?php } ?>
	};
</script>
<?php }
}

function surbma_gpga_modal_link_shortcode( $atts ) {
    extract( shortcode_atts( array(
        'class' => '',
        'text' => 'Open Cookie Settings'
    ), $atts ) );
    return '<a class="'.$class.'" href="#" onclick="surbma_gpga_openModal();">'.$text.'</a>';
}
add_shortcode( 'surbma-cookie-popup-link', 'surbma_gpga_modal_link_shortcode' );

} // End of surbma_gpga_fs function exists condition.
