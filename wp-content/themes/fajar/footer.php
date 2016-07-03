<?php if(!is_page_template('page-coming-soon.php')){
    if(is_category()){
        $queried_object = get_queried_object();
        $footer_type = get_field('pg_select_page_footer', $queried_object);
    } elseif(is_singular('portfolio') || is_home() || is_tag() || is_author() || is_date() || is_day() || is_year() || is_month() || is_time() || is_search() || is_404() || is_attachment()){
        $footer_type = fajar_option('pg_select_page_footer');
    } elseif((function_exists('is_shop') && is_shop()) || (function_exists('is_product_category') && is_product_category()) || (function_exists('is_product_tag') && is_product_tag()) || (function_exists('is_product') && is_product())){
        $footer_type = fajar_option('shop_page_footer');
    } else {
        $footer_type = get_field('pg_select_page_footer');
    }
    if($footer_type == 'footer-1'){
        get_template_part('includes/footer','one');
    } elseif($footer_type == 'footer-2'){
        get_template_part('includes/footer','two');
    } elseif($footer_type == 'footer-3'){
        get_template_part('includes/footer','three');
    } elseif($footer_type == 'footer-4'){
        get_template_part('includes/footer','four');
    } else {
        get_template_part('includes/footer','five');
    }
} ?>
</div>
<!-- End Wrapper -->
<?php wp_footer(); ?>
</body>
</html>