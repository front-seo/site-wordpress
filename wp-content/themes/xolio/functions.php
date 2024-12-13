<?php
function carregar_estilos_e_scripts() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css' );
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css' );
    wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer.css' );
    wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css' );
    wp_enqueue_style( 'default', get_template_directory_uri() . '/assets/css/default.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
     // jQuery já está incluído no WordPress, então não é necessário adicioná-lo novamente.

    // Bootstrap
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '5.1.0', true);

    // Isotope
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), null, true);

    // ImagesLoaded
    wp_enqueue_script('imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.min.js', array('jquery'), null, true);

    // Magnific Popup
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), null, true);

    // Odometer
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/js/jquery.odometer.min.js', array('jquery'), null, true);

    // Swiper Bundle
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array('jquery'), null, true);

    // Appear
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.js', array('jquery'), null, true);

    // Slick
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), null, true);

    // Ajax Form
    wp_enqueue_script('ajax-form', get_template_directory_uri() . '/assets/js/ajax-form.js', array('jquery'), null, true);

    // Parallax
    wp_enqueue_script('parallax', get_template_directory_uri() . '/assets/js/parallax.min.js', array('jquery'), null, true);

    // Parallax Scroll
    wp_enqueue_script('parallax-scroll', get_template_directory_uri() . '/assets/js/jquery.parallaxScroll.min.js', array('jquery'), null, true);

    // Tween Max
    wp_enqueue_script('tween-max', get_template_directory_uri() . '/assets/js/tween-max.js', array('jquery'), null, true);

    // WOW
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.min.js', array('jquery'), null, true);

    // Main
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'carregar_estilos_e_scripts' );

function registrar_menus() {
    register_nav_menus( array(
        'menu-principal' => __( 'Menu Principal' ),
    ));
}
add_action( 'init', 'registrar_menus' );


// Adiciona suporte para imagens destacadas em tipos de posts específicos
function custom_theme_setup() {
    add_theme_support('post-thumbnails', array('post', 'page', 'custom_post_type')); // Adicione o nome do tipo de post
}
add_action('after_setup_theme', 'custom_theme_setup');


// Definir novos tamanhos de imagem
function custom_image_sizes() {
    add_theme_support('post-thumbnails');
    add_image_size('custom-thumb-size', 414, 287, true); // Largura: 300px, Altura: 200px, true = crop
}
add_action('after_setup_theme', 'custom_image_sizes');

// limitar os posts da pagina
function custom_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query() && (is_home() || is_archive())) {
        $query->set('posts_per_page', 9);
    }
}
add_action('pre_get_posts', 'custom_posts_per_page');


add_theme_support('post-thumbnails');
set_post_thumbnail_size(800, 400, true); // Exemplo de tamanho
