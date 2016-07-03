<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<div class="sub-page clearfix">
    <div class="container ">
        <?php if(is_array($slide_images)){ ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="image-slider arrows small-arrows ">
                        <?php foreach($slide_images as $row){ ?>
                            <img src="<?php echo esc_url($row['url']); ?>" alt="<?php echo esc_attr($row['alt']); ?>">
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="height40"></div>
        <?php } ?>
        <div class="row">
            <?php if(empty($feature_heading) && empty($feature_sub_heading)){
                $col = 'col-md-12';
            } else {
                $col = 'col-md-9'; ?>
                <div class="col-md-3 animations-on fadeInleft">
                    <?php if(!empty($feature_heading)){ ?>
                        <h3><strong><?php echo esc_attr($feature_heading); ?></strong></h3>
                    <?php } if(!empty($feature_sub_heading)){ ?>
                        <p class="small-text"><?php echo esc_attr($feature_sub_heading); ?></p>
                    <?php } ?>
                </div>
            <?php } ?>
            <div class="<?php echo esc_attr($col); ?>">
                <?php the_content(); ?>
                <br>
                <?php if($hide_social_share == 'no'){
                    include_once(get_template_directory()."/includes/portfolio-single/portfolio-socials.php");
                }?>
            </div>
        </div>
    </div>
    <div class="height40"></div>
        <?php if(!empty($parallax_background_image)){ ?>
        <style type="text/css">
            .simplicity {background: url(<?php echo esc_url($parallax_background_image); ?>) no-repeat center top;}
        </style>
        <div class="height40"></div>
        <section class="parallax simplicity text-center" data-stellar-background-ratio="0.3">
            <div class="overlay-fajar"></div>
            <div class="container animations-on tada">
                <?php if(!empty($parallax_title)){ ?>
                    <p class="small-text"><?php echo esc_attr($parallax_title); ?></p>
                <?php } if(!empty($parallax_quote)){ ?>
                    <p class="quoted-text"><i class="icon-quote4"></i><?php echo esc_attr($parallax_quote); ?><i class="icon-format-quote"></i></p>
                <?php } ?>
            </div>
        </section>
        <div class="height40"></div>
    <?php } ?>
    <div class="height40"></div>
    <div class="container text-center">
        <?php if(!empty($second_feature_image)){ ?>
            <img src="<?php echo esc_url($second_feature_image); ?>" class="animations-on fadeInUp" alt="">
        <?php } ?>
        <div class="height40"></div>
        <h3><strong><?php the_title(); ?></strong></h3>
        <div class="height10"></div>
        <p class="small-text"><?php if(!empty($port_format)){ echo esc_attr($format_string).': '.$port_format.'<br>'; } ?>
            <?php if(!empty($port_date)){ echo esc_attr($date_string).': '.$port_date.'<br>'; } ?>

            <?php $terms = get_the_terms(get_the_ID(), 'fajar_genre');
            if($terms){
            $term_count = count($terms);
            echo esc_attr($category_string).': ';
                $count = 1;
                foreach ($terms as $ter){
                    if($term_count == $count){
                        echo esc_attr($ter->name);
                    } else {
                        echo esc_attr($ter->name).', ';
                    }
                    $count++;
                }
                echo '<br>';
            } ?>
            <?php if(!empty($demo_link)){ echo esc_attr($click_here_to_string); ?> <a href="<?php echo esc_url($demo_link); ?>"><?php echo esc_attr($view_demo_string); ?></a> <?php } ?>
        </p>
        <div class="height20"></div>
        <p><?php if(!empty($small_info)){ echo esc_attr($small_info); } ?></p>

        <div class="height40"></div>
        <?php if(!empty($feedback_text)){ ?>
            <div class="height40"></div>
            <div class="clients-feedback-comments dark animations-on tada">
                <?php for($star = 1; $star <= 5; $star++){
                    if($number_of_active_stars >= $star){
                        echo '<i class="icon-star10"></i>';
                    } else {
                        echo '<i class="icon-star-o"></i>';
                    }
                } if(!empty($client_feedback_string)){ ?>
                    <h3><?php echo esc_attr($client_feedback_string); ?></h3>
                <?php } if(!empty($feedback_text)){ ?>
                    <p><?php echo esc_attr($feedback_text); ?></p>
                <?php } if(!empty($feedback_client)){ ?>
                    <span class="client-name"><i>-   <?php echo esc_html__('By','fajar-wp'); echo ' '.esc_attr($feedback_client); ?></i></span>
                <?php } ?>
            </div>
            <div class="height40"></div>
        <?php } ?>
        <div class="height40"></div>
        <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-pagination.php"); ?>
    </div>
</div>