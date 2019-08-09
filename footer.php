<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<html>

<body>

    <footer class="container-fluid">
        <div class="row">
            <div class="col-md-4 site-map ">
                <?php 
                    if (has_nav_menu( "footer_menu" )){
                        ?>
                <h5>SITE MAP</h5>
                <?php
                        $args = array(
                            'menu_class' => 'nav d-flex flex-column mt-auto ef-option',
                            'theme_location' => 'footer_menu',
                        );
                        wp_nav_menu($args);
                    }
                ?>




            </div>
            <div class="col-md-4  d-flex site-map">
                <div class="col-md-4 mt-auto">

                    <img class="footer-logo" src=<?php echo get_template_directory_uri( ) . '/img/logoprotocolo.png'?> style="width: 5rem;">
                    <img class="footer-logo" src=<?php echo get_template_directory_uri( ) . '/img/Virtuoso.png'?> style="width: 5rem;" alt="">

                </div>
                <div class="col-md-8 mt-auto"><span>Independently affiliated with
                        Protocolo Tours, a Virtuoso® Member.</span></div>
            </div>
            <div class="col-md-4">
                <h5>CONTACT US</h5>
                <div class="row p-1 d-block">
                    <p class="flaticon-placeholder py-0  mb-0">&nbsp;95 Merrick Way, 3rd Floor, Coral Gables, FL.</p>

                    <p class="flaticon-envelope py-0 mb-0 email">&nbsp;<a href="mailto:contact@wywtravel.com?subject=Where I want with you">Email Us</a></p>
                    <p class="flaticon-call py-0 mb-0">&nbsp;+1 (786) 4500561</p>



                </div>

                <div class="social-bar-foot">
                    <a href="http://instagram.com/wywtravel" target="_blank"><i class="flaticon flaticon-instagram"></i></a>
                    <!-- <a href="#" target="_blank"><i class="flaticon flaticon-facebook-logo"></i></a>
                    <a href="#" target="_blank"><i class="flaticon flaticon-linkedin-letters"></i></a>
                    <a href="#" target="_blank"><i class="flaticon flaticon-whatsapp"></i></a> -->
                </div>


            </div>
        </div>

    </footer>


    <?php wp_footer() ?>

</body>

</html>