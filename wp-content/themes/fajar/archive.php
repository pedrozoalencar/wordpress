<?php get_header(); ?>
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
<?php get_footer(); ?>