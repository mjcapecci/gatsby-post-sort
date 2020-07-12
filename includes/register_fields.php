<?php

function my_acf_add_local_field_groups() {
	
	acf_add_local_field_group(array(
		'key' => 'gatsby_post_order',
		'title' => 'Gatsby Post Order',
		'fields' => array (
			array (
				'key' => 'gatsby_post_order',
				'label' => 'Gatsby Post Order',
				'name' => 'Gatsby Post Order',
        'type' => 'text',
        'required' => true
			)
		),
    'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'post',
				),
			),
		),
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups');

?>