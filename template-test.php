<?php
/*
Template Name: Test

*/
get_header();
?>

    <div class="row row-page row-homecontent">

        <div class="container">

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>

        </div>

    </div><!-- row row-main -->


<?php get_footer(); ?>