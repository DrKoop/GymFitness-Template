<?php 
//Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

function gymfitness_setup(){
    //Imagenes destacadas
    add_theme_support('post-thumbnails');
    //Titulos meta-SEO
    add_theme_support('title-tag');
    //Widgets
}
add_action('after_setup_theme','gymfitness_setup');


function gymfitness_widgets(){
    register_sidebar(array(
        'name' => 'Sidebar GYMFitness 1',
        'id' => 'sidebar_1',
        'before_widget' => '<div class="widget-gym">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar GYMFitness 2',
        'id' => 'sidebar_2',
        'before_widget' => '<div class="widget-gym">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'
    ));

}
add_action('widgets_init','gymfitness_widgets');

//Shortcode
function gymfitness_ubicacion_shortcode(){

    ?>
        <div class="mapa">
            <?php 
                if(is_page('contacto')){
                    the_field('ubicacion');
                }
            ?>    
        </div>
        <h2 class="text-center text-primary">Formulario de Contacto</h2>
    <?php
    echo  do_shortcode('[contact-form-7 id="4ef2a9d" title="GymForm"]');
}
add_shortcode('gymfitness_ubicacion', 'gymfitness_ubicacion_shortcode');


function gymfitness_menus(){
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal Gym','gymfitness')
    ));
}

add_action('init', 'gymfitness_menus');

function gymfitness_scripts_styles(){

    wp_enqueue_style('normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1');

    wp_enqueue_style('lightbox', get_template_directory_uri() . '/css/lightbox.min.css' ,array(),'2.11.4');

    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css' ,array(),'10.2.0');

    wp_enqueue_style('style', get_stylesheet_uri(),array('normalize'),'1.0.0');

    //Scripts
    wp_enqueue_script( 'lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js',array('jquery'),'2.11.4',true);

    wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js',array(),'10.2.0',true);

    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('swiper-js'),'1.0.0',true);

}
add_action('wp_enqueue_scripts', 'gymfitness_scripts_styles');


//Imagenes dinamicas como backround
function gymfitness_hero_imagen(){

    //Obtner ID de la pagina (Index)
    $front_id = get_option('page_on_front');

    //Obtener imagen
    $id_imagen = get_field('hero_imagen', $front_id);

    //Obtener ruta
    $ruta_imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    var_dump($ruta_imagen);

    //CSS

    //Inyectar CSS

}
add_action('init','gymfitness_hero_imagen');



?>
