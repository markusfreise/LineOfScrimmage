<?php

function enqueue_custom_block_editor_assets() {
    wp_enqueue_script(
        'custom-gutenberg-extensions',
        get_template_directory_uri() . '/js/headline-classes.js',
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
        filemtime( get_template_directory() . '/js/headline-classes.js' )
    );
}
add_action( 'enqueue_block_editor_assets', 'enqueue_custom_block_editor_assets' );