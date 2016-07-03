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
        <div class="photography-design text-center animations-on fadeInUp">
            <h3>
                <strong><?php the_title(); ?></strong>
            </h3>
            <?php the_content();
            if(!empty($port_date)){ ?>
                <p><span class="date"><?php echo esc_attr($launch_string).' '. $port_date; ?></span></p>
            <?php } ?>
            <br>
        </div>
        <?php if($hide_social_share == 'no'){ ?>
        <div class="share-project clearfix">
            <p><?php echo esc_attr($share_project_string); ?></p>
            <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-socials.php"); ?>
        </div>
        <?php } ?>
        <div class="height40"></div>
        <?php if( have_rows('concept_boxes') ): ?>
        <div class="height40"></div>
        <?php $concept_count = 1;
            while ( have_rows('concept_boxes') ) : the_row();
                $concept_title = get_sub_field('concept_title');
                $concept_description = get_sub_field('concept_description');
                $concept_name = get_sub_field('concept_name');
                $concept_designation = get_sub_field('concept_designation');
                $concept_live_link = get_sub_field('concept_live_link');
                $concept_image = get_sub_field('concept_image');
                if($concept_count % 2 != 0){ ?>
                <div class="concept clearfix">
                    <div class="concept-thumbnail animations-on fadeInLeft">
                        <img src="<?php echo esc_url($concept_image); ?>" alt="">
                    </div>
                    <div class="concept-content animations-on fadeInRight">
                        <div class="concept-content-inner">
                            <?php if(!empty($concept_title)){ ?>
                                <h3><?php echo esc_attr($concept_title); ?></h3>
                            <?php } if(!empty($concept_description)){ ?>
                                <p><?php echo esc_attr($concept_description); ?></p>
                            <?php } if(!empty($concept_name)){ ?>
                                <span class="name">-   <?php echo esc_attr($concept_name).', '.$concept_designation; ?></span>
                            <?php } if(!empty($concept_live_link)){ ?>
                                <span class="name"><?php echo esc_attr($click_here_to_string); ?> <a href="<?php echo esc_url($concept_live_link); ?>"><?php echo esc_attr($view_demo_string); ?></a></span>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            <?php } else{ ?>
                <div class="result clearfix">
                    <div class="result-content animations-on fadeInLeft">
                        <div class="result-content-inner">
                            <?php if(!empty($concept_title)){ ?>
                                <h3><?php echo esc_attr($concept_title); ?></h3>
                            <?php } if(!empty($concept_description)){ ?>
                                <p><?php echo esc_attr($concept_description); ?></p>
                            <?php } if(!empty($concept_name)){ ?>
                                <span class="name">-   <?php echo esc_attr($concept_name).', '.$concept_designation; ?></span>
                            <?php } if(!empty($concept_live_link)){ ?>
                                <span class="name"><?php echo esc_attr($click_here_to_string); ?> <a href="<?php echo esc_url($concept_live_link); ?>"><?php echo esc_attr($view_demo_string); ?></a></span>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="result-thumbnail animations-on fadeInRight">
                        <img src="<?php echo esc_url($concept_image); ?>" alt="">
                    </div>
                </div>
            <?php }
                $concept_count++;
            endwhile; ?>
        <div class="height40"></div>
        <?php else :
            // no rows found
        endif;
        if(!empty($feedback_text)){ ?>
            <div class="height40"></div>
            <div class="clients-feedback-comments text-center animations-on tada">
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
                    <span class="client-name"><i>-   <?php echo esc_html__('By','fajar-wp');  echo ' '.esc_attr($feedback_client); ?></i></span>
                <?php } ?>
            </div>
            <div class="height40"></div>
        <?php } ?>
        <div class="height40"></div>
        <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-pagination.php"); ?>
    </div>
</div>