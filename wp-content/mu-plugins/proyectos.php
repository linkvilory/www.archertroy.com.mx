<?php
/*
Plugin Name: Proyectos
Plugin URI: www.eamexicano.com
Description: Permite crear proyectos
Version: 0.1.0
Author:  eamexicano
Author URI: www.eamexicano.com
License: MIT
*/

function crear_proyectos() {
  $etiquetas = array(
    'name' => __( 'Proyecto' ),
    'singular_name' => __( 'Proyecto' ),
    'add_new' => __( 'Nuevo proyecto' ),
    'add_new_item' => __( 'Agregar Proyecto' ),    
    'edit_item' => __( 'Editar Proyecto' ),
    'new_item' => __( 'Nuevo Proyecto' ),
    'view_item' => __( 'Ver Proyectos' ),
    'search_items' => __( 'Buscar Proyectos' ),
    'not_found' => __('No se encontraron proyectos'),
    'not_found_in_trash' => __('No se encontraron proyectos en la basura'), 
    'menu_name' => __("Proyectos")
  );
  
  $parametros = array(
    'labels' => $etiquetas,
    'descrption' => 'Publicación que permite registrar proyectos',
    'public' => true,
    /* opts added */
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'show_in_nav_menus' => true,
    /* opts added */       
    'menu_position' => 5,
    'hierarchical' => false, 
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'trackback', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
    'can_export' => true, 
    'has_archive' => true,
    'rewrite' => array('slug' => 'proyecto', 'with_front'	=> true)
  );

  register_post_type('proyecto', $parametros);
}

add_action('init', 'crear_proyectos');
/*

No queremos incluir los proyectos como parte de las publicaciones del blog 

add_action( 'pre_get_posts', 'mostrar_proyectos' );

function mostrar_proyectos( $query ) {
	if ( is_home() && $query->is_main_query()) {
	  		$query->set( 'post_type', array( 'post',  'proyecto') );
        // $query->set( 'post_type', array( 'post', 'page',  'incrustacion') );        
	}
	return $query;
}
*/

?>
