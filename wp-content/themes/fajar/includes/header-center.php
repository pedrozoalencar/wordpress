<?php $enabled_boxed_layout = fajar_option('enabled_boxed_layout');
if($enabled_boxed_layout == 1){
    $body_class = 'boxed-layout';
} else {
    $body_class = '';
} $pattern_for_box = fajar_option('pattern_for_box');
if(!empty($pattern_for_box) && $enabled_boxed_layout == 1){
    $box_bg = ' style="background: url('.$pattern_for_box.') repeat;"';
} else {
    $box_bg = '';
}?>
<body <?php body_class($body_class); echo ''.$box_bg; ?>>
<!-- Preloader -->
<?php $disable_pre_loader = fajar_option('disable_pre_loader');
if($disable_pre_loader != 1){
    $pre_loader_pulse_color = fajar_option('pre_loader_pulse_color');
    if(!empty($pre_loader_pulse_color)){
        $p_color = 'style="background-color: '.$pre_loader_pulse_color.';"';
    } else {
        $p_color = '';
    }?>
    <div id="preloader">
        <div class="pulse" <?php echo ''.$p_color; ?>></div>
    </div>
<?php } ?>
<div id="wrapper">
<nav class="navbar navbar-default nav-center" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-default">
                <span class="sr-only"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?php $hncl_hide_center_logo = fajar_option('hncl_hide_center_logo');
            if($hncl_hide_center_logo != 1){ ?>
            <div class="logo-border">
                <a class="navbar-brand no-change" href="<?php echo esc_url(home_url('/')); ?>">
                    <?php $hncl_logo_1 = fajar_option('hncl_logo_1');
                    if(!empty($hncl_logo_1)){ ?>
                        <img src="<?php echo esc_url($hncl_logo_1); ?>" alt="">
                    <?php } else{ ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-small.png" alt="">
                    <?php } ?>
                </a>
                <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-logo">
                    <?php $mobile_logo = fajar_option('mobile_logo');
                    if(!empty($mobile_logo)){ ?>
                        <img src="<?php echo esc_url($mobile_logo); ?>" alt="">
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile@2x.png" alt="">
                    <?php } ?>
                </a>
            </div>
            <?php } ?>
        </div>
        <div class="collapse navbar-collapse" id="navbar-default">
            <?php $hncl_hide_left_menu = fajar_option('hncl_hide_left_menu');
            if($hncl_hide_left_menu != 1){ ?>
                <ul class="nav navbar-nav navbar-left header-center">
                    <?php
                    if ( has_nav_menu( 'center-left' ) ) :
                        wp_nav_menu( array( 'theme_location' => 'center-left','container' => '','items_wrap' => '%3$s' ) );
                    else:
                        echo '<li><a>' . esc_html__( 'Define your side left menu', 'fajar-wp' ) . '</a></li>';
                    endif;
                    ?>
                </ul>
            <?php } $hncl_hide_right_menu = fajar_option('hncl_hide_right_menu');
            if($hncl_hide_right_menu != 1){ ?>
                <ul class="nav navbar-nav navbar-right header-center">
                    <?php
                    if ( has_nav_menu( 'center-right' ) ) :
                        wp_nav_menu( array( 'theme_location' => 'center-right','container' => '','items_wrap' => '%3$s' ) );
                    else:
                        echo '<li><a>' . esc_html__( 'Define your center right menu', 'fajar-wp' ) . '</a></li>';
                    endif;
                    ?>
                </ul>
            <?php } ?>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>