<?php
// Legacy Update
function fajar_visual_composer_legacy_update() {
    if ( defined( 'WPB_VC_VERSION' ) && version_compare( WPB_VC_VERSION, '4.3.5', '<' ) ) {
        do_action( 'vc_before_init' );
    }
}
add_action( 'admin_init', 'fajar_visual_composer_legacy_update' );

/* Set Visual Composer */
// Removes tabs such as the "Design Options" from the Visual Composer Settings & page and disables automatic updates.
function fajar_visual_composer_set_as_theme() {
    vc_set_as_theme( true );
}
add_action( 'vc_before_init', 'fajar_visual_composer_set_as_theme' );
// Remove Default Shortcodes
if ( ! function_exists( 'fajar_visual_composer_remove_default_shortcodes' ) ) {
    function fajar_visual_composer_remove_default_shortcodes() {
        //vc_remove_element( 'vc_column_text' );
        //vc_remove_element( 'vc_separator' );
        //vc_remove_element( 'vc_text_separator' );
        vc_remove_element( 'vc_message' );
        vc_remove_element( 'vc_facebook' );
        vc_remove_element( 'vc_tweetmeme' );
        vc_remove_element( 'vc_googleplus' );
        vc_remove_element( 'vc_pinterest' );
        vc_remove_element( 'vc_toggle' );
        //vc_remove_element( 'vc_single_image' );
        vc_remove_element( 'vc_gallery' );
        vc_remove_element( 'vc_images_carousel' );
        vc_remove_element( 'vc_tabs' );
        vc_remove_element( 'vc_tour' );
        vc_remove_element( 'vc_accordion' );
        vc_remove_element( 'vc_posts_grid' );
        vc_remove_element( 'vc_carousel' );
        vc_remove_element( 'vc_posts_slider' );
        vc_remove_element( 'vc_widget_sidebar' );
        vc_remove_element( 'vc_button' );
        vc_remove_element( 'vc_cta_button' );
        vc_remove_element( 'vc_video' );
        vc_remove_element( 'vc_gmaps' );
        vc_remove_element( 'vc_raw_html' );
        vc_remove_element( 'vc_raw_js' );
        vc_remove_element( 'vc_flickr' );
        vc_remove_element( 'vc_progress_bar' );
        vc_remove_element( 'vc_pie' );
        //vc_remove_element( 'contact-form-7' );
        vc_remove_element( 'rev_slider_vc' );
        vc_remove_element( 'rev_slider' );
        vc_remove_element( 'vc_wp_search' );
        vc_remove_element( 'vc_wp_meta' );
        vc_remove_element( 'vc_wp_recentcomments' );
        vc_remove_element( 'vc_wp_calendar' );
        vc_remove_element( 'vc_wp_pages' );
        vc_remove_element( 'vc_wp_tagcloud' );
        vc_remove_element( 'vc_wp_custommenu' );
        vc_remove_element( 'vc_wp_text' );
        vc_remove_element( 'vc_wp_posts' );
        vc_remove_element( 'vc_wp_links' );
        vc_remove_element( 'vc_wp_categories' );
        vc_remove_element( 'vc_wp_archives' );
        vc_remove_element( 'vc_wp_rss' );
        vc_remove_element( 'vc_button2' );
        vc_remove_element( 'vc_cta_button2' );
        vc_remove_element( 'vc_custom_heading' );
        //vc_remove_element( 'vc_empty_space' );
        vc_remove_element( 'vc_icon' );
        vc_remove_element( 'vc_tta_tabs' );
        vc_remove_element( 'vc_tta_tour' );
        vc_remove_element( 'vc_tta_accordion' );
        vc_remove_element( 'vc_tta_pageable' );
        vc_remove_element( 'vc_btn' );
        vc_remove_element( 'vc_cta' );
        vc_remove_element( 'vc_round_chart' );
        vc_remove_element( 'vc_line_chart' );
        vc_remove_element( 'vc_basic_grid' );
        vc_remove_element( 'vc_media_grid' );
        vc_remove_element( 'vc_masonry_grid' );
        vc_remove_element( 'vc_masonry_media_grid' );
        // WooCommerce
        vc_remove_element('add_to_cart');
        vc_remove_element('product_categories');
        vc_remove_element('product_attribute');
    }
    add_action( 'vc_before_init', 'fajar_visual_composer_remove_default_shortcodes' );
}
// Remove Default Templates
if ( ! function_exists( 'fajar_visual_composer_remove_default_templates' ) ) {
    function fajar_visual_composer_remove_default_templates( $data ) {
        return array();
    }
    add_filter( 'vc_load_default_templates', 'fajar_visual_composer_remove_default_templates' );
}
// Remove Meta Boxes
if ( ! function_exists( 'fajar_visual_composer_remove_meta_boxes' ) ) {
    function fajar_visual_composer_remove_meta_boxes() {
        if ( is_admin() ) {
            foreach ( get_post_types() as $post_type ) {
                remove_meta_box( 'vc_teaser',  $post_type, 'side' );
            }
        }
    }
    add_action( 'do_meta_boxes', 'fajar_visual_composer_remove_meta_boxes' );
}
// Disable Frontend Editor
if ( function_exists( 'vc_disable_frontend' ) ) {
    vc_disable_frontend();
}
// Map Shortcodes
if ( ! function_exists( 'fajar_visual_composer_map_shortcodes' ) ) {
    function fajar_visual_composer_map_shortcodes() {
        $animations = array(
            'Select' => '',
            'bounce' => 'bounce',
            'bounceIn'     => 'bounceIn',
            'flash'     => 'flash',
            'pulse'     => 'pulse',
            'rubberBand'     => 'rubberBand',
            'shake'     => 'shake',
            'swing'     => 'swing',
            'tada'     => 'tada',
            'wobble'     => 'wobble',
            'jello'     => 'jello',
            'fadeIn'     => 'fadeIn',
            'fadeInDown'     => 'fadeInDown',
            'fadeInDownBig'     => 'fadeInDownBig',
            'fadeInLeft'     => 'fadeInLeft',
            'fadeInLeftBig'     => 'fadeInLeftBig',
            'fadeInRight'     => 'fadeInRight',
            'fadeInRightBig'     => 'fadeInRightBig',
            'fadeInUp'     => 'fadeInUp',
            'fadeInUpBig'     => 'fadeInUpBig',
            'fadeOut'     => 'fadeOut',
            'fadeOutDown'     => 'fadeOutDown',
            'fadeOutDownBig'     => 'fadeOutDownBig',
            'fadeOutLeft'     => 'fadeOutLeft',
            'fadeOutLeftBig'     => 'fadeOutLeftBig',
            'fadeOutRight'     => 'fadeOutRight',
            'fadeOutRightBig'     => 'fadeOutRightBig',
            'fadeOutUp'     => 'fadeOutUp',
            'fadeOutUpBig'     => 'fadeOutUpBig',
            'slideInUp'     => 'slideInUp',
            'slideInDown'     => 'slideInDown',
            'slideInLeft'     => 'slideInLeft',
            'slideInRight'     => 'slideInRight',
            'zoomIn'     => 'zoomIn',
            'zoomInDown'     => 'zoomInDown',
            'zoomInLeft'     => 'zoomInLeft',
            'zoomInRight'     => 'zoomInRight',
            'zoomInUp'     => 'zoomInUp',
        );
        // Container
        vc_map(
            array(
                'base'            => 'container',
                'name'            => esc_html__( 'Container', 'fajar-wp' ),
                'weight'          => 1,
                'class'           => 'container',
                'icon'            => 'fajar_vc_container',
                'category'        => esc_html__( 'Structure', 'fajar-wp' ),
                'description'     => esc_html__( 'Include a container in your content', 'fajar-wp' ),
                'as_parent'       => array( 'only' => 'awesome_feature_lists,list_items,alerts,pricing_tabs,pricing_table,toggles,general_tabs,slides_overlay,creative_process_number,c_latest_works,process_tabs,pop_up_video,portfolio_masonry,plain_partners,blog_posts,feature_box,partner_tabs,thumbnail_slider_thumbs,thumbnail_slides,scroll_btn,career_tabs,history_slider_pagination,history_slides,un_ordered_lists,vc_single_image,portfolio_recent_work,tooltip_icons,creative_services,f_faq,contact_widget,contact_info_boxes,vc_empty_space,vc_separator,vc_text_separator,contact-form-7,call_to_action,fancy_img_slides,tri_services2,rotating_logos,rotating_title,testimonials,skill_bars,plain_title,team_members_two,counters_with_icons,tri_services,vc_column_text,vc_row,woocommerce_cart,woocommerce_checkout,woocommerce_order_tracking,woocommerce_my_account,recent_products,featured_products,product,products,add_to_cart_url,product_page,product_category,sale_products,best_selling_products,top_rated_products'),
                'content_element' => true,
                'js_view'         => 'VcColumnView',
                'params'          => array(
                    array(
                        'param_name'  => 'class',
                        'heading'     => esc_html__( 'Class', 'fajar-wp' ),
                        'description' => esc_html__( '(Optional) Enter a unique class/classes.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )
                )
            )
        );
        // Tri Services
        vc_map(
            array(
                'base'            => 'tri_services',
                'name'            => esc_html__( 'Tri Services', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_services1',
                'category'        => esc_html__( 'Services', 'fajar-wp' ),
                'description'     => esc_html__( 'Add services with small & large heading with text. ', 'fajar-wp' ),
                'params'          => array(
                    // Small Heading
                    array(
                        'param_name'  => 'sm_heading',
                        'heading'     => esc_html__( 'Enter small heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'Small heading above the large heading.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder'      => 'p'
                    ),
                    // Large Heading
                    array(
                        'param_name'  => 'lg_heading',
                        'heading'     => esc_html__( 'Enter large heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'Large heading below then small heading.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder'      => 'h3'
                    ),
                    // Text Description
                    array(
                        'param_name'  => 'txt_desc',
                        'heading'     => esc_html__( 'Enter service description.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter large description about service.', 'fajar-wp' ),
                        'type'        => 'textarea',
                        'holder'      => 'div'
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations,
                        "admin_label"	=> true
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    )

                )
            )
        );
        // Counters With Icons
        vc_map(
            array(
                'base'            => 'counters_with_icons',
                'name'            => esc_html__( 'Counters With Icons', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_counters1',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add counter with icon, number & text. ', 'fajar-wp' ),
                'params'          => array(
                    // Number
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Value', 'fajar-wp' ),
                        'description' => esc_html__( 'Numeric value only', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Enter heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'Heading for the counter.', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        'holder'      => 'h3'
                    ),
                    // Icon
                    array(
                        'param_name'  => 'icon',
                        'heading'     => esc_html__( 'Icon Class', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter icon class, choose from documentation.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Counter Type
                    array(
                        'param_name'  => 'counter_type',
                        'heading'     => esc_html__( 'Counter Type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select counter type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Plain Icon Top White' => 'plain',
                            'Icon Behind BG' => 'icon-behind',
                            'Simple Without Icon' => 'no-icon'
                        ),
                        'admin_label'   => true
                    ),
                    // Icon Position
                    array(
                        'param_name'  => 'icon_position',
                        'heading'     => esc_html__( 'Icon Position', 'fajar-wp' ),
                        'description' => esc_html__( 'Select icon position to display.', 'fajar-wp' ),
                        "dependency" => array(
                            "element" => "counter_type",
                            "value" => "icon-behind"
                        ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Left Bottom' => 'text-left bottom',
                            'Left Top' => 'text-left',
                            'Right Bottom' => 'text-right bottom right',
                            'Right Top' => 'text-right right'
                        ),
                        "admin_label"	=> true
                    ),
                    // Background Color
                    array(
                        'param_name'  => 'bg_color',
                        'heading'     => esc_html__( 'Background Color', 'fajar-wp' ),
                        'description' => esc_html__( 'Select background color.', 'fajar-wp' ),
                        'type'        => 'colorpicker',
                        "dependency" => array(
                            "element" => "counter_type",
                            "value" => "icon-behind"
                        ),
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations,
                        "admin_label"	=> true
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    )

                )
            )
        );
        // Team Members (Type Second)
        vc_map(
            array(
                'base'            => 'team_members_two',
                'name'            => esc_html__( 'Team Members (Type Two)', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_team2',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add team members type two. ', 'fajar-wp' ),
                'params'          => array(
                    // Member Image
                    array(
                        'param_name'  => 'image',
                        'heading'     => esc_html__( 'Member image', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose team member image', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder'    => 'img'
                    ),
                    // Name
                    array(
                        'param_name'  => 'name',
                        'heading'     => esc_html__( 'Enter name.', 'fajar-wp' ),
                        'description' => esc_html__( 'Team member name', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h3'
                    ),
                    // Designation
                    array(
                        'param_name'  => 'designation',
                        'heading'     => esc_html__( 'Enter designation.', 'fajar-wp' ),
                        'description' => esc_html__( 'Team member designation', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder'      => 'p'
                    ),
                    // Member Description
                    array(
                        'param_name'  => 'txt',
                        'heading'     => esc_html__( 'Member info.', 'fajar-wp' ),
                        'description' => esc_html__( 'Write about team member', 'fajar-wp' ),
                        'type'        => 'textarea',
                        'holder'    => 'h4'
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Select team members display style.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Below Social' => 'below',
                            'Inner Social'     => 'inner'
                        ),
                        'admin_label' => true
                    ),
                    // Text Align
                    array(
                        'param_name'  => 'txt_align',
                        'heading'     => esc_html__( 'Text Align', 'fajar-wp' ),
                        'description' => esc_html__( 'Select text alignment.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Center' => 'text-center',
                            'Left' => 'text-left',
                            'Right'     => 'text-right'
                        ),
                        'admin_label' => true
                    ),
                    // Facebook
                    array(
                        'param_name'  => 'facebook',
                        'heading'     => esc_html__( 'Facebook.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Twitter
                    array(
                        'param_name'  => 'twitter',
                        'heading'     => esc_html__( 'Twitter.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Linkedin
                    array(
                        'param_name'  => 'linkedin',
                        'heading'     => esc_html__( 'Linkedin.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Instagram
                    array(
                        'param_name'  => 'instagram',
                        'heading'     => esc_html__( 'Instagram.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Pinterest
                    array(
                        'param_name'  => 'pinterest',
                        'heading'     => esc_html__( 'Pinterest.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )

                )
            )
        );
        // Plain Title
        vc_map(
            array(
                'base'            => 'plain_title',
                'name'            => esc_html__( 'Plain Title', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_title',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add plain title. ', 'fajar-wp' ),
                'params'          => array(
                    // Heading Bold Text
                    array(
                        'param_name'  => 'title_bold_txt',
                        'heading'     => esc_html__( 'Title bold text.', 'fajar-wp' ),
                        'description' => esc_html__( 'This will be in bolder', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h3'
                    ),
                    // Heading Normal Text
                    array(
                        'param_name'  => 'title_normal_txt',
                        'heading'     => esc_html__( 'Title normal text.', 'fajar-wp' ),
                        'description' => esc_html__( 'This will be normal text', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h4'
                    ),
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose heading.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'H1' => 'h1',
                            'H2'     => 'h2',
                            'H3'     => 'h3',
                            'H4'     => 'h4',
                            'H5'     => 'h5',
                            'H6'     => 'h6'
                        ),
                        "admin_label"	=> true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose heading style.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Dark' => 'dark',
                            'Light'     => 'li8',
                            'Double Line'     => 'double'
                        ),
                        "admin_label"	=> true
                    ),
                    // Double Line
                    array(
                        'param_name'  => 'double_line',
                        'heading'     => esc_html__( 'Small Text.', 'fajar-wp' ),
                        'description' => esc_html__( 'Text above main heading.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h4',
                        'dependency' => array(
                            'element' => 'style',
                            'value' =>'double'
                        )
                    ),
                    // Description
                    array(
                        'param_name'  => 'description',
                        'heading'     => esc_html__( 'Description.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input description text here.', 'fajar-wp' ),
                        'type'        => 'textarea',
                        'holder' => 'p',
                        'dependency' => array(
                            'element' => 'style',
                            'value' =>'double'
                        )
                    ),
                    // Text Align
                    array(
                        'param_name'  => 'txt_align',
                        'heading'     => esc_html__( 'Text Align', 'fajar-wp' ),
                        'description' => esc_html__( 'Set text alignment.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Left' => 'text-left',
                            'Center'     => 'text-center'
                        ),
                        "admin_label"	=> true
                    ),
                    // Show Underline
                    array(
                        'param_name'  => 'show_underline',
                        'heading'     => esc_html__( 'Show Underline', 'fajar-wp' ),
                        'description' => esc_html__( 'Show underline.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Hide' => 'hide',
                            'Show'     => 'show'
                        ),
                        "admin_label"	=> true
                    ),
                    // Override Default Size
                    array(
                        'param_name'  => 'override_default_size',
                        'heading'     => esc_html__( 'Override default size.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input numeric value only, pixels.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),

                )
            )
        );
        // Skill Bars
        vc_map(
            array(
                'base'            => 'skill_bars',
                'name'            => esc_html__( 'Skill Bars', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_skills',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add skill bars to content. ', 'fajar-wp' ),
                'params'          => array(
                    // Title
                    array(
                        'param_name'  => 'title',
                        'heading'     => esc_html__( 'Title.', 'fajar-wp' ),
                        'description' => esc_html__( 'Skill bar title', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h3'
                    ),
                    // %age Value
                    array(
                        'param_name'  => 'value',
                        'heading'     => esc_html__( 'Percentage value', 'fajar-wp' ),
                        'description' => esc_html__( 'Skill bar percentage value', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Set skills display style.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Round Big' => 'round',
                            'Small Square'     => 'square'
                        ),
                        "admin_label"	=> true
                    ),

                )
            )
        );
        // Client Testimonials
        vc_map(
            array(
                'base'            => 'testimonials',
                'name'            => esc_html__( 'Client Testimonials', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_testimonials',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add testimonials to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Of Testimonials
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Of Testimonials', 'fajar-wp' ),
                        'description' => esc_html__( 'Only numeric values, default is 3.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Display Order
                    array(
                        'param_name'  => 'order',
                        'heading'     => esc_html__( 'Display Order', 'fajar-wp' ),
                        'description' => esc_html__( 'Set testimonials display order.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Ascending' => 'ASC',
                            'Descending'     => 'DESC'
                        ),
                        "admin_label"	=> true
                    ),
                    // Group Slug
                    array(
                        'param_name'  => 'grp_slug',
                        'heading'     => esc_html__( 'Group Slug', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter group slug or leave empty for all.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Testimonial Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Select testimonial style light or dark.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Light' => 'light',
                            'Dark'     => 'dark',
                            'With Image & BG'     => 'img',
                            'With Circle Image'     => 'circle-img',
                            'With BG & Control Inner'     => 'white'
                        ),
                        "admin_label"	=> true
                    ),
                    // Heading
                    array(
                        'param_name'  => 'test_heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter heading.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h3',
                        'dependency' => array(
                            'element'   => 'style',
                            'value'   => 'white'
                        )
                    ),

                )
            )
        );
        // Rotating Text Title
        vc_map(
            array(
                'base'            => 'rotating_title',
                'name'            => esc_html__( 'Rotating Text Title', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_rotating_text',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add rotating text title with description. ', 'fajar-wp' ),
                'params'          => array(
                    // Text before rotate
                    array(
                        'param_name'  => 'text_before_rotate',
                        'heading'     => esc_html__( 'Text before rotate.', 'fajar-wp' ),
                        'description' => esc_html__( 'This will be the text before rotating part', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        'holder' => 'h4'
                    ),
                    // Rotating text
                    array(
                        'param_name'  => 'rotating_text',
                        'heading'     => esc_html__( 'Rotating text.', 'fajar-wp' ),
                        'description' => esc_html__( 'This will be the rotating part, separate words by single comma.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h4'
                    ),
                    // Text after rotate
                    array(
                        'param_name'  => 'text_after_rotate',
                        'heading'     => esc_html__( 'Text after rotate.', 'fajar-wp' ),
                        'description' => esc_html__( 'This will be the text after rotating part', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        'holder' => 'h4'
                    ),
                    // Text description
                    array(
                        'param_name'  => 'text_desc',
                        'heading'     => esc_html__( 'Text description.', 'fajar-wp' ),
                        'description' => esc_html__( 'You can write any description text, it will display below title.', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        'holder' => 'p'
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Title Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose title style light or dark.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Light' => 'light',
                            'Dark'     => 'dark'
                        ),
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )

                )
            )
        );
        // Rotating Logos
        vc_map( array(
            "name" => esc_html__("Rotating Logos", "fajar-wp"),
            "base" => "rotating_logos",
            'icon'  => 'fajar_vc_rotating_logo',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'rotating_logo' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add rotating logos to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Rotating Logo", "fajar-wp"),
            "base" => "rotating_logo",
            'as_child'       => array( 'only' => 'rotating_logos' ),
            "content_element" => true,
            "params" => array(
                // Logo Image
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Select logo', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload logo to display.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
            )
        ) );
        // Tri Services 2
        vc_map(
            array(
                'base'            => 'tri_services2',
                'name'            => esc_html__( 'Tri Services 2', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_services2',
                'category'        => esc_html__( 'Services', 'fajar-wp' ),
                'description'     => esc_html__( 'Add services with icon & large heading with text. ', 'fajar-wp' ),
                'params'          => array(
                    // Icon Class
                    array(
                        'param_name'  => 'icon',
                        'heading'     => esc_html__( 'Icon Class.', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose icon class from theme documentation.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Large Heading
                    array(
                        'param_name'  => 'lg_heading',
                        'heading'     => esc_html__( 'Enter large heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'Large heading below then small heading.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder'      => 'h3'
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Services Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Select stlye, circle icon or pointer.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Fill Circle, Icon Center' => 'circle',
                            'Empty Circle, Icon Center' => 'circle-empty',
                            'Pointer, Icon Center'     => 'pointer',
                            'Plain, Icon Left'     => 'left',
                            'Plain, Icon Center'     => 'icon-center',
                            'Fill Round, Icon Beside' => 'beside',
                        ),
                        "admin_label"	=> true
                    ),
                    // Icon BG Color
                    array(
                        'param_name'  => 'icon_bg_color',
                        'heading'     => esc_html__( 'Icon Background Color.', 'fajar-wp' ),
                        'description' => esc_html__( 'Need to override default background color for icon.', 'fajar-wp' ),
                        'type'        => 'colorpicker',
                        "dependency" => array(
                            "element" => "style",
                            "value" => "beside"
                        ),
                        "admin_label"	=> true
                    ),
                    // Text Description
                    array(
                        'param_name'  => 'content',
                        'heading'     => esc_html__( 'Enter service description.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter large description about service.', 'fajar-wp' ),
                        'type'        => 'textarea_html',
                        'holder'      => 'div'
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )

                )
            )
        );
        // Fancy Image Slides
        vc_map( array(
            "name" => esc_html__("Fancy Image Slides", "fajar-wp"),
            "base" => "fancy_img_slides",
            'icon'  => 'fajar_vc_fancy_slider',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'fancy_img_slide' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Slider Type
                array(
                    'param_name'  => 'slider_type',
                    'heading'     => esc_html__( 'Slider Type', 'fajar-wp' ),
                    'description' => esc_html__( 'Select image slider type.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select' => '',
                        'Arrows Simple Dark' => 'arrows-simple-dark',
                        'Arrows Fancy'     => 'arrows-fancy',
                        'Bullets Inside'     => 'bullets-inside',
                        'Bullets Below'     => 'bullets'
                    ),
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add image slides to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Slide Image", "fajar-wp"),
            "base" => "fancy_img_slide",
            'as_child'       => array( 'only' => 'fancy_img_slides' ),
            "content_element" => true,
            "params" => array(
                // Slide Image
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Select image', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload slide image to display.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
            )
        ) );
        // Call To Action
        vc_map(
            array(
                'base'            => 'call_to_action',
                'name'            => esc_html__( 'Call To Action', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_call_to_action',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add call to action to your content. ', 'fajar-wp' ),
                'params'          => array(
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'Use strong tag for bold text.', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        'holder' => 'h4'
                    ),
                    // Small Text
                    array(
                        'param_name'  => 'small_txt',
                        'heading'     => esc_html__( 'Text below heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'This text will be displayed under heading.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'p'
                    ),
                    // Button Text
                    array(
                        'param_name'  => 'btn_txt',
                        'heading'     => esc_html__( 'Button Text', 'fajar-wp' ),
                        'description' => esc_html__( 'Input button text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Button Link
                    array(
                        'param_name'  => 'btn_link',
                        'heading'     => esc_html__( 'Button Link', 'fajar-wp' ),
                        'description' => esc_html__( 'A complete URL.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Display Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Set display style.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Light' => 'light',
                            'Dark'     => 'dark'
                        ),
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )

                )
            )
        );
        // Contact Info Box
        vc_map( array(
            "name" => esc_html__("Contact Info Boxes", "fajar-wp"),
            "base" => "contact_info_boxes",
            'icon'  => 'fajar_vc_contact_info',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'contact_info_box' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add contact info boxes to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Contact Info Box", "fajar-wp"),
            "base" => "contact_info_box",
            'as_child'       => array( 'only' => 'contact_info_boxes' ),
            "content_element" => true,
            "params" => array(
                // Info Details
                array(
                    'param_name'  => 'info',
                    'heading'     => esc_html__( 'Contact info.', 'fajar-wp' ),
                    'description' => esc_html__( 'You can write number,email etc.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder' => 'h5'
                ),
                // Icon
                array(
                    'param_name'  => 'icon',
                    'heading'     => esc_html__( 'Icon', 'fajar-wp' ),
                    'description' => esc_html__( 'Select info box icon.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select' => '',
                        'Telephone' => 'icon-telephon-1',
                        'Mobile'     => 'icon-mobile',
                        'Phone'     => 'icon-phone',
                        'Fax'     => 'icon-fax',
                        'Email'     => 'icon-email',
                        'Printer'     => 'icon-printer7',
                        'Envelope'     => 'icon-envelope',
                        'Direction 1'     => 'icon-icons180',
                        'Direction 2'     => 'icon-direction',
                        'Location'     => 'icon-location'
                    ),
                    "admin_label"	=> true
                ),
                // Animations
                array(
                    'param_name'  => 'animations',
                    'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                    'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => $animations
                ),
                // Animation Delay
                array(
                    'param_name'  => 'delay',
                    'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                    'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                    'type'        => 'textfield'
                )
            )
        ) );
        // Contact Widget
        vc_map(
            array(
                'base'            => 'contact_widget',
                'name'            => esc_html__( 'Contact Widget', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_contact_widget',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add contact widget to your content. ', 'fajar-wp' ),
                'params'          => array(
                    // Title
                    array(
                        'param_name'  => 'title',
                        'heading'     => esc_html__( 'Title.', 'fajar-wp' ),
                        'description' => esc_html__( 'Use strong tag for bold.', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        'holder' => 'h5'
                    ),
                    // Phone
                    array(
                        'param_name'  => 'phone',
                        'heading'     => esc_html__( 'Phone.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter phone number.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h5'
                    ),
                    // Email
                    array(
                        'param_name'  => 'email',
                        'heading'     => esc_html__( 'Email.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter email address.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h5'
                    ),
                    // Website
                    array(
                        'param_name'  => 'website',
                        'heading'     => esc_html__( 'Web Address.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter web address.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h5'
                    ),
                    // Button Link
                    array(
                        'param_name'  => 'address',
                        'heading'     => esc_html__( 'Contact address.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter contact address.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder' => 'h5'
                    ),
                    // Facebook
                    array(
                        'param_name'  => 'facebook',
                        'heading'     => esc_html__( 'Facebook.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Twitter
                    array(
                        'param_name'  => 'twitter',
                        'heading'     => esc_html__( 'Twitter.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Google +
                    array(
                        'param_name'  => 'google',
                        'heading'     => esc_html__( 'Google plus.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Linkedin
                    array(
                        'param_name'  => 'linkedin',
                        'heading'     => esc_html__( 'linkedin.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Pinterest
                    array(
                        'param_name'  => 'pinterest',
                        'heading'     => esc_html__( 'Pinterest.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Instagram
                    array(
                        'param_name'  => 'instagram',
                        'heading'     => esc_html__( 'Instagram.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )

                )
            )
        );
        // FAQ
        vc_map(
            array(
                'base'            => 'f_faq',
                'name'            => esc_html__( 'FAQs', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_faq',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add FAQ to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Of FAQ
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Of FAQ', 'fajar-wp' ),
                        'description' => esc_html__( 'Only numeric values, default is 3.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Display Order
                    array(
                        'param_name'  => 'order',
                        'heading'     => esc_html__( 'Display Order', 'fajar-wp' ),
                        'description' => esc_html__( 'Set FAQ display order.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Ascending' => 'ASC',
                            'Descending'     => 'DESC'
                        ),
                        "admin_label"	=> true
                    ),
                    // Group Slug
                    array(
                        'param_name'  => 'grp_slug',
                        'heading'     => esc_html__( 'Group Slug', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter group slug or leave empty for all.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'FAQ Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Select FAQ style paragraph or toggle.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Toggle' => 'toggle',
                            'Paragraph'     => 'paragraph'
                        ),
                        "admin_label"	=> true
                    ),
                )
            )
        );
        // Creative Services
        vc_map(
            array(
                'base'            => 'creative_services',
                'name'            => esc_html__( 'Creative Services', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_services3',
                'category'        => esc_html__( 'Services', 'fajar-wp' ),
                'description'     => esc_html__( 'Add creative services to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Of Services
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Of Services', 'fajar-wp' ),
                        'description' => esc_html__( 'Only numeric values, default is 3.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Display Order
                    array(
                        'param_name'  => 'order',
                        'heading'     => esc_html__( 'Display Order', 'fajar-wp' ),
                        'description' => esc_html__( 'Set Services display order.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Ascending' => 'ASC',
                            'Descending'     => 'DESC'
                        ),
                        "admin_label"	=> true
                    ),
                    // Hide BG
                    array(
                        'param_name'  => 'hide_bg',
                        'heading'     => esc_html__( 'Hide Background Line', 'fajar-wp' ),
                        'description' => esc_html__( 'You can hide background line.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Show' => 'show',
                            'Hide'     => 'hide'
                        ),
                        "admin_label"	=> true
                    ),

                )
            )
        );
        // Icon With Tooltip
        vc_map( array(
            "name" => esc_html__("Tooltip Icons", "fajar-wp"),
            "base" => "tooltip_icons",
            'icon'  => 'fajar_vc_tooltip',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'tooltip_icon' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add tooltip icons to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Tooltip Icon", "fajar-wp"),
            "base" => "tooltip_icon",
            'as_child'       => array( 'only' => 'tooltip_icons' ),
            "content_element" => true,
            "params" => array(
                // Tooltip Text
                array(
                    'param_name'  => 'tooltip_txt',
                    'heading'     => esc_html__( 'Tooltip Text', 'fajar-wp' ),
                    'description' => esc_html__( 'Input tooltip text.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder' => 'h3'
                ),
                // Icon
                array(
                    'param_name'  => 'icon',
                    'heading'     => esc_html__( 'Icon Class', 'fajar-wp' ),
                    'description' => esc_html__( 'Choose icon class from theme documentation.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder' => 'h4'
                ),
                // Data Placement
                array(
                    'param_name'  => 'data_placement',
                    'heading'     => esc_html__( 'Data Placement', 'fajar-wp' ),
                    'description' => esc_html__( 'Set data placement for text.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select' => '',
                        'Top'     => 'top',
                        'Bottom'     => 'bottom',
                        'Left'     => 'left',
                        'Right'     => 'right'
                    ),
                    "admin_label"	=> true
                ),
                // Style
                array(
                    'param_name'  => 'style',
                    'heading'     => esc_html__( 'Icons style', 'fajar-wp' ),
                    'description' => esc_html__( 'Set icon style dark or light.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select' => '',
                        'Light'     => 'li8',
                        'Dark'     => 'drk'
                    ),
                    "admin_label"	=> true
                ),
                // Animations
                array(
                    'param_name'  => 'animations',
                    'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                    'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => $animations
                ),
                // Animation Delay
                array(
                    'param_name'  => 'delay',
                    'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                    'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                    'type'        => 'textfield'
                )
            )
        ) );
        // Portfolio Recent Work
        vc_map(
            array(
                'base'            => 'portfolio_recent_work',
                'name'            => esc_html__( 'Recent Work', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_recent_work',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Add portfolio recent work carousel to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Of Portfolio Item
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Display Number Of Items.', 'fajar-wp' ),
                        'description' => esc_html__( 'You can set visible number of portfolio items, default is 3.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Portfolio Category Slug
                    array(
                        'param_name'  => 'slug',
                        'heading'     => esc_html__( 'Portfolio Category Slug.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input portfolio category slug else all will be shown.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Type
                    array(
                        'param_name'  => 'type',
                        'heading'     => esc_html__( 'Carousel Type', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose carousel type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Info Below' => 'info-below',
                            'Info Top'     => 'info-top'
                        ),
                        "admin_label"	=> true
                    ),
                    // Display Order
                    array(
                        'param_name'  => 'order',
                        'heading'     => esc_html__( 'Display Order', 'fajar-wp' ),
                        'description' => esc_html__( 'Set items display order.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Ascending' => 'ASC',
                            'Descending'     => 'DESC'
                        ),
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    )

                )
            )
        );
        // Awesome Feature List
        vc_map( array(
            "name" => esc_html__("Awesome Feature List", "fajar-wp"),
            "base" => "awesome_feature_lists",
            'icon'  => 'fajar_vc_awesome',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'awesome_feature_list' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add awesome feature list to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("List Item", "fajar-wp"),
            "base" => "awesome_feature_list",
            'as_child'       => array( 'only' => 'awesome_feature_lists' ),
            "content_element" => true,
            "params" => array(
                // Heading
                array(
                    'param_name'  => 'heading',
                    'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                    'description' => esc_html__( 'Input list item heading.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder' => 'h4'
                ),
                // Small Text
                array(
                    'param_name'  => 'text',
                    'heading'     => esc_html__( 'Small Text', 'fajar-wp' ),
                    'description' => esc_html__( 'Input small description.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder' => 'p'
                ),
                // Icon
                array(
                    'param_name'  => 'icon',
                    'heading'     => esc_html__( 'Icon Class', 'fajar-wp' ),
                    'description' => esc_html__( 'Enter Icon Class.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
                // Position
                array(
                    'param_name'  => 'position',
                    'heading'     => esc_html__( 'List Position', 'fajar-wp' ),
                    'description' => esc_html__( 'Select list position.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select' => '',
                        'Left'     => 'text-left',
                        'Right'     => 'text-right'
                    ),
                    "admin_label"	=> true
                ),
            )
        ) );
        // Feature Un-ordered List
        vc_map( array(
            "name" => esc_html__("Feature Un-ordered List", "fajar-wp"),
            "base" => "un_ordered_lists",
            'icon'  => 'fajar_vc_feature_list',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'un_ordered_list' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add feature un-ordered list to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("List Item", "fajar-wp"),
            "base" => "un_ordered_list",
            'as_child'       => array( 'only' => 'un_ordered_lists' ),
            "content_element" => true,
            "params" => array(
                // Text
                array(
                    'param_name'  => 'text',
                    'heading'     => esc_html__( 'List Item Text', 'fajar-wp' ),
                    'description' => esc_html__( 'Input list item text.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder' => 'h4'
                ),
                // Icon
                array(
                    'param_name'  => 'icon',
                    'heading'     => esc_html__( 'List Icon', 'fajar-wp' ),
                    'description' => esc_html__( 'Select list icon.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select' => '',
                        'Angle Right'     => 'icon-angle-right',
                        'Arrow Right'     => 'icon-arrow-right',
                        'Caret Right'     => 'icon-caret-right',
                        'Angle Double Right'     => 'icon-angle-double-right',
                        'Chevron Circle Right'     => 'icon-chevron-circle-right',
                        'Chevron Right'     => 'icon-chevron-right',
                        'Hand O Right'     => 'icon-hand-o-right',
                        'List'     => 'icon-list',
                        'Checklist'     => 'icon-checklist',
                        'Check'     => 'icon-check'
                    ),
                    "admin_label"	=> true
                ),
            )
        ) );
        // History Slider
        vc_map( array(
            "name" => esc_html__("History Slides", "fajar-wp"),
            "base" => "history_slides",
            'icon'  => 'fajar_vc_history_slider',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'history_slide' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add history slider to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("History Slide", "fajar-wp"),
            "base" => "history_slide",
            'as_child'       => array( 'only' => 'history_slides' ),
            "content_element" => true,
            "params" => array(
                // Images
                array(
                    'param_name'  => 'images',
                    'heading'     => esc_html__( 'Upload Images', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload multiple images for slider.', 'fajar-wp' ),
                    'type'        => 'attach_images'
                ),
                // Image Slides Animations
                array(
                    'param_name'  => 'img_animations',
                    'heading'     => esc_html__( 'Image Slides Animation type', 'fajar-wp' ),
                    'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => $animations
                ),
                // Image Animation Delay
                array(
                    'param_name'  => 'img_delay',
                    'heading'     => esc_html__( 'Image Slides Animation delay.', 'fajar-wp' ),
                    'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                    'type'        => 'textfield'
                ),
                // Yearly Value
                array(
                    'param_name'  => 'year',
                    'heading'     => esc_html__( 'Year.', 'fajar-wp' ),
                    'description' => esc_html__( 'Input year value.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder'    => 'h3'
                ),
                // Heading
                array(
                    'param_name'  => 'heading',
                    'heading'     => esc_html__( 'Heading.', 'fajar-wp' ),
                    'description' => esc_html__( 'Use strong tag for bold.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'      => 'h3'
                ),
                // Description
                array(
                    'param_name'  => 'description',
                    'heading'     => esc_html__( 'Description Text.', 'fajar-wp' ),
                    'description' => esc_html__( 'HTML tags are allowed.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'      => 'h4'
                ),
                // Content Animations
                array(
                    'param_name'  => 'content_animations',
                    'heading'     => esc_html__( 'Content Animation type', 'fajar-wp' ),
                    'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => $animations
                ),
                // Content Animation Delay
                array(
                    'param_name'  => 'content_delay',
                    'heading'     => esc_html__( 'Content Animation delay.', 'fajar-wp' ),
                    'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                    'type'        => 'textfield'
                ),
            )
        ) );
        // History Slider Pagination
        vc_map(
            array(
                'base'            => 'history_slider_pagination',
                'name'            => esc_html__( 'History Slider Pagination', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_history_slider_pagination',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use it for history slider.', 'fajar-wp' ),
                'params'          => array(
                    // Years
                    array(
                        'param_name'  => 'years',
                        'heading'     => esc_html__( 'Enter Number Of Years.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter number of years separating by single comma like 2014,2015,2016. Number history slides & years should be the same.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder'    => 'h3'
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),

                )
            )
        );
        // Career Tabs
        vc_map( array(
            "name" => esc_html__("Career Tabs", "fajar-wp"),
            "base" => "career_tabs",
            'icon'  => 'fajar_vc_career_tabs',
            'category'        => esc_html__( 'Tabs', 'fajar-wp' ),
            "content_element" => true,
            'as_parent'       => array( 'only' => 'career_tab' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Tab Headings
                array(
                    'param_name'  => 'tab_headings',
                    'heading'     => esc_html__( 'Tab Headings.', 'fajar-wp' ),
                    'description' => esc_html__( 'Separate tab headings by plus sign + like: Tab1 + Tab2 etc.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add career tabs to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Career Tab", "fajar-wp"),
            "base" => "career_tab",
            'as_child'       => array( 'only' => 'career_tabs' ),
            "content_element" => true,
            "params" => array(
                // Heading
                array(
                    'param_name'  => 'heading',
                    'heading'     => esc_html__( 'Heading.', 'fajar-wp' ),
                    'description' => esc_html__( 'Use strong tag for bold.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'      => 'h3'
                ),
                // Content
                array(
                    'param_name'  => 'content',
                    'heading'     => esc_html__( 'Content.', 'fajar-wp' ),
                    'description' => esc_html__( 'Write what ever you want.', 'fajar-wp' ),
                    'type'        => 'textarea_html',
                    'holder'      => 'p'
                ),
            )
        ) );
        // Scroll Button
        vc_map(
            array(
                'base'            => 'scroll_btn',
                'name'            => esc_html__( 'Scroll Button', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_scroll_button',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert a scroll button into your content.', 'fajar-wp' ),
                'params'          => array(
                    // Button Title
                    array(
                        'param_name'  => 'title',
                        'heading'     => esc_html__( 'Button Title.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter title for button. ', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'holder'    => 'h3'
                    ),
                    // Button Link
                    array(
                        'param_name'  => 'btn_link',
                        'heading'     => esc_html__( 'Button Link', 'fajar-wp' ),
                        'description' => esc_html__( 'Input a button link prefix with a # sign to your element ID like #contact, if contact is ID for your element.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),

                )
            )
        );
        // Slides With Thumbnails
        vc_map( array(
            "name" => esc_html__("Thumbnail Slider", "fajar-wp"),
            "base" => "thumbnail_slides",
            'icon'  => 'fajar_vc_slide_thumbnail',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'thumbnail_slide' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add image slides to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Slide Image", "fajar-wp"),
            "base" => "thumbnail_slide",
            'as_child'       => array( 'only' => 'thumbnail_slides' ),
            "content_element" => true,
            "params" => array(
                // Slide Image
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Select image', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload slide image to display.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
            )
        ) );
        // Thumbnail Slider Thumbs
        vc_map(
            array(
                'base'            => 'thumbnail_slider_thumbs',
                'name'            => esc_html__( 'Thumbnail Slider Thumbs', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_slide_thumbnail_thumbs',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert thumbs for thumbnail slider.', 'fajar-wp' ),
                'params'          => array(
                    // Slide Thumbnails
                    array(
                        'param_name'  => 'images',
                        'heading'     => esc_html__( 'Select Thumbnails', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose thumbnails for thumbnail slider.', 'fajar-wp' ),
                        'type'        => 'attach_images',
                        'holder' => 'h3'
                    ),

                )
            )
        );
        // Partners Tabs
        vc_map( array(
            "name" => esc_html__("Partners Tabs", "fajar-wp"),
            "base" => "partner_tabs",
            'icon'  => 'fajar_vc_career_tabs',
            'category'        => esc_html__( 'Tabs', 'fajar-wp' ),
            "content_element" => true,
            'as_parent'       => array( 'only' => 'partner_tab' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Tab Headings
                array(
                    'param_name'  => 'tab_headings',
                    'heading'     => esc_html__( 'Tab Headings', 'fajar-wp' ),
                    'description' => esc_html__( 'Separate tab headings by plus sign + like: Tab1 + Tab2 etc.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    "holder"	=> 'h4'
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add partners tabs to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Partner Tab", "fajar-wp"),
            "base" => "partner_tab",
            'as_child'       => array( 'only' => 'partner_tabs' ),
            "content_element" => true,
            "params" => array(
                // Partner Image
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Select Image', 'fajar-wp' ),
                    'description' => esc_html__( 'Choose partner image to display.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
                // Description
                array(
                    'param_name'  => 'description',
                    'heading'     => esc_html__( 'Description.', 'fajar-wp' ),
                    'description' => esc_html__( 'Enter partner info/description.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'      => 'h3'
                ),
                // Facebook
                array(
                    'param_name'  => 'facebook',
                    'heading'     => esc_html__( 'Facebook.', 'fajar-wp' ),
                    'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
                // Twitter
                array(
                    'param_name'  => 'twitter',
                    'heading'     => esc_html__( 'Twitter.', 'fajar-wp' ),
                    'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
                // Pinterest
                array(
                    'param_name'  => 'pinterest',
                    'heading'     => esc_html__( 'Pinterest.', 'fajar-wp' ),
                    'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
                // Instagram
                array(
                    'param_name'  => 'instagram',
                    'heading'     => esc_html__( 'Instagram.', 'fajar-wp' ),
                    'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
            )
        ) );
        // Partners Plain
        vc_map( array(
            "name" => esc_html__("Partners Carousel", "fajar-wp"),
            "base" => "plain_partners",
            'icon'  => 'fajar_vc_partners_carousel',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'plain_partner' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Number Of Partners To Display
                array(
                    'param_name'  => 'number',
                    'heading'     => esc_html__( 'Number Partners To Display', 'fajar-wp' ),
                    'description' => esc_html__( 'Choose to display number of partners, numeric value only', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add partners carousels to your content.', 'fajar-wp' ),
        ) );
        vc_map(
            array(
                "name" => esc_html__("Partner", "fajar-wp"),
                "base" => "plain_partner",
                'as_child'       => array( 'only' => 'plain_partners' ),
                "content_element" => true,
                'params'          => array(
                    // Partner Image
                    array(
                        'param_name'  => 'image',
                        'heading'     => esc_html__( 'Select Image', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose partner image to display.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),
                    // Name
                    array(
                        'param_name'  => 'name',
                        'heading'     => esc_html__( 'Name.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input partner name.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h3'
                    ),
                    // Designation
                    array(
                        'param_name'  => 'designation',
                        'heading'     => esc_html__( 'Designation.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input partner designation.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h4'
                    ),
                    // Facebook
                    array(
                        'param_name'  => 'facebook',
                        'heading'     => esc_html__( 'Facebook.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Twitter
                    array(
                        'param_name'  => 'twitter',
                        'heading'     => esc_html__( 'Twitter.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Pinterest
                    array(
                        'param_name'  => 'pinterest',
                        'heading'     => esc_html__( 'Pinterest.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Instagram
                    array(
                        'param_name'  => 'instagram',
                        'heading'     => esc_html__( 'Instagram.', 'fajar-wp' ),
                        'description' => esc_html__( 'Leave empty if not required.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations,
                        "admin_label"	=> true
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    )

                )
            )
        );
        // Feature Boxes
        vc_map(
            array(
                'base'            => 'feature_box',
                'name'            => esc_html__( 'Feature Box', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_feature_boxes',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert feature box to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h3'
                    ),
                    // Description
                    array(
                        'param_name'  => 'description',
                        'heading'     => esc_html__( 'Description.', 'fajar-wp' ),
                        'description' => esc_html__( 'Input description text.', 'fajar-wp' ),
                        'type'        => 'textarea',
                        "holder"	=> 'p'
                    ),
                    // Icon
                    array(
                        'param_name'  => 'icon',
                        'heading'     => esc_html__( 'Icon.', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose icon from theme documentation.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Icon Color
                    array(
                        'param_name'  => 'icon_color',
                        'heading'     => esc_html__( 'Icon Background Color.', 'fajar-wp' ),
                        'description' => esc_html__( 'Need to override default background color for icon.', 'fajar-wp' ),
                        'type'        => 'colorpicker',
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations,
                        "admin_label"	=> true
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    )

                )
            )
        );
        // Blog Posts
        vc_map(
            array(
                'base'            => 'blog_posts',
                'name'            => esc_html__( 'Blog Posts', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_blog',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert blog posts to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Of Posts
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Of Posts', 'fajar-wp' ),
                        'description' => esc_html__( 'Only numeric values, default is 3.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Display Order
                    array(
                        'param_name'  => 'order',
                        'heading'     => esc_html__( 'Display Order', 'fajar-wp' ),
                        'description' => esc_html__( 'Set posts display order.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Ascending' => 'ASC',
                            'Descending'     => 'DESC'
                        ),
                        "admin_label"	=> true
                    ),
                    // Category Slug
                    array(
                        'param_name'  => 'cat_slug',
                        'heading'     => esc_html__( 'Category Slug', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter category slug or leave empty for all.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Display Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Set display style.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Image View' => 'img',
                            'Accordion View'     => 'accordion',
                            'Carousel View'     => 'carousel'
                        ),
                        "admin_label"	=> true
                    ),

                )
            )
        );
        // Portfolio
        vc_map(
            array(
                'base'            => 'portfolio_masonry',
                'name'            => esc_html__( 'Portfolio', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_porfolio',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert portfolio in your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Of Portfolio Items
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Of Items.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter number of items to display.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'admin_label'    => true
                    ),
                    // Portfolio Category Slug
                    array(
                        'param_name'  => 'slug',
                        'heading'     => esc_html__( 'Category Slug.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter category slug else all portfolio items will displayed.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        'admin_label'    => true
                    ),
                    // Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Select portfolio items display style.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Masonry' => 'masonry',
                            'Grid With Popup'     => 'grid',
                            'Grid Plain'     => 'grid-plain'
                        ),
                        'admin_label' => true
                    ),
                    // Display Order
                    array(
                        'param_name'  => 'order',
                        'heading'     => esc_html__( 'Display Order', 'fajar-wp' ),
                        'description' => esc_html__( 'Select portfolio items display order.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select' => '',
                            'Ascending' => 'ASC',
                            'Descending'     => 'DESC'
                        ),
                        'admin_label' => true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations
                    ),
                    // Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield'
                    ),

                )
            )
        );
        // Popup Video Button
        vc_map(
            array(
                'base'            => 'pop_up_video',
                'name'            => esc_html__( 'Popup Video Button', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_popup_video',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to popup video button to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Video Link
                    array(
                        'param_name'  => 'video',
                        'heading'     => esc_html__( 'Video Link', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter vimeo video URL.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Button Text
                    array(
                        'param_name'  => 'text',
                        'heading'     => esc_html__( 'Button Text', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter button text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Button Text Color
                    array(
                        'param_name'  => 'text_color',
                        'heading'     => esc_html__( 'Button Text Color', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter button text color.', 'fajar-wp' ),
                        'type'        => 'colorpicker',
                        "admin_label"	=> true
                    ),
                    // Need To Override Button Image
                    array(
                        'param_name'  => 'image',
                        'heading'     => esc_html__( 'Button Image', 'fajar-wp' ),
                        'description' => esc_html__( 'Need to override button image.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),

                )
            )
        );
        // Process Tabs
        vc_map( array(
            "name" => esc_html__("Process Tabs", "fajar-wp"),
            "base" => "process_tabs",
            'icon'  => 'fajar_vc_career_tabs',
            'category'        => esc_html__( 'Tabs', 'fajar-wp' ),
            "content_element" => true,
            'as_parent'       => array( 'only' => 'process_tab' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Tab Headings
                array(
                    'param_name'  => 'tab_headings',
                    'heading'     => esc_html__( 'Tab Headings.', 'fajar-wp' ),
                    'description' => esc_html__( 'Separate tab headings by double plus sign ++ like: <code> Tab 1 ++  Tab2</code> etc.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    "holder"	=> 'h4'
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add process tabs to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Process Tab", "fajar-wp"),
            "base" => "process_tab",
            'as_child'       => array( 'only' => 'process_tabs' ),
            "content_element" => true,
            "params" => array(
                // Heading
                array(
                    'param_name'  => 'heading',
                    'heading'     => esc_html__( 'Heading.', 'fajar-wp' ),
                    'description' => esc_html__( 'Use strong tag for bold.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'      => 'h3'
                ),
                // Icon
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Icon Image', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload icon image.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
                // Content
                array(
                    'param_name'  => 'content',
                    'heading'     => esc_html__( 'Content.', 'fajar-wp' ),
                    'description' => esc_html__( 'Write what ever you want.', 'fajar-wp' ),
                    'type'        => 'textarea_html',
                    'holder'      => 'p'
                ),
            )
        ) );
        // Custom Latest Work
        vc_map( array(
            "name" => esc_html__("Custom Latest Work Carousel", "fajar-wp"),
            "base" => "c_latest_works",
            'icon'  => 'fajar_vc_partners_carousel',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'c_latest_work' ),
            "show_settings_on_create" => false,
            "params" => array(),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add custom latest work carousel to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Latest Work Item", "fajar-wp"),
            "base" => "c_latest_work",
            'as_child'       => array( 'only' => 'c_latest_works' ),
            "content_element" => true,
            "params" => array(
                // Image
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Image.', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload left side image.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
                // Title
                array(
                    'param_name'  => 'title',
                    'heading'     => esc_html__( 'Title', 'fajar-wp' ),
                    'description' => esc_html__( 'Input title text.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'holder'    => 'h3'
                ),
                // Description
                array(
                    'param_name'  => 'description',
                    'heading'     => esc_html__( 'Description.', 'fajar-wp' ),
                    'description' => esc_html__( 'Input description of your work.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'    => 'p'
                ),
                // Date
                array(
                    'param_name'  => 'date',
                    'heading'     => esc_html__( 'Date', 'fajar-wp' ),
                    'description' => esc_html__( 'Input date.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'admin_label'    => true
                ),
                // Category
                array(
                    'param_name'  => 'category',
                    'heading'     => esc_html__( 'Category', 'fajar-wp' ),
                    'description' => esc_html__( 'Input category.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'admin_label'    => true
                ),
                // Hide Social Share
                array(
                    'param_name'  => 'social_share',
                    'heading'     => esc_html__( 'Hide Social Share', 'fajar-wp' ),
                    'description' => esc_html__( 'Hide social share.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'No'     => 'no',
                        'Yes'     => 'yes'
                    ),
                    "admin_label"	=> true
                ),
                // Button Text
                array(
                    'param_name'  => 'btn_txt',
                    'heading'     => esc_html__( 'Button Text', 'fajar-wp' ),
                    'description' => esc_html__( 'Input button text.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'admin_label'    => true
                ),
                // Button Link
                array(
                    'param_name'  => 'btn_link',
                    'heading'     => esc_html__( 'Button Link', 'fajar-wp' ),
                    'description' => esc_html__( 'Input button link.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    'admin_label'    => true
                ),
            )
        ) );
        // Four Image Process
        vc_map(
            array(
                'base'            => 'four_image_process',
                'name'            => esc_html__( 'Four Image Process', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_img_process',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert four image process to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Image 1
                    array(
                        'param_name'  => 'image1',
                        'heading'     => esc_html__( 'First Image', 'fajar-wp' ),
                        'description' => esc_html__( 'Upload your image.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),
                    // Heading 1
                    array(
                        'param_name'  => 'heading1',
                        'heading'     => esc_html__( 'Heading 1', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Image 2
                    array(
                        'param_name'  => 'image2',
                        'heading'     => esc_html__( 'Second Image', 'fajar-wp' ),
                        'description' => esc_html__( 'Upload your image.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),
                    // Heading 2
                    array(
                        'param_name'  => 'heading2',
                        'heading'     => esc_html__( 'Heading 2', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Image 3
                    array(
                        'param_name'  => 'image3',
                        'heading'     => esc_html__( 'Third Image', 'fajar-wp' ),
                        'description' => esc_html__( 'Upload your image.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),
                    // Heading 3
                    array(
                        'param_name'  => 'heading3',
                        'heading'     => esc_html__( 'Heading 3', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Image 4
                    array(
                        'param_name'  => 'image4',
                        'heading'     => esc_html__( 'Fourth Image', 'fajar-wp' ),
                        'description' => esc_html__( 'Upload your image.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),
                    // Heading 4
                    array(
                        'param_name'  => 'heading4',
                        'heading'     => esc_html__( 'Heading 4', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),


                )
            )
        );
        // Creative Process Number
        vc_map(
            array(
                'base'            => 'creative_process_number',
                'name'            => esc_html__( 'Creative Process Number', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_creative_numbers',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert creative process number to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Number Value
                    array(
                        'param_name'  => 'number',
                        'heading'     => esc_html__( 'Number Value', 'fajar-wp' ),
                        'description' => esc_html__( 'Input number value.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h3'
                    ),
                    // Description
                    array(
                        'param_name'  => 'description',
                        'heading'     => esc_html__( 'Description', 'fajar-wp' ),
                        'description' => esc_html__( 'Input description text.', 'fajar-wp' ),
                        'type'        => 'textarea',
                        "holder"	=> 'p'
                    ),


                )
            )
        );
        // Slider With Text Overlay
        vc_map( array(
            "name" => esc_html__("Slider With Text Overlay", "fajar-wp"),
            "base" => "slides_overlay",
            'icon'  => 'fajar_vc_slider_overlay',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'slide_overlay' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Small Caption
                array(
                    'param_name'  => 'caption',
                    'heading'     => esc_html__( 'Caption', 'fajar-wp' ),
                    'description' => esc_html__( 'Input small caption text.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
                // Heading
                array(
                    'param_name'  => 'heading',
                    'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                    'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add image slides with overlay text to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("Slide Image", "fajar-wp"),
            "base" => "slide_overlay",
            'as_child'       => array( 'only' => 'slides_overlay' ),
            "content_element" => true,
            "params" => array(
                // Slide Image
                array(
                    'param_name'  => 'image',
                    'heading'     => esc_html__( 'Select image', 'fajar-wp' ),
                    'description' => esc_html__( 'Upload slide image to display.', 'fajar-wp' ),
                    'type'        => 'attach_image',
                    'holder' => 'img'
                ),
            )
        ) );
        // Services Blocks
        vc_map(
            array(
                'base'            => 'services_block',
                'name'            => esc_html__( 'Services Block', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_services4',
                'category'        => esc_html__( 'Services', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert services block to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Image
                    array(
                        'param_name'  => 'image',
                        'heading'     => esc_html__( 'Select image', 'fajar-wp' ),
                        'description' => esc_html__( 'Upload image to display.', 'fajar-wp' ),
                        'type'        => 'attach_image',
                        'holder' => 'img'
                    ),
                    // Image Position
                    array(
                        'param_name'  => 'img_position',
                        'heading'     => esc_html__( 'Image Position', 'fajar-wp' ),
                        'description' => esc_html__( 'Set your image position left or right.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Left'     => 'left',
                            'Right'     => 'right'
                        ),
                        "admin_label"	=> true
                    ),
                    // Icon
                    array(
                        'param_name'  => 'icon',
                        'heading'     => esc_html__( 'Icon Class', 'fajar-wp' ),
                        'description' => esc_html__( 'Copy icon class from theme documentation.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        "holder"	=> 'h4'
                    ),
                    // Description
                    array(
                        'param_name'  => 'description',
                        'heading'     => esc_html__( 'Description', 'fajar-wp' ),
                        'description' => esc_html__( 'Input description text.', 'fajar-wp' ),
                        'type'        => 'textarea',
                        "holder"	=> 'p'
                    ),
                    // Button Text
                    array(
                        'param_name'  => 'btn_txt',
                        'heading'     => esc_html__( 'Button Text', 'fajar-wp' ),
                        'description' => esc_html__( 'Input button text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Button Link
                    array(
                        'param_name'  => 'btn_link',
                        'heading'     => esc_html__( 'Button Link', 'fajar-wp' ),
                        'description' => esc_html__( 'Input button link.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),
                    // Background Color
                    array(
                        'param_name'  => 'color',
                        'heading'     => esc_html__( 'Background Color.', 'fajar-wp' ),
                        'description' => esc_html__( 'You can override background color if required.', 'fajar-wp' ),
                        'type'        => 'colorpicker',
                        "admin_label"	=> true
                    ),


                )
            )
        );
        // General Tabs
        vc_map( array(
            "name" => esc_html__("General Tabs", "fajar-wp"),
            "base" => "general_tabs",
            'icon'  => 'fajar_vc_career_tabs',
            'category'        => esc_html__( 'Tabs', 'fajar-wp' ),
            "content_element" => true,
            'as_parent'       => array( 'only' => 'general_tab' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Tab Headings
                array(
                    'param_name'  => 'tab_headings',
                    'heading'     => esc_html__( 'Tab Headings.', 'fajar-wp' ),
                    'description' => esc_html__( 'Separate tab headings by plus sign + like: Tab1 + Tab2 etc.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
                // Tab Positions
                array(
                    'param_name'  => 'tabs_position',
                    'heading'     => esc_html__( 'Tabs Position', 'fajar-wp' ),
                    'description' => esc_html__( 'Set your tab position.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Top Left'     => 'left',
                        'Top Right'     => 'right',
                        'Side left'     => 'side'
                    ),
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add general tabs to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("General Tab", "fajar-wp"),
            "base" => "general_tab",
            'as_child'       => array( 'only' => 'general_tabs' ),
            "content_element" => true,
            "params" => array(
                // Content
                array(
                    'param_name'  => 'content',
                    'heading'     => esc_html__( 'Tab Content.', 'fajar-wp' ),
                    'description' => esc_html__( 'Write what ever you want.', 'fajar-wp' ),
                    'type'        => 'textarea_html',
                    'holder'      => 'p'
                ),
            )
        ) );
        // Toggles
        vc_map(
            array(
                'base'            => 'toggles',
                'name'            => esc_html__( 'Toggles', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_toggle',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to insert toggles to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h4'
                    ),
                    // Description
                    array(
                        'param_name'  => 'description',
                        'heading'     => esc_html__( 'Description', 'fajar-wp' ),
                        'description' => esc_html__( 'Input description text.', 'fajar-wp' ),
                        'type'        => 'textarea',
                        "holder"	=> 'p'
                    ),
                    // Toggle Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Toggle Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose toggle stlye to display.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select'     => '',
                            'Plain'     => 'plain',
                            'With Background'     => 'bg'
                        ),
                        "admin_label"	=> true
                    ),
                    // Active Class
                    array(
                        'param_name'  => 'class',
                        'heading'     => esc_html__( 'Active Class', 'fajar-wp' ),
                        'description' => esc_html__( 'Input "active" if you need to make it active.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),


                )
            )
        );
        // Pricing Tables
        vc_map(
            array(
                'base'            => 'pricing_table',
                'name'            => esc_html__( 'Pricing Table', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_pricing_table',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to pricing table to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "holder"	=> 'h3'
                    ),
                    // Currency
                    array(
                        'param_name'  => 'currency_symbol',
                        'heading'     => esc_html__( 'Currency Symbol', 'fajar-wp' ),
                        'description' => esc_html__( 'Input currency symbol.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"   => true
                    ),
                    // Price
                    array(
                        'param_name'  => 'price',
                        'heading'     => esc_html__( 'Price', 'fajar-wp' ),
                        'description' => esc_html__( 'Input price value.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"   => true
                    ),
                    // Period Text
                    array(
                        'param_name'  => 'period_text',
                        'heading'     => esc_html__( 'Period Text', 'fajar-wp' ),
                        'description' => esc_html__( 'Input period text value.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"   => true
                    ),
                    // Description
                    array(
                        'param_name'  => 'content',
                        'heading'     => esc_html__( 'Description', 'fajar-wp' ),
                        'description' => esc_html__( 'Input description text.', 'fajar-wp' ),
                        'type'        => 'textarea_html',
                        "holder"	=> 'p'
                    ),
                    // Button Text
                    array(
                        'param_name'  => 'button_text',
                        'heading'     => esc_html__( 'Button Text', 'fajar-wp' ),
                        'description' => esc_html__( 'Input button text value.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"   => true
                    ),
                    // Button Link
                    array(
                        'param_name'  => 'button_link',
                        'heading'     => esc_html__( 'Button Link', 'fajar-wp' ),
                        'description' => esc_html__( 'Input button link value.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"   => true
                    ),
                    // Table Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Table Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose table stlye to display.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select'     => '',
                            'Normal'     => 'normal',
                            'Active'     => 'active'
                        ),
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations,
                        "admin_label"	=> true
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    )
                )
            )
        );
        // Pricing Tabs
        vc_map( array(
            "name" => esc_html__("Pricing Tabs", "fajar-wp"),
            "base" => "pricing_tabs",
            'icon'  => 'fajar_vc_career_tabs',
            'category'        => esc_html__( 'Tabs', 'fajar-wp' ),
            "content_element" => true,
            'as_parent'       => array( 'only' => 'pricing_table,vc_row' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Tabs
                array(
                    'param_name'  => 'tabs',
                    'heading'     => esc_html__( 'Tab Headings', 'fajar-wp' ),
                    'description' => esc_html__( 'Separate tabs by plus sign + like, Tab1 + Tab2 etc.', 'fajar-wp' ),
                    'type'        => 'textfield',
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add pricing tabs to your content.', 'fajar-wp' ),
        ) );
        // Alerts
        vc_map(
            array(
                'base'            => 'alerts',
                'name'            => esc_html__( 'Alerts Box', 'fajar-wp' ),
                'class'           => '',
                'icon'            => 'fajar_vc_alerts',
                'category'        => esc_html__( 'Content', 'fajar-wp' ),
                'description'     => esc_html__( 'Use to alert box to your content.', 'fajar-wp' ),
                'params'          => array(
                    // Heading
                    array(
                        'param_name'  => 'heading',
                        'heading'     => esc_html__( 'Heading', 'fajar-wp' ),
                        'description' => esc_html__( 'Input heading text.', 'fajar-wp' ),
                        'type'        => 'textarea_raw_html',
                        "holder"	=> 'h4'
                    ),
                    // Alert Style
                    array(
                        'param_name'  => 'style',
                        'heading'     => esc_html__( 'Alert Style', 'fajar-wp' ),
                        'description' => esc_html__( 'Choose alert style to display.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => array(
                            'Select'     => '',
                            'Success'     => 'success',
                            'Warning'     => 'warning',
                            'Danger'     => 'danger',
                            'Info'     => 'info'
                        ),
                        "admin_label"	=> true
                    ),
                    // Animations
                    array(
                        'param_name'  => 'animations',
                        'heading'     => esc_html__( 'Animation type', 'fajar-wp' ),
                        'description' => esc_html__( 'Select animation type.', 'fajar-wp' ),
                        'type'        => 'dropdown',
                        'value'       => $animations,
                        "admin_label"	=> true
                    ),
                    // Animation Delay
                    array(
                        'param_name'  => 'delay',
                        'heading'     => esc_html__( 'Animation delay.', 'fajar-wp' ),
                        'description' => esc_html__( 'Enter numeric value only in milli-seconds.', 'fajar-wp' ),
                        'type'        => 'textfield',
                        "admin_label"	=> true
                    ),


                )
            )
        );
        // List Items
        vc_map( array(
            "name" => esc_html__("List Items", "fajar-wp"),
            "base" => "list_items",
            'icon'  => 'fajar_vc_list_items',
            "content_element" => true,
            'as_parent'       => array( 'only' => 'list_item' ),
            "show_settings_on_create" => true,
            "params" => array(
                // Style
                array(
                    'param_name'  => 'style',
                    'heading'     => esc_html__( 'List Style', 'fajar-wp' ),
                    'description' => esc_html__( 'Choose list style.', 'fajar-wp' ),
                    'type'        => 'dropdown',
                    'value'       => array(
                        'Select'     => '',
                        'Ordered'     => 'ordered',
                        'Un Ordered'     => 'un-ordered',
                        'Defination'     => 'defination',
                        'Tick'     => 'tick',
                        'Bulb'     => 'bulb',
                        'Star'     => 'star',
                        'Blue Circle'     => 'blue-circle'
                    ),
                    "admin_label"	=> true
                ),
            ),
            "js_view" => 'VcColumnView',
            'description'     => esc_html__( 'Add item lists to your content.', 'fajar-wp' ),
        ) );
        vc_map( array(
            "name" => esc_html__("List Item", "fajar-wp"),
            "base" => "list_item",
            'as_child'       => array( 'only' => 'list_items' ),
            "content_element" => true,
            "params" => array(
                // Text
                array(
                    'param_name'  => 'text',
                    'heading'     => esc_html__( 'Content.', 'fajar-wp' ),
                    'description' => esc_html__( 'Write what ever you want.', 'fajar-wp' ),
                    'type'        => 'textarea_raw_html',
                    'holder'      => 'p'
                ),
            )
        ) );




    }

    add_action( 'vc_before_init', 'fajar_visual_composer_map_shortcodes' );
    // Extend container class (parents).
	if(class_exists('WPBakeryShortCodesContainer')){
		class WPBakeryShortCode_Container extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Rotating_logos extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Fancy_img_slides extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Contact_info_boxes extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Tooltip_icons extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Un_ordered_lists extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_History_slides extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Career_tabs extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Thumbnail_slides extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Partner_tabs extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Plain_partners extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Process_tabs extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_C_latest_works extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Slides_overlay extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_General_tabs extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Pricing_tabs extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_List_items extends WPBakeryShortCodesContainer { }
		class WPBakeryShortCode_Awesome_feature_lists extends WPBakeryShortCodesContainer { }
	}
    // Extend shortcode class (children).
	if(class_exists('WPBakeryShortCode')){
		class WPBakeryShortCode_Tri_services extends WPBakeryShortCode { }
		class WPBakeryShortCode_Counters_with_icons extends WPBakeryShortCode { }
		class WPBakeryShortCode_Team_members_two extends WPBakeryShortCode { }
		class WPBakeryShortCode_Plain_title extends WPBakeryShortCode { }
		class WPBakeryShortCode_Skill_bars extends WPBakeryShortCode { }
		class WPBakeryShortCode_Testimonials extends WPBakeryShortCode { }
		class WPBakeryShortCode_Rotating_title extends WPBakeryShortCode { }
		class WPBakeryShortCode_Rotating_logo extends WPBakeryShortCode { }
		class WPBakeryShortCode_Tri_services2 extends WPBakeryShortCode { }
		class WPBakeryShortCode_Fancy_img_slide extends WPBakeryShortCode { }
		class WPBakeryShortCode_Contact_info_box extends WPBakeryShortCode { }
		class WPBakeryShortCode_Contact_widget extends WPBakeryShortCode { }
		class WPBakeryShortCode_F_faq extends WPBakeryShortCode { }
		class WPBakeryShortCode_Creative_services extends WPBakeryShortCode { }
		class WPBakeryShortCode_Tooltip_icon extends WPBakeryShortCode { }
		class WPBakeryShortCode_Portfolio_recent_work extends WPBakeryShortCode { }
		class WPBakeryShortCode_Un_ordered_list extends WPBakeryShortCode { }
		class WPBakeryShortCode_History_slide extends WPBakeryShortCode { }
		class WPBakeryShortCode_History_slider_pagination extends WPBakeryShortCode { }
		class WPBakeryShortCode_Career_tab extends WPBakeryShortCode { }
		class WPBakeryShortCode_Scroll_btn extends WPBakeryShortCode { }
		class WPBakeryShortCode_Thumbnail_slide extends WPBakeryShortCode { }
		class WPBakeryShortCode_Thumbnail_slider_thumbs extends WPBakeryShortCode { }
		class WPBakeryShortCode_Partner_tab extends WPBakeryShortCode { }
		class WPBakeryShortCode_Feature_box extends WPBakeryShortCode { }
		class WPBakeryShortCode_Blog_posts extends WPBakeryShortCode { }
		class WPBakeryShortCode_Plain_partner extends WPBakeryShortCode { }
		class WPBakeryShortCode_Portfolio_masonry extends WPBakeryShortCode { }
		class WPBakeryShortCode_Pop_up_video extends WPBakeryShortCode { }
		class WPBakeryShortCode_Process_tab extends WPBakeryShortCode { }
		class WPBakeryShortCode_C_latest_work extends WPBakeryShortCode { }
		class WPBakeryShortCode_Four_image_process extends WPBakeryShortCode { }
		class WPBakeryShortCode_Creative_process_number extends WPBakeryShortCode { }
		class WPBakeryShortCode_Slide_overlay extends WPBakeryShortCode { }
		class WPBakeryShortCode_Services_block extends WPBakeryShortCode { }
		class WPBakeryShortCode_General_tab extends WPBakeryShortCode { }
		class WPBakeryShortCode_Toggles extends WPBakeryShortCode { }
		class WPBakeryShortCode_Pricing_table extends WPBakeryShortCode { }
		class WPBakeryShortCode_Alerts extends WPBakeryShortCode { }
		class WPBakeryShortCode_List_item extends WPBakeryShortCode { }
		class WPBakeryShortCode_Awesome_feature_list extends WPBakeryShortCode { }
	}
}

// Update Existing Elements
if ( ! function_exists( 'fajar_visual_composer_update_existing_shortcodes' ) ) {

    function fajar_visual_composer_update_existing_shortcodes() {
    }
    add_action( 'admin_init', 'fajar_visual_composer_update_existing_shortcodes' );
}
// Incremental ID Counter for Templates
if ( ! function_exists( 'fajar_visual_composer_templates_id_increment' ) ) {
    function fajar_visual_composer_templates_id_increment() {
        static $count = 0; $count++;
        return $count;
    }
}