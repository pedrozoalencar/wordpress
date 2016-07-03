<?php get_header(); ?>
    <div class="sub-page container clearfix">
        <div class="error-404 text-center">
            <div class="error-number">4<img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt="">4</div>
            <?php $pg_404 = fajar_option('page_404');
            if(!empty($pg_404)){
                echo do_shortcode($pg_404);
            } else{ ?>
                <h2><?php echo esc_html__("We're Deeply","fajar-wp"); ?> <strong><?php echo esc_html__('Sorry','fajar-wp'); ?></strong> <?php echo esc_html__('for your loss.','fajar-wp'); ?></h2>
                <br>
                <p><?php echo esc_html__("The link you're looking for is dead. ","fajar-wp"); ?></p>
                <p><?php echo esc_html__('Condolences can be found at the','fajar-wp'); ?>  <a href="<?php echo esc_url(home_url('/')); ?>" class="error-goto-btn"><?php echo esc_html__('homepage','fajar-wp'); ?></a></p>
            <?php } ?>
        </div>
    </div>
<?php get_footer(); ?>