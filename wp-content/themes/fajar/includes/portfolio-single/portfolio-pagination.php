<?php include_once(get_template_directory()."/includes/portfolio-single/single-variables.php"); ?>
<ul class="project-detail-pagination">
    <li class="pull-left">
        <?php $nepo = get_next_post();
        if(!empty($nepo)){
            $nepoid = $nepo->ID;
            $next_post_url = get_permalink($nepoid);
        } else {
            $next_post_url = "no-posts";
        }
        if($next_post_url != "no-posts"){ ?>
            <a href="<?php echo esc_url($next_post_url); ?>">
                <i class="icon-angle-left"></i>
            </a>
        <?php } else{ ?>
            <a><i class="icon-angle-left"></i></a>
        <?php } ?>
    </li>
    <li class="align-center">
        <a href="<?php echo esc_url($pagination_link); ?>">
            <i class="icon-grid6"></i>
        </a>
    </li>
    <li class="pull-right">
        <?php $prpo = get_previous_post();
        if(!empty($prpo)){
            $prpoid = $prpo->ID;
            $prev_post_url = get_permalink($prpoid);
        } else {
            $prev_post_url = "no-post";
        }
        if($prev_post_url != "no-post"){ ?>
            <a href="<?php echo esc_url($prev_post_url); ?>">
                <i class="icon-angle-right"></i>
            </a>
        <?php } else{ ?>
            <a>
                <i class="icon-angle-right"></i>
            </a>
        <?php } ?>
    </li>
</ul>