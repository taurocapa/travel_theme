<?php
/**
 *functions bycap
 *agust 2019*
*  
*/

/*
Including Custom Queries.
*/

require_once dirname(__FILE__) . '/inc/querys.php';


/**
 * Including PostTypes:
 * Hotels, Destinations, Cruisers
 */
require_once dirname(__FILE__) . '/inc/posttypes.php';


/**
 * including CMB2 (custon meta boxes 2)
 */

 require_once dirname(__FILE__).'/cmb2.php';

 /**
  * my own fields.
  */

require_once dirname(__FILE__).'/inc/custom-fields.php';
/* 
 * Setup function
 */

add_action( 'init', 'wyw_carousel_photos');
// Manejo de carrusel de imagenes

function wyw_carousel_photos($photos){

    // Uses with bootstrap carousel class 'carousel''.
    $html = ''; $i=0; $first_image = true;
    $counter = count($photos);
    $counter_high_image = 2;
    $high_image = ($counter > 2);
    if ($counter>0){
        $html .= '<div class="carousel-item active d-flex">';
    } else {
        return $html;
    };
    
    foreach($photos as $photo){
        if ($i < 2){
            if($first_image){
                $html .= '<img src="' . $photo['image'] . '" class="w-50" alt="...">';
            } else {
                $html .= '<img src="' . $photo['image'] . '" class="w-50 ml-2" alt="...">';
            }
            $first_image = !$first_image;
           //$html .= ''
        }  
        
        if($i == 1 ){
            $html .= "</div>";
        } 

   
        if ($i > 1 and $high_image) {
            $html .=  '<div class="carousel-item d-flex">';
            $high_image = false;
            $first_image = true;
        }

        if($i > 1){
            if($first_image){
                $html .= '<img src="' . $photo['image'] . '" class="w-50" alt="...">';
            } else {
                $html .= '<img src="' . $photo['image'] . '" class="w-50 ml-2" alt="...">';
            }
            --$counter_high_image;

            if($counter_high_image==0){
                $html .= '</div>';
                $high_image =true;
                $counter_high_image = 2;
            }
            $first_image = !$first_image;
        }
        ++$i; 
    } //en for

    if($counter > 2){
        $html .= "</div>";
    }


    return $html;
}




// images - handle thumbnails to pages.
/*
function wyw_thumbnails($id){
    $image = get_the_post_thumbnail_url( $id, 'medium' );

    $html = 'Elcoldnkdnksnd';


    if($image != ''){
       $html = '<div class="row justify-content-center mt-3"></div>';

        echo '<pre>';
        var_dump('Entre');
        echo '</pre>';
        //add style
        wp_register_style( 'custom', false );
        wp_enqueue_style( 'custom');

        // css custom lineal.
        $thumbnail_css = "
            .thumbnails_img {
                background-image: url({$image});
            }
        ";

        wp_add_inline_style( 'custom', $thumbnail_css );
}
return $html;

}
add_action( 'init', 'wyw_thumbnails' );
*/
function wyw_setup(){
    // Setting up Menus - 

    register_nav_menus( array(
        'main_menu' =>  esc_html__( 'Main Menu', 'wywtravel'),
        'footer_menu' =>  esc_html__( 'Footer Menu', 'wywtravel'),
        'social_menu' => esc_html('Social Menu', 'wywtravel')
    ) );

    // Adding theme supports.

    // thumbnails.
    add_theme_support( 'post-thumbnails' );

}
add_action( 'after_setup_theme', 'wyw_setup');

/*
 * Bootstrap class 
 */

 function wyw_enlace_class($atts, $item, $args){

    if($args->theme_location=='main_menu'){
        $atts['class'] = 'nav_link nav-item';
    }

    return $atts;
 }
 add_filter( 'nav_menu_link_attributes', 'wyw_enlace_class', 10, 3 );



/**
 * Carga los scripts y css del Theme.
 */

 function wyw_scripts() {

    /* Styles Sheets */
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css', false, '4.3.1');
    
    wp_enqueue_style( 'style', get_stylesheet_uri(), array('bootstrap-css'));
    
    wp_enqueue_style( 'flaticon', get_template_directory_uri().'/css/font/flaticon.css' );

    /* Scripts Sheets */
    
    // Deregistering the jQuery version included in wordpress.

    wp_deregister_script('jquery');

    
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, false);

    wp_enqueue_script( 'bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), '1.0', false );

    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.0', false );

    wp_enqueue_script( 'custom-js', get_template_directory_uri().'/js/custom.js', array('bootstrap-js','jquery') ,'1.0', false);

 }
 add_action( 'wp_enqueue_scripts', 'wyw_scripts');


 

?>