<?php $enabled_boxed_layout = fajar_option('enabled_boxed_layout');
if($enabled_boxed_layout == 1){
    $body_class = 'top-bar-header boxed-layout';
} else {
    $body_class = 'top-bar-header';
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
<header class="hide-topbar-after smooth">
<div class="top-bar bg-default">
    <div class="container">
        <ul class="list-unstyled top-contact-info clearfix">
            <?php $hnb_email = fajar_option('hnb_email');
            $hnb_phone_number = fajar_option('hnb_phone_number');
            if(!empty($hnb_phone_number)){ ?>
                <li><i class="icon-phone5"></i><?php echo esc_attr($hnb_phone_number); ?></li>
            <?php } if(!empty($hnb_email)){ ?>
                <li><i class="icon-envelope"></i><a href="mailto:<?php echo esc_attr($hnb_email); ?>"> <?php echo esc_attr($hnb_email); ?></a></li>
            <?php } ?>
        </ul>
        <?php $hnb_hide_social = fajar_option('hnb_hide_social');
        if($hnb_hide_social != 1){ ?>
            <ul class="social list-unstyled bordered">
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
                    <li><a href="<?php echo esc_url($linkedin); ?>" class="linkedin"><i class="icon-linkedin4"></i></a></li>
                <?php } if(!empty($pinterest)){ ?>
                    <li><a href="<?php echo esc_url($pinterest); ?>" class="pinterest"><i class="icon-pinterest4"></i></a></li>
                <?php } if(!empty($instagram)){ ?>
                    <li><a href="<?php echo esc_url($instagram); ?>" class="instagram"><i class="icon-instagram4"></i></a></li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>
</div>
<nav class="navbar navbar-default nav-boxed" role="navigation">
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
            <?php $hnb_logo_1 = fajar_option('hnb_logo_1');
            if(!empty($hnb_logo_1)){ ?>
                <img class="remain-black" src="<?php echo esc_url($hnb_logo_1); ?>" alt="">
            <?php } else{ ?>
                <img class="remain-black" src="<?php echo get_template_directory_uri(); ?>/images/logo-colored.png" alt="">
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
        <ul class="nav navbar-nav header-three">
            <?php require_once(get_template_directory() . "/includes/mega-menu/mega-menu.php"); ?>
        </ul>
        <?php if ( has_nav_menu( 'primary-menu' ) ) {
			$hnb_hide_search = fajar_option('hnb_hide_search');
        if($hnb_hide_search != 1){ ?>
            <div class="search-btn"><i class="icon-icons185" id="show-search"></i></div>
        <?php }
		 } ?>
    </div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
<div class="searcho" id="search">
    <div class="container">
        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
            <input type="text" name="s" placeholder="Search...">
            <a href="#."><i class="icon-cross3" id="close-search"></i></a>
        </form>
    </div>
</div>
</nav>
</header>