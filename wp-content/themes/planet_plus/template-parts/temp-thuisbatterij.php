<?php
/**
 * Template Name: thuisbatterij
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
			<h1>Thuisbatterij</h1>
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
				<p><?php echo CFS()->get('t_right_sec');?></p>
			</div>
		</div>
		<!-- <div class="mid-text-sec1">
			<p><?php //echo CFS()->get('t_lower_sec');?></p>
		</div> -->
	</div>
</section>
<!-- middle text section end -->

<!-- icon box section start -->
<section class="comp-block-section comp-block-zonne icon_boxes">
	<div class="wrapper">
		<div class="block-container">
			<?php $image = CFS()->get( 'image' );
			foreach ( $image as $val ) {?>
			<div class="block-box">
				<img src="<?php echo $val['t_image'];?>" alt="Image 1">
				<h3><?php echo $val['image_title'];?></h3>
				<p><?php echo $val['image_sub_title'];?></p>
			</div>
		<?php } ?>
			<!-- <div class="block-box">
				<img src="https://www.planetplus.be/wp-content/uploads/2021/03/image2.png" alt="Image 1">
				<h3><span>30%</span>&nbsp;&nbsp;onafhankelijk</h3>
				<p>Geen fotovoltaïsch systeem (PV), normaal elektriciteitsverbruik</p>
			</div>
			<div class="block-box">
				<img src="https://www.planetplus.be/wp-content/uploads/2021/03/image3.png" alt="Image 1">
				<h3><span>80%</span>&nbsp;&nbsp;onafhankelijk</h3>
				<p>Geen fotovoltaïsch systeem (PV), normaal elektriciteitsverbruik</p>
			</div> -->
		</div>
		<div class="mid-text-sec1">
			<p><?php echo CFS()->get('t_lower_sec');?></p>
		</div>
		<div class="mid-text-sec2">
			<p><?php echo CFS()->get('benefits_main_title');?></p>
		</div>
	</div>
</section>
<!-- iconbox section ends -->

<!-- disc_boxes new section start-->
<section class="comp-block-section comp-block-zonne disc_boxes">
	<div class="wrapper">
		<div class="block-container">
			<?php $benefits_title_section = CFS()->get('benefits_title_section');
				foreach ($benefits_title_section as $key => $var) {
			?>
			<div class="block-box">
				<h3><?php echo $var['benefits_title'];?></h3>
				<p><?php echo $var['benefits_content'];?></p>
			</div>
		<?php } ?>
			<!-- <div class="block-box">
				<h3>Verminder je elektriciteitskosten</h3>
				<p>Zonne-elektriciteit is tweederde goedkoper dan elektriciteit uit het stopcontact. Met een PV-systeem en thuisopslag kan je je elektriciteitsrekening tot 80% verlagen!</p>
			</div>
			<div class="block-box">
				<h3>Comfort</h3>
				<p>De thuisbatterij levert energie wanneer de zon niet schijnt en beschermt tegen stroomuitval met een optionele noodstroomvoorziening. Dit zorgt ervoor dat de verwarming blijft werken, bevroren goederen niet ontdooien of dat je niet in het donker komt te zitten.</p>
			</div> -->
		</div>

		<div class="mid-text-sec1">
			<p><?php echo CFS()->get('benefits_more_content');?></p>
		</div>
	</div>
</section>
<!-- disc_boxes new section end -->

<!-- zonnepanelen banner block start -->
<section class="zonnel-banner-section" style="background-image: url(<?php echo CFS()->get('m_bg_image');?>)">
	<div class="backimage-right-content">
		<div class="zonnel-border">
			<div class="zonnel-title"><?php echo CFS()->get('m_title');?></div>
				 <?php $warm_text = CFS()->get('m_text');?>
				<?php if($warm_text) {
					//$warm_text = wp_trim_words( $warm_text, $num_words = 37, $more = '..');
				/*$warm_text = force_balance_tags( html_entity_decode( wp_trim_words( htmlentities( wpautop($warm_text) ), 41, $more = '..' ) ) );*/
					
				 } echo $warm_text;?> 
			 
			<div class="zonnel-blk">
				<a href="<?php echo get_permalink('12');?>" title="MEER INFO">MEER INFO</a>
				<a href="<?php echo get_permalink('18');?>" title="of vraag een offerte">of vraag een offerte</a>
			</div>
		</div>
	</div>
</section>
<!-- zonnepanelen banner block end -->


<section class="two_block_section">
	<div class="wrapper">
		<div class="two_blocks">
			<div class="single_block image_block" style="background-image: url(<?php echo CFS()->get('enjoy_a_premium_background_image');?>)">
				 
			</div>
			<div class="single_block text_block">
				<h3><?php echo CFS()->get('enjoy_a_premium_main_title');?></h3>
				<?php echo CFS()->get('enjoy_a_premium_content');?>
				<ul>
					<?php $enjoy_a_premium_more_content = CFS()->get('enjoy_a_premium_more_content');
					foreach ($enjoy_a_premium_more_content as $key => $tel) {
						# code...
					
					 ?>
				 <li><?php echo $tel['text_content'];?></li>
				<?php } ?>
				 <!-- <li>Het gaat om milieuvriendelijke batterijen, die aangesloten zijn op het net volgens het nieuwe nettarief en voldoen aan bepaalde normen.</li>
				 <li>De installatie moet gebeuren door een elektrotechnisch installateur.</li> -->
				</ul> 
			</div>
		</div>
	</div>
</section>


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