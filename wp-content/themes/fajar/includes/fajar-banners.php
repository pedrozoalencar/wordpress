<?php
/*
 * Image Banners, Hero, Tabs & Revolution Sliders
 */
if(is_category()){
    $queried_object = get_queried_object();
    $pg_choose_header = get_field('pg_choose_header', $queried_object);
    $pg_header_banner_area = get_field('pg_header_banner_area', $queried_object);
    $hba_heading = get_field('hba_heading', $queried_object);
    $hba_small_caption = get_field('hba_small_caption', $queried_object);
    $hba_disable_parallax_effect = get_field('hba_disable_parallax_effect', $queried_object);
    $hba_facebook = get_field('hba_facebook', $queried_object);
    $hba_twitter = get_field('hba_twitter', $queried_object);
    $hba_google_plus = get_field('hba_google_plus', $queried_object);
    $hba_instagram = get_field('hba_instagram', $queried_object);
    $hba_pinterest = get_field('hba_pinterest', $queried_object);
    $hba_background_image = get_field('hba_background_image', $queried_object);
    if(!empty($hba_background_image)){
        $bg_img = 'style="background: url('.$hba_background_image.') no-repeat center top;"';
    } else {
        $bg_img = '';
    }
    $hero_tabs_input_slider_alias = get_field('hero_tabs_input_slider_alias', $queried_object);
    $hero_tabs_slides_display_order = get_field('hero_tabs_slides_display_order', $queried_object);
    $rev_input_slider_alias = get_field('rev_input_slider_alias', $queried_object);
} elseif(is_singular('portfolio') || is_home() || is_tag() || is_author() || is_date() || is_day() || is_year() || is_month() || is_time() || is_search() || is_404() || is_attachment()){
    $pg_choose_header = fajar_option('general_page_headers');
    $pg_header_banner_area = fajar_option('general_pages_banner');
    $hba_heading = fajar_option('hba_heading');
    $hba_small_caption = fajar_option('hba_small_caption');
    $hba_disable_parallax_effect = fajar_option('hba_disable_parallax_effect');
    $hba_facebook = fajar_option('hba_facebook');
    $hba_twitter = fajar_option('hba_twitter');
    $hba_google_plus = fajar_option('hba_google_plus');
    $hba_instagram = fajar_option('hba_instagram');
    $hba_pinterest = fajar_option('hba_pinterest');
    $hba_background_image = fajar_option('hba_background_image');
    if(!empty($hba_background_image)){
        $bg_img = 'style="background: url('.$hba_background_image.') no-repeat center top;"';
    } else {
        $bg_img = '';
    }
    $hero_tabs_input_slider_alias = fajar_option('hero_tabs_input_slider_alias');
    $hero_tabs_slides_display_order = fajar_option('hero_tabs_slides_display_order');
    $rev_input_slider_alias = fajar_option('rev_input_slider_alias');
} else {
    $pg_choose_header = get_field('pg_choose_header');
    $pg_header_banner_area = get_field('pg_header_banner_area');
    $hba_heading = get_field('hba_heading');
    $hba_small_caption = get_field('hba_small_caption');
    $hba_disable_parallax_effect = get_field('hba_disable_parallax_effect');
    $hba_facebook = get_field('hba_facebook');
    $hba_twitter = get_field('hba_twitter');
    $hba_google_plus = get_field('hba_google_plus');
    $hba_instagram = get_field('hba_instagram');
    $hba_pinterest = get_field('hba_pinterest');
    $hba_background_image = get_field('hba_background_image');
    if(!empty($hba_background_image)){
        $bg_img = 'style="background: url('.$hba_background_image.') no-repeat center top;"';
    } else {
        $bg_img = '';
    }
    $hero_tabs_input_slider_alias = get_field('hero_tabs_input_slider_alias');
    $hero_tabs_slides_display_order = get_field('hero_tabs_slides_display_order');
    $rev_input_slider_alias = get_field('rev_input_slider_alias');
}
if($pg_header_banner_area == 'breadCrumb'){ ?>
    <!-- Breadcrumb -->
    <section class="subpage-breadcrumb-banner bg-grey control-page-smallHeader clearfix">
        <div class="container">
            <h1><?php the_title(); ?></h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo home_url('/'); ?>"><?php echo esc_html__('Home','fajar-wp'); ?></a> <span>/</span> </li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </section>
<?php } elseif($pg_header_banner_area == 'imgWithParallax'){ ?>
    <!-- Banner With Image Only -->
    <section <?php echo ''.$bg_img; ?> class="subpage-banner parallax subpage-bg text-center" <?php if($hba_disable_parallax_effect != 'yes'){ ?>data-stellar-background-ratio="0.3"<?php } ?>>
    <div class="container">
        <?php if(!empty($hba_heading)){ ?>
            <h1 class="site-title"><?php echo esc_attr($hba_heading); ?></h1>
        <?php } if(!empty($hba_small_caption)){ ?>
            <p><?php echo esc_attr($hba_small_caption); ?></p>
        <?php } ?>
    </div>
</section>
<?php } elseif($pg_header_banner_area == 'imgWithSocialInfo'){ ?>
    <!-- Banner With Image & Social Info -->
    <section <?php echo ''.$bg_img; ?> class="subpage-banner parallax me text-center" <?php if($hba_disable_parallax_effect != 'yes'){ ?>data-stellar-background-ratio="0.3"<?php } ?>>
        <div class="container">
            <?php if(!empty($hba_heading)){ ?>
                <h1 class="site-title"><?php echo esc_attr($hba_heading); ?></h1>
            <?php } if(!empty($hba_small_caption)){ ?>
                <p><?php echo esc_attr($hba_small_caption); ?></p>
            <?php } ?>
            <ul class="social big list-unstyled bordered center">
                <?php if(!empty($hba_facebook)){ ?>
                    <li><a href="<?php echo esc_url($hba_facebook); ?>" class="facebook"><i class="icon-facebook2"></i></a></li>
                <?php } if(!empty($hba_twitter)){ ?>
                    <li><a href="<?php echo esc_url($hba_twitter); ?>" class="twitter"><i class="icon-twitter-1"></i></a></li>
                <?php } if(!empty($hba_google_plus)){ ?>
                    <li><a href="<?php echo esc_url($hba_google_plus); ?>" class="googleplus"><i class="icon-googleplus2"></i></a></li>
                <?php } if(!empty($hba_pinterest)){ ?>
                    <li><a href="<?php echo esc_url($hba_pinterest); ?>" class="pinterest"><i class="icon-pinterest2"></i></a></li>
                <?php } if(!empty($hba_instagram)){ ?>
                    <li><a href="<?php echo esc_url($hba_instagram); ?>" class="instagram"><i class="icon-instagram2"></i></a></li>
                <?php } ?>
            </ul>
        </div>
    </section>
<?php } elseif($pg_header_banner_area == 'heroSlider'){ ?>
    <!-- Hero Slider -->
    <?php $slides = array(
        'post_type' => 'fajar-hero-slider',
        'posts_per_page' => -1,
        'order' => $hero_tabs_slides_display_order,
        'tax_query' => array(
            array(
                'taxonomy' => 'fajar_hero_genre',
                'field'    => 'slug',
                'terms'    => $hero_tabs_input_slider_alias,
            ),
        ),
    );
    $slides_loop = new WP_Query($slides); ?>
    <section class="main-banner">
        <div class="sliderContainer fullWidth clearfix">
            <div class="royalSlider heroSlider rsMinW main-banner-slider">
                <?php while ( $slides_loop->have_posts() ) : $slides_loop->the_post();
                    $large_heading = get_field('large_heading');
                    $heading_data_move_effect = get_field('heading_data_move_effect');
                    $heading_data_speed = get_field('heading_data_speed');
                    $small_caption = get_field('small_caption');
                    $caption_data_move_effect = get_field('caption_data_move_effect');
                    $caption_data_speed = get_field('caption_data_speed');
                    $slide_button = get_field('slide_button');
                    $slide_text_alignment = get_field('slide_text_alignment');
                    $slide_type = get_field('slide_type');
                    $slide_image = get_field('slide_image');
                    $slide_video_mp4 = get_field('slide_video_mp4');
                    $slide_video_ogg = get_field('slide_video_ogg');
                    $slide_video_webm = get_field('slide_video_webm');
                    $slide_video_mpg = get_field('slide_video_mpg');
                    $slide_style = get_field('slide_style');
                    $button_data_move_effect = get_field('button_data_move_effect');
                    $button_data_speed = get_field('button_data_speed');
                    if($slide_type == 'image') { ?>
                        <div class="rsContent <?php if($slide_style == 'dark'){ echo 'slide-dark'; } ?>">
                            <img class="rsImg " src="<?php echo esc_url($slide_image); ?>" alt="" />
                            <div class="bContainer">
                                <div class="container text-<?php echo esc_attr($slide_text_alignment); ?>">
                                    <?php if(!empty($large_heading)){ ?>
                                        <span class="rsABlock txtCent blockHeadline" data-speed="<?php echo esc_attr($heading_data_speed); ?>" data-move-offset="500" data-move-effect="<?php echo esc_attr($heading_data_move_effect); ?>"><?php echo esc_attr($large_heading); ?></span>
                                    <?php } if(!empty($small_caption)){ ?>
                                        <span class="rsABlock txtCent blockText" data-speed="<?php echo esc_attr($caption_data_speed); ?>" data-move-offset="600" data-move-effect="<?php echo esc_attr($caption_data_move_effect); ?>"><?php echo esc_attr($small_caption); ?></span>
                                    <?php }
                                    if( have_rows('slide_button') ): ?>
                                        <span class="rsABlock txtCent blockBtn" data-speed="<?php echo esc_attr($button_data_speed); ?>" data-move-offset="700" data-move-effect="<?php echo esc_attr($button_data_move_effect); ?>">
                                        <?php while ( have_rows('slide_button') ) : the_row();
                                                $button_type = get_sub_field('button_type');
                                                if($button_type == 'defaultBG'){
                                                    $class = 'btn btn-default';
                                                } elseif($button_type == 'defaultTranparent'){
                                                    $class = 'btn btn-bordered white';
                                                } elseif($button_type == 'squarewhiteBG'){
                                                    $class = 'btn btn-white btn-square';
                                                } elseif($button_type == 'squareTransparent'){
                                                    $class = 'btn btn-bordered white btn-square';
                                                } elseif($button_type == 'darkRound'){
                                                    $class = 'btn btn-dark';
                                                } elseif($button_type == 'darkBorder'){
                                                    $class = 'btn btn-bordered black';
                                                } else {
                                                    $class = 'btn btn-default';
                                                }
                                                $button_text = get_sub_field('button_text');
                                                $button_link = get_sub_field('button_link');
                                                ?>
                                                <a href="<?php echo esc_url($button_link); ?>" class="<?php echo esc_attr($class); ?>"><?php echo esc_attr($button_text); ?></a>
                                            <?php endwhile; ?>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php } else{ ?>
                        <div>
                            <!-- Video Markup -->
                            <div class="banner-video <?php if($slide_style == 'dark'){ echo 'slide-dark'; } ?>">
                                <video class="covervid-video" id="covervid-video" loop autoplay>
                                    <?php if(!empty($slide_video_mp4)){ ?>
                                        <source src="<?php echo esc_url($slide_video_mp4); ?>">
                                    <?php } if(!empty($slide_video_ogg)){ ?>
                                        <source src="<?php echo esc_url($slide_video_ogg); ?>" type="video/ogg">
                                    <?php } if(!empty($slide_video_webm)){ ?>
                                        <source src="<?php echo esc_url($slide_video_webm); ?>" type="video/webm">
                                    <?php } if(!empty($slide_video_mpg)){ ?>
                                        <source src="<?php echo esc_url($slide_video_mpg); ?>" type="video/mpeg">
                                    <?php } ?>
                                </video>
                                <div class="bContainer">
                                    <div class="container text-<?php echo esc_attr($slide_text_alignment); ?>">
                                        <?php if(!empty($large_heading)){ ?>
                                            <span class="rsABlock txtCent blockHeadline" data-speed="<?php echo esc_attr($heading_data_speed); ?>" data-move-offset="500" data-move-effect="<?php echo esc_attr($heading_data_move_effect); ?>"><?php echo esc_attr($large_heading); ?></span>
                                        <?php } if(!empty($small_caption)){ ?>
                                            <span class="rsABlock txtCent blockText" data-speed="<?php echo esc_attr($caption_data_speed); ?>" data-move-offset="600" data-move-effect="<?php echo esc_attr($caption_data_move_effect); ?>"><?php echo esc_attr($small_caption); ?></span>
                                        <?php }
                                        if( have_rows('slide_button') ): ?>
                                            <span class="rsABlock txtCent blockBtn">
                                                <?php while ( have_rows('slide_button') ) : the_row();
                                                    $button_type = get_sub_field('button_type');
                                                    if($button_type == 'defaultBG'){
                                                        $class = 'btn btn-default';
                                                    } elseif($button_type == 'defaultTranparent'){
                                                        $class = 'btn btn-bordered white';
                                                    } elseif($button_type == 'squarewhiteBG'){
                                                        $class = 'btn btn-white btn-square';
                                                    } elseif($button_type == 'squareTransparent'){
                                                        $class = 'btn btn-bordered white btn-square';
                                                    } elseif($button_type == 'darkRound'){
                                                        $class = 'btn btn-dark';
                                                    } elseif($button_type == 'darkBorder'){
                                                        $class = 'btn btn-bordered black';
                                                    } else {
                                                        $class = 'btn btn-default';
                                                    }
                                                    $button_text = get_sub_field('button_text');
                                                    $button_link = get_sub_field('button_link');
                                                    $button_data_move_effect = get_sub_field('button_data_move_effect');
                                                    $button_data_speed = get_sub_field('button_data_speed');
                                                    ?>
                                                    <a href="<?php echo esc_url($button_link); ?>" class="<?php echo esc_attr($class); ?>" data-speed="<?php echo esc_attr($button_data_speed); ?>" data-move-offset="700" data-move-effect="<?php echo esc_attr($button_data_move_effect); ?>"><?php echo esc_attr($button_text); ?></a>
                                                <?php endwhile; ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                endwhile;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php } elseif($pg_header_banner_area == 'tabsSlider'){ ?>
    <!-- Tabs Slider -->
    <?php $slides = array(
        'post_type' => 'fajar-tab-slider',
        'posts_per_page' => -1,
        'order' => $hero_tabs_slides_display_order,
        'tax_query' => array(
            array(
                'taxonomy' => 'fajar_tab_genre',
                'field'    => 'slug',
                'terms'    => $hero_tabs_input_slider_alias,
            ),
        ),
    );
    $slides_loop = new WP_Query($slides); ?>
    <section class="main-banner simple">
        <div id="simple-main-banner" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <?php $slide_count = 1;
                while ( $slides_loop->have_posts() ) : $slides_loop->the_post();
                    $tabs_heading = get_field('tabs_heading');
                    $tabs_small_caption = get_field('tabs_small_caption');
                    $tabs_add_button = get_field('tabs_add_button');
                    $tabs_slide_style = get_field('tabs_slide_style');
                    if($tabs_slide_style == 'light'){
                        $text_class = 'white';
                    } else {
                        $text_class = 'color-dark';
                    }
                    $tabs_text_alignment = get_field('tabs_text_alignment');
                    $tabs_slide_image = get_field('tabs_slide_image');
                    ?>
                    <div class="item <?php if($slide_count == 1){ echo 'active'; }?>">
                        <img src="<?php echo esc_url($tabs_slide_image); ?>" alt="">
                        <div class="carousel-caption text-<?php echo esc_attr($tabs_text_alignment); ?>">
                            <div class="container">
                                <h1 class="light <?php echo esc_attr($text_class); ?>"><?php echo do_shortcode($tabs_heading); ?></h1>
                                <p class="<?php echo esc_attr($text_class); ?>"><?php echo esc_attr($tabs_small_caption); ?></p>
                                <?php if( have_rows('tabs_add_button') ):
                                    while ( have_rows('tabs_add_button') ) : the_row();
                                        $tabs_button_type = get_sub_field('tabs_button_type');
                                        if($tabs_button_type == 'light_border'){
                                            $btn_class = 'btn btn-bordered white btn-square';
                                        } elseif($tabs_button_type == 'black_border'){
                                            $btn_class = 'btn btn-bordered black btn-square';
                                        } elseif($tabs_button_type == 'dark') {
                                            $btn_class = 'btn btn-dark black btn-square';
                                        } else {
                                            $btn_class = 'btn btn-bordered white btn-square';
                                        }
                                        $tabs_button_text = get_sub_field('tabs_button_text');
                                        $tabs_button_link = get_sub_field('tabs_button_link');
                                        if(!empty($tabs_button_text)){ ?>
                                            <a href="<?php echo esc_url($tabs_button_link); ?>" class="<?php echo esc_attr($btn_class); ?>"><?php echo esc_attr($tabs_button_text); ?></a>
                                        <?php }
                                    endwhile;
                                endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php $slide_count++;
                endwhile;
                wp_reset_postdata(); ?>
            </div>
            <!-- Indicators -->
            <div class="container">
                <ol class="carousel-indicators tab-banner-nav">
                    <?php $dots_count = 0;
                    while ( $slides_loop->have_posts() ) : $slides_loop->the_post();
                        $tabs_title_sub_heading = get_field('tabs_title_sub_heading'); ?>
                        <li data-target="#simple-main-banner" data-slide-to="<?php echo esc_attr($dots_count); ?>" <?php if($dots_count == 0){ echo 'class="active"'; }?>>
                            <p><span><?php the_title(); ?></span><?php echo esc_attr($tabs_title_sub_heading); ?></p>
                        </li>
                        <?php $dots_count++;
                    endwhile;
                    wp_reset_postdata(); ?>
                </ol>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#simple-main-banner" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only"><?php echo esc_html__('Previous','fajar-wp'); ?></span>
            </a>
            <a class="right carousel-control" href="#simple-main-banner" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only"><?php echo esc_html__('Next','fajar-wp'); ?></span>
            </a>
        </div>
    </section>
<?php } elseif($pg_header_banner_area == 'sliderRevolution'){
    if($pg_choose_header == 'headerBottom'){
        $cl1 = '';
        $cl2 = '';
    }
    else {
        $cl1 = '<section class="main-banner no-margin">';
        $cl2 = '</section>';
    }?>
    <!-- Revolution Slider -->
    <?php echo ''.$cl1;
    if(function_exists('putRevSlider')){
            putRevSlider($rev_input_slider_alias, $rev_input_slider_alias);
        }
    echo ''.$cl2;
} ?>