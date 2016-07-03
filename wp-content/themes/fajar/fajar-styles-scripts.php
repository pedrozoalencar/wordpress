<?php
/*
  * Theme Styles
  */
// Styling & Typography
function fajar_styling_typography(){
    // Styling Options
    $heading_h1 = fajar_option("heading_h1");
    $heading_h2 = fajar_option("heading_h2");
    $heading_h3 = fajar_option("heading_h3");
    $heading_h4 = fajar_option("heading_h4");
    $heading_h5 = fajar_option("heading_h5");
    $heading_h6 = fajar_option("heading_h6");
    $paragraph_p = fajar_option("paragraph_p");
    $menu_normal = fajar_option("menu_normal");
    $header_bg = fajar_option("header_bg");
    $body_bg = fajar_option("body_bg");
    $body_color = fajar_option("body_color");
    $footer_bg = fajar_option("footer_bg");
    $footer_color = fajar_option("footer_color");
    $links_normal = fajar_option("links_normal");
    $links_hover = fajar_option("links_hover");
    $widget_title = fajar_option("widget_title");
    $background_right_menu = fajar_option("background_right_menu");
    $so = '';
    if(!empty($heading_h1)){
        $so .= "h1 {color: {$heading_h1};}";
    } if(!empty($heading_h2)){
        $so .= "h2 {color: {$heading_h2};}";
        $so .= ".port-inner h2 {color: {$heading_h2};}";
    } if(!empty($heading_h3)){
        $so .= "h3 {color: {$heading_h3};}";
    } if(!empty($heading_h4)){
        $so .= "h4 {color: {$heading_h4};}";
    } if(!empty($heading_h5)){
        $so .= "h5 {color: {$heading_h5};}";
    } if(!empty($heading_h6)){
        $so .= "h6 { color: {$heading_h6};}";
    } if(!empty($paragraph_p)){
        $so .= "p { color: {$paragraph_p};}";
    } if(!empty($menu_normal)){
        $so .= ".navbar-nav > li > a {color: {$menu_normal} !important;}";
    } if(!empty($header_bg)){
        $so .= "nav.navbar { background: {$header_bg} !important;}";
    } if(!empty($body_bg)){
        $so .= "body,body #wrapper { background: {$body_bg};}";
    } if(!empty($body_color)){
        $so .= "body,p { color: {$body_color};}";
    } if(!empty($footer_bg)){
        $so .= "footer { background: {$footer_bg} !important;}";
    } if(!empty($footer_color)){
        $so .= "footer p { color: {$footer_color} !important;}";
        $so .= "footer a { color: {$footer_color} !important;}";
        $so .= "footer h3 { color: {$footer_color} !important;}";
    } if(!empty($links_normal)){
        $so .= "a { color: {$links_normal};}";
    } if(!empty($links_hover)){
        $so .= "a:hover,a:active { color: {$links_hover};}";
    } if(!empty($widget_title)){
        $so .= ".sidebar-widget .heading h3 { color: {$widget_title};}";
    } if(!empty($background_right_menu)){
        $so .= ".cd-primary-nav { background: {$background_right_menu};}";
    }
// Typography
    $heading_font = fajar_option("headings_font_face");
    $heading_weight = fajar_option("headings_font_weight");
    $meta_font = fajar_option("meta_font_face");
    $meta_weight = fajar_option("meta_font_weight");
    $body_font = fajar_option("body_font_face");
    $body_weight = fajar_option("body_font_weight");
    $body_size = intval(fajar_option("body_font_size"));
    $h1_size = intval(fajar_option("h1_font_size"));
    $h2_size = intval(fajar_option("h2_font_size"));
    $h3_size = intval(fajar_option("h3_font_size"));
    $h4_size = intval(fajar_option("h4_font_size"));
    $h5_size = intval(fajar_option("h5_font_size"));
    $h6_size = intval(fajar_option("h6_font_size"));
    $menu_size = intval(fajar_option("menu_font_size"));
    $page_title_size = intval(fajar_option("page_title_font_size"));
    $post_title_size = intval(fajar_option("post_title_font_size"));
    $widget_size = intval(fajar_option("widget_title_font_size"));
    if(!empty($heading_font)){
        $so .= "h1,h2,h3 {
            font-family: {$heading_font} !important;
            font-weight: {$heading_weight};
        }";
    } if(!empty($meta_font)){
        $so .= "h4,h5,h6,.sidebar-widget .heading h3,footer h3 {
            font-family: {$meta_font} !important;
            font-weight: {$meta_weight};
        }";
    } if(!empty($body_font)){
        $so .= "html,body,p,a,.navbar-default .navbar-nav > li > a {
            font-family: {$body_font} !important;
            font-weight: {$body_weight};
        }";
    } if(!empty($body_size)){
        $so .= "body,p,a {
            font-size: {$body_size} px !important;
        }";
    } if(!empty($h1_size)){
        $so .= "h1 {
            font-size: {$h1_size} px;
        }";
    } if(!empty($h2_size)){
        $so .= "h2 {
            font-size: {$h2_size} px;
        }";
    } if(!empty($h3_size)){
        $so .= "h3 {
            font-size: {$h3_size} px;
        }";
    } if(!empty($h4_size)){
        $so .= "h4 {
            font-size: {$h4_size} px;
        }";
    } if(!empty($h5_size)){
        $so .= "h5 {
            font-size: {$h5_size} px;
        }";
    } if(!empty($h6_size)){
        $so .= "h6 {
            font-size: {$h6_size} px;
        }";
    } if(!empty($menu_size)){
        $so .= ".navbar-default .navbar-nav > li > a {
            font-size: {$menu_size}  px;
        }";
    } if(!empty($page_title_size)){
        $so .= ".page .blog-post h3 {
            font-size: {$page_title_size}  px;
        }";
    } if(!empty($post_title_size)){
        $so .= ".single .blog-post h3 {
            font-size: {$post_title_size} px;
        }";
    } if(!empty($widget_size)){
        $so .= ".sidebar-widget .heading h3,footer h3 {
            font-size: {$widget_size} px;
        }";
    }
    return $so;
}

