<?php 


get_header();

while(have_posts(  )): the_post(  );
        get_template_part( 'template-parts/service', 'page' );
endwhile;

?>
<h1>contenido desde single</h1>
<?php get_footer(); ?>