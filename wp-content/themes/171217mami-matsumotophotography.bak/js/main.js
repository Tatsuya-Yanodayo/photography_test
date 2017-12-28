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

	doMasonry();
	
	function doMasonry(filterTag){
		if(true) {
			console.log("はじめの処理");
			console.log(filterTag);
			$container.imagesLoaded(function(){
				$container.find('.attachment-large').removeAttr('height width');
				$container.masonry({
					columnWidth: 1,	//苦肉の策 masonryバグ
					transitionDuration: "0s",
					itemSelector: ".gallery-item",
					isAnimated: true
				});
			});
		} else {
			console.log("フィルター処理");
			console.log(filterTag);
			$container.masonry({
				columnWidth: 1,	//苦肉の策 masonryバグ
				transitionDuration: "0s",
				itemSelector: ".gallery-item",
				isAnimated: true
			});
		}
	};
	
	var $filters = jQuery('#filters [data-filter]'),
	$items = jQuery('.gallery-item')
	
	$filters.on('click', function(e) {
		e.preventDefault();
		var $this = jQuery(this);
		if($this.hasClass("active")) {
			console.log("ブレイク処理");
			return;
		}
		$filters.removeClass('active');
		$this.addClass('active');

		var filterTag = $this.attr('data-filter');

		if (filterTag == '.All') {
			$items.removeClass('is-animated')
				.fadeOut().promise().done(function() {
					$items.addClass('is-animated').fadeIn();
					doMasonry(filterTag);
				});
			
		} else {
			$items.removeClass('is-animated')
				.fadeOut().promise().done(function() {
					$items.filter(filterTag)
						.addClass('is-animated').fadeIn();
					doMasonry(filterTag);
				});
		}
	});


});



