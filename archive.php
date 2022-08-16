<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package punk
 */

get_header();
?>

<main role="main">
	<!--<div class="">
       <?php echo do_shortcode('[smartslider3 slider=2]'); ?>
    </div>-->
  
	<div class="container mb-4">
      	<h3 class="h1-blue mt-5 mb-2">The latest news</h3>
      	<hr class="hr mb-5">
        <div class="row">
          <?php while (have_posts()) : the_post(); ?>
	          <div class="col-md-4">
	              <div class="card mb-4 image-hover">
	              	<a href="<?php the_permalink(); ?>">
		                <?php 
							if ( function_exists( 'add_theme_support' ) )
							the_post_thumbnail( array(370,9999), array('class' => 'card-img-top img-fluid') ); 
						?>
		                <div class="card-body">
		                  <h5 class="h5 mt-4"><?php the_title(); ?></h5>
		                  <p class="text-muted"><?php echo get_the_date('d.m.Y'); ?></p>
		                  <p class="card-text"><?php the_excerpt(); ?></p>
		                </div>
	                </a>
	              </div>
	           </div>
	      <?php endwhile; ?>
	      <div class="container">
				<div class="row text-center">
				   <div class="col">
				  	<?php the_posts_pagination( array (
						'mid_size' => 5,
						'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
						'prev_text'    => __('«'),
						'next_text'    => __('»'),
						'type'         => 'list',
						'screen_reader_text' => __( '' ),
					)); ?>
				   </div>
				</div>
			</div>
        </div>
      </div>

</main>
<?php
get_sidebar();
get_footer();
