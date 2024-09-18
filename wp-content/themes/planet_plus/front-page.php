<?php
/**
 * Template Name: Home
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header();
?>
<!-- banner section start -->
<section class="banner-section" style="background-image: url(<?php echo CFS()->get('banner_image');?>)">
	<div class="wrapper">
		<div class="banner-text">
			<h2><?php echo CFS()->get('banner_title');?></h2>
			<p><?php echo CFS()->get('banner_text');?></p>

			<div class="banner-btns-div">
				<span>ik heb interesse in</span>
				<a href="<?php echo get_permalink('12');?>" class="bnerlink-btn1" title="ZONNEPANELEN"><?php echo CFS()-> get('banner_button_1'); ?></a>
				<a href="<?php echo get_permalink('159');?>" class="bnerlink-btn1" title="THUISBATTERIJ"><?php echo CFS()-> get('banner_button_2'); ?></a>
				<a href="<?php echo get_permalink('185');?>" class="bnerlink-btn1" title="LAADPALEN"><?php echo CFS()-> get('banner_button_3'); ?></a>
			</div>
			<a href="javascript:void(0);" class="scroll-down-button" title="scroll-down" >scroll down<i class="fa fa-angle-down"></i></a>

		</div>
				
	</div>

</section>
<!-- banner section end -->


<!-- middle text section start -->
<section class="midle-section" id="scroll-dw">
	<div class="wrapper">
		<h1><?php echo CFS()->get('tm_title');?></h1>
		<p class="comp-text"><?php echo CFS()->get('tm_text');?></p>

		<div class="platet-two-part">
			<div class="planet-left-text">
				<p><?php echo CFS()->get('tm_left_sec');?></p>
			</div>
			<div class="planet-right-text">
				<p><?php echo CFS()->get('tm_right_sec');?></p>
			</div>
		</div>
		<div class="mid-text-sec1">
			<p><?php echo CFS()->get('tm_middel');?></p>
		</div>
		<div class="erva-div"><?php echo CFS()->get('m_title');?></div>
		<div class="mid-text-sec2">
			<p><?php echo CFS()->get('m_text');?></p>
		</div>
		
	</div>
</section>
<!-- middle text section end -->

<!-- block section start -->
<section class="comp-block-section">
	<div class="wrapper">
		<div class="block-container">
		<?php
		$fields = CFS()->get( 'm_service_loop' );
		foreach ( $fields as $field ) { ?>
		<div class="block-box">
			<!-- <i class="fa fa-plus" aria-hidden="true"></i> -->
			<h3><?php echo $field['m_service_title']; ?></h3>
			<p><?php echo $field['m_service_text']; ?></p>
		</div>
		<?php } ?>

		</div>
	</div>
</section>
<!-- block section end --> 
<!-- Testimonials Start -->

<section class="testimonials-section">
	<div class="testimonial_wrapper">
		<div class="container">
			<div class="testimonial_inner owl-carousel owl-theme">
				<?php
				$test_fields = CFS()->get( 'testimonials_content' );
				foreach ( $test_fields as $testi_fields ) { ?>
				<div class="item">
					<div class="testi_content">
						<p><?php echo $testi_fields['test_content']; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>
			
		</div>
	</div>

</section>
<section class="stat_logo_img">
	<div class="container">
		<div class="url_wrap">
    <?php 
    	$survey_money_img = CFS()->get('surver_monkey_img');
        $survey_money = CFS()->get('survey_money');
        if(!empty($survey_money) && !empty($survey_money_img))  {?>
    <a href="<?php echo esc_url($survey_money['url']);?>" target="<?php echo esc_attr($survey_money['target']);?>" class="survey_url">
        <?php echo esc_html($survey_money['text']);?>
    <span class="surver_monkey_img"><img src="<?php echo $survey_money_img?>" class="survey_img"></span></a>
     <?php }?>
</div>
	</div>
</section>
<!-- Testimonials Section End -->
<!-- planet install section start -->
<section class="planet-ins-section">
	<div class="wrapper">
		<div class="erva-div"><?php echo CFS()->get('lm_title');?></div>
		<div class="planet-desc"><?php echo CFS()->get('lm_text');?>
		</div>
	</div>
	<div class="planet-sec-div">
		<div class="pln-left-block">
			<div class="planet-box1">
				<div class="pln-title">ZONNEPANELEN</div>
				<div class="pln-sml-desc">
				
					<?php $zonn_text = CFS()->get('lm_left_sec');?>
					<?php if($zonn_text) {
							$zonn_text = wp_trim_words( $zonn_text, $num_words = 33, $more = '..');
							echo $zonn_text;	
					 }?>
				</div>
				<a href="<?php echo get_permalink('12');?>" title="MEER INFO" class="button-pln-link">MEER INFO</a>
				<span class="sml-txt"><a href="<?php echo get_permalink('18');?>" title="of vraag een offerte">of vraag een offerte</a></span>

			</div>

		</div>
		<div class="pln-right-block">
			<div class="planet-box2">
				<div class="pln-title">THUISBATTERIJ</div>
				<div class="pln-sml-desc">
					<?php $warm_text = CFS()->get('lm_right_sec');?>
					<?php if($warm_text) {
							$warm_text = wp_trim_words( $warm_text, $num_words = 38, $more = '..');
							echo $warm_text;	
					 }?>
				</div>
				<a href="<?php echo get_permalink('159');?>" title="MEER INFO" class="button-pln-link">MEER INFO</a>
				<span class="sml-txt"><a href="<?php echo get_permalink('18');?>" title="of vraag een offerte">of vraag een offerte</a></span>

			</div>

		</div>

			<div class="pln-left-block">
			<div class="planet-box1">
				<div class="pln-title">LAADPALEN</div>
				<div class="pln-sml-desc">
				
					<?php $lm_last_sec = CFS()->get('lm_last_sec');?>
					<?php if($lm_last_sec) {
							$lm_last_sec = wp_trim_words( $lm_last_sec, $num_words = 33, $more = '..');
							echo $lm_last_sec;	
					 }?>
				</div>
				<a href="<?php echo get_permalink('185');?>" title="MEER INFO" class="button-pln-link">MEER INFO</a>
				<span class="sml-txt"><a href="<?php echo get_permalink('18');?>" title="of vraag een offerte">of vraag een offerte</a></span>

			</div>

		</div>

		</div>


	</div>

	<div class="wrapper">
		<div class="contact-block">
			<?php echo CFS()->get('lm_contact_sec');?>
		</div>
	</div>
</section>
<!-- planet install section end -->
<?php get_footer();?>