<?php 

    /**
     * Template Name: Cruiser List
     */

    get_header();
?>

<div class="container">

    <?php 
                
        while(have_posts(  )): the_post(  );
        the_content(  );
        $titulo = get_the_title( );
                    
    ?>
        <h1><?php echo $titulo;?></h1>

        <?php wyw_query_cruisers(); ?>
<?php
    endwhile;
?>
</div>
<?php get_footer( );?>