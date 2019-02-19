<?php
if ( ! function_exists( 'hs_web_2_setup' ) ) :

function hs_web_2_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'hs_web_2', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 825, 510, true );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'hs_web_2' ),
        'social'  => __( 'Social Links Menu', 'hs_web_2' ),
    ) );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );
}
endif; // hs_web_2_setup

add_action( 'after_setup_theme', 'hs_web_2_setup' );


if ( ! function_exists( 'hs_web_2_init' ) ) :

function hs_web_2_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // hs_web_2_setup

add_action( 'init', 'hs_web_2_init' );


if ( ! function_exists( 'hs_web_2_widgets_init' ) ) :

function hs_web_2_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    register_sidebar( array(
        'name' => __( 'Footer Search', 'hs_web_2' ),
        'id' => 'blocks_footer_1_4_form',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widgettitle">',
        'after_title' => '</h3>'
    ) );

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'hs_web_2_widgets_init' );
endif;// hs_web_2_widgets_init



if ( ! function_exists( 'hs_web_2_customize_register' ) ) :

function hs_web_2_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    require_once "inc/blocks/wp_blocks_customizer_controls.php";

    $wp_customize->add_section( 'blocks_copyright_2', array(
        'title' => __( 'Copyright', 'hs_web_2' )
    ));

    $wp_customize->add_section( 'blocks_footer_1_4', array(
        'title' => __( 'Footer', 'hs_web_2' )
    ));

    $wp_customize->add_section( 'blocks_map', array(
        'title' => __( 'Map', 'hs_web_2' )
    ));

    $wp_customize->add_section( 'blocks_content_1_4', array(
        'title' => __( 'Content', 'hs_web_2' )
    ));
    $pgwp_sanitize = function_exists('pgwp_sanitize_placeholder') ? 'pgwp_sanitize_placeholder' : null;

    $wp_customize->add_section( 'blocks_header_2', array(
        'title' => __( 'Header', 'hs_web_2' )
    ));

    $wp_customize->add_setting( 'blocks_header_2_logo', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( new WP_Customize_Media_Control( $wp_customize, 'blocks_header_2_logo', array(
        'label' => __( 'Logo', 'hs_web_2' ),
        'type' => 'media',
        'mime_type' => 'image',
        'section' => 'blocks_header_2'
    ) ) );

    $wp_customize->add_setting( 'blocks_content_1_4_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Kickstart your web development', 'hs_web_2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_4_title', array(
        'label' => __( 'Title', 'hs_web_2' ),
        'type' => 'text',
        'section' => 'blocks_content_1_4'
    ));

    $wp_customize->add_setting( 'blocks_content_1_4_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.', 'hs_web_2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_4_text', array(
        'label' => __( 'Text', 'hs_web_2' ),
        'type' => 'textarea',
        'section' => 'blocks_content_1_4'
    ));

    $wp_customize->add_setting( 'blocks_content_1_4_col1_title', array(
        'type' => 'theme_mod',
        'default' => __( 'Tons Of Elements', 'hs_web_2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_4_col1_title', array(
        'label' => __( 'Column 1 Title', 'hs_web_2' ),
        'type' => 'text',
        'section' => 'blocks_content_1_4'
    ));

    $wp_customize->add_setting( 'blocks_content_1_4_col1_text', array(
        'type' => 'theme_mod',
        'default' => __( 'Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labor.', 'hs_web_2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_content_1_4_col1_text', array(
        'label' => __( 'Column 1 Text', 'hs_web_2' ),
        'type' => 'textarea',
        'section' => 'blocks_content_1_4'
    ));

    $wp_customize->add_setting( 'blocks_map_lat', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_map_lat', array(
        'label' => __( 'Latitude', 'hs_web_2' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '51.5111507'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_long', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_map_long', array(
        'label' => __( 'Longitude', 'hs_web_2' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '-0.123'
            )
    ));

    $wp_customize->add_setting( 'blocks_map_zoom', array(
        'type' => 'theme_mod',
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_map_zoom', array(
        'label' => __( 'Zoom', 'hs_web_2' ),
        'type' => 'text',
        'section' => 'blocks_map',
        'input_attrs' => 
            array(
                'placeholder' => '15'
            )
    ));

    $wp_customize->add_setting( 'blocks_copyright_2_text', array(
        'type' => 'theme_mod',
        'default' => __( '© COPYRIGHT 2015 - Pinegrow Blocks - ALL RIGHTS RESERVED.', 'hs_web_2' ),
        'sanitize_callback' => $pgwp_sanitize
    ));

    $wp_customize->add_control( 'blocks_copyright_2_text', array(
        'label' => __( 'Text', 'hs_web_2' ),
        'type' => 'textarea',
        'section' => 'blocks_copyright_2'
    ));

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'hs_web_2_customize_register' );
endif;// hs_web_2_customize_register


if ( ! function_exists( 'hs_web_2_enqueue_scripts' ) ) :
    function hs_web_2_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/js/jquery-1.11.1.min.js', false, null, true);

    wp_deregister_script( 'bootstrap' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', false, null, true);

    wp_deregister_script( 'plugins' );
    wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', false, null, true);

    wp_deregister_script( 'script-1' );
    wp_enqueue_script( 'script-1', 'https://maps.google.com/maps/api/js?key=AIzaSyBiXBT6sNomMCSDJ73IG09OyR7A8N8JfAM&sensor=true', false, null, true);

    wp_deregister_script( 'bskitscripts' );
    wp_enqueue_script( 'bskitscripts', get_template_directory_uri() . '/js/bskit-scripts.js', false, null, true);

    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', false, null, true);

    wp_deregister_script( 'ieviewportbugworkaround' );
    wp_enqueue_script( 'ieviewportbugworkaround', get_template_directory_uri() . '/assets/js/ie10-viewport-bug-workaround.js', false, null, true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'bootstrap' );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, null, 'all');

    wp_deregister_style( 'style-1' );
    wp_enqueue_style( 'style-1', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700', false, null, 'all');

    wp_deregister_style( 'style-2' );
    wp_enqueue_style( 'style-2', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic', false, null, 'all');

    wp_deregister_style( 'stylelibrary' );
    wp_enqueue_style( 'stylelibrary', get_template_directory_uri() . '/css/style-library-1.css', false, null, 'all');

    wp_deregister_style( 'plugins' );
    wp_enqueue_style( 'plugins', get_template_directory_uri() . '/css/plugins.css', false, null, 'all');

    wp_deregister_style( 'blocks' );
    wp_enqueue_style( 'blocks', get_template_directory_uri() . '/css/blocks.css', false, null, 'all');

    wp_deregister_style( 'custom' );
    wp_enqueue_style( 'custom', get_template_directory_uri() . '/css/custom.css', false, null, 'all');

    wp_deregister_style( 'fontawesome' );
    wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', false, null, 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'hs_web_2_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/blocks/wp_blocks.php";
require_once "inc/bootstrap/wp_bootstrap_navwalker.php";

    /* Pinegrow generated Include Resources End */
?>