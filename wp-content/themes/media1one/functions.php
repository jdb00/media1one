<?php
    function register_resource() {
        register_nav_menu('main-menu', 'Main Menu' );
    
    }
    add_action( 'init', 'register_resource' );

    function add_class_to_li( $classes, $item, $args ) {
 
        $classes[] = 'nav-item';
        return $classes;
    }
    add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

    add_filter( 'nav_menu_css_class' , 'add_class_to_li' , 10, 4 );

    function add_class_to_anchors( $atts ) {
        $atts['class'] = 'nav-link';
    
        return $atts;
    }
    add_filter( 'nav_menu_link_attributes', 'add_class_to_anchors', 10 );

    $args = array(
        'public'    => true,
        'label'     => 'Slides',
    );
    register_post_type( 'slide', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Gallery Row 1',
    );
    register_post_type( 'gallery-image-1', $args );
    $args = array(
        'public'    => true,
        'label'     => 'Gallery Row 2',
    );
    register_post_type( 'gallery-image-2', $args );
    $args = array(
        'public'    => true,
        'label'     => 'Gallery Row 3',
    );
    register_post_type( 'gallery-image-3', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Horizontal Slider',
    );
    register_post_type( 'h-slide', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Services',
    );
    register_post_type( 'service', $args );

    $args = array(
        'public'    => true,
        'label'     => 'Featured',
    );
    register_post_type( 'feature', $args );

    $args = array(
        'label'        => 'Add a Type',
        'public'       => true,
        'hierarchical' => true,
        'show_in_nav_menus' => true
    );

    register_taxonomy( 'type', array('gallery-image-1', 'gallery-image-2', 'gallery-image-3'), $args );

?>