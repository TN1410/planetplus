<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */

?>

<footer>
	<?php $privacy = CFS()->get('footer_privacy_link',$homeId);
      $disclaimer = CFS()->get('footer_disclaimer_link',$homeId);
      $link = CFS()->get('vinix_site_link',$homeId); ?>
	<div class="wrapper"><p>Copyright © <?php echo date('Y');//echo CFS()->get('footer_copyright_text',$homeId); ?> PlanetPlus bvba. <a href="<?php echo $privacy['url']; ?>" title="<?php echo $privacy['title'];?>" target="<?php echo $privacy['target'];?>"><?php echo $privacy['text'];?>.</a> <a href="<?php echo $disclaimer['url']; ?>" title="<?php echo $disclaimer['title'];?>" target="<?php echo $disclaimer['target'];?>"><?php echo $disclaimer['text'];?>.</a> Site by <a href="<?php echo $link['url']; ?>" title="<?php echo $link['title'];?>" target="<?php echo $link['target'];?>"><?php echo $link['text'];?>.</a></p>
  </div>
</footer>
<!-- footer section end -->

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>


<?php wp_footer(); ?>

</body>
</html>
