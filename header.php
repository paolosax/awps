<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package awps
 */

?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php if (is_singular() && pings_open(get_queried_object())) : ?>
		<link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" <?php page_classes('page-wrapper'); ?>>
		<?php
		/**
		 * Hook: goldengames_hook_before_header.
		 *
		 * @hooked Skip to content - 5 (outputs the 'skip-to-content' link)
		 * @hooked dynamic_sidebar('before-header-sidebar') - 10 (outputs the before-header widget area)
		 */
		do_action('goldengames_hook_before_header');

		/**
		 * Get the template part for displaying the site-header
		 */
		get_template_part('views/partials/site-header/site-header');

		/**
		 * Hook: goldengames_hook_after_header.
		 *
		 * @hooked dynamic_sidebar('after-header-sidebar') - 10 (outputs the after-header widget area)
		 * @hooked get_template_part: template-parts/components/common/titlebar - 30 (outputs the title-bar partial)
		 */
		do_action('goldengames_hook_after_header');
		?>

		<!-- <div class="content-wrapper {{#unlesspage 'index'}}container{{/unlesspage}}"> -->
		<div id="content-wrapper" <?php content_wrapper_classes('content-wrapper'); ?>>
			<?php
			/**
			 * Hook: goldengames_hook_content_start.
			 *
			 */
			do_action('goldengames_hook_content_start');
			?>