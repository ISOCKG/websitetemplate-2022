<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="img-singles">
		<?php 
			if ( function_exists( 'add_theme_support' ) )
			the_post_thumbnail( 'full', array('class' => 'img-fluid') ); 
		?>
	</div>
	<div class="container main-single py-5">
		<div class="row">
			<div class="col-sm-12 py-0">
				<div class="row">
     				 <div class="col-12 col-sm-11">
     				 	<h1  class="h3 my-4"><?php the_title(); ?></h1>
						<p class="text-muted"><?php the_date('Y-m-d'); ?></p>
						<hr class="hr hr2 mt-4">	

						<div>
							<?php the_content(); ?>
						</div>
     				 </div>
     				 <div class="col-12 col-sm-1 pb-3">
     				 	<p>&nbsp;</p>
     				 	<!-- uSocial -->
						<script async src="https://usocial.pro/usocial/usocial.js?v=6.1.4" data-script="usocial" charset="utf-8"></script>
						<div class="uSocial-Share" data-pid="e4975e0f649f30ae90c9d984dfe4a30f" data-type="share" data-options="round,style1,default,absolute,vertical,size32,counter0" data-social="fb,twi,lin,telegram,gPlus,print,email" data-mobile="wa"></div>
						<!-- /uSocial -->
     				 </div>
     			</div>
			</div>
	    </div>
	</div>
	
</article><!-- #post-## -->

<style>
.uSocial-Share{
	position: sticky;
    top: 50px;
}
	@media (max-width: 600px){
		.main-single img, .wp-caption,iframe{
			width: 100% !important;
		}
	}
	
</style>