<?php

add_action( 'admin_init', 'surbma_gpga_fields_init' );
function surbma_gpga_fields_init() {
	register_setting(
		'surbma_gpga_options',
		'surbma_gpga_fields',
		'surbma_gpga_fields_validate'
	);
}

$popupbutton1style_options = array(
	'link' => array(
		'value' => 'link',
		'label' => __( 'Link', 'surbma-gpga' )
	),
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default', 'surbma-gpga' )
	),
	'primary' => array(
		'value' => 'primary',
		'label' => __( 'Primary', 'surbma-gpga' )
	),
	'success' => array(
		'value' => 'success',
		'label' => __( 'Success', 'surbma-gpga' )
	),
	'danger' => array(
		'value' => 'danger',
		'label' => __( 'Danger', 'surbma-gpga' )
	)
);

$popupbutton2style_options = array(
	'link' => array(
		'value' => 'link',
		'label' => __( 'Link', 'surbma-gpga' )
	),
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default', 'surbma-gpga' )
	),
	'primary' => array(
		'value' => 'primary',
		'label' => __( 'Primary', 'surbma-gpga' )
	),
	'success' => array(
		'value' => 'success',
		'label' => __( 'Success', 'surbma-gpga' )
	),
	'danger' => array(
		'value' => 'danger',
		'label' => __( 'Danger', 'surbma-gpga' )
	)
);

$popupbuttonsize_options = array(
	'mini' => array(
		'value' => 'mini',
		'label' => __( 'Mini', 'surbma-gpga' )
	),
	'small' => array(
		'value' => 'small',
		'label' => __( 'Small', 'surbma-gpga' )
	),
	'default' => array(
		'value' => 'default',
		'label' => __( 'Default', 'surbma-gpga' )
	),
	'large' => array(
		'value' => 'large',
		'label' => __( 'Large', 'surbma-gpga' )
	)
);

$popupbuttonalignment_options = array(
	'left' => array(
		'value' => 'left',
		'label' => __( 'Left', 'surbma-gpga' )
	),
	'center' => array(
		'value' => 'center',
		'label' => __( 'Center', 'surbma-gpga' )
	),
	'right' => array(
		'value' => 'right',
		'label' => __( 'Right', 'surbma-gpga' )
	)
);

$popup_themes = array(
	'normal' => array(
		'value' => 'normal',
		'label' => __( 'Normal Theme', 'surbma-gpga' )
	),
	'full-page' => array(
		'value' => 'full-page',
		'label' => __( 'Full Page Theme', 'surbma-gpga' )
	)
);

$ga_script = array(
	'gtagjs' => array(
		'value' => 'gtagjs',
		'label' => __( 'Global site tag (gtag.js)', 'surbma-gpga' )
	),
	'analyticsjs' => array(
		'value' => 'analyticsjs',
		'label' => __( 'Universal Analytics library (analytics.js)', 'surbma-gpga' )
	)
);

