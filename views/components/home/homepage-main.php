<section class="text-block pt-100 pb-100">
    <div class="container">
        <div class="row align-items-center justify-content-center wow fadeInLeft" data-wow-delay=".3s">
            <div class="col-lg-7">
                <div class="text-img text-center text-lg-left mb-small">
                    <img src="<?php the_post_thumbnail_url(); ?>" />
                </div>
            </div>

            <div class="col-lg-5 col-md-8 col-sm-10 wow fadeInRight" data-wow-delay=".5s">
                <div class="block-text">
                    <div class="section-title mb-20">
                        <span class="title-tag"><?php echo get_the_excerpt(); ?></span>
                        <h2><?php the_title(); ?></h2>
                    </div>

                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>