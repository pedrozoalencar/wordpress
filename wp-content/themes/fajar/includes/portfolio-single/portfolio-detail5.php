<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<div class="sub-page clearfix">
    <div class="container text-center">
        <?php if(!empty($second_feature_image)){ ?>
            <img src="<?php echo esc_url($second_feature_image); ?>" alt="">
            <div class="height40"></div>
        <?php } ?>
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
        <div class="height20"></div>
        <?php if($hide_social_share == 'no'){
            include_once(get_template_directory()."/includes/portfolio-single/portfolio-socials.php");
        }?>
        <div class="height40"></div>
        <div class="height40"></div>
        <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-pagination.php"); ?>
    </div>
</div>