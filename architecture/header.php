<!DOCTYPE html>
<html>
<head>
    <!-- Здесь пишем все метатеги -->
    <meta charset="utf-8">
    <title><?php wp_title('|',1,'right'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <script>
    /* <![CDATA[ */
      window.lang = '<?php echo ICL_LANGUAGE_CODE; ?>';
    /* ]]> */
    </script>
    <?php
    wp_head(); // Эта функция обязательно вызывается в Хеде
    $menu_items = wp_get_nav_menu_items('top_menu'); // = top-menu - это название, которое пользователь указывает в настройках меню в админке
    $page_id = get_the_ID();
    $page_for_posts = get_option('page_for_posts');
    $is_home = is_home(); // Берем ID страницы, и проверяем, является ли текущая страница главной или страницей для записей

    // $page_url = get_page_link();
    // $lang = $_GET['lang'];
    // $compare_lang = 'ru';
    $url = get_the_permalink();
    $wpml_permalink_ru = apply_filters( 'wpml_permalink', $url , 'ru' );
    $wpml_permalink_en = apply_filters( 'wpml_permalink', $url , 'en' );
    ?>
</head>

<body>
<div class="body-color"></div>
<header>
  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri().'/img/logo.svg'?>" alt="logo"></a>
      </div>
      <div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <?php //if ( !empty( $menu_items ) ) {
          //      foreach ($menu_items as $item) {
          //          if ($item->object_id == $page_id || ($is_home && $item->object_id == $page_for_posts) ) $selected = ' class="selected"';
          //          else $selected = '';
          //         if ($item->target == '_blank') $target = ' target="_blank"'; else $target = '';
                  ?>
                   <li><a href="#introduction"><?php _e('Conference', 'arch'); ?></a></li>
                   <li><a href="#speakers"><?php _e('Speakers', 'arch'); ?></a></li>
                   <li><a href="#programs"><?php _e('Program', 'arch'); ?></a></li>
                   <li><a href="#location"><?php _e('Participants & Venue', 'arch'); ?></a></li>
                   <li><a href="#partners"><?php _e('Partners', 'arch'); ?></a></li>
                   <li><a href="#contacts"><?php _e('Contacts', 'arch'); ?></a></li>
                  <?php
           //     }
           // }
          ?>
              <li class="lang_switcher"><a href="<?php echo $wpml_permalink_ru; ?>">Ru<a><span>|</span><a href="<?php echo $wpml_permalink_en; ?>">En</a></li>
              <li class="buy_ticket"><a href="<?php echo site_url().'#payment';?>"><?php _e('Buy a ticket', 'arch'); ?></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- </nav> -->
</header>