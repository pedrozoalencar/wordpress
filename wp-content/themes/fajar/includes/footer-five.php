<footer class="footer small text-center">
    <div class="container">
        <ul class="social list-unstyled bordered big">
            <?php $facebook = fajar_option('facebook');
            $twitter = fajar_option('twitter');
            $google = fajar_option('google');
            $linkedin = fajar_option('linkedin');
            $pinterest = fajar_option('pinterest');
            $instagram = fajar_option('instagram');
            if(!empty($facebook)){ ?>
            <li><a href="<?php echo esc_url($facebook); ?>" class="facebook"><i class="icon-facebook2"></i></a></li>
            <?php } if(!empty($twitter)){ ?>
            <li><a href="<?php echo esc_url($twitter); ?>" class="twitter"><i class="icon-twitter-1"></i></a></li>
            <?php } if(!empty($google)){ ?>
            <li><a href="<?php echo esc_url($google); ?>" class="googleplus"><i class="icon-googleplus2"></i></a></li>
            <?php } if(!empty($linkedin)){ ?>
            <li><a href="<?php echo esc_url($linkedin); ?>" class="linkedin"><i class="icon-linkedin3"></i></a></li>
            <?php } if(!empty($pinterest)){ ?>
            <li><a href="<?php echo esc_url($pinterest); ?>" class="pinterest"><i class="icon-pinterest4"></i></a></li>
            <?php } if(!empty($instagram)){ ?>
            <li><a href="<?php echo esc_url($instagram); ?>" class="instagram"><i class="icon-instagram4"></i></a></li>
            <?php } ?>
        </ul>
        <nav class="footer-nav">
            <ul>
                <?php
                if ( has_nav_menu( 'footer-menu' ) ) :
                    wp_nav_menu( array( 'theme_location' => 'footer-menu','container' => '','items_wrap' => '%3$s' ) );
                else:
                    echo '<li>' . esc_html__( 'Define your footer menu', 'fajar-wp' ) . '</li>';
                endif;
                ?>
            </ul>
        </nav>
        <p class="copyright">
        <?php $footer_copyright = fajar_option('footer_copyright');
            if(!empty($footer_copyright)){
                echo esc_attr($footer_copyright);
            } ?>
        </p>
    </div>
</footer>