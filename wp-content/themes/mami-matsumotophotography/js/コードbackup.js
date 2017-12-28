<!-- タイルレイアウト -->
jQuery(function () {
	var $container = jQuery('#gallery');
	$container.imagesLoaded(function(){
		$container.masonry({
        
    		transitionDuration: "0.3s",
			itemSelector: '.item',
		
			isFitWidth: true,
			isAnimated: true
		});
	});
});






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
	