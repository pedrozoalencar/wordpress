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
<div id="wrapper">
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
<nav class="navbar navbar-default transparent" role="navigation">
<div class="container">
<!-- Brand and toggle get grouped for better mobile display -->
<div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
        <?php $logo_l = fajar_option('hts_logo_1');
        if(!empty($logo_l)){ ?>
            <img class="change-on-scroll" src="<?php echo esc_url($logo_l); ?>" alt="">
        <?php } else { ?>
            <img class="change-on-scroll" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="">
        <?php } ?>
    </a>
    <a class="mobile-logo" href="<?php echo esc_url(home_url('/')); ?>">
        <?php $mobile_logo = fajar_option('mobile_logo');
        if(!empty($mobile_logo)){ ?>
            <img src="<?php echo esc_url($mobile_logo); ?>" alt="">
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-mobile@2x.png" alt="">
        <?php } ?>
    </a>
</div>
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
        <?php require_once(get_template_directory() . "/includes/mega-menu/mega-menu.php"); ?>
    </ul>
    <?php if ( has_nav_menu( 'primary-menu' ) ) { 
	$hts_hide_search = fajar_option('hts_hide_search');
    if($hts_hide_search != 1){ ?>
        <div class="search-btn">
            <i class="icon-icons185" id="show-search"></i>
        </div>
    <?php } 
	} ?>
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
<!-- CUSTOM MENU START -->
<?php $hts_hide_top_menu = fajar_option('hts_hide_top_menu');
    if($hts_hide_top_menu == 1){
        $menu_class = 'menu-hidden';
    } else {
        $menu_class = '';
    } ?>
    <div class="cd-header <?php echo esc_attr($menu_class); ?>">
        <a class="cd-primary-nav-trigger" href="javascript:void(0);">
            <span class="cd-menu-icon"></span>
        </a>
    </div>
<nav>
    <ul class="cd-primary-nav">
        <li class="cd-label"><?php echo esc_html__('Custom Menu','fajar-wp'); ?></li>
        <?php
        if ( has_nav_menu( 'top-menu' ) ) :
            wp_nav_menu( array( 'theme_location' => 'top-menu','container' => '','items_wrap' => '%3$s' ) );
        else:
            echo '<li>' . esc_html__( 'Define your top menu', 'fajar-wp' ) . '</li>';
        endif;
        $hts_hide_top_menu_social = fajar_option('hts_hide_top_menu_social');
        if($hts_hide_top_menu_social != 1){ ?>
            <li class="cd-label"><?php echo esc_html__('Follow us','fajar-wp'); ?></li>
            <li class="social-icons">
                <?php $facebook = fajar_option('facebook');
                $twitter = fajar_option('twitter');
                $google = fajar_option('google');
                $linkedin = fajar_option('linkedin');
                $pinterest = fajar_option('pinterest');
                $instagram = fajar_option('instagram');
                 if(!empty($facebook)){ ?>
                <a href="<?php echo esc_url($facebook); ?>"><span class="icon-facebook-1"></span></a>
                <?php } if(!empty($twitter)){ ?>
                <a href="<?php echo esc_url($twitter); ?>"><span class="icon-twitter-1"></span></a>
                <?php } if(!empty($google)){ ?>
                <a href="<?php echo esc_url($google); ?>"><span class="icon-google"></span></a>
                <?php } if(!empty($linkedin)){ ?>
                <a href="<?php echo esc_url($linkedin); ?>"><span class="icon-linkedin4"></span></a>
                <?php } if(!empty($pinterest)){ ?>
                <a href="<?php echo esc_url($pinterest); ?>"><span class="icon-pinterest4"></span></a>
                <?php } if(!empty($instagram)){ ?>
                <a href="<?php echo esc_url($instagram); ?>"><span class="icon-instagram4"></span></a>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>
</nav>
<div class="searcho" id="search">
    <div class="container">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
            <input type="text" name="s" placeholder="Search...">
            <a href="#.">
                <i class="icon-cross3" id="close-search"></i>
            </a>
        </form>
    </div>
</div>
</nav>