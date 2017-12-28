<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="MAMI MATSUMOTO PHOTOGRAPHYはフォトグラファーmami matsumotoのポートフォリオサイトです。">
    <meta name="keywords" content="ポートフォリオ, フォトグラファー, ギャラリー, 旅, 写真,photography  mami">

	<!-- スタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
    
	<!--スライダー-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.maximage.min.css" type="text/css" media="screen">

	<!-- ポップアップスタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" type="text/css" />





	<!--リセットCSS-->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">

	<!--jquery読み込み-->
	<?php wp_enqueue_script( 'jquery' ); ?>

	<!--タイルレイアウト読み込み-->
    <?php wp_enqueue_script('masonry', get_bloginfo('template_url') . '/js/masonry.pkgd.min.js', array('jquery')); ?>
    <!--タイルレイアウト補助読み込み-->
    <?php wp_enqueue_script('imagesloaded', get_bloginfo('template_url') . '/js/imagesloaded.pkgd.min.js', array('jquery')); ?>
    <!-- レイジーロードの読み込み -->
	<?php wp_enqueue_script('lazyload', get_bloginfo('template_url') . '/js/jquery.lazyload.js', array('jquery')); ?>

     <!--スライダー読み込み-->
    <?php wp_enqueue_script('cycle.all', get_bloginfo('template_url') . '/js/jquery.cycle.all.js', array('jquery')); ?>
    <?php wp_enqueue_script('maximage', get_bloginfo('template_url') . '/js/jquery.maximage.js', array('jquery')); ?>
    
    <!-- 写真ポップアップの読み込み -->
	<?php wp_enqueue_script('magnific-popup', get_bloginfo('template_url') . '/js/jquery.magnific-popup.min.js', array('jquery')); ?>    
        
     <!--メインスクリプト読み込み-->
    <?php wp_enqueue_script('mainsprict', get_bloginfo('template_url') . '/js/main.js', array('jquery')); ?>


    <?php wp_head() ?>





</head>






<body>

<!--loading-->






<!--headerここから-->
 <header id="top-head">
    <div class="inner">
        <div id="mobile-head">
            <h1 class="logo"><a href="<?php echo home_url(); ?>"><div></div></a></h1>
            <div id="nav-toggle">
                <div>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <nav id="global-nav">
           <?php wp_nav_menu(); ?>
        </nav>
    
    </div>
</header>

  <!--headerここまで-->
  


