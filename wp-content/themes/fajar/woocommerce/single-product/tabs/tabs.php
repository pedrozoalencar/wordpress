<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.4.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 * @see woocommerce_default_product_tabs()
 */
$tabs = apply_filters( 'woocommerce_product_tabs', array() );
if ( ! empty( $tabs ) ) : ?>
    <div class="space120"></div>
	<div class="verticalTab clearfix animations-on fadeInUp" id="reviews">
		<ul class="resp-tabs-list">
			<?php foreach ( $tabs as $key => $tab ) : ?>
				<li class="<?php echo esc_attr( $key ); ?>_tab">
					<?php echo apply_filters( 'woocommerce_product_' . $key . '_tab_title', esc_html( $tab['title'] ), $key ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
        <div class="resp-tabs-container">
            <?php foreach ( $tabs as $key => $tab ) : ?>
                <div id="tab-<?php echo esc_attr( $key ); ?>">
                    <?php call_user_func( $tab['callback'], $key, $tab ); ?>
                </div>
            <?php endforeach; ?>
        </div>
	</div>
    <div class="space75"></div>
<?php endif; ?>
