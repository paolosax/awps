<?php
// Custom Loop using WP_Query to fetch PHP Posts
$query_args = array(
    'post_type' => 'review',
    'posts_per_page' => intval($args['max_items']),
    'post_status' => 'publish',
    'orderby' => 'menu_order',
    'order' => 'DESC',
    // 'suppress_filters'  => false,
    // 'post__not_in' => array($post->ID),
);
$reviewPost = new WP_Query($query_args);

if ($reviewPost->have_posts()) :
?>
    <section class="testimonial-section pb-100 pt-100">
        <div class="container">
            <div class="section-title text-center mb-80">
                <span class="title-tag"><?php echo $args['title_tag']; ?></span>
                <h2><?php echo $args['title']; ?></h2>
            </div>
            <div class="row testimonial-slider withEqualHeight" data-weh-add="30">
                <?php while ($reviewPost->have_posts()) : $reviewPost->the_post();
                    $review_details = array(
                        'reviewer' => buonsito_get_meta(get_the_ID(), 'review_author', true),
                        'location' => buonsito_get_meta(get_the_ID(), 'review_location', true),
                        'source' => buonsito_get_meta(get_the_ID(), 'review_source', true),
                        'date' => buonsito_get_meta(get_the_ID(), 'review_date', true),
                        'rating' => buonsito_get_meta(get_the_ID(), 'review_rating', true),
                    );
                    extract($review_details);

                ?>
                    <div class="col-lg-4">
                        <div class="testimonial-box weh relpos">
                            <div class="client-img">
                                <?php the_post_thumbnail('reviews-carousel'); ?>
                                <span class="check"><i class="fas fa-check"></i></span>
                            </div>

                            <?php the_title('<h3>', '</h3>'); ?>

                            <?php echo ($reviewer) ? '<span class="clinet-post mb-0">' . $reviewer . '</span>' : ''; ?>

                            <?php if ($rating) : ?>
                                <div class="text-center">
                                    <?php
                                    $rating = intval($rating);
                                    for ($x = 0; $x < 5; $x++) {
                                        if (floor($rating) - $x >= 1) {
                                            echo '<i class="fas fa-star"></i>';
                                        } else {
                                            echo '<i class="far fa-star"></i>';
                                        }
                                    }
                                    ?>
                                </div>
                            <?php endif; ?>

                            <div class="mt-20">
                                <?php echo substr(wp_strip_all_tags(get_the_content()), 0 , 400); ?>...
                            </div>

                            <div class="text-center abspos" style="bottom: 10px; left: 0; right: 0;">
                                <a href="<?php $source; ?>" target="_blank" class="btn bg-tripadvisor"><?php _e('Open', 'buonsito'); ?> <i class="fas fa-external-link-alt"></i></a>
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