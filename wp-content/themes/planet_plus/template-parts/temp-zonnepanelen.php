<?php
/**
 * Template Name: zonnepanelen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header();
?>
<!-- banner section start -->
<section class="banner-section banner-zonne banner_overlay" style="background-image: url(<?php echo CFS()->get('banner_image');?>)">
	<div class="wrapper">
		<div class="banner-text">
			<h1><?php echo CFS()->get('banner_title');?></h1>
			<p><?php echo CFS()->get('banner_text');?></p>
			
			<a href="javascript:void(0);" class="scroll-down-button" title="scroll-down" >scroll down<i class="fa fa-angle-down"></i></a>

		</div>
				
	</div>

</section>
<!-- banner section end -->


<!-- middle text section start -->
<section class="midle-section middle-zonne" id="scroll-dw">
	<div class="wrapper">
		<h1><?php echo CFS()->get('t_stitle');?></h1>
		<p class="comp-text"><?php echo CFS()->get('t_ltitle');?></p>

		<div class="platet-two-part">
			<div class="planet-left-text">
				<p><?php echo CFS()->get('t_left_sec');?></p>
			</div>
			<div class="planet-right-text nopad-space smpad">
				<?php echo CFS()->get('t_right_sec');?></p>
			</div>
		</div>
		<div class="mid-text-sec1">
			<p><?php echo CFS()->get('t_lower_sec');?></p>
		</div>
	</div>
</section>
<!-- middle text section end -->

<!-- zonnepanelen banner block start -->
<section class="zonnel-banner-section" style="background-image: url(<?php echo CFS()->get('m_bg_image');?>)">
	<div class="backimage-right-content">
		<div class="zonnel-border">
			<div class="zonnel-title"><?php echo CFS()->get('m_title');?></div>
				 <?php $warm_text = CFS()->get('m_text');?>
				<?php if($warm_text) {
					//$warm_text = wp_trim_words( $warm_text, $num_words = 37, $more = '..');
				/*$warm_text = force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( wpautop($warm_text) ), 41, $more = '..' ) ) );*/
					
				 } echo $warm_text; ?> 
			 
			<div class="zonnel-blk">
				<a href="<?php echo get_permalink('159');?>" title="MEER INFO">MEER INFO</a>
				<a href="<?php echo get_permalink('18');?>" title="of vraag een offerte">of vraag een offerte</a>
			</div>
		</div>
	</div>
</section>
<!-- zonnepanelen banner block end -->



<section class="midcont-zonne">
	<div class="wrapper">
<div class="erva-div"> <?php echo CFS()->get('l_title');?> </div>
<div class="mid-text-sec2">
			<p><?php echo CFS()->get('l_text');?></p>
</div>
</div>
</section>

<!-- block section start -->
<section class="comp-block-section comp-block-zonne">
	<div class="wrapper">
		<div class="block-container">
		<?php
		$fields = CFS()->get( 'l_service' );
		foreach ( $fields as $field ) { ?>
		<div class="block-box">
			<i class="fa fa-plus" aria-hidden="true"></i>
			<h3><?php echo $field['ls_title']; ?></h3>
			<p><?php echo $field['ls_text']; ?></p>
		</div>
		<?php } ?>
		</div>
	</div>
</section>
<!-- block section start --> 


<!-- planet install section start -->
<section class="planet-ins-section planet-zonne">
	<div class="wrapper">
		<div class="contact-block">
			<?php echo CFS()->get('l_contact');?>
		</div>
	</div>
</section>
<!-- planet install section end -->
<?php get_footer('contact');?>