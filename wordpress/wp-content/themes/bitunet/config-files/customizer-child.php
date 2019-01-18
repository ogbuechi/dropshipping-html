<?php
/**
 * Theme Customizer.
 *
 * @package Bitunet-child
 */


//add css files
add_filter('kava-theme/dynamic_css/options', 'bitunet_child_theme_css_files_add');

//rewrite default customizer options
add_filter('kava-theme/customizer/options','bitunet_default_customizer_options_rewrite');

function bitunet_default_customizer_options_rewrite( $args ) {
	$new_options = array (
		'accent_color' => array(
			'title'   => esc_html__( 'Accent color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#3821ff',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'primary_text_color' => array(
			'title'   => esc_html__( 'Primary Text color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#898989',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'secondary_text_color' => array(
			'title'   => esc_html__( 'Secondary Text color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#a1a2a4',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'invert_text_color' => array(
			'title'   => esc_html__( 'Invert Text color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#ffffff',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'link_color' => array(
			'title'   => esc_html__( 'Link color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#3821ff',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'link_hover_color' => array(
			'title'   => esc_html__( 'Link hover color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#3b3d42',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'h1_color' => array(
			'title'   => esc_html__( 'H1 color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#131921',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'h2_color' => array(
			'title'   => esc_html__( 'H2 color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#131921',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'h3_color' => array(
			'title'   => esc_html__( 'H3 color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#131921',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'h4_color' => array(
			'title'   => esc_html__( 'H4 color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#131921',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'h5_color' => array(
			'title'   => esc_html__( 'H5 color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#131921',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		'h6_color' => array(
			'title'   => esc_html__( 'H6 color', 'bitunet' ),
			'section' => 'color_scheme',
			'default' => '#131921',
			'field'   => 'hex_color',
			'type'    => 'control',
		),
		/** `Typography Settings` panel */
		'typography' => array(
			'title'       => esc_html__( 'Typography', 'bitunet' ),
			'description' => esc_html__( 'Configure typography settings', 'bitunet' ),
			'priority'    => 45,
			'type'        => 'panel',
		),

		/** `Body text` section */
		'body_typography' => array(
			'title'       => esc_html__( 'Body text', 'bitunet' ),
			'priority'    => 5,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'body_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'body_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'body_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'body_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'body_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'body_typography',
			'default' => '300',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'body_font_size' => array(
			'title'       => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'     => 'body_typography',
			'default'     => '16',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 6,
				'max'  => 50,
				'step' => 1,
			),
			'type' => 'control',
		),
		'body_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'body_typography',
			'default'     => '1.6',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'body_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'body_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'body_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'body_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'body_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'body_typography',
			'default' => 'left',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `H1 Heading` section */
		'h1_typography' => array(
			'title'       => esc_html__( 'H1 Heading', 'bitunet' ),
			'priority'    => 10,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'h1_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'h1_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'h1_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'h1_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'h1_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'h1_typography',
			'default' => '600',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'h1_font_size' => array(
			'title'       => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'     => 'h1_typography',
			'default'     => '38',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h1_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'kava' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'h1_typography',
			'default'     => '1.2',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'h1_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'h1_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h1_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'h1_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'h1_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'h1_typography',
			'default' => 'inherit',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `H2 Heading` section */
		'h2_typography' => array(
			'title'       => esc_html__( 'H2 Heading', 'bitunet' ),
			'priority'    => 15,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'h2_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'h2_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'h2_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'h2_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'h2_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'h2_typography',
			'default' => '600',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'h2_font_size' => array(
			'title'       => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'     => 'h2_typography',
			'default'     => '35',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h2_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'h2_typography',
			'default'     => '1.2',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'h2_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet'),
			'section'     => 'h2_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h2_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'h2_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'h2_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'h2_typography',
			'default' => 'inherit',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `H3 Heading` section */
		'h3_typography' => array(
			'title'       => esc_html__( 'H3 Heading', 'bitunet' ),
			'priority'    => 20,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'h3_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'h3_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'h3_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'h3_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'h3_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'h3_typography',
			'default' => '600',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'h3_font_size' => array(
			'title'       => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'     => 'h3_typography',
			'default'     => '24',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h3_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'h3_typography',
			'default'     => '1.4',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'h3_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'h3_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h3_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'h3_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'h3_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'h3_typography',
			'default' => 'inherit',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `H4 Heading` section */
		'h4_typography' => array(
			'title'       => esc_html__( 'H4 Heading', 'bitunet' ),
			'priority'    => 25,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'h4_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'h4_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'h4_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'h4_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'h4_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'h4_typography',
			'default' => '600',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'h4_font_size' => array(
			'title'       => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'     => 'h4_typography',
			'default'     => '20',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h4_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'h4_typography',
			'default'     => '1.4',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'h4_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'h4_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h4_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'h4_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'h4_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'h4_typography',
			'default' => 'inherit',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `H5 Heading` section */
		'h5_typography' => array(
			'title'       => esc_html__( 'H5 Heading', 'bitunet' ),
			'priority'    => 30,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'h5_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'h5_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'h5_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'h5_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'h5_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'h5_typography',
			'default' => '600',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'h5_font_size' => array(
			'section'     => 'h5_typography',
			'default'     => '18',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h5_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'h5_typography',
			'default'     => '1.5',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'h5_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'h5_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h5_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'h5_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'h5_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'h5_typography',
			'default' => 'inherit',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `H6 Heading` section */
		'h6_typography' => array(
			'title'       => esc_html__( 'H6 Heading', 'bitunet' ),
			'priority'    => 35,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'h6_font_family' => array(
			'title'   => esc_html__( 'Font Family', 'bitunet' ),
			'section' => 'h6_typography',
			'default' => 'Montserrat, sans-serif',
			'field'   => 'fonts',
			'type'    => 'control',
		),
		'h6_font_style' => array(
			'title'   => esc_html__( 'Font Style', 'bitunet' ),
			'section' => 'h6_typography',
			'default' => 'normal',
			'field'   => 'select',
			'choices' => kava_get_font_styles(),
			'type'    => 'control',
		),
		'h6_font_weight' => array(
			'title'   => esc_html__( 'Font Weight', 'bitunet' ),
			'section' => 'h6_typography',
			'default' => '600',
			'field'   => 'select',
			'choices' => kava_get_font_weight(),
			'type'    => 'control',
		),
		'h6_font_size' => array(
			'title'       => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'     => 'h6_typography',
			'default'     => '16',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h6_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'h6_typography',
			'default'     => '1.5',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'h6_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'h6_typography',
			'default'     => '0',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'h6_character_set' => array(
			'title'   => esc_html__( 'Character Set', 'bitunet' ),
			'section' => 'h6_typography',
			'default' => 'latin',
			'field'   => 'select',
			'choices' => kava_get_character_sets(),
			'type'    => 'control',
		),
		'h6_text_align' => array(
			'title'   => esc_html__( 'Text Align', 'bitunet' ),
			'section' => 'h6_typography',
			'default' => 'inherit',
			'field'   => 'select',
			'choices' => kava_get_text_aligns(),
			'type'    => 'control',
		),

		/** `Button` section */
		'button_typography' => array(
			'title'       => esc_html__( 'Button', 'bitunet' ),
			'priority'    => 55,
			'panel'       => 'typography',
			'type'        => 'section',
		),
		'button_font_family' => array(
			'title'           => esc_html__( 'Font Family', 'bitunet' ),
			'section'         => 'button_typography',
			'default'         => 'Montserrat, sans-serif',
			'field'           => 'fonts',
			'type'            => 'control',
		),
		'button_font_style' => array(
			'title'           => esc_html__( 'Font Style', 'bitunet' ),
			'section'         => 'button_typography',
			'default'         => 'normal',
			'field'           => 'select',
			'choices'         => kava_get_font_styles(),
			'type'            => 'control',
		),
		'button_font_weight' => array(
			'title'           => esc_html__( 'Font Weight', 'bitunet' ),
			'section'         => 'button_typography',
			'default'         => '600',
			'field'           => 'select',
			'choices'         => kava_get_font_weight(),
			'type'            => 'control',
		),
		'button_font_size' => array(
			'title'           => esc_html__( 'Font Size, px', 'bitunet' ),
			'section'         => 'button_typography',
			'default'         => '14',
			'field'           => 'number',
			'input_attrs'     => array(
				'min'  => 6,
				'max'  => 50,
				'step' => 1,
			),
			'type'            => 'control',
		),
		'button_line_height' => array(
			'title'       => esc_html__( 'Line Height', 'bitunet' ),
			'description' => esc_html__( 'Relative to the font-size of the element', 'bitunet' ),
			'section'     => 'button_typography',
			'default'     => '1',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => 1.0,
				'max'  => 3.0,
				'step' => 0.1,
			),
			'type' => 'control',
		),
		'button_letter_spacing' => array(
			'title'       => esc_html__( 'Letter Spacing, px', 'bitunet' ),
			'section'     => 'button_typography',
			'default'     => '1',
			'field'       => 'number',
			'input_attrs' => array(
				'min'  => -10,
				'max'  => 10,
				'step' => 1,
			),
			'type' => 'control',
		),
		'button_character_set' => array(
			'title'           => esc_html__( 'Character Set', 'bitunet' ),
			'section'         => 'button_typography',
			'default'         => 'latin',
			'field'           => 'select',
			'choices'         => kava_get_character_sets(),
			'type'            => 'control',
		),

	);
	$args['options'] = array_merge($args['options'], $new_options);
	return $args;
}

function bitunet_child_theme_css_files_add( $args ) {
	array_push($args['css_files'], get_theme_file_path( 'assets/css/dynamic/crypto.css' ));
	return $args;
}

