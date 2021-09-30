<?php

/**
 * Helpers methods
 * List all your static functions you wish to use globally on your theme
 *
 * @package awps
 */

if (!function_exists('dd')) {
	/**
	 * Var_dump and die method
	 *
	 * @return void
	 */
	function dd()
	{
		echo '<pre>';
		array_map(function ($x) {
			var_dump($x);
		}, func_get_args());
		echo '</pre>';
		die;
	}
}

if (!function_exists('starts_with')) {
	/**
	 * Determine if a given string starts with a given substring.
	 *
	 * @param  string  $haystack
	 * @param  string|array  $needles
	 * @return bool
	 */
	function starts_with($haystack, $needles)
	{
		foreach ((array) $needles as $needle) {
			if ($needle != '' && substr($haystack, 0, strlen($needle)) === (string) $needle) {
				return true;
			}
		}
		return false;
	}
}

if (!function_exists('mix')) {
	/**
	 * Get the path to a versioned Mix file.
	 *
	 * @param  string  $path
	 * @param  string  $manifestDirectory
	 * @return \Illuminate\Support\HtmlString
	 *
	 * @throws \Exception
	 */
	function mix($path, $manifestDirectory = '')
	{
		if (!$manifestDirectory) {
			//Setup path for standard AWPS-Folder-Structure
			$manifestDirectory = "assets/dist/";
		}
		static $manifest;
		if (!starts_with($path, '/')) {
			$path = "/{$path}";
		}
		if ($manifestDirectory && !starts_with($manifestDirectory, '/')) {
			$manifestDirectory = "/{$manifestDirectory}";
		}
		$rootDir = dirname(__FILE__, 2);
		if (file_exists($rootDir . '/' . $manifestDirectory . '/hot')) {
			return getenv('WP_SITEURL') . ":8080" . $path;
		}
		if (!$manifest) {
			$manifestPath =  $rootDir . $manifestDirectory . 'mix-manifest.json';
			if (!file_exists($manifestPath)) {
				throw new Exception('The Mix manifest does not exist.');
			}
			$manifest = json_decode(file_get_contents($manifestPath), true);
		}

		if (starts_with($manifest[$path], '/')) {
			$manifest[$path] = ltrim($manifest[$path], '/');
		}

		$path = $manifestDirectory . $manifest[$path];

		return get_template_directory_uri() . $path;
	}
}

if (!function_exists('assets')) {
	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string  $path
	 */
	function assets($path)
	{
		if (!$path) {
			return;
		}

		echo get_template_directory_uri() . '/assets/dist/' . $path;
	}
}

if (!function_exists('svg')) {
	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string  $path
	 */
	function svg($path)
	{
		if (!$path) {
			return;
		}

		echo get_template_part('assets/dist/svg/inline', $path . '.svg');
	}
}

/**
 * Adds custom classes to the array of the generic HTML element.
 *
 * @param array $classes Classes for the generic HTML element.
 * @return array
 */
if (!function_exists('goldengames_get_tag_classes')) {
	function goldengames_get_tag_classes($class = '')
	{
		$classes = array();

		// put other conditions/classes here
		array_push($classes, $class);

		$classes = array_map('esc_attr', $classes);

		$classes = apply_filters('tag_classes', $classes, $class);

		return array_unique($classes);
	}
}

/**
 * Displays the class names for the html element.
 *
 * @param string $classes Classes for the section element.
 * @return string
 */
if (!function_exists('tag_classes')) {
	function tag_classes($class = '')
	{
		// Separates class names with a single space, collates class names for section element.
		echo 'class="' . esc_attr(implode(' ', goldengames_get_tag_classes($class))) . '"';
	}
}
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
if (!function_exists('goldengames_body_classes')) {
	function goldengames_body_classes($classes)
	{
		// Adds a class of hfeed to non-singular pages.
		if (!is_singular()) {
			$classes[] = 'hfeed';
		}

		// Adds a class of no-sidebar when there is no sidebar present.
		if (!is_active_sidebar('sidebar-1')) {
			$classes[] = 'no-sidebar';
		}

		// Adds a class to front-page.
		if (is_front_page()) {
			// $classes = array_diff($classes, 'blog');
			unset($classes[array_search("blog", $classes)]);
			$classes[] = 'front-page';
		}


		return $classes;
	}
}
add_filter('body_class', 'goldengames_body_classes');

/**
 * Adds custom classes to the array of the #primary div element.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
if (!function_exists('goldengames_get_page_classes')) {
	function goldengames_get_page_classes($class = '')
	{
		$classes = array();

		// put other conditions/classes here
		$classes[] = 'site-page';

		array_push($classes, $class);

		if (!empty($class)) {
			if (!is_array($class)) {
				$class = preg_split('#\s+#', $class);
			}
			$classes = array_merge($classes, $class);
		} else {
			// Ensure that we always coerce class to being an array.
			$class = array();
		}

		$classes = array_map('esc_attr', $classes);

		/**
		 * Filters the list of CSS class names for the current post or page.
		 */
		$classes = apply_filters('goldengames_page_classes', $classes, $class);

		return array_unique($classes);
	}
}

/**
 * Displays the class names for the #page div element.
 *
 * @param string $classes Classes for the #page div element.
 * @return string
 */
if (!function_exists('page_classes')) {
	function page_classes($class = '')
	{
		// Separates class names with a single space, collates class names for #page div element.
		echo 'class="' . esc_attr(implode(' ', goldengames_get_page_classes($class))) . '"';
	}
}
/* add_filter('goldengames_page_classes', function ($classes) {
	$classes[] = 'some-classes';
	return $classes;
}); */

/**
 * Adds custom classes to the array of the #content-wrapper div element.
 *
 * @param array $classes Classes for the #content-wrapper div element.
 * @return array
 */
if (!function_exists('goldengames_get_content_wrapper_classes')) {
	function goldengames_get_content_wrapper_classes($class = '')
	{
		$classes = array();

		// put other conditions/classes here
		$classes[] = 'content-wrapper';

		array_push($classes, $class);

		$classes = array_map('esc_attr', $classes);

		$classes = apply_filters('goldengames_content_wrapper_classes', $classes, $class);

		return array_unique($classes);
	}
}

/**
 * Displays the class names for the #content-wrapper div element.
 *
 * @param string $classes Classes for the #content-wrapper div element.
 * @return string
 */
if (!function_exists('content_wrapper_classes')) {
	function content_wrapper_classes($class = '')
	{
		// Separates class names with a single space, collates class names for #content-wrapper div element.
		echo 'class="' . esc_attr(implode(' ', goldengames_get_content_wrapper_classes($class))) . '"';
	}
}
/* add_filter('goldengames_content_wrapper_classes', function ($classes) {
	$classes[] = 'some-classes';
	return $classes;
}); */

/**
 * Adds custom classes to the array of the #main main element.
 *
 * @param array $classes Classes for the #main main element.
 * @return array
 */
if (!function_exists('goldengames_get_main_classes')) {
	function goldengames_get_main_classes($class = '')
	{
		$classes = array();

		$classes[] = 'main';

		// put other conditions/classes here
		array_push($classes, $class);

		$classes = array_map('esc_attr', $classes);

		$classes = apply_filters('goldengames_main_classes', $classes, $class);

		return array_unique($classes);
	}
}

/**
 * Displays the class names for the #main main element.
 *
 * @param string $classes Classes for the #main main element.
 * @return string
 */
if (!function_exists('main_tag_classes')) {
	function main_tag_classes($class = '')
	{
		// Separates class names with a single space, collates class names for #main main element.
		echo 'class="' . esc_attr(implode(' ', goldengames_get_main_classes($class))) . '"';
	}
}

/* add_filter('goldengames_main_classes', function ($classes) {
	$classes[] = 'some-classes';
	return $classes;
}); */

/**
 * Adds custom classes to the array of the #secondary aside element.
 *
 * @param array $classes Classes for the #secondary aside element.
 * @return array
 */
if (!function_exists('goldengames_get_aside_classes')) {
	function goldengames_get_aside_classes($class = '')
	{
		$classes = array();

		// put other conditions/classes here
		$classes[] = 'aside-contents widget-area';

		array_push($classes, $class);

		$classes = array_map('esc_attr', $classes);

		$classes = apply_filters('goldengames_aside_classes', $classes, $class);

		return array_unique($classes);
	}
}

/**
 * Displays the class names for the #secondary aside element (sidebar).
 *
 * @param string $classes Classes for the #secondary aside element.
 * @return string
 */
if (!function_exists('aside_classes')) {
	function aside_classes($class = '')
	{
		// Separates class names with a single space, collates class names for #secondary aside element.
		echo 'class="' . esc_attr(implode(' ', goldengames_get_aside_classes($class))) . '"';
	}
}

/* add_filter('goldengames_aside_classes', function ($classes) {
	$classes[] = 'some-classes';
	return $classes;
}); */


/**
 * Adds custom classes to the array of the #primary div element.
 *
 * @param array $classes Classes for the post element.
 * @return array
 */
if (!function_exists('goldengames_get_footer_classes')) {
	function goldengames_get_footer_classes($class = '')
	{
		$classes = array();

		// put other conditions/classes here
		$classes[] = 'site-footer';

		array_push($classes, $class);

		if (!empty($class)) {
			if (!is_array($class)) {
				$class = preg_split('#\s+#', $class);
			}
			$classes = array_merge($classes, $class);
		} else {
			// Ensure that we always coerce class to being an array.
			$class = array();
		}

		$classes = array_map('esc_attr', $classes);

		/**
		 * Filters the list of CSS class names for the current post or page.
		 */
		$classes = apply_filters('goldengames_footer_classes', $classes, $class);

		return array_unique($classes);
	}
}

/**
 * Displays the class names for the #footer div element.
 *
 * @param string $classes Classes for the #footer div element.
 * @return string
 */
if (!function_exists('footer_classes')) {
	function footer_classes($class = '')
	{
		// Separates class names with a single space, collates class names for #page div element.
		echo 'class="' . esc_attr(implode(' ', goldengames_get_footer_classes($class))) . '"';
	}
}


/**
 * Generate attributes string for html tag
 *
 * @param array $attr_array array('href' => '/', 'title' => 'Test').
 *
 * @return string 'href="/" title="Test"'
 */
if (!function_exists('goldengames_attr_to_html')) {
	function goldengames_attr_to_html(array $attr_array)
	{
		$html_attr = '';

		foreach ($attr_array as $attr_name => $attr_val) {
			if (false === $attr_val) {
				continue;
			}

			$html_attr .= $attr_name . '="' . htmlspecialchars($attr_val) . '" ';
		}

		return $html_attr;
	}
}

/**
 * Generate html tag
 *
 * @param string      $tag Tag name.
 * @param array       $attr Tag attributes.
 * @param bool|string $end Append closing tag. Also accepts body content.
 *
 * @return string The tag's html
 */
if (!function_exists('goldengames_html_tag')) {
	function goldengames_html_tag($tag, $attr = [], $end = false)
	{
		$html = '<' . $tag . ' ' . goldengames_attr_to_html($attr);

		if (true === $end) {
			// <script></script>
			$html .= '></' . $tag . '>';
		} elseif (false === $end) {
			// <br/>
			$html .= '/>';
		} else {
			// <div>content</div>
			$html .= '>' . $end . '</' . $tag . '>';
		}

		return $html;
	}
}


/**
 * Generate inline styles to inject into HTML tags
 *
 * @param array $args
 * @return void
 */
if (!function_exists('goldengames_inline_styles')) {
	function goldengames_inline_styles($args = array())
	{
		$styles = array();
		if (!empty($args)) {
			foreach ($args as $key => $value) {
				if (!empty($value)) {
					$styles[] = $key . ': ' . $value . ';';
				}
			}

			$s = '';
			foreach ($styles as $style) {
				$s .= '%s ';
			}
		}
		$inline_style = '';
		if (!empty($styles)) {
			$inline_style = vsprintf('style="' . $s . '"', $styles);
		}

		return $inline_style;
	}
}

/**
 * Get attachemnt meta
 *
 *
 * @return string The tag's html
 */
function wp_get_attachment($attachment_id, $tag = '')
{
	$attachment = get_post($attachment_id);
	$attachment_array = array(
		'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
		'caption' => $attachment->post_excerpt,
		'description' => $attachment->post_content,
		'href' => get_permalink($attachment->ID),
		'src' => $attachment->guid,
		'title' => $attachment->post_title,
	);
	if ($tag) {
		return $attachment_array[$tag];
	} else {
		return $attachment_array;
	}
}
