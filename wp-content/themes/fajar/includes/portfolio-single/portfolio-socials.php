<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<ul class="social-with-number">
    <li>
        <a href="http://www.facebook.com/sharer.php?u=<?php echo get_the_permalink();?>&amp;t=<?php echo get_the_title(); ?>" class="facebook">
            <i class="fa fa-facebook"></i>
            <?php if(function_exists('get_facebook_shares')){
                $gfs = get_facebook_shares(get_permalink());
                if(!empty($gfs)){
                    echo ''.$gfs;
                } else {
                    echo '0';
                }
            } ?>
        </a>
    </li>
    <li>
        <a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo get_the_permalink();?>&amp;title=<?php echo get_the_title(); ?>&amp;source=<?php bloginfo( 'name' ); ?>" class="twitter">
            <i class="fa fa-linkedin"></i>
            <?php if(function_exists('get_linkedin_shares')){
                $gls = get_linkedin_shares(get_permalink());
                if(!empty($gls)){
                    echo ''.$gls;
                } else {
                    echo '0';
                }
            } ?>
        </a>
    </li>
    <li>
        <a href="https://plusone.google.com/_/+1/confirm?hl=en-US&amp;url=<?php echo get_the_permalink(); ?>" class="google-plus">
            <i class="fa fa-google-plus"></i>
            <?php if(function_exists('get_google_plus_shares')){
                echo get_google_plus_shares(get_permalink());
            }?>
        </a>
    </li>
    <li>
        <?php if(has_post_thumbnail()){
            $port_img = get_feature_image_url(get_the_ID());
        } else {
            $port_img = '';
        } ?>
        <a href="//pinterest.com/pin/create/button/?url=<?php echo get_the_permalink();?>&amp;media=<?php echo esc_url($port_img); ?>&amp;description=<?php echo get_the_title(); ?>" class="mouth">
            <i class="fa fa-pinterest"></i>
            <?php if(function_exists('get_pinterest_shares')){
                echo get_pinterest_shares(get_permalink());
            } ?>
        </a>
    </li>
</ul>