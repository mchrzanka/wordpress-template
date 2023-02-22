<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_template
 */

if (!is_active_sidebar('cat-sidebar')) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar('cat-sidebar'); ?>
</aside><!-- #secondary -->