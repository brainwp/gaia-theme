<?php
class Gaia_Customize {
   	public static function register( $wp_customize ) {
		$wp_customize->add_section( 'home_gaia', 
			array(
				'title' => __( 'Home Gaia', 'gaia' ),
				'priority' => 35,
				'capability' => 'edit_theme_options',
				'description' => __( 'Configurações da Home do site.', 'gaia' ),
			)
		);
      
      	//2. Register new settings to the WP database...
      	$wp_customize->add_setting( 'instagram_user' , array(
		    'type'			=> 'theme_mod',
		   	'capability'	=> 'edit_theme_options',
		    'transport'		=> 'postMessage',
		) );
		$wp_customize->add_setting( 'instagram_token' , array(
		    'type'			=> 'theme_mod',
		   	'capability'	=> 'edit_theme_options',
		    'transport'		=> 'postMessage',
		) );

            
      	//3. Finally, we define the control itself (which links a setting to a section and renders the HTML controls)...
      	$wp_customize->add_control(
			'instagram_user', 
			array(
				'label'    => __( 'Instagram User', 'gaia' ),
				'section'  => 'home_gaia',
				'settings' => 'instagram_user',
				'type'     => 'text',
			)
		);
		$wp_customize->add_control(
			'instagram_token', 
			array(
				'label'    => __( 'Instagram Token', 'gaia' ),
				'section'  => 'home_gaia',
				'settings' => 'instagram_token',
				'type'     => 'text',
			)
		);
   }

   /**
    * This outputs the javascript needed to automate the live settings preview.
    * Also keep in mind that this function isn't necessary unless your settings 
    * are using 'transport'=>'postMessage' instead of the default 'transport'
    * => 'refresh'
    * 
    * Used by hook: 'customize_preview_init'
    * 
    * @see add_action('customize_preview_init',$func)
    * @since MyTheme 1.0
    */
   public static function live_preview() {
      wp_enqueue_script( 
           'mytheme-themecustomizer', // Give the script a unique ID
           get_template_directory_uri() . '/assets/js/theme-customizer.js', // Define the path to the JS file
           array(  'jquery', 'customize-preview' ), // Define dependencies
           '', // Define a version (optional) 
           true // Specify whether to put in footer (leave this true)
      );
   }

}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register', array( 'Gaia_Customize' , 'register' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init', array( 'Gaia_Customize' , 'live_preview' ) );