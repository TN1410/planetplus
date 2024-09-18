<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('contact'); ?>

<section class="cont-banner-section" style="background-image: url(http://192.168.1.134/planet_plus/wp-content/uploads/2017/07/contact-banner.png)">
</section>

<section class="contact-section disclaimer_pg">
	<div class="wrapper">
		<div class="contact-box">
			<h1>404 Page Not Found</h1>
			<p><a href="<?php echo get_home_url() ?>">Back to Home</a></p>
		</div>
	</div>
</section>

<?php get_footer();
