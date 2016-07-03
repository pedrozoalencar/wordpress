<?php
/*
* Template Name: Page With Sidebar
*/
get_header();
while(have_posts()): the_post();
    $sidebar_position = get_field('sidebar_position');
    $content_animation_type = get_field('content_animation_type');
    $sidebar_animation_type = get_field('sidebar_animation_type');
    ?>
    <div class="container">
        <div class="sub-page clearfix control-page-smallHeader">
            <div class="row">
                <?php if($sidebar_position == 'left'){ ?>
                    <aside class="col-md-4 animations-on <?php echo esc_attr($sidebar_animation_type); ?>">
                        <?php if ( ! dynamic_sidebar( 'default' ) ) : ?>
                        <?php endif; ?>
                    </aside>
                <?php } ?>
                <div class="col-md-8 animations-on <?php echo esc_attr($content_animation_type); ?>">
                    <article class="blog-post">
                        <h3><?php the_title(); ?></h3>
                        <div class="space10"></div>
                        <?php the_content(); ?>
                    </article>
                </div>
                <?php if($sidebar_position == 'right'){ ?>
                    <aside class="col-md-4 animations-on <?php echo esc_attr($sidebar_animation_type); ?>">
                        <?php if ( ! dynamic_sidebar( 'default' ) ) : ?>
                        <?php endif; ?>
                    </aside>
                <?php } ?>
            </div>
        </div>

    </div>
<?php endwhile;
get_footer(); ?>