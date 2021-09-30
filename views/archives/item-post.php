<article id="post-<?php the_ID(); ?>" <?php post_class('post-box mb-40'); ?>>
    <div class="post-media">
        <?php the_post_thumbnail('post-archive'); ?>
    </div>
    <div class="post-desc">
        <?php the_category(', '); ?>
        <!-- <a href="#" class="cat">Businese</a> -->
        <h2>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <ul class="post-meta">
            <li><?php buonsito_posted_on(); ?></li>
        </ul>
        <p><?php echo get_the_excerpt(); ?></p>

        <div class="post-footer">
            <div class="read-more">
                <a href="news-details.html"><i class="fas fa-arrow-right"></i><?php _e('Read more', 'buonsito'); ?></a>
            </div>
        </div>
    </div>
</article>