<?php

get_header(  );
while(have_posts(  )): the_post(  );
$image_url = get_the_post_thumbnail_url( );
//var_dump($image_url);
?>
    <main class="row justify-content-center contact-size" style="background-image: url(<?php echo $image_url ?>)">
        <div class="container">
            <div class="row justify-content-center mb-4 p-5">
                <div class="col-md-6 d-flex align-content-center">
                    <div class="row m-auto">
                        <h4 class="inquiry-title">Where you Want, yes!!!. You can make your dreems's trip with us</h4>

                        <p style="color:white; text-shadow:2px 2px var(--color-secundario-rgba)"> Get free information. Don't worry, <br> <span style="background-color: red; color:white; padding:1px;"><strong>we respect your privacy!</strong></span></p>
                    </div>
                </div>

                <div class="col-md-6 contact-bg p-3">
                    <?php the_content( )?>
                </div>

            </div>
        </div>

    </main>
    <?php endwhile;

get_footer();
?>