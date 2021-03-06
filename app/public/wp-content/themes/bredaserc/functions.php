<?php
/**
 * bredaserc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bredaserc
 */

if (! defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

if (! function_exists('bredaserc_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function bredaserc_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on bredaserc, use a find and replace
         * to change 'bredaserc' to the name of your theme in all the template files.
         */
        load_theme_textdomain('bredaserc', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Main', 'bredaserc'),
                'menu-2' => esc_html__('Footer', 'bredaserc'),
            )
        );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption',
                'style',
                'script',
            )
        );

        // Set up the WordPress core custom background feature.
        add_theme_support(
            'custom-background',
            apply_filters(
                'bredaserc_custom_background_args',
                array(
                    'default-color' => 'ffffff',
                    'default-image' => '',
                )
            )
        );

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support(
            'custom-logo',
            array(
                'height'      => 250,
                'width'       => 250,
                'flex-width'  => true,
                'flex-height' => true,
            )
        );
    }
endif;
add_action('after_setup_theme', 'bredaserc_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bredaserc_content_width()
{
    $GLOBALS['content_width'] = apply_filters('bredaserc_content_width', 640);
}
add_action('after_setup_theme', 'bredaserc_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bredaserc_widgets_init()
{
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'bredaserc'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'bredaserc'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'bredaserc_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function bredaserc_scripts()
{
    wp_enqueue_style('bredaserc-glider', get_template_directory_uri() . '/frontend/css/glider.min.css', array(), _S_VERSION);
    wp_enqueue_style('bredaserc-style', get_stylesheet_uri(), array(), _S_VERSION);

    wp_enqueue_script('bredaserc-glider', get_template_directory_uri() . '/frontend/javascript/glider.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('bredaserc-fontawesome', 'https://kit.fontawesome.com/83731ec392.js', array(), _S_VERSION, false);
    wp_enqueue_script('bredaserc-script', get_template_directory_uri() . '/frontend/javascript/scripts.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'bredaserc_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Custom nav walker with bulma support.
 */
require get_template_directory() . '/inc/nav-walker.php';

/**
 * Include ACF fields
 */
if (function_exists('acf_add_local_field_group')) :
    require_once(get_template_directory() . '/config/acf/blocks.php');
    require_once(get_template_directory() . '/config/acf/footer.php');
    require_once(get_template_directory() . '/config/acf/header.php');
endif;

/**
 * Add ACF options page
 */

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init()
{

    // Check function exists.
    if (function_exists('acf_add_options_page')) {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => 'Site opties',
            'menu_title'    => 'Site opties',
            'menu_slug'     => 'bredaserc-options',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}

/**
 * Create new post types
 */

function create_cpt_teams()
{
    $labels = array(
        'name'               => 'Teams',
        'singular_name'      => 'Team',
        'search_items'       => 'Zoek teams',
        'all_items'          => 'Alle teams',
        'edit_item'          => 'Bewerk team',
        'new_item'           => 'Voeg nieuw team toe',
        'update_item'        => 'Update team',
        'add_new'            => 'Voeg nieuw team toe',
        'add_new_item'       => 'Voeg nieuw team toe',
        'new_item_name'      => 'Nieuw team',
        'not_found'          => 'Geen teams gevonden',
        'not_found_in_trash' => 'Geen teams in prullenbak gevonden',
        'menu_name'          => 'Teams'
    );

    $args = array(
        'labels'         => $labels,
        'public'         => true,
        'has_archive'    => false,
        'menu_position'  => 5,
        'description'    => 'Teams van de Bredase RC',
        'rewrite'        => array('slug' => 'teams'),
        'menu_icon'      => 'dashicons-groups',
        'supports'       => array(
            'title',
            'custom-fields',
            'revisions'),
    );
         
    register_post_type('teams', $args);
}

function create_cpt_games()
{
    $labels = array(
        'name'               => 'Wedstrijden',
        'singular_name'      => 'Wedstrijd',
        'search_items'       => 'Zoek wedstrijden',
        'all_items'          => 'Alle wedstrijden',
        'edit_item'          => 'Bewerk wedstrijd',
        'new_item'           => 'Voeg nieuw wedstrijd toe',
        'update_item'        => 'Update wedstrijd',
        'add_new'            => 'Voeg nieuw wedstrijd toe',
        'add_new_item'       => 'Voeg nieuw wedstrijd toe',
        'new_item_name'      => 'Nieuw wedstrijd',
        'not_found'          => 'Geen wedstrijden gevonden',
        'not_found_in_trash' => 'Geen wedstrijden in prullenbak gevonden',
        'menu_name'          => 'Wedstrijden'
    );

    $args = array(
        'labels'         => $labels,
        'public'         => true,
        'has_archive'    => false,
        'menu_position'  => 6,
        'description'    => 'Wedstrijden van de Bredase RC',
        'rewrite'        => array('slug' => 'wedstrijden'),
        'menu_icon'      => 'dashicons-calendar-alt',
        'supports'       => array(
            'title',
            'custom-fields',
            'revisions'),
    );

    register_post_type('games', $args);
}

    // Hooking up our function to theme setup
    add_action('init', 'create_cpt_games');
    add_action('init', 'create_cpt_teams');
