<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<div class="sub-page container clearfix">
    <?php if(is_array($slide_images)){ ?>
        <div class="image-slider bullets-grey">
            <?php foreach($slide_images as $row){ ?>
                <img src="<?php echo esc_url($row['url']); ?>" alt="<?php echo esc_attr($row['alt']); ?>">
            <?php } ?>
        </div>
        <div class="height50"></div>
    <?php } ?>
    <div class="row">
        <div class="col-md-8 animations-on fadeInLeft">
            <h3><strong><?php the_title(); ?></strong></h3>
            <?php the_content(); ?>
        </div>
        <div class="col-md-4 animations-on fadeInRight">
            <aside class="project-detail-sidebar">
                <?php if(!empty($custom_fields_text)){ ?>
                    <h4><strong><?php echo esc_attr($custom_fields_string); ?></strong></h4>
                    <p><?php echo esc_attr($custom_fields_text); ?></p>
                    <br>
                <?php }if(!empty($port_date)){ ?>
                <h4><strong><?php echo esc_attr($date_string); ?></strong></h4>
                <p><?php echo esc_attr($port_date); ?></p>
                <br>
                <?php }
                $terms = get_the_terms(get_the_ID(), 'fajar_genre');
                if($terms){
                    $term_count = count($terms); ?>
                    <h4><strong><?php echo esc_attr($category_string); ?></strong></h4>
                    <p>
                    <?php $count = 1;
                    foreach ($terms as $ter){
                        if($term_count == $count){
                            echo esc_attr($ter->name);
                        } else {
                            echo esc_attr($ter->name).', ';
                        }
                        $count++;
                    }
                    echo '</p>';
                    echo '<br>';
                }
                if($hide_social_share == 'no'){
                    include_once(get_template_directory()."/includes/portfolio-single/portfolio-socials.php");
                }?>
            </aside>
        </div>
    </div>

    <div class="height40"></div>
    <div class="height40"></div>
    <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-pagination.php"); ?>
</div>