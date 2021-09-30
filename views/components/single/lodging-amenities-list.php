<?php

/**
 * Incoming args:
 * - amenities_tax
 * - amenity_icon_meta
 */
extract($args);
// var_dump($args);
if ($amenities_tax) :
?>
    <!-- Amenities list -->
    <div class="room-fearures clearfix mb-60 pl-0 pr-0">
        <h3 class="subtitle"><?php _e('Amenities', 'buonsito'); ?></h3>
        <?php
        if (!empty($amenities_tax) && !is_wp_error($amenities_tax)) :
            echo '<ul class="room-fearures-list room-amenities-list">';
            foreach ($amenities_tax as $term) {
                $amenity_icon = get_term_meta($term->term_id, $amenity_icon_meta, true);
                echo '<li><i class="' . $amenity_icon . '"></i> ' . $term->name . '</li>';
            }
            echo '</ul>';
        endif;
        ?>
    </div>

<?php endif; ?>