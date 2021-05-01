<?php
/**
 * MER-Test-Project's functions and definitions
 */

if ( ! function_exists( 'import_theme_styles' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    /**
     * Proper way to enqueue scripts and styles
     * @link https://developer.wordpress.org/reference/functions/wp_enqueue_style/
     * @link https://developer.wordpress.org/reference/functions/add_action/
     * @link
     * @link
     * @link
     * @link
     */
    function import_theme_styles(...$style_filenames) {
        // global $wp_styles;
        foreach($style_filenames as $style_filename){
            if($style_filename){
                wp_register_style(
                    $style_filename,
                    get_template_directory_uri() . "/css/$style_filename.css",
                    array(),
                    null,
                    'all'
                );
                wp_enqueue_style($style_filename);
            }
        }

        // wp_register_style( 'test',  get_template_directory_uri() .'/css/test.css', array(), null, 'all' );
        // wp_enqueue_style( 'test' );

        // wp_register_style( 'test',  get_template_directory_uri() .'/css/test.css', array(), null, 'all' );
        // $wp_styles->add_data( 'test' );

        // wp_register_style( 'test',  get_template_directory_uri() .'/css/test.css', array(), '1.0', 'all' );
        // wp_enqueue_style( 'test' );

    }
    add_action( 'wp_enqueue_style', 'import_theme_styles', 10, 1);

endif; // myfirsttheme_setup