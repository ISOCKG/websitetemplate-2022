<?php
    /*
    Template Name: Events
    */
?>
<?php get_header(); ?>
<main role="main">
  <div class="event__banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1 class="event__page_title">Attend an event</h1>
          <div class="event__page_desc">
            <p>The Internet Society is at the heart of the Internet community. Whether in person or virtual, we’re active in conferences and events around the world, many of which we support directly.</p>
          </div>
        </div>
        <div class="col-md-5 offset-md-1">
          <h2 class="events__title">Featured events</h2>
          <ul class="list events__list">
            <li class="events__item">
              <div class="row">
                <div class="events__date">
                  <span>18</span>
                  <p>November</p>
                </div>
                <div class="events__info">
                  <span class="events__status">online</span>
                  <p>The Future of Encryption in the European Union</p>
                </div>
              </div>              
            </li>
            <li class="events__item">
              <div class="row">
                <div class="events__date">
                  <span>20</span>
                  <p>November</p>
                </div>
                <div class="events__info">
                  <span class="events__status">online</span>
                  <p>The Future of Encryption in the European Union</p>
                </div>
              </div>              
            </li>
            <li class="events__item">
              <div class="row">
                <div class="events__date">
                  <span>21</span>
                  <p>November</p>
                </div>
                <div class="events__info">
                  <span class="events__status">online</span>
                  <p>The Future of Encryption in the European Union</p>
                </div>
              </div>              
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="event__main">
    <div class="container">
    
      <h4 class="event__main_title">Events</h4>
      <?php 
      if (class_exists('EM_Events')) {
      	echo EM_Events::output(array('scope'=>'all', 'limit'=>10, 'pagination'=>1));
      }
	  ;?>
    </div>
   </div> 
</main>
<?php get_footer(); ?>