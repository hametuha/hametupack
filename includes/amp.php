<?php
/**
 * AMP helper
 *
 * @package hametupack
 */


/**
 * Change sharing HTML if amp requested.
 *
 * @param string $markup
 * @param array  $sharing_enabled
 * @return string
 */
add_filter( 'jetpack_sharing_display_markup', function( $markup, $sharing_enabled ) {
	if ( empty( $sharing_enabled ) ) {
		return $markup;
	}
	$markup = preg_replace_callback( '#<\!-- not supported: ([^ ]+) -->#', function( $matches ) {
		return apply_filters( 'hametupack_amp_share_button', $matches[0], $matches[1] );
	}, $markup );
	return $markup;
}, 11, 2 );

/**
 * Fix button layout
 */
add_action( 'amp_post_template_css', function() {
	$asset_pass = plugin_dir_url( __DIR__ ) . 'src/img/';
	echo <<<CSS
.amp-social-share-hatebu{
	background:#01A4DE url("{$asset_pass}hatenabookmark-logomark.svg") center center no-repeat;
	background-size: 60px 44px;
}
CSS;

} );
