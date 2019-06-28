<?php

function surbma_gpga_fields_init() {
	register_setting(
		'surbma_gpga_options',
		'surbma_gpga_fields',
		'surbma_gpga_fields_validate'
	);
}
add_action( 'admin_init', 'surbma_gpga_fields_init' );

$popupbuttoncookiepolicystyle_options = array(
	'link' => array(
		'value' => 'link',
		'label' => __( 'Link', 'surbma-gdpr-proof-google-analytics' )
	),
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default', 'surbma-gdpr-proof-google-analytics' )
	),
	'primary' => array(
		'value' => 'primary',
		'label' => __( 'Primary', 'surbma-gdpr-proof-google-analytics' )
	),
	'success' => array(
		'value' => 'success',
		'label' => __( 'Success', 'surbma-gdpr-proof-google-analytics' )
	),
	'danger' => array(
		'value' => 'danger',
		'label' => __( 'Danger', 'surbma-gdpr-proof-google-analytics' )
	)
);

$popupbutton2style_options = array(
	'link' => array(
		'value' => 'link',
		'label' => __( 'Link', 'surbma-gdpr-proof-google-analytics' )
	),
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default', 'surbma-gdpr-proof-google-analytics' )
	),
	'primary' => array(
		'value' => 'primary',
		'label' => __( 'Primary', 'surbma-gdpr-proof-google-analytics' )
	),
	'success' => array(
		'value' => 'success',
		'label' => __( 'Success', 'surbma-gdpr-proof-google-analytics' )
	),
	'danger' => array(
		'value' => 'danger',
		'label' => __( 'Danger', 'surbma-gdpr-proof-google-analytics' )
	)
);

$popupbuttonsize_options = array(
	'mini' => array(
		'value' => 'mini',
		'label' => __( 'Mini', 'surbma-gdpr-proof-google-analytics' )
	),
	'small' => array(
		'value' => 'small',
		'label' => __( 'Small', 'surbma-gdpr-proof-google-analytics' )
	),
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default', 'surbma-gdpr-proof-google-analytics' )
	),
	'large' => array(
		'value' => 'large',
		'label' => __( 'Large', 'surbma-gdpr-proof-google-analytics' )
	)
);

$popupbuttonalignment_options = array(
	'left' => array(
		'value' => 'left',
		'label' => __( 'Left', 'surbma-gdpr-proof-google-analytics' )
	),
	'center' => array(
		'value' => 'center',
		'label' => __( 'Center', 'surbma-gdpr-proof-google-analytics' )
	),
	'right' => array(
		'value' => 'right',
		'label' => __( 'Right', 'surbma-gdpr-proof-google-analytics' )
	)
);

$popup_styles = array(
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default Style', 'surbma-gdpr-proof-google-analytics' )
	),
	'almost-flat' => array(
		'value' => 'almost-flat',
		'label' => __( 'Almost Flat Style', 'surbma-gdpr-proof-google-analytics' )
	),
	'gradient' => array(
		'value' => 'gradient',
		'label' => __( 'Gradient Style', 'surbma-gdpr-proof-google-analytics' )
	)
);

$popup_themes = array(
	'normal' => array(
		'value' => 'normal',
		'label' => __( 'Normal Theme', 'surbma-gdpr-proof-google-analytics' )
	),
	'full-page' => array(
		'value' => 'full-page',
		'label' => __( 'Full Page Theme', 'surbma-gdpr-proof-google-analytics' )
	)
);

$snackbarpos_options = array(
	'top-left' => array(
		'value' => 'top-left',
		'label' => __( 'Top Left', 'surbma-gdpr-proof-google-analytics' )
	),
	'top-center' => array(
		'value' => 'top-center',
		'label' => __( 'Top Center', 'surbma-gdpr-proof-google-analytics' )
	),
	'top-right' => array(
		'value' => 'top-right',
		'label' => __( 'Top Right', 'surbma-gdpr-proof-google-analytics' )
	),
	'bottom-left' => array(
		'value' => 'bottom-left',
		'label' => __( 'Bottom Left', 'surbma-gdpr-proof-google-analytics' )
	),
	'bottom-center' => array(
		'value' => 'bottom-center',
		'label' => __( 'Bottom Center', 'surbma-gdpr-proof-google-analytics' )
	),
	'bottom-right' => array(
		'value' => 'bottom-right',
		'label' => __( 'Bottom Right', 'surbma-gdpr-proof-google-analytics' )
	)
);

$ga_script = array(
	'gtagjs' => array(
		'value' => 'gtagjs',
		'label' => __( 'Global site tag (gtag.js)', 'surbma-gdpr-proof-google-analytics' )
	),
	'analyticsjs' => array(
		'value' => 'analyticsjs',
		'label' => __( 'Universal Analytics library (analytics.js)', 'surbma-gdpr-proof-google-analytics' )
	)
);

$gacookiecategory_options = array(
	'category2' => array(
		'value' => 'category2',
		'label' => __( 'Category 2', 'surbma-gdpr-proof-google-analytics' )
	),
	'category3' => array(
		'value' => 'category3',
		'label' => __( 'Category 3', 'surbma-gdpr-proof-google-analytics' )
	),
	'category4' => array(
		'value' => 'category4',
		'label' => __( 'Category 4', 'surbma-gdpr-proof-google-analytics' )
	)
);

$fbpixelcookiecategory_options = array(
	'category2' => array(
		'value' => 'category2',
		'label' => __( 'Category 2', 'surbma-gdpr-proof-google-analytics' )
	),
	'category3' => array(
		'value' => 'category3',
		'label' => __( 'Category 3', 'surbma-gdpr-proof-google-analytics' )
	),
	'category4' => array(
		'value' => 'category4',
		'label' => __( 'Category 4', 'surbma-gdpr-proof-google-analytics' )
	)
);

