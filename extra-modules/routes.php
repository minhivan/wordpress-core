<?php
/*
Plugin Name: Wordpress General
Version: 1.0
Description: Set Extra Themes Folder, Optimize Wordpress, Define SMTP mail
Plugin URI: http://wordpress.stackexchange.com/questions/1507
Author: Thiện
*/

//  * @snippet Change themes
//  * @author Thien
$directory = trailingslashit('templates');
register_theme_directory($directory);

//  * @snippet Remove WP auto generare 
//  * @author Thien
add_filter('after_setup_theme', 'remove_redundant_shortlink');
function remove_redundant_shortlink()
{
    // remove HTML meta tag
    // <link rel='shortlink' href='http://example.com/?p=25' />
    remove_action('wp_head', 'wp_shortlink_wp_head', 10);
    // remove HTTP header
    // Link: <https://example.com/?p=25>; rel=shortlink
    remove_action('template_redirect', 'wp_shortlink_header', 11);

    remove_action('wp_head', 'rest_output_link_wp_head');
    remove_action('wp_head', 'wp_oembed_add_discovery_links');
    remove_action('template_redirect', 'rest_output_link_header', 11);
    remove_action('wp_head', 'wp_generator');
    add_filter('the_generator', 'remove_generator');
    // remove junk from head
    remove_action('wp_head', 'rsd_link');
    remove_action('wp_head', 'wp_generator');
    remove_action('wp_head', 'feed_links', 2);
    remove_action('wp_head', 'index_rel_link');
    remove_action('wp_head', 'wlwmanifest_link');
    remove_action('wp_head', 'feed_links_extra', 3);
    remove_action('wp_head', 'start_post_rel_link', 10, 0);
    remove_action('wp_head', 'parent_post_rel_link', 10, 0);
    remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
    remove_action('wp_head', 'wp_resource_hints', 2);
}

// Allow SVG upload
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
