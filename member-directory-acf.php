if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_5925f59dcd043',
	'title' => 'Member Directory',
	'fields' => array (
		array (
			'key' => 'field_5926f7b639920',
			'label' => 'Display Options',
			'name' => 'display_options',
			'type' => 'divider',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'custom_css' => '',
			'font_size' => 14,
		),
		array (
			'key' => 'field_5925f5bb11208',
			'label' => 'Member Type',
			'name' => 'member_type',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'member_type',
			'field_type' => 'radio',
			'allow_null' => 0,
			'add_term' => 0,
			'save_terms' => 1,
			'load_terms' => 1,
			'return_format' => 'id',
			'show_column' => 1,
			'show_column_weight' => 200,
			'multiple' => 0,
		),
		array (
			'key' => 'field_5925f77153b84',
			'label' => 'Featured?',
			'name' => 'is_featured_member',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'message' => 'Display more often on page 1 of the member directory',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'show_column' => 1,
			'show_column_weight' => 300,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 1,
		),
		array (
			'key' => 'field_5926f7d639921',
			'label' => 'Text Fields',
			'name' => 'text_fields',
			'type' => 'divider',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'custom_css' => '',
			'font_size' => 14,
		),
		array (
			'key' => 'field_5926036eaf286',
			'label' => 'Summary Statement',
			'name' => 'summary_statement',
			'type' => 'text',
			'instructions' => 'Something short, pithy, and compelling. Used on pages that display many members.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
			'show_column' => 1,
			'show_column_weight' => 600,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_59260343af285',
			'label' => 'Excerpt',
			'name' => 'excerpt',
			'type' => 'textarea',
			'instructions' => 'Just the facts, ma\'am. Used at the top of a member\'s profile page.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => 'wpautop',
		),
		array (
			'key' => 'field_5926f7e639922',
			'label' => 'Contact Information',
			'name' => 'contact_information',
			'type' => 'divider',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'custom_css' => '',
			'font_size' => 14,
		),
		array (
			'key' => 'field_58f42af7dd6e1',
			'label' => 'Inherit Shared Contact Info?',
			'name' => 'contact_info_inheritance',
			'type' => 'true_false',
			'instructions' => 'Do you want to display contact information from another organization, project, or person on this member\'s profile page?

For example, use this to show the main telephone number of employer on an employee\'s page.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'show_column' => 0,
			'show_column_weight' => 0,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_58f42a50dd6df',
			'label' => 'Inherit From Who?',
			'name' => 'contact_info_inherit_from_id',
			'type' => 'post_object',
			'instructions' => 'Who is the network member has the shared contact information you wish to display? For example, select an employer.',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array (
				0 => 'member',
			),
			'taxonomy' => array (
			),
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'id',
			'show_column' => 0,
			'show_column_weight' => 0,
			'ui' => 1,
		),
		array (
			'key' => 'field_58f42aa2dd6e0',
			'label' => 'Inherit Which Info?',
			'name' => 'contact_info_inherit_which_fields',
			'type' => 'checkbox',
			'instructions' => 'Which shared contact information should be displayed?',
			'required' => 1,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'email' => 'Email',
				'phone' => 'Phone',
				'websites' => 'Websites/Social',
				'address' => 'Address',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array (
			),
			'layout' => 'horizontal',
			'toggle' => 1,
			'return_format' => 'value',
			'show_column' => 0,
			'show_column_weight' => 0,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_58f42c12dd6e3',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'email',
			'instructions' => 'Preferred email address',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '!=',
						'value' => '1',
					),
				),
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '==',
						'value' => '1',
					),
					array (
						'field' => 'field_58f42aa2dd6e0',
						'operator' => '!=',
						'value' => 'email',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '<i class="fa fa-envelope fa-fw" aria-hidden="true"></i>',
			'append' => '',
			'show_column' => 1,
			'show_column_weight' => 400,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_58f42ba1dd6e2',
			'label' => 'Phone',
			'name' => 'phone',
			'type' => 'text',
			'instructions' => 'Preferred telephone number',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '!=',
						'value' => '1',
					),
				),
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '==',
						'value' => '1',
					),
					array (
						'field' => 'field_58f42aa2dd6e0',
						'operator' => '!=',
						'value' => 'phone',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '(###) ###-####',
			'prepend' => '<i class="fa fa-phone fa-fw" aria-hidden="true"></i>',
			'append' => '',
			'maxlength' => '',
			'show_column' => 1,
			'show_column_weight' => 500,
			'allow_quickedit' => 1,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_58f42c90dd6e5',
			'label' => 'Websites / Social',
			'name' => 'websites',
			'type' => 'repeater',
			'instructions' => 'Relevant website and social media links',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '!=',
						'value' => '1',
					),
				),
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '==',
						'value' => '1',
					),
					array (
						'field' => 'field_58f42aa2dd6e0',
						'operator' => '!=',
						'value' => 'websites',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => 'field_58f42ca3dd6e6',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => 'Add Website',
			'sub_fields' => array (
				array (
					'key' => 'field_58f42ca3dd6e6',
					'label' => 'URL',
					'name' => 'url',
					'type' => 'url',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => 'http://',
				),
				array (
					'key' => 'field_5925eb2a3821e',
					'label' => 'Type',
					'name' => 'type',
					'type' => 'radio',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'www' => 'Website',
						'twitter' => 'Twitter',
						'facebook' => 'Facebook',
						'linkedin' => 'LinkedIn',
						'youtube' => 'YouTube',
						'vimeo' => 'Vimeo',
						'insta' => 'Instagram',
						'flickr' => 'Flickr',
						'wiki' => 'Wikipedia',
						'blog' => 'Blog/RSS',
						'pdf' => 'Download PDF',
						'file' => 'Download File',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'www',
					'layout' => 'horizontal',
					'return_format' => 'value',
				),
			),
		),
		array (
			'key' => 'field_58f42c3edd6e4',
			'label' => 'Address',
			'name' => 'address',
			'type' => 'google_map',
			'instructions' => 'Preferred mailing or physical address',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '!=',
						'value' => '1',
					),
				),
				array (
					array (
						'field' => 'field_58f42af7dd6e1',
						'operator' => '==',
						'value' => '1',
					),
					array (
						'field' => 'field_58f42aa2dd6e0',
						'operator' => '!=',
						'value' => 'address',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '40.439722',
			'center_lng' => '-79.976389',
			'zoom' => 11,
			'height' => '',
		),
		array (
			'key' => 'field_5926f7f339923',
			'label' => 'Affiliations/Relationships',
			'name' => 'contact_information_copy',
			'type' => 'divider',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'custom_css' => '',
			'font_size' => 14,
		),
		array (
			'key' => 'field_592623b64648b',
			'label' => 'Organizations',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_5927089b86b1b',
			'label' => 'Display Order',
			'name' => 'affiliated_orgs_display',
			'type' => 'radio',
			'instructions' => 'How should these organizational affiliations/relationships be displayed on this member\'s profile page?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'custom' => 'custom order as below',
				'alpha' => 'alphabetically',
				'recent' => 'most recently updated',
				'none' => 'don\'t display these AT ALL',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'custom',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'show_column' => 0,
			'show_column_weight' => 0,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_59261cf49f8bd',
			'label' => 'Affiliated/Related Organizations',
			'name' => 'affiliated_orgs',
			'type' => 'repeater',
			'instructions' => 'Add this member\'s affiliated organizations, such as their employer (if a person) or their fiscal sponsor (if a project) or their partners (if an organization)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Affiliated/Related Organization',
			'sub_fields' => array (
				array (
					'key' => 'field_59261d0d9f8be',
					'label' => 'Link Type',
					'name' => 'link_type',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'internal' => 'Internal',
						'external' => 'External',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
				),
				array (
					'key' => 'field_59261d419f8bf',
					'label' => 'Member in the Directory',
					'name' => 'internal_id',
					'type' => 'post_object',
					'instructions' => 'e.g., current employer',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59261d0d9f8be',
								'operator' => '==',
								'value' => 'internal',
							),
						),
					),
					'wrapper' => array (
						'width' => '45',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'member',
					),
					'taxonomy' => array (
						0 => 'member_type:organization',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'id',
					'ui' => 1,
				),
				array (
					'key' => 'field_59261dcb7e9c4',
					'label' => 'Non-Directory Content',
					'name' => 'external_text',
					'type' => 'text',
					'instructions' => 'e.g., current employer name',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59261d0d9f8be',
								'operator' => '==',
								'value' => 'external',
							),
						),
					),
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59261df77e9c5',
					'label' => 'URL',
					'name' => 'external_url',
					'type' => 'url',
					'instructions' => 'e.g., company website',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59261d0d9f8be',
								'operator' => '==',
								'value' => 'external',
							),
						),
					),
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59261e2a7e9c6',
					'label' => 'Details',
					'name' => 'details',
					'type' => 'text',
					'instructions' => 'e.g., job title',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59261e537e9c7',
					'label' => 'Status',
					'name' => 'status',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'current' => 'Current',
						'previous' => 'Previous',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'current',
					'layout' => 'vertical',
					'return_format' => 'value',
				),
			),
		),
		array (
			'key' => 'field_592623d94648c',
			'label' => 'Projects',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59270fc8c0ef8',
			'label' => 'Display Order',
			'name' => 'affiliated_projects_display',
			'type' => 'radio',
			'instructions' => 'How should these project affiliations/relationships be displayed on this member\'s profile page?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'custom' => 'custom order as below',
				'alpha' => 'alphabetically',
				'recent' => 'most recently updated',
				'none' => 'don\'t display these AT ALL',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'custom',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'show_column' => 0,
			'show_column_weight' => 0,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_592624784649c',
			'label' => 'Affiliated/Related Projects',
			'name' => 'affiliated_projects',
			'type' => 'repeater',
			'instructions' => 'Add this member\'s affiliated projects, such as their team membership (if a person), their sponsored/funded projects (if an organization), or their partners (if a project)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Affiliated/Related Project',
			'sub_fields' => array (
				array (
					'key' => 'field_592624784649d',
					'label' => 'Link Type',
					'name' => 'link_type',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'internal' => 'Internal',
						'external' => 'External',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => '',
					'return_format' => '',
				),
				array (
					'key' => 'field_592624784649e',
					'label' => 'Member in the Directory',
					'name' => 'internal_id',
					'type' => 'post_object',
					'instructions' => 'e.g., current employer',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_592624784649d',
								'operator' => '==',
								'value' => 'internal',
							),
						),
					),
					'wrapper' => array (
						'width' => '45',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'member',
					),
					'taxonomy' => array (
						0 => 'member_type:project',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'id',
					'ui' => 1,
				),
				array (
					'key' => 'field_592624784649f',
					'label' => 'Non-Directory Content',
					'name' => 'external_text',
					'type' => 'text',
					'instructions' => 'e.g., current employer name',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_592624784649d',
								'operator' => '==',
								'value' => 'external',
							),
						),
					),
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59262478464a0',
					'label' => 'URL',
					'name' => 'external_url',
					'type' => 'url',
					'instructions' => 'e.g., company website',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_592624784649d',
								'operator' => '==',
								'value' => 'external',
							),
						),
					),
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59262478464a1',
					'label' => 'Details',
					'name' => 'details',
					'type' => 'text',
					'instructions' => 'e.g., job title',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59262478464a2',
					'label' => 'Status',
					'name' => 'status',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'current' => 'Current',
						'previous' => 'Previous',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'current',
					'layout' => '',
					'return_format' => '',
				),
			),
		),
		array (
			'key' => 'field_592623e24648d',
			'label' => 'People',
			'name' => '',
			'type' => 'tab',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'placement' => 'top',
			'endpoint' => 0,
		),
		array (
			'key' => 'field_59270fdfc0ef9',
			'label' => 'Display Order',
			'name' => 'affiliated_people_display',
			'type' => 'radio',
			'instructions' => 'How should these person affiliations/relationships be displayed on this member\'s profile page?',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'custom' => 'custom order as below',
				'alpha' => 'alphabetically',
				'recent' => 'most recently updated',
				'none' => 'don\'t display these AT ALL',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'custom',
			'layout' => 'horizontal',
			'return_format' => 'value',
			'show_column' => 0,
			'show_column_weight' => 0,
			'allow_quickedit' => 0,
			'allow_bulkedit' => 0,
		),
		array (
			'key' => 'field_59262501464a3',
			'label' => 'Affiliated/Related People',
			'name' => 'affiliated_people',
			'type' => 'repeater',
			'instructions' => 'Add this member\'s affiliated people, such as their employees/board members (if an organization), their team members (if a project), or their partners (if a person *rare*)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => 'Add Affiliated/Related Person',
			'sub_fields' => array (
				array (
					'key' => 'field_59262501464a4',
					'label' => 'Link Type',
					'name' => 'link_type',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'internal' => 'Internal',
						'external' => 'External',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => '',
					'layout' => 'vertical',
					'return_format' => 'value',
				),
				array (
					'key' => 'field_59262501464a5',
					'label' => 'Member in the Directory',
					'name' => 'internal_id',
					'type' => 'post_object',
					'instructions' => 'e.g., current employer',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59262501464a4',
								'operator' => '==',
								'value' => 'internal',
							),
						),
					),
					'wrapper' => array (
						'width' => '45',
						'class' => '',
						'id' => '',
					),
					'post_type' => array (
						0 => 'member',
					),
					'taxonomy' => array (
						0 => 'member_type:person',
					),
					'allow_null' => 0,
					'multiple' => 0,
					'return_format' => 'id',
					'ui' => 1,
				),
				array (
					'key' => 'field_59262501464a6',
					'label' => 'Non-Directory Content',
					'name' => 'external_text',
					'type' => 'text',
					'instructions' => 'e.g., current employer name',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59262501464a4',
								'operator' => '==',
								'value' => 'external',
							),
						),
					),
					'wrapper' => array (
						'width' => '20',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59262501464a7',
					'label' => 'URL',
					'name' => 'external_url',
					'type' => 'url',
					'instructions' => 'e.g., company website',
					'required' => 0,
					'conditional_logic' => array (
						array (
							array (
								'field' => 'field_59262501464a4',
								'operator' => '==',
								'value' => 'external',
							),
						),
					),
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
				),
				array (
					'key' => 'field_59262501464a8',
					'label' => 'Details',
					'name' => 'details',
					'type' => 'text',
					'instructions' => 'e.g., job title',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '25',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array (
					'key' => 'field_59262501464a9',
					'label' => 'Status',
					'name' => 'status',
					'type' => 'radio',
					'instructions' => '',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array (
						'width' => '15',
						'class' => '',
						'id' => '',
					),
					'choices' => array (
						'current' => 'Current',
						'previous' => 'Previous',
					),
					'allow_null' => 0,
					'other_choice' => 0,
					'save_other_choice' => 0,
					'default_value' => 'current',
					'layout' => 'vertical',
					'return_format' => 'value',
				),
			),
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'member',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array (
		0 => 'excerpt',
	),
	'active' => 1,
	'description' => '',
));

endif;
