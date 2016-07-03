<?php get_header();
if(is_home()){ ?>
    <div class="container">
        <div class="sub-page clearfix">
            <?php while(have_posts()): the_post();
                $post_animation = get_field('choose_post_animation'); ?>
                <div class="blog-post-centered animations-on <?php echo esc_attr($post_animation); ?>">
                    <h2>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p><?php the_excerpt(); ?></p>
                    <ul class="blog-post-meta">
                        <li>
                            <a href="<?php echo esc_url(home_url('/')).'?author='.get_the_author_meta('ID'); ?>">
                                <?php echo get_avatar( get_the_author_meta( 'ID' ), 42 );
                                the_author(); ?>
                            </a>
                        </li>
                        <li><i class="icon-clock"></i> <?php echo get_the_time('M d, Y'); ?></li>
                        <li><a href="<?php the_permalink(); ?>"><i class="icon-chat-1"></i> <?php comments_number( '0', '1', '%' ); echo esc_html__('Comments','fajar-wp'); ?> </a></li>
                    </ul>
                </div>
            <?php endwhile; ?>
            <ul class="text-arrow-pagination">
                <li class="pull-left">
                    <?php previous_posts_link( '<i class="icon-angle-left"></i> Newest Posts' ); ?>
                </li>
                <li class="pull-right">
                    <?php next_posts_link( '<i class="icon-angle-right"></i> Older Posts' ); ?>
                </li>
            </ul>
        </div>
    </div>
<?php } else{
    while(have_posts()): the_post();
    $select_page_layout = get_field('select_page_layout');
    $hide_page_title = get_field('hide_page_title');
    $pg_classes = get_field('pg_classes');
    if($select_page_layout != 'full'){ ?>
        <div class="sub-page clearfix control-page-smallHeader <?php echo esc_attr($pg_classes); ?>">
            <div class="container">
                <?php if($hide_page_title != 'hide'){ ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="space20"></div>
                <?php }
                the_content(); ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="clearfix control-page-smallHeader <?php echo esc_attr($pg_classes); ?>">
            <?php the_content(); ?>
        </div>
    <?php } ?>
<?php endwhile;
} get_footer(); ?>