<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="捨てられたり、保健所で殺処分されるところを引き取った猫たちと触れ合える猫カフェです。これまでうたたねから譲渡した猫は300匹以上。それぞれ新しい家族の元で幸せに暮らしています。ゆっくりとした空間で猫と触れ合う時間をお楽しみください。" />
    <title><?php 
    if( !is_home() ){
        wp_title(' | ', true, 'right');
    } 
    bloginfo('name'); 
    ?></title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Kosugi+Maru" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Roboto+Slab" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="https://necoutatane.com/wp-content/themes/utatane/favicon.ico">
</head>
    
<body <?php body_class(); ?>>        
    <!-- header -->
    <nav class="header"> 
        <div class="header_sns left">
            <a href="https://www.facebook.com/necoutatane/"><i class="fab fa-facebook-square"></i></a>
            <a href="https://twitter.com/necoutatane"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/necocafe_utatane/"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="header_menu">
            <div class="nav_toggle">
                <div class="btn-container" onclick="navBtn(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
            </div>
            <div class="logo">
                <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.gif" alt="猫カフェうたたね""></a>
            </div>
            <div class="menu_btns nav" id="topNav">
                <div class="header-inner">
                    <?php
                    $args = array(
                    'menu' => 'header-menu', //管理画面で作成したメニューの名前
                    'container' => false, //<ul>タグを囲んでいる<div>タグを削除
                    'menu_class' => 'menu-btn'//ulタグのクラス名
                    );
                    wp_nav_menu($args);
                    ?>
                </div>
            </div>
        </div>
    </nav><!-- /header-->
