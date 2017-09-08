<?php
/**
 * Template Name: Home page
 *
 */
get_header(); ?>


    <main id="main" class="bc-main" role="main">
        <div id="content" class="bc-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <div class="entry-content">
                                    <?php the_content(); ?>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>