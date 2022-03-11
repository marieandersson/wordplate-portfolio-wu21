<?php
declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    // Enable featured image
    add_theme_support('post-thumbnails');
    // Add extra layer of block styles
    add_theme_support('wp-block-styles');
});

// Register project custom post type.
require get_template_directory().'/post-types/project.php';
// Register tool taxonomy for the project custom post type.
require get_template_directory().'/taxonomies/tool.php';
// Register fields for the project custom post type.
require get_template_directory().'/fields/project.php';
// Register option fields
require get_template_directory().'/fields/options.php';
// Register custom block for latest posts
require get_template_directory().'/blocks/latest-posts.php';
// Register block pattern for resume item
require get_template_directory().'/block-patterns/resume-item.php';

// Add Tailwind classes to put footer at the bottom of the viewport
add_filter('body_class', function ($classes) {
    $classes[] = 'min-h-screen flex flex-col';
    return $classes;
});

// Include the stylesheet in the block editor to mirror the frontend layout
add_action('enqueue_block_editor_assets',function() {
    $manifest = json_decode(file_get_contents(get_theme_file_path('assets/manifest.json')), true);
    wp_enqueue_style('block_editor_css', get_theme_file_uri('assets/' . $manifest['resources/scripts/index.js']['css'][0]));
  }, 10, 0);

// Disable PHP deprecation messages
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
