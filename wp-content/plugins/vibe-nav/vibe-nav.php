<?php
/**
 * Plugin Name: Vibe Nav
 * Description: Sticky CTA that morphs into a minimal nav bar with timeline reveal effects.
 * Version: 0.1.0
 * Author: build-kismetdursun
 */

if (!defined('ABSPATH')) {
	exit;
}

function vibe_nav_enqueue_assets() {
	if (!is_front_page()) {
		return;
	}

	$plugin_url = plugin_dir_url(__FILE__);
	$plugin_path = plugin_dir_path(__FILE__);

	$css_path = $plugin_path . 'assets/vibe-nav.css';
	$js_path = $plugin_path . 'assets/vibe-nav.js';

	wp_enqueue_style(
		'vibe-nav',
		$plugin_url . 'assets/vibe-nav.css',
		array(),
		filemtime($css_path)
	);

	wp_enqueue_script(
		'vibe-nav',
		$plugin_url . 'assets/vibe-nav.js',
		array(),
		filemtime($js_path),
		true
	);

	wp_add_inline_script(
		'vibe-nav',
		'window.VibeNavSettings = ' . wp_json_encode(
			array(
				'ctaSelector' => '.vibe-sticky-cta',
				'ctaTextMatch' => 'VIEW CASE STUDIES',
				'pinThreshold' => 400,
				'expandThreshold' => 600,
				'navLinks' => array(
					array('label' => 'Home', 'href' => '/'),
					array('label' => 'Case Studies', 'href' => '/projects'),
					array('label' => 'Contact', 'href' => '#contact'),
				),
			)
		),
		'before'
	);
}
add_action('wp_enqueue_scripts', 'vibe_nav_enqueue_assets');
