
<?php wp_head(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- scripts-->
</head>

<body <?php body_class(  );?>>
    <header>

        <!-- Social bar -->
        <div class="row social-bar d-flex justify-content-end  py-1 pr-5">
            <div class="scroll-page"></div>
            <div class="social-bar">
                <a href="#" target="_blank"><i class="flaticon flaticon-facebook-logo"></i></a>
                <a href="#" target="_blank"><i class="flaticon flaticon-instagram"></i></a>
                <a href="#" target="_blank"><i class="flaticon flaticon-linkedin-letters"></i></a>
                <a href="#" target="_blank"><i class="flaticon flaticon-whatsapp"></i></a>
            </div>
        </div>
        <!--

-->
        <!-- Menu Bar -->

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo esc_url( home_url('/')); ?>">

                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if ( has_custom_logo() ) {
                                echo '<img src="'. esc_url( $logo[0] ) .'"style="width: 70px;">';
                        } else {
                                echo '<img src="'. get_stylesheet_directory_uri() . '/img/logo.svg' .' "style="width: 70px;" >';
                        }
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

                <?php
                    // Arguments para construir el menu.
                    if (has_nav_menu( 'main_menu' )){
                        $args = array(
                            'menu_class' => 'nav nav-justified flex-column flex-md-row text-center',
                            'container_id' => 'navbarNav',
                            'container_class' => 'collapse navbar-collapse justify-content-end nav-item navbar-nav  nav-link',
                            'theme_location' => 'main_menu'
                        );
                        wp_nav_menu($args);
    
                    }
                ?>
            </nav>

        </div>
</header>
</body>