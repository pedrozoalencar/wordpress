<?php
/**
 * The template for displaying Comments
 *
 * The area of the page that contains comments and the comment form.
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
    return;
?>
<div class="comments">
    <?php if ( have_comments() ) : ?>
    <h2><?php comments_number( '0', '1', '%' ); esc_html_e('. Comments','fajar-wp') ?></h2>
    <ol class="commentlist animations-on fadeInUp">
        <?php wp_list_comments('type=comment&callback=fajar_comment'); ?>
    </ol>
    <div class="clear clearfix"></div>
    <?php
    // Are there comments to navigate through?
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php esc_html_e( 'Comment navigation', 'fajar-wp' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( esc_html__( '&larr; Older Comments', 'fajar-wp' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments &rarr;', 'fajar-wp' ) ); ?></div>
        </nav>
    <?php endif;
    endif; ?>
    <!-- Comment Form -->
    <?php
    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $fields =  array(
        'author' =>
        '<input id="author" placeholder="'.esc_attr__('Your full name','fajar-wp').'" class="validate[required]"  data-prompt-position="topLeft:0" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'"/>',
        'email' =>
        '<input id="email" placeholder="'.esc_attr__('E-mail Address','fajar-wp').'" class="validate[required,custom[email]]"  data-prompt-position="topLeft:0" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '"/>',
        'url' =>
        '<input id="url" placeholder="'.esc_attr__('Website','fajar-wp').'" class="validate[required] no-margin-right"  data-prompt-position="topLeft:0" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"/>',
    );
    $args = array(
        'id_form'           => 'comment_form',
        'class_form'      => 'form-widget',
        'id_submit'         => 'submit',
        'class_submit'      => 'btn btn-medium btn-dark btn-square',
        'name_submit'       => 'submit',
        'title_reply'       => '',
        'title_reply_to'    => '',
        'cancel_reply_link' => '',
        'comment_notes_after' => '',
        'comment_notes_before' => '',
        'label_submit'      => esc_html__( 'Submit','fajar-wp' ),
        'format'            => 'xhtml',
        'comment_field' =>  '<textarea class="validate[required]" data-prompt-position="topLeft:0" id="comment" name="comment" placeholder="'.esc_attr__('Write your comment here','fajar-wp').'" aria-required="true">' .
            '</textarea>',
        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    ); ?>
    <?php if ( comments_open() ) : ?>
    <div class="comment-respond padding-top-70 animations-on fadeInUp">
        <h2><?php esc_html_e('Leave a Reply','fajar-wp'); ?></h2>
        <?php comment_form($args); ?>
    </div>
    <?php endif; ?>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('ul.children').each(function () {
            jQuery(this).prev('li').append(this);
        });
    });
</script>