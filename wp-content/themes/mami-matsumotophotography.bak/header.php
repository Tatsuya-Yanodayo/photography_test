<!DOCTYPE html>

<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="MAMI MATSUMOTO PHOTOGRAPHYはフォトグラファーmami matsumotoのポートフォリオサイトです。">
    <meta name="keywords" content="ポートフォリオ, フォトグラファー, ギャラリー, 旅, 写真,  mami">

<!-- スタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">

<!--ローディング-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/fakeLoader.css" type="text/css" />

<!-- ポップアップスタイルシートの読み込み -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css" type="text/css" />
<!--スライダー-->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.maximage.min.css" type="text/css" media="screen">








<!--リセットCSS-->
	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/3.18.1/build/cssreset/cssreset-min.css">

<!--jquery読み込み-->
	<?php wp_enqueue_script( 'jquery' ); ?>

    <?php wp_enqueue_script('lazyload', get_bloginfo('template_url') . '/js/jquery.lazyload.js', array('jquery')); ?><!-- レイジーロードの読み込み -->
    <?php wp_enqueue_script('magnific-popup', get_bloginfo('template_url') . '/js/jquery.magnific-popup.min.js', array('jquery')); ?><!-- 写真ポップアップの読み込み -->
    <?php wp_enqueue_script('masonry', get_bloginfo('template_url') . '/js/masonry.pkgd.min.js', array('jquery')); ?><!--タイルレイアウト読み込み-->
    <?php wp_enqueue_script('imagesloaded', get_bloginfo('template_url') . '/js/imagesloaded.pkgd.min.js', array('jquery')); ?><!--タイルレイアウト補助読み込み-->
    <?php wp_enqueue_script('fakeLoader', get_bloginfo('template_url') . '/js/fakeLoader.min.js', array('jquery')); ?><!--ローディング読み込み-->

     <!--スライダー読み込み-->
    <?php wp_enqueue_script('cycle.all', get_bloginfo('template_url') . '/js/jquery.cycle.all.js', array('jquery')); ?>
    <?php wp_enqueue_script('maximage', get_bloginfo('template_url') . '/js/jquery.maximage.js', array('jquery')); ?>
    <?php wp_head() ?>


   


 



<script type="text/javascript">

jQuery(function(){
    // Trigger maximage
    jQuery('#maximage').maximage();
});

</script>



<!--ハンバーガーメニューのjquery-->
	
    <script>
    

    (function(jQuery) {
        jQuery(function() {
            var $header = jQuery('#top-head');
            // Nav Fixed
            jQuery(window).scroll(function() {
                if ($(window).scrollTop() > 350) {
                    $header.addClass('fixed');
                } else {
                    $header.removeClass('fixed');
                }
            });
            // Nav Toggle Button
            jQuery('#nav-toggle').click(function(){
                $header.toggleClass('open');
            });
        });
    })(jQuery);


    </script>



<!-- 写真ポップアップのjquery -->

    <script>
 

    	jQuery(function(){
          jQuery('.popup-image').magnificPopup({
          type: 'image'
      });
    });


    </script>


    <script>

    
 
    	jQuery('img.lazy').load(function() {
        masonry_update();
    });


    </script>





<!--タイルレイアウト補助-->

    <script>
 

    	jQuery(function(){
    var $container = jQuery('#masonry');
    jQuery('#container').imagesLoaded(function(){
    	$container.masonry({
    		itemSelector: '.item',
    		isFitWidth: true,
    		isAnimated: true
    	});
    });
    });

    </script>



<!--現在のメニュー-->
    <script type="text/javascript">
 

    jQuery(function(){
        jQuery('#nav li a').each(function(){
            var $href = jQuery(this).attr('href');
            if(location.href.match($href)) {
            jQuery(this).addClass('active');
            } else {
            jQuery(this).removeClass('active');
            }
        });
    });

 
    </script>

<!--スライダー-->

<script type="text/javascript">

jQuery(function(){
    // Trigger maximage
    jQuery('#maximage').maximage();
});

</script>

<!--jqueryここまで-->
</head>






<body>

<!--loading-->

<div id="fakeloader"></div>

<script type="text/javascript">
 jQuery(function(jQuery) {

jQuery("#fakeloader").fakeLoader({
    timeToHide:3000,
    zIndex:"999",
    spinner:"spinner2",
    bgColor:"#262626",
});

});
</script>





<!--headerここから-->
 <header id="top-head">
    <div class="inner">
        <div id="mobile-head">
            <h1 class="logo"><a href="#"><div></div></a></h1>
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
  


