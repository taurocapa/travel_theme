

<?php 

/*
 *  Template Name: Options
 */
$post_id = get_the_ID( );
?>
<h3 class="text-center "><?php the_title(  )?></h3>

<img class="img-fluid " src=<?php echo get_the_post_thumbnail_url( $post_id, 'small_image' );?> alt=" ">
<p class="img-fluid ">
    
<?php 
    $content = get_the_content( );
    echo wp_trim_words( $content, 50, '...' );
?></p>
<a href=
<?php
    $link = get_page_by_title( the_title());
     get_the_permalink( $link );?> class="form-control text-center e-option">Explore</a>
