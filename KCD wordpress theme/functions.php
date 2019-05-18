<?php


/*
* Make theme available for translation.
* Translations can be filed in the /languages/ directory.
* If you're building a theme based on sydneyy, use a find and replace
* to change 'sydneyy' to the name of your theme in all the template files
*/
load_theme_textdomain( 'sydneyy', get_template_directory() . '/languages' );

// Add default posts and comments RSS feed links to head.
add_theme_support( 'automatic-feed-links' );

// Content width
global $content_width;
if ( ! isset( $content_width ) ) {
$content_width = 1170; /* pixels */
}

/*
* Let WordPress manage the document title.
* By adding theme support, we declare that this theme does not use a
* hard-coded <title> tag in the document head, and expect WordPress to
    * provide it for us.
    */
    add_theme_support( 'title-tag' );

    /*
    * Enable support for Post Thumbnails on posts and pages.
    *
    * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
    */
    add_theme_support( 'post-thumbnails' );
    add_image_size('sydneyy-large-thumb', 830);
    add_image_size('sydneyy-medium-thumb', 550, 400, true);
    add_image_size('sydneyy-small-thumb', 230);
    add_image_size('sydneyy-service-thumb', 350);
    add_image_size('sydneyy-mas-thumb', 480);

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'sydneyy' ),
    ) );

    /*
    * Switch default core markup for search form, comment form, and comments
    * to output valid HTML5.
    */
    add_theme_support( 'html5', array(
    'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
    ) );

    /*
    * Enable support for Post Formats.
    * See http://codex.wordpress.org/Post_Formats
    */
    add_theme_support( 'post-formats', array(
    'aside', 'image', 'video', 'quote', 'link',
    ) );

    // Set up the WordPress core custom background feature.
    add_theme_support( 'custom-background', apply_filters( 'sydneyy_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
    ) ) );
    add_theme_support( 'custom-logo',array(
	    "width" => '400',
	    "height" => '80',
	    'flex-width'  => true,
	    'flex-height' => true,
    ) );

    //Gutenberg align-wide support
    add_theme_support( 'align-wide' );
    function sydneyy_widgets_init(){
	    register_sidebar( array(
		    'name'          => __( 'Copyright Area', 'sydneyy' ),
		    'id'            => 'copyright',
		    'description'   => '',
		    'before_widget' => ' ',
		    'after_widget'  => ' ',
		    'before_title'  => ' ',
		    'after_title'   => ' ',
	    ) );
	    register_sidebar( array(
		    'name'          => __( 'Sidebar Area', 'sydneyy' ),
		    'id'            => 'sidebar-1',
		    'description'   => '',
		    'before_widget' => ' ',
		    'after_widget'  => ' ',
		    'before_title'  => '<h4 class="heading colr">',
		    'after_title'   => '</h4>',
	    ) );
    }

add_action( 'widgets_init', 'sydneyy_widgets_init' );

    function sydneyy_scripts()
    {


	    wp_enqueue_style("jkdc-style-cs", get_theme_file_uri("/css/style.css"), null, "0.1");
	    wp_enqueue_style("jkdc-ddsmoothmenu-cs", get_theme_file_uri("/css/ddsmoothmenu.css"), null, "0.2");
	    wp_enqueue_style("engine-style-cs", get_theme_file_uri("/engine/style.css"), null, "0.1");
	    wp_enqueue_style("sydneyy-cs",get_stylesheet_uri());




	    wp_enqueue_script("jkdc-jquery-js", get_theme_file_uri("/js/jquery.min.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("ddsmoothmenu-js", get_theme_file_uri("/js/ddsmoothmenu.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("jkdc-menu-jquery-js", get_theme_file_uri("/js/menu.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("engine-jquery-js", get_theme_file_uri("/engine/jquery.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("jkdc-menu-collapsed-jquery-js", get_theme_file_uri("/js/menu-collapsed.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("jkdc-cufon-yui-jquery-js", get_theme_file_uri("/js/cufon-yui.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("jkdc-trebuchet-jquery-js", get_theme_file_uri("/js/trebuchet_ms_400-trebuchet_ms_700-trebuchet_ms_italic_700-trebuchet_ms_italic_400.font.js"), array( "jquery" ), "0.1", true);
	    wp_enqueue_script("jkdc-cufon-jquery-js", get_theme_file_uri("/js/cufon.js"), array( "jquery" ), "0.1", true);
    }
    add_action( 'wp_enqueue_scripts', 'sydneyy_scripts' );


    function custom_head(){
	    $custom_logo_id = get_theme_mod( 'custom_logo' );
	    $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
        ?>
        <style>
            .logo {

                float: left;

                height: 79px;

                width: 600px;

                margin-left: 30px;

                margin-top: 13px;

                background-image: url("<?php echo $custom_logo_url;?>");

                background-repeat: no-repeat;

            }

        </style>
        <?php
    }

    add_action('wp_head','custom_head');