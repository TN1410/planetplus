<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('contact'); ?>

<section class="detail-page">
    <div class="wrapper detail-box">

      <div class="post-title">
       <?php single_cat_title(); ?>
      </div>
      <ul class="cat-tag">
        <li>
        <?php $count_posts = wp_count_posts();
        $published_posts = $count_posts->publish; ?>
        <a href="<?php the_permalink(78);?>" class="filter">All <span><?php echo $published_posts; ?></span></a>
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
               $tags = get_tags();
               $tag = get_terms( $term->term_id, 'post_tag' );
              foreach ( $tags as $tag ) {
                  $tag_link = get_tag_link( $tag->term_id ); 
                  if($tag_id == $tag->term_id) {
                    $addclass = "active";
                  } else {
                    $addclass = "";
                  }?>
                 <li> <a  class="<?php echo $addclass; ?>" href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?> <span><?php echo $tag->count; ?></span></a>
                  <?php } ?>
          </li>
      </ul>
    
      <div class="producten-main">
      <?php $args= array(
        'post_type' => 'post',
        'post_per_page' => -1,
        'post_status' => 'publish',
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
          'relation' => 'OR',
            array(
              'taxonomy' => 'category',
              'field' => 'id',
              'terms' => get_queried_object()->term_id, // Where term_id of Term 1 is "1".
              'include_children' => false,
              'relation' => 'OR',
            ),
            array(
            'taxonomy' => 'post_tag',
            'field' => 'name',
            'terms' => single_tag_title('',false),
        ),
         )
    );
      
  $query = new WP_Query($args);
  if($query->have_posts()) :    

        while($query->have_posts()) : $query->the_post(); ?>
          <?php
          $thumb_full = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'image-size' );          
                if( $thumb_full[0] == "" ){
                     $url = esc_url( get_template_directory_uri() )."/assets/images/placeholder.png";
                } else {
                     $url = imageResizeNewFunc($thumb_full[0],270,270);

                }
          ?>
        <div class="producten-box">
          <a href="<?php echo the_permalink();?>">
            <img src="<?php echo $url;?>" alt="<?php the_title(); ?>">
            <div class="prod-title"><?php the_title(); ?></div>
          </a>
        </div>
        
      <?php
      endwhile;
      endif;
      // Reset Post Data
      wp_reset_postdata();
      ?>
 
 </div>
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
<?php get_footer('contact');