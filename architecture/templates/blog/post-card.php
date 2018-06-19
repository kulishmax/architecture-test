<?php
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
global $block_offset;
$offset = $block_offset;
if ( $offset ) {
	$offset_class = ' col-md-offset-2';
} else {
	$offset_class = '';
}
?>
<div class="col-xs-12 col-sm-6 col-md-4<?php echo $offset_class; ?>">
	<div class="post-card post-block">
		<div class="image" style="background-image: url(<?php echo get_the_post_thumbnail_url( $post, 'medium' ); ?>);">
			<p class="category"><?php echo $category; ?></p>
		</div>
		<div class="description">
			<h2><?php echo get_the_title(); ?></h2>
			<a href="<?php echo get_permalink( $post ); ?>"><?php _e( 'Read more', 'arch' ); ?></a>
			<span class="views-count"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $views_count; ?></span>
		</div>
	</div>
</div>