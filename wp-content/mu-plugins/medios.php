<?php
/*
Plugin Name: Media
Plugin URI: www.eamexicano.com
Description: Permite categorizar los medios con base en el medio en que fueron expuestos. Utilcé Media para evitar conflicto de nombres con los archivos adjuntos - Medios - de wordpress.
Version: 0.1.0
Author:  eamexicano
Author URI: www.eamexicano.com
License: MIT
*/


add_action( 'init', 'registrar_media', 0 );

function registrar_media() {    
  $etiquetas = array(
    'name' => __( 'Media' ),
    'description' => __('Media en los que se han expuesto los proyectos'),
    'singular_name' => __( 'Medio' ),
    'add_new' => __( 'Nuevo Medio' ),
    'all_items' => __('Todos los Media'),
    'add_new_item' => __( 'Agregar Medio' ),    
    'edit_item' => __( 'Editar Medio' ),
    'new_item' => __( 'Nuevo Medio' ),
    'view_item' => __( 'Ver Media' ),
    'search_items' => __( 'Buscar Media' ),
    'update_item' => __('Actualizar Medio'),
    'separate_items_with_commas' => __('Separa los media con comas'),
    'popular_items' => __('Media más utilizados'),
    'choose_from_most_used' => __('Elige entre los media más utilizados'),
    'add_or_remove_items' => __( 'Agregar o quitar media'),
    'not_found' => __('No se encontraron media'),
    'not_found_in_trash' => __('No se encontraron media en la basura'), 
    'menu_name' => __("Media")
  );
  
  $opciones = array(
			'public' => true,
			'labels' => $etiquetas,
      'hierarchical' => false,
      'rewrite' => array( 'slug' => 'media', 'with_front' => true )      
		);

	register_taxonomy(
		'media',
		array( 'proyecto' ),
    $opciones
	);
}

?>
