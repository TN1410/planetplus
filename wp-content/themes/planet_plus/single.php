<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('contact'); 
while ( have_posts() ) : the_post(); ?>
<section class="detail-page">
	<div class="wrapper detail-box">
		<div class="post-title">
			<?php the_title(); ?>
		</div>
		<div class="story-content">
			<?php $post = get_post( $id );
				$content = apply_filters('the_content', get_the_content());
					echo $content; 
				?>
		</div>
<div class="social-category">
<div class="category-tags">		
	<?php
		$postcats = get_the_category();
		if ($postcats) { ?>
		<?php 
		   $catstrings = array();
		   foreach($postcats as $cat) {
		      $catstrings[] = '<a href="' . get_category_link($cat->term_id) . '" class="cat-link-' . $cat->term_id . '" title = "'. $cat->name .'">' . $cat->name . '</a>';
		   }
	   	echo implode(', ', $catstrings); 
	   }
	?>
</div>	
<div class="category-tags tags_div">
	<?php
		$posttags = get_the_tags();
		if ($posttags) { ?>
		<?php 
		   $tagstrings = array();
		   foreach($posttags as $tag) {
		      $tagstrings[] = '<a href="' . get_tag_link($tag->term_id) . '" class="tag-link-' . $tag->term_id . '" title = "'. $tag->name .'">' . $tag->name . '</a>';
		   }
		echo implode(', ', $tagstrings);
		}
	?>
</div>
<div class="social">
		<a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;"><i class="fa fa-facebook"></i></a>
		<a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank"><i class="fa fa-twitter"></i></a>
		<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;title=<?php the_title(); ?>&amp;url=<?php the_permalink(); ?>" title="Share on LinkedIn" rel="external nofollow" rel="nofollow" target="_blank"><i class="fa fa-linkedin"></i></a>
	</div>
</div>
</div>		
</section>
<section class="detail-boxex">
	<div class="wrapper">
		<?php 
		 
		// get the custom post type's taxonomy terms
		 
		$custom_taxterms = wp_get_object_terms( $post->ID, 'category', array('fields' => 'ids') );
		// arguments

		$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 4, // you may edit this number
		'orderby' => 'DESC',
		'tax_query' => array(
		    array(
		        'taxonomy' => 'category',
		        'field' => 'id',
		        'terms' => $custom_taxterms
		    )
		),
		'post__not_in' => array ($post->ID),
		);
		$related_items = new WP_Query( $args ); 
			if ($related_items->have_posts()) { ?>
		<div class="boxes-title">
			<h3>MEER REALISATIES</h3>
		</div>
		<div class="produc-main-box">
			<div class="prod-row">
		<?php // loop over query
		
			while ( $related_items->have_posts() ) : $related_items->the_post(); ?>
				<?php
				/*$thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-size' );					
	            if( $thumb_full[0] == "" ){
	                 $url = esc_url( get_template_directory_uri() )."/assets/images/placeholder-image-1.png";
	            } else {
	                 $url = imageResizeNewFunc($thumb_full[0],262,325);

	            }*/?>
		           
					
			<div class="pr-box producten-box">
				<!-- <a href="<?php echo the_permalink();?>" title="<?php the_title(); ?>"> -->
					 <?php
						 if (has_post_thumbnail()) {
						 	?>
					<img src="<?php if ( has_post_thumbnail() ) {
	                        $feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
	                          echo imageResizeNewFunc($feat_image_url,270,270); }?>" />
	                       <?php }else {?>
	                <img src="<?php echo esc_url( get_template_directory_uri() )."/assets/images/placeholder.png";?>" />       	
	                       	<?php } ?>
	    		<!-- </a> -->
				<div class="prod-detail prod-title">
					<div class="prod-tit">
			        	<!-- <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"> -->
			          <?php the_title(); ?>
			        	<!-- </a> -->
			        </div>
			        <a href="<?php echo get_the_permalink();?>" title="<?php the_title_attribute(); ?>">
		            bekijk in detail
		           </a>
				</div>
			</div>
			<?php
			endwhile;
			// Reset Post Data
			wp_reset_postdata();
			?>
		</div>
	</div>
	<?php } ?>
	</div>	
</section>

<!-- planet install section start -->
<section class="planet-ins-section planet-zonne">
	<div class="wrapper">
		<div class="contact-block">
			<?php echo CFS()->get('contact_detail',78);?>
		</div>
	</div>
</section>
<!-- planet install section end -->
<?php endwhile;
get_footer('contact');