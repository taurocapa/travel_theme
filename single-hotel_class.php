<?php 


get_header();

$post_id = get_the_ID(  );
while(have_posts(  )): the_post(  );

?>

<div class="container-fluid d-flex">
    <div class="row p-3">
        <div class="col-md-6 order-one">
            <nav class="nav py-3 mb-5">
                <a class="nav-link active" href="#id_about">About</a>
                <a class="nav-link" href="#id-details">Details</a>
                <a class="nav-link" href="#id-photos">Photos</a>
            </nav>
            <!-- About -->
            <div class="row mb-2 destinations-sections" id="id_about">
                <p class="mb-0 mr-auto p-2 text-left"><i class="flaticon flaticon-profiles"></i> &nbsp; <?php echo get_post_meta($post_id,'wyw_hotel_fields_content_subtitle', true)?></p>
            </div>
            <div class="row">
                <p><?php the_content( );?></p>
            </div>

            <!-- Include -->
        </div>
        <!-- Right side-->
        <div class="col-md-6 order-two">
            <h1 class="hotel-subtitle"><?php the_title(  )?></h1>
            <h4 class="hotel-subtitle-2"><?php echo get_post_meta( $post_id, 'wyw_hotel_fields_content_subtitle', true)?></h4>

            <div class="row justify-content-center mt-3">
                    <?php the_post_thumbnail('medium');?>
            </div>

            <div class="row justify-content-center price-section">
                    <table class="table table-striped price-list mt-3">
                        <tbody>
                            <tr>
                                <th scope="row">Rooms</th>
                                <td><?php echo get_post_meta( $post_id, 'wyw_hotel_fields_hotel_address', true )?></td>
                            </tr>
                            <tr>
                                <th scope="row">Room Style</th>
                                <td><?php echo get_post_meta( $post_id, 'wyw_hotel_fields_style_room', true )?></td>
                            </tr>
                            <tr>
                                <th scope="row">Vipe</th>
                                <td><?php echo get_post_meta( $post_id, 'wyw_hotel_fields_vipe_type', true )?></td>
                            </tr>
                            <tr>
                                <th scope="row">Web Site</th>

                                <?php $hotel_site = get_post_meta( $post_id, 'wyw_hotel_fields_hotel_site', true );?>
                                <td class="social-bar"><a target = "_blank" href="<?php echo esc_url($hotel_site); ?>"><?php echo $hotel_site?></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>


            <!--inquiry section-->
            <div class="row">
                <div class="col p-5 text-center ">
                    <p style="font-size: 0.7rem;"><strong>*** Dou you require information? contact us</strong></p>
                    <a class="form-control e-option " id="b-inquiry" href=<?php echo get_permalink(get_page_by_title('inquiry'))?>>Inquiry</a>
                </div>
                <!-- echo get_template_directory_uri() . '/inquiry-page.php'-->

            </div>

            <!--end inquiry section-->

        </div>
        <!-- end right side-->
    </div>
</div>
<div class="container-fluid">
    <div class="row separator mb-3"></div>
    <div class="row">
        <div class="col-md-8 destinations-sections m-auto" id="id-photos">
            <p class="mb-0 mr-auto p-2 text-center"><i class="flaticon flaticon-photo-camera"></i> &nbsp; Photos</p>
        </div>
        <div id="carouselExampleFade" class="carousel slide carousel-fade mt-5 mb-5 col-md-8 m-auto" data-ride="carousel">
            <div class="carousel-inner">
                <!-- <div class="carousel-item active d-flex"> -->
                    <?php 
                        $content_photo = get_post_meta( $post_id, 'wyw_content_page_photos_photo', true );
                        echo wyw_carousel_photos($content_photo);
                    ?>
               <!-- </div> -->

            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true" style="background-image: url(<?php echo get_template_directory_uri(  ) . '/img/custom-icons/arrow-left.jpg'?>)"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"style="background-image: url(<?php echo get_template_directory_uri(  ) . '/img/custom-icons/arrow-right.jpg'?>)"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
<?php endwhile;

?>


<?php get_footer(); ?>