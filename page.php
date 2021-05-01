<?php
/**
 * The template for displaying all single page post-type.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 */

/**
 * Load header template.
 * @link https://developer.wordpress.org/reference/functions/get_header/
 * @link https://developer.wordpress.org/reference/hooks/wp_head/
 */
get_header();

if (have_posts()) {
    /* Start the Loop */
    while ( have_posts() ) :

        /**
         * Iterate the post index in the loop.
         * @link https://developer.wordpress.org/reference/functions/the_post/
         */
        the_post();

        /**
         * Display the post content.
         * @link https://developer.wordpress.org/reference/functions/the_content/
         */
        the_content();

    endwhile; // End of the loop.

} else {
    $no_post_styles='
        min-height:100vh;
        background-color:#fbfbfb;
        display:flex;
        align-items:center;
        justify-content:center;
    ';

	$no_post = <<<NO_POST
    <div style="$no_post_styles">
        <h2>
            <b>
                No content was found...
            </b>
        </h2>
    </div>
NO_POST;

    echo $no_post;
}

/**
 * Load footer template.
 * @link https://developer.wordpress.org/reference/functions/get_footer/
 * @link https://developer.wordpress.org/reference/hooks/wp_footer/
 */
get_footer();
