<?php
/**
 * Theme Functions Page
 * @ Fajar WP Theme
 * @ Fajar WP Theme 2.0
 **/
// Load all scripts and stylesheets
function fajar_load_styles() {
    if(is_page_template('page-coming-soon.php')){
        wp_enqueue_style( 'fajar-comingsoon' , get_template_directory_uri()."/includes/coming-soon/css/comingsoon.css");
        wp_enqueue_style( 'fajar-component' , get_template_directory_uri()."/includes/coming-soon/css/component.css");
    } else {
        wp_enqueue_style( 'fajar' , get_template_directory_uri()."/css/fajar.css");
        wp_enqueue_style( 'bootstrap' , get_template_directory_uri()."/css/bootstrap.css");
        $theme_skins = fajar_option('theme_skins');
        if(!empty($theme_skins)){
            wp_enqueue_style( $theme_skins , get_template_directory_uri()."/css/color-".$theme_skins.".css");
        } else {
            wp_enqueue_style( 'color-default' , get_template_directory_uri()."/css/color-default.css");
        }
        $enable_dark_version = fajar_option('enable_dark_version');
        if($enable_dark_version == 1){
            wp_enqueue_style( 'dark' , get_template_directory_uri()."/css/dark.css");
        } else {
            wp_enqueue_style( 'light' , get_template_directory_uri()."/css/light.css");
        }
        wp_enqueue_style( 'style' , get_template_directory_uri()."/style.css");
    }
}
add_action('wp_enqueue_scripts', 'fajar_load_styles');
function fajar_load_scripts_footer() {
    wp_enqueue_script('modernizr-2.6.2.min', get_template_directory_uri() . '/js/modernizr-2.6.2.min.js', array('jquery'), '', false  );
    wp_enqueue_script('bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true  );
    if(is_page_template('page-coming-soon.php')){
        wp_enqueue_script('classie', get_template_directory_uri() . '/includes/coming-soon/js/classie.js', array('jquery'), '', true  );
        wp_enqueue_script('modalEffects', get_template_directory_uri() . '/includes/coming-soon/js/modalEffects.js', array('jquery'), '', true  );
    } else {
        wp_enqueue_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '', false  );
        wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true  );
        wp_enqueue_script('jquery.nicescroll.min', get_template_directory_uri() . '/js/jquery.nicescroll.min.js', array('jquery'), '', true  );
        $map_position = get_field('map_position');
        if(is_page_template('page-contacts.php') && $map_position != 'hide'){
            wp_enqueue_script('googleAPI', '//maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js', array('jquery'), '', true  );
            $map_style = get_field('map_style');
            if($map_style == 'dark'){
                wp_enqueue_script('map-dark', get_template_directory_uri() . '/js/map-dark.js', array('jquery'), '', true  );
            } else {
                wp_enqueue_script('map-blue', get_template_directory_uri() . '/js/map-blue.js', array('jquery'), '', true  );
            }
        }
        // Store Locator
        if(is_page_template('page-store-locator.php')){
            wp_enqueue_script('store-map', '//maps.google.com/maps/api/js?sensor=false&amp;libraries=places,geometry', array('jquery'), '', false  );
            wp_enqueue_script('jlocator.min', get_template_directory_uri() . '/js/jlocator.min.js', array('jquery'), '', false  );
        }
    }
    wp_enqueue_script('custom-scriptss', get_template_directory_uri() . '/js/custom-scripts.js', array('jquery'), '', false  );
    // IE Conditional
    wp_enqueue_script('html5shiv', get_template_directory_uri() . '/js/html5shiv.min.js', array('jquery'));
    wp_script_add_data( 'html5shiv', 'conditional', 'lt IE 9' );
    wp_enqueue_script('respond', get_template_directory_uri() . '/js/respond.min.js', array('jquery'));
    wp_script_add_data( 'respond', 'conditional', 'lt IE 9' );
}
// Load scripts in footer
add_action('wp_enqueue_scripts', 'fajar_load_scripts_footer');
// Theme Title
add_theme_support( 'title-tag' );
// After Theme Setup
function fajar_theme_setup() {
    // Add custom backgroud support
    add_theme_support( 'custom-background' );
    // Adds RSS feed links to <head> for posts and comments.
    add_theme_support( 'automatic-feed-links' );
    // Add editor style support
    add_editor_style();
}
add_action( 'after_setup_theme', 'fajar_theme_setup' );
// Variable
define('THEME_DIR', get_template_directory());
// Text Domain
load_theme_textdomain( 'fajar-wp', THEME_DIR . '/languages' );
// Add custom background support
require get_template_directory() . '/lib/custom-header.php';
// Add Thumbnail Support
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
// Content Width
if ( !isset( $content_width ) ) $content_width = 1000;
function fajar_wp_widgets_init() {
// Registering sidebars
register_sidebar(array(
    'name' => esc_html__( 'Default Sidebar','fajar-wp' ),
    'id' => 'default',
    'description' => esc_html__( 'Widgets in this area will be shown at sidebar of the Page.','fajar-wp' ),
    'before_title' => '<div class="heading"><h3>',
    'after_title' => '</h3></div>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="sidebar-widget">'
));
register_sidebar(array(
    'name' => esc_html__( 'Category & Single Post Sidebar','fajar-wp' ),
    'id' => 'blog',
    'description' => esc_html__( 'Widgets in this area will be shown at sidebar of the category & post single page.','fajar-wp' ),
    'before_title' => '<div class="heading"><h3>',
    'after_title' => '</h3></div>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="sidebar-widget">'
));
register_sidebar(array(
    'name' => esc_html__( 'Shop Sidebar','fajar-wp' ),
    'id' => 'shop',
    'description' => esc_html__( 'Widgets in this area will be shown at sidebar of the shop page.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div><hr class="margin-top-40 margin-bottom-40">',
    'before_widget' => '<div class="sidebar-widget no-margin">'
));
// Footer Sidebars
register_sidebar(array(
    'name' => esc_html__( 'Footer 1 & 4 Recent Tweets Area','fajar-wp' ),
    'id' => 'footer1',
    'description' => esc_html__( 'Widgets in this area will be shown at footer recent tweets area.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 1 & 4 Info Area','fajar-wp' ),
    'id' => 'footer2',
    'description' => esc_html__( 'Widgets in this area will be shown at footer info area.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 1 & 4 Widget Area 1','fajar-wp' ),
    'id' => 'footer3',
    'description' => esc_html__( 'Widgets in this area will be shown at footer 3 column widget area 1.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 1 & 4 Widget Area 2','fajar-wp' ),
    'id' => 'footer4',
    'description' => esc_html__( 'Widgets in this area will be shown at footer 3 column widget area 2.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 1 & 4 Widget Area 3','fajar-wp' ),
    'id' => 'footer5',
    'description' => esc_html__( 'Widgets in this area will be shown at footer 3 column widget area 3.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div><div class="space20"></div> ',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 2 & 3 Widget Area 1','fajar-wp' ),
    'id' => 'footer6',
    'description' => esc_html__( 'Widgets in this area will be shown at footer 3 column widget area 1.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 2 & 3 Widget Area 2','fajar-wp' ),
    'id' => 'footer7',
    'description' => esc_html__( 'Widgets in this area will be shown at footer 3 column widget area 2.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div>',
    'before_widget' => '<div class="clearfix">'
));
register_sidebar(array(
    'name' => esc_html__( 'Footer 2 & 3 Widget Area 3','fajar-wp' ),
    'id' => 'footer8',
    'description' => esc_html__( 'Widgets in this area will be shown at footer 3 column widget area 3.','fajar-wp' ),
    'before_title' => '<h3>',
    'after_title' => '</h3>',
    'after_widget' => '</div><div class="space20"></div> ',
    'before_widget' => '<div class="clearfix">'
));
}
add_action( 'widgets_init', 'fajar_wp_widgets_init' );
// Registering Menus
function fajar_register_menu() {
    $locations = array(
        'primary-menu' => esc_html__( 'Primary Menu', 'fajar-wp' ),
        'top-menu' => esc_html__( 'Top Menu', 'fajar-wp' ),
        'center-left' => esc_html__( 'Center Left Menu', 'fajar-wp' ),
        'center-right' => esc_html__( 'Center Right Menu', 'fajar-wp' ),
        'footer-menu' => esc_html__( 'Footer Menu', 'fajar-wp' )
    );
    register_nav_menus( $locations );
}
add_action( 'init', 'fajar_register_menu' );
// Changing excerpt 'more' text
function new_excerpt_more($more) {
    global $post;
}
add_filter('excerpt_more', 'new_excerpt_more');
//fajar multiple excerpt
function fajar_excerpt($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;
    if(strlen($excerpt)>$charlength) {
        $subex = substr($excerpt,0,$charlength-5);
        $exwords = explode(" ",$subex);
        $excut = -(strlen($exwords[count($exwords)-1]));
        if($excut<0) {
            echo substr($subex,0,$excut);
        } else {
            echo do_shortcode($subex);
        }
        echo "..";
    } else {
        echo do_shortcode($excerpt);
    }
}
function fajar_excerpt2($charlength) {
    $excerpt = get_the_excerpt();
    $charlength++;
    if(strlen($excerpt)>$charlength) {
        $subex = substr($excerpt,0,$charlength-5);
        $exwords = explode(" ",$subex);
        $excut = -(strlen($exwords[count($exwords)-1]));
        if($excut<0) {
            return substr($subex,0,$excut);
        } else {
            return $subex;
        }
        return "..";
    } else {
        return $excerpt;
    }
}
// Controling excerpt length
function custom_excerpt_length( $length ) {
    return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
// Get Feature Image URL By Post ID
function get_feature_image_url($post_id){
    $image_url = wp_get_attachment_url( get_post_thumbnail_id($post_id) );
    return $image_url;
}
//Pagination
function fajar_pagination($pages = '', $range = 2){
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) $paged = 1;
    if($pages == ''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    if(1 != $pages){
        echo "<div class='clearfix clear'></div>";
        echo "<div class='pagination'>";
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
        if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
        for ($i=1; $i <= $pages; $i++){
            if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )){
                echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
        echo "</div>\n";
    }
}
// Set avatar Class
add_filter('get_avatar','add_gravatar_class');
function add_gravatar_class($class) {
    $class = str_replace("class='avatar", "class='avatar media-object", $class);
    return $class;
}
// Registering custom Comments
function fajar_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);
    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    } ?>
    <li class="comment">
        <article class="comment-wrapper clearfix">
            <div class="comment-avartar">
                <?php echo get_avatar( $comment, 60 ); ?>
            </div>
            <div class="comment-content-wrapper clearfix">
                <div class="comment-head">
                    <span class="comment-author"><?php printf(esc_html__('%s','fajar-wp'), comment_author()); ?> </span>
                    <span class="comment-date"><?php printf( esc_html__('%1$s at %2$s','fajar-wp'), get_comment_date(),  get_comment_time()); ?></span>
                    <span class="comment-reply">
                        <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
                    </span>
                </div>
                <div class="comment-message">
                    <?php comment_text(); ?>
                </div>
            </div>
        </article>
    </li>
<?php
}
// Get Category By ID
function get_category_by_id($post_id){
    $cato = get_the_category( $post_id );
    $count = 1;
    foreach($cato as $cat){
        if($count == 1){
            echo '<a href="'. esc_url(home_url("/")).'?cat='. intval($cat->cat_ID) .'">'. esc_attr($cat->name) .'</a>';
        }
        $count ++;
    }
}
// Advanced Custom Fields
define( 'ACF_LITE', true );
include_once(get_template_directory() . "/lib/advanced-custom-fields/acf.php");
include_once(get_template_directory() . "/lib/advanced-custom-fields/custom-fields.php");
// Theme Widgets
require_once(get_template_directory() . "/lib/widgets.php");
//Plugin Activation Class
require_once(get_template_directory() . '/lib/plugin-activation.php');
add_action( 'tgmpa_register', 'fajar_register_required_plugins' );
function fajar_register_required_plugins() {
    /*
     * Array of plugin arrays. Required keys are name and slug.
     * If the source is NOT from the .org repo, then source is also required.
     */
    $plugins = array(
        // Fajar Framework
        array(
            'name'               => 'Fajar Framework', // The plugin name.
            'slug'               => 'fajar-framework', // The plugin slug (typically the folder name).
            'source'             => get_template_directory() . '/lib/plugins/fajar-framework.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // Fajar Social Count
        array(
            'name'               => 'Fajar Social Count', // The plugin name.
            'slug'               => 'fajar-ss-counts', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/lib/plugins/fajar-ss-counts.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // Fajar Tweets
        array(
            'name'               => 'Fajar Tweets', // The plugin name.
            'slug'               => 'fajar-tweets', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/lib/plugins/fajar-tweets.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // Fajar WP Shortcodes
        array(
            'name'               => 'Theme Shortcodes', // The plugin name.
            'slug'               => 'fajar-shortcodes', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/lib/plugins/fajar-shortcodes.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // Fajar WP CPT's
        array(
            'name'               => 'Custom Post Types', // The plugin name.
            'slug'               => 'fajar-cpt', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/lib/plugins/fajar-cpt.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // Fajar Visual Composer
        array(
            'name'               => 'Visual Composer', // The plugin name.
            'slug'               => 'js_composer', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/lib/plugins/js_composer.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // Fajar WP Revolution Slider
        array(
            'name'               => 'Revolution Slider', // The plugin name.
            'slug'               => 'revslider', // The plugin slug (typically the folder name).
            'source'             => get_template_directory_uri() . '/lib/plugins/revslider.zip', // The plugin source.
            'required'           => true, // If false, the plugin is only 'recommended' instead of required.
            'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
            'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
            'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
            'external_url'       => '', // If set, overrides default API URL and points to an external URL.
            'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
        ),
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'Contact Form 7',
            'slug'      => 'contact-form-7',
            'required'  => false,
        ),
        // This is an example of how to include a plugin from the WordPress Plugin Repository.
        array(
            'name'      => 'WooCommerce',
            'slug'      => 'woocommerce',
            'required'  => false,
        ),

    );

    /*
     * Array of configuration settings. Amend each line as needed.
     *
     * TGMPA will start providing localized text strings soon. If you already have translations of our standard
     * strings available, please help us make TGMPA even better by giving us access to these translations or by
     * sending in a pull-request with .po file(s) with the translations.
     *
     * Only uncomment the strings in the config array if you want to customize the strings.
     */
    $config = array(
        'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                     // Message to output right before the plugins table.

    );
    tgmpa( $plugins, $config );
}
// Fajar Styles
include_once(get_template_directory() .'/fajar-styles-scripts.php');
// Register Fonts Theme Options
function fajar_wp_theme_options_fonts_url() {
    $heading_font = fajar_option("headings_font_face");
    if(!empty($heading_font)){
        $heading_font = $heading_font;
    } else {
        $heading_font = 'Dancing Script';
    }
    $heading_weight = fajar_option("headings_font_weight");
    if(!empty($heading_weight)){
        $heading_weight = $heading_weight;
    } else {
        $heading_weight = 400;
    }
    $meta_font = fajar_option("meta_font_face");
    if(!empty($meta_font)){
        $meta_font = $meta_font;
    } else {
        $meta_font = 'Roboto';
    }
    $meta_weight = fajar_option("meta_font_weight");
    if(!empty($meta_weight)){
        $meta_weight = $meta_weight;
    } else {
        $meta_weight = 700;
    }
    $body_font = fajar_option("body_font_face");
    if(!empty($body_font)){
        $body_font = $body_font;
    } else {
        $body_font = 'Oswald';
    }
    $body_weight = fajar_option("body_font_weight");
    if(!empty($body_weight)){
        $body_weight = $body_weight;
    } else {
        $body_weight = 700;
    }

    $font_url = '';
    /*
    Translators: If there are characters in your language that are not supported
    by chosen font(s), translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'studio' ) ) {
        $font_url = add_query_arg( 'family', urlencode( $heading_font.'|'.$meta_font.'|'.$body_font.':'.$heading_weight.','.$meta_weight.','.$body_weight ), "//fonts.googleapis.com/css" );
    }
    return $font_url;
}
// Enqueue Fonts For Theme Options
function fajar_wp_theme_options_scripts() {
    wp_enqueue_style( 'fajar-wp-theme-options-fonts', fajar_wp_theme_options_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'fajar_wp_theme_options_scripts' );
/* Visual Composer Functions */
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
// check for plugin using plugin name
if ( is_plugin_active( 'js_composer/js_composer.php' ) ) {
    require_once( get_template_directory() . '/lib/visual-composer.php' );
    function fajar_vc_styles() {
        wp_register_style( 'fajar_vc_icons', get_template_directory_uri() . '/lib/vc_icons/fajar_vc_icons.css', false, '1.0.0' );
        wp_enqueue_style( 'fajar_vc_icons' );
    }
    add_action( 'admin_enqueue_scripts', 'fajar_vc_styles' );
}
/* Woocommerce Integration */
if ( is_plugin_active( 'woocommerce/woocommerce.php' ) ) {
    // Add Theme Support
    add_action( 'after_setup_theme', 'woocommerce_support' );
    function woocommerce_support() {
        add_theme_support( 'woocommerce' );
    }
    // Adding Hooks & Functions
    require_once(get_template_directory() . "/includes/woocommerce/woocommerce.php");
    // Comments For Woocommerce
    function fajar_woo_comment($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);
        if ( 'div' == $args['style'] ) {
            $tag = 'div';
            $add_below = 'comment';
        } else {
            $tag = 'li';
            $add_below = 'div-comment';
        } ?>
        <li class="comment">
            <div class="comment_container">
                <div class="comment-avartar">
                    <?php echo get_avatar( $comment, 60 ); ?>
                </div>
                <div class="comment-text">
                    <?php $rating = esc_attr( get_comment_meta( $GLOBALS['comment']->comment_ID, 'rating', true ) );
                    if($rating){ ?>
                        <div class="ratings" title="Rated <?php echo esc_attr($rating); ?> out of 5">
                            <ul class="list-unstyled">
                                <?php for($i = 1; $i <= 5; $i++){
                                    if($i <= $rating){ ?>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star"></i></a></li>
                                    <?php } else{ ?>
                                        <li><a href="javascript:void(0);"><i class="fa fa-star-o"></i></a></li>
                                    <?php }
                                } ?>
                            </ul>
                        </div>
                    <?php } ?>
                    <p class="meta">
                        <strong><?php printf(esc_html__('%s','fajar-wp'), comment_author()); ?></strong> &ndash; <?php printf( esc_html__('%1$s at %2$s','fajar-wp'), get_comment_date(),  get_comment_time()); ?>:
                    </p>
                    <div class="description">
                        <p><?php comment_text(); ?></p>
                    </div>
                </div>
            </div>
        </li>
    <?php
    }
}
if ( is_plugin_active( 'fajar-framework/vafpress.php' ) ) {
    // Including Theme Options
    $tmpl_opt  = get_template_directory() . '/admin/option.php';
// Create instance of Options
    $theme_options = new VP_Option(array(
        'is_dev_mode'           => false,                                  // dev mode, default to false
        'option_key'            => 'vpt_option',                           // options key in db, required
        'page_slug'             => 'vpt_option',                           // options page slug, required
        'template'              => $tmpl_opt,                              // template file path or array, required
        'menu_page'             => 'themes.php',                           // parent menu slug or supply `array` (can contains 'icon_url' & 'position') for top level menu
        'use_auto_group_naming' => true,                                   // default to true
        'use_util_menu'         => true,                                   // default to true, shows utility menu
        'minimum_role'          => 'edit_theme_options',                   // default to 'edit_theme_options'
        'layout'                => 'fixed',                                // fluid or fixed, default to fixed
        'page_title'            => esc_html__( 'Theme Options', 'fajar-wp' ), // page title
        'menu_label'            => esc_html__( 'Theme Options', 'fajar-wp' ), // menu label
    ));
}
// Option Hook
function fajar_option( $name ){
    if(function_exists('vp_option')){
        return vp_option( "vpt_option." . $name );
    } else {
        return '';
    }
}
// Return Children Menu Items
function return_children_menu_items($parent_id){
    // Get Nav Slug
    $menu_name = 'primary-menu';
    $locations = get_nav_menu_locations();
    $menu_id = $locations[ $menu_name ] ;
    $nav_object = wp_get_nav_menu_object($menu_id);
    // End Get Nav Slug
    $all_nav_items = wp_get_nav_menu_items ($nav_object->slug);
    $children = array();
    foreach($all_nav_items as $row){
        if($row->menu_item_parent == $parent_id){
            $children[] = $row;
        }
    }
    return $children;
}
// Check If Menu Item Has Children Items
function check_if_menu_item_has_children_items($parent_id){
    $children = get_posts(
        array(
            'post_type' => 'nav_menu_item',
            'nopaging' => true,
            'numberposts' => 1,
            'meta_key' => '_menu_item_menu_item_parent',
            'meta_value' => $parent_id
        )
    );
    return $children;
}
// Mega menu walker
require_once(get_template_directory() . "/includes/mega-menu/menu-item-custom-fields.php");
function check_if_mega_menu_item_is_active($object_id,$top_id,$url){
    $home_url = get_home_url().'/';
    if($object_id == $top_id && $top_id != 1){
        echo 'id="active-item"';
    } elseif($url == $home_url && $top_id == 1 && !is_single()) {
        echo 'id="active-item"';
    }
}
// Setting Post Views Count
function getPostViews($postID){
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, 0);
        return "0";
    }
    return $count;
}
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
// Tabs Slider Scripts
function fajar_load_hero_slider_scripts() {
    if(is_category()){
        $queried_object = get_queried_object();
        $pg_header_banner_area = get_field('pg_header_banner_area', $queried_object);
    } elseif(is_singular('portfolio') || is_home() || is_tag() || is_author() || is_date() || is_day() || is_year() || is_month() || is_time() || is_search() || is_404() || is_attachment()){
        $pg_header_banner_area = fajar_option('general_pages_banner');
    } else {
        $pg_header_banner_area = get_field('pg_header_banner_area');
    }
    if($pg_header_banner_area == 'heroSlider'){
        wp_enqueue_script('jquery.royalslider', get_template_directory_uri() . '/js/jquery.royalslider.min.js', array('jquery'), '', true  );
        wp_enqueue_script('cover.video', get_template_directory_uri() . '/js/cover.video.js', array('jquery'), '', true  );
    }
}
add_action('wp_enqueue_scripts', 'fajar_load_hero_slider_scripts');
// Removing Woocommerce Class
add_filter( 'body_class', 'woo_body_class' );
function woo_body_class( $classes ) {
    foreach ( $classes as $key => $value ) {
        if ( $value == 'woocommerce' ) unset( $classes[ $key ] );
    }
    return $classes;
}