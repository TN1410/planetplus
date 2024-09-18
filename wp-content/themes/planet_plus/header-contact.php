<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html >
<html <?php language_attributes(); ?>>
<head>
   
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<!-- responsive mobile menu start -->
<div class="responsive-menu res-hm" style="display: none;">
	<div class="res-logo">
	<!-- 18 is contact page id for show the logo-->
		<?php $homeId1 = get_option('page_on_front');?>
		<a href="<?php echo get_home_url() ?>" title="Planet Plus- Natural Energy"><img src="<?php echo CFS()->get('logo', $homeId1); ?>" alt="Planet Plus- Natural Energy" /></a>
		<div id="nav-icon4">
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<div class="res-nav">
		<ul>
			<?php wp_nav_menu(array(
			'theme_location' => 'responsive',
			'menu_id'        => 'responsive',
			)); ?>
		</ul>
		<!-- <ul class="menu">
					<li style="width:16px !important;">
	                   <a href="https://www.facebook.com/PlanetPlusEnergy/ " title="facebook">
	                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook-f.svg">
	                </a>
	                </li>
				</ul> -->
	</div>
	<div class="res-siteby">Site by <a href="https://www.vinix.be" target="_blank" title="Vinix.be">Vinix.be</a> </div>


</div>
<!-- responsive mobile menu end -->
<!-- header section start -->
<header class="contact-header hom">
	<div class="wrapper">
		<div class="logo-div con-menu">
		<!-- 18 is contact page id for show the logo-->
		<?php $homeId =  18;?>
		<div class="logo"><a href="<?php echo get_home_url() ?>" title="Planet Plus- Natural Energy"><img src="<?php echo CFS()->get('logo2', $homeId); ?>" alt="Planet Plus- Natural Energy" /></a></div>
		<div id="nav-icon4">
					<span></span>
					<span></span>
					<span></span>
		</div>
		<nav class="menu">
			<ul>
				<?php wp_nav_menu(array(
				'theme_location' => 'header_menu',
				'menu_id'        => 'header_menu',
				)); ?>
			</ul>
			<ul class="menu fb-link inner-black">
					<li>
	                   <a href="https://www.facebook.com/PlanetPlusEnergy/" title="facebook" target="_blank">
	                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 264 512"><path d="M76.7 512V283H0v-91h76.7v-71.7C76.7 42.4 124.3 0 193.8 0c33.3 0 61.9 2.5 70.2 3.6V85h-48.2c-37.8 0-45.1 18-45.1 44.3V192H256l-11.7 91h-73.6v229"/></svg>
	                </a>
	                </li>
				</ul>
		</nav>
		</div>
	</div>
</header>
<!-- header section end -->