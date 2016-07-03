<?php
// Remove Default Wrapper
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );
// Remove Page Title
function fajar_woocommerce_show_page_title() {
  return false;
}
add_filter( 'woocommerce_show_page_title', 'fajar_woocommerce_show_page_title' );
// Remove Product Sale Badge
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10 );
// Add Shop Wrapper
function fajar_woocommerce_before_shop_loop_item() {
  echo '<div class="product animations-on bounceIn">';
}
function fajar_woocommerce_after_shop_loop_item() {
  echo '</div>';
}
add_action( 'woocommerce_before_shop_loop_item', 'fajar_woocommerce_before_shop_loop_item', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'fajar_woocommerce_after_shop_loop_item', 10 );
// Add Product Wrapper
function fajar_woocommerce_before_single_product() {
  echo '<div>';
}
function fajar_woocommerce_after_single_product() {
  echo '</div>';
}
add_action( 'woocommerce_before_single_product', 'fajar_woocommerce_before_single_product', 10 );
add_action( 'woocommerce_after_single_product', 'fajar_woocommerce_after_single_product', 10 );
// Shop Posts Per Page
function fajar_woocommerce_shop_posts_per_page() {
    $products = fajar_option('number_of_shop_products');
  return $products;
}
add_filter( 'loop_shop_per_page', 'fajar_woocommerce_shop_posts_per_page' );
// Shop Thumbnail
function fajar_woocommerce_shop_thumbnail() {
    GLOBAL $product;
    $id = get_the_ID();
    echo '<div class="product-thumb">';
    woocommerce_show_product_sale_flash();
    echo '<a href="' . get_the_permalink() . '">';
    echo get_the_post_thumbnail( $id );
    echo '</a>';
    echo "</div>";
}
remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );
add_action( 'woocommerce_before_shop_loop_item_title', 'fajar_woocommerce_shop_thumbnail', 10 );
// Remove Cart Cross Cells
remove_action( 'woocommerce_cart_collaterals', 'woocommerce_cross_sell_display' , 10 );
// remove the action 
remove_action( 'woocommerce_ajax_added_to_cart', 'action_woocommerce_ajax_added_to_cart', 10, 1 );
// Remove Sale Flash
function fajar_woocommerce_shop_sale_flash() {
    _e('<label>Sale</label>','fajar-wp');
}
add_action( 'woocommerce_sale_flash', 'fajar_woocommerce_shop_sale_flash', 10 );
// Remove Rating
remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );
// Remove Plugin Settings
function fajar_woocommerce_remove_plugin_settings( $settings ) {
  foreach ( $settings as $key => $setting ) {
    $id = $setting['id'];
    if ( $id == 'image_options' || $id == 'shop_catalog_image_size' || $id == 'shop_single_image_size' || $id == 'shop_thumbnail_image_size' ) {
      unset( $settings[$key] );
    }
  }
  return $settings;
}
add_filter( 'woocommerce_product_settings', 'fajar_woocommerce_remove_plugin_settings', 10 );