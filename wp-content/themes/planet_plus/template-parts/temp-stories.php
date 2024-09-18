<?php
/**
 * Template Name: Stories
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
get_header('contact');
?>
<!-- banner section start -->
<!-- <section class="banner-section banner-zonne" style="background-image: url(<?php echo CFS()->get('banner_image');?>)">
	<div class="wrapper">
		<div class="banner-text">
			<?php echo CFS()->get('banner_text');?>
			<a href="javascript:void(0);" class="scroll-down-button" title="scroll-down" >scroll down<i class="fa fa-angle-down"></i></a>

		</div>
				
	</div>

</section> -->
<!-- banner section end -->

<!-- producten-section-start -->
<section class="producten-section" id="scroll-dw">
	<div class="wrapper" id="test">
		<ul class="cat-tag">
        <li>
        <?php $count_posts = wp_count_posts();
        $published_posts = $count_posts->publish; ?>
        <a href="<?php the_permalink(78);?>" class="filter active">All <span><?php echo $published_posts; ?></span></a>
        <?php
            //get all terms (e.g. categories or post tags), then display all posts in each term
            $taxonomy = 'category';//  e.g. post_tag, category
            $param_type = 'category__in'; //  e.g. tag__in, category__in
            $term_args=array(
              'orderby' => 'name',
              'order' => 'ASC',
              'exclude' => 1,
            );
            $terms = get_terms($taxonomy,$term_args);
            if ($terms) {
              foreach( $terms as $term ) {
                $args=array(
                  'param_type' => array($term->term_id),
                  'post_type' => 'post',
                  'post_status' => 'publish',
                  'posts_per_page' => -1,
                  );
                $my_query = null;
                $my_query = new WP_Query($args);
                $term = get_term( $term->term_id, 'category' );
                $counter=$term->count;
                $cat_id = get_query_var('cat');
                if($cat_id == $term->term_id) {
                  $addclass = "active";
                } else {
                  $addclass = "";
                }
                ?>
              <!-- <a href="#" title="Alle producten">Alle producten</a> -->
              <!-- <a data-rel="<?php echo $term->term_id; ?>" href="javascript:void(0)" class="filter"><?php echo $term->name; ?></a> -->
             <!--  <a data-rel="land" href="javascript:;" class="filter">Landscapes</a>
              <a data-rel="arch" href="javascript:;" class="filter">Architecture</a> -->      
            <?php
            if( $my_query->have_posts() ) { 
              ?>
                 <li><a  class="<?php echo $addclass; ?>" href="<?php echo get_term_link( $term ); ?>" ><?php echo $term->name; ?> <span><?php echo $counter; ?></span></a></li>
               <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>

                 <?php
                endwhile;
              }
            }
          }
          wp_reset_query();  // Restore global post data stomped by the_post().
          ?>
          </li>
            <?php 
             /*  $tags = get_tags();
               $tag = get_terms( $term->term_id, 'post_tag' );
              foreach ( $tags as $tag ) {
                  $tag_link = get_tag_link( $tag->term_id ); 
                        if($tag_id == $tag->term_id) {
                          $addclass = "active";
                        } else {
                          $addclass = "";
                        }?>
                <li> <a  class="<?php echo $addclass; ?>" href="<?php echo $tag_link; ?>">
                    <?php echo $tag->name; ?> <span><?php echo $tag->count; ?></span>
                    </a>
                </li>
                <?php } */?>
      </ul>
		<div class="producten-main">
		<?php 

			$args = array(
			    'post_type'=> 'post',
				'posts_per_page'=>'-1',			   
			    'orderby'    => 'DESC',
			    'post__not_in' => array(1),
			    );              

			$the_query = new WP_Query( $args );
	
			if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
			
			$thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-size' );					
		            if( $thumb_full[0] == "" ){
		                 $url = esc_url( get_template_directory_uri() )."/assets/images/placeholder.png";
		            } else {
		                 $url = imageResizeNewFunc($thumb_full[0],270,270);
		            }
					?>
			<div class="producten-box">
				
					<img src="<?php echo $url;?>" alt="<?php the_title();?>" />
					<div class="prod-title">
           <?php the_title(); ?>
          </div>
          <a href="<?php echo get_the_permalink();?>" title="<?php the_title_attribute(); ?>">
            bekijk in detail
           </a>
				
			</div>
			<?php endwhile;
				endif;
				wp_reset_query($the_query);
				?>
		</div>
		<!-- onze produten block end -->
		</div>
</section>
<!-- planet install section start -->
<section class="planet-ins-section planet-zonne">
	<div class="wrapper">
		<div class="contact-block">
			<?php echo CFS()->get('contact_detail');?>
		</div>
	</div>
</section>
<!-- planet install section end -->
<?php get_footer('contact');?>