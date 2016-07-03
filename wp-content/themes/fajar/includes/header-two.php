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
    <header class="hide-topbar-after header-classic">
        <div class="top-bar">
            <div class="container">
                <ul class="list-unstyled top-contact-info">
                    <?php $hc_phone_number = fajar_option('hc_phone_number');
                    $hc_email = fajar_option('hc_email');
                    if(!empty($hc_phone_number)){ ?>
                        <li><i class="icon-call-1"></i><?php echo esc_attr($hc_phone_number); ?></li>
                    <?php } if(!empty($hc_email)){ ?>
                        <li><i class="icon-envelope"></i><a href="mailto:<?php echo esc_attr($hc_email); ?>"> <?php echo esc_attr($hc_email); ?></a></li>
                    <?php } ?>
                </ul>
                <?php $hc_hide_social = fajar_option('hc_hide_social');
                if($hc_hide_social != 1){ ?>
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
            </div>
        </div>
        <div class="container">
            <div class="small-header-container">
                <nav class="navbar navbar-default nav-border-bottom" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand index2-logo-demo" href="<?php echo esc_url(home_url('/')); ?>">
                            <?php $hc_logo_1 = fajar_option('hc_logo_1');
                            if(!empty($hc_logo_1)){ ?>
                                <img class="remain-black" src="<?php echo esc_url($hc_logo_1); ?>" alt="">
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
                        <ul class="nav navbar-nav header-two">
                            <?php require_once(get_template_directory() . "/includes/mega-menu/mega-menu.php"); ?>
                        </ul>

                    </div><!-- /.navbar-collapse -->
                    <div class="searcho" id="search">
                        <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                            <input type="text" name="s" placeholder="Search...">
                            <a href="#."><i class="icon-cross3" id="close-search"></i></a>
                        </form>
                    </div>
                </nav>
                <div class="classic-header-right">
                    <?php if ( has_nav_menu( 'primary-menu' ) ) {
						 $hc_hide_search = fajar_option('hc_hide_search');
                    if($hc_hide_search != 1){ ?>
                        <div class="search-btn">
                            <i class="icon-icons185" id="show-search"></i>
                        </div>
                    <?php }
					 }
					 $hc_hide_cart = fajar_option('hc_hide_cart');
                    if($hc_hide_cart != 1){ ?>
                        <div class="shopping-cart">
                            <a href="#." id="checkout-btn"><i class="icon-icons240"></i></a>
                        </div>
                    <?php } ?>
                    <div class="checkout" id="checkout">
                        <div class="checkout-header">
                            <i class="icon-cart"></i>
                            <a href="#." id="checkout-close-btn" class="checkout-close"><i class="icon-cross3"></i></a>
                        </div>
                        <?php global $woocommerce;
                        if ( function_exists('WC') && ! WC()->cart->is_empty() ) : ?>
                            <div class="checkout-heading">
                                <span><?php echo esc_html__('Your Order','fajar-wp'); ?></span>
                                <span><?php echo esc_html__('Price','fajar-wp'); ?></span>
                            </div>
                            <div class="checkout-body clearfix">
                                <div class="cover-overflow">
                                    <?php
                                    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                                        $_product     = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                                        $product_id   = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                                        if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_widget_cart_item_visible', true, $cart_item, $cart_item_key ) ) {

                                            $product_name  = apply_filters( 'woocommerce_cart_item_name', $_product->get_title(), $cart_item, $cart_item_key );
                                            $thumbnail     = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                                            $product_price = apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                            ?>
                                            <ul class="checkout-product clearfix">
                                                <li>
                                                    <a href="<?php echo esc_url( $_product->get_permalink( $cart_item ) ); ?>">
                                                        <?php echo ''.$thumbnail; ?>
                                                    </a>
                                                    <p><?php echo esc_attr($product_name); ?>
                                                        <span> (<?php echo esc_attr($cart_item['quantity']); ?>)</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <span><?php echo ''.$product_price; ?></span>
                                                </li>
                                            </ul>
                                        <?php
                                        }
                                    } ?>
                                </div>
                                <?php if ( ! WC()->cart->is_empty() ) : ?>
                                    <div class="checkout-total clearfix">
                                        <ul>
                                            <li><?php echo esc_html__('Sub Total','fajar-wp'); ?></li>
                                            <li><?php echo WC()->cart->get_cart_subtotal(); ?></li>
                                        </ul>
                                    </div>
                                <?php endif; ?>
                                <div class="checkout-buttons">
                                    <a href="<?php echo esc_url( apply_filters( 'woocommerce_return_to_shop_redirect', wc_get_page_permalink( 'shop' ) ) ); ?>" class="btn btn-default btn-grey btn-square btn-medium">continue shopping</a>
                                    <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="btn btn-default btn-dark btn-square btn-medium">checkout</a>
                                </div>
                            </div>
                        <?php else : ?>
                            <div class="checkout-heading">
                                <span><?php esc_html_e( 'No products in the cart.', 'woocommerce' ); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
    </header>