<div class="room-box mb-30">
    <div class="row no-gutters justify-content-center">
        <div class="col-lg-5 col-md-10">
            <div class="room-img-wrap">
                <div class="room-img" style="background-image: url('<?php the_post_thumbnail_url('lodgings-carousel'); ?>');"></div>
            </div>
        </div>
        <div class="col-lg-7 col-md-10 room-desc align-items-center text-center text-lg-left">
            <h4 class="title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h4>
            <?php the_excerpt(); ?>
            <?php
            $args = array(
                'amenities_tax' => get_the_terms(get_the_ID(), 'amenities'),
                'amenity_icon_meta' => buonsito_get_meta().'amenity_icon'
            );
            extract($args);
            if (!empty($amenities_tax) && !is_wp_error($amenities_tax)) :
                echo '<div>';
                echo '<ul class="icons pl-0 pr-0 mb-10">';
                foreach ($amenities_tax as $term) {
                    $amenity_icon = get_term_meta($term->term_id, $amenity_icon_meta, true);
                    echo '<li><i class="' . $amenity_icon . '"></i></li>';
                }
                echo '</ul>';
                echo '</div>';
            endif;
            ?>

            <a href="<?php the_permalink(); ?>" class="main-btn btn-filled pull-right mt-40"><?php _e('Read more', 'buonsito'); ?></a>
        </div>
    </div>
</div>