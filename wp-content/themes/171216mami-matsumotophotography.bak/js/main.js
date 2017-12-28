<!--ハンバーガーメニューのjquery-->
    (function(jQuery) {
        jQuery(function() {
            var $header = jQuery('#top-head');
            // Nav Fixed
            jQuery(window).scroll(function() {
                if (jQuery(window).scrollTop() > 350) {
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
    

<!--現在のメニュー--> 
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
    
    
<!--スライダー-->
jQuery(function(){
	var $maximage = jQuery('#maximage');
	$maximage.imagesLoaded(function(){

		$maximage.maximage();

	});
});



<!-- マソンリ！！ -->
jQuery(function(){
	var $container = jQuery('.gallery');
	$container.imagesLoaded(function(){
		$container.find('.attachment-large').removeAttr('height width');
		$container.masonry({
			transitionDuration: "0.3s",
			itemSelector: ".gallery-item",
			isAnimated: true
		});
	});
});


<!--画像ポップアップ機能-->
jQuery(function(){
	jQuery('.popup-image').magnificPopup({
		type: 'image'
	});
});





