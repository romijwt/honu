<?php
/**
 * Template name: JWPlayer
 */
import_theme_styles("test","honu");
get_header();

if (have_posts()) {
    /* Start the Loop */
    while ( have_posts() ) :

        /**
         * Iterate the post index in the loop.
         * @link https://developer.wordpress.org/reference/functions/the_post/
         */
        the_post();

?>

    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>

    <div class="chester" itemscope itemtype="https://schema.org/VideoObject">
        <script src="https://cdn.jwplayer.com/players/hQveLx72-1Jfh5iAN.js"></script>
    </div>

    <div style="display:flex;justify-content:center;flex-direction:column;align-items:center;">
        <p id="p-1">Honu works!!!!</p>
        <p id="p-2">Sand works!!!!</p>
    </div>

    <script src="https://cdn.jwplayer.com/libraries/1Jfh5iAN.js"></script>

<?php

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

get_footer();
