<?php
/**
 * Plugin Name: Syntax Tomorrow
 * Plugin URI: http://wordpress.org/plugins/
 * Description: Tomorrow Theme for the SyntaxHighligher Evolved plugin
 * Author: Jeremy Herve
 * Version: 1.0
 * Author URI: https://jeremy.hu
 * License: GPL2+
 */

/**
 * Learn how to build your own syntaxhighlighter theme here:
 * http://www.viper007bond.com/wordpress-plugins/syntaxhighlighter/adding-a-new-theme/
 */

/**
 * Register our new stylesheet, on the site and in the admin.
 */
function jeherve_register_tomorrow_style() {
	wp_register_style( 'syntaxhighlighter-theme-tomorrownight',
		plugins_url( 'night.css' , __FILE__ ),
		array( 'syntaxhighlighter-core' ),
		'1.0'
	);
}
add_action( 'wp_enqueue_scripts', 'jeherve_register_tomorrow_style' );
add_action( 'admin_enqueue_scripts', 'jeherve_register_tomorrow_style' );

/**
 * Add that new stylesheet as an option for the SyntaxHighligher Evolved plugin.
 *
 * @param array $themes Array of SyntaxHighligther themes.
 */
function jeherve_new_syntax_theme( $themes ) {
	$themes['tomorrownight'] = 'Tomorrow Night';

	return $themes;
}
add_filter( 'syntaxhighlighter_themes', 'jeherve_new_syntax_theme' );
