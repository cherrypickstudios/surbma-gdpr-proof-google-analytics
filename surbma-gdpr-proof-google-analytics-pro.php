<?php

/*
Plugin Name: Surbma - GDPR Proof Google Analytics Pro
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Adds a GDPR compatible Google Analytics tracking to your website.

Version: 1.1

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-gpga
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

define( 'SURBMA_GPGA_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'SURBMA_GPGA_PLUGIN_URL', plugins_url( '', __FILE__ ) );

// Localization
add_action( 'plugins_loaded', 'surbma_gpga_init' );
function surbma_gpga_init() {
	load_plugin_textdomain( 'surbma-gpga', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}

// Include files
if ( is_admin() ) {
	include_once( SURBMA_GPGA_PLUGIN_DIR . '/lib/admin.php' );
}

function surbma_gpga_activated() {
	$defaultfields = get_option( 'surbma_gpga_fields' );
	if ( $defaultfields == '' ) {
		$defaultfields['popupbutton1text'] = 'Decline';
		$defaultfields['popupbutton1style'] = 'default';
		$defaultfields['popupbutton2text'] = 'Accept';
		$defaultfields['popupbutton2style'] = 'primary';
		$defaultfields['popupthemes'] = 'normal';
		$defaultfields['popupcookiedays'] = 30;
		$defaultfields['gaanonymizeip'] = 1;
		update_option( 'surbma_gpga_fields', $defaultfields );
	}
}
register_activation_hook( __FILE__, 'surbma_gpga_activated' );

function surbma_gpga_enqueue_scripts() {
	wp_enqueue_script( 'surbma-gpga-scripts', plugins_url( '', __FILE__ ) . '/js/scripts-min.js', array( 'jquery' ), '2.27.1', true );
	wp_enqueue_style( 'surbma-gpga-styles', plugins_url( '', __FILE__ ) . '/css/styles.css', false, '2.27.1' );
}
add_action( 'wp_enqueue_scripts', 'surbma_gpga_enqueue_scripts', 999 );

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
	$popupverticalcenterValue = isset( $options['popupverticalcenter'] ) ? $options['popupverticalcenter'] : true;
	$popuplargeValue = isset( $options['popuplarge'] ) && $options['popuplarge'] == 1 ? ' uk-modal-dialog-large' : '';

	$popupcookiedaysValue = isset( $options['popupcookiedays'] ) && $options['popupcookiedays'] != 0 ? $options['popupcookiedays'] : 30;
	$popupdebugValue = isset( $options['popupdebug'] ) && is_user_logged_in() ? $options['popupdebug'] : 0;

	$gaValue = isset( $options['ga'] ) ? $options['ga'] : '';

	$limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : '';

	if ( $gaValue && $limitedliabilityValue == 1 && ( $popupcookiepolicypageValue == 0 || !is_page( $popupcookiepolicypageValue ) ) ) {
?>
<input type="hidden" id="surbma-gpga-popupdebug" value="<?php echo $popupdebugValue; ?>" />
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var show_modal = 0;
		if( $('#surbma-gpga-popupdebug').val() == '1' ) {
			show_modal = 1;
		} else {
			if( !readCookie('surbma-gpga') ) {
				show_modal = 1;
			}
		}
		if( show_modal == 1 ) {
			$.UIkit.modal(('#surbma-gpga'), {center: <?php echo $popupverticalcenterValue; ?>,keyboard: false,bgclose: false}).show();
		}
		// console.log('show_modal = '+show_modal);
	});
</script>
<div id="surbma-gpga" class="uk-modal <?php echo 'surbma-gpga-' . $popupthemesValue; ?><?php echo $popupdarkmodeValue; ?><?php echo $popupcentertextValue; ?>">
    <div class="uk-modal-dialog<?php echo $popuplargeValue; ?>">
		<div class="uk-modal-header">
			<h2><a href="#"></a><?php echo esc_attr_e( $options['popuptitle'] ); ?></h2>
		</div>
		<div class="uk-modal-content">
			<?php
				echo $popuptextValue;
				if( $popupcookiepolicytextValue != '' && $popupcookiepolicypageValue != 0 ) {
					echo '<p class="cookie-policy"><a href="' . esc_url( get_permalink( $popupcookiepolicypageValue ) ) . '" target="_blank">';
					echo $popupcookiepolicytextValue;
					echo '</a></p>';
				}
			?>
		</div>
		<div class="uk-modal-footer <?php echo 'surbma-gpga-button-' . $popupbuttonalignment; ?>">
			<button id="button1" type="button" class="uk-button uk-button-<?php echo $popupbuttonsizeValue; ?> uk-button-<?php echo $popupbutton1styleValue; ?> uk-modal-close"><?php echo $popupbutton1textValue; ?></button>
			<span>&nbsp;</span>
			<button id="button2" type="button" class="uk-button uk-button-<?php echo $popupbuttonsizeValue; ?> uk-button-<?php echo $popupbutton2styleValue; ?> uk-modal-close"><?php echo $popupbutton2textValue; ?></button>
		</div>
	</div>
</div>
<script type="text/javascript">
	function setCookie(cookieValue) {
	    var value = cookieValue;
	    var d = new Date();
	    d.setTime(d.getTime() + (<?php echo $popupcookiedaysValue; ?>*24*60*60*1000));
	    var expires = "expires="+ d.toUTCString();
	    document.cookie = "surbma-gpga=" + value + ";" + expires + ";path=/";
	}
	function readCookie(cookieName) {
		var re = new RegExp('[; ]'+cookieName+'=([^\\s;]*)');
		var sMatch = (' '+document.cookie).match(re);
		if (cookieName && sMatch) return unescape(sMatch[1]);
		return '';
	}
    document.getElementById("button1").onclick = function () {
		setCookie('no');
		// console.log('cookie = no');
		window.location.reload(true);
    };
    document.getElementById("button2").onclick = function () {
		setCookie('yes');
		// console.log('cookie = yes');
		window.location.reload(true);
    };
</script>
<?php }
}
add_action( 'wp_footer', 'surbma_gpga_block', 999 );

function surbma_gpga_google_analytics_load() {
	$options = get_option( 'surbma_gpga_fields' );

	$gaValue = isset( $options['ga'] ) ? $options['ga'] : '';
	$galoadadminValue = isset( $options['galoadadmin'] ) ? $options['galoadadmin'] : 1;
	$galoadloginValue = isset( $options['galoadlogin'] ) ? $options['galoadlogin'] : 1;
	$galoadloggedinValue = isset( $options['galoadloggedin'] ) ? $options['galoadloggedin'] : 1;

	$limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : 0;

	if ( $gaValue && $limitedliabilityValue == 1 && ( !is_user_logged_in() || $galoadloggedinValue == 1 ) )
		add_action( 'wp_head', 'surbma_gpga_google_analytics_display', 999 );
	if ( $galoadadminValue == 1 )
		add_action( 'admin_head', 'surbma_gpga_google_analytics_display', 999 );
	if ( $galoadloginValue == 1 )
		add_action( 'login_head', 'surbma_gpga_google_analytics_display', 999 );
}
add_action( 'wp_loaded', 'surbma_gpga_google_analytics_load' );

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

	if( readCookie('surbma-gpga') == 'yes' ) {
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

	if( readCookie('surbma-gpga') == 'yes' ) {
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
