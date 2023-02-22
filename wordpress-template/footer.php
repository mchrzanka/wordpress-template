<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wordpress_template
 */

?>

<footer id="colophon" class="site-footer">
    <div class="site-footer-content">
        <div class="footer-one">
            <?php dynamic_sidebar('footer-1'); ?>
        </div>
        <div class="middle-footer">
            <div class="footer-two">
                <?php dynamic_sidebar('footer-2'); ?>
            </div>
            <div class="footer-three">
                <?php dynamic_sidebar('footer-3'); ?>
            </div>
            <div class="footer-four">
                <?php dynamic_sidebar('footer-4'); ?>
            </div>
        </div>
        <div class="footer-five">
            <p>© <?php echo date("Y"); ?> Wordpress Template</p>
            <p><a href="https://www.mayac.ca/" target=" _blank">Website by Maya</a></p>
        </div>
    </div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>