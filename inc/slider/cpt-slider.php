<?php
// CUSTOM POST TYPE -> SLIDER
function slider_post_type() {

	$labels = array(
		'name'                => _x( 'Sliders', 'Post Type General Name', 'odin' ),
		'singular_name'       => _x( 'Slider', 'Post Type Singular Name', 'odin' ),
		'menu_name'           => __( 'Vídeo Slider', 'odin' ),
		'parent_item_colon'   => __( 'Parent Item', 'odin' ),
		'all_items'           => __( 'Todos os itens', 'odin' ),
		'view_item'           => __( 'Ver Item', 'odin' ),
		'add_new_item'        => __( 'Adicionar novo item', 'odin' ),
		'add_new'             => __( 'Adicionar novo', 'odin' ),
		'edit_item'           => __( 'Editar Item', 'odin' ),
		'update_item'         => __( 'Atualizar Item', 'odin' ),
		'search_items'        => __( 'Buscar item', 'odin' ),
		'not_found'           => __( 'Não encontrado', 'odin' ),
		'not_found_in_trash'  => __( 'Não encontrado no lixo', 'odin' ),
	);
	$args = array(
		'label'               => __( 'slider', 'odin' ),
		'description'         => __( '', 'odin' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'page-attributes', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-format-gallery',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => true,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_post_type', 0 );