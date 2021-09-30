<?php

/**
 * Incoming args:
 * - amenities_tax
 * - amenity_icon_meta
 */
extract($args);
// var_dump($args);
if ($lodging_plan) :
    if ( ! empty($lodging_plan) && ! is_wp_error($lodging_plan)) :
?>
    <!-- Amenities list -->
    <div class="room-fearures clearfix mb-60 pl-0 pr-0">
        <h3 class="subtitle"><?php _e('Plan of room', 'buonsito'); ?></h3>

        <div class="col-12">
            <a href="<?php echo $lodging_plan[0]; ?>" target="_blank">
                <img src="<?php echo $lodging_plan[0]; ?>" alt="<?php _e('Plan of room', 'buonsito'); ?>">
            </a>
        </div>
    </div>

<?php endif;
endif;?>