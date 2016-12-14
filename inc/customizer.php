<?php

/**
 * Create Site layout setting and template option control
 */
function ee_baskerville_child_new_customizer_settings( $wp_customize ) {
	// Add layout section
	$wp_customize->add_section(
		'ee_baskerville_child_site_layout_section',
		array(
			'title' => __( 'Site Layout', 'baskerville' ),
			'description' => __( 'You can control the layout of all single events, posts, and pages with this setting.', 'baskerville' ),
			'priority' => 120,
		)
	);
	// Add setting
	$wp_customize->add_setting( 'ee_baskerville_child_site_layout_setting' );
	// Add control
	$wp_customize->add_control(
		'ee_site_layout_radio',
		array(
			'label'    => __( 'Template layout', 'baskerville' ),
			'section'  => 'ee_baskerville_child_site_layout_section',
			'settings' => 'ee_baskerville_child_site_layout_setting',
			'type'     => 'radio',
			'choices'  => array(
				'fleft'  => '2 columns',
				'full-width' => '1 column full width',
				'center' => '1 column medium width'
			),
		)
	);
}
add_action( 'customize_register', 'ee_baskerville_child_new_customizer_settings' );
