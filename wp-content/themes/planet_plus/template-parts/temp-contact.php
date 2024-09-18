<?php
/**
 * Template Name: contact
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header('contact');
while ( have_posts() ) : the_post();
?>
<section class="cont-banner-section" style="background-image: url(<?php echo CFS()->get('banner_img');?>)">
</section>
<section class="contact-section">
	<div class="wrapper">
		<div class="contact-box">
			<h1><?php echo the_title(); ?></h1>
			<p><?php echo the_content(); ?></p>
			<div class="cont-bx">
				<div class="left-cont-box">
					<?php echo do_shortcode( '[contact-form-7 id="5" title="Contact form 1"]' ); ?>
				</div>

				<div class="right-cont-box" id="side">
					<div class="theiaStickySidebar">
						<div class="contact-information">
							<h2><?php echo CFS()->get('title');?></h2>
							<p><?php echo CFS()->get('address');?>
							</p>
						</div>
						<div class="contact-info-text">
							<?php echo CFS()->get('text');?>
						</div>
						<div class="survey_rate">
						    <?php 
						        $survey_monkey_img = CFS()->get('survey_monkey_img');
						        $survey_monkey_url = CFS()->get('survey_monkey_url');
						        if (!empty($survey_monkey_url) && !empty($survey_monkey_img)) {
						    ?>
						        <a href="<?php echo esc_url($survey_monkey_url['url']); ?>" target="<?php echo esc_attr($survey_monkey_url['target']); ?>" class="rating_wrapper" >
						            <img src="<?php echo esc_url($survey_monkey_img); ?>" class="rating_img" >
						        </a>
						    <?php 
						        }
						    ?>
						</div>
					</div>

				</div>


			</div>
		</div>
	</div>
</section>
<?php endwhile;
get_footer('contact');?>