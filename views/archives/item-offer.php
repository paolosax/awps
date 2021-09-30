<?php
$offer_details = array(
    'arrival_date' => date('d/m/Y', intval(buonsito_get_meta(get_the_ID(), 'offer_start_date', true))),
    'departure_date' => date('d/m/Y', intval(buonsito_get_meta(get_the_ID(), 'offer_end_date', true))),
    'tax_promotions' => get_the_term_list(get_the_ID(), 'promotions', '', ', ', ''),
    'is_hidden' => buonsito_get_meta(get_the_ID(), 'offer_is_hidden', true),
    'price' => buonsito_get_meta(get_the_ID(), 'offer_price', true),
    'price_tag' => buonsito_get_meta(get_the_ID(), 'offer_price_tag', true),
);
extract($offer_details);

// if offer is visible
if (!$is_hidden) :
?>
    <article class="archive-grid__item latest-post-box">
        <div class="archive-grid__item-wrapper">
            <div class="archive-grid__item-img">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('offers-carousel'); ?>" />
                </a>
                <?php if ($tax_promotions) : ?>
                    <span class="post-tag"><?php echo '<i class="fas fa-tag"></i>&nbsp;' . $tax_promotions; ?></span>
                <?php endif; ?>
            </div>
            <div class="archive-grid__item-body">
                <?php if ($arrival_date != '01/01/1970' && $departure_date != '01/01/1970') : ?>
                    <ul class="post-meta">
                        <li>
                            <?php echo '<i class="far fa-calendar"></i> ' . sprintf(__('From %1$s to %2$s', 'buonsito'), $arrival_date, $departure_date); ?>
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
            </div>
            <div class="archive-grid__item-footer">
                <a href="<?php the_permalink(); ?>" class="main-btn btn-filled"><?php _e('Read more', 'buonsito'); ?></a>
            </div>
        </div>
    </article>

<?php endif; ?>