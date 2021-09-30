<?php
// Get args from buonsito_hook_header_start hook
extract($args);
?>
<!-- .header-top -->
<div class="header-top">
    <div class="header-left">
        <?php
        if (is_active_sidebar('topbar_left_sidebar')) :
            dynamic_sidebar('topbar_left_sidebar');
        endif;
        ?>
        <ul class="top-menu">
            <li>
                <a href="#"><?php _e('Get in touch', 'buonsito'); ?></a>
                <ul>
                    <li>
                        <a href="" class="w-email-ga" data-ga="<?php echo $details_email; ?>">
                            <i class="icon-envelope"></i> &nbsp; <?php echo $details_email; ?>
                        </a>
                    <li>
                        <a href="tel:<?= $details_phone_1; ?>" target="_blank"><i class="icon-phone"></i> &nbsp; <?= $details_phone_1; ?></a>
                    </li>
                </ul>
            </li>
        </ul><!-- End .top-menu -->
    </div><!-- End .header-left -->

    <div class="header-right">
        <?php
        if (is_active_sidebar('topbar_right_sidebar')) :
            dynamic_sidebar('topbar_right_sidebar');
        endif;
        ?>
        <ul class="top-menu">
            <li>
                <a href="#"><?php _e('Links', 'buonsito'); ?></a>
                <?php
                $topbar_menu = new Awps\SetUp\Menus();
                $topbar_menu->topbar_menu();
                ?>
            </li>
        </ul><!-- End .top-menu -->

        <?php pll_the_languages(); ?>
    </div><!-- End .header-right -->
</div><!-- End .header-top -->