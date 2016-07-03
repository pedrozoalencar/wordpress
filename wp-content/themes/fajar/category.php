<?php get_header();
$queried_object = get_queried_object();
$taxonomy = $queried_object->taxonomy;
$term_id = $queried_object->term_id;
$category_page_layout = get_field("category_page_layout", $queried_object);
$sidebar_position = get_field("sidebar_position", $queried_object);
?>
    <?php if($category_page_layout == 'layout-2'){ ?>
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
                        <li><a href="<?php the_permalink(); ?>"><i class="icon-chat-1"></i> <?php comments_number( '0', '1', '%' ); echo esc_html__(' Comments','fajar-wp'); ?> </a></li>
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
    <?php } elseif($category_page_layout == 'layout-3'){ ?>
    <div class="container">
        <div class="sub-page clearfix">
            <div class="row">
                <?php if($sidebar_position == 'left'){ ?>
                    <aside class="col-md-4">
                        <?php get_sidebar('blog'); ?>
                    </aside>
                <?php } ?>
                <div class="col-md-8">
                    <?php while(have_posts()): the_post();
                        $post_animation = get_field('choose_post_animation'); ?>
                        <article class="blog-post">
                            <?php if(has_post_thumbnail()){ ?>
                                <div class="blog-thumb animations-on <?php echo esc_attr($post_animation); ?>">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </div>
                            <?php } ?>
                            <p class="blog-post-meta"><?php echo get_the_time('F d, Y'); ?>  /  <?php echo esc_html__('By ','fajar-wp');  the_author_posts_link(); ?></p>
                            <h3>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="btn btn-dark btn-square btn-medium"><?php echo esc_html__('read more','fajar-wp'); ?></a>
                        </article>
                    <?php endwhile;
                    fajar_pagination($pages = '', $range = 2); ?>
                </div>
                <?php if($sidebar_position == 'right'){ ?>
                    <aside class="col-md-4">
                        <?php get_sidebar('blog'); ?>
                    </aside>
                <?php } ?>

            </div>
        </div>

    </div>
    <?php } elseif($category_page_layout == 'layout-4'){ ?>
    <div class="container">
        <div class="sub-page clearfix">
            <div class="blog-masonary">
                <div id="container">
                    <?php while(have_posts()): the_post();
                        $post_animation = get_field('choose_post_animation'); ?>
                        <div class="grid animations-on <?php echo esc_attr($post_animation); ?>">
                            <div class="blog-border">
                                <article class="blog-post">
                                    <?php if(has_post_thumbnail()){ ?>
                                        <div class="blog-thumb">
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_post_thumbnail(); ?>
                                            </a>
                                        </div>
                                    <?php } ?>
                                    <p class="blog-post-meta"><?php echo get_the_time('F d, Y'); ?>  /  <?php echo esc_html__('By ','fajar-wp'); the_author_posts_link(); ?></p>
                                    <h3>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p><?php the_excerpt(); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more"><?php echo esc_html__('Read more','fajar-wp'); ?></a>
                                </article>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="text-center">
                    <?php fajar_pagination($pages = '', $range = 2); ?>
                </div>
            </div>
        </div>
    </div>
    <?php } else{ ?>
    <div class="container">
        <div class="sub-page">
            <div class="blog">
                <?php while(have_posts()): the_post();
                    $post_animation = get_field('choose_post_animation'); ?>
                <article class="blog-post">
                    <?php if(has_post_thumbnail()){ ?>
                        <div class="blog-thumb animations-on <?php echo esc_attr($post_animation); ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                    <?php } ?>
                    <p class="blog-post-meta"><?php echo get_the_time('F d, Y'); ?>  /  <?php echo esc_html__('By ','fajar-wp');  the_author_posts_link(); ?></p>
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-dark btn-square btn-medium"><?php echo esc_html__('read more','fajar-wp'); ?></a>
                </article>
                <?php endwhile;
                fajar_pagination($pages = '', $range = 2); ?>
            </div>
        </div>
    </div>
    <?php } ?>
<?php get_footer(); ?>