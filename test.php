<?php
/* 
    Template Name: Page Test Template
*/
get_header();?>
<h1>Test template</h1>
<?php
    if(have_posts()):
    
        while (have_posts()): the_post(); ?>
        <h3><?php the_title(); ?></h3>
        <small>Posted on <?php the_time()?></small>
        <p><?php the_content(); ?></p>
        <hr>
    <?php endwhile;

    endif;    
?>
<?php get_footer();?>