<?php
  /**
  * Template Name: Landing page 
  */
get_header(); ?>

<main role="main">
  <!-- Main jumbotron -->
  <div class="">
   <!-- <?php echo do_shortcode('[smartslider3 slider=2]'); ?> -->
    <div class="main__image">
      <img src="<?php echo get_template_directory_uri(); ?>/images/main__bg.png" class="" alt="main__bg.png">
        <div class="main__banner_text">
          <h3 class="main__banner_title"><?php the_field('home_banner_title'); ?></h3>
          <p><?php the_field('home_banner_text'); ?></p>
        </div>
    </div>
  </div>
  <div class="container">
  	<div class="main__container_1 text-center col-md-6 offset-3">
	  	<h4 class="main__block_title"><?php the_field('first_section_title'); ?></h4>
	  	<span class="main__block_subtitle"><?php the_field('first_section_subtitle'); ?></span>
  	</div>
  	<div class="row">
  		<div class="col-md-4 mt-4 text-center">
        <div class="main__features d-flex align-items-center justify-content-center">
          <p><?php the_field('first_block#1'); ?></p>
        </div>
      </div>
  		<div class="col-md-4 mt-4 text-center">
        <div class="main__features d-flex align-items-center justify-content-center">
          <p><?php the_field('first_block#2'); ?></p>
        </div>
      </div>
  		<div class="col-md-4 mt-4 text-center">
        <div class="main__features d-flex align-items-center justify-content-center">
          <p><?php the_field('first_block#3'); ?></p>
        </div>
      </div>
	  </div>
  </div>
  <div class="container mb-4">
    <h3 class="h1-blue mt-5 mb-4">
      <a class="text-dark title__link" href="<?php echo get_category_link(82);?>"><?php echo get_cat_name(82);?>
      </a>
    </h3>
    <div class="row">
      <?php
          if(have_posts()) : query_posts("showposts=3&cat=82");
          while(have_posts()) : the_post();
        ?>
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
        <?php
          endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>
  <div class="container mb-4">
    <h3 class="h1-blue mt-5 mb-4">
      <a class="text-dark title__link" href="<?php echo get_category_link(68);?>"><?php echo get_cat_name(68);?>
      </a>
    </h3>
    <div class="row">
      <?php
          if(have_posts()) : query_posts("showposts=3&cat=68");
          while(have_posts()) : the_post();
        ?>
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
        <?php
          endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>
  <div class="container mb-4">
    <h3 class="h1-blue mt-5 mb-4">
      <a class="text-dark title__link" href="<?php echo get_category_link(80);?>"><?php echo get_cat_name(80);?>
      </a>
    </h3>
    <div class="row">
      <?php
          if(have_posts()) : query_posts("showposts=3&cat=80");
          while(have_posts()) : the_post();
        ?>
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
        <?php
          endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>
  <div class="container mb-4">
    <h3 class="h1-blue mt-5 mb-4">
      <a class="text-dark title__link" href="<?php echo get_category_link(62);?>"><?php echo get_cat_name(62);?>
      </a>
    </h3>
    <div class="row">
      <?php
          if(have_posts()) : query_posts("showposts=3&cat=62");
          while(have_posts()) : the_post();
        ?>
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
        <?php
          endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>
  <div class="container mb-4">
    <h3 class="h1-blue mt-5 mb-4">
      <a class="text-dark title__link" href="<?php echo get_category_link(71);?>"><?php echo get_cat_name(71);?>
      </a>
    </h3>
    <div class="row">
      <?php
          if(have_posts()) : query_posts("showposts=3&cat=71");
          while(have_posts()) : the_post();
        ?>
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
        <?php
          endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>
  <div class="container mb-4">
    <h3 class="h1-blue mt-5 mb-4">
      <a class="text-dark title__link" href="<?php echo get_category_link(81);?>"><?php echo get_cat_name(81);?>
      </a>
    </h3>
    <div class="row">
      <?php
          if(have_posts()) : query_posts("showposts=3&cat=81");
          while(have_posts()) : the_post();
        ?>
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
        <?php
          endwhile;
          endif;
          wp_reset_query();
        ?>
    </div>
  </div>
  
  <div class="container mb-4">
    <div class="row">
      <div class="col-md-7">
        <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/main__join_big.png" alt="">
        <div class="row mt-4">
          <div class="col-7">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/main__join_small-left.png" alt="">
          </div>
          <div class="col-5">
            <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/images/main__join_small-right.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-5 text-center bg-white">
        <h4 class="join__title"><?php the_field('join__block_title'); ?></h4>
        <div class="join__text">
          <p>
            <?php the_field('join__block_text'); ?> 
          </p>
        </div>
        <div class="col-md-12 text-center mt-5">
          <a href="https://portal.isoc.org/join" class="btn btn__join btn-lg btn-outline-primary rounded-pill" target="_blank"><?php the_field('join_text_all'); ?></a>
        </div>
      </div>
    </div>
  </div>

  <section class="presentations py-3">
    <div class="container mb-4">
      <h3 class="h1-white mt-5 mb-4"><?php the_field('presentation_text'); ?> > </h3>
      <hr class="hr2 mb-5">
      <div class="row">
        <div class="col-md-4"><?php the_field('presentation_1'); ?></div>
        <div class="col-md-4"><?php the_field('presentation_2'); ?></div>
        <div class="col-md-4"><?php the_field('presentation_3'); ?></div>
      </div>
    </div>
  </section>
	  
  <section class="about-chapter py-5">
    <div class="container mb-4">
      <h3 class="h1-blue mt-5 mb-2"><?php the_field('about_text'); ?></h3>
      <hr class="hr mb-5">
      <div class="row">
        <div class="col-md-12">
            <?php the_field('about_text_all'); ?>
          </div>
      </div>
    </div>
  </section>

</main>
     
<?php get_footer(); ?>