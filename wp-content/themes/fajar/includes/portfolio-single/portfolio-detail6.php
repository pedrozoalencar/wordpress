<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<div class="sub-page container clearfix">
    <div class="row">
        <?php if(!empty($portfolio_video)){
            $col = 'col-md-5'; ?>
            <div class="col-md-7">
                <figure class="responsive-video">
                    <iframe src="http://player.vimeo.com/video/<?php echo esc_attr($portfolio_video); ?>?autoplay=0?title=0&amp;byline=0&amp;portrait=0" width="400" height="225"></iframe>
                </figure>
            </div>
        <?php } else{
            $col = 'col-md-12';
        } ?>
        <div class="<?php echo esc_attr($col); ?>">
            <h3><strong><?php the_title(); ?></strong></h3>
            <?php the_content(); ?>
            <br>
            <aside class="project-detail-sidebar">
                <?php if(!empty($custom_fields_text)){ ?>
                    <h4><strong><?php echo esc_attr($custom_fields_string); ?></strong></h4>
                    <p><?php echo esc_attr($custom_fields_text); ?></p>
                <?php } ?>
                <div class="row">
                    <div class="col-md-5">
                        <?php if(!empty($port_date)){ ?>
                            <h4><strong><?php echo esc_attr($date_string); ?></strong></h4>
                            <p><?php echo esc_attr($port_date); ?></p>
                        <?php } ?>
                    </div>
                    <div class="col-md-7">
                        <?php $terms = get_the_terms(get_the_ID(), 'fajar_genre');
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
                        }?>
                    </div>
                </div>
                <br>
                <?php if($hide_social_share == 'no'){
                    include_once(get_template_directory()."/includes/portfolio-single/portfolio-socials.php");
                } ?>
            </aside>
        </div>
    </div>
    <div class="height40"></div>
    <div class="height40"></div>
    <?php include_once(get_template_directory()."/includes/portfolio-single/portfolio-pagination.php"); ?>
</div>