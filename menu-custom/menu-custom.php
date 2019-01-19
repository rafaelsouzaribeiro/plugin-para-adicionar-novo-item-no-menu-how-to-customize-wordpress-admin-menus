<?php
/*
Plugin Name: Menu customizado
Description: Plugin para adicionar novo item no menu
Version: 1.0
Author: Rafael Souza
*/

function create_my_post_type() {
	// Cria nosso menu products
    register_post_type( 'products',
      array(
        'labels' => array( 'name' => __( 'Products' ) ),
        'public' => true,
		'taxonomies' => array('recordings', 'category',"post_tag"),
		'public' => true,
		'show_ui' => true,
		'exclude_from_search' => true,
		'hierarchical' => true,
		'supports' => array( 'title', 'editor', 'thumbnail','author','excerpt','trackbacks','custom-fields','comments','revisions','post-formats' ),
		'query_var' => true,
		'menu_position'=>4
    )
  );
}

// Registrar a action para criar nosso post_type menu
add_action( 'init', 'create_my_post_type' );


?>