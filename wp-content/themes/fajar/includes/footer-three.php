<footer class="footer2 light" id="footer-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4 ufl">
                <?php if ( ! dynamic_sidebar( 'footer6' ) ) : ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="tweets-widget-mobile">
                    <?php if ( ! dynamic_sidebar( 'footer7' ) ) : ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-letter-widget no-padding-top footer-widget">
                    <?php if ( ! dynamic_sidebar( 'footer8' ) ) : ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <?php $hide_widget_area = fajar_option('hide_widget_area');
        if($hide_widget_area != 1){ ?>
            <div class="footer-locations-widget text-center clearfix">
                <?php $location_1_address = fajar_option('location_1_address');
                $map_img = fajar_option('map_img');
                $location_2_address = fajar_option('location_2_address');
                if(!empty($location_1_address)){ ?>
                    <div class="each">
                        <i class="icon-icons180"></i>
                        <p><?php echo esc_attr($location_1_address); ?></p>
                    </div>
                <?php } ?>
                <div class="each">
                    <?php if(!empty($map_img)){ ?>
                        <img src="<?php echo esc_url($map_img); ?>" alt="">
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/location-map-dark.png" alt="">
                    <?php }?>
                </div>
                <?php if(!empty($location_2_address)){ ?>
                    <div class="each">
                        <i class="icon-icons180"></i>
                        <p><?php echo esc_attr($location_2_address); ?></p>
                    </div>
                <?php } ?>
            </div>
        <?php } ?>
        <div class="text-center">
            <br>
            <br>
            <ul class="social fill dark list-unstyled bordered big clearfix">
                <?php $facebook = fajar_option('facebook');
                $twitter = fajar_option('twitter');
                $google = fajar_option('google');
                $linkedin = fajar_option('linkedin');
                $pinterest = fajar_option('pinterest');
                $instagram = fajar_option('instagram');
                if(!empty($facebook)){ ?>
                    <li><a class="facebook animations-on bounceIn" href="<?php echo esc_url($facebook); ?>"><i class="icon-facebook2"></i></a></li>
                <?php } if(!empty($twitter)){ ?>
                    <li><a class="twitter animations-on bounceIn" data-delay="100" href="<?php echo esc_url($twitter); ?>"><i class="icon-twitter-1"></i></a></li>
                <?php } if(!empty($google)){ ?>
                    <li><a class="googleplus animations-on bounceIn" data-delay="200" href="<?php echo esc_url($google); ?>"><i class="icon-googleplus2"></i></a></li>
                <?php } if(!empty($linkedin)){ ?>
                    <li><a class="linkedin animations-on bounceIn" data-delay="300" href="<?php echo esc_url($linkedin); ?>"><i class="icon-linkedin2"></i></a></li>
                <?php } if(!empty($pinterest)){ ?>
                    <li><a class="pinterest animations-on bounceIn" data-delay="400" href="<?php echo esc_url($pinterest); ?>"><i class="icon-pinterest2"></i></a></li>
                <?php } if(!empty($instagram)){ ?>
                    <li><a class="instagram animations-on bounceIn" data-delay="500" href="<?php echo esc_url($instagram); ?>"><i class="icon-instagram2"></i></a></li>
                <?php } ?>
            </ul>
            <br>
            <p class="copyright">
                <?php $footer_copyright = fajar_option('footer_copyright');
                if(!empty($footer_copyright)){
                    echo esc_attr($footer_copyright);
                } ?>
            </p>
        </div>
    </div>
</footer>