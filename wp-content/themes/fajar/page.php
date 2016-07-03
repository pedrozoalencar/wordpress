<?php get_header();
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
    <!-- Comments Template -->
    <div class="container">
    	<?php comments_template(); ?>
    </div>
<?php endwhile;
get_footer(); ?>