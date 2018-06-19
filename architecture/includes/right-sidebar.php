<?php $sliders = ceil(count($all_posts)/2); ?>
<div class="blog-page_sidebar">
	<div class="blog-page_sidebar_inner">
	  <h2><?php _e('Популярные статьи', 'arch'); ?></h2>  
	  <div id="sidebarCarousel" class="carousel slide sidebar-carousel" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	    <?php 
	    	for( $i=0; $i < $sliders; $i++ ){ 
	    		$active = $i == 0 ? 'active' : '';
	    ?>
	      <li data-target="#sidebarCarousel" data-slide-to="<?php echo $i; ?>" class="<?php echo $active; ?>"></li>
	    <?php } ?>
	    </ol>
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	    <?php 
	    $m = 0;
	    foreach ( $posts_all as $blog_slider ){
	    	$active = $m == 0 ? 'active' : '';
	    	if ( $m%2 == 0 ){?>
	    		 <div class="item <?php echo $active; ?>">
	    	<?php } ?>
			<div class="read-block">
				<a href="<?php echo $blog_slider->guid; ?>">
					<div class="read-block_img" style="background-image:url(<?php echo get_the_post_thumbnail_url($blog_slider->ID) ?>)"></div>
					<h2><?php echo get_the_category( $blog_slider->ID )[0]->name ?></h2>
				</a>
				<div class="text">
					<h2><?php echo $blog_slider->post_title; ?></h2>
					<div class="text_bottom">
						<a href="<?php echo $blog->guid; ?>"><span>Читать дальше</span></a>
						<span class="view-icon">5742</span>
					</div>
				</div>
			</div>
			<?php if ( $m%2 != 0 ){?>
	    		</div>
	    	<?php } ?>
			 <?php $m++; } ?>
	      </div>
	    </div>
		</div>
	</div>
</div>