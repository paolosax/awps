<?php
$query_args = array(
    'post_type' => 'offer',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'meta_key' => buonsito_get_meta().'offer_end_date',
    'orderby'   => 'meta_value_num',
    'order'   => 'ASC',
);

if (!is_front_page()) {
    $query_args['post__not_in'] = array(get_the_ID());
}

$offersPost = new WP_Query($query_args);

if ($offersPost->have_posts()) :
?>
    <section class="latest-news pt-100 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8 col-sm-7">
                    <div class="section-title">
                        <span class="title-tag"><?php echo $args['title_tag']; ?></span>
                        <h2><?php echo $args['title']; ?></h2>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-5 d-none d-sm-block">
                    <div class="latest-post-arrow arrow-style text-right">
                    </div>
                </div>
            </div>
            <div class="row latest-post-slider mt-80 withEqualHeight" data-weh-add="40">
                <?php while ($offersPost->have_posts()) : $offersPost->the_post();

                    $arrivalDate = buonsito_get_meta(get_the_ID(), 'offer_start_date', true);
                    $departureDate = buonsito_get_meta(get_the_ID(), 'offer_end_date', true);
                    $taxPromotions = get_the_term_list(get_the_ID(), 'promotions', '', ', ', '');
                    $isHidden = buonsito_get_meta(get_the_ID(), 'offer_is_hidden', true);
                    $offerPrice = buonsito_get_meta(get_the_ID(), 'offer_price', true);
                    $priceTag = buonsito_get_meta(get_the_ID(), 'offer_price_tag', true);

                    $offer_details = array(
                        'arrival_date' => ($arrivalDate) ? date('d/m/Y', intval($arrivalDate)) : '',
                        'departure_date' => ($departureDate) ? date('d/m/Y', intval($departureDate)) : '',
                        'tax_promotions' => $taxPromotions ? $taxPromotions : '',
                        'is_hidden' => $isHidden ? $isHidden : '',
                        'price' => $offerPrice ? $offerPrice : '',
                        'price_tag' => $priceTag ? $priceTag : '',
                    );
                    extract($offer_details);

                    // if offer is visible
                    if ($is_hidden != 'on') :
                ?>
                        <div class="col-lg-4">
                            <div class="latest-post-box">
                                <div class="post-img">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('offers-carousel', array('class' => 'w100')); ?>
                                    </a>
                                    <?php if ($tax_promotions) : ?>
                                        <span class="post-tag"><?php echo '<i class="fas fa-tag"></i>&nbsp;' . $tax_promotions; ?></span>
                                    <?php endif; ?>
                                </div>
                                <div class="post-desc weh relpos">
                                    <?php if ($arrival_date && $departure_date) : ?>
                                        <ul class="post-meta">
                                            <li>
                                                <?php
                                                /* translators: %1$s: is the icon i tag, %2$s: the offer's arrival date, %3$s: the offer's departure date  */
                                                printf(__('%1$s From %2$s to %3$s', 'buonsito'), '<i class="far fa-calendar"></i>', $arrival_date, $departure_date); ?>
                                            </li>
                                        </ul>
                                    <?php endif; ?>

                                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                    <?php
                                    /*if (!has_excerpt()) {
                                        $post_excerpt = force_balance_tags(html_entity_decode(wp_trim_words(htmlentities(wpautop(remove_html_comments(get_the_content()))), 20, '...')));
                                    } else {
                                        $post_excerpt = force_balance_tags(html_entity_decode(wp_trim_words(htmlentities(wpautop(remove_html_comments(get_the_excerpt()))), 20, '...')));
                                    }*/
                                    echo '<p>' . $post_excerpt . '</p>';
                                    ?>

                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-flat pull-right abspos" style="bottom: 10px; right: 10px;"><?php _e('Read more', 'buonsito'); ?></a>
                                </div>
                            </div>
                        </div>
                <?php
                    endif;
                // end loop
                endwhile;
                // clean data
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>