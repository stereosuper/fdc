$(function(){

	/**** VARIABLES ****/
	var myScroll, tpsAnimChoice = 600;


	// Request anim frame
	window.requestAnimFrame = (function(){
		return  window.requestAnimationFrame   ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame    ||
				window.oRequestAnimationFrame      ||
				window.msRequestAnimationFrame     ||
				function(callback){ window.setTimeout(callback, 1000/60); };
	})();

	// Alternative au CSS object-fit
	// Fonction pour adapter la taille d'une image à son container
	// Basé sur le script de Primož Cigler https://medium.com/@primozcigler/neat-trick-for-css-object-fit-fallback-on-edge-and-other-browsers-afbc53bbb2c3#.n2teu1z9m
	function imgFit(){
		if (!Modernizr.objectfit && $('.img-fit').length) {
			$('.img-fit').each(function () {
		    var $container = $(this), imgUrl = $container.find('img').prop('src');
		    if (imgUrl) {
		      $container
		        .css('backgroundImage', 'url(' + imgUrl + ')')
		        .addClass('compat-object-fit');
		    }
		  });
		}
	}

	// On scroll page
	function scrollPage(){
		myScroll = $(document).scrollTop();

		requestAnimFrame(scrollPage);
	}


	/**** INIT ****/
	imgFit();

	// Footer
	if($('.social-footer').length){
		$('.social-footer').addClass('closed').hover(
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
	}

	$('.btn-choice').click(function(e){
		e.preventDefault();
		$(this).closest('.choices').addClass('choice-'+($(this).closest('li').index()+1)+'-active choice-'+($(this).closest('li').index()+1)+'-animating');
	});
	$('.btn-close-choice').click(function(e){
		e.preventDefault();
		var choices = $(this).closest('.choices');
		choices.removeClass('choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active');
		setTimeout(function(){
			choices.removeClass('choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating');
		}, tpsAnimChoice);
	});

	$('#logo').on('click', function(){
		if(!$('body').hasClass('sidebar-links-open')){
			$('body').addClass('sidebar-links-open');
		}else{
			$('body').removeClass('sidebar-links-open');
		}
	});
	$('#btn-close-sidebar-links').click(function(){
		$('body').removeClass('sidebar-links-open');
	});


	// Creation de compte - Interactive map
	function lightAdjacentsOn(checkbox){
		if(checkbox.is(':checked') && map.find('.active').length){
			if(map.find('.active').attr('data-adjacent') !== undefined){
				var adjacents = map.find('.active').attr('data-adjacent').split(','),
					nbAdjacents = adjacents.length, i = 0;
				for(i; i<nbAdjacents; i++){
					map.find('[data-department="'+adjacents[i]+'"]').attr('class', 'department adjacent');
				}
			}
		}else if(!checkbox.is(':checked') && map.find('.adjacent').length){
			var active;
			if(map.find('.active').length){
				active = map.find('.active').attr('data-department');
			}
			departments.attr('class', 'department');
			if(active.length){
				map.find('[data-department="'+active+'"]').attr('class', 'department active');
			}
		}
	}

	if($('#mapForm').length){
		var map = $('#mapForm'), departments = map.find('.department'), select = $('#departement'),
			checkbox = $('#departement-etendre');

		departments.on('click', function(e){
			$(this).attr('class', 'department active').siblings().attr('class', 'department');
			select.val($(this).attr('data-department'));
			lightAdjacentsOn(checkbox);
		});

		select.on('change', function(e){
			departments.attr('class', 'department');

			if(map.find('[data-department="'+select.val()+'"]').length){
				map.find('[data-department="'+select.val()+'"]').attr('class', 'department active');
			}else if(select.val() === '92' || select.val() === '93' || select.val() === '94'){
				// ces départements sont ceux de l'ile de france et sont inclus
				// dans le département 75 dans la carte
				map.find('[data-department="75"]').attr('class', 'department active').siblings().attr('class', 'department');
			}

			lightAdjacentsOn(checkbox);
		});

		checkbox.on('change', function(e){
			lightAdjacentsOn(checkbox);
		});
	}


	scrollPage();

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
