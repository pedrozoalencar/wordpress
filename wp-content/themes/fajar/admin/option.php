<?php
$theme_url = get_template_directory_uri();
return array(
    'title' => esc_html__('Fajar - Multipurpose WP Theme', 'fajar-wp'),
    'logo' => $theme_url. '/admin/logo.png',
    'menus' => array(
        array(
            'title' => esc_html__('General Settings', 'fajar-wp'),
            'name' => 'menu_1',
            'icon' => 'font-awesome:fa-magic',
            'menus' => array(
                array(
                    'title' => esc_html__('Headers', 'fajar-wp'),
                    'name' => 'header',
                    'icon' => 'font-awesome:fa-th-large',
                    'controls' => array(
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Header Transparent & Header With BG', 'fajar-wp'),
                            'name' => 'header_transparent_section',
                            'description' => esc_html__('Transparent Header & Header With BG Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Light
                                array(
                                    'type' => 'upload',
                                    'name' => 'hts_logo_1',
                                    'label' => esc_html__('Logo Light', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hts_logo_2',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Hide Search
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hts_hide_search',
                                    'label' => esc_html__('Hide Search', 'fajar-wp'),
                                    'description' => esc_html__('You can hide the top right search button.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Top Menu
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hts_hide_top_menu',
                                    'label' => esc_html__('Hide Top Menu', 'fajar-wp'),
                                    'description' => esc_html__('You can hide the top right menu button.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Menu Social
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hts_hide_top_menu_social',
                                    'label' => esc_html__('Hide Top Menu Social', 'fajar-wp'),
                                    'description' => esc_html__('You can hide the top right menu social links.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                            ),
                        ),
                        // Header Classic
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Header Classic', 'fajar-wp'),
                            'name' => 'header_classic_section',
                            'description' => esc_html__('Header Classic Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hc_logo_1',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Hide Search
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hc_hide_search',
                                    'label' => esc_html__('Hide Search', 'fajar-wp'),
                                    'description' => esc_html__('You can hide search button.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Social
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hc_hide_social',
                                    'label' => esc_html__('Hide Social', 'fajar-wp'),
                                    'description' => esc_html__('You can hide social links.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Cart
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hc_hide_cart',
                                    'label' => esc_html__('Hide Cart', 'fajar-wp'),
                                    'description' => esc_html__('You can hide product cart.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Header Email
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hc_email',
                                    'label' => esc_html__('Header Email', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                    'default' => 'info@fajar.com',
                                ),
                                // Header Phone Number
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hc_phone_number',
                                    'label' => esc_html__('Header Phone Number', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                    'default' => '(+01) 112 345 6789',
                                ),
                            ),
                        ),
                        // Header Nav Boxed
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Header Nav Boxed', 'fajar-wp'),
                            'name' => 'header_nav_boxed_section',
                            'description' => esc_html__('Header Nav Boxed Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hnb_logo_1',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Hide Search
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hnb_hide_search',
                                    'label' => esc_html__('Hide Search', 'fajar-wp'),
                                    'description' => esc_html__('You can hide search button.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Social
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hnb_hide_social',
                                    'label' => esc_html__('Hide Social', 'fajar-wp'),
                                    'description' => esc_html__('You can hide social links.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Header Email
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hnb_email',
                                    'label' => esc_html__('Header Email', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                    'default' => 'info@fajar.com',
                                ),
                                // Header Phone Number
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hnb_phone_number',
                                    'label' => esc_html__('Header Phone Number', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                    'default' => '(+01) 112 345 6789',
                                ),
                            ),
                        ),
                        // Header Animated Border
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Header Animated Border / Bottom', 'fajar-wp'),
                            'name' => 'header_animated_border_section',
                            'description' => esc_html__('Header Bottom And Animated Border Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hab_logo_1',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Hide Social
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hab_hide_social',
                                    'label' => esc_html__('Hide Social', 'fajar-wp'),
                                    'description' => esc_html__('You can hide social links.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                            ),
                        ),
                        // Header Nav Center Logo
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Header Nav Center Logo', 'fajar-wp'),
                            'name' => 'header_nav_center_logo_section',
                            'description' => esc_html__('Header Nav Center Logo Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hncl_logo_1',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Hide Center Logo
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hncl_hide_center_logo',
                                    'label' => esc_html__('Hide Center Logo', 'fajar-wp'),
                                    'description' => esc_html__('You can hide center Logo.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Left Menu
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hncl_hide_left_menu',
                                    'label' => esc_html__('Hide Left Menu', 'fajar-wp'),
                                    'description' => esc_html__('You can hide left menu.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Right Menu
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hncl_hide_right_menu',
                                    'label' => esc_html__('Hide Right Menu', 'fajar-wp'),
                                    'description' => esc_html__('You can hide right menu.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                            ),
                        ),
                        // Header Fluid Full
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Header Fluid Full', 'fajar-wp'),
                            'name' => 'header_fluid_full_section',
                            'description' => esc_html__('Header Fluid Full Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hff_logo_1',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Hide Social
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hff_hide_social',
                                    'label' => esc_html__('Hide Social', 'fajar-wp'),
                                    'description' => esc_html__('You can hide social links.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Top Menu
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hff_hide_top_menu',
                                    'label' => esc_html__('Hide Top Menu', 'fajar-wp'),
                                    'description' => esc_html__('You can hide top menu.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Hide Top Menu Social
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hff_hide_top_menu_social',
                                    'label' => esc_html__('Hide Top Menu Social', 'fajar-wp'),
                                    'description' => esc_html__('You can hide top menu social.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                            ),
                        ),
                        // Hero Slider Dark Version Logo Shifts
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Hero Slider Dark Logo Shifter', 'fajar-wp'),
                            'name' => 'hero_slider_dark_logo_shifter_section',
                            'description' => esc_html__('Hero Slider Dark Logo Shifter Details', 'fajar-wp'),
                            'fields' => array(
                                // Logo Dark
                                array(
                                    'type' => 'upload',
                                    'name' => 'hsd_logo_1',
                                    'label' => esc_html__('Logo Dark', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                                // Logo Light
                                array(
                                    'type' => 'upload',
                                    'name' => 'hsd_logo_2',
                                    'label' => esc_html__('Logo Light', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom logo', 'fajar-wp'),
                                ),
                            ),
                        ),
                        // Favicon Section
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Favicon & Mobile Logo', 'fajar-wp'),
                            'name' => 'favicon_section',
                            'description' => esc_html__('Image favicon & Mobile logo.', 'fajar-wp'),
                            'fields' => array(
                                // Favicon
                                array(
                                    'type' => 'upload',
                                    'name' => 'favicon',
                                    'label' => esc_html__('Favicon', 'fajar-wp'),
                                    'description' => esc_html__('Upload 16x16 pixels favicon.', 'fajar-wp'),
                                    'default' => '',
                                ),
                                // Mobile Logo
                                array(
                                    'type' => 'upload',
                                    'name' => 'mobile_logo',
                                    'label' => esc_html__('Mobile Logo', 'fajar-wp'),
                                    'description' => esc_html__('Upload logo for mobile version.', 'fajar-wp'),
                                    'default' => '',
                                ),
                            ),
                        ),
                        // Other Details Section
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Other Details', 'fajar-wp'),
                            'name' => 'other_section',
                            'description' => esc_html__('Other Details', 'fajar-wp'),
                            'fields' => array(
                                // Enable Boxed Layout
                                array(
                                    'type' => 'toggle',
                                    'name' => 'enabled_boxed_layout',
                                    'label' => esc_html__('Enabled Boxed Layout', 'fajar-wp'),
                                    'description' => esc_html__('You can enable boxed layout for the site.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                array(
                                    'type' => 'upload',
                                    'name' => 'pattern_for_box',
                                    'label' => esc_html__('Pattern For Boxed Layout', 'fajar-wp'),
                                    'dependency' => array(
                                        'field' => 'enabled_boxed_layout',
                                        'function' => 'vp_dep_boolean',
                                    ),
                                    'description' => esc_html__('Upload pattern for boxed layout.', 'fajar-wp'),
                                ),
                                // Enable Site Animations
                                array(
                                    'type' => 'toggle',
                                    'name' => 'enabled_animations',
                                    'label' => esc_html__('Enabled Site Animations', 'fajar-wp'),
                                    'description' => esc_html__('You can enable animations for site.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                // Disable Pre-loader
                                array(
                                    'type' => 'toggle',
                                    'name' => 'disable_pre_loader',
                                    'label' => esc_html__('Disable Pre-Loader', 'fajar-wp'),
                                    'description' => esc_html__('You can disable pre-loader for the site.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                                array(
                                    'type' => 'color',
                                    'name' => 'pre_loader_pulse_color',
                                    'label' => esc_html__('Pre-loader Pulse Color', 'fajar-wp'),
                                    'description' => esc_html__('Color Picker, you can set pre-loader pulse color.', 'fajar-wp'),
                                ),
                                // Custom CSS
                                array(
                                    'type' => 'codeeditor',
                                    'name' => 'custom_css',
                                    'label' => esc_html__('Custom CSS', 'fajar-wp'),
                                    'description' => esc_html__('Write your custom css here. No style tag.', 'fajar-wp'),
                                    'theme' => 'github',
                                    'mode' => 'css',
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'title' => esc_html__('Banners', 'fajar-wp'),
                    'name' => 'banners',
                    'icon' => 'font-awesome:fa-file-image-o',
                    'controls' => array(
                        // General Header & Banners Selection
                        array(
                            'type' => 'section',
                            'title' => esc_html__('General Banners', 'fajar-wp'),
                            'name' => 'general_banners_section',
                            'description' => esc_html__('General Banners', 'fajar-wp'),
                            'fields' => array(
                                // General Pages Header
                                array(
                                    'type' => 'select',
                                    'name' => 'general_page_headers',
                                    'label' => esc_html__('General Pages Header', 'fajar-wp'),
                                    'description' => esc_html__('Set header for general pages like search, author and home etc. ', 'fajar-wp'),
                                    'items' => array(
                                        array(
                                            'value' => 'hide',
                                            'label' => esc_html__('Hide', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerTransparent',
                                            'label' => esc_html__('Header Transparent', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerBG',
                                            'label' => esc_html__('Header With BG', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerClassic',
                                            'label' => esc_html__('Header Classic', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerNavBoxed',
                                            'label' => esc_html__('Header Nav Boxed', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerAnimatedBorder',
                                            'label' => esc_html__('Header Animated Border', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerNavCenterLogo',
                                            'label' => esc_html__('Header Nav Center Logo', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerFullFluid',
                                            'label' => esc_html__('Header Fluid Full', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'headerBottom',
                                            'label' => esc_html__('Header Bottom', 'fajar-wp'),
                                        ),
                                    ),
                                    'default' => array(
                                        'headerBG',
                                    ),
                                ),
                                // General Pages Banner
                                array(
                                    'type' => 'select',
                                    'name' => 'general_pages_banner',
                                    'label' => esc_html__('General Pages Banner', 'fajar-wp'),
                                    'description' => esc_html__('Set banner for general pages like search, author and home etc. ', 'fajar-wp'),
                                    'items' => array(
                                        array(
                                            'value' => 'hide',
                                            'label' => esc_html__('Hide', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'breadCrumb',
                                            'label' => esc_html__('Breadcrumb', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'imgWithParallax',
                                            'label' => esc_html__('Image With Parallax', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'imgWithSocialInfo',
                                            'label' => esc_html__('Image With Social Info', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'heroSlider',
                                            'label' => esc_html__('Hero Slider', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'tabsSlider',
                                            'label' => esc_html__('Tabs Slider', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'sliderRevolution',
                                            'label' => esc_html__('Slider Revolution', 'fajar-wp'),
                                        ),
                                    ),
                                    'default' => array(
                                        'hide',
                                    ),
                                ),
                            ),
                        ),
                        // Banner With Image & Social Info
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Banner With Image & Social Info', 'fajar-wp'),
                            'name' => 'banner_with_image_social_info_section',
                            'description' => esc_html__('Banner With Image & Along Social Icons Banner', 'fajar-wp'),
                            'fields' => array(
                                // Heading
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_heading',
                                    'label' => esc_html__('Heading', 'fajar-wp')
                                ),
                                // Small Caption
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_small_caption',
                                    'label' => esc_html__('Small Caption', 'fajar-wp')
                                ),
                                // Disable Parallax Effect
                                array(
                                    'type' => 'select',
                                    'name' => 'hba_disable_parallax_effect',
                                    'label' => esc_html__('Disable Parallax Effect', 'fajar-wp'),
                                    'items' => array(
                                        array(
                                            'value' => 'no',
                                            'label' => esc_html__('No', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'yes',
                                            'label' => esc_html__('Yes', 'fajar-wp'),
                                        ),
                                    ),
                                    'default' => array(
                                        'no',
                                    ),
                                ),
                                // Facebook
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_facebook',
                                    'label' => esc_html__('Facebook', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                ),
                                // Twitter
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_twitter',
                                    'label' => esc_html__('Twitter', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                ),
                                // Google Plus
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_google_plus',
                                    'label' => esc_html__('Google Plus', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                ),
                                // Instagram
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_instagram',
                                    'label' => esc_html__('Instagram', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                ),
                                // Pinterest
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hba_pinterest',
                                    'label' => esc_html__('Pinterest', 'fajar-wp'),
                                    'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                                ),
                                // Background Image
                                array(
                                    'type' => 'upload',
                                    'name' => 'hba_background_image',
                                    'label' => esc_html__('Background Image', 'fajar-wp'),
                                    'description' => esc_html__('Upload or choose custom background image.', 'fajar-wp'),
                                ),
                            ),
                        ),
                        // Slider Options
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Slider Options', 'fajar-wp'),
                            'name' => 'slider_details_section',
                            'description' => esc_html__('Tabs, Hero & Revolution slider details.', 'fajar-wp'),
                            'fields' => array(
                                // Input Slider Alias
                                array(
                                    'type' => 'textbox',
                                    'name' => 'hero_tabs_input_slider_alias',
                                    'label' => esc_html__('Input Tabs/Hero Slider Alias', 'fajar-wp')
                                ),
                                // Slides Display Order
                                array(
                                    'type' => 'select',
                                    'name' => 'hero_tabs_slides_display_order',
                                    'label' => esc_html__('Slides Display Order', 'fajar-wp'),
                                    'description' => esc_html__('Select slides display order.', 'fajar-wp'),
                                    'items' => array(
                                        array(
                                            'value' => 'ASC',
                                            'label' => esc_html__('Ascending', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'DESC',
                                            'label' => esc_html__('Desending', 'fajar-wp'),
                                        ),
                                    ),
                                    'default' => array(
                                        'ASC',
                                    ),
                                ),
                                // Input Slider Revolution Alias
                                array(
                                    'type' => 'textbox',
                                    'name' => 'rev_input_slider_alias',
                                    'label' => esc_html__('Input Revolution Slider Alias', 'fajar-wp'),
                                    'description' => esc_html__('Please input slider revolution alias only not whole shortcode.', 'fajar-wp'),
                                ),
                            ),
                        ),
                    ),
                ),
                array(
                    'title' => esc_html__('Footer Details', 'fajar-wp'),
                    'name' => 'footer',
                    'icon' => 'font-awesome:fa-ellipsis-h',
                    'controls' => array(
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Footers', 'fajar-wp'),
                            'name' => 'footer_section',
                            'description' => esc_html__('Select footer for general pages.', 'fajar-wp'),
                            'fields' => array(
                                // Footer Type
                                array(
                                    'type' => 'select',
                                    'name' => 'pg_select_page_footer',
                                    'label' => esc_html__('General Pages Footer', 'fajar-wp'),
                                    'description' => esc_html__('Set footer for general pages like search, author and home etc. ', 'fajar-wp'),
                                    'items' => array(
                                        array(
                                            'value' => 'footer-1',
                                            'label' => esc_html__('Footer 1', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'footer-2',
                                            'label' => esc_html__('Footer 2', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'footer-3',
                                            'label' => esc_html__('Footer 3', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'footer-4',
                                            'label' => esc_html__('Footer 4', 'fajar-wp'),
                                        ),
                                        array(
                                            'value' => 'footer-5',
                                            'label' => esc_html__('Footer 5', 'fajar-wp'),
                                        ),
                                    ),
                                    'default' => array(
                                        'footer-5',
                                    ),
                                ),
                            ),
                        ),
                        // Location Widget
                        array(
                            'type' => 'section',
                            'title' => esc_html__('2 Locations Widget', 'fajar-wp'),
                            'name' => 'location_widget_section',
                            'description' => esc_html__('Location Widget', 'fajar-wp'),
                            'fields' => array(
                                // Location 1 Address
                                array(
                                    'type' => 'textbox',
                                    'name' => 'location_1_address',
                                    'label' => esc_html__('Location 1 Address', 'fajar-wp'),
                                    'default' => 'America place nice, RD nice DHA Road, state pace 786'
                                ),
                                // Map Image
                                array(
                                    'type' => 'upload',
                                    'name' => 'map_img',
                                    'label' => esc_html__('Map Image', 'fajar-wp'),
                                    'description' => esc_html__('Upload maximum 350px large image width wise.', 'fajar-wp'),
                                ),
                                // Location 2 Address
                                array(
                                    'type' => 'textbox',
                                    'name' => 'location_2_address',
                                    'label' => esc_html__('Location 2 Address', 'fajar-wp'),
                                    'default' => 'America place nice, RD nice DHA Road, state pace 786'
                                ),
                                // Hide Widget Area
                                array(
                                    'type' => 'toggle',
                                    'name' => 'hide_widget_area',
                                    'label' => esc_html__('Hide Location Widget Area', 'fajar-wp'),
                                    'description' => esc_html__('You can hide location widget from footer.', 'fajar-wp'),
                                    'default' => '0',
                                ),
                            ),
                        ),
                        // Other Details Section
                        array(
                            'type' => 'section',
                            'title' => esc_html__('Other Details', 'fajar-wp'),
                            'name' => 'footer_other_section',
                            'description' => esc_html__('Other Details', 'fajar-wp'),
                            'fields' => array(
                                // Custom JS
                                array(
                                    'type' => 'codeeditor',
                                    'name' => 'custom_js',
                                    'label' => esc_html__('Custom JS', 'fajar-wp'),
                                    'description' => esc_html__('Write your custom js here. No script tag.', 'fajar-wp'),
                                    'theme' => 'twilight',
                                    'mode' => 'javascript',
                                ),
                                // Footer Copyright
                                array(
                                    'type' => 'textbox',
                                    'name' => 'footer_copyright',
                                    'label' => esc_html__('Footer Copyright', 'fajar-wp'),
                                    'description' => esc_html__('Only alphabets and numbers allowed here.', 'fajar-wp'),
                                    'default' => '&copy; 2016 Fajar. All rights reserved.',
                                    'validation' => '',
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
        // Styling Options
        array(
            'title' => esc_html__('Styling Options', 'fajar-wp'),
            'name' => 'styling_options',
            'icon' => 'font-awesome:fa-gift',
            'controls' => array(
                // Theme Skins
                array(
                    'type' => 'section',
                    'title' => esc_html__('Theme Skins', 'fajar-wp'),
                    'fields' => array(
                        array(
                            'type' => 'radioimage',
                            'name' => 'theme_skins',
                            'label' => esc_html__('Choose Theme Skin', 'fajar-wp'),
                            'description' => esc_html__('Select your theme general skin layout.', 'fajar-wp'),
                            'items' => array(
                                // Default
                                array(
                                    'value' => 'default',
                                    'label' => esc_html__('Default', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/default.png',
                                ),
                                // brown
                                array(
                                    'value' => 'brown',
                                    'label' => esc_html__('Brown', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/brown.png',
                                ),
                                // dark-blue
                                array(
                                    'value' => 'dark-blue',
                                    'label' => esc_html__('Dark Blue', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/dark-blue.png',
                                ),
                                // dark-green
                                array(
                                    'value' => 'dark-green',
                                    'label' => esc_html__('Dark Green', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/dark-green.png',
                                ),
                                // green
                                array(
                                    'value' => 'green',
                                    'label' => esc_html__('Green', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/green.png',
                                ),
                                // grey
                                array(
                                    'value' => 'grey',
                                    'label' => esc_html__('Grey', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/grey.png',
                                ),
                                // light-blue
                                array(
                                    'value' => 'light-blue',
                                    'label' => esc_html__('Light Blue', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/light-blue.png',
                                ),
                                // orange
                                array(
                                    'value' => 'orange',
                                    'label' => esc_html__('Orange', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/orange.png',
                                ),
                                // pink
                                array(
                                    'value' => 'pink',
                                    'label' => esc_html__('Pink', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/pink.png',
                                ),
                                // purple
                                array(
                                    'value' => 'purple',
                                    'label' => esc_html__('Purple', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/purple.png',
                                ),
                                // red
                                array(
                                    'value' => 'red',
                                    'label' => esc_html__('Red', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/red.png',
                                ),
                                // yellow
                                array(
                                    'value' => 'yellow',
                                    'label' => esc_html__('Yellow', 'fajar-wp'),
                                    'img' => $theme_url.'/admin/images/yellow.png',
                                ),
                            ),
                        ),
                        // Enable Dark Version
                        array(
                            'type' => 'toggle',
                            'name' => 'enable_dark_version',
                            'label' => esc_html__('Enable Dark Version Of Site', 'fajar-wp'),
                            'description' => esc_html__('You can enable dark version of the site.', 'fajar-wp'),
                            'default' => '0',
                        ),
                    ),
                ),
                // Heading Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Headings', 'fajar-wp'),
                    'fields' => array(
                        // Heading H1
                        array(
                            'type' => 'color',
                            'name' => 'heading_h1',
                            'label' => esc_html__('Heading H1', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set heading color.', 'fajar-wp'),
                        ),
                        // Heading H2
                        array(
                            'type' => 'color',
                            'name' => 'heading_h2',
                            'label' => esc_html__('Heading H2', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set heading color.', 'fajar-wp'),
                        ),
                        // Heading H3
                        array(
                            'type' => 'color',
                            'name' => 'heading_h3',
                            'label' => esc_html__('Heading H3', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set heading color.', 'fajar-wp'),
                        ),
                        // Heading H4
                        array(
                            'type' => 'color',
                            'name' => 'heading_h4',
                            'label' => esc_html__('Heading H4', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set heading color.', 'fajar-wp'),
                        ),
                        // Heading H5
                        array(
                            'type' => 'color',
                            'name' => 'heading_h5',
                            'label' => esc_html__('Heading H5', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set heading color.', 'fajar-wp'),
                        ),
                        // Heading H6
                        array(
                            'type' => 'color',
                            'name' => 'heading_h6',
                            'label' => esc_html__('Heading H6', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set heading color.', 'fajar-wp'),
                        ),
                        // Paragraph P
                        array(
                            'type' => 'color',
                            'name' => 'paragraph_p',
                            'label' => esc_html__('Paragraph P', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set paragraph color.', 'fajar-wp'),
                        ),
                    ),
                ),
                // Header Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Header', 'fajar-wp'),
                    'fields' => array(
                        // Menu Normal Color
                        array(
                            'type' => 'color',
                            'name' => 'menu_normal',
                            'label' => esc_html__('Menu Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set menu color.', 'fajar-wp'),
                        ),
                        // Header BG Color
                        array(
                            'type' => 'color',
                            'name' => 'header_bg',
                            'label' => esc_html__('Menu Header Background Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set background color.', 'fajar-wp'),
                        ),
                    ),
                ),
                // Body Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Body', 'fajar-wp'),
                    'fields' => array(
                        // Body Background Color
                        array(
                            'type' => 'color',
                            'name' => 'body_bg',
                            'label' => esc_html__('Body Background Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set body background color.', 'fajar-wp'),
                        ),
                        // Body Color
                        array(
                            'type' => 'color',
                            'name' => 'body_color',
                            'label' => esc_html__('Body Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set body color, general p tag.', 'fajar-wp'),
                        ),
                    ),
                ),
                // Footer Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Footer', 'fajar-wp'),
                    'fields' => array(
                        // Footer Background Color
                        array(
                            'type' => 'color',
                            'name' => 'footer_bg',
                            'label' => esc_html__('Footer Background Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set footer background color.', 'fajar-wp'),
                        ),
                        // Footer Color
                        array(
                            'type' => 'color',
                            'name' => 'footer_color',
                            'label' => esc_html__('Footer Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set footer color.', 'fajar-wp'),
                        ),
                    ),
                ),
                // Other Styling
                array(
                    'type' => 'section',
                    'title' => esc_html__('Other Styling', 'fajar-wp'),
                    'fields' => array(
                        // Links Color
                        array(
                            'type' => 'color',
                            'name' => 'links_normal',
                            'label' => esc_html__('Links Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set links color.', 'fajar-wp'),
                        ),
                        // Links Hover Color
                        array(
                            'type' => 'color',
                            'name' => 'links_hover',
                            'label' => esc_html__('Links Hover Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set links hover color.', 'fajar-wp'),
                        ),
                        // Widget Title
                        array(
                            'type' => 'color',
                            'name' => 'widget_title',
                            'label' => esc_html__('Widget Title Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set widget title color.', 'fajar-wp'),
                        ),
                        // Header Right Menu BG
                        array(
                            'type' => 'color',
                            'name' => 'background_right_menu',
                            'label' => esc_html__('Right Menu Background Color', 'fajar-wp'),
                            'description' => esc_html__('Color Picker, you can set right menu background color.', 'fajar-wp'),
                        ),
                    ),
                ),
            ),
        ),
        // Typography Options
        array(
            'title' => esc_html__('Typography Options', 'fajar-wp'),
            'name' => 'typo_options',
            'icon' => 'font-awesome:fa-text-width',
            'controls' => array(
                // Headings Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Headings Font Family', 'fajar-wp'),
                    'fields' => array(
                        array(
                            'type' => 'select',
                            'name' => 'headings_font_face',
                            'label' => esc_html__('Headings Font Face: h1,h2,h3', 'fajar-wp'),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'function',
                                        'value' => 'vp_get_gwf_family',
                                    ),
                                ),
                            ),
                            //'default' => '{{first}}'
                        ),
                        array(
                            'type' => 'radiobutton',
                            'name' => 'headings_font_weight',
                            'label' => esc_html__('Headings Font Weight', 'fajar-wp'),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'binding',
                                        'field' => 'headings_font_face',
                                        'value' => 'vp_get_gwf_weight',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // Meta Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Meta Data Font Family', 'fajar-wp'),
                    'fields' => array(
                        array(
                            'type' => 'select',
                            'name' => 'meta_font_face',
                            'label' => esc_html__('Meta Data Font Face: h4,h5,h6, widget title etc.', 'fajar-wp'),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'function',
                                        'value' => 'vp_get_gwf_family',
                                    ),
                                ),
                            ),
                            //'default' => '{{first}}'
                        ),
                        array(
                            'type' => 'radiobutton',
                            'name' => 'meta_font_weight',
                            'label' => esc_html__('Meta Data Font Weight', 'fajar-wp'),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'binding',
                                        'field' => 'meta_font_face',
                                        'value' => 'vp_get_gwf_weight',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // Body Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Body Font Family', 'fajar-wp'),
                    'fields' => array(
                        array(
                            'type' => 'select',
                            'name' => 'body_font_face',
                            'label' => esc_html__('Body Font Face', 'fajar-wp'),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'function',
                                        'value' => 'vp_get_gwf_family',
                                    ),
                                ),
                            ),
                            //'default' => '{{first}}'
                        ),
                        array(
                            'type' => 'radiobutton',
                            'name' => 'body_font_weight',
                            'label' => esc_html__('Body Font Weight', 'fajar-wp'),
                            'items' => array(
                                'data' => array(
                                    array(
                                        'source' => 'binding',
                                        'field' => 'body_font_face',
                                        'value' => 'vp_get_gwf_weight',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
                // Font Sizes Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Font Sizes', 'fajar-wp'),
                    'fields' => array(
                        // Body Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'body_font_size',
                            'label'   => esc_html__('Body Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // H1 Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'h1_font_size',
                            'label'   => esc_html__('H1 Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // H2 Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'h2_font_size',
                            'label'   => esc_html__('H2 Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // H3 Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'h3_font_size',
                            'label'   => esc_html__('H3 Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // H4 Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'h4_font_size',
                            'label'   => esc_html__('H4 Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // H5 Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'h5_font_size',
                            'label'   => esc_html__('H5 Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // H6 Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'h6_font_size',
                            'label'   => esc_html__('H6 Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // Menu Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'menu_font_size',
                            'label'   => esc_html__('Menu Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // Page Title Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'page_title_font_size',
                            'label'   => esc_html__('Page Title Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // Post Title Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'post_title_font_size',
                            'label'   => esc_html__('Post Title Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                        // Widget Title Font Size
                        array(
                            'type'    => 'slider',
                            'name'    => 'widget_title_font_size',
                            'label'   => esc_html__('Widget Title Font Size (px)', 'fajar-wp'),
                            'min'     => '0',
                            'max'     => '100',
                            'step'    => '1',
                        ),
                    ),
                ),
            ),
        ),
        // Woocommerce
        array(
            'title' => esc_html__('Woocommerce', 'fajar-wp'),
            'name' => 'woo_options',
            'icon' => 'font-awesome:fa-shopping-cart',
            'controls' => array(
                // Headings Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Shop Pages Details', 'fajar-wp'),
                    'fields' => array(
                        // Shop, Category, Archive & Single Shop Page Header
                        array(
                            'type' => 'select',
                            'name' => 'shop_page_headers',
                            'label' => esc_html__('Shop, Category, Archive & Single Shop Page Header', 'fajar-wp'),
                            'description' => esc_html__('Set header for shop pages. ', 'fajar-wp'),
                            'items' => array(
                                array(
                                    'value' => 'hide',
                                    'label' => esc_html__('Hide', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerTransparent',
                                    'label' => esc_html__('Header Transparent', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerBG',
                                    'label' => esc_html__('Header With BG', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerClassic',
                                    'label' => esc_html__('Header Classic', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerNavBoxed',
                                    'label' => esc_html__('Header Nav Boxed', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerAnimatedBorder',
                                    'label' => esc_html__('Header Animated Border', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerNavCenterLogo',
                                    'label' => esc_html__('Header Nav Center Logo', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerFullFluid',
                                    'label' => esc_html__('Header Fluid Full', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'headerBottom',
                                    'label' => esc_html__('Header Bottom', 'fajar-wp'),
                                ),
                            ),
                            'default' => array(
                                'headerBG',
                            ),
                        ),
                        // Footer Type
                        array(
                            'type' => 'select',
                            'name' => 'shop_page_footer',
                            'label' => esc_html__('Shop, Category, Archive & Single Shop Page Footer', 'fajar-wp'),
                            'description' => esc_html__('Set footer for shop pages. ', 'fajar-wp'),
                            'items' => array(
                                array(
                                    'value' => 'footer-1',
                                    'label' => esc_html__('Footer 1', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'footer-2',
                                    'label' => esc_html__('Footer 2', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'footer-3',
                                    'label' => esc_html__('Footer 3', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'footer-4',
                                    'label' => esc_html__('Footer 4', 'fajar-wp'),
                                ),
                                array(
                                    'value' => 'footer-5',
                                    'label' => esc_html__('Footer 5', 'fajar-wp'),
                                ),
                            ),
                            'default' => array(
                                'footer-5',
                            ),
                        ),
                        // Hide Shop Banner
                        array(
                            'type' => 'toggle',
                            'name' => 'hide_shop_banner',
                            'label' => esc_html__('Hide Shop Banner', 'fajar-wp'),
                            'description' => esc_html__('You can hide banner from shop pages.', 'fajar-wp'),
                            'default' => '0',
                        ),
                        // Disable Parallax Effect
                        array(
                            'type' => 'toggle',
                            'name' => 'disable_shop_parallax',
                            'label' => esc_html__('Disable Shop Parallax', 'fajar-wp'),
                            'description' => esc_html__('You can disable banner parallax effect.', 'fajar-wp'),
                            'default' => '0',
                        ),
                        // Heading
                        array(
                            'type' => 'textbox',
                            'name' => 'shop_banner_heading',
                            'label' => esc_html__('Banner Heading', 'fajar-wp'),
                            'default' => 'OUR STORE',
                        ),
                        // Small Caption
                        array(
                            'type' => 'textbox',
                            'name' => 'shop_banner_caption',
                            'label' => esc_html__('Banner Small Caption', 'fajar-wp'),
                            'default' => 'Fast WorldWide Shipping',
                        ),
                        // Banner Image
                        array(
                            'type' => 'upload',
                            'name' => 'shop_image',
                            'label' => esc_html__('Upload', 'fajar-wp'),
                            'description' => esc_html__('Upload shop banner image.', 'fajar-wp'),
                        ),
                        // Number Of Products Display
                        array(
                            'type' => 'textbox',
                            'name' => 'number_of_shop_products',
                            'label' => esc_html__('Number Of Shop Products', 'fajar-wp'),
                            'description' => esc_html__('Only numbers allowed here.', 'fajar-wp'),
                            'default' => '9',
                            'validation' => 'numeric',
                        ),
                    ),
                ),
            ),
        ),
        // 404 Page Not Found
        array(
            'title' => esc_html__('Page 404', 'fajar-wp'),
            'name' => 'page_404_options',
            'icon' => 'font-awesome:fa-warning',
            'controls' => array(
                // 404 Page Details
                array(
                    'type' => 'section',
                    'title' => esc_html__('Page 404 Details', 'fajar-wp'),
                    'fields' => array(
                        // Text
                        array(
                            'type' => 'textarea',
                            'name' => 'page_404',
                            'label' => __('404 Detailed Text', 'fajar-wp'),
                        ),
                        // Note
                        array(
                            'type' => 'notebox',
                            'name' => 'nb_1',
                            'label' => __('Note', 'fajar-wp'),
                            'description' => __('You can override default 404 page text by input in above textarea, HTML tags are supported.', 'fajar-wp'),
                            'status' => 'normal',
                        ),
                    ),
                ),
            ),
        ),
        // Twitter API
        array(
            'title' => esc_html__('Twitter API', 'fajar-wp'),
            'name' => 'twitter_options',
            'icon' => 'font-awesome:fa-twitter',
            'controls' => array(
                // Headings Section
                array(
                    'type' => 'section',
                    'title' => esc_html__('Twiiter API Details', 'fajar-wp'),
                    'fields' => array(
                        // User Name
                        array(
                            'type' => 'textbox',
                            'name' => 'tw_user_name',
                            'label' => esc_html__('User Name', 'fajar-wp'),
                        ),
                        // Consumer Key
                        array(
                            'type' => 'textbox',
                            'name' => 'tw_consumer_key',
                            'label' => esc_html__('Consumer Key', 'fajar-wp'),
                        ),
                        // Consumer Secret
                        array(
                            'type' => 'textbox',
                            'name' => 'tw_consumer_secret',
                            'label' => esc_html__('Consumer Secret', 'fajar-wp'),
                        ),
                        // Access Token
                        array(
                            'type' => 'textbox',
                            'name' => 'tw_access_token',
                            'label' => esc_html__('Access Token', 'fajar-wp'),
                        ),
                        // Access Token Secret
                        array(
                            'type' => 'textbox',
                            'name' => 'access_token_secret',
                            'label' => esc_html__('Access Token Secret', 'fajar-wp'),
                        ),
                    ),
                ),
            ),
        ),
        // Get Social
        array(
            'title' => esc_html__('Get Social', 'fajar-wp'),
            'name' => 'contact_options',
            'icon' => 'font-awesome:fa-flag',
            'controls' => array(
                // Social Connect
                array(
                    'type' => 'section',
                    'title' => esc_html__('Social Connect', 'fajar-wp'),
                    'fields' => array(
                        // Facebook
                        array(
                            'type' => 'textbox',
                            'name' => 'facebook',
                            'label' => esc_html__('Facebook', 'fajar-wp'),
                            'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                            'default' => '#',
                        ),
                        // Twitter
                        array(
                            'type' => 'textbox',
                            'name' => 'twitter',
                            'label' => esc_html__('Twitter', 'fajar-wp'),
                            'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                            'default' => '#',
                        ),
                        // Google Plus
                        array(
                            'type' => 'textbox',
                            'name' => 'google',
                            'label' => esc_html__('Google Plus', 'fajar-wp'),
                            'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                            'default' => '',
                        ),
                        // Linkedin
                        array(
                            'type' => 'textbox',
                            'name' => 'linkedin',
                            'label' => esc_html__('LinkedIn', 'fajar-wp'),
                            'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                            'default' => '',
                        ),
                        // Pinterest
                        array(
                            'type' => 'textbox',
                            'name' => 'pinterest',
                            'label' => esc_html__('Pinterest', 'fajar-wp'),
                            'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                            'default' => '#',
                        ),
                        // Instagram
                        array(
                            'type' => 'textbox',
                            'name' => 'instagram',
                            'label' => esc_html__('Instagram', 'fajar-wp'),
                            'description' => esc_html__('Leave empty if not required.', 'fajar-wp'),
                            'default' => '',
                        ),
                    ),
                ),
            ),
        ),
    )
);
/**
 *EOF
 */