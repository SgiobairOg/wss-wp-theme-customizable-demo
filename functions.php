<?php

/**
 * Register our sidebars/widgetized areas.
 */
function cws_widgets_init() {

    register_sidebar( array(
        'name'          => 'Footer Widget Area',
        'id'            => 'footer_widget_area',
        'before_widget' => '<div class="widget ' . '%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => 'Home Widget Area',
        'id'            => 'home_widget_area',
        'before_widget' => '<div class="widget ' . '%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

}

add_action( 'widgets_init', 'cws_widgets_init' );
