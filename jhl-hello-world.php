<?php
/*
 * Plugin Name: JHL Hello World Plugin
 * Plugin URI: https://jasonlawton.com/plugins/hello-world
 * GitHub Plugin URI: https://github.com/phoopee3/jhl-hello-world
 * Primary Branch: main
 * Description: A simple plugin that displays "Hello World" in the admin bar.
 * Version: 1.3
 * Author: Jason Lawton
 * Author URI: https://jasonlawton.com
 * License: GPL2
 */

add_action( 'wp_before_admin_bar_render', 'hello_world_admin_bar' );

function hello_world_admin_bar() {
    global $wp_admin_bar;
    $wp_admin_bar->add_menu( array(
        'id'    => 'hello-world',
        'title' => 'Hello World 1.3',
        'href'  => '#',
    ) );
}
