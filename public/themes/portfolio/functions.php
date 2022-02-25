<?php
declare(strict_types=1);

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    // Enable featured image
    add_theme_support('post-thumbnails');
});

// Register project custom post type.
require get_template_directory().'/post-types/project.php';
// Register tool taxonomy for the project custom post type.
require get_template_directory().'/taxonomies/tool.php';

require get_template_directory().'/fields/project.php';

require get_template_directory().'/fields/options.php';

// Add Tailwind classes to put footer at the bottom of the viewport
add_filter('body_class', function ($classes) {
    $classes[] = 'min-h-screen flex flex-col';
    return $classes;
});

// Disable PHP deprecation messages
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
