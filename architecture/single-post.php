<?php get_header();

$story = get_the_content();
$galleries = get_post_galleries_images($post);

$pattern = '\[(\[?)(gallery)(?![\w-])([^\]\/]*(?:\/(?!\])[^\]\/]*)*?)(?:(\/)\]|\](?:([^\[]*+(?:\[(?!\/\2\])[^\[]*+)*+)\[\/\2\])?)(\]?)';
$story_parts = preg_split('/'.$pattern.'/s', $story);
foreach ($story_parts as $story_part) {
	$story_part = apply_filters('the_content', $story_part);
}

$args = array(
	'posts_per_page'   	=> -1,
	'offset'           	=> 0,
	'post_type'        	=> 'post',
	'exclude'			=> get_the_ID()
);
$posts_all = get_posts($args);

$num = 0;
foreach ( $posts_all as $quote_lang ){
	$args_lang = array('element_id' => $quote_lang->ID, 'element_type' => 'quote' );
	$my_post = apply_filters( 'wpml_element_language_code', null, $args_lang );
	if( substr( get_locale(), 0, 2 ) == $my_post){
		$all_posts[$num++] = $quote_lang;
	}
}
?>

<div class="container-fluid blog-page">
	<div class="blog-page_container">
		<div class="blog-page_row">
			<div class="blog-page_main">
				<div class="blog-page_content">
					<div class="blog-page_top">
						<div class="blog-page_top_inner">
							<h2><?php the_title();?> </h2>
						</div>
						<div class="blog-page_top_inner blog-page_top_inner-date">
							<span class="date"><?php echo get_the_date('d F Y');?></span>
							<span class="view-icon">5742</span>
						</div>
					</div>
					<?php $story_parts_count = count($story_parts);
						for ($i = 0; $i < $story_parts_count; $i++) { 
						 	echo apply_filters('the_content', $story_parts[$i]);
							if (!empty($galleries[$i])) {
								$gallery = $galleries[$i];
						 ?>
						 	<div class="blog-page_content_carousel">
								<div id="carousel-content<?php echo $i; ?>" class="carousel slide carousel-content" data-ride="carousel">
									<!-- Wrapper for slides -->
									<div class="carousel-inner" role="listbox">
								<?php 
									$n=0;  
									foreach ($gallery as $item) {
										$active = $n == 0 ? 'active' : '';
								?>
										<div class="item <?php echo $active; ?>">
									      <div class="carousel-content_img" style="background-image:url(<?php echo $item; ?>"></div>
									    </div>
								<?php $n++;
									} 
								?>
									</div>
								 <!-- Controls -->
								 <a class="left carousel-control" href="#carousel-content<?php echo $i; ?>" role="button" data-slide="prev">
								    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
								    <span class="sr-only">Previous</span>
								 </a>
								 <a class="right carousel-control" href="#carousel-content<?php echo $i; ?>" role="button" data-slide="next">
								   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
								   <span class="sr-only">Next</span>
								 </a>
								</div>
								 
							</div>
						<?php
							}
						} 
						?>
				</div>
				<div class="blog-page_content-social">
					<a href="" class="social_linc facebook-icon"></a>
					<a href="" class="social_linc linkedin-icon"></a>
				</div>
			</div>

			<?php include 'includes/right-sidebar.php'; ?>
		</div>
		<div class="blog-page_main-more">
			<h2 class="title"><?php _e('читайте также', 'arch'); ?></h2>
			<div class="blog-page_main-more_wrap">
			<?php foreach ( $all_posts as $blog ){?>
				<div class="read-block">
					<a href="<?php echo $blog->guid; ?>">
						<div class="read-block_img" style="background-image:url(<?php echo get_the_post_thumbnail_url($blog->ID) ?>)"></div>
						<h2><?php echo get_the_category( $blog->ID )[0]->name ?></h2>
					</a>
					<div class="text">
						<h2><?php echo $blog->post_title; ?></h2>
						<div class="text_bottom">
							<a href="<?php echo $blog->guid; ?>"><span>Читать дальше</span></a>
							<span class="view-icon">5742</span>
						</div>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>