<?php
  /**
  * Template Name: Ilim page 
  */
?>

<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Esen">
    <title>IlimBox</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <!-- Custom styles for this template -->
    <link href="<?php echo get_template_directory_uri(); ?>/ilim/css/styles.css?v=1.9" rel="stylesheet">
	  <style>
		  .menu-item-1274 a,.menu-item-1275 a{
			color: #fff;
    		font-weight: bold;  
		  }
		  .widget.widget_wpglobus{
			  
		  }
		  .flag.wpglobus-current-language{
			  margin-right: 1rem;
		  }
		  .navbar-toggler{
			  border: 1px solid #FF9900;
			   line-height: 0.5;
			  width: 50px;
			  padding: .2rem .5rem;
		  }
		  .navbar-toggler-icon{
			  border: 1px solid #FF9900;
			  height: 2px;
			 
		  }
		  .modal-content{
			      border: none;
			      background-color: transparent;
		  }
		  .modal-header{
			  display: none;
		  }
		  .modal-body{
			      padding: 0;
		  }
		  iframe{
			  width: 100% !important;
		  }
		
		  .section-5 img{
			  height: 291px;
    		object-fit: cover;
		  }
		  #Block5 a:hover{
			  color: #FE9901;
			  text-decoration: none
		  }
		  #Block5 a:hover h4{
			  color: #FE9901
		  }
		  @media (min-width: 576px){
			  .modal-dialog {
				max-width: 500px;
				margin: 4.75rem auto;
			  }
		  }

		  @media (max-width: 600px){
			  #menu-ilimbox-menu{
				  background: #fff;
				  border-radius: 5px;
				  padding-left: 2rem;
			  }
		  }
	  </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg w-100 site-header py-4">
		<div class="container">
		    <a class="navbar-brand" href="#">
		    	<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/logo.png" alt="" />
		    </a>
		    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
				<span class="navbar-toggler-icon"></span>
		    </button>
			<div class="collapse navbar-collapse" id="navbarsExample07">
			  <?php if ( function_exists( 'wp_nav_menu' ) )
				  wp_nav_menu( 
					array( 
					'theme_location' => 'ilimbox-menu',
					'fallback_cb'=> 'ilimbox-menu',
					'container' => 'ul',
					'menu_class' => 'navbar-nav ml-auto', 
					'menu_id' => '',
					'depth'             => 3,
					'items_wrap'  => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					) 
				  );
				else custom_menu(); ?>
			</div>
		    <?php the_widget( 'WPGlobusWidget' ); ?>
		</div>
	</nav>

<main role="main" class="">
	
	<section class="section-1 w-100 position-relative overflow-hidden bg-light">
		<div class="container">
			<h1 class="text-white"><?php the_field('слоган'); ?></h1>
		</div>
	</section>
	
	<section  id="Block1" class="section-2 w-100 position-relative py-4 overflow-hidden bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="card my-5 position-relative">
						<div class="card-block">
							<h2 class="text-uppercase h2-1"><?php the_field('цифровая_энциклопедия'); ?></h2>
				            <div class="card-body">
				              <p class="card-text text-center"><?php the_field('цифровая_энциклопедия_описание'); ?></p>
				            </div>
						</div>
			        </div>
				</div>
				<div class="col-md-4">
					<div class="card my-5 position-relative">
						<div class="card-block">
							<h2 class="text-uppercase h2-2"><?php the_field('википедия'); ?></h2>
				            <div class="card-body card-body-2">
				              <p class="card-text text-center"><?php the_field('википедия_-_описание'); ?></p>
				            </div>
						</div>
			        </div>
				</div>
				<div class="col-md-4">
					<div class="card my-5 position-relative">
						<div class="card-block">
							<h2 class="text-uppercase h2-3"><?php the_field('академия_хана'); ?></h2>
				            <div class="card-body">
				              <p class="card-text text-center"><?php the_field('академия_хана_-_описание'); ?></p>
				            </div>
						</div>
			        </div>
				</div>
			</div>
		</div>
	</section>
	
	<section  id="Block2" class="section-3 w-100 position-relative py-5 overflow-hidden">
		<div class="container">
			<h3 class="text-center mb-5"><?php the_field('подключение_к_ilimbox'); ?></h3>
			<div class="row">
				<div class="col-md-4 text-center">
					<div class="orange-rounde">1</div>
					<p class="text-dark font-italic"><br/><?php the_field('включите_wi-fi'); ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/wifi-button.png" alt="wifi" class="img-fluid" />
				</div>
				<div class="col-md-4 text-center">
					<div class="orange-rounde">2</div>
					<p class="text-dark font-italic"><br/><?php the_field('подключитесь_к_ilimbox'); ?></p>
					<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/wifi-button-2.png" alt="wifi"  class="img-fluid"/>
				</div>
				<div class="col-md-4 text-center">
					<div class="orange-rounde">3</div>
					<p class="text-dark font-italic"><?php the_field('откройте_web-браузер'); ?></p>
					<img src="https://isoc.kg/wp-content/uploads/2019/10/wifi-button.png" alt="wifi"  class="img-fluid"/>
				</div>
			</div>
			<p class="text-center mt-5 text-dark bottom-text font-italic"><?php the_field('сообщение'); ?></p>
		</div>
	</section>
	
	<section  id="Block3" class="section-4 w-100 position-relative py-5 overflow-hidden">
		<div class="container">
			<h3 class="text-center mb-5"><?php the_field('новости'); ?></h3>
			<div class="row access">
				 <?php $params = array('posts_per_page' => 3, 'cat' => 62 ); 
        	    if (have_posts()) : query_posts($params); ?>
				<?php while (have_posts()) : the_post(); ?>
				  <div class="col-md-4 col-sm-12">
					<div class="card mb-4 shadow-sm">
						<a href="<?php the_permalink(); ?>" target="_blank">
							<?php 
							if ( function_exists( 'add_theme_support' ) )
								the_post_thumbnail( array(370,9999), array('class' => 'img-fluid') ); 
							?>
							<div class="card-body">
								<h4 class="ru"><?php the_title(); ?></h4>
								<p class="p-date text-right "><?php echo get_the_date('d.m.Y'); ?></p>
								<?php the_excerpt();?>
								<p class="p-description card-text text-dark"></p>
							</div>
						</a>
					</div>
				</div>
				<?php endwhile; ?>

				<?php else : ?>
				<?php endif; wp_reset_query(); ?>
			</div>
		</div>
	</section>
	
	<section id="Block4" class="section-5 w-100 position-relative py-5 overflow-hidden bg-white">
		<div class="container">
			<h3 class="text-center mb-5 h3"><?php the_field('видео_отзывы'); ?></h3>
			<div class="row">
				 <?php $i = 0; $params = array('posts_per_page' => 3, 'cat' => 66 ); 
        	    if (have_posts()) : query_posts($params); ?>
				<?php while (have_posts()) : the_post(); ?>
				<?php $i++; ?>
				  <div class="col-md-4 col-sm-12">
					  <a href="#1" data-toggle="modal" data-target="#example<?php echo $i; ?>">
						<div class="card mb-4 position-relative">
							<?php 
							if ( function_exists( 'add_theme_support' ) )
								the_post_thumbnail( array(464,9999), array('class' => 'img-fluid') ); 
							?>
							<div class="card-b">
								<h4 class="text-right text-white"><?php the_title(); ?></h4>
								<?php the_excerpt();?>
							</div>
						</div>
					  </a>
				</div>
				
				<!-- Modal <?php echo $i; ?> -->
				<div class="modal fade" id="example<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content">
					  <div class="modal-body">
						<?php echo the_field('ссылка_на_ютуб'); ?>
					  </div>
					</div>
				  </div>
				</div>
				<?php endwhile; ?>

				<?php else : ?>
				<?php endif; wp_reset_query(); ?>
			</div>
		</div>
		
		
		
	</section>
	
	<section id="Block5" class="section-6 w-100 position-relative py-5 overflow-hidden bg-dark">
		<div class="container">
			<h3 class="text-center mb-5 h3 text-white"><?php the_field('вовлекайтесь'); ?></h3>
			<div class="row text-center">
				<div class="col-md-4 position-relative">
					<a href="#" data-toggle="modal" data-target="#modalIlim1">
						<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/ilim-Group-1.png" alt="" class="img-fluid"/>
						<h4><?php the_field('купить_ilimbox'); ?></h4>
					</a>
				</div>
				<div class="col-md-4 position-relative">
					<a href="#" data-toggle="modal" data-target="#modalIlim2">
						<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/ilim-Group-2.png" alt="" class="img-fluid"/>
						<h4><?php the_field('подарить_ilimbox'); ?></h4>
					</a>
				</div>
				<div class="col-md-4 position-relative">
					<a href="#" data-toggle="modal" data-target="#modalIlim3">
						<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/ilim-Group-3.png" alt="" class="img-fluid"/>
						<h4><?php the_field('сделать_самому_ilimbox'); ?></h4>
					</a>
				</div>
			</div>
		</div>
				<div class="modal fade" id="modalIlim1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content"  style="background: #fff;">
						<div class="modal-header"  style="background: #fff;display: block;">
						<h5 class="modal-title" id="exampleModalLabel"><?php the_field('купить_ilimbox'); ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p style=" padding: 10px; ">
							<?php the_field('ilimbox_popup_1'); ?>
						  </p>
					  </div>
					</div>
				  </div>
				</div>
				<div class="modal fade" id="modalIlim2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content"  style="background: #fff;">
						<div class="modal-header"  style="background: #fff;display: block;">
						<h5 class="modal-title" id="exampleModalLabel"><?php the_field('подарить_ilimbox'); ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p style=" padding: 10px; ">
							<?php the_field('ilimbox_popup_2'); ?>
						  </p>
					  </div>
					</div>
				  </div>
				</div>
				<div class="modal fade" id="modalIlim3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
					<div class="modal-content" style="background: #fff;">
						<div class="modal-header" style="background: #fff;display: block;">
						<h5 class="modal-title" id="exampleModalLabel"><?php the_field('сделать_самому_ilimbox'); ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						  <span aria-hidden="true">&times;</span>
						</button>
					  </div>
					  <div class="modal-body">
						<p style=" padding: 10px; ">
							<?php the_field('ilimbox_popup_3'); ?>
						  </p>
					  </div>
					</div>
				  </div>
				</div>
	</section>
	
	<section id="Block6" class="section-6 w-100 position-relative py-5 overflow-hidden bg-white">
		<div class="container">
			<h3 class="text-center mb-5 h3 text-dark"><?php the_field('карта_распространения'); ?></h3>
			<div class="row text-center">
				<div class="col-md-12 position-relative">
					<iframe src="https://www.google.com/maps/d/embed?mid=1Fw6xT-lGi1674Ih4P97RgTGqR4V5vzrp" width="100%" height="480"></iframe>
				</div>
			</div>
		</div>
	</section>
	
	<section id="Block7" class="section-6 w-100 position-relative py-5 overflow-hidden bg-white">
		<div class="container">
			<h3 class="text-center mb-5 h3 text-dark"><?php the_field('о_проекте_1'); ?></h3>
			<div class="row text-center">
				<div class="col-md-12 position-relative">
					<p><?php the_field('о_проекте'); ?></p>
				</div>
			</div>
		</div>
	</section>

	
</main>

<footer class="w-100 position-relative py-3 overflow-hidden bg-dark">
	<div class="container">
		<div class="row">
			<div class="col-md-2 col-sm-12">
				<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/logo-isoc.png" alt="" class="img-fluid"/>
			</div>
			<div class="col-md-8 col-sm-12 text-center">
				<p class="text-white p-0 m-0" ><?php the_field('данное_устройство_разработано_-_описание'); ?></p>
			</div>
			<div class="col-md-2 col-sm-12">
				<img src="<?php echo get_template_directory_uri(); ?>/ilim/img/logoisoc1.png" alt="" class="img-fluid"/>
			</div>
		</div>
	</div>
</footer>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	  <style>
	  .modal-header .close {
			padding: 0;
			margin: 0;
			margin-top: -2rem;
		}
	  </style>

<script>
$(document).ready(function(){  
        /*$.post('https://isoc.kg/wp-admin/admin-ajax.php', {'action':'pcht_posts', 'param':62}, function(response){
            $('.access').html(response);
        });*/
	$('#menu-ilimbox-menu li a').addClass('nav-link scroll');
	
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 1400);
	});
	
});
</script>

</body>
</html>
