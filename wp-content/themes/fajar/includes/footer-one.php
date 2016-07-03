<footer class="footer" id="footer-1">
    <div class="container">
        <div class="footer-inner">
            <div class="row">
                <div class="col-md-8">
                    <?php if ( ! dynamic_sidebar( 'footer1' ) ) : ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-4">
                    <div class="footer-about">
                        <?php if ( ! dynamic_sidebar( 'footer2' ) ) : ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <hr class="dotted">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-widget clearfix">
                        <?php if ( ! dynamic_sidebar( 'footer3' ) ) : ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget clearfix">
                        <?php if ( ! dynamic_sidebar( 'footer4' ) ) : ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-widget clearfix">
                        <?php if ( ! dynamic_sidebar( 'footer5' ) ) : ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="footer-bottom">
    <div class="container">
                    <div class="row">
                    <div class="col-md-7">
                        <p class="copyright">
                            <?php $footer_copyright = fajar_option('footer_copyright');
                            if(!empty($footer_copyright)){
                                echo esc_attr($footer_copyright);
                            } ?>
                        </p>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-5">
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
                    </div>
                 </div>
            </div>         	
    </div>
</footer>