<?php

// register primary menu
register_nav_menus([
    'primary' => 'Primary Menu'
]);

/**
 * Load js assets
 */
add_action('wp_enqueue_scripts', function()
{
    wp_enqueue_script('app', get_stylesheet_directory_uri().'/js/app.js', ['jquery'], false, true);
});
