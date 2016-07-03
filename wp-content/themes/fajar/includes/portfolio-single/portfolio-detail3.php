<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<div class="sub-page container clearfix">
    <div class="row">
        <?php if(is_array($slide_images)){
            $col = 'col-md-5';
            ?>
            <div class="col-md-7">
                <div class="image-slider arrows small-arrows project-detail-img-slider">
                    <?php foreach($slide_images as $row){ ?>
                        <img src="<?php echo esc_url($row['url']); ?>" alt="<?php echo esc_attr($row['alt']); ?>">
                    <?php } ?>
                </div>
            </div>
        <?php } else{
            $col = 'col-md-12';
        } ?>
        <div class="<?php echo esc_attr($col); ?>">
            <h3>
                <strong><?php the_title(); ?></strong>
            </h3>
            <?php the_content(); ?>
            <br>
            <?php if(!empty($custom_fields_text)){ ?>
                <h4><strong><?php echo esc_attr($custom_fields_string); ?></strong></h4>
                <p><?php echo esc_attr($custom_fields_text); ?></p>
            <?php } ?>
            <div class="row">
                <?php if(!empty($port_date)){ ?>
                    <div class="col-md-5">
                        <h4><strong><?php echo esc_attr($date_string); ?></strong></h4>
                        <p><?php echo esc_attr($port_date); ?></p>
                    </div>
                <?php } ?>
                <div class="col-md-7">
                    <h4><strong><?php echo esc_attr($category_string); ?></strong></h4>
                    <?php $terms = get_the_terms(get_the_ID(), 'fajar_genre');
                    if($terms){
                        $term_count = count($terms);
                        echo '<p>';
                        $count = 1;
                        foreach ($terms as $ter){
                            if($term_count == $count){
                                echo esc_attr($ter->name);
                            } else {
                                echo esc_attr($ter->name).', ';
                            }
                            $count++;
                        }
                        echo '</p>';
                    } ?>
                </div>
            </div>
            <br>
            <?php if($hide_social_share == 'no'){
                include_once(get_template_directory()."/includes/portfolio-single/portfolio-socials.php");
            }?>
        </div>
    </div>
    <div class="height40"></div>
    <div class="height40"></div>
    <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-pagination.php"); ?>
</div>