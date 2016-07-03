<?php // Creating Recent Post Widget
class recent_posts_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
// Base ID of your widget
            'recent_posts_widget',
// Widget name will appear in UI
            esc_html__('Fajar WP Recent Posts', 'fajar-wp'),
// Widget description
            array( 'description' => esc_html__( 'Use this widget for recent posts.', 'fajar-wp' ), )
        );
    }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $number_posts = apply_filters( 'number_posts', $instance['number_posts'] );
// before and after widget arguments are defined by themes
        echo ''.$args['before_widget'];
        if ( ! empty( $title ) )
            echo ''.$args['before_title'] . $title . $args['after_title'];
// This is where you run the code and display the output
        if(!empty ($number_posts))
            $argo = array(
                'post_type' => 'post',
                'posts_per_page'    => $number_posts,
                'order' => 'DESC',
                'post_status' => 'publish'
            );
        $query = new WP_Query( $argo ); ?>
        <ul class="list-arrow list-unstyled">
            <?php
            $rp_count = 50;
            while($query->have_posts()): $query->the_post();
                $post_animation = get_field('choose_post_animation'); ?>
                <li class="animations-on <?php echo esc_attr($post_animation); ?>" data-delay="<?php echo esc_attr($rp_count); ?>">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </li>
            <?php $rp_count = $rp_count + 50;
            endwhile;
            wp_reset_postdata(); ?>
        </ul>
        <?php
        echo ''.$args['after_widget'];
    }
// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = "Recent Posts";
        }
        if ( isset( $instance[ 'number_posts' ] ) ) {
            $number_posts = $instance[ 'number_posts' ];
        } else {
            $number_posts = 5;
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'title' ); ?>" name="<?php echo ''.$this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'number_posts' ); ?>"><?php esc_html_e( 'Number Of Posts:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'number_posts' ); ?>" name="<?php echo ''.$this->get_field_name( 'number_posts' ); ?>" type="number" value="<?php echo esc_attr( $number_posts ); ?>" />
        </p>
    <?php
    }
// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['number_posts'] = ( ! empty( $new_instance['number_posts'] ) ) ? strip_tags( $new_instance['number_posts'] ) : '';
        return $instance;
    }
} // Class recent_posts_widget ends here
// Register and load the widget
function rp_load_widget() {
    register_widget( 'recent_posts_widget' );
}
add_action( 'widgets_init', 'rp_load_widget' );

// Creating Categories Widget
class fajar_categories_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
// Base ID of your widget
            'fajar_categories_widget',
// Widget name will appear in UI
            esc_html__('Fajar WP Categories', 'fajar-wp'),
// Widget description
            array( 'description' => esc_html__( 'Use this widget for post categories.', 'fajar-wp' ), )
        );
    }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
// before and after widget arguments are defined by themes
        echo ''.$args['before_widget'];
        if ( ! empty( $title ) )
            echo ''.$args['before_title'] . $title . $args['after_title'];
// This is where you run the code and display the output
        $categories = get_terms( 'category', array(
            'orderby'    => 'title',
            'hide_empty' => 1
        ) );
        if(count($categories) > 0){ ?>
            <ul class="list-arrow list-unstyled">
                <?php $rc_count = 50;
                foreach($categories as $cat){ ?>
                    <li class="animations-on fadeInRight" data-delay="<?php echo esc_attr($rc_count); ?>">
                        <a href="<?php echo esc_url(home_url('/')).'?cat='.$cat->term_id; ?>">
                            <?php echo esc_attr($cat->name); ?>
                            (<?php echo esc_attr($cat->count); ?>)
                        </a>
                    </li>
                <?php $rc_count = $rc_count + 50;
                } ?>
            </ul>
        <?php }
        echo ''.$args['after_widget'];
    }
// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = "Categories";
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'title' ); ?>" name="<?php echo ''.$this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
    <?php
    }
// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        return $instance;
    }
} // Class fajar_categories_widget ends here
// Register and load the widget
function fc_load_widget() {
    register_widget( 'fajar_categories_widget' );
}
add_action( 'widgets_init', 'fc_load_widget' );
// Creating Tweets Widget
class tweets_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
// Base ID of your widget
            'tweets_widget',
// Widget name will appear in UI
            esc_html__('Fajar WP Tweets', 'fajar-wp'),
// Widget description
            array( 'description' => esc_html__( 'Use this widget for twitter tweets, footer recommended.', 'fajar-wp' ), )
        );
    }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $style = apply_filters( 'widget_title', $instance['style'] );
// before and after widget arguments are defined by themes
        echo ''.$args['before_widget'];
        if ( ! empty( $title ) )
            echo ''.$args['before_title'] . $title . $args['after_title'];
        if($style == 'Large'){
            $class = '';
            $col1 = 'col-sm-2';
            $col2 = 'col-sm-10';
        } else {
            $class = 'small';
            $col1 = 'col-sm-1';
            $col2 = 'col-sm-11';
        } ?>
        <div class="tweets <?php echo esc_attr($class); ?>">
            <i class="icon-twitter-1 animations-on fadeInLeft <?php echo esc_attr($col1); ?>"></i>
            <div id="carousel-example-generic" class="carousel slide <?php echo esc_attr($col2); ?>" data-ride="carousel">
                <div class="carousel-inner tweets-tweet" role="listbox"></div>
            </div>
        </div>
        <?php echo ''.$args['after_widget'];
    }
// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = "";
        }
        if ( isset( $instance[ 'style' ] ) ) {
            $style = $instance[ 'style' ];
        } else {
            $style = "Large";
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'title' ); ?>" name="<?php echo ''.$this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'style' ); ?>"><?php esc_html_e( 'Style:','fajar-wp' ); ?></label>
            <select class="widefat" id="<?php echo ''.$this->get_field_id( 'style' ); ?>" name="<?php echo ''.$this->get_field_name( 'style' ); ?>">
                <option value="<?php echo esc_attr( $style ); ?>" <?php if(!empty($style)){ echo 'selected="selected"'; }?>><?php echo esc_attr( $style ); ?></option>
                <option value="Small">Small</option>
                <option value="Large">Large</option>
            </select>
        </p>
        <p><small>For twitter username & keys, see theme options.</small></p>
    <?php
    }
// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['style'] = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';
        return $instance;
    }
} // Class tweets_widget ends here
// Register and load the widget
function tw_load_widget() {
    register_widget( 'tweets_widget' );
}
add_action( 'widgets_init', 'tw_load_widget' );
// Creating Keep In Touch Widget
class keep_in_touch_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
// Base ID of your widget
            'keep_in_touch_widget',
// Widget name will appear in UI
            esc_html__('Fajar WP Keep In Touch', 'fajar-wp'),
// Widget description
            array( 'description' => esc_html__( 'Use this widget phone, number, email and address etc. Footer recomended.', 'fajar-wp' ), )
        );
    }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $phone = apply_filters( 'phone', $instance['phone'] );
        $fax = apply_filters( 'fax', $instance['fax'] );
        $email = apply_filters( 'email', $instance['email'] );
        $address = apply_filters( 'address', $instance['address'] );
// before and after widget arguments are defined by themes
        echo ''.$args['before_widget'];
        if ( ! empty( $title ) )
            echo ''.$args['before_title'] . $title . $args['after_title'];
        ?>
        <ul class="address-list clearfix">
            <?php if(!empty($phone)){ ?>
                <li><i class="icon-telephon-1"></i><?php echo esc_attr($phone); ?></li>
            <?php } if(!empty($fax)){ ?>
                <li><i class="icon-printer7"></i><?php echo esc_attr($fax); ?></li>
            <?php } if(!empty($email)){ ?>
                <li><i class="icon-envelope"></i><a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_attr($email); ?></a></li>
            <?php } if(!empty($address)){ ?>
                <li><i class="icon-icons180"></i><?php echo ''.$address; ?></li>
            <?php } ?>
        </ul>
        <?php echo ''.$args['after_widget'];
    }
// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = "";
        }
        if ( isset( $instance[ 'phone' ] ) ) {
            $phone = $instance[ 'phone' ];
        } else {
            $phone = "";
        }
        if ( isset( $instance[ 'fax' ] ) ) {
            $fax = $instance[ 'fax' ];
        } else {
            $fax = "";
        }
        if ( isset( $instance[ 'email' ] ) ) {
            $email = $instance[ 'email' ];
        } else {
            $email = "";
        }
        if ( isset( $instance[ 'address' ] ) ) {
            $address = $instance[ 'address' ];
        } else {
            $address = "";
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'title' ); ?>" name="<?php echo ''.$this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'phone' ); ?>"><?php esc_html_e( 'Phone Number:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'phone' ); ?>" name="<?php echo ''.$this->get_field_name( 'phone' ); ?>" type="text" value="<?php echo esc_attr( $phone ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'fax' ); ?>"><?php esc_html_e( 'Fax:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'fax' ); ?>" name="<?php echo ''.$this->get_field_name( 'fax' ); ?>" type="text" value="<?php echo esc_attr( $fax ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'email' ); ?>"><?php esc_html_e( 'Email Address:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'email' ); ?>" name="<?php echo ''.$this->get_field_name( 'email' ); ?>" type="text" value="<?php echo esc_attr( $email ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'address' ); ?>"><?php esc_html_e( 'Address:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'address' ); ?>" name="<?php echo ''.$this->get_field_name( 'address' ); ?>" type="text" value="<?php echo esc_attr( $address ); ?>" />
        </p>
    <?php
    }
// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['phone'] = ( ! empty( $new_instance['phone'] ) ) ? strip_tags( $new_instance['phone'] ) : '';
        $instance['fax'] = ( ! empty( $new_instance['fax'] ) ) ? strip_tags( $new_instance['fax'] ) : '';
        $instance['email'] = ( ! empty( $new_instance['email'] ) ) ? strip_tags( $new_instance['email'] ) : '';
        $instance['address'] = ( ! empty( $new_instance['address'] ) ) ? strip_tags( $new_instance['address'] ) : '';
        return $instance;
    }
} // Class tweets_widget ends here
// Register and load the widget
function keep_in_touch_load_widget() {
    register_widget( 'keep_in_touch_widget' );
}
add_action( 'widgets_init', 'keep_in_touch_load_widget' );
// Creating Social Icons Widget
class social_icons_widget extends WP_Widget {
    function __construct() {
        parent::__construct(
// Base ID of your widget
            'social_icons_widget',
// Widget name will appear in UI
            esc_html__('Fajar WP Social Icons', 'fajar-wp'),
// Widget description
            array( 'description' => esc_html__( 'Use this widget for social icons.', 'fajar-wp' ), )
        );
    }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $style = apply_filters( 'style', $instance['style'] );
        if($style == 'Large'){
            $class = 'big';
        } else {
            $class = 'small';
        }
        $facebook = apply_filters( 'facebook', $instance['facebook'] );
        $twitter = apply_filters( 'twitter', $instance['twitter'] );
        $google_plus = apply_filters( 'google_plus', $instance['google_plus'] );
        $linkedin = apply_filters( 'linkedin', $instance['linkedin'] );
        $pinterest = apply_filters( 'pinterest', $instance['pinterest'] );
        $instagram = apply_filters( 'instagram', $instance['instagram'] );
// before and after widget arguments are defined by themes
        echo ''.$args['before_widget'];
        if ( ! empty( $title ) )
            echo ''.$args['before_title'] . $title . $args['after_title'];
        ?>
        <ul class="social list-unstyled bordered <?php echo ''.$class; ?>">
            <?php if(!empty($facebook)){ ?>
                <li><a href="<?php echo esc_url($facebook); ?>" class="facebook animations-on bounceIn" data-delay="100"><i class="icon-facebook2"></i></a></li>
            <?php } if(!empty($twitter)){ ?>
                <li><a href="<?php echo esc_url($twitter); ?>" class="twitter animations-on bounceIn" data-delay="300"><i class="icon-twitter-1"></i></a></li>
            <?php } if(!empty($google_plus)){ ?>
                <li><a href="<?php echo esc_url($google_plus); ?>" class="googleplus animations-on bounceIn" data-delay="500"><i class="icon-googleplus2"></i></a></li>
            <?php } if(!empty($linkedin)){ ?>
                <li><a href="<?php echo esc_url($linkedin); ?>" class="linkedin animations-on bounceIn" data-delay="700"><i class="icon-linkedin3"></i></a></li>
            <?php } if(!empty($pinterest)){ ?>
                <li><a href="<?php echo esc_url($pinterest); ?>" class="pinterest animations-on bounceIn" data-delay="900"><i class="icon-pinterest4"></i></a></li>
            <?php } if(!empty($instagram)){ ?>
                <li><a href="<?php echo esc_url($instagram); ?>" class="instagram animations-on bounceIn" data-delay="1100"><i class="icon-instagram4"></i></a></li>
            <?php } ?>
        </ul>
        <?php echo ''.$args['after_widget'];
    }
// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = "";
        }
        if ( isset( $instance[ 'style' ] ) ) {
            $style = $instance[ 'style' ];
        } else {
            $style = "Large";
        }
        if ( isset( $instance[ 'facebook' ] ) ) {
            $facebook = $instance[ 'facebook' ];
        } else {
            $facebook = "";
        }
        if ( isset( $instance[ 'twitter' ] ) ) {
            $twitter = $instance[ 'twitter' ];
        } else {
            $twitter = "";
        }
        if ( isset( $instance[ 'google_plus' ] ) ) {
            $google_plus = $instance[ 'google_plus' ];
        } else {
            $google_plus = "";
        }
        if ( isset( $instance[ 'linkedin' ] ) ) {
            $linkedin = $instance[ 'linkedin' ];
        } else {
            $linkedin = "";
        }
        if ( isset( $instance[ 'pinterest' ] ) ) {
            $pinterest = $instance[ 'pinterest' ];
        } else {
            $pinterest = "";
        }
        if ( isset( $instance[ 'instagram' ] ) ) {
            $instagram = $instance[ 'instagram' ];
        } else {
            $instagram = "";
        }
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'title' ); ?>" name="<?php echo ''.$this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'style' ); ?>"><?php esc_html_e( 'Style:','fajar-wp' ); ?></label>
            <select class="widefat" id="<?php echo ''.$this->get_field_id( 'style' ); ?>" name="<?php echo ''.$this->get_field_name( 'style' ); ?>">
                <option value="<?php echo esc_attr( $style ); ?>" <?php if(!empty($style)){ echo 'selected="selected"'; }?>><?php echo esc_attr( $style ); ?></option>
                <option value="Small">Small</option>
                <option value="Large">Large</option>
            </select>
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'facebook' ); ?>"><?php esc_html_e( 'Facebook:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'facebook' ); ?>" name="<?php echo ''.$this->get_field_name( 'facebook' ); ?>" type="text" value="<?php echo esc_attr( $facebook ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'twitter' ); ?>"><?php esc_html_e( 'Twitter:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'twitter' ); ?>" name="<?php echo ''.$this->get_field_name( 'twitter' ); ?>" type="text" value="<?php echo esc_attr( $twitter ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'google_plus' ); ?>"><?php esc_html_e( 'Google Plus:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'google_plus' ); ?>" name="<?php echo ''.$this->get_field_name( 'google_plus' ); ?>" type="text" value="<?php echo esc_attr( $google_plus ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'linkedin' ); ?>"><?php esc_html_e( 'Linkedin:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'linkedin' ); ?>" name="<?php echo ''.$this->get_field_name( 'linkedin' ); ?>" type="text" value="<?php echo esc_attr( $linkedin ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'pinterest' ); ?>"><?php esc_html_e( 'Pinterest:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'pinterest' ); ?>" name="<?php echo ''.$this->get_field_name( 'pinterest' ); ?>" type="text" value="<?php echo esc_attr( $pinterest ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'instagram' ); ?>"><?php esc_html_e( 'Instagram:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'instagram' ); ?>" name="<?php echo ''.$this->get_field_name( 'instagram' ); ?>" type="text" value="<?php echo esc_attr( $instagram ); ?>" />
        </p>
    <?php
    }
// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['facebook'] = ( ! empty( $new_instance['facebook'] ) ) ? strip_tags( $new_instance['facebook'] ) : '';
        $instance['twitter'] = ( ! empty( $new_instance['twitter'] ) ) ? strip_tags( $new_instance['twitter'] ) : '';
        $instance['google_plus'] = ( ! empty( $new_instance['google_plus'] ) ) ? strip_tags( $new_instance['google_plus'] ) : '';
        $instance['linkedin'] = ( ! empty( $new_instance['linkedin'] ) ) ? strip_tags( $new_instance['linkedin'] ) : '';
        $instance['pinterest'] = ( ! empty( $new_instance['pinterest'] ) ) ? strip_tags( $new_instance['pinterest'] ) : '';
        $instance['instagram'] = ( ! empty( $new_instance['instagram'] ) ) ? strip_tags( $new_instance['instagram'] ) : '';
        $instance['style'] = ( ! empty( $new_instance['style'] ) ) ? strip_tags( $new_instance['style'] ) : '';
        return $instance;
    }
} // Class tweets_widget ends here
// Register and load the widget
function social_icons_load_widget() {
    register_widget( 'social_icons_widget' );
}
add_action( 'widgets_init', 'social_icons_load_widget' );
// Creating Recent Post With Thumbnail Widget
class recent_posts_widget2 extends WP_Widget {
    function __construct() {
        parent::__construct(
// Base ID of your widget
            'recent_posts_widget',
// Widget name will appear in UI
            esc_html__('Fajar WP Recent Posts With Thumbnails', 'fajar-wp'),
// Widget description
            array( 'description' => esc_html__( 'Use this widget for recent posts with thumbnails.', 'fajar-wp' ), )
        );
    }
// Creating widget front-end
// This is where the action happens
    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $number_posts = apply_filters( 'number_posts', $instance['number_posts'] );
// before and after widget arguments are defined by themes
        echo ''.$args['before_widget'];
        if ( ! empty( $title ) )
            echo ''.$args['before_title'] . $title . $args['after_title'];
// This is where you run the code and display the output
        if(!empty ($number_posts))
            $argo = array(
                'post_type' => 'post',
                'posts_per_page'    => $number_posts,
                'order' => 'DESC',
                'post_status' => 'publish'
            );
        $query = new WP_Query( $argo );
        $rp_count = 50;
            while($query->have_posts()): $query->the_post();
                $post_animation = get_field('choose_post_animation'); ?>
                <article class="footer-post smooth">
                    <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <p><?php the_time('F j, Y'); ?></p>
                </article>
                <div class="clearfix"></div>
                <?php $rp_count = $rp_count + 50;
            endwhile;
            wp_reset_postdata();
        echo ''.$args['after_widget'];
    }
// Widget Backend
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        } else {
            $title = "Recent Posts";
        }
        if ( isset( $instance[ 'number_posts' ] ) ) {
            $number_posts = $instance[ 'number_posts' ];
        } else {
            $number_posts = 5;
        }
// Widget admin form
        ?>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'title' ); ?>" name="<?php echo ''.$this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo ''.$this->get_field_id( 'number_posts' ); ?>"><?php esc_html_e( 'Number Of Posts:','fajar-wp' ); ?></label>
            <input class="widefat" id="<?php echo ''.$this->get_field_id( 'number_posts' ); ?>" name="<?php echo ''.$this->get_field_name( 'number_posts' ); ?>" type="number" value="<?php echo esc_attr( $number_posts ); ?>" />
        </p>
    <?php
    }
// Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['number_posts'] = ( ! empty( $new_instance['number_posts'] ) ) ? strip_tags( $new_instance['number_posts'] ) : '';
        return $instance;
    }
} // Class recent_posts_widget ends here
// Register and load the widget
function rp_load_widget2() {
    register_widget( 'recent_posts_widget2' );
}
add_action( 'widgets_init', 'rp_load_widget2' );
?>