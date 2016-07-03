<?php get_header();
if((function_exists('is_shop') && is_shop()) || (function_exists('is_product_category') && is_product_category()) || (function_exists('is_product_tag') && is_product_tag())){
    $layout = '3Column';
} else {
    $layout = '4Column';
}
// Banner Details
$hide_shop_banner = fajar_option('hide_shop_banner');
$shop_banner_heading = fajar_option('shop_banner_heading');
$shop_banner_caption = fajar_option('shop_banner_caption');
$shop_image = fajar_option('shop_image');
if(!empty($shop_image)){
    $img = 'style="background: url('.esc_url($shop_image).') no-repeat center top;"';
} else {
    $img = '';
}
$disable_shop_parallax = fajar_option('disable_shop_parallax');
if($hide_shop_banner != 1){ ?>
    <section <?php echo ''.$img; ?> class="subpage-banner parallax shop-banner text-center" <?php if($disable_shop_parallax != 1){ ?>data-stellar-background-ratio="0.3" <?php } ?>>
        <div class="container">
            <?php if(!empty($shop_banner_heading)){ ?>
                <h1 class="site-title"><?php echo esc_attr($shop_banner_heading); ?></h1>
            <?php } if(!empty($shop_banner_caption)){ ?>
                <p><?php echo esc_attr($shop_banner_caption); ?></p>
            <?php } ?>
        </div>
    </section>
<?php }
if($layout == '3Column'){ ?>
    <div class="container">
        <div class="sub-page clearfix control-page-smallHeader">
            <div class="row">
                <div class="col-md-9">
                    <?php woocommerce_content(); ?>
                </div>
                <div class="col-md-3">
                    <?php get_sidebar('shop'); ?>
                </div>
            </div>
        </div>
    </div>
<?php } elseif(function_exists('is_product') && is_product()){ ?>
    <div class="container">
        <div class="sub-page clearfix control-page-smallHeader">
            <?php woocommerce_content(); ?>
        </div>
    </div>
<?php } else{ ?>
    <div class="container">
        <div class="sub-page clearfix control-page-smallHeader">
            <div class="row">
                <div class="col-md-12">
                    <div class="shop">
                        <?php woocommerce_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
get_footer(); ?>