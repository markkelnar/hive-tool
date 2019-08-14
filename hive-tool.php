<?php
/*
Plugin Name: Hive Tool
*/

function hivetool_enqueue() {
    wp_enqueue_script(
        'hivetool-script',
        plugins_url( 'hivetool.js', __FILE__ ),
        array( 'wp-blocks' )
    );
}
add_action( 'enqueue_block_editor_assets', 'hivetool_enqueue' );

function hivetool_stylesheet() {
    wp_enqueue_style( 'hivetool-style', plugins_url( 'style.css', __FILE__ ) );
}
add_action( 'enqueue_block_assets', 'hivetool_stylesheet' );
