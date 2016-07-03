<?php $load_more_button_text = get_field('load_more_button_text');
$portfolio_items_display_order = get_field('portfolio_items_display_order');
$number_of_portfolio_items_to_display = get_field('number_of_portfolio_items_to_display'); ?>
<section class="our-work-sec no-padding-top">
    <div class="container">
        <ul class="portfolio-column portfolio-four-column list-unstyled clearfix">
            <?php $select_portfolio_categories = get_field('select_portfolio_categories');
            if(is_array($select_portfolio_categories)){
                $portfolio = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => -1,
                    'order' => $portfolio_items_display_order,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'fajar_genre',
                            'field'    => 'term_id',
                            'terms'    => $select_portfolio_categories,
                        ),
                    ),
                );
            }else{
                $portfolio = array(
                    'post_type' => 'portfolio',
                    'posts_per_page' => $number_of_portfolio_items_to_display,
                    'order' => $portfolio_items_display_order
                );
            }
            $portfolio_loop = new WP_Query($portfolio);
            $port_count = 1;
            while ( $portfolio_loop->have_posts() ) : $portfolio_loop->the_post();
            $animation_type = get_field('portfolio_item_animation_type');
            $terms = get_the_terms(get_the_ID(), 'fajar_genre'); ?>
            <li class="animations-on <?php echo esc_attr($animation_type).' '; if($port_count > $number_of_portfolio_items_to_display){ echo ' d-none '; } foreach ($terms as $ter){ echo esc_attr($ter->slug). ' '; } ?>">
                <div class="poftfolio-item-thumb">
                    <?php if(has_post_thumbnail()){
                        echo '<img src="'.get_feature_image_url(get_the_ID()).'" alt="" class="smooth"/>';
                    } else {
                        echo '<img src="https://placeholdit.imgix.net/~text?txtsize=42&txt=No+Image&w=500&h=500" alt="" class="smooth"/>';
                    }?>
                    <a class="hover-button-left smooth" href="<?php the_permalink(); ?>"><i class="icon-grid6"></i></a>
                    <a class="hover-button-right smooth fancybox" data-fancybox-group="gallery" href="<?php echo get_feature_image_url(get_the_ID()); ?>"><i class="icon-eye"></i></a>
                </div>
                <div class="poftfolio-item-info">
                    <h3><?php the_title(); ?>
                        <small><?php $term_counter = 0;
                            $len = count($terms);
                            foreach ($terms as $ter){
                                if ($term_counter == $len - 1) {
                                    echo esc_attr($ter->name);
                                } else {
                                    echo esc_attr($ter->name). ' / ';
                                }
                                $term_counter++;
                            } ?></small>
                    </h3>
                </div>
            </li>
            <?php $port_count++;
            endwhile;
            wp_reset_postdata(); ?>
        </ul>
        <div id="load-more-portfolio"></div>
    </div>
    <?php if(!empty($load_more_button_text)){ ?>
        <div class="text-center">
            <a href="javascript:void(0);" class="btn btn-default btn-dark btn-square" id="load-more-portfolio-btn"><?php echo esc_attr($load_more_button_text); ?></a>
        </div>
    <?php } ?>
    <!-- END PORTFOLIO SECTION -->

</section>