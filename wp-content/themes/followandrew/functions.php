<?php
    function lucy_theme_support() {
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'lucy_theme_support');

    function lucy_menus() {
        $lcoations = array(
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => 'Footer Menu Items'
        );
        register_nav_menus($lcoations);
    }
    add_action('init', 'lucy_menus');

    function lucy_register_styles() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_style('lucy-style', get_template_directory_uri().'/style.css', array(),  $version, 'all');
        wp_enqueue_style('lucy-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
        wp_enqueue_style('lucy-fontawesome', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    }

    add_action('wp_enqueue_scripts', 'lucy_register_styles');

    function lucy_register_scripts() {
        $version = wp_get_theme()->get('Version');
        wp_enqueue_script('lucy-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(),  '3.4.1', true);
        wp_enqueue_script('lucy-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js", array(),  '1.16.0', true);
        wp_enqueue_script('lucy-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js", array(),  '4.4.1', true);
        wp_enqueue_script('lucy-main',  get_template_directory_uri().'/assets/js/main.js', array(),  $version, true);
    }

    add_action('wp_enqueue_scripts', 'lucy_register_scripts')
?>