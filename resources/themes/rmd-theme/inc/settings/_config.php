<?php
// //SCRIPTS
// add_action('wp_enqueue_scripts', 'my_scripts');
// function my_scripts() {
//     wp_enqueue_script('bundle', THEME_URL .'/dist/scripts/bundle.js', array(), false, true);
// }

//STYLE
add_action('wp_enqueue_scripts', 'my_style');
function my_style() {
    wp_enqueue_style('splideMin', THEME_URL .'/dist/splidejs/css/splide.min.css');
    // wp_enqueue_style('splideDefault', THEME_URL .'/dist/splidejs/css/splide-default.min.css');
    wp_enqueue_style('splideCore', THEME_URL .'/dist/splidejs/css/splide-core.min.css');
    wp_enqueue_style('stylecss', THEME_URL .'/dist/styles/app.css');
}

function add_async_attribute($tag, $handle) {
    if ( 'bundle' !== $handle )
        return $tag;
    return str_replace( ' src', ' async="async" src', $tag );
}

add_filter('script_loader_tag', 'add_async_attribute', 10, 2);

function ajaxJs()
{
    wp_enqueue_script('splideJs', THEME_URL .'/dist/splidejs/js/splide.min.js', array(), false, true);
    wp_enqueue_script('bundle', THEME_URL .'/dist/scripts/bundle.js', array(), false, true);
    wp_add_inline_script( 'bundle', 'const ajaxUrl = ' . json_encode( array(admin_url( 'admin-ajax.php')) ), 'before' );
}

add_action('wp_enqueue_scripts', 'ajaxJs');


add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support() {
    add_theme_support( 'post-thumbnails' );
}

//retire accent de fichier uploade
add_filter( 'sanitize_file_name', 'remove_accents' );

//Creation menu
register_nav_menu( 'header', 'Header Menu' );
register_nav_menu( 'footer', 'Footer Menu' );

// Permet l'utilisation des "type=text/css ...."
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

// add_image_size( 'icon', 50, 50, false );
// add_image_size( 'bloc-home', 360, 400, false );