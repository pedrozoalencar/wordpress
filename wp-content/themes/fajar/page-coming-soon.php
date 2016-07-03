<?php
/*
 * Template Name: Coming Soon Page
 */
get_header();
while(have_posts()): the_post();
$com_upload_logo = get_field('com_upload_logo');
$com_heading = get_field('com_heading');
$com_description = get_field('com_description');
$com_button_text = get_field('com_button_text');
$com_newsletter_shortcode = get_field('com_newsletter_shortcode');
$com_facebook = get_field('com_facebook');
$com_twitter = get_field('com_twitter');
$com_google_plus = get_field('com_google_plus');
$com_instagram = get_field('com_instagram');
$com_pinterest = get_field('com_pinterest');
$com_copyright = get_field('com_copyright');
$com_background_image = get_field('com_background_image');
$com_hide_clouds = get_field('com_hide_clouds');
$com_form_description = get_field('com_form_description');
?>
<body <?php body_class(); ?>>
<div id="wrapper">
    <div class="main">
        <div class="clouds-bg" <?php if(!empty($com_background_image)){ ?> style="background: url(<?php echo esc_url($com_background_image); ?>) no-repeat center top;" <?php } ?>>
            <?php if($com_hide_clouds != 'yes'){ ?>
                <div class="clouds_one"></div>
                <div class="clouds_two"></div>
                <div class="clouds_three"></div>
            <?php } ?>
        </div>
        <header class="header">
            <?php if(!empty($com_upload_logo)){ ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo esc_url($com_upload_logo); ?>" alt="">
                </a>
            <?php } ?>
        </header>
        <section class="content">
            <section class="content-inner">
                <?php if(!empty($com_heading)){ ?>
                    <h1 class="light"><?php echo esc_attr($com_heading); ?></h1>
                <?php } if(!empty($com_description)){ ?>
                    <p><?php echo do_shortcode($com_description); ?></p>
                <?php } if(!empty($com_button_text)){ ?>
                    <a href="#." class="btn md-trigger" data-modal="modal-4"><?php echo esc_attr($com_button_text); ?></a>
                <?php } ?>
            </section>
            <footer class="footer">
                <?php if(!empty($com_copyright)){ ?>
                    <p class="copyright"><?php echo esc_attr($com_copyright); ?></p>
                <?php } ?>
                <ul class="social">
                    <?php if(!empty($com_facebook)){ ?>
                        <li><a href="<?php echo esc_url($com_facebook); ?>"><i class="fa fa-facebook"></i></a></li>
                    <?php } if(!empty($com_twitter)){ ?>
                        <li><a href="<?php echo esc_url($com_twitter); ?>"><i class="fa fa-twitter"></i></a></li>
                    <?php } if(!empty($com_google_plus)){ ?>
                        <li><a href="<?php echo esc_url($com_google_plus); ?>"><i class="fa fa-google-plus"></i></a></li>
                    <?php } if(!empty($com_instagram)){ ?>
                        <li><a href="<?php echo esc_url($com_instagram); ?>"><i class="fa fa-instagram"></i></a></li>
                    <?php } if(!empty($com_pinterest)){ ?>
                        <li><a href="<?php echo esc_url($com_pinterest); ?>"><i class="fa fa-pinterest"></i></a></li>
                    <?php } ?>
                </ul>
            </footer>
    </div>
    <div class="md-modal md-effect-4" id="modal-4">
        <div class="md-content">
            <div class="form">
                <h3><?php echo esc_attr($com_button_text); ?></h3>
                <?php if(!empty($com_form_description)){ ?>
                    <p><?php echo esc_attr($com_form_description); ?></p>
                <?php } ?>
                <div id="notify-form">
                    <?php echo do_shortcode($com_newsletter_shortcode); ?>
                </div>
                <button class="md-close"><i class="fa fa-close"></i></button>
            </div>
        </div>
    </div>
    <div class="md-overlay"></div>
</div><!-- End Wrapper -->
<?php endwhile;
wp_footer(); ?>
</body>
</html>