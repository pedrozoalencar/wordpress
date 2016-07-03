<?php
/*
* Template Name: Store Locator
*/
get_header();
while(have_posts()): the_post(); ?>
    <section>
        <div class="container">
            <!-- STORE LOCATOR DEMO -->
            <div id="jlocator">

                <!-- panel -->
                <div class="panel" data-type="panel">

                    <!-- controls -->
                    <div class="controls animations-on fadeInLeft" data-type="controls">

                        <div class="box clearfix">

                            <div class="reset-box left">
                                <input
                                    type="button"
                                    class="jplist-btn btn-default"
                                    value="Reset"
                                    data-control-type="reset"
                                    data-control-name="reset"
                                    data-control-action="reset"
                                    />
                            </div>

                            <div
                                class="drop-down left"
                                data-control-type="drop-down"
                                data-control-name="sort"
                                data-control-action="sort"
                                data-datetime-format="{month}/{day}/{year}"> <!-- {year}, {month}, {day}, {hour}, {min}, {sec} -->

                                <ul>
                                    <li><span data-path="default">Sort by</span></li>
                                    <li><span data-path=".title" data-order="asc" data-type="text">Title A-Z</span></li>
                                    <li><span data-path=".title" data-order="desc" data-type="text">Title Z-A</span></li>
                                    <li><span data-path="[data-type='country']" data-order="asc" data-type="text">Country A-Z</span></li>
                                    <li><span data-path="[data-type='country']" data-order="desc" data-type="text">Country Z-A</span></li>
                                </ul>
                            </div>

                            <input
                                class="autocomplete left"
                                data-control-type="autocomplete"
                                data-control-name="autocomplete"
                                data-control-action="filter"
                                data-radius="100000"
                                type="text"
                                placeholder="Enter a location"
                                /><!-- data-radius in meters -->
                        </div>

                        <div class="box clearfix">
                            <?php $tags = get_terms( 'fajar_store_locator_genre', array(
                                'orderby'    => 'count',
                                'hide_empty' => 1
                            ) );
                            $term_array = array();
                            foreach($tags as $tag){
                                $term_array[] = $tag->slug; ?>
                                <div
                                    class="cb-group-filter left"
                                    data-control-type="checkbox-group-filter"
                                    data-control-action="filter"
                                    data-control-name="themes-art">

                                    <div class="cb">
                                        <input
                                            data-path=".<?php echo esc_attr($tag->slug); ?>"
                                            id="<?php echo esc_attr($tag->slug); ?>"
                                            type="checkbox"
                                            />
                                        <label for="<?php echo esc_attr($tag->slug); ?>"><?php echo esc_attr($tag->name); ?></label>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="box clearfix">

                            <!-- paging -->
                            <div
                                class="paging-results left"
                                data-type="Page {current} of {pages}"
                                data-control-type="label"
                                data-control-name="paging"
                                data-control-action="paging"></div>

                            <div
                                class="paging left"
                                data-control-type="placeholder"
                                data-control-name="paging"
                                data-control-action="paging"
                                data-items-per-page="5"></div>
                        </div>
                    </div>

                    <!-- store list -->
                    <div class="stores box animations-on fadeInRight" data-type="stores">
                        <?php $stores = array(
                            'post_type' => 'fajar-store-locator',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'fajar_store_locator_genre',
                                    'field'    => 'slug',
                                    'terms'    => $term_array,
                                ),
                            ),
                        );
                        $stores_loop = new WP_Query($stores);
                        while ( $stores_loop->have_posts() ) : $stores_loop->the_post();
                            $store_latitude = get_field('store_latitude');
                            $store_longitude = get_field('store_longitude');
                            $store_title = get_field('store_title');
                            $store_address = get_field('store_address');
                            $store_city = get_field('store_city');
                            $store_state = get_field('store_state');
                            $store_country = get_field('store_country');
                            $terms = get_the_terms(get_the_ID(), 'fajar_store_locator_genre'); ?>
                            <div
                                data-type="store"
                                class="store box"
                                data-latitude="<?php echo esc_attr($store_latitude); ?>"
                                data-longitude="<?php echo esc_attr($store_longitude); ?>">
                                <p class="<?php foreach ($terms as $ter){ echo esc_attr($ter->slug). ' '; } ?>">
                                    <span class="title" data-type="title"><?php echo esc_attr($store_title); ?></span>,<br>
                <span data-type="address"><?php echo esc_attr($store_address); ?>,<br>
                <span data-type="city"><?php echo esc_attr($store_city); ?></span>,<br>
                <span data-type="state"><?php echo esc_attr($store_state); ?></span>,<br>
                <!--span data-type="zipcode"></span>,<br/-->
                <span data-type="country"><?php echo esc_attr($store_country); ?></span><br/>
                <span class="tags">Tags: <?php foreach ($terms as $ter){ echo esc_attr($ter->name). ', '; } ?></span>
                                </p>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </div>
                    <!-- no results -->
                    <div class="box no-results" data-type="no-results">
                        <p><?php echo esc_html__('No results found','fajar-wp'); ?></p>
                    </div>
                </div>
                <!-- map -->
                <div class="map" data-type="map"></div>
            </div>
            <!-- end of STORE LOCATOR DEMO -->
        </div>
    </section>
<?php endwhile;
get_footer(); ?>