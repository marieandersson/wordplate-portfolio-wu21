<?php

if (function_exists('acf_add_local_field_group')) {

  acf_add_local_field_group([
    'key' => 'project-info',
    'title' => 'Project info',
    'fields' => [
      [
        'key' => 'field_project_client',
        'name' => 'project_client',
        'label' => 'Client name',
        'type' => 'text',
        'instructions' => 'Fill out the client for the project'
      ],
      [
        'key' => 'field_project_client_website',
        'name' => 'project_client_website',
        'label' => 'Client website',
        'type' => 'url',
        'instructions' => 'Fill out the client website'
      ],
      [
        'key' => 'field_color_profile',
        'label' => 'Color profile',
        'name' => 'color_profile',
        'type' => 'color_picker',
      ]
    ],
    'location' => [
      [
        [
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'project',
        ],
      ],
    ],
    'position' => 'side',
  ]);
}