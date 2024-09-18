<?php
/**
 * Template Name: warmtepompen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header();
?>
<!-- banner section start -->
<section class="banner-section banner-zonne no-brbanner banner_overlay" style="background-image: url(<?php echo CFS()->get('banner_image');?>)">
	<div class="wrapper">
		<div class="banner-text">
			<h1>Warmtepompen</h1>
			<p><?php echo CFS()->get('banner_text');?></p>
			
			<a href="javascript:void(0);" class="scroll-down-button" title="scroll-down" >scroll down<i class="fa fa-angle-down"></i></a>

		</div>
				
	</div>

</section>
<!-- banner section end -->


<!-- middle text section start -->
<section class="midle-section middle-zonne" id="scroll-dw">
	<div class="wrapper">
		<h1><?php echo CFS()->get('s_title');?></h1>
		<p class="comp-text"><?php echo CFS()->get('l_title');?></p>

		<div class="platet-two-part warm-block">
			<div class="planet-left-text">
				<p><?php echo CFS()->get('left_sec');?></p>
			</div>
			<div class="planet-right-text">
				<p><?php echo CFS()->get('right_sec');?></p>
			</div>
		</div>
		<div class="mid-text-sec1 warm-midtext">
			<p><?php echo CFS()->get('lower_sec');?></p>
		</div>
	</div>
</section>
<!-- middle text section end -->
<section class="midcont-zonne warm">
	<div class="wrapper">
		<div class="erva-div"><p><?php echo CFS()->get('m_title');?></p></div>
		<div class="mid-text-sec2">
			<p><?php echo CFS()->get('m_text');?></p>
			
		</div>
	</div>
</section>

<!-- block section start -->
<section class="comp-block-section comp-block-zonne wrmte">
	<div class="wrapper">
		<div class="block-container">
		<?php
		$fields = CFS()->get( 'service' );
		foreach ( $fields as $field ) { ?>
		<div class="block-box">
			<i class="fa fa-plus" aria-hidden="true"></i>
			<h3><?php echo $field['s_title']; ?></h3>
			<p><?php echo $field['s_text']; ?>
			</p>
		</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- block section start --> 


<!-- planet install section start -->
<section class="planet-ins-section planet-zonne wrm-sect">
	<div class="wrapper">
		<div class="contact-block">
			<?php echo CFS()->get('contact_section');?>
		</div>
	</div>
</section>
<!-- planet install section end -->
<?php get_footer('contact');?>