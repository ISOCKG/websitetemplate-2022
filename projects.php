<?php
    /*
    Template Name: Projects
    */
?>
<?php get_header(); ?>
<main role="main">
  <div class="container">
    <h1 class="projects_page__title col-12"><?php the_title(); ?></h1>
    <ul class="list projects__list row">
      <?php 
        $args = array(
          'posts_per_page' => 10,
          'category_name' => 'projects'
        );
        $q = new WP_Query($args);
        if($q->have_posts()) {
          while($q->have_posts()){ $q->the_post(); ?>
      <li class="projects__item col-md-4">
        <div class="projects__image">
          <?php the_post_thumbnail('full');?>
        </div>
        <div class="project__content">
          <h3 class="project__title"><?php the_title(); ?></h3>
          <div class="project__status">
            <span class="project__info">Начало: <?php the_field('project_start')?></span>
            <span class="project__info">Статус: <?php the_field('project_status')?></span>
          </div>
          <div class="project__desc">
            <?php the_excerpt(); ?>
          </div>
        </div>
        <div class="manager__info">
          <div class="project__manager">
            <img src="<?php the_field('manager_image')?>" alt="<?php the_field('manager_name');?>">
          </div>
          <div class="project__manager_info">
            <h5 class="project__manager_name">Project managed by <?php the_field('manager_name'); ?></h5>
            <ul class="list project__contact_list">
              <li class="project__contact_item">
                <?php the_field('manager_phone'); ?>
              </li>
              <li class="project__contact_item">
                <?php the_field('manager_email'); ?>
              </li>
              <li class="project__contact_item">
                <a href="<?php the_field('manager_linkidin'); ?>" class="project__contact_link">linkidin</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="project__link_wrap">
          <a href="<?php  the_permalink() ;?>" class="link project__link_btn">Подробнее о проекте</a>       
        </div>         
      </li>
      <?php }
      } ?>
        
      <?php wp_reset_postdata(); ?>           
    </ul>
  </div>
</div>


<?php get_footer(); ?>