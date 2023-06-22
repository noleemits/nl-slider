<?php
if (!class_exists('NL_Accordion_Post_Type')) {
    class NL_Accordion_Post_Type
    {
        function __construct()
        {
            add_action('init', array($this, 'create_post_type'));
        }
        public function create_post_type()
        {
            register_post_type(
                'Nl-accordion',
                array(
                    'label' => __('Nl-accordion', 'nl-accordion'),
                    'description' => __('Nl-accordion', 'nl-accordion'),
                    'labels' => array(
                        'name' => __('Nl-accordion', 'nl-accordion'),
                        'singular_name' => __('Nl-accordion', 'nl-accordion'),
                        'menu_name' => __('Nl-accordion', 'nl-accordion'),
                        'parent_item_colon' => __('Parent Nl-accordion', 'nl-accordion'),
                        'all_items' => __('All Nl-accordion', 'nl-accordion'),
                        'view_item' => __('View Nl-accordion', 'nl-accordion'),
                        'add_new_item' => __('Add New Nl-accordion', 'nl-accordion'),
                        'add_new' => __('Add New', 'nl-accordion'),
                        'edit_item' => __('Edit Nl-accordion', 'nl-accordion'),
                        'update_item' => __('Update Nl-accordion', 'nl-accordion'),
                        'search_items' => __('Search Nl-accordion', 'nl-accordion'),
                        'not_found' => __('Not Found', 'nl-accordion'),
                        'not_found_in_trash' => __('Not found in Trash', 'nl-accordion'),
                    ),
                    'public' => true,
                    'supports' => array('title', 'editor', 'thumbnail'),
                    'show_ui' => true,
                    'show_in_menu' => true,
                    'menu_position' => 5,
                    'show_in_admin_bar' => true,
                    'can_export' => true,
                    'has_archive' => true,
                    'exclude_from_search' => false,
                    'publicly_queryable' => true,
                    'show_in_rest' => true,
                    'menu_icon' => 'dashicons-admin-page',
                )
            );
        }
    }
}
