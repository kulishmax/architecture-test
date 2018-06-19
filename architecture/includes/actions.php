<?php

function blog_get_more_posts() {
	// print_r( $_POST );
	global $position;
	global $block_offset;
	$recent_posts = new WP_Query( array(
	    'numberposts' 		=> get_option( 'posts_per_page', true ),
		'offset' 			=> $_POST['offset'],
		'orderby' 			=> 'post_date',
		'order' 			=> 'ASC',
		'post_type' 		=> 'post',
		'post_status' 		=> 'publish',
		'suppress_filters' 	=> true
	) );
	ob_start();
	$counter = 0;
	$position = 'left';
	$offset = false;
	if ( $recent_posts->have_posts() ) {
		while ( $recent_posts->have_posts() ) {
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
		}
	} else {
		echo '';
	}
	echo ob_get_clean();
	wp_die();
}

add_action( 'wp_ajax_arch_get_more_posts', 'blog_get_more_posts' );
add_action( 'wp_ajax_nopriv_arch_get_more_posts', 'blog_get_more_posts' );


function save_price_tickets() {
	$save_tickets['junior']['early'] = $_POST['jun_ear'];
	$save_tickets['junior']['regular'] = $_POST['jun_reg'];
	$save_tickets['junior']['late'] = $_POST['jun_late'];
	$save_tickets['senior']['early'] = $_POST['sen_ear'];
	$save_tickets['senior']['regular'] = $_POST['sen_reg'];
	$save_tickets['senior']['late'] = $_POST['sen_late'];
	$save_tickets['executive']['early'] = $_POST['exec_ear'];
	$save_tickets['executive']['regular'] = $_POST['exec_reg'];
	$save_tickets['executive']['late'] = $_POST['exec_late'];

	update_option( 'save_price_tickets', serialize($save_tickets) );
	echo wp_json_encode( $_POST );
	wp_die();
}

add_action( 'wp_ajax_save_tickets', 'save_price_tickets' );
add_action( 'wp_ajax_nopriv_save_tickets', 'save_price_tickets' );



function buy_tickets() {
	$date = new DateTime();
	$timestamp = $date->getTimestamp();
	$uniqid = uniqid();
	update_option('count_order', $uniqid);
	$count_order = get_option('count_order');
	$arr = json_decode( html_entity_decode( stripslashes ($_POST['data'] ) ), true );
	$string = "test_merch_n1;arch.staging.smart-site.pro;".$count_order.";".$timestamp.";".$arr['totalSumGrn'].";UAH;tickets;1;".$arr['totalSumGrn']."";
	$key = "flk3409refn54t54t*FNJRET";
	$hash = hash_hmac("md5",$string,$key);
	echo wp_json_encode(array ( 'string' => $string, 'count_order'=> $count_order , 'timestamp' => $timestamp, 'key' => $hash ) );
	wp_die();
}

add_action( 'wp_ajax_buytickets', 'buy_tickets' );
add_action( 'wp_ajax_nopriv_buytickets', 'buy_tickets' );
?>