<?php

add_action('acf/init', function() {
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type([
            'name'              => 'latest-posts',
            'title'             => __('Custom Latest posts'),
            'description'       => __('A block that displays latest posts.'),
            'render_template'   => 'block-templates/latest-posts.php',
            'category'          => 'widgets',
            'icon'              => 'megaphone',
            'keywords'          => ['posts'],
        ]);
    }
});

if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group([
      'key' => 'latest-posts-fields',
      'title' => 'Block settings',
      'fields' => [
        [
          'key' => 'field_latest-posts-post-type',
          'name' => 'latest-posts-post-type',
          'label' => 'Post type',
          'type' => 'select',
          'choices' => [
              'post' => 'post',
              'project' => 'project',
          ],
        ],
        [
          'key' => 'field_latest-posts-number-of-posts',
          'name' => 'latest-posts-number-of-posts',
          'label' => 'Number of posts',
          'type' => 'number',
          'default_value' => 3
        ],
        [
            'key' => 'field_latest-posts-link-to-archive',
            'name' => 'latest-posts-link-to-archive',
            'label' => 'Link to post type archive',
            'type' => 'page_link',
            'post_type' => 'page',
            'allow_null' => true,
        ],
        [
            'key' => 'field_latest-posts-link-label',
            'name' => 'latest-posts-link-label',
            'label' => 'Link label',
            'type' => 'text',
        ],
        [
            'key' => 'field_latest-posts-background-color',
            'label' => 'Background color',
            'name' => 'latest-posts-background-color',
            'type' => 'color_picker',
        ]
      ],
      'location' => [
        [
          [
            'param' => 'block',
            'operator' => '==',
            'value' => 'acf/latest-posts',
          ],
        ],
      ],
    ]);
  }