// Return Theme Options Custom CSS
function get_custom_css(){
    return fajar_option("custom_css");
}
function theme_options_styles() {
    $custom_css = '';
    $custom_css .= fajar_styling_typography();
    $custom_css .= get_custom_css();
    wp_add_inline_style( 'style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'theme_options_styles' );


/*
 * Theme Scripts
 */
// Google Maps Data For Contact Template
function fajar_google_map(){
    $map_position = get_field('map_position');
    $map_js = '';
    if ( is_page_template( 'page-contacts.php' ) && $map_position != 'hide' ) {
        $map_latitude = get_field('map_latitude');
        $map_longitude = get_field('map_longitude');
        $zoom_level = get_field('zoom_level');
        $map_marker = get_field('map_marker');
        $map_js .= "
            var mapLatitude = {$map_latitude};
            var mapLongitude = {$map_longitude};
            var mapZoom = {$zoom_level};
            var mapMarker = '{$map_marker}';
        ";
    }
    return $map_js;
}
// Store Locator
function fajar_store_locator(){
    $store_locator = '';
    if ( is_page_template( 'page-store-locator.php' ) ) {
        $store_locator .= "
        jQuery(document).ready(function(e) {
                'use strict';
            	jQuery('#jlocator').jlocator();
			});
        ";
    }
    return $store_locator;
}
// Dark Slider Shifter
function dark_slide_shifter_js(){
    $dark_slide = '';
    if(is_category()){
        $queried_object = get_queried_object();
        $pg_header_banner_area = get_field('pg_header_banner_area', $queried_object);
    } elseif(is_singular('portfolio') || is_home() || is_tag() || is_author() || is_date() || is_day() || is_year() || is_month() || is_time() || is_search() || is_404() || is_attachment()){
        $pg_header_banner_area = fajar_option('general_pages_banner');
    } else {
        $pg_header_banner_area = get_field('pg_header_banner_area');
    }
    if($pg_header_banner_area == 'heroSlider'){
        $hsd_logo_1 = fajar_option('hsd_logo_1');
        if(!empty($hsd_logo_1)){
            $logo1 = $hsd_logo_1;
        } else {
            $logo1 = get_template_directory_uri().'/images/logo-dark.png';
        }
        $hsd_logo_2 = fajar_option('hsd_logo_2');
        if(!empty($hsd_logo_2)){
            $logo2 = $hsd_logo_2;
        } else {
            $logo2 = get_template_directory_uri().'/images/logo.png';
        }
        $dark_slide .= "
            (function () {
                'use strict';
                function checkIfDarkSlide(){
                    if (jQuery('.slide-dark-container').hasClass('rsActiveSlide')){
                        jQuery('.navbar').addClass('nav-dark');
                        jQuery('.royalSlider').addClass('rs-dark-slide');
                        jQuery('.navbar-brand img' ).attr('src', '{$logo1}');
                    }else{
                        setTimeout(checkIfDarkSlide, 100);
                    }if (!jQuery('.slide-dark-container').hasClass('rsActiveSlide')){
                        jQuery('.navbar').removeClass('nav-dark');
                        jQuery('.royalSlider').removeClass('rs-dark-slide');
                        if (!jQuery('body').hasClass('smallHeader')) {
                            jQuery('.navbar-brand img' ).attr('src', '{$logo2}');
                        }
                    }else{
                        setTimeout(checkIfDarkSlide, 100);
                    }
                } jQuery(checkIfDarkSlide);
            })(jQuery);
        ";
    }
    return $dark_slide;
}
// Header Conditional Based Scripts
function header_style_conditional_based_script(){
    $header_conditional = '';
    if(is_category()){
        $queried_object = get_queried_object();
        $header_type = get_field('pg_choose_header', $queried_object);
    } elseif(is_singular('portfolio') || is_home() || is_tag() || is_author() || is_date() || is_day() || is_year() || is_month() || is_time() || is_search() || is_404() || is_attachment()){
        $header_type = fajar_option('general_page_headers');
    } elseif((function_exists('is_shop') && is_shop()) || (function_exists('is_product_category') && is_product_category()) || (function_exists('is_product_tag') && is_product_tag()) || (function_exists('is_product') && is_product())){
        $header_type = fajar_option('shop_page_headers');
    } else {
        $header_type = get_field('pg_choose_header');
    }
    // Logo Shifter Theme Options
    if($header_type == 'headerTransparent' || $header_type == 'headerBG'){
        $logo_l = fajar_option('hts_logo_1');
        if(!empty($logo_l)){
            $logo_light = $logo_l;
        } else {
            $logo_light = get_template_directory_uri().'/images/logo.png';
        }
        $logo_d = fajar_option('hts_logo_2');
        if(!empty($logo_d)){
            $logo_dark = $logo_d;
        } else {
            $logo_dark = get_template_directory_uri().'/images/logo-dark.png';
        }
    } else{
        $logo_light = get_template_directory_uri().'/images/logo.png';
        $logo_dark = get_template_directory_uri().'/images/logo-dark.png';
    }
    $header_conditional .= "(function () {
    'use strict';";
    if ($header_type == 'headerClassic') {
        $header_conditional .= "
            jQuery(window).scroll(function() {
                var scroll = jQuery(window).scrollTop();
                if (scroll >= 300) {
                    jQuery('.header-classic').hide();
                    jQuery('body').addClass('smallHeader');
                    if (scroll >= 500) {
                        jQuery('.header-classic').show();
                        jQuery('.header-classic').css('margin-top','-74px');
                    }
                }
                else {
                    jQuery('body').removeClass('smallHeader');
                    jQuery('.header-classic').show();
                    jQuery('.header-classic').css('margin-top','0');
                }
            });
            ";
    } elseif($header_type == 'headerBottom'){
        $header_conditional .= "
        jQuery(window).scroll(function() {
            var windowTop = Math.max(jQuery('body').scrollTop(), jQuery('html').scrollTop());
            var home_height =  jQuery('.main-banner').outerHeight();
            jQuery('.navbar-bottom').each(function (index) {
                if (jQuery(window).scrollTop() < home_height){
                    jQuery('.navbar-bottom').removeClass('stickey-nav');
                }
                if (windowTop > (jQuery(this).position().top - 0)){
                    jQuery('.navbar-bottom').removeClass('stickey-nav');
                    jQuery('.navbar-bottom:eq(' + index + ')').addClass('stickey-nav');
                }
            });
        });
        ";
    } else{
        $header_conditional .= "
            jQuery(window).scroll(function() {
                var scroll = jQuery(window).scrollTop();
                if (scroll >= 1) {
                    jQuery('body').addClass('smallHeader');
                    jQuery('.navbar-brand img.change-on-scroll' ).attr('src', '{$logo_dark}');
                    if (jQuery('.navbar').hasClass('nav-dark')) {
                        jQuery('.navbar-brand img' ).attr('src', '{$logo_dark}');
                    }
                }
                else {
                    jQuery('body').removeClass('smallHeader');
                    jQuery('.navbar-brand img.change-on-scroll' ).attr('src', '{$logo_light}');
                    if (jQuery('.navbar').hasClass('nav-dark')) {
                        jQuery('.navbar-brand img.change-on-scroll' ).attr('src', '{$logo_dark}');
                    }
                }
            });
            ";
    }
    $header_conditional .= "
            })(jQuery);
        ";
    return $header_conditional;
}
// Animated Site Version
function enable_animated_site_version(){
    $enabled_animations = fajar_option('enabled_animations');
    $animated = '';
    if($enabled_animations == 1){
        $animated .= "
            (function () {
                'use strict';
                jQuery(document).ready(function(){
                    jQuery('body').find('.animations-on').each(function(){
                        jQuery(this).addClass('animate-it');
                    });
                });
            })(jQuery);
            ";
    }
    return $animated;
}
// Adding theme options script
function fajar_theme_options_js(){
    $custom_js = fajar_option("custom_js");
    return $custom_js;
}
// Global Variable
function fajar_global_variable(){
    $glo = '';
    $home_url = home_url('/');
    $glo .= "var template_directory = '{$home_url}';";
    return $glo;
}
function theme_all_custom_scripts() {
    $custom_js = '';
    $custom_js .= fajar_google_map();
    $custom_js .= fajar_store_locator();
    $custom_js .= dark_slide_shifter_js();
    $custom_js .= header_style_conditional_based_script();
    $custom_js .= enable_animated_site_version();
    $custom_js .= fajar_theme_options_js();
    $custom_js .= fajar_global_variable();
    wp_add_inline_script( 'custom-scriptss', $custom_js );
}
add_action( 'wp_enqueue_scripts', 'theme_all_custom_scripts' );