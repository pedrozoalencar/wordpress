<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
    <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) {
        $favicon = fajar_option("favicon"); ?>
        <link rel="icon" type="image/png" href="<?php if(!empty($favicon)) { echo esc_url($favicon); } ?>">
    <?php } ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <?php wp_head(); ?>
</head>
<?php
if(!is_page_template('page-coming-soon.php')){
    $header_bottom = 0;
    if(is_category()){
        $queried_object = get_queried_object();
        $header_type = get_field('pg_choose_header', $queried_object);
        $pg_header_banner_area = get_field('pg_header_banner_area', $queried_object);
    } elseif(is_singular('portfolio') || is_home() || is_tag() || is_author() || is_date() || is_day() || is_year() || is_month() || is_time() || is_search() || is_404() || is_attachment()){
        $header_types = fajar_option('general_page_headers');
        if(!empty($header_types)){
            $header_type = $header_types;
        } else {
            $header_type = 'headerBG';
        }
        $pg_header_banner_area = fajar_option('general_pages_banner');
    } elseif((function_exists('is_shop') && is_shop()) || (function_exists('is_product_category') && is_product_category()) || (function_exists('is_product_tag') && is_product_tag()) || (function_exists('is_product') && is_product())){
        $header_type = fajar_option('shop_page_headers');
        $pg_header_banner_area = '';
    }else {
        $header_type = get_field('pg_choose_header');
        $pg_header_banner_area = get_field('pg_header_banner_area');
    }
    // Header/Menu Styles
    if($header_type == 'headerTransparent' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb'):
        get_template_part('includes/header','one');
    elseif( $header_type == 'headerBG' || $pg_header_banner_area == 'hide' || $pg_header_banner_area == 'breadCrumb' ):
        get_template_part('includes/header','one-2');
    elseif( $header_type == 'headerClassic' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb' ):
        get_template_part('includes/header','two');
    elseif( $header_type == 'headerNavBoxed' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb' ):
        get_template_part('includes/header','three');
    elseif( $header_type == 'headerAnimatedBorder' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb' ):
        get_template_part('includes/header','four');
    elseif( $header_type == 'headerNavCenterLogo' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb' ):
        get_template_part('includes/header','center');
    elseif( $header_type == 'headerFullFluid' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb' ):
        get_template_part('includes/header','fluid');
    elseif( $header_type == 'headerBottom' && $pg_header_banner_area != 'hide' && $pg_header_banner_area != 'breadCrumb' ):
        $header_bottom = 1;
    else:
        get_template_part('includes/header','one-2');
    endif; ?>
    <div class="clear clearfix"></div>
    <?php if ( get_header_image() ) : ?>
        <div id="site-header">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
            </a>
        </div>
    <?php endif; ?>
    <div class="clear clearfix"></div>
    <?php // Banner Area
    if($header_bottom == 1){
        get_template_part('includes/header','bottom');
    } else{
        get_template_part('includes/fajar','banners');
    }
} ?>
