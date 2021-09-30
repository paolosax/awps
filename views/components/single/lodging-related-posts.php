<?php

/**
 * Custom Loop using WP_Query to fetch PHP related Lodgings Posts
 */

// Get the id of the current post, to be excluded from the query
$current_id = get_the_ID();

$query_args = array(
    'post_type' => 'lodging',
    'post_status' => 'publish',
    'posts_per_page' => 2,
    'post__not_in' => array($current_id),
    'orderby' => 'menu_order',
    'order' => 'ASC',
);
$related_lodgings = new WP_Query($query_args);

if ($related_lodgings->have_posts()) :
?>
    <div class="related-room">
        <h3 class="subtitle"><?php _e('Related Lodgings', 'buonsito'); ?></h3>
        <div class="row room-gird-loop">
            <?php while ($related_lodgings->have_posts()) : $related_lodgings->the_post(); ?>
                <div class="col-lg-6 col-sm-6 d-flex align-items-stretch">
                    <div class="room-box d-flex flex-column">
                        <div class="room-img-wrap">
                            <div class="room-img" style="background-image: url('<?php the_post_thumbnail_url('lodgings-carousel'); ?>');">
                            </div>
                        </div>
                        <div class="room-desc d-flex flex-column justify-content-between align-items-center" style="flex: 1;">
                            <?php
                            $args = array(
                                'amenities_tax' => get_the_terms(get_the_ID(), 'amenities'),
                                'amenity_icon_meta' => buonsito_get_meta().'amenity_icon'
                            );
                            extract($args);
                            if (!empty($amenities_tax) && !is_wp_error($amenities_tax)) :
                                echo '<ul class="icons">';
                                foreach ($amenities_tax as $term) {
                                    $amenity_icon = get_term_meta($term->term_id, $amenity_icon_meta, true);
                                    echo '<li><i class="' . $amenity_icon . '"></i></li>';
                                }
                                echo '</ul>';
                            endif;
                            ?>
                            <h4 class="title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h4>
                            <?php the_excerpt(); ?>
                            <div class="mt-auto pt-20">
                                <a href="<?php the_permalink(); ?>" class="main-btn btn-filled"><?php _e('Read more', 'buonsito'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
                // Reset Query
                wp_reset_postdata();
            endwhile; ?>
        </div>
    </div>
<?php endif; ?>