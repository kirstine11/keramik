<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
wp_enqueue_style( 'child-style', get_stylesheet_uri(),
array( 'parenthandle' ),
wp_enqueue_style('parent-style'),get_template_directory_uri().'/style.css' );
}
?>
