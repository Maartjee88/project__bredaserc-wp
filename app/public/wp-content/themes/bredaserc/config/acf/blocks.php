<?php

acf_add_local_field_group(array(
	'key' => 'group_60575fd0a5993',
	'title' => 'Pagina blokken',
	'fields' => array(
		array(
			'key' => 'field_60575fe5e0b45',
			'label' => 'Blokken',
			'name' => 'blocks',
			'type' => 'flexible_content',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layouts' => array(
				'layout_60575ff9284c4' => array(
					'key' => 'layout_60575ff9284c4',
					'name' => 'wysiwyg',
					'label' => 'Tekstblok',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_60576701e0b47',
							'label' => 'Achtergrond',
							'name' => 'wysiywg_bg',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'white' => 'Wit',
								'grey' => 'Grijs',
							),
							'default_value' => 'white',
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
						array(
							'key' => 'field_605766c0e0b46',
							'label' => 'Tekstveld',
							'name' => 'wysiwyg_text',
							'type' => 'wysiwyg',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'tabs' => 'all',
							'toolbar' => 'full',
							'media_upload' => 0,
							'delay' => 0,
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_6057675ee0b48' => array(
					'key' => 'layout_6057675ee0b48',
					'name' => 'announcements',
					'label' => 'Mededelingen',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_60576787e0b49',
							'label' => 'Achtergrond',
							'name' => 'announcements_bg',
							'type' => 'select',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'choices' => array(
								'white' => 'Wit',
								'grey' => 'Grijs',
							),
							'default_value' => 'white',
							'allow_null' => 0,
							'multiple' => 0,
							'ui' => 0,
							'return_format' => 'value',
							'ajax' => 0,
							'placeholder' => '',
						),
						array(
							'key' => 'field_605767c9e0b4a',
							'label' => 'Mededelingen',
							'name' => 'announcements_content',
							'type' => 'repeater',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'collapsed' => '',
							'min' => 0,
							'max' => 0,
							'layout' => 'block',
							'button_label' => 'Nieuwe mededeling',
							'sub_fields' => array(
								array(
									'key' => 'field_60576825e0b4c',
									'label' => 'Afbeelding',
									'name' => 'announcements_content_img',
									'type' => 'image',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
									'preview_size' => 'medium',
									'library' => 'all',
									'min_width' => '',
									'min_height' => '',
									'min_size' => '',
									'max_width' => '',
									'max_height' => '',
									'max_size' => '',
									'mime_types' => '',
								),
								array(
									'key' => 'field_60576857e0b4e',
									'label' => 'Knop',
									'name' => 'announcements_content_btn',
									'type' => 'link',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'return_format' => 'array',
								),
								array(
									'key' => 'field_605767e4e0b4b',
									'label' => 'Titel',
									'name' => 'announcements_content_title',
									'type' => 'text',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'prepend' => '',
									'append' => '',
									'maxlength' => '',
								),
								array(
									'key' => 'field_6057683ee0b4d',
									'label' => 'Tekst',
									'name' => 'announcements_content_text',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 1,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => '',
									'new_lines' => 'br',
								),
							),
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_60576891e0b4f' => array(
					'key' => 'layout_60576891e0b4f',
					'name' => 'slider',
					'label' => 'Slider',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_605768bee0b50',
							'label' => 'Titel',
							'name' => 'slider_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_605768d5e0b51',
							'label' => 'Logo\'s',
							'name' => 'slider_logos',
							'type' => 'gallery',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'insert' => 'append',
							'library' => 'all',
							'min' => 6,
							'max' => '',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
						array(
							'key' => 'field_60576928e0b52',
							'label' => 'Knop',
							'name' => 'slider_btn',
							'type' => 'link',
							'instructions' => '',
							'required' => 0,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
						),
					),
					'min' => '',
					'max' => '',
				),
				'layout_60576963e0b53' => array(
					'key' => 'layout_60576963e0b53',
					'name' => 'sign-up',
					'label' => 'Aanmeldblok',
					'display' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_60576a17e0b54',
							'label' => 'Titel',
							'name' => 'sign-up_title',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_60576a4de0b55',
							'label' => 'Tekst',
							'name' => 'sign-up_text',
							'type' => 'textarea',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'maxlength' => '',
							'rows' => '',
							'new_lines' => 'br',
						),
						array(
							'key' => 'field_60576a76e0b57',
							'label' => 'Formulier',
							'name' => 'sign-up_form',
							'type' => 'text',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'default_value' => '',
							'placeholder' => '',
							'prepend' => '',
							'append' => '',
							'maxlength' => '',
						),
						array(
							'key' => 'field_60576a64e0b56',
							'label' => 'Afbeelding',
							'name' => 'sign-up_img',
							'type' => 'image',
							'instructions' => '',
							'required' => 1,
							'conditional_logic' => 0,
							'wrapper' => array(
								'width' => '',
								'class' => '',
								'id' => '',
							),
							'return_format' => 'array',
							'preview_size' => 'medium',
							'library' => 'all',
							'min_width' => '',
							'min_height' => '',
							'min_size' => '',
							'max_width' => '',
							'max_height' => '',
							'max_size' => '',
							'mime_types' => '',
						),
					),
					'min' => '',
					'max' => '',
				),
			),
			'button_label' => 'Nieuw blok',
			'min' => '',
			'max' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 1,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'discussion',
		2 => 'comments',
	),
	'active' => true,
	'description' => '',
));