function surbma_gpga_settings_page() {
	global $popupbuttoncookiepolicystyle_options;
	global $popupbutton2style_options;
	global $popupbuttonsize_options;
	global $popupbuttonalignment_options;
	global $popup_styles;
	global $popup_themes;
	global $snackbarpos_options;
	global $ga_script;
	global $gacookiecategory_options;
	global $fbpixelcookiecategory_options;

	$freeNotification = '<p class="uk-text-meta uk-text-center">' . __( 'Inactive options are available in the Premium Version of this plugin with an Active License.', 'surbma-gdpr-proof-google-analytics' ) . '</p>';

?>
<div class="surbma-admin surbma-settings-page">
	<?php surbma_gpga_admin_header( __( 'Settings' ) ); ?>
	<div class="wrap">
		<?php if ( isset( $_GET['settings-updated'] ) && $_GET['settings-updated'] == true ) { ?>
			<div class="updated notice is-dismissible"><p><strong><?php _e( 'Settings saved.' ); ?></strong></p></div>
		<?php } ?>

		<div class="uk-grid-small" uk-grid>
			<div class="uk-width-3-4@l">
				<form class="uk-form-horizontal" method="post" action="options.php">
					<?php settings_fields( 'surbma_gpga_options' ); ?>
					<?php $options = get_option( 'surbma_gpga_fields' ); ?>

					<div class="uk-card uk-card-small uk-card-default uk-card-hover uk-margin-bottom">
						<div class="uk-card-header uk-background-muted">
							<h3 class="uk-card-title"><?php _e( 'Popup Settings', 'surbma-gdpr-proof-google-analytics' ); ?> <a class="uk-float-right uk-margin-small-top" uk-icon="icon: more-vertical" uk-toggle="target: #popup-settings"></a></h3>
						</div>
						<div id="popup-settings" class="uk-card-body">
							<h4 class="uk-heading-divider"><?php _e( 'Content', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popuptitle]"><?php _e( 'Title', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $popuptitleValue = isset( $options['popuptitle'] ) ? $options['popuptitle'] : ''; ?>
									<input id="surbma_gpga_fields[popuptitle]" class="uk-input" type="text" name="surbma_gpga_fields[popuptitle]" value="<?php echo stripslashes( $popuptitleValue ); ?>" />
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popuptext]"><?php _e( 'Text', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $popuptextValue = isset( $options['popuptext'] ) ? $options['popuptext'] : ''; ?>
									<textarea id="surbma_gpga_fields[popuptext]" class="uk-textarea" cols="50" rows="10" name="surbma_gpga_fields[popuptext]"><?php echo stripslashes( $popuptextValue ); ?></textarea>
									<pre><?php _e( 'Allowed HTML tags in this field', 'surbma-gdpr-proof-google-analytics' ); ?>: <?php echo allowed_tags(); ?></pre>
								</div>
							</div>
							<h4 class="uk-heading-divider"><?php _e( 'Buttons', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Cookie Policy Button Display', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Show the Cookie Policy button in the Popup', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupbuttoncookiepolicydisplayValue = isset( $options['popupbuttoncookiepolicydisplay'] ) ? $options['popupbuttoncookiepolicydisplay'] : 1; ?>
											<input id="surbma_gpga_fields[popupbuttoncookiepolicydisplay]" name="surbma_gpga_fields[popupbuttoncookiepolicydisplay]" type="checkbox" value="1" <?php checked( '1', $popupbuttoncookiepolicydisplayValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupcookiepolicytext]"><?php _e( 'Cookie Policy Button Text', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $popupcookiepolicytextValue = isset( $options['popupcookiepolicytext'] ) ? $options['popupcookiepolicytext'] : ''; ?>
									<input id="surbma_gpga_fields[popupcookiepolicytext]" class="uk-input" type="text" name="surbma_gpga_fields[popupcookiepolicytext]" value="<?php echo stripslashes( $popupcookiepolicytextValue ); ?>"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupcookiepolicypage]"><?php _e( 'Cookie Policy Page', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php
										$popupcookiepolicypageValue = isset( $options['popupcookiepolicypage'] ) ? $options['popupcookiepolicypage'] : '';
										$selected = $popupcookiepolicypageValue;
										$args = array(
											'selected'              => $selected,
											'name'                  => 'surbma_gpga_fields[popupcookiepolicypage]',
											'class'                 => 'uk-select',
											'show_option_none'      => __( 'None', 'surbma-gdpr-proof-google-analytics' ),
											'option_none_value'     => 0
										);
										wp_dropdown_pages( $args );
									?>
									<p class="uk-text-meta"><?php _e( 'The Popup is not loading on the selected page. You can use this page to show your Cookie Policy.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbuttoncookiepolicystyle]"><?php _e( 'Cookie Policy Button Style', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbuttoncookiepolicystyle]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$popupbuttoncookiepolicystyleValue = isset( $options['popupbuttoncookiepolicystyle'] ) ? $options['popupbuttoncookiepolicystyle'] : 'default';
											$selected = $popupbuttoncookiepolicystyleValue;
											$p = '';
											$r = '';

											foreach ( $popupbuttoncookiepolicystyle_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbutton2text]"><?php _e( 'Accept Button Text', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<input id="surbma_gpga_fields[popupbutton2text]" class="uk-input" type="text" name="surbma_gpga_fields[popupbutton2text]" value="<?php echo esc_attr( stripslashes( $options['popupbutton2text'] ) ); ?>" />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbutton2style]"><?php _e( 'Accept Button Style', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbutton2style]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$popupbutton2styleValue = isset( $options['popupbutton2style'] ) ? $options['popupbutton2style'] : 'primary';
											$selected = $popupbutton2styleValue;
											$p = '';
											$r = '';

											foreach ( $popupbutton2style_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbuttonsize]"><?php _e( 'Button Size', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbuttonsize]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$popupbuttonsizeValue = isset( $options['popupbuttonsize'] ) ? $options['popupbuttonsize'] : 'large';
											$selected = $popupbuttonsizeValue;
											$p = '';
											$r = '';

											foreach ( $popupbuttonsize_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbuttonalignment]"><?php _e( 'Button Alignment', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbuttonalignment]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$popupbuttonalignmentValue = isset( $options['popupbuttonalignment'] ) ? $options['popupbuttonalignment'] : 'left';
											$selected = $popupbuttonalignmentValue;
											$p = '';
											$r = '';

											foreach ( $popupbuttonalignment_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<p class="uk-text-meta uk-text-center"><?php echo $freeNotification; ?></p>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Design Settings', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupstyles]"><?php _e( 'Styles', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupstyles]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$popupstylesValue = isset( $options['popupstyles'] ) ? $options['popupstyles'] : 'default';
											$selected = $popupstylesValue;
											$p = '';
											$r = '';

											foreach ( $popup_styles as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupthemes]"><?php _e( 'Themes', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupthemes]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$popupthemesValue = isset( $options['popupthemes'] ) ? $options['popupthemes'] : 'normal';
											$selected = $popupthemesValue;
											$p = '';
											$r = '';

											foreach ( $popup_themes as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Display options', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Dark mode', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupdarkmodeValue = isset( $options['popupdarkmode'] ) ? $options['popupdarkmode'] : 0; ?>
											<input id="surbma_gpga_fields[popupdarkmode]" name="surbma_gpga_fields[popupdarkmode]" type="checkbox" value="1" <?php checked( '1', $popupdarkmodeValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Center text alignment', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupcentertextValue = isset( $options['popupcentertext'] ) ? $options['popupcentertext'] : 0; ?>
											<input id="surbma_gpga_fields[popupcentertext]" name="surbma_gpga_fields[popupcentertext]" type="checkbox" value="1" <?php checked( '1', $popupcentertextValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Vertically center the Popup', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupverticalcenterValue = isset( $options['popupverticalcenter'] ) ? $options['popupverticalcenter'] : 0; ?>
											<input id="surbma_gpga_fields[popupverticalcenter]" name="surbma_gpga_fields[popupverticalcenter]" type="checkbox" value="1" <?php checked( '1', $popupverticalcenterValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Large modifier', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popuplargeValue = isset( $options['popuplarge'] ) ? $options['popuplarge'] : 0; ?>
											<input id="surbma_gpga_fields[popuplarge]" name="surbma_gpga_fields[popuplarge]" type="checkbox" value="1" <?php checked( '1', $popuplargeValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Other Settings', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin">
								<div class="uk-form-label"><?php _e( 'Close options', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
										<?php _e( 'Close button in popup', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupclosebuttonValue = isset( $options['popupclosebutton'] ) ? $options['popupclosebutton'] : 0; ?>
											<input id="surbma_gpga_fields[popupclosebutton]" name="surbma_gpga_fields[popupclosebutton]" type="checkbox" value="1" <?php checked( '1', $popupclosebuttonValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
										<?php _e( 'Close with keyboard (ESC button)', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupclosekeyboardValue = isset( $options['popupclosekeyboard'] ) ? $options['popupclosekeyboard'] : 0; ?>
											<input id="surbma_gpga_fields[popupclosekeyboard]" name="surbma_gpga_fields[popupclosekeyboard]" type="checkbox" value="1" <?php checked( '1', $popupclosekeyboardValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
										<?php _e( 'Close with a click on the background', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupclosebgcloseValue = isset( $options['popupclosebgclose'] ) ? $options['popupclosebgclose'] : 0; ?>
											<input id="surbma_gpga_fields[popupclosebgclose]" name="surbma_gpga_fields[popupclosebgclose]" type="checkbox" value="1" <?php checked( '1', $popupclosebgcloseValue); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'Popup close without <strong>Accept</strong> or <strong>Decline</strong> button click will never enable tracking. Popup will still load on every page.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupdelay]"><?php _e( 'Popup delay', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $popupdelayValue = isset( $options['popupdelay'] ) ? $options['popupdelay'] : 0; ?>
									<input id="surbma_gpga_fields[popupdelay]" class="uk-input uk-form-width-small" type="number" name="surbma_gpga_fields[popupdelay]" value="<?php echo $popupdelayValue; ?>" placeholder="0"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> /> <?php _e( 'seconds', 'surbma-gdpr-proof-google-analytics' ); ?>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Cookie Options', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupcookiedays]"><?php _e( 'Cookie expires in', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $popupcookiedaysValue = isset( $options['popupcookiedays'] ) ? $options['popupcookiedays'] : 30; ?>
									<input id="surbma_gpga_fields[popupcookiedays]" class="uk-input uk-form-width-small" type="number" name="surbma_gpga_fields[popupcookiedays]" value="<?php echo $popupcookiedaysValue; ?>" min="1" max="180" placeholder="30"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> /> <?php _e( 'days', 'surbma-gdpr-proof-google-analytics' ); ?>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Development Options', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin">
								<div class="uk-form-label"><?php _e( 'Debug Mode', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Always show Popup', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $popupdebugValue = isset( $options['popupdebug'] ) ? $options['popupdebug'] : 0; ?>
											<input id="surbma_gpga_fields[popupdebug]" name="surbma_gpga_fields[popupdebug]" type="checkbox" value="1" <?php checked( '1', $popupdebugValue); ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'If this option is enabled, Popup will always be visible for logged in users! The keyboard (ESC button) close is also enabled. Good for testing.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
						</div>
						<div class="uk-card-footer uk-background-muted">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>

					<div class="uk-card uk-card-small uk-card-default uk-card-hover uk-margin-bottom">
						<div class="uk-card-header uk-background-muted">
							<h3 class="uk-card-title"><?php _e( 'Snackbar Settings', 'surbma-gdpr-proof-google-analytics' ); ?> <a class="uk-float-right uk-margin-small-top" uk-icon="icon: more-vertical" uk-toggle="target: #snackbar-settings"></a></h3>
						</div>
						<div id="snackbar-settings" class="uk-card-body">
							<div class="uk-margin">
								<div class="uk-form-label"><?php _e( 'Enable Snackbar', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Display Snackbar before the Popup', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $snackbarValue = isset( $options['snackbar'] ) ? $options['snackbar'] : 0; ?>
											<input id="surbma_gpga_fields[snackbar]" name="surbma_gpga_fields[snackbar]" type="checkbox" value="1" <?php checked( '1', $snackbarValue ); ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'If enabled, a snackbar will be displayed instead of the Popup. Clicking on the Snackbar link will open the Popup.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<h4 class="uk-heading-divider"><?php _e( 'Content', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[snackbartext]"><?php _e( 'Text', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $snackbartextValue = isset( $options['snackbartext'] ) ? $options['snackbartext'] : 'We are using Cookies on our website.'; ?>
									<input id="surbma_gpga_fields[snackbartext]" class="uk-input" type="text" name="surbma_gpga_fields[snackbartext]" value="<?php echo $snackbartextValue; ?>" />
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[snackbaropenpopuptext]"><?php _e( 'Open Popup Link Text', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $snackbaropenpopuptextValue = isset( $options['snackbaropenpopuptext'] ) ? $options['snackbaropenpopuptext'] : 'Cookie settings'; ?>
									<input id="surbma_gpga_fields[snackbaropenpopuptext]" class="uk-input" type="text" name="surbma_gpga_fields[snackbaropenpopuptext]" value="<?php echo $snackbaropenpopuptextValue; ?>" />
								</div>
							</div>
							<h4 class="uk-heading-divider"><?php _e( 'Design Settings', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[snackbarpos]"><?php _e( 'Position', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[snackbarpos]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$snackbarposValue = isset( $options['snackbarpos'] ) ? $options['snackbarpos'] : 'bottom-left';
											$selected = $options['snackbarpos'];
											$p = '';
											$r = '';

											foreach ( $snackbarpos_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Full width', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Display Snackbar without padding in full width', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $snackbarfullwidthValue = isset( $options['snackbarfullwidth'] ) ? $options['snackbarfullwidth'] : 0; ?>
											<input id="surbma_gpga_fields[snackbarfullwidth]" name="surbma_gpga_fields[snackbarfullwidth]" type="checkbox" value="1" <?php checked( '1', $snackbarfullwidthValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'This will override the Position setting\'s alignment, only top or bottom position will be valid.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
						</div>
						<div class="uk-card-footer uk-background-muted">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>

					<div class="uk-card uk-card-small uk-card-default uk-card-hover uk-margin-bottom">
						<div class="uk-card-header uk-background-muted">
							<h3 class="uk-card-title"><?php _e( 'Google Analytics Settings', 'surbma-gdpr-proof-google-analytics' ); ?> <a class="uk-float-right uk-margin-small-top" uk-icon="icon: more-vertical" uk-toggle="target: #ga-settings"></a></h3>
						</div>
						<div id="ga-settings" class="uk-card-body">
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[gacookiecategory]"><?php _e( 'Cookie Category', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[gacookiecategory]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$gacookiecategoryValue = isset( $options['gacookiecategory'] ) ? $options['gacookiecategory'] : 'category2';
											$selected = $gacookiecategoryValue;
											$p = '';
											$r = '';

											foreach ( $gacookiecategory_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[ga]"><?php _e( 'GA Tracking Code', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $gaValue = isset( $options['ga'] ) ? $options['ga'] : ''; ?>
									<input id="surbma_gpga_fields[ga]" class="uk-input" type="text" name="surbma_gpga_fields[ga]" value="<?php echo $gaValue; ?>" placeholder="UA-000000-00" />
									<p class="uk-text-meta"><?php _e( 'IMPORTANT! You have to give only the UA tracking code.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'IP Anonymization', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Anonymize the IP address of the hit sent to Google Analytics', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $gaanonymizeipValue = isset( $options['gaanonymizeip'] ) ? $options['gaanonymizeip'] : 1; ?>
											<input id="surbma_gpga_fields[gaanonymizeip]" name="surbma_gpga_fields[gaanonymizeip]" type="checkbox" value="1" <?php checked( '1', $gaanonymizeipValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'More information about IP anonymization: <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/ip-anonymization" target="_blank"><u>IP anonymization with gtag.js</u></a>', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Tracking Script Settings', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[gascript]"><?php _e( 'Tracking Script Type', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[gascript]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$selected = $options['gascript'];
											$p = '';
											$r = '';

											foreach ( $ga_script as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Tracking Script Loading', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Load Google Analytics tracking for <strong>logged in users</strong>', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $galoadloggedinValue = isset( $options['galoadloggedin'] ) ? $options['galoadloggedin'] : 1; ?>
											<input id="surbma_gpga_fields[galoadloggedin]" name="surbma_gpga_fields[galoadloggedin]" type="checkbox" value="1" <?php checked( '1', $galoadloggedinValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Load Google Analytics tracking on <strong>admin pages</strong>', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $galoadadminValue = isset( $options['galoadadmin'] ) ? $options['galoadadmin'] : 1; ?>
											<input id="surbma_gpga_fields[galoadadmin]" name="surbma_gpga_fields[galoadadmin]" type="checkbox" value="1" <?php checked( '1', $galoadadminValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
									<?php _e( 'Load Google Analytics tracking on <strong>login pages</strong>', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $galoadloginValue = isset( $options['galoadlogin'] ) ? $options['galoadlogin'] : 1; ?>
											<input id="surbma_gpga_fields[galoadlogin]" name="surbma_gpga_fields[galoadlogin]" type="checkbox" value="1" <?php checked( '1', $galoadloginValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
						</div>
						<div class="uk-card-footer uk-background-muted">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>

					<div class="uk-card uk-card-small uk-card-default uk-card-hover uk-margin-bottom">
						<div class="uk-card-header uk-background-muted">
							<h3 class="uk-card-title"><?php _e( 'Facebook Pixel Settings', 'surbma-gdpr-proof-google-analytics' ); ?> <a class="uk-float-right uk-margin-small-top" uk-icon="icon: more-vertical" uk-toggle="target: #fbpixel-settings"></a></h3>
						</div>
						<div id="fbpixel-settings" class="uk-card-body">
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcookiecategory]"><?php _e( 'Cookie Category', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[fbpixelcookiecategory]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>>
										<?php
											$fbpixelcookiecategoryValue = isset( $options['fbpixelcookiecategory'] ) ? $options['fbpixelcookiecategory'] : 'category2';
											$selected = $fbpixelcookiecategoryValue;
											$p = '';
											$r = '';

											foreach ( $fbpixelcookiecategory_options as $option ) {
												$label = $option['label'];
												if ( $selected == $option['value'] ) // Make default first in list
													$p = "\n\t<option style=\"padding-right: 10px;\" selected='selected' value='" . esc_attr( $option['value'] ) . "'>$label</option>";
												else
													$r .= "\n\t<option style=\"padding-right: 10px;\" value='" . esc_attr( $option['value'] ) . "'>$label</option>";
											}
											echo $p . $r;
										?>
									</select>
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelid]"><?php _e( 'Pixel ID', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelidValue = isset( $options['fbpixelid'] ) ? $options['fbpixelid'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelid]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelid]" value="<?php echo $fbpixelidValue; ?>" placeholder="12345678987654321" />
									<p class="uk-text-meta"><?php _e( 'IMPORTANT! You have to give only the Pixel ID tracking code.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Use Advanced Matching', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Enable Advanced Matching to match site visitors to people on Facebook', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $fbpixeladvancedmatchingValue = isset( $options['fbpixeladvancedmatching'] ) ? $options['fbpixeladvancedmatching'] : 0; ?>
											<input id="surbma_gpga_fields[fbpixeladvancedmatching]" name="surbma_gpga_fields[fbpixeladvancedmatching]" type="checkbox" value="1" <?php checked( '1', $fbpixeladvancedmatchingValue ); ?><?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'Improve the ability to match site visitors to people on Facebook by passing additional site visitor information (such as email address or phone number). <a href="https://developers.facebook.com/docs/facebook-pixel/pixel-with-ads/conversion-tracking#advanced_match" target="_blank"><u>Learn more about advanced matching and data security</u></a>.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Customer Identifiers', 'surbma-gdpr-proof-google-analytics' ); ?></h4>
							<p><?php _e( 'To enable Advanced Matching, select the customer identifiers you\'d like to pass to Facebook. Then input the variables your website uses to store this data. Copy the pixel code after you\'ve finalized the variables.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelciem]"><?php _e( 'Email Address', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelciemValue = isset( $options['fbpixelciem'] ) ? $options['fbpixelciem'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelciem]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelciem]" value="<?php echo $fbpixelciemValue; ?>" placeholder="Enter the Email Address (em) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcifn]"><?php _e( 'First Name', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcifnValue = isset( $options['fbpixelcifn'] ) ? $options['fbpixelcifn'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelcifn]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelcifn]" value="<?php echo $fbpixelcifnValue; ?>" placeholder="Enter the First Name (fn) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelciln]"><?php _e( 'Last Name', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcilnValue = isset( $options['fbpixelciln'] ) ? $options['fbpixelciln'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelciln]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelciln]" value="<?php echo $fbpixelcilnValue; ?>" placeholder="Enter the Last Name (ln) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelciph]"><?php _e( 'Phone Number', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelciphValue = isset( $options['fbpixelciph'] ) ? $options['fbpixelciph'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelciph]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelciph]" value="<?php echo $fbpixelciphValue; ?>" placeholder="Enter the Phone Number (ph) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcige]"><?php _e( 'Gender', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcigeValue = isset( $options['fbpixelcige'] ) ? $options['fbpixelcige'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelcige]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelcige]" value="<?php echo $fbpixelcigeValue; ?>" placeholder="Enter the Gender (ge) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcidb]"><?php _e( 'Date of Birth', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcidbValue = isset( $options['fbpixelcidb'] ) ? $options['fbpixelcidb'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelcidb]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelcidb]" value="<?php echo $fbpixelcidbValue; ?>" placeholder="Enter the Date of Birth (db) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcict]"><?php _e( 'City', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcictValue = isset( $options['fbpixelcict'] ) ? $options['fbpixelcict'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelcict]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelcict]" value="<?php echo $fbpixelcictValue; ?>" placeholder="Enter the City (ct) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcist]"><?php _e( 'State', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcistValue = isset( $options['fbpixelcist'] ) ? $options['fbpixelcist'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelcist]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelcist]" value="<?php echo $fbpixelcistValue; ?>" placeholder="Enter the State (st) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[fbpixelcizp]"><?php _e( 'Zip Code', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $fbpixelcizpValue = isset( $options['fbpixelcizp'] ) ? $options['fbpixelcizp'] : ''; ?>
									<input id="surbma_gpga_fields[fbpixelcizp]" class="uk-input" type="text" name="surbma_gpga_fields[fbpixelcizp]" value="<?php echo $fbpixelcizpValue; ?>" placeholder="Enter the Zip Code (zp) variable"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
						</div>
						<div class="uk-card-footer uk-background-muted">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>

					<?php if ( current_user_can( 'unfiltered_html' ) ) { ?>
					<div class="uk-card uk-card-small uk-card-default uk-card-hover uk-margin-bottom">
						<div class="uk-card-header uk-background-muted">
							<h3 class="uk-card-title"><?php _e( 'Cookie Categories', 'surbma-gdpr-proof-google-analytics' ); ?> <a class="uk-float-right uk-margin-small-top" uk-icon="icon: more-vertical" uk-toggle="target: #cookie-categories"></a></h3>
						</div>
						<div id="cookie-categories" class="uk-card-body">
							<p><?php _e( 'Name your Cookie categories as you like it. Recommended categories are Necessary, Preferences, Statistics and Marketing. These names will show up in the Cookie Popup and visitors can choose, which categories they allow or block. Please give a short description for your categories here, but don\'t forget to explain them in more details in your Cookie Policy!', 'surbma-gdpr-proof-google-analytics' ); ?></p>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory1name]"><?php _e( 'Category 1 Name', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory1nameValue = isset( $options['cookiecategory1name'] ) ? $options['cookiecategory1name'] : 'Necessary'; ?>
									<input id="surbma_gpga_fields[cookiecategory1name]" class="uk-input" type="text" name="surbma_gpga_fields[cookiecategory1name]" value="<?php echo $cookiecategory1nameValue; ?>" />
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory1description]"><?php _e( 'Category 1 Description', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory1descriptionValue = isset( $options['cookiecategory1description'] ) ? $options['cookiecategory1description'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory1description]" class="uk-textarea" cols="50" rows="3" name="surbma_gpga_fields[cookiecategory1description]"><?php echo stripslashes( $cookiecategory1descriptionValue ); ?></textarea>
									<pre><?php _e( 'Allowed HTML tags in this field', 'surbma-gdpr-proof-google-analytics' ); ?>: <?php echo allowed_tags(); ?></pre>
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory2name]"><?php _e( 'Category 2 Name', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory2nameValue = isset( $options['cookiecategory2name'] ) ? $options['cookiecategory2name'] : 'Preferences'; ?>
									<input id="surbma_gpga_fields[cookiecategory2name]" class="uk-input" type="text" name="surbma_gpga_fields[cookiecategory2name]" value="<?php echo $cookiecategory2nameValue; ?>" />
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory2description]"><?php _e( 'Category 2 Description', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory2descriptionValue = isset( $options['cookiecategory2description'] ) ? $options['cookiecategory2description'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory2description]" class="uk-textarea" cols="50" rows="3" name="surbma_gpga_fields[cookiecategory2description]"><?php echo stripslashes( $cookiecategory2descriptionValue ); ?></textarea>
									<pre><?php _e( 'Allowed HTML tags in this field', 'surbma-gdpr-proof-google-analytics' ); ?>: <?php echo allowed_tags(); ?></pre>
								</div>
							</div>
							<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory2headscripts]"><?php _e( 'Category 2 Head Scripts', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory2headscriptsValue = isset( $options['cookiecategory2headscripts'] ) ? $options['cookiecategory2headscripts'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory2headscripts]" class="uk-textarea" cols="50" rows="10" name="surbma_gpga_fields[cookiecategory2headscripts]"><?php echo stripslashes( $cookiecategory2headscriptsValue ); ?></textarea>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory3name]"><?php _e( 'Category 3 Name', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory3nameValue = isset( $options['cookiecategory3name'] ) ? $options['cookiecategory3name'] : 'Statistics'; ?>
									<input id="surbma_gpga_fields[cookiecategory3name]" class="uk-input" type="text" name="surbma_gpga_fields[cookiecategory3name]" value="<?php echo $cookiecategory3nameValue; ?>"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory3description]"><?php _e( 'Category 3 Description', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory3descriptionValue = isset( $options['cookiecategory3description'] ) ? $options['cookiecategory3description'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory3description]" class="uk-textarea" cols="50" rows="3" name="surbma_gpga_fields[cookiecategory3description]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>><?php echo stripslashes( $cookiecategory3descriptionValue ); ?></textarea>
									<pre><?php _e( 'Allowed HTML tags in this field', 'surbma-gdpr-proof-google-analytics' ); ?>: <?php echo allowed_tags(); ?></pre>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory3headscripts]"><?php _e( 'Category 3 Head Scripts', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory3headscriptsValue = isset( $options['cookiecategory3headscripts'] ) ? $options['cookiecategory3headscripts'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory3headscripts]" class="uk-textarea" cols="50" rows="10" name="surbma_gpga_fields[cookiecategory3headscripts]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>><?php echo stripslashes( $cookiecategory3headscriptsValue ); ?></textarea>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory4name]"><?php _e( 'Category 4 Name', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory4nameValue = isset( $options['cookiecategory4name'] ) ? $options['cookiecategory4name'] : 'Marketing'; ?>
									<input id="surbma_gpga_fields[cookiecategory4name]" class="uk-input" type="text" name="surbma_gpga_fields[cookiecategory4name]" value="<?php echo $cookiecategory4nameValue; ?>"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?> />
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory4description]"><?php _e( 'Category 4 Description', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory4descriptionValue = isset( $options['cookiecategory4description'] ) ? $options['cookiecategory4description'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory4description]" class="uk-textarea" cols="50" rows="3" name="surbma_gpga_fields[cookiecategory4description]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>><?php echo stripslashes( $cookiecategory4descriptionValue ); ?></textarea>
									<pre><?php _e( 'Allowed HTML tags in this field', 'surbma-gdpr-proof-google-analytics' ); ?>: <?php echo allowed_tags(); ?></pre>
								</div>
							</div>
							<div class="uk-margin<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[cookiecategory4headscripts]"><?php _e( 'Category 4 Head Scripts', 'surbma-gdpr-proof-google-analytics' ); ?></label>
								<div class="uk-form-controls">
									<?php $cookiecategory4headscriptsValue = isset( $options['cookiecategory4headscripts'] ) ? $options['cookiecategory4headscripts'] : ''; ?>
									<textarea id="surbma_gpga_fields[cookiecategory4headscripts]" class="uk-textarea" cols="50" rows="10" name="surbma_gpga_fields[cookiecategory4headscripts]"<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) echo ' disabled'; ?>><?php echo stripslashes( $cookiecategory4headscriptsValue ); ?></textarea>
								</div>
							</div>
							<?php if ( SURBMA_GPGA_PLUGIN_VERSION == 'free' || SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) { ?>
								<?php echo $freeNotification; ?>
							<?php } ?>
						</div>
						<div class="uk-card-footer uk-background-muted">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>
					<?php } ?>

					<div class="uk-card uk-card-small uk-card-default uk-card-hover uk-margin-bottom">
						<div class="uk-card-header uk-background-muted">
							<h3 class="uk-card-title"><?php _e( 'General Settings', 'surbma-gdpr-proof-google-analytics' ); ?> <a class="uk-float-right uk-margin-small-top" uk-icon="icon: more-vertical" uk-toggle="target: #general-settings"></a></h3>
						</div>
						<div id="general-settings" class="uk-card-body">
							<div class="uk-margin">
								<div class="uk-form-label"><?php _e( 'Limited Liability', 'surbma-gdpr-proof-google-analytics' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'By using this plugin, you agree, that all responsibility is yours regarding the GDPR legal compliance', 'surbma-gdpr-proof-google-analytics' ); ?>:
										<label class="switch">
											<?php $limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : ''; ?>
											<input id="surbma_gpga_fields[limitedliability]" name="surbma_gpga_fields[limitedliability]" type="checkbox" value="1" <?php checked( '1', $limitedliabilityValue ); ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'It is valid particularly for the title, description, texts of the buttons displaying in the popup and your cookie policy.', 'surbma-gdpr-proof-google-analytics' ); ?></p>
								</div>
							</div>
						</div>
						<div class="uk-card-footer uk-background-muted">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>
				</form>
			</div>
			<div class="uk-width-1-4@l">
				<?php surbma_gpga_admin_sidebar(); ?>
			</div>
		</div>
		<div class="uk-margin-bottom" id="bottom"></div>
	</div>
	<?php surbma_gpga_admin_footer(); ?>
</div>
<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function surbma_gpga_fields_validate( $input ) {
	global $popupbuttoncookiepolicystyle_options;
	global $popupbutton2style_options;
	global $popupbuttonsize_options;
	global $popupbuttonalignment_options;
	global $popup_styles;
	global $popup_themes;
	global $snackbarpos_options;
	global $ga_script;
	global $gacookiecategory_options;
	global $fbpixelcookiecategory_options;

	$options = get_option( 'surbma_gpga_fields' );

	// Say our text option must be safe text with no HTML tags
	$input['popuptitle'] = wp_filter_nohtml_kses( $input['popuptitle'] );
	$input['popupcookiepolicytext'] = wp_filter_nohtml_kses( $input['popupcookiepolicytext'] );
	$input['popupbutton2text'] = wp_filter_nohtml_kses( $input['popupbutton2text'] );
	$input['snackbartext'] = isset( $input['snackbartext'] ) ? wp_filter_nohtml_kses( $input['snackbartext'] ) : 'We are using Cookies on our website.';
	$input['snackbaropenpopuptext'] = isset( $input['snackbaropenpopuptext'] ) ? wp_filter_nohtml_kses( $input['snackbaropenpopuptext'] ) : 'Cookie settings';
	$input['ga'] = wp_filter_nohtml_kses( $input['ga'] );
	$input['fbpixelid'] = wp_filter_nohtml_kses( $input['fbpixelid'] );
	$input['fbpixelciem'] = wp_filter_nohtml_kses( $input['fbpixelciem'] );
	$input['fbpixelcifn'] = wp_filter_nohtml_kses( $input['fbpixelcifn'] );
	$input['fbpixelciln'] = wp_filter_nohtml_kses( $input['fbpixelciln'] );
	$input['fbpixelciph'] = wp_filter_nohtml_kses( $input['fbpixelciph'] );
	$input['fbpixelcige'] = wp_filter_nohtml_kses( $input['fbpixelcige'] );
	$input['fbpixelcidb'] = wp_filter_nohtml_kses( $input['fbpixelcidb'] );
	$input['fbpixelcict'] = wp_filter_nohtml_kses( $input['fbpixelcict'] );
	$input['fbpixelcist'] = wp_filter_nohtml_kses( $input['fbpixelcist'] );
	$input['fbpixelcizp'] = wp_filter_nohtml_kses( $input['fbpixelcizp'] );
	$input['cookiecategory1name'] = wp_filter_nohtml_kses( $input['cookiecategory1name'] );
	$input['cookiecategory2name'] = wp_filter_nohtml_kses( $input['cookiecategory2name'] );
	$input['cookiecategory3name'] = wp_filter_nohtml_kses( $input['cookiecategory3name'] );
	$input['cookiecategory4name'] = wp_filter_nohtml_kses( $input['cookiecategory4name'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['popuptext'] = wp_filter_post_kses( $input['popuptext'] );
	$input['cookiecategory1description'] = wp_filter_post_kses( $input['cookiecategory1description'] );
	$input['cookiecategory2description'] = wp_filter_post_kses( $input['cookiecategory2description'] );
	$input['cookiecategory3description'] = wp_filter_post_kses( $input['cookiecategory3description'] );
	$input['cookiecategory4description'] = wp_filter_post_kses( $input['cookiecategory4description'] );

	if ( current_user_can( 'unfiltered_html' ) ) {
		$input['cookiecategory2headscripts'] = $input['cookiecategory2headscripts'];
		$input['cookiecategory3headscripts'] = $input['cookiecategory3headscripts'];
		$input['cookiecategory4headscripts'] = $input['cookiecategory4headscripts'];
	} else {
		$cookiecategory2headscriptsValue = isset( $options['cookiecategory2headscripts'] ) ? $options['cookiecategory2headscripts'] : '';
		$cookiecategory3headscriptsValue = isset( $options['cookiecategory3headscripts'] ) ? $options['cookiecategory3headscripts'] : '';
		$cookiecategory4headscriptsValue = isset( $options['cookiecategory4headscripts'] ) ? $options['cookiecategory4headscripts'] : '';
		$input['cookiecategory2headscripts'] = $cookiecategory2headscriptsValue;
		$input['cookiecategory3headscripts'] = $cookiecategory3headscriptsValue;
		$input['cookiecategory4headscripts'] = $cookiecategory4headscriptsValue;
	}

	// Say our input option must be only numbers
	$input['popupdelay'] = preg_replace( "/[^0-9]/", "", $input['popupdelay'] );
	$input['popupcookiedays'] = preg_replace( "/[^0-9]/", "", $input['popupcookiedays'] );

	// Checkbox validation.
	$input['popupbuttoncookiepolicydisplay'] = isset( $input['popupbuttoncookiepolicydisplay'] ) && $input['popupbuttoncookiepolicydisplay'] == 1 ? 1 : 0;
	$input['popupdarkmode'] = isset( $input['popupdarkmode'] ) && $input['popupdarkmode'] == 1 ? 1 : 0;
	$input['popupcentertext'] = isset( $input['popupcentertext'] ) && $input['popupcentertext'] == 1 ? 1 : 0;
	$input['popupverticalcenter'] = isset( $input['popupverticalcenter'] ) && $input['popupverticalcenter'] == 1 ? 1 : 0;
	$input['popuplarge'] = isset( $input['popuplarge'] ) && $input['popuplarge'] == 1 ? 1 : 0;
	$input['popupclosebutton'] = isset( $input['popupclosebutton'] ) && $input['popupclosebutton'] == 1 ? 1 : 0;
	$input['popupclosekeyboard'] = isset( $input['popupclosekeyboard'] ) && $input['popupclosekeyboard'] == 1 ? 1 : 0;
	$input['popupclosebgclose'] = isset( $input['popupclosebgclose'] ) && $input['popupclosebgclose'] == 1 ? 1 : 0;
	$input['popupdebug'] = isset( $input['popupdebug'] ) && $input['popupdebug'] == 1 ? 1 : 0;
	$input['snackbar'] = isset( $input['snackbar'] ) && $input['snackbar'] == 1 ? 1 : 0;
	$input['snackbarfullwidth'] = isset( $input['snackbarfullwidth'] ) && $input['snackbarfullwidth'] == 1 ? 1 : 0;
	$input['gaanonymizeip'] = isset( $input['gaanonymizeip'] ) && $input['gaanonymizeip'] == 1 ? 1 : 0;
	$input['galoadloggedin'] = isset( $input['galoadloggedin'] ) && $input['galoadloggedin'] == 1 ? 1 : 0;
	$input['galoadadmin'] = isset( $input['galoadadmin'] ) && $input['galoadadmin'] == 1 ? 1 : 0;
	$input['galoadlogin'] = isset( $input['galoadlogin'] ) && $input['galoadlogin'] == 1 ? 1 : 0;
	$input['fbpixeladvancedmatching'] = isset( $input['fbpixeladvancedmatching'] ) && $input['fbpixeladvancedmatching'] == 1 ? 1 : 0;
	$input['limitedliability'] = isset( $input['limitedliability'] ) && $input['limitedliability'] == 1 ? 1 : 0;

	// Our select option must actually be in our array of select options
	if ( !array_key_exists( $input['popupbuttoncookiepolicystyle'], $popupbuttoncookiepolicystyle_options ) )
		$input['popupbuttoncookiepolicystyle'] = 'default';
	if ( !array_key_exists( $input['popupbutton2style'], $popupbutton2style_options ) )
		$input['popupbutton2style'] = 'primary';
	if ( !array_key_exists( $input['popupbuttonsize'], $popupbuttonsize_options ) )
		$input['popupbuttonsize'] = 'large';
	if ( !array_key_exists( $input['popupbuttonalignment'], $popupbuttonalignment_options ) )
		$input['popupbuttonalignment'] = 'left';
	if ( !array_key_exists( $input['popupstyles'], $popup_styles ) )
		$input['popupstyles'] = 'default';
	if ( !array_key_exists( $input['popupthemes'], $popup_themes ) )
		$input['popupthemes'] = 'normal';
	if ( !array_key_exists( $input['snackbarpos'], $snackbarpos_options ) )
		$input['snackbarpos'] = 'bottom-left';
	if ( !array_key_exists( $input['gascript'], $ga_script ) )
		$input['gascript'] = 'gtagjs';
	if ( !array_key_exists( $input['gacookiecategory'], $gacookiecategory_options ) )
		$input['gacookiecategory'] = 'category2';
	if ( !array_key_exists( $input['fbpixelcookiecategory'], $fbpixelcookiecategory_options ) )
		$input['fbpixelcookiecategory'] = 'category2';

	// If no valid license, check if field has any value. If yes, save it, if no, set to default.
	if ( SURBMA_GPGA_PLUGIN_LICENSE != 'valid' ) {
		$input['popupcookiepolicytext'] = isset( $options['popupcookiepolicytext'] ) ? $options['popupcookiepolicytext'] : null;
		$input['popupcookiepolicypage'] = isset( $options['popupcookiepolicypage'] ) ? $options['popupcookiepolicypage'] : '';
		$input['popupbuttoncookiepolicystyle'] = isset( $options['popupbuttoncookiepolicystyle'] ) ? $options['popupbuttoncookiepolicystyle'] : 'default';
		$input['popupbutton2style'] = isset( $options['popupbutton2style'] ) ? $options['popupbutton2style'] : 'primary';
		$input['popupbuttonsize'] = isset( $options['popupbuttonsize'] ) ? $options['popupbuttonsize'] : 'large';
		$input['popupbuttonalignment'] = isset( $options['popupbuttonalignment'] ) ? $options['popupbuttonalignment'] : 'left';

		$input['popupthemes'] = isset( $options['popupthemes'] ) ? $options['popupthemes'] : 'normal';
		$input['popupdarkmode'] = isset( $options['popupdarkmode'] ) ? $options['popupdarkmode'] : 0;
		$input['popupcentertext'] = isset( $options['popupcentertext'] ) ? $options['popupcentertext'] : 0;
		$input['popupverticalcenter'] = isset( $options['popupverticalcenter'] ) ? $options['popupverticalcenter'] : 0;
		$input['popuplarge'] = isset( $options['popuplarge'] ) ? $options['popuplarge'] : 0;

		$input['popupclosekeyboard'] = isset( $options['popupclosekeyboard'] ) ? $options['popupclosekeyboard'] : 0;
		$input['popupclosebgclose'] = isset( $options['popupclosebgclose'] ) ? $options['popupclosebgclose'] : 0;
		$input['popupdelay'] = isset( $options['popupdelay'] ) ? $options['popupdelay'] : 0;

		$input['popupcookiedays'] = isset( $options['popupcookiedays'] ) ? $options['popupcookiedays'] : 30;

		$input['snackbarpos'] = isset( $options['snackbarpos'] ) ? $options['snackbarpos'] : 'bottom-left';
		$input['snackbarfullwidth'] = isset( $options['snackbarfullwidth'] ) ? $options['snackbarfullwidth'] : 0;

		$input['gacookiecategory'] = isset( $options['gacookiecategory'] ) ? $options['gacookiecategory'] : 'category2';
		$input['gaanonymizeip'] = isset( $options['gaanonymizeip'] ) ? $options['gaanonymizeip'] : 1;
		$input['gascript'] = isset( $options['gascript'] ) ? $options['gascript'] : 'gtagjs';
		$input['galoadloggedin'] = isset( $options['galoadloggedin'] ) ? $options['galoadloggedin'] : 1;
		$input['galoadadmin'] = isset( $options['galoadadmin'] ) ? $options['galoadadmin'] : 1;
		$input['galoadlogin'] = isset( $options['galoadlogin'] ) ? $options['galoadlogin'] : 1;

		$input['fbpixelcookiecategory'] = isset( $options['fbpixelcookiecategory'] ) ? $options['fbpixelcookiecategory'] : 'category2';
		$input['fbpixeladvancedmatching'] = isset( $options['fbpixeladvancedmatching'] ) ? $options['fbpixeladvancedmatching'] : 0;
	}

	return $input;
}
