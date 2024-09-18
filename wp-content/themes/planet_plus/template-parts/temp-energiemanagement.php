<?php
/**
 * Template Name: Energiemanagement
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
// get_header();
get_header('contact');
?>
<!-- banner section start -->
<div class="body_section cms-pages">
	<section class="cms_page_section ">
		<div class="container">
			<h1><?php echo CFS()->get('title');?></h1>
			<div class="image-content-system" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
				<div class="image-system">
					<img src="<?php echo CFS()->get('left_image'); ?>" alt="image-system">
				</div>
				<div class="text-system">
					<?php echo CFS()->get('right_description');?>
				</div>
			</div>
		</div>
	</section>
	<section class="enrgy-managment" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="enrgy-managment-inner">
				<h3><?php echo CFS()->get('middle_section_titile');?></h3>
				<div class="text-enrgy-managment">
					<div class="left-enrgy-managment">
						<p><?php echo CFS()->get('middle_section_left_content');?></p>
					</div>
					<div class="right-enrgy-managment">
						<p><?php echo CFS()->get('middle_section_right_content');?></p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="content_scroller-quote" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="content_scroller-quote-inner">
				<h2 class="quote-text"><?php echo CFS()->get('content_quote');?></h2>
			</div>
		</div>
	</section>
	<section class="cms-image-group" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="cms-image-group-inner">
				<div class="image-group image-group-1">
					<img src="<?php echo CFS()->get('middle_section_left_image'); ?>" alt="image-group">
				</div>
				<div class="image-group image-group-2">
					<img src="<?php echo CFS()->get('middle_section_right_image'); ?>" alt="image-group">
				</div>
			</div>
		</div>
	</section>
	<section class="ons-ems" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="ons-ems-inner">	
				<h3><?php echo CFS()->get('benefits_main_title');?></h3>
				<div class="text-ems-ons">
						<?php $benefits_title_section = CFS()->get('benefits_title_section');
						foreach ($benefits_title_section as $key => $var) {
							?>
							<div class="comman-ems-ons">
								<h4><?php echo $var['benefits_title'];?></h4>
								<p><?php echo $var['benefits_content'];?></p>
							</div>
						<?php } ?>
					</div>
				
			</div>
		</div>
	</section>
	<section class="met-enrgy-managment" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="met-enrgy-managment-inner">
				<h3><?php echo CFS()->get('our_energy_section_main_title');?></h3>
				<p><?php echo CFS()->get('our_energy_section_content');?></p>
				<a href="<?php echo get_permalink('18');?>">Contacteer ons voor meer informatie</a>
			</div>
		</div>
	</section>
	<section class="maak-een" data-aos="fade-up"  data-aos-duration="1500" data-aos-easing="ease-in-sine">
		<div class="container">
			<div class="maak-een-inner">
				<div class="image-maak-een">
					<img src="<?php echo CFS()->get('left_section_image'); ?>" alt="image-maak-een">
				</div>
				<div class="text-maak-een">
					<h3><a href="<?php echo get_permalink('18');?>"><?php echo CFS()->get('make_an_appointment_text');?> <span><i class="fal fa-arrow-right"></i></span></a></h3>
					<p><?php echo CFS()->get('make_an_appointment_content');?></p>
				</div>
			</div>
		</div>
	</section>
	</div>
	<!-- planet install section end -->
	<?php get_footer('contact');?>