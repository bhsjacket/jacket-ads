<?php

@add_action('acf/init', 'jacket_adManagerFields');

function jacket_adManagerFields() {

    if(function_exists('acf_add_options_page')) {
    
        acf_add_options_page([
            'page_title' => 'Ad Manager',
            'menu_title' => 'Ad Manager',
            'menu_slug' => 'ad-manager',
            'capability' => 'edit_posts',
            'position' => '2.2',
            'parent_slug' => '',
            'icon_url' => 'dashicons-megaphone',
            'redirect' => true,
            'post_id' => 'options',
            'autoload' => false,
            'update_button' => 'Update',
            'updated_message' => 'Ads Updated',
        ]);
    
    }
    
    if(function_exists('acf_add_local_field_group')) {
    
        acf_add_local_field_group([
            'key' => 'group_5f25a616886e7',
            'title' => 'Ad Manager',
            'fields' => [
                [
                    'key' => 'field_5f25a6209c172',
                    'label' => 'Select Ads',
                    'name' => 'horizontal_ads',
                    'type' => 'gallery',
                    'instructions' => 'Must be exactly 1000x250px. Put the URL in the caption field.',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => [
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ],
                    'acfe_permissions' => '',
                    'return_format' => 'array',
                    'preview_size' => 'full',
                    'insert' => 'append',
                    'library' => 'all',
                    'min' => '',
                    'max' => '',
                    'min_width' => 1000,
                    'min_height' => 250,
                    'min_size' => '',
                    'max_width' => 1000,
                    'max_height' => 250,
                    'max_size' => '',
                    'mime_types' => '',
                ],
            ],
            'location' => [
                [
                    [
                        'param' => 'options_page',
                        'operator' => '==',
                        'value' => 'ad-manager',
                    ],
                ],
            ],
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'seamless',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
            'acfe_display_title' => '',
            'acfe_autosync' => '',
            'acfe_permissions' => '',
            'acfe_form' => 0,
            'acfe_meta' => '',
            'acfe_note' => '',
        ]);
    
    }

}
