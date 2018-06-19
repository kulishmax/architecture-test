<?php
/*
* Template Name: Blog
*/

$posts_per_page = get_option( 'posts_per_page', true );

$recent_posts = new WP_Query( array(
    'numberposts' 		=> $posts_per_page,
	'offset' 			=> 0,
	'orderby' 			=> 'post_date',
	'order' 			=> 'ASC',
	'post_type' 		=> 'post',
	'post_status' 		=> 'publish',
	'suppress_filters' 	=> true
) );

global $position;
global $block_offset;

get_header();

?>
<div class="container-fluid blog">
	<div class="container">
		<div class="row">
			<?php
			$counter = 0;
			$position = 'left';
			$offset = false;
			if ( $recent_posts->have_posts() ) : 
				while ( $recent_posts->have_posts() ) : 
					$recent_posts->the_post();
					if ( $counter == 0 || $counter % 5 == 0 ) {
						$position = ( $position == 'right' ) ? 'left' : 'right';
						get_template_part( 'templates/blog/big-post-block' );
					} else {
						$offset = !$offset;
						$block_offset = $offset;
						get_template_part( 'templates/blog/post-card' );
					}
					$counter++;
				endwhile;
				wp_reset_postdata();
			else:
			?>
	  		<p><?php _e( 'Sorry, no posts matched your criteria.', 'arch' ); ?></p>
			<?php
			endif;
			?>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<button type="button" id="blog-load-more" data-offset="<?php echo $posts_per_page; ?>" data-offsetincrement="<?php echo $posts_per_page; ?>">
				<span class="default"><?php _e( 'Load more', 'arch' ); ?></span>
				<span class="loading" style="display: none;"><?php _e( 'Loading...', 'arch' ); ?> <i class="fa fa-spinner rotating" aria-hidden="true"></i></span>
			</button>
		</div>
	</div>
</div>

<?php

get_footer();

?>