<?php

add_action( 'init', 'create_partner_taxonomies', 0 );

function create_partner_taxonomies(){
 

  $labels = array(
	'name' 							=> _x( 'Партнеры', 'taxonomy general name' ),
	'singular_name'					=> _x( 'Партнер', 'taxonomy singular name' ),
	'search_items' 					=>  __( 'Искать партнера' ),
	'popular_items' 				=> __( 'Популярные партнеры' ),
	'all_items' 					=> __( 'Все партнеры' ),
	'parent_item' 					=> null,
	'parent_item_colon' 			=> null,
	'edit_item' 					=> __( 'Править партнера' ),
	'update_item' 					=> __( 'Обновить партнера' ),
	'add_new_item' 					=> __( 'Добавить нового партнера' ),
	'new_item_name' 				=> __( 'Имя нового партнера' ),
	'separate_items_with_commas' 	=> __( 'Separate writers with commas' ),
	'add_or_remove_items' 			=> __( 'Добавить или удалить партнера' ),
	'choose_from_most_used' 		=> __( 'Choose from the most used writers' ),
	'menu_name' 					=> __( 'Партнеры' ),
  );

 
register_taxonomy('cat_support', 'support', array(
	'show_in_nav_menus' 			=> true,
	'show_tagcloud' 				=> true,
	'show_in_quick_edit' 			=> true,
	'hierarchical' 					=> true,
	'labels' 						=> $labels,
	'show_ui' 						=> true,
	'query_var' 					=> true,
	'rewrite' 						=> array( 'slug' => 'partners' ),
  ));
}

?>