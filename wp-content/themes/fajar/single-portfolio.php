<?php get_header();
while(have_posts()): the_post();
    $portfolio_single_item_layout = get_field('portfolio_single_item_layout');
    $work_detail_string = get_field('work_detail_string');
    $portfolio_string = get_field('portfolio_string');
    $hide_port_default_breadcrumb = get_field('hide_port_default_breadcrumb');
    if($hide_port_default_breadcrumb != 'hide'){ ?>
    <section class="subpage-breadcrumb-banner bg-grey control-page-smallHeader clearfix">
        <div class="container">
            <?php if(!empty($work_detail_string)){ ?>
                <h1><?php echo esc_attr($work_detail_string); ?></h1>
            <?php } ?>
            <ul class="breadcrumbs">
                <li><a href="<?php echo esc_url(home_url('/')); ?>"><?php echo esc_html__('Home','fajar-wp'); ?></a> <span>/</span> </li>
                <?php if(!empty($portfolio_string)){ ?>
                    <li><?php echo esc_attr($portfolio_string); ?><span> /</span> </li>
                <?php } ?>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
    </section>
    <?php }
    if($portfolio_single_item_layout == 'layout-1'):
        get_template_part('includes/portfolio-single/portfolio','detail1');
    elseif( $portfolio_single_item_layout == 'layout-2' ):
        get_template_part('includes/portfolio-single/portfolio','detail2');
    elseif( $portfolio_single_item_layout == 'layout-3' ):
        get_template_part('includes/portfolio-single/portfolio','detail3');
    elseif( $portfolio_single_item_layout == 'layout-4' ):
        get_template_part('includes/portfolio-single/portfolio','detail4');
    elseif( $portfolio_single_item_layout == 'layout-5' ):
        get_template_part('includes/portfolio-single/portfolio','detail5');
    elseif( $portfolio_single_item_layout == 'layout-6' ):
        get_template_part('includes/portfolio-single/portfolio','detail6');
    endif;
    endwhile;
get_footer(); ?>