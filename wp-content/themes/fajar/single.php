<?php get_header();
while(have_posts()): the_post();
    $post_page_layout = get_field('post_page_layout');
    $post_page_sidebar_position = get_field('post_page_sidebar_position');
    ?>
    <div class="container">
        <div class="sub-page clearfix control-page-smallHeader">
            <div class="blog">
                <?php if($post_page_layout == 'layout-2'){ ?>
                <div class="row">
                    <?php if($post_page_sidebar_position == 'left'){ ?>
                        <div class="col-md-4">
                            <?php get_sidebar('blog'); ?>
                        </div>
                    <?php } ?>
                    <div class="col-md-8">
                        <?php } ?>
                        <article class="blog-post">
                            <?php if(has_post_thumbnail()){ ?>
                                <div class="blog-thumb">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                            <?php } ?>
                            <p class="blog-post-meta"><?php echo get_the_time('F d, Y'); ?>  /  <?php echo esc_html__('By ','fajar-wp');  the_author_posts_link(); ?></p>
                            <h3><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                            <div class="clearfix"></div>
                            <?php posts_nav_link(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . esc_html__( 'Pages:', 'fajar-wp' ), 'after' => '</div>' ) ); ?>
                            <div class="clearfix"></div>
                            <?php edit_post_link(
                                sprintf(
                                /* translators: %s: Name of current post */
                                    __( '<span class="screen-reader-text">%s</span>', 'fajar-wp' ),
                                    'Edit'
                                ),
                                '<span class="edit-link">',
                                '</span>'
                            ); ?>
                            <div class="share-post clearfix">
                                <p><?php echo esc_html__('Share Detail:','fajar-wp'); ?></p>
                                <ul>
                                    <li><a href="http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink();?>&amp;t=<?php echo get_the_title(); ?>" class="facebook animations-on bounceIn"><?php echo esc_html__('Facebook','fajar-wp'); ?></a></li>
                                    <li><a href="https://twitter.com/intent/tweet?original_referer=<?php echo get_the_permalink(); ?>&amp;text=<?php the_title(); ?>&tw_p=tweetbutton&url=<?php echo get_the_permalink(); ?>&via=<?php bloginfo( 'name' ); ?>" class="twitter animations-on bounceIn" data-delay="100"><?php echo esc_html__('Twitter','fajar-wp'); ?></a></li>
                                    <li><a href="//pinterest.com/pin/create/button/?url=<?php echo get_the_permalink();?>&amp;media=<?php echo get_feature_image_url(get_the_ID()); ?>&amp;description=<?php echo get_the_title(); ?>" class="pinterest animations-on bounceIn" data-delay="200"><?php echo esc_html__('pinterest','fajar-wp'); ?></a></li>
                                </ul>
                            </div>
                        </article>
                        <!-- Comments Template -->
                        <?php comments_template(); ?>
                        <?php if($post_page_layout == 'layout-2'){ ?>
                    </div>
                    <?php if($post_page_sidebar_position == 'right'){ ?>
                        <div class="col-md-4">
                            <?php get_sidebar('blog'); ?>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
            </div>
        </div>

    </div>
<div id="posto-<?php the_ID(); ?>" <?php post_class(); ?>>
<p class="none"><?php the_tags(); ?></p>
</div>
<?php setPostViews(get_the_ID());
endwhile;
get_footer(); ?>