<?php

add_theme_support( 'post-thumbnails' ); 

function register_my_menu() {
  register_nav_menu('main-menu', ( 'Menu główne' ));
}
add_action( 'init', 'register_my_menu' );

//function my_widgets_init() {
//
//	register_sidebar( array(
//		'name'          => 'Widgety w stopce',
//		'id'            => 'footer-widgets',
//		'before_widget' => '<section>',
//		'after_widget'  => '</section>',//sprawdzam jest w html przed widgetem i wpisuję
//		'before_title'  => '<h2>',
//		'after_title'   => '</h2>',
//	) );
//
//}
//add_action( 'widgets_init', 'my_widgets_init' );