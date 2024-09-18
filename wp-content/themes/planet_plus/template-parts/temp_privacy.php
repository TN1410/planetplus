<?php
/**
 * Template Name: Privacy policy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header('contact');
while ( have_posts() ) : the_post();
?>
<!-- 18 is contact page id for show the logo-->
		
<section class="cont-banner-section" style="background-image: url(<?php echo CFS()->get('banner_image');?>)">
</section>

<section class="contact-section disclaimer_pg">
	<div class="wrapper">
		<div class="contact-box">
			<h1><?php echo the_title();?></h1>
			<p><?php echo the_content();?></p>
		</div>
	</div>
</section>
<?php endwhile; 
get_footer('contact');?>