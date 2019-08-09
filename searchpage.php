<?php 

/*
Template Name: Search Page
 */
global $query_string;

wp_parse_str( $query_string, $search_query );
$search = new WP_Query( $search_query );
get_header()?>

<div class="container">
    <div class="row justify-content-end mb-5">
        <?php get_search_form(); ?>
    </div>
</div>
<?php
?>
    <?php get_footer()?>