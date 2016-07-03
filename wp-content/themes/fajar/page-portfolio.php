<?php
/*
 * Template Name: Portfolio Page
*/
get_header();
while(have_posts()): the_post();
    $portfolio_layout = get_field('portfolio_layout');
    if($portfolio_layout == 'portfolio-nimble-five-column-wide'):
        get_template_part('includes/portfolio/portfolio','nimble-five-column-wide');
    elseif( $portfolio_layout == 'portfolio-nimble-four-column' ):
        get_template_part('includes/portfolio/portfolio','nimble-four-column');
    elseif( $portfolio_layout == 'portfolio-nimble-four-column-wide' ):
        get_template_part('includes/portfolio/portfolio','nimble-four-column-wide');
    elseif( $portfolio_layout == 'portfolio-nimble-three-column' ):
        get_template_part('includes/portfolio/portfolio','nimble-three-column');
    elseif( $portfolio_layout == 'portfolio-nimble-two-column' ):
        get_template_part('includes/portfolio/portfolio','nimble-two-column');
    elseif( $portfolio_layout == 'portfolio-no-space-five-column-wide' ):
        get_template_part('includes/portfolio/portfolio','no-space-five-column-wide');
    elseif( $portfolio_layout == 'portfolio-no-space-four-column' ):
        get_template_part('includes/portfolio/portfolio','no-space-four-column');
    elseif( $portfolio_layout == 'portfolio-no-space-four-column-wide' ):
        get_template_part('includes/portfolio/portfolio','no-space-four-column-wide');
    elseif( $portfolio_layout == 'portfolio-no-space-three-column' ):
        get_template_part('includes/portfolio/portfolio','no-space-three-column');
    elseif( $portfolio_layout == 'portfolio-no-space-two-column' ):
        get_template_part('includes/portfolio/portfolio','no-space-two-column');
    elseif( $portfolio_layout == 'portfolio-without-nimble-five-column-wide' ):
        get_template_part('includes/portfolio/portfolio','without-nimble-five-column-wide');
    elseif( $portfolio_layout == 'portfolio-without-nimble-four-column' ):
        get_template_part('includes/portfolio/portfolio','without-nimble-four-column');
    elseif( $portfolio_layout == 'portfolio-without-nimble-four-column-wide' ):
        get_template_part('includes/portfolio/portfolio','without-nimble-four-column-wide');
    elseif( $portfolio_layout == 'portfolio-without-nimble-three-column' ):
        get_template_part('includes/portfolio/portfolio','without-nimble-three-column');
    elseif( $portfolio_layout == 'portfolio-without-nimble-two-column' ):
        get_template_part('includes/portfolio/portfolio','without-nimble-two-column');
    endif;
 endwhile;
get_footer(); ?>