<?php get_header(); ?>
    <?php while(have_posts(  )): the_post(  );
    $post_id = get_the_id();
    ?>

        <body>
            <section class="hero" style="background-image:url(<?php echo get_post_meta($post_id,'wyw_cmb2_title_hero_image', true)?>)">
                <div class="row justify-content-center">
                    <div style="z-index:1;">
                        <h2 class="title "><?php echo get_post_meta( $post_id, 'wyw_cmb2_title_hero_title', true ) ?></h2>
                    </div>
                </div>

                <div class="row ">
                    <div class="col-md-6 col-lg-8 px-5 mt-5 hero-resume ">
                        <h1><?php echo get_post_meta($post_id,'wyw_cmb2_title_hero_place', true)?></h1>
                        <p class="mt-5 "><?php echo get_post_meta($post_id,'wyw_cmb2_title_hero_place_description', true)?></p>
                    </div>
                </div>
            </section>
            <!-- End Hero-->
            <!-- Destination Section -->
            <div class="container ">
                <section class="destination ">
                <?php get_template_part( 'template-parts/option', 'page' );?>
                </section>
            </div>
            
            <!-- End of Destination Section -->
            <section class="destination-e" style="background-image:url(<?php echo get_post_meta($post_id,'wyw_cmb2_title_exotic_image', true)?>)">
                <div class="row justify-content-center ">
                    <div style="z-index : 1">
                        <h2 class="title "><?php echo get_post_meta($post_id,'wyw_cmb2_title_exotic_title', true)?></h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-6 col-lg-6 "></div>
                    <div class="col-md-6 col-lg-6 px-5 mt-5 hero-resume ">
                        <h1><?php echo get_post_meta($post_id,'wyw_cmb2_title_exotic_place', true)?></h1>
                        <p class="mt-5 "><?php echo get_post_meta($post_id,'wyw_cmb2_title_exotic_place_description', true)?></p>
                        <?php $destinations = get_page_by_title( 'destinations' );?>
                        <a href="<?php echo get_permalink( $destinations->ID); ?>" class="text-center e-option ">Explore</a>
                    </div>
                </div>
            </section>

        </body>
    <?php endwhile; ?>
<?php get_footer( );?>

