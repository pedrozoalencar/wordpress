<?php $load_more_button_text = get_field('load_more_button_text');
$portfolio_items_display_order = get_field('portfolio_items_display_order');
$number_of_portfolio_items_to_display = get_field('number_of_portfolio_items_to_display'); ?>
<section class="our-work-sec portfolio-bg no-padding-top">

    <!-- START PORTFOLIO SECTION -->
    <div class="portfolio-filter-nav">
        <?php $select_portfolio_categories = get_field('select_portfolio_categories');
        if(is_array($select_portfolio_categories)){
            $categories = get_terms( 'fajar_genre', array(
                'orderby'    => 'count',
                'hide_empty' => 1,
                'include'    => $select_portfolio_categories
            ) );
        }else{
            $categories = get_terms( 'fajar_genre', array(
                'orderby'    => 'count',
                'hide_empty' => 1
            ) );
        } ?>
        <div class="filter" data-filter="all"><?php echo esc_html__('All','fajar-wp'); ?></div>
        <?php foreach($categories as $cats){ ?>
            <div class="filter" data-filter=".<?php echo esc_attr($cats->slug); ?>"><?php echo esc_attr($cats->name); ?></div>
        <?php } ?>
    </div>
    <div id="Container-portfolio" class="container">
        <ul class="portfolio-column portfolio-three-column clearfix">
            <?php $term_array = array();
            foreach($categories as $cat) {
                $term_array[] = $cat->slug;
            }
            $portfolio = array(
                'post_type' => 'portfolio',
                'posts_per_page' => $number_of_portfolio_items_to_display,
                'order' => $portfolio_items_display_order,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'fajar_genre',
                        'field'    => 'slug',
                        'terms'    => $term_array,
                    ),
                ),
            );
            $portfolio_loop = new WP_Query($portfolio);
            while ( $portfolio_loop->have_posts() ) : $portfolio_loop->the_post();
            $animation_type = get_field('portfolio_item_animation_type');
            $terms = get_the_terms(get_the_ID(), 'fajar_genre'); ?>
            <li class="mix animations-on <?php echo esc_attr($animation_type).' '; foreach ($terms as $ter){ echo esc_attr($ter->slug). ' '; } ?>">
                <div class="poftfolio-item">
                    <div class="poftfolio-item-thumb">
                        <?php if(has_post_thumbnail()){
                            echo '<img src="'.get_feature_image_url(get_the_ID()).'" alt=""/>';
                        } else {
                            echo '<img src="https://placeholdit.imgix.net/~text?txtsize=42&txt=No+Image&w=500&h=500" alt=""/>';
                        }?>
                        <a href="<?php echo get_feature_image_url(get_the_ID()); ?>" data-fancybox-group="portfolio" class="hover-button-plus fancybox smooth"></a>
                    </div>
                    <div class="poftfolio-item-info text-center">
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
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
                </div>
            </li>
            <?php endwhile;
            wp_reset_postdata(); ?>
        </ul>
    </div>
    <!-- END PORTFOLIO SECTION -->
</section>