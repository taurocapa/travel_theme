<?php 


get_header();

$post_id = get_the_ID(  );

while(have_posts(  )): the_post(  );
?>
<h1> Parea usar en el Blog</h1>

<?php endwhile;

?>


<?php get_footer(); ?>