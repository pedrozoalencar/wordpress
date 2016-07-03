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

    <section class="main-banner no-margin rev-banner4">
    <!-- Banner Area -->
    <?php get_template_part('includes/fajar','banners'); ?>
    <!-- End Banner Area -->
    <header class="smooth navbar-bottom">
    <nav class="navbar navbar-default nav-border-bottom" role="navigation">
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
            <?php $hab_logo_1 = fajar_option('hab_logo_1');
            if(!empty($hab_logo_1)){ ?>
                <img class="remain-black" src="<?php echo esc_url($hab_logo_1); ?>" alt="">
            <?php } else { ?>
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
        <?php $hab_hide_social = fajar_option('hab_hide_social');
        if($hab_hide_social != 1){ ?>
            <ul class="social list-unstyled white fill">
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
        <ul class="nav navbar-nav">
            <?php require_once(get_template_directory() . "/includes/mega-menu/mega-menu.php"); ?>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    </nav>
    </header>
</section>