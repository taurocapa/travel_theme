<?php

/*
Template Name: Disney Template
*/
get_header();
?>


    <div class="container">
        <div class="row">
            <h1><?php  the_title( );  ?></h1>
        </div>
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.disneytravelcenter.com/ec3c5f7e20/" scrolling="no"></iframe>
        </div>
    </div>

    <?php get_footer(  );?>