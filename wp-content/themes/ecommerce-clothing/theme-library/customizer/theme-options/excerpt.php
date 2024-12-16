<?php

/**
 * Excerpt
 *
 * @package ecommerce_clothing
 */

$wp_customize->add_section(
	'ecommerce_clothing_excerpt_options',
	array(
		'panel' => 'ecommerce_clothing_theme_options',
		'title' => esc_html__( 'Excerpt', 'ecommerce-clothing' ),
	)
);

// Excerpt - Excerpt Length.
$wp_customize->add_setting(
	'ecommerce_clothing_excerpt_length',
	array(
		'default'           => 20,
		'sanitize_callback' => 'absint',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control(
	'ecommerce_clothing_excerpt_length',
	array(
		'label'       => esc_html__( 'Excerpt Length (no. of words)', 'ecommerce-clothing' ),
		'section'     => 'ecommerce_clothing_excerpt_options',
		'settings'    => 'ecommerce_clothing_excerpt_length',
		'type'        => 'number',
		'input_attrs' => array(
			'min'  => 10,
			'max'  => 200,
			'step' => 1,
		),
	)
);