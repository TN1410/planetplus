<?php
/**
 * Template Name: laaspalen
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header();
?>
<!-- banner section start -->
<?php 

$banner_title = CFS()->get('banner_title');
$banner_text = CFS()->get('banner_text');

$t_stitle = CFS()->get('t_stitle');
$t_ltitle = CFS()->get('t_ltitle');

$t_left_sec = CFS()->get('t_left_sec');

$t_right_sec = CFS()->get('t_right_sec');
$t_lower_sec = CFS()->get('t_lower_sec');

$benefits_content = CFS()->get('benefits_content');

$m_title = CFS()->get('m_title');

$l_title = CFS()->get('l_title');
$l_text = CFS()->get('l_text');

$l_contact = CFS()->get('l_contact');

$m_bg_image = CFS()->get('m_bg_image');

$the_benefits_main_title = CFS()->get('the_benefits_main_title');

$benefits_more_content = CFS()->get('benefits_more_content');



?>
<section class="banner-section banner-zonne banner_overlay" style="background-image: url(<?php echo CFS()->get('banner_image');?>)">
	<div class="wrapper">
		<div class="banner-text">
			<?php if($banner_title){?>
			<h1><?php echo $banner_title;?></h1>
		<?php } ?>
		<?php if($banner_text){?>
			<p><?php echo $banner_text;?></p>
		<?php } ?>
			
			<a href="javascript:void(0);" class="scroll-down-button" title="scroll-down" >scroll down<i class="fa fa-angle-down"></i></a>

		</div>
				
	</div>

</section>
<!-- banner section end -->


<!-- middle text section start -->
<section class="midle-section middle-zonne" id="scroll-dw">
	<div class="wrapper">
		<?php if($t_stitle){?>
		<h1><?php echo $t_stitle;?></h1>
	<?php } ?>
	<?php if($t_ltitle){?>
		<p class="comp-text"><?php echo $t_ltitle;?></p>
	<?php } ?>

		<div class="platet-two-part">
			<?php if($t_left_sec){?>
			<div class="planet-left-text">
				<p><?php echo $t_left_sec;?></p>
			</div>
		<?php } ?>
		<?php if($t_right_sec){?>
			<div class="planet-right-text nopad-space smpad">
				<?php echo $t_right_sec;?></p>
			</div>
		<?php } ?>
		</div>
		<?php if($t_lower_sec){?>
		<div class="mid-text-sec1">
			<p><?php echo $t_lower_sec;?></p>
		</div>
	<?php } ?>
	</div>
</section>
<!-- middle text section end -->

<!--  -->
<?php if($the_benefits_main_title){?>
<section class="comp-block-section comp-block-zonne icon_boxes" id="section_divider">
	<div class="wrapper">
		<div class="mid-text-sec2">
			<p><?php echo $the_benefits_main_title;?></p>
		</div>
	</div>
</section>
<?php } ?>
<!--  -->
<!-- disc_boxes new section start-->
<section class="comp-block-section comp-block-zonne disc_boxes">
	<div class="wrapper">
		<div class="block-container">
			<?php $the_benefits_title = CFS()->get('the_benefits_title');
			if($the_benefits_title){
				foreach ($the_benefits_title as $key => $var) {
			?>
			<div class="block-box">
				<h3><?php echo $var['benefits_title'];?></h3>
				<p><?php echo $var['benefits_content'];?></p>
			</div>
		<?php } } ?>
			<!-- <div class="block-box">
				<h3>Verminder je elektriciteitskosten</h3>
				<p>Zonne-elektriciteit is tweederde goedkoper dan elektriciteit uit het stopcontact. Met een PV-systeem en thuisopslag kan je je elektriciteitsrekening tot 80% verlagen!</p>
			</div>
			<div class="block-box">
				<h3>Comfort</h3>
				<p>De thuisbatterij levert energie wanneer de zon niet schijnt en beschermt tegen stroomuitval met een optionele noodstroomvoorziening. Dit zorgt ervoor dat de verwarming blijft werken, bevroren goederen niet ontdooien of dat je niet in het donker komt te zitten.</p>
			</div> -->
		</div>
		<?php if($benefits_more_content){?>
		<div class="mid-text-sec1">
			<p><?php echo $benefits_more_content;?></p>
		</div>
	<?php } ?>
	</div>
</section>
<!-- disc_boxes new section end -->
<!--  -->

<!-- zonnepanelen banner block start -->
<section class="zonnel-banner-section" style="background-image: url(<?php echo $m_bg_image;?>)">
	<div class="backimage-right-content">
		<div class="zonnel-border">
			<?php if($m_title){?>
			<div class="zonnel-title"><?php echo $m_title;?></div>
		<?php } ?>
				 <?php $warm_text = CFS()->get('m_text');?>
				<?php if($warm_text) {
					//$warm_text = wp_trim_words( $warm_text, $num_words = 37, $more = '..');
				/*$warm_text = force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( wpautop($warm_text) ), 41, $more = '..' ) ) );*/
				 } 
					echo $warm_text;?>
			 
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
		<?php if($l_title){?>
<div class="erva-div"> <?php echo $l_title;?> </div>
<?php } ?>
<?php if($l_text){?>
<div class="mid-text-sec2">
			<p><?php echo $l_text;?></p>
</div>
<?php } ?>
</div>
</section>

<!-- block section start -->
<section class="comp-block-section comp-block-zonne">
	<div class="wrapper">
		<div class="block-container">
		<?php
		$fields = CFS()->get( 'l_service' );
		if($fields){

		foreach ( $fields as $field ) { ?>
		<div class="block-box">
			<i class="fa fa-plus" aria-hidden="true"></i>
			<h3><?php echo $field['ls_title']; ?></h3>
			<p><?php echo $field['ls_text']; ?></p>
		</div>

		<?php } } ?>
		</div>
	</div>
</section>
<!-- block section start --> 


<!-- planet install section start -->
<section class="planet-ins-section planet-zonne">
	<div class="wrapper">
		<?php if($l_contact){?>
		<div class="contact-block">
			<?php echo $l_contact;?>
		</div>
	<?php } ?>
	</div>
</section>
<!-- planet install section end -->
<?php get_footer('contact');?>