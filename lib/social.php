<?php

// Social Share Buttons Styles
function surbma_gpga_social_buttons_scripts() {
	wp_register_style( 'surbma-gpga-social', plugins_url( '', dirname(__FILE__) ) . '/css/social.css' );
}
add_action( 'wp_enqueue_scripts', 'surbma_gpga_social_buttons_scripts' );

// Social Share Buttons
function surbma_gpga_social_buttons_show() {
	$divi_page_builder_used = wp_basename( get_bloginfo( 'template_directory' ) ) == 'Divi' ? et_pb_is_pagebuilder_used( get_the_ID() ) : false;

	$options = get_option( 'surbma_gpga_social_fields' );

	$license = 'all';
	if ( surbma_gpga_fs()->is_not_paying() && !surbma_gpga_fs()->is_trial() ) {
		$license = 'free';
	}

	if( isset( $options['ssbposts'] ) && $options['ssbposts'] == 1 && is_singular( 'post' ) && !$divi_page_builder_used ) {
		wp_enqueue_style( 'surbma-gpga-social' );
		add_filter( 'the_content', 'surbma_gpga_social_add_share_buttons', 20 );
	}
	if( $license != 'free' && isset( $options['ssbpages'] ) && $options['ssbpages'] == 1 && is_page() && !is_page_template() && !$divi_page_builder_used ) {
		wp_enqueue_style( 'surbma-gpga-social' );
		add_filter( 'the_content', 'surbma_gpga_social_add_share_buttons', 20 );
	}
	if( $license != 'free' && isset( $options['ssbcpts'] ) && $options['ssbcpts'] != '' ) {
		$includeposttypes = $options['ssbcpts'] ? explode( ',', $options['ssbcpts'] ) : '';
		if( is_singular( $includeposttypes ) && !$divi_page_builder_used ) {
			wp_enqueue_style( 'surbma-gpga-social' );
			add_filter( 'the_content', 'surbma_gpga_social_add_share_buttons', 20 );
		}
	}
}
add_action( 'wp_head', 'surbma_gpga_social_buttons_show' );

function surbma_gpga_social_add_share_buttons( $content ) {
	$options = get_option( 'surbma_gpga_social_fields' );

	$ssbfacebookValue = isset( $options['ssbfacebook'] ) ? $options['ssbfacebook'] : 0;
	$ssbtwitterValue = isset( $options['ssbtwitter'] ) ? $options['ssbtwitter'] : 0;
	$ssblinkedinValue = isset( $options['ssblinkedin'] ) ? $options['ssblinkedin'] : 0;
	$ssbpinterestValue = isset( $options['ssbpinterest'] ) ? $options['ssbpinterest'] : 0;
	$ssbemailValue = isset( $options['ssbemail'] ) ? $options['ssbemail'] : 0;
	$ssbcontentlocationValue = isset( $options['ssbcontentlocation'] ) ? $options['ssbcontentlocation'] : 'after';
	$ssbstyleValue = isset( $options['ssbstyle'] ) ? $options['ssbstyle'] : 'simple-colored';

	if ( is_main_query() && in_the_loop() ) {
		if ( $ssbfacebookValue == '1' || $ssbtwitterValue == '1' || $ssblinkedinValue == '1' || $ssbpinterestValue == '1' || $ssbemailValue == '1' ) {

			global $post;

			$url = get_permalink();

			$fblike_button = '';
			$tweet_button = '';
			$linkedin_button = '';
			$pinterest_button = '';
			$email_button = '';

			if ( $ssbfacebookValue == '1' )
				$fblike_button = '<li class="surbma-gpga-facebook"><a href="https://www.facebook.com/sharer/sharer.php?u='.$url.'" target="_blank"><span></span></a></li>';

			if ( $ssbtwitterValue == '1' )
				$tweet_button = '<li class="surbma-gpga-twitter"><a href="https://twitter.com/home?status='.$url.'" target="_blank"><span></span></a></li>';

			if ( $ssblinkedinValue == '1' )
				$linkedin_button = '<li class="surbma-gpga-linkedin"><a href="https://www.linkedin.com/shareArticle?mini=true&url='.$url.'" target="_blank"><span></span></a></li>';

			if ( $ssbpinterestValue == '1' )
				$pinterest_button = '<li class="surbma-gpga-pinterest"><a href="https://pinterest.com/pin/create/button/?url='.$url.'" target="_blank"><span></span></a></li>';

			if ( $ssbemailValue == '1' )
				$email_button = '<li class="surbma-gpga-email"><a href="mailto:?body='.$url.'"><span></span></a></li>';

			$social_buttons = '<ul class="surbma-gpga-share-buttons surbma-gpga-' . $ssbstyleValue . '">' . $fblike_button . $tweet_button . $linkedin_button . $pinterest_button . $email_button . '</ul>';

			if ( $ssbcontentlocationValue == 'before' ) {
				$content = $social_buttons . $content;
			}
			elseif ( $ssbcontentlocationValue == 'after' ) {
				$content = $content . $social_buttons;
			}
			else {
				$content = $social_buttons . $content . $social_buttons;
			}

		}
	}
	return $content;
}