function surbma_gpga_settings_page() {

	global $popupbutton1style_options;
	global $popupbutton2style_options;
	global $popupbuttonsize_options;
	global $popupbuttonalignment_options;
	global $popup_themes;
	global $ga_script;

?>
<div class="surbma-admin">
	<?php surbma_admin_header(); ?>
	<div class="wrap">
		<div class="uk-grid-small" uk-grid>
			<div class="uk-width-3-4@m">
				<form class="uk-form-horizontal" method="post" action="options.php">
					<?php settings_fields( 'surbma_gpga_options' ); ?>
					<?php $options = get_option( 'surbma_gpga_fields' ); ?>

					<div class="uk-card uk-card-default uk-card-hover uk-margin-bottom">
					    <div class="uk-card-header">
							<h3 class="uk-card-title"><?php _e( 'Popup Settings', 'surbma-gpga' ); ?></h3>
					    </div>
					    <div class="uk-card-body">
							<h4 class="uk-heading-divider"><?php _e( 'Content', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popuptitle]"><?php _e( 'Title', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<?php $popuptitleValue = isset( $options['popuptitle'] ) ? $options['popuptitle'] : ''; ?>
									<input id="surbma_gpga_fields[popuptitle]" class="uk-input" type="text" name="surbma_gpga_fields[popuptitle]" value="<?php echo stripslashes( $popuptitleValue ); ?>" />
					    		</div>
					    	</div>
					    	<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popuptext]"><?php _e( 'Text', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<?php $popuptextValue = isset( $options['popuptext'] ) ? $options['popuptext'] : ''; ?>
									<textarea id="surbma_gpga_fields[popuptext]" class="uk-textarea" cols="50" rows="10" name="surbma_gpga_fields[popuptext]"><?php echo stripslashes( $popuptextValue ); ?></textarea>
									<p><?php _e( 'Allowed HTML tags in this field', 'surbma-gpga' ); ?>:</p><pre><?php echo allowed_tags(); ?></pre>
					    		</div>
							</div>
							<h4 class="uk-heading-divider"><?php _e( 'Cookie Policy', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupcookiepolicytext]"><?php _e( 'Cookie Policy Link Text', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<?php $popupcookiepolicytextValue = isset( $options['popupcookiepolicytext'] ) ? $options['popupcookiepolicytext'] : ''; ?>
									<input id="surbma_gpga_fields[popupcookiepolicytext]" class="uk-input" type="text" name="surbma_gpga_fields[popupcookiepolicytext]" value="<?php echo stripslashes( $popupcookiepolicytextValue ); ?>"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
					    		</div>
					    	</div>
					    	<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popupcookiepolicypage]"><?php _e( 'Cookie Policy Page', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<?php
										$popupcookiepolicypageValue = isset( $options['popupcookiepolicypage'] ) ? $options['popupcookiepolicypage'] : '';
										$selected = $popupcookiepolicypageValue;
										$args = array(
											'selected'              => $selected,
											'name'                  => 'surbma_gpga_fields[popupcookiepolicypage]',
											'class'                 => 'uk-select',
											'show_option_none'      => 'None',
											'option_none_value'     => 0
										);
										wp_dropdown_pages( $args );
									?>
									<p class="uk-text-meta"><?php _e( 'The Popup and the Google Analytics tracking codes are not loading on the selected page. You can use this page to show your cookie policy.', 'surbma-gpga' ); ?></p>
					    		</div>
					    	</div>
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
								<p class="uk-text-meta uk-text-center"><?php _e( 'Inactive options are available in the Pro Version of this plugin.', 'surbma-gpga' ); ?></p>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Buttons', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbutton1text]"><?php _e( 'Decline Button Text', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<input id="surbma_gpga_fields[popupbutton1text]" class="uk-input" type="text" name="surbma_gpga_fields[popupbutton1text]" value="<?php echo esc_attr( stripslashes( $options['popupbutton1text'] ) ); ?>" />
					    		</div>
					    	</div>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbutton1style]"><?php _e( 'Decline Button Style', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbutton1style]"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>>
										<?php
											$popupbutton1styleValue = isset( $options['popupbutton1style'] ) ? $options['popupbutton1style'] : 'default';
											$selected = $popupbutton1styleValue;
											$p = '';
											$r = '';

											foreach ( $popupbutton1style_options as $option ) {
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
								<label class="uk-form-label" for="surbma_gpga_fields[popupbutton2text]"><?php _e( 'Accept Button Text', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<input id="surbma_gpga_fields[popupbutton2text]" class="uk-input" type="text" name="surbma_gpga_fields[popupbutton2text]" value="<?php echo esc_attr( stripslashes( $options['popupbutton2text'] ) ); ?>" />
					    		</div>
					    	</div>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbutton2style]"><?php _e( 'Accept Button Style', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbutton2style]"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>>
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
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbuttonsize]"><?php _e( 'Button Size', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbuttonsize]"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>>
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
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupbuttonalignment]"><?php _e( 'Button Alignment', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupbuttonalignment]"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>>
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
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
								<p class="uk-text-meta uk-text-center"><?php _e( 'Inactive options are available in the Pro Version of this plugin.', 'surbma-gpga' ); ?></p>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Design Settings', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupthemes]"><?php _e( 'Theme', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[popupthemes]"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>>
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
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Display options', 'surbma-gpga' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Dark mode', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $popupdarkmodeValue = isset( $options['popupdarkmode'] ) ? $options['popupdarkmode'] : 0; ?>
											<input id="surbma_gpga_fields[popupdarkmode]" name="surbma_gpga_fields[popupdarkmode]" type="checkbox" value="1" <?php checked( '1', $popupdarkmodeValue); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Center text alignment', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $popupcentertextValue = isset( $options['popupcentertext'] ) ? $options['popupcentertext'] : 0; ?>
											<input id="surbma_gpga_fields[popupcentertext]" name="surbma_gpga_fields[popupcentertext]" type="checkbox" value="1" <?php checked( '1', $popupcentertextValue); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Vertically center the Popup', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $popupverticalcenterValue = isset( $options['popupverticalcenter'] ) ? $options['popupverticalcenter'] : 0; ?>
											<input id="surbma_gpga_fields[popupverticalcenter]" name="surbma_gpga_fields[popupverticalcenter]" type="checkbox" value="1" <?php checked( '1', $popupverticalcenterValue); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Large modifier', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $popuplargeValue = isset( $options['popuplarge'] ) ? $options['popuplarge'] : 0; ?>
											<input id="surbma_gpga_fields[popuplarge]" name="surbma_gpga_fields[popuplarge]" type="checkbox" value="1" <?php checked( '1', $popuplargeValue); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
					    		</div>
							</div>
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
							<p class="uk-text-meta uk-text-center"><?php _e( 'Inactive options are available in the Pro Version of this plugin.', 'surbma-gpga' ); ?></p>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Cookie Options', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[popupcookiedays]"><?php _e( 'Cookie expires in', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<?php $popupcookiedaysValue = isset( $options['popupcookiedays'] ) ? $options['popupcookiedays'] : 30; ?>
									<input id="surbma_gpga_fields[popupcookiedays]" class="uk-input uk-form-width-small" type="number" name="surbma_gpga_fields[popupcookiedays]" value="<?php echo $popupcookiedaysValue; ?>" min="1" max="365" placeholder="30"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> /> days
								</div>
							</div>
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
							<p class="uk-text-meta uk-text-center"><?php _e( 'Inactive options are available in the Pro Version of this plugin.', 'surbma-gpga' ); ?></p>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Development Options', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin">
								<div class="uk-form-label"><?php _e( 'Debug Mode', 'surbma-gpga' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Always show Popup', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $popupdebugValue = isset( $options['popupdebug'] ) ? $options['popupdebug'] : 0; ?>
											<input id="surbma_gpga_fields[popupdebug]" name="surbma_gpga_fields[popupdebug]" type="checkbox" value="1" <?php checked( '1', $popupdebugValue); ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'If this option is enabled, Popup will always be visible for logged in users! Good for testing.', 'surbma-gpga' ); ?></p>
					    		</div>
							</div>
					    </div>
					    <div class="uk-card-footer">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>

					<div class="uk-card uk-card-default uk-card-hover uk-margin-bottom">
					    <div class="uk-card-header">
							<h3 class="uk-card-title"><?php _e( 'Google Analytics Settings', 'surbma-gpga' ); ?></h3>
					    </div>
					    <div class="uk-card-body">
					    	<div class="uk-margin">
								<label class="uk-form-label" for="surbma_gpga_fields[ga]"><?php _e( 'GA Tracking Code', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<?php $gaValue = isset( $options['ga'] ) ? $options['ga'] : ''; ?>
									<input id="surbma_gpga_fields[ga]" class="uk-input" type="text" name="surbma_gpga_fields[ga]" value="<?php echo $gaValue; ?>" placeholder="UA-000000-00" />
									<p class="uk-text-meta"><?php _e( 'IMPORTANT! You have to give only the UA tracking code.', 'surbma-gpga' ); ?></p>
								</div>
							</div>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'IP Anonymization', 'surbma-gpga' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Anonymize the IP address of the hit sent to Google Analytics', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $gaanonymizeipValue = isset( $options['gaanonymizeip'] ) ? $options['gaanonymizeip'] : 1; ?>
											<input id="surbma_gpga_fields[gaanonymizeip]" name="surbma_gpga_fields[gaanonymizeip]" type="checkbox" value="1" <?php checked( '1', $gaanonymizeipValue ); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'More information about IP anonymization: <a href="https://developers.google.com/analytics/devguides/collection/gtagjs/ip-anonymization" target="_blank"><u>IP anonymization with gtag.js</u></a>', 'surbma-gpga' ); ?></p>
					    		</div>
							</div>
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
								<p class="uk-text-meta uk-text-center"><?php _e( 'Inactive options are available in the Pro Version of this plugin.', 'surbma-gpga' ); ?></p>
							<?php } ?>
							<h4 class="uk-heading-divider"><?php _e( 'Tracking Script Settings', 'surbma-gpga' ); ?></h4>
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<label class="uk-form-label" for="surbma_gpga_fields[gascript]"><?php _e( 'Tracking Script Type', 'surbma-gpga' ); ?></label>
								<div class="uk-form-controls">
									<select class="uk-select" name="surbma_gpga_fields[gascript]"<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>>
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
					    	<div class="uk-margin<?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?>">
								<div class="uk-form-label"><?php _e( 'Tracking Script Loading', 'surbma-gpga' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'Load Google Analytics tracking for <strong>logged in users</strong>', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $galoadloggedinValue = isset( $options['galoadloggedin'] ) ? $options['galoadloggedin'] : 1; ?>
											<input id="surbma_gpga_fields[galoadloggedin]" name="surbma_gpga_fields[galoadloggedin]" type="checkbox" value="1" <?php checked( '1', $galoadloggedinValue ); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
										<?php _e( 'Load Google Analytics tracking on <strong>admin pages</strong>', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $galoadadminValue = isset( $options['galoadadmin'] ) ? $options['galoadadmin'] : 1; ?>
											<input id="surbma_gpga_fields[galoadadmin]" name="surbma_gpga_fields[galoadadmin]" type="checkbox" value="1" <?php checked( '1', $galoadadminValue ); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="switch-wrap">
									<?php _e( 'Load Google Analytics tracking on <strong>login pages</strong>', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $galoadloginValue = isset( $options['galoadlogin'] ) ? $options['galoadlogin'] : 1; ?>
											<input id="surbma_gpga_fields[galoadlogin]" name="surbma_gpga_fields[galoadlogin]" type="checkbox" value="1" <?php checked( '1', $galoadloginValue ); ?><?php if ( surbma_gpga_fs()->is_not_paying() ) echo ' disabled'; ?> />
											<span class="slider round"></span>
										</label>
									</p>
					    		</div>
							</div>
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
								<p class="uk-text-meta uk-text-center"><?php _e( 'Inactive options are available in the Pro Version of this plugin.', 'surbma-gpga' ); ?></p>
							<?php } ?>
					    </div>
					    <div class="uk-card-footer">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>

					<div class="uk-card uk-card-default uk-card-hover uk-margin-bottom">
					    <div class="uk-card-header">
							<h3 class="uk-card-title"><?php _e( 'General Settings', 'surbma-gpga' ); ?></h3>
					    </div>
					    <div class="uk-card-body">
					    	<div class="uk-margin">
								<div class="uk-form-label"><?php _e( 'Limited Liability', 'surbma-gpga' ); ?></div>
								<div class="uk-form-controls">
									<p class="switch-wrap">
										<?php _e( 'By using this plugin, you agree, that all responsibility is yours regarding the GDPR legal compliance', 'surbma-gpga' ); ?>:
										<label class="switch">
											<?php $limitedliabilityValue = isset( $options['limitedliability'] ) ? $options['limitedliability'] : ''; ?>
											<input id="surbma_gpga_fields[limitedliability]" name="surbma_gpga_fields[limitedliability]" type="checkbox" value="1" <?php checked( '1', $limitedliabilityValue ); ?> />
											<span class="slider round"></span>
										</label>
									</p>
									<p class="uk-text-meta"><?php _e( 'It is valid particularly for the title, description, texts of the buttons displaying in the popup and your cookie policy.', 'surbma-gpga' ); ?></p>
					    		</div>
							</div>
					    </div>
					    <div class="uk-card-footer">
							<p><input type="submit" class="uk-button uk-button-primary" value="<?php _e( 'Save Changes' ); ?>" /></p>
						</div>
					</div>
				</form>
			</div>
			<div class="uk-width-1-4@m">
				<div uk-sticky="offset: 42; bottom: #bottom">
			        <div class="uk-card uk-card-small uk-card-default">
		            	<div class="uk-card-body">
							<?php if ( $limitedliabilityValue == '' || $gaValue == '' ) { ?>
							<div class="uk-alert-danger" uk-alert>
								<h3><?php _e( 'Missing settings', 'surbma-gpga' ); ?></h3>
								<p><?php _e( 'The <strong>Google Analytics Tracking Code</strong> field and the <strong>Limited Liability</strong> setting are required for the plugin to work. Please add your GA code and accept the Limited Liability setting to start using this plugin!', 'surbma-gpga' ); ?></p>
							</div>
							<?php } ?>
							<h3 class="uk-heading-divider"><?php _e( 'Google links', 'surbma-gpga' ); ?></h3>
							<p>
								<a href="https://privacy.google.com/businesses/compliance/" target="_blank"><?php _e( 'How Google complies with data protection laws', 'surbma-gpga' ); ?></a>
								<br><a href="https://www.google.com/about/company/consentstaging.html" target="_blank"><?php _e( 'EU user consent policy', 'surbma-gpga' ); ?></a>
								<br><a href="https://www.google.com/about/company/consenthelpstaging.html" target="_blank"><?php _e( 'Help with the EU user consent policy', 'surbma-gpga' ); ?></a>
							</p>
							<h3 class="uk-heading-divider"><?php _e( 'Plugin links', 'surbma-gpga' ); ?></h3>
							<p>
								<a href="https://wordpress.org/support/plugin/surbma-gdpr-proof-google-analytics" target="_blank"><?php _e( 'Official Support Forum', 'surbma-gpga' ); ?></a>
								<br><a href="https://wordpress.org/support/plugin/surbma-gdpr-proof-google-analytics/reviews/" target="_blank"><?php _e( 'Read the Reviews (5 out of 5 stars)', 'surbma-gpga' ); ?></a>
							</p>
							<hr>
							<p>
								<strong><?php _e( 'Do you like the plugin? Please give it a five star review!', 'surbma-gpga' ); ?></strong>
								<br><a href="https://wordpress.org/support/plugin/surbma-gdpr-proof-google-analytics/reviews/#new-post" target="_blank"><?php _e( 'Create Your New Review', 'surbma-gpga' ); ?></a>
							</p>
							<?php if ( surbma_gpga_fs()->is_not_paying() ) { ?>
							<h3 class="uk-heading-divider"><?php _e( 'Get the Pro Version', 'surbma-gpga' ); ?></h3>
							<p><?php _e( 'Unlock all options and features of GDPR Proof Google Analytics plugin! Buy the Pro version and get the most out of all display options and get more control over the tracking code! All disabled options are available in the PRO version.', 'surbma-gpga' ); ?></p>
							<p><?php _e( '<div class="uk-alert-success" uk-alert>Use this special <strong>BEFOREGDPR</strong> coupon to get 50% OFF your first purchase, which is available till <strong>May 26, 2018</strong>. Hurry, GDPR is coming!</div>', 'surbma-gpga' ); ?></p>
							<p><a class="uk-button uk-button-default uk-width-1-1" href="<?php echo esc_url( get_admin_url() ); ?>admin.php?page=surbma-gpga-menu-pricing"><?php _e( 'BUY Pro Version!', 'surbma-gpga' ); ?></a></p>
							<?php } ?>
							<div class="uk-alert-primary" style="display: none;" uk-alert>
								<a class="uk-alert-close" uk-close></a>
								<h3><?php _e( 'Affiliate Program', 'surbma-gpga' ); ?></h3>
								<p><?php _e( 'Do you like this plugin? Let\'s make some money by referring new customers and get 20% commission, for the lifetime of the new customers! Good deal, hah?', 'surbma-gpga' ); ?></p>
								<p><a class="uk-button uk-button-primary uk-width-1-1" href="<?php echo esc_url( get_admin_url() ); ?>admin.php?page=surbma-gpga-menu-affiliation"><?php _e( 'Be an Affiliate!', 'surbma-gpga' ); ?></a></p>
							</div>
			            </div>
		    	    </div>
					<div class="uk-card uk-card-small uk-card-secondary uk-card-body">
		            	<p class="uk-text-right"><?php _e( 'License: GPLv2', 'surbma-gpga' ); ?></p>
		        	</div>
				</div>
			</div>
		</div>
		<div class="uk-margin-bottom" id="bottom"></div>
	</div>
	<?php surbma_admin_footer(); ?>
</div>
<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function surbma_gpga_fields_validate( $input ) {
	global $popupbutton1style_options;
	global $popupbutton2style_options;
	global $popupbuttonsize_options;
	global $popupbuttonalignment_options;
	global $popup_themes;
	global $ga_script;

	// Say our text option must be safe text with no HTML tags
	$input['popuptitle'] = wp_filter_nohtml_kses( $input['popuptitle'] );
	$input['popupcookiepolicytext'] = wp_filter_nohtml_kses( $input['popupcookiepolicytext'] );
	$input['popupbutton1text'] = wp_filter_nohtml_kses( $input['popupbutton1text'] );
	$input['popupbutton2text'] = wp_filter_nohtml_kses( $input['popupbutton2text'] );
	$input['ga'] = wp_filter_nohtml_kses( $input['ga'] );

	// Say our textarea option must be safe text with the allowed tags for posts
	$input['popuptext'] = wp_filter_post_kses( $input['popuptext'] );

	// Say our input option must be only numbers
	$input['popupcookiedays'] = preg_replace( "/[^0-9]/", "", $input['popupcookiedays'] );

	if ( !isset( $input['popupdarkmode'] ) )
		$input['popupdarkmode'] = null;
	$input['popupdarkmode'] = ( $input['popupdarkmode'] == 1 ? 1 : 0 );

	if ( !isset( $input['popupcentertext'] ) )
		$input['popupcentertext'] = null;
	$input['popupcentertext'] = ( $input['popupcentertext'] == 1 ? 1 : 0 );

	if ( !isset( $input['popupverticalcenter'] ) )
		$input['popupverticalcenter'] = null;
	$input['popupverticalcenter'] = ( $input['popupverticalcenter'] == 1 ? 1 : 0 );

	if ( !isset( $input['popuplarge'] ) )
		$input['popuplarge'] = null;
	$input['popuplarge'] = ( $input['popuplarge'] == 1 ? 1 : 0 );

	if ( !isset( $input['popupdebug'] ) )
		$input['popupdebug'] = null;
	$input['popupdebug'] = ( $input['popupdebug'] == 1 ? 1 : 0 );

	if ( !isset( $input['gaanonymizeip'] ) )
		$input['gaanonymizeip'] = null;
	$input['gaanonymizeip'] = ( $input['gaanonymizeip'] == 1 ? 1 : 0 );

	if ( !isset( $input['galoadloggedin'] ) )
		$input['galoadloggedin'] = null;
	$input['galoadloggedin'] = ( $input['galoadloggedin'] == 1 ? 1 : 0 );

	if ( !isset( $input['galoadadmin'] ) )
		$input['galoadadmin'] = null;
	$input['galoadadmin'] = ( $input['galoadadmin'] == 1 ? 1 : 0 );

	if ( !isset( $input['galoadlogin'] ) )
		$input['galoadlogin'] = null;
	$input['galoadlogin'] = ( $input['galoadlogin'] == 1 ? 1 : 0 );

	if ( !isset( $input['limitedliability'] ) )
		$input['limitedliability'] = null;
	$input['limitedliability'] = ( $input['limitedliability'] == 1 ? 1 : 0 );

	// Our select option must actually be in our array of select options
	if ( !array_key_exists( $input['popupbutton1style'], $popupbutton1style_options ) )
		$input['popupbutton1style'] = null;
	if ( !array_key_exists( $input['popupbutton2style'], $popupbutton2style_options ) )
		$input['popupbutton2style'] = null;
	if ( !array_key_exists( $input['popupbuttonsize'], $popupbuttonsize_options ) )
		$input['popupbuttonsize'] = null;
	if ( !array_key_exists( $input['popupbuttonalignment'], $popupbuttonalignment_options ) )
		$input['popupbuttonalignment'] = null;
	if ( !array_key_exists( $input['popupthemes'], $popup_themes ) )
		$input['popupthemes'] = null;
	if ( !array_key_exists( $input['gascript'], $ga_script ) )
		$input['gascript'] = null;

	return $input;
}
