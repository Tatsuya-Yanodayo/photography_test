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



<!-- マソンリ& ローディング画面-->
jQuery(function(){
	
	var imgLoaded = 0;

	imagesProgress();
	
	function imagesProgress () {
		
		var $progress = jQuery('#progress'),
			$progressBar = $progress.find('.progress-bar'),
			$progressText = $progress.find('.progress-text'),
			
			imgLoad = imagesLoaded('body'),
			imgTotal = imgLoad.images.length,
			
			current = 0,
			
			progressTimer = setInterval(updateProgress, 1000 / 60);
			
			imgLoad.on('progress', function () {
				imgLoaded++;
			});
			
		function updateProgress () {
			
			var target = (imgLoaded / (imgTotal + 1)) * 100;
			
			current += (target - current) * 0.15;
			
			$progressBar.css({ width: current + '%' });
			$progressText.text(Math.floor(current) + '%');
			
			if(current >= 100){
				clearInterval(progressTimer);
				$progress.addClass('progress-complete');
				$progressBar.add($progressText) 
					.delay(300)
					.animate({ opacity: 0 }, 250, function () {
						jQuery.when(
							$progress.animate({
								opacity: 0
							}, 400)
						).done(function(){ 
							$progress.hide();
						});
					});
			}
				
			if(current > 99.9) {
				current = 100;
			}
		}		
	}

	
	
	
	var $container = jQuery('.gallery'),
	index = 0;
	
	var $filters = jQuery('#filters [data-filter]'),
	$items = jQuery('.gallery-item')


	doMasonry(".Japan");
	
	function doMasonry(filterTag){
		if(index == 0) {
			console.log("はじめの処理");
			console.log(filterTag);
			$container.imagesLoaded(function(){
				$container.find('.attachment-large').removeAttr('height width');
				$items.hide();
				$items.filter(filterTag)
					.addClass('is-animated').show();
				jQuery.when(
					$container.masonry({
						columnWidth: 1,	//苦肉の策 masonryバグ
						transitionDuration: "0s",
						itemSelector: ".gallery-item",
						isAnimated: true
					})
				).done(function(){ 
					imgLoaded++;
				});
			});
			index++;
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

		$items.removeClass('is-animated')
			.fadeOut().promise().done(function() {
				$items.filter(filterTag)
					.addClass('is-animated').fadeIn();
				doMasonry(filterTag);
			});		
	}); 
});


	<!-- 写真ポップアップのjquery -->
jQuery(function(){
	jQuery('.popup-image').magnificPopup({
		type: 'image'
	});
});




