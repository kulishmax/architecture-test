<?php
global $position;
if ( $position == 'right' ) {
	$offset_class = 'col-sm-offset-6';
} else {
	$offset_class = 'col-sm-offset-2';
}
$post_cats = get_the_terms( $recent_posts[0], 'category' );
if ( !$post_cats ) {
	$category = '';
} else {
	$category = $post_cats[0]->name;
}
if ( function_exists( 'get_post_views' ) ) {
	$views_count = get_post_views( get_the_ID() );
} else {
	$views_count = '';
}
?>

	</div>
</div>
<div class="big-post-block post-block <?php echo $position; ?>">
	<div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);"></div>
	<div class="description">
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6 <?php echo $offset_class; ?>">
				<p class="category"><?php echo $category; ?></p>
				<h2><?php echo get_the_title(); ?></h2>
				<a href="<?php echo get_permalink( $post ); ?>"><?php _e( 'Read more', 'arch' ); ?></a>
				<span class="views-count"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $views_count; ?></span>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="row">