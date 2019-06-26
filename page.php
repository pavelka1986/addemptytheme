<?php get_header(); ?>

    <div class="row row-main">

        <section class="container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
                    <?php if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; endif; ?>
        </section>

    </div>

<?php get_footer(); ?>