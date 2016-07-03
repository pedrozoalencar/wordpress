<?php
/**
 * Display single product reviews (comments)
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product-reviews.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.3.2
 */
global $product;
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
if ( ! comments_open() ) {
	return;
}?>
<div class="review" id="comments">
	<div id="comments">
		<?php if ( have_comments() ) : ?>
			<ol class="commentlist">
				<?php wp_list_comments( apply_filters( 'woocommerce_product_review_list_args', array( 'callback' => 'fajar_woo_comment' ) ) ); ?>
			</ol>
			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
				echo '<nav class="woocommerce-pagination">';
				paginate_comments_links( apply_filters( 'woocommerce_comment_pagination_args', array(
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
					'type'      => 'list',
				) ) );
				echo '</nav>';
			endif; ?>
		<?php else : ?>
			<p class="woocommerce-noreviews"><?php esc_html_e( 'There are no reviews yet.', 'woocommerce' ); ?></p>
		<?php endif; ?>
	</div>

	<?php if ( get_option( 'woocommerce_review_rating_verification_required' ) === 'no' || wc_customer_bought_product( '', get_current_user_id(), $product->id ) ) : ?>

		<div id="review_form_wrapper">
			<div id="review_form">
                <br>
                <a class="btn btn-default btn-dark btn-medium btn-square scroll" id="add-review-btn" href="#add-review-btn"><?php esc_html_e('Add a review','fajar-wp'); ?></a>
                <?php $commenter = wp_get_current_commenter(); ?>
                <div class="add-review-form" id="add-review-form" style="display:none;">
                    <a href="javascript:void(0);" class="review-form-close" id="review-form-close"><i class="fa fa-times"></i></a>
                    <div class="review_form_thumb text-center">
                        <?php echo get_avatar( $commenter, 170 ); ?>
                    </div>
                    <div class="comment-respond no-padding">
                        <h2 class="text-center"><?php esc_html_e('Add a review','fajar-wp'); ?></h2>
                        <?php
                        $comment_form = array(
                            'id_form'          => 'add_review_form',
                            'class_submit'          => 'btn btn-medium btn-dark btn-square',
                            'title_reply'          => '',
                            'title_reply_to'       => esc_html__( 'Leave a Reply to %s', 'woocommerce' ),
                            'comment_notes_before' => '',
                            'comment_notes_after'  => '',
                            'fields'               => array(
                                'author' => '<input id="author" placeholder="' . esc_html__( 'Name *', 'woocommerce' ) . '" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" aria-required="true" />',
                                'email'  => '<input id="email" placeholder="' . esc_html__( 'Email *', 'woocommerce' ) . '" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-required="true" />',
                            ),
                            'label_submit'  => esc_html__( 'Submit', 'woocommerce' ),
                            'logged_in_as'  => '',
                            'comment_field' => ''
                        );
                        if ( $account_page_url = wc_get_page_permalink( 'myaccount' ) ) {
                            $comment_form['must_log_in'] = '<p class="must-log-in">' .  sprintf( esc_html__( 'You must be <a href="%s">logged in</a> to post a review.', 'woocommerce' ), esc_url( $account_page_url ) ) . '</p>';
                        }
                        if ( get_option( 'woocommerce_enable_review_rating' ) === 'yes' ) {
                            $comment_form['comment_field'] = '<p class="comment-form-rating"><label for="rating">' . esc_html__( 'Your Rating', 'woocommerce' ) .'</label><select name="rating" id="rating">
							<option value="">' . esc_html__( 'Rate&hellip;', 'woocommerce' ) . '</option>
							<option value="5">' . esc_html__( 'Perfect', 'woocommerce' ) . '</option>
							<option value="4">' . esc_html__( 'Good', 'woocommerce' ) . '</option>
							<option value="3">' . esc_html__( 'Average', 'woocommerce' ) . '</option>
							<option value="2">' . esc_html__( 'Not that bad', 'woocommerce' ) . '</option>
							<option value="1">' . esc_html__( 'Very Poor', 'woocommerce' ) . '</option>
						</select></p>';
                        }
                        $comment_form['comment_field'] .= '<textarea placeholder="' . esc_html__( 'Your Review', 'woocommerce' ) . '" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>';
                        comment_form( apply_filters( 'woocommerce_product_review_comment_form_args', $comment_form ) );
                        ?>
                    </div>
                </div>
			</div>
		</div>
	<?php else : ?>
		<p class="woocommerce-verification-required"><?php esc_html_e( 'Only logged in customers who have purchased this product may leave a review.', 'woocommerce' ); ?></p>
	<?php endif; ?>
	<div class="clear"></div>
</div>
