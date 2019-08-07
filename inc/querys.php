<?php 

// create hotels page.
function wyw_query_hotels($items = -1){

    $args = array (
        'post_type' => 'hotel_class',
        'post_per_page' => $items
    );

    $hotels = new WP_Query($args);

    while($hotels->have_posts(  )): $hotels->the_post();?>

    <div class="row mb-3">
        <div class="col-md-6 p-3">
            <?php the_post_thumbnail( 'medium');?>
        </div>
        <div class="col-md-6 p-3 aling-content-center">
            <h2 class="hotel-subtitle"><?php the_title();?></h2>

            <?php
            
            
                $sub_title = get_post_meta( get_the_ID(  ), 'wyw_hotel_fields_content_subtitle', true );
                $rooms = get_post_meta( get_the_ID(  ), 'wyw_hotel_fields_hotel_rooms', true );
                $style = get_post_meta( get_the_ID(  ), 'wyw_hotel_fields_style_room', true );
                $vipe = get_post_meta( get_the_ID(  ), 'wyw_hotel_fields_vipe_type', true );
                $site = get_post_meta( get_the_ID(  ), 'wyw_hotel_fields_hotel_site', true );

            
            ?>
            <h6 class="hotel-subtitle-3">Neigborhood:<span class="hotel-subtitle-2"> <?php echo $sub_title ?></span></h6>
            <p><?php echo wp_trim_words(get_the_content(), 50, ' ...') ;?></p>
        </div>
    </div>
    <div class="row d-flex justify-content-between aling-content-center hotels-details px-3 mb-3">
        <p class="details mt-3"><?php echo $rooms ?> rooms.</p>
        <p class="details mt-3">Room Style: <?php echo $style?></p>
        <p class="details mt-3">Vibe: <?php echo $vipe?></p>
        <p class="details mt-3"><?php echo $site?></p>
    </div>
    <div class="row justify-content-end ">
        <a class ="e-option mb-4" href=<?php echo get_the_permalink( get_the_ID(  )) ?>>Read more...</a>
    </div>
    <hr>
<?php endwhile; wp_reset_postdata(  ); 

}

// create cruiser-post
function wyw_query_cruisers($items = -1){

    $args = array (
        'post_type' => 'cruiser_class',
        'post_per_page' => $items
    );

    $cruisers = new WP_Query($args);

    while($cruisers->have_posts(  )): $cruisers->the_post();?>


    <div class="row mb-3">
        <div class="col-md-6 p-3">
            <?php the_post_thumbnail( 'medium');?>
        </div>
        <div class="col-md-6 p-3 aling-content-center">
            <h2 class="hotel-subtitle"><?php the_title();?></h2>

            <?php
            
            
                $days = get_post_meta( get_the_ID(  ), 'wyw_cruiser_field_cruiser_days', true );
                $rooms = get_post_meta( get_the_ID(  ), '', true );
                $style = get_post_meta( get_the_ID(  ), '', true );
                $vipe = get_post_meta( get_the_ID(  ), '', true );
                $site = get_post_meta( get_the_ID(  ), '', true );

            
            ?>
            <h6 class="hotel-subtitle-3">Day(s):<span class="hotel-subtitle-2"> <?php echo $days ?></span></h6>
            <p><?php echo wp_trim_words(get_the_content(), 50, ' ...') ;?></p>
        </div>
    </div>
    <div class="row justify-content-end ">
        <a class ="e-option mb-4" href=<?php echo get_the_permalink( get_the_ID(  )) ?>>Read more...</a>
    </div>
    <hr>
<?php endwhile; wp_reset_postdata(  ); 

}
?>