<?php
// Include the Odin_Metabox class.
require_once get_stylesheet_directory() . '/inc/slider/class-metabox.php';

function slider_metabox() {

    $slider_metabox = new Odin_Metabox(
        'slider', // Slug/ID of the Metabox (Required)
        'Configurações do Slider', // Metabox name (Required)
        'slider', // Slug of Post Type (Optional)
        'normal', // Context (options: normal, advanced, or side) (Optional)
        'high' // Priority (options: high, core, default or low) (Optional)
    );

    $slider_metabox->set_fields(
        array(
            array(
			    'id'          => 'embed_code', // Obrigatório
			    'label'       => __( 'Código embed do vídeo', 'odin' ), // Obrigatório
			    'type'        => 'textarea', // Obrigatório
			)
        )
    );
}

add_action( 'init', 'slider_metabox', 1 );