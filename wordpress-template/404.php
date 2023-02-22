<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wordpress_template
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'wordpress-template'); ?></h1>
		</header><!-- .page-header -->

		<div class="page-content">
			<p><?php esc_html_e('Try the search bar!'); ?></p>
		</div>

		</div><!-- .page-content -->
	</section><!-- .error-404 -->

</main><!-- #main -->

<?php
get_footer();
