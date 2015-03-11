<?php
/*
Plugin Name: Noticias
Plugin URI: http://blog.eamexicano.com/wordpress/entradas-personalizadas-en-wordpress/
Description: Permite crear noticias
Version: 0.1.0
Author:  eamexicano
Author URI: http://www.eamexicano.com
License: MIT
*/

function crear_noticias() {
  $etiquetas = array(
    'name' => __( 'Noticia' ),
    'singular_name' => __( 'Noticia' ),
    'add_new' => __( 'Nueva noticia' ),
    'add_new_item' => __( 'Agregar Noticia' ),    
    'edit_item' => __( 'Editar Noticia' ),
    'new_item' => __( 'Nuevo Noticia' ),
    'view_item' => __( 'Ver Noticias' ),
    'search_items' => __( 'Buscar Noticias' ),
    'not_found' => __('No se encontraron noticias'),
    'not_found_in_trash' => __('No se encontraron noticias en la basura'), 
    'menu_name' => __("Noticias")
  );
  
  $parametros = array(
    'labels' => $etiquetas,
    'descrption' => 'Tipo de publicación que permite registrar noticias',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'show_in_nav_menus' => true,
    'menu_position' => 5,
    'hierarchical' => false, 
    'capability_type' => 'post',
    'supports' => array('title', 'editor', 'author', 'thumbnail', 'trackback', 'custom-fields', 'comments', 'revisions', 'page-attributes'),
    'can_export' => true, 
    'has_archive' => true,
    'rewrite' => array('slug' => 'noticia', 'with_front'	=> true)
  );

  register_post_type('noticia', $parametros);
}

add_action('init', 'crear_noticias');

/* Agregar URL al formulario de visualización */

function agregar_url_a_las_noticias () {
  add_meta_box('url_noticia', 'URL Noticia', 'visualizar_campo_url_noticia', 'noticia', 'normal', 'high');
}

function visualizar_campo_url_noticia() {
  global $post;
  echo '<input type="hidden" name="noticia_noncename" id="noticia_noncename" value="' . wp_create_nonce( plugin_basename(__FILE__) ) . '" />';
  echo '<input class="widefat" type="text" name="url_noticia" value="' . get_post_meta($post->ID,  'url_noticia', true) . '" placeholder="http://example.com">';
}

add_action('add_meta_boxes', 'agregar_url_a_las_noticias');

/* Guardar valor a la tabla de wp_postmeta */
function guardar_url_noticia_en_bd($post_id, $post) {
	
	if ( !wp_verify_nonce( $_POST['noticia_noncename'], plugin_basename(__FILE__) )) {
    return $post->ID;
	}

	if ( !current_user_can( 'edit_post', $post->ID )) {
	  return $post->ID;
	}
	
	$noticia['url_noticia'] = $_POST['url_noticia'];
	
	foreach ($noticia as $key => $value) { 
		if( $post->post_type == 'revision' ) return; 
		$value = implode(',', (array)$value); 
		if(get_post_meta($post->ID, $key, FALSE)) {
			update_post_meta($post->ID, $key, $value);
		} else {
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key);
	}

}

add_action('save_post', 'guardar_url_noticia_en_bd', 1, 2); 


?>
