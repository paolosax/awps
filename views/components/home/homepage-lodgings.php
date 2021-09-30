<?php
// Custom Loop using WP_Query to fetch PHP Posts
$query_args = array(
    'post_type' => 'lodging',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$lodgingsPost = new WP_Query($query_args);

if ($lodgingsPost->have_posts()) :
?>
    <section class="room-slider bg-white pb-100 pt-100">
        <div class="container-fluid p-0">
            <div class="section-title mb-80 text-center">
                <span class="title-tag"><?php echo $args['title_tag']; ?></span>
                <h2><?php echo $args['title']; ?></h2>
            </div>
            <div class="rooms-slider-two justify-content-center">
                <?php while ($lodgingsPost->have_posts()) : $lodgingsPost->the_post(); ?>
                    <div class="col-lg-6">
                        <div class="single-rooms-box">
                            <div class="room-img">
                                <div class="img" style="background-image: url('<?php the_post_thumbnail_url('lodgings-carousel'); ?>');"></div>
                            </div>

                            <?php
                            $amenities_tax = get_the_terms(get_the_ID(), 'amenities');
                            $amenity_icon_meta = buonsito_get_meta().'amenity_icon';
                            if ($amenities_tax) : ?>
                                <ul class="icons">
                                    <?php
                                    if (!empty($amenities_tax) && !is_wp_error($amenities_tax)) :
                                        foreach ($amenities_tax as $term) {
                                            $amenity_icon = get_term_meta($term->term_id, $amenity_icon_meta, true);
                                            echo '<li><i class="' . $amenity_icon . '"></i> <span class="d-none d-sm-inline">' . $term->name . '</span></li>';
                                        }
                                    endif;
                                    ?>
                                </ul>
                            <?php endif; ?>
                            <div class="room-desc">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <h3>
                                            <a href="<?php the_permalink(); ?>">
                                                <?php the_title(); ?>
                                            </a>
                                        </h3>

                                        <p><?php the_excerpt(); ?></p>
                                    </div>

                                    <div class="col-12 text-center mt-20">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-flat text-white"><?php _e('Show more', 'buonsito'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>