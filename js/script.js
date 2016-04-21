$(function(){
	/**** VARIABLES ****/
	var myScroll;

	window.requestAnimFrame = (function(){
		return  window.requestAnimationFrame   || 
				window.webkitRequestAnimationFrame || 
				window.mozRequestAnimationFrame    || 
				window.oRequestAnimationFrame      || 
				window.msRequestAnimationFrame     || 
				function(callback){ window.setTimeout(callback, 1000/60); };
	})();

	// Request anim frame
	function scrollPage(){
		myScroll = $(document).scrollTop();
		
		requestAnimFrame(scrollPage);
	}

	// Alternative au CSS object-fit
	// Fonction pour adapter la taille d'une image à son container
	// Basé sur le script de Primož Cigler https://medium.com/@primozcigler/neat-trick-for-css-object-fit-fallback-on-edge-and-other-browsers-afbc53bbb2c3#.n2teu1z9m
	function imgFit(){
		if (!Modernizr.objectfit) {
			console.log(Modernizr);
		  $('.img-fit').each(function () {
		    var $container = $(this),
		        imgUrl = $container.find('img').prop('src');
		    if (imgUrl) {
		      $container
		        .css('backgroundImage', 'url(' + imgUrl + ')')
		        .addClass('compat-object-fit');
		    }  
		  });
		}
	}


	/**** INIT ****/
	scrollPage();
	imgFit();
	TweenMax.set($('.social-footer'), {className:'+=closed'});
	$('.social-footer').hover(
		function(){
			if($(this).hasClass('closed')){
				TweenMax.set($(this), {className:'-=closed'});
			}
		}, function(){
			var scrollTopV = $(document).scrollTop();
			if(!(myScroll + $(window).height() == $(document).height())) {
				TweenMax.set($(this), {className:'+=closed'});
			}
		}
	);
	$('.btn-choice').click(function(){
		$(this).closest('.choices').addClass('choice-'+($(this).closest('li').index()+1)+'-active');
		return false;
	});
	$('.btn-close-choice').click(function(){
		$(this).closest('.choices').removeClass('choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active');
		return false;
	});
    $(document).scroll(function(){
    	myScroll = $(document).scrollTop();
    	if(myScroll + $(window).height() == $(document).height()) {
    		if($('.social-footer').hasClass('closed')){
    			TweenMax.set($('.social-footer'), {className:'-=closed'});
    		}
    	}else{
    		if(!$('.social-footer').hasClass('closed')){
    			TweenMax.set($('.social-footer'), {className:'+=closed'});
    		}
    	}
    });

    $(window).resize(function(){
	});

	$(window).load(function(){
	});

});