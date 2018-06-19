<?php
//Регистрация пользовательсокго типа Спикеры
add_action('init', 'register_post_type_speakers');

function register_post_type_speakers()
{
	$labels = array 
	(
        'name'					=> 'Спикеры',
        'singular_name' 		=> 'Спикеры',
        'add_new'				=> 'Добавить нового спикера',
        'add_new_item'			=> 'Добавить нового спикера',
        'edit_item' 			=> 'Редактировать спикера',
        'new_item' 				=> 'Новый спикера',
        'all_items' 			=> 'Спикеры',
        'view_item'				=> 'Посмотреть спикера',
        'search_items'			=> 'Найти спикера',
        'not_found' 		 	=> 'Спикеры не найдены',
        'not_found_in_trash' 	=> 'Спикеров в корзине не найдено',
        'parent_item_colon' 	=> '',
        'menu_name' 			=> 'Спикеры'
    );

    $args = array
    (
        'labels' 		=> $labels,
        'public' 		=> true,
        'has_archive'   => true,
        'hierarchical'  => true,
        'supports' 		=> array('title','editor', 'author', 'thumbnail', 'comments'),
      //  'taxonomies'	=> array('category'),
        'menu_position' => 4,
        'menu_icon'		=> 'dashicons-megaphone'
    );

    register_post_type('speakers', $args);
}

//Регистрация пользовательсокго типа Логотипы
add_action('init', 'register_post_type_logos');

function register_post_type_logos()
{
	$labels = array 
	(
        'name'					=> 'Логотипы',
        'singular_name' 		=> 'Логотипы',
        'add_new'				=> 'Добавить новый логотип',
        'add_new_item'			=> 'Добавить новый логотип',
        'edit_item' 			=> 'Редактировать логотип',
        'new_item' 				=> 'Новый логотип',
        'all_items' 			=> 'Логотипы',
        'view_item'				=> 'Посмотреть логотип',
        'search_items'			=> 'Найти логотип',
        'not_found' 		 	=> 'Логотипы не найдены',
        'not_found_in_trash' 	=> 'Логотипов в корзине не найдено',
        'parent_item_colon' 	=> '',
        'menu_name' 			=> 'Логотипы'
    );

    $args = array
    (
        'labels' 		=> $labels,
        'public' 		=> true,
        'has_archive'   => true,
        'hierarchical'  => true,
        'supports' 		=> array('title', 'author', 'thumbnail'),
      //  'taxonomies'	=> array('category'),
        'menu_position' => 4,
        'menu_icon'		=> 'dashicons-images-alt2'
    );

    register_post_type('logos', $args);
}

//Регистрация пользовательсокго типа Поддержка
add_action('init', 'register_post_type_support');

function register_post_type_support()
{
	$labels = array 
	(
        'name'					=> 'Поддержка',
        'singular_name' 		=> 'Поддержка',
        'add_new'				=> 'Добавить новую поддержку',
        'add_new_item'			=> 'Добавить новую поддержку',
        'edit_item' 			=> 'Редактировать поддержку',
        'new_item' 				=> 'Новая поддержка',
        'all_items' 			=> 'Поддержка',
        'view_item'				=> 'Посмотреть поддержку',
        'search_items'			=> 'Найти поддержку',
        'not_found' 		 	=> 'Поддержки не найдены',
        'not_found_in_trash' 	=> 'Поддержки в корзине не найдены',
        'parent_item_colon' 	=> '',
        'menu_name' 			=> 'Поддержка'
    );

    $args = array
    (
        'labels' 		=> $labels,
        'public' 		=> true,
        'has_archive'   => true,
        'hierarchical'  => true,
        'supports' 		=> array('title','editor', 'author', 'thumbnail', 'comments'),
      //  'taxonomies'	=> array('category'),
        'menu_position' => 4,
        'menu_icon'		=> 'dashicons-groups'
    );

    register_post_type('support', $args);
}

//Регистрация пользовательсокго типа Цитаты
add_action('init', 'register_post_type_quote');

function register_post_type_quote()
{
	$labels = array 
	(
        'name'					=> 'Цитата',
        'singular_name' 		=> 'Цитата',
        'add_new'				=> 'Добавить новую цитату',
        'add_new_item'			=> 'Добавить новую цитату',
        'edit_item' 			=> 'Редактировать цитату',
        'new_item' 				=> 'Новая цитата',
        'all_items' 			=> 'Цитата',
        'view_item'				=> 'Посмотреть цитату',
        'search_items'			=> 'Найти цитату',
        'not_found' 		 	=> 'Цитаты не найдены',
        'not_found_in_trash' 	=> 'Цитаты в корзине не найдены',
        'parent_item_colon' 	=> '',
        'menu_name' 			=> 'Цитаты'
    );

    $args = array
    (
        'labels' 		=> $labels,
        'public' 		=> true,
        'has_archive'   => true,
        'hierarchical'  => true,
        'supports' 		=> array('title','editor', 'author', 'thumbnail', 'comments'),
      //  'taxonomies'	=> array('category'),
        'menu_position' => 4,
        'menu_icon'		=> 'dashicons-format-quote'
    );

    register_post_type('quote', $args);
}

//Регистрация пользовательсокго типа Кураторы
add_action('init', 'register_post_type_curators');

function register_post_type_curators()
{
	$labels = array 
	(
        'name'					=> 'Куратор',
        'singular_name' 		=> 'Куратор',
        'add_new'				=> 'Добавить нового куратора',
        'add_new_item'			=> 'Добавить нового куратора',
        'edit_item' 			=> 'Редактировать куратора',
        'new_item' 				=> 'Новый куратор',
        'all_items' 			=> 'Кураторы',
        'view_item'				=> 'Посмотреть куратора',
        'search_items'			=> 'Найти куратора',
        'not_found' 		 	=> 'Кураторы не найдены',
        'not_found_in_trash' 	=> 'Кураторы в корзине не найдены',
        'parent_item_colon' 	=> '',
        'menu_name' 			=> 'Кураторы'
    );

    $args = array
    (
        'labels' 		=> $labels,
        'public' 		=> true,
        'has_archive'   => true,
        'hierarchical'  => true,
        'supports' 		=> array('title','editor', 'author', 'thumbnail', 'comments'),
      //  'taxonomies'	=> array('category'),
        'menu_position' => 4,
        'menu_icon'		=> 'dashicons-welcome-learn-more'
    );

    register_post_type('curators', $args);
}

//Регистрация пользовательсокго типа Программа
add_action('init', 'register_post_type_programs');

function register_post_type_programs()
{
	$labels = array 
	(
        'name'					=> 'Программа',
        'singular_name' 		=> 'Программа',
        'add_new'				=> 'Добавить новую программу',
        'add_new_item'			=> 'Добавить новую программу',
        'edit_item' 			=> 'Редактировать программу',
        'new_item' 				=> 'Новая программа',
        'all_items' 			=> 'Программы',
        'view_item'				=> 'Посмотреть программу',
        'search_items'			=> 'Найти программу',
        'not_found' 		 	=> 'Программы не найдены',
        'not_found_in_trash' 	=> 'Программу в корзине не найдены',
        'parent_item_colon' 	=> '',
        'menu_name' 			=> 'Программы'
    );

    $args = array
    (
        'labels' 		=> $labels,
        'public' 		=> true,
        'has_archive'   => true,
        'hierarchical'  => true,
        'supports' 		=> array('title','editor', 'author', 'thumbnail', 'comments'),
      //  'taxonomies'	=> array('category'),
        'menu_position' => 4,
        'menu_icon'		=> 'dashicons-clipboard'
    );

    register_post_type('programs', $args);
}

?>