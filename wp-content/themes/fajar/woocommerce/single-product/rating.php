<?php
/**
 * Single Product Rating
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/rating.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.3.2
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
global $product;
if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' ) {
	return;
}
$rating_count = $product->get_rating_count();
$review_count = $product->get_review_count();
$average      = $product->get_average_rating();
if ( $rating_count > 0 ) : ?>
	<div class="ratings big" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
        <?php if ( strpos( $average, "." ) !== false ) {
            $loopa = floor($average);
            $loopa_half = 'true';
        } else {
            $loopa = $average;
            $loopa_half = 'false';
        }
        for($i = 1; $i <= $average; $i++){
            echo '<i class="fa fa-star"></i>';
        } if($loopa_half == 'true'){
            echo '<i class="fa fa-star-half-o"></i>';
        }?>
        <?php if ( comments_open() ) : ?><a href="#reviews" class="color-default" rel="nofollow">(<?php printf( _n( '%s customer review', '%s customer reviews', $review_count, 'woocommerce' ), '<span itemprop="reviewCount" class="count">' . $review_count . '</span>' ); ?>)</a><?php endif ?>
	</div>
<?php endif; ?>
