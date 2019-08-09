<?php
get_header(  );

global $wp_query;
$total_results = $wp_query->found_posts;
if($total_results>0){ ?>
    <div class="container mb-4">
    <?php 
    while($wp_query->have_posts() ): $wp_query->the_post(); {
        
        $post_id = get_the_permalink( get_the_id());
        $if_option = get_post( get_the_id(), 'ARRAY_A');
        if($if_option['post_content']==''|| $if_option['post_type'] != 'page'){ ?>
        <div class="list-group search-result">
            <a type="button" class="list-group-item list-group-item-action my-1 " href="<?php echo $post_id?>">
                <?php the_title()?>
            </a>
        </div>
    <?php }
    }
    endwhile;?>
       </div>
    <?php 
};
wp_reset_query(); 
?>
    <?php get_footer();?>