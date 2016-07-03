<?php
/*
 * Template Name: Contacts Page
*/
get_header();
while(have_posts()): the_post();
    $map_style = get_field('map_style');
    $map_position = get_field('map_position');
    $map_height = get_field('map_height');
    if(!empty($map_height)){
        $height_style = '<style type="text/css">.map-banner { height: '. esc_attr($map_height) .'px !important; }</style>';
    } else {
        $height_style = '';
    }
?>
    <?php if($map_style == 'dark') {
        $class = 'map';
    } else {
        $class = 'map-blue';
    } if($map_position == 'top'){
        echo ''.$height_style; ?>
        <section class="map-banner" id="<?php echo esc_attr($class); ?>" <?php echo esc_attr($height_style); ?>></section>
    <?php }
    the_content();
    if($map_position == 'bottom'){
        echo ''.$height_style; ?>
        <section class="map-banner" id="<?php echo esc_attr($class); ?>" <?php echo esc_attr($height_style); ?>></section>
<?php }
endwhile;
get_footer(); ?>