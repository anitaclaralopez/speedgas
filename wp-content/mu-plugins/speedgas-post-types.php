<?php

function speedgas_post_types(){

  //Products Post Type
  register_post_type('product',array(
    'public' => true,
    'labels' => array(
      'name' => 'Products',
      'add_new_item' => 'Add new Product',
      'edit_item' => 'Edit Product',
      'all_itemns' => 'All Products',
      'singular_name' => 'Product'
    ),
    'has_archive' => true,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail'
    ),
    'menu_icon' => 'dashicons-cart'
  ));

  //Services Post Type
  register_post_type('service',array(
    'public' => true,
    'labels' => array(
      'name' => 'Services',
      'add_new_item' => 'Add new Service',
      'edit_item' => 'Edit Service',
      'all_itemns' => 'All Services',
      'singular_name' => 'Service'
    ),
    'has_archive' => true,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail'
    ),
    'menu_icon' => 'dashicons-businesswoman'
  ));

  //Placemarks Post Type
  register_post_type('placemark',array(
    'public' => true,
    'labels' => array(
      'name' => 'Placemarks',
      'add_new_item' => 'Add new Placemark',
      'edit_item' => 'Edit Placemark',
      'all_itemns' => 'All Placemarks',
      'singular_name' => 'Placemark'
    ),
    'has_archive' => true,
    'supports' => array(
      'title',
      'editor',
      'excerpt',
      'thumbnail'
    ),
    'menu_icon' => 'dashicons-businesswoman'
  ));
}

add_action('init','speedgas_post_types');
?>
