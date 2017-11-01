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

                        <div class="my-links">
                            <a href="http://chrisbishop.me.uk/my-blog/" target="_blank" title="My blog">
                                <i class="fa fa-pencil-square-o fa-2x"></i>
                            </a>
                            <a href="https://twitter.com/thebishochannel" target="_blank" title="My Twitter">
                                <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="https://uk.linkedin.com/in/christopherdomingo" target="_blank" title="My Linkedin">
                                <i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="https://github.com/domingobishop" target="_blank" title="My Github">
                                <i class="fa fa-github-square fa-2x" aria-hidden="true"></i>
                            </a>
                            <a href="https://vimeo.com/mashuprealities" target="_blank" title="My Vimeo">
                                <i class="fa fa-vimeo-square fa-2x" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>


<?php get_footer(); ?>