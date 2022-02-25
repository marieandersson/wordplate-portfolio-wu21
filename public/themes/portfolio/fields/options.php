<?php

if( function_exists('acf_add_options_page') ) {

  // Register options page.
  $option_page = acf_add_options_page(array(
      'page_title'    => __('Theme General Settings'),
      'menu_title'    => __('Theme Settings'),
      'menu_slug'     => 'theme-general-settings',
      'capability'    => 'edit_posts',
      'redirect'      => false
  ));
}

if( function_exists('acf_add_local_field_group') ) {
  acf_add_local_field_group([
    'key' => 'field_footer-fields',
    'title' => 'Footer',
    'fields' => [
      [
        'key' => 'field_footer_email',
        'name' => 'footer_email',
        'label' => 'Footer email',
        'type' => 'email',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'field_footer_contact_label',
        'name' => 'footer_contact_label',
        'label' => 'Contact label',
        'type' => 'text',
        'wrapper' => [
          'width' => 50,
        ],
      ],
      [
        'key' => 'field_footer_copyright',
        'name' => 'footer_copyright',
        'label' => 'Footer copyright text',
        'type' => 'text',
      ],
      [
        'key' => 'field_github_url',
        'name' => 'github_url',
        'label' => 'Github url',
        'type' => 'url',
      ],
      [
        'key' => 'field_linkedin_url',
        'name' => 'linkedin_url',
        'label' => 'Linkedin url',
        'type' => 'url',
      ],
      [
        'key' => 'field_twitter_url',
        'name' => 'twitter_url',
        'label' => 'Twitter url',
        'type' => 'url',
      ],
    ],
    'location' => [
      [
        [
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-general-settings',
        ],
      ],
    ],
  ]);
}
