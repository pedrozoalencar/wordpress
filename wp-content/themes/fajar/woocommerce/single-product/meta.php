<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $post, $product;
$cat_count = sizeof( get_the_terms( $post->ID, 'product_cat' ) );
$tag_count = sizeof( get_the_terms( $post->ID, 'product_tag' ) );
?>
<div>
	<?php do_action( 'woocommerce_product_meta_start' ); ?>
	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>
		<p><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> <span class="sku" itemprop="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></p>
	<?php endif; ?>
	<?php echo ''.$product->get_categories( ', ', '<p class="posted_in">' . _n( '<strong>Category:</strong>', '<strong>Categories:</strong>', $cat_count, 'woocommerce' ) . ' ', '</p>' ); ?>
	<?php echo ''.$product->get_tags( ', ', '<p class="tagged_as">' . _n( '<strong>Tag:</strong>', '<strong>Tags:</strong>', $tag_count, 'woocommerce' ) . ' ', '</p>' ); ?>
	<?php do_action( 'woocommerce_product_meta_end' ); ?>
</div>
<ul class="boxed-social clearfix">
    <li>
        <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" class="facebook">
            <i class="icon-facebook2"></i><?php esc_html_e('Share On Facebook','fajar-wp'); ?>
        </a>
    </li>
    <li>
        <a href="https://twitter.com/intent/tweet?original_referer=<?php the_permalink(); ?>&amp;text=<?php the_title(); ?>&tw_p=tweetbutton&url=<?php the_permalink(); ?>&via=<?php bloginfo( 'name' ); ?>" class="twitter">
            <i class="icon-twitter-1"></i><?php esc_html_e('Tweet This Product','fajar-wp'); ?>
        </a>
    </li>
    <li>
        <a href="//pinterest.com/pin/create/button/?url=<?php the_permalink();?>&amp;media=<?php echo get_feature_image_url(get_the_ID()); ?>&amp;description=<?php the_title(); ?>" class="pinterest">
            <i class="icon-pinterest4"></i><?php esc_html_e('Pin This Product','fajar-wp'); ?>
        </a>
    </li>
</ul>
