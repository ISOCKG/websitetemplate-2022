<?php
    /*
    Template Name: About-Kyrgiz-Chapter
    */
?>
<?php get_header(); ?>
<main role="main">
  <div class="container">
    <h1 class="about__title"><?php the_title(); ?></h1>
    <div class="about__title_desc"><?php the_content(); ?></div>
    <h4 class="about__subtitle"><?php the_field('about_subtitle'); ?></h4>
    <ul class="list about__content_list">
      <?php 
        $args = array(
        'posts_per_page' => 10,
        'category_name' => 'members'
        );
        /*
        * создаем новый объект
        */
        $q = new WP_Query($args);
        /*
        * проверяем, существуют ли посты по заданным параметрам(необязательно)
        */
        if($q->have_posts()) {
        /*
        * затем запускаем цикл
        */
          while($q->have_posts()){ $q->the_post();
        /*
        * выводим например ссылку на каждый пост
        */?>
          <li class="about__content_item row">
            <div class="col-md-4 about__image">
              <?php the_post_thumbnail('full', get_the_title());?>
            </div>
            <div class="col-md-8 about__text">
              <?php the_content(); ?>
            </div>
          </li>
          
          <?php }
        } ?>
        
        <?php wp_reset_postdata(); ?>     
    </ul>
  </div>
</div>
<?php get_footer(); ?>