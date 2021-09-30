<?php

/**
 * Template part for displaying the sitea header
 *
 * @package Buonsito_Theme
 */

// Get args from header template
extract($args);
?>

<header class="header is-overlayed">
    <?php
    /**
     * Hook: goldengames_hook_header_start.
     * @hooked get_template_part: template-parts/partials/site-header/topbar passing profile args - 10 (outputs the topbar partial)
     */
    do_action('goldengames_hook_header_start');

    get_template_part('views/partials/site-header/topbar', null, [
        // 'details_phone_1' => goldengames_get_core_option('phone_1'),
        // 'details_email' => goldengames_get_core_option('email'),
        'details_phone_1' => 'details_phone_1',
        'details_email' => 'details_email',
    ]);
    ?>

    <div class="header-middle sticky-header">
        <div class="header-left">
            <?php // goldengames_main_menu_toggler(); 
            ?>
            <?php get_template_part('views/partials/site-header/custom-logo'); ?>
        </div><!-- End .header-left -->
        <div class="header-center">
            <!-- .main-nav -->
            <?php // goldengames_main_menu(); 
            ?>
            <!-- End .main-nav -->
        </div>

        <div class="header-right">
            <!-- .header-search -->
            <div class="header-search">
                <a href="#" class="search-toggle" role="button" title="Search"><i class="icon-search"></i></a>
                <form action="#" method="get">
                    <div class="header-search-wrapper">
                        <label for="q" class="sr-only">Search</label>
                        <input type="search" class="form-control" name="q" id="q" placeholder="Search in..." required>
                    </div><!-- End .header-search-wrapper -->
                </form>
            </div><!-- End .header-search -->
            <!-- .wishlist -->
            <div class="wishlist">
                <a href="wishlist.html" title="Wishlist">
                    <i class="icon-heart-o"></i>
                    <span class="wishlist-count">3</span>
                </a>
            </div><!-- End .wishlist -->
            <!-- .cart-dropdown -->
            <div class="dropdown cart-dropdown">
                <a href="#" class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                    <i class="icon-shopping-cart"></i>
                    <span class="cart-count">2</span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-cart-products">
                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="product.html">Beige knitted elastic runner shoes</a>
                                </h4>

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">1</span>
                                    x $84.00
                                </span>
                            </div><!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="https://dummyimage.com/60x60/336699/fff" alt="product">
                                </a>
                            </figure>
                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                        </div><!-- End .product -->

                        <div class="product">
                            <div class="product-cart-details">
                                <h4 class="product-title">
                                    <a href="product.html">Blue utility pinafore denim dress</a>
                                </h4>

                                <span class="cart-product-info">
                                    <span class="cart-product-qty">1</span>
                                    x $76.00
                                </span>
                            </div><!-- End .product-cart-details -->

                            <figure class="product-image-container">
                                <a href="product.html" class="product-image">
                                    <img src="https://dummyimage.com/60x60/336699/fff" alt="product">
                                </a>
                            </figure>
                            <a href="#" class="btn-remove" title="Remove Product"><i class="icon-close"></i></a>
                        </div><!-- End .product -->
                    </div><!-- End .cart-product -->

                    <div class="dropdown-cart-total">
                        <span>Total</span>

                        <span class="cart-total-price">$160.00</span>
                    </div><!-- End .dropdown-cart-total -->

                    <div class="dropdown-cart-action">
                        <a href="cart.html" class="btn btn-primary">View Cart</a>
                        <a href="checkout.html" class="btn btn-outline-primary-2"><span>Checkout</span><i class="icon-long-arrow-right"></i></a>
                    </div><!-- End .dropdown-cart-total -->
                </div><!-- End .dropdown-menu -->
            </div><!-- End .cart-dropdown -->
        </div><!-- End .header-right -->
    </div><!-- End .header-middle -->
    <?php
    /**
     * Hook: goldengames_hook_header_end.
     */
    do_action('goldengames_hook_header_end');
    ?>
</header><!-- End .header -->