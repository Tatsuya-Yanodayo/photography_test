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
