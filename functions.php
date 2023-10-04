<?php

// Variables


// Includes
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));

// Hooks
add_action('wp_enqueue_scripts', 'm_enqueue' );
add_action('wp_head', 'm_head', 5);
