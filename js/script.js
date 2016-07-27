$(function(){

	/**** VARIABLES ****/
	var myScroll, tpsAnimChoice = 600,
		windowHeight = $(window).height(), windowWidth = $(window).width(),
		setMapFormActive = false, doit,
		body = $('body'),
		slideIndex = 0;


	// Request anim frame
	window.requestAnimFrame = (function(){
		return  window.requestAnimationFrame   ||
				window.webkitRequestAnimationFrame ||
				window.mozRequestAnimationFrame    ||
				window.oRequestAnimationFrame      ||
				window.msRequestAnimationFrame     ||
				function(callback){ window.setTimeout(callback, 1000/60); };
	})();

	// toggleAttr() jQuery plugin
	// @link http://github.com/mathiasbynens/toggleAttr-jQuery-Plugin
	// @description Used to toggle selected="selected", disabled="disabled", checked="checked" etc…
	// @author Mathias Bynens <http://mathiasbynens.be/>
	jQuery.fn.toggleAttr = function(attr) {
	 	return this.each(function() {
	  		var $this = $(this);
	  		$this.attr(attr) ? $this.removeAttr(attr) : $this.attr(attr, attr);
	 	});
	};

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
		if ($(".littles-squares").length>0) {
			TweenMax.set($(".littles-squares li:nth-child(even)"), { y: myScroll/8});
			TweenMax.set($(".littles-squares li:nth-child(odd)"), { y: myScroll/4});
		}
	}

	// Creation de compte - Interactive map
	function setMapForm(){
		var mapContainer = $('#mapForm'), maps = mapContainer.find('.map-form'),
			map = $('#mapFormMetropole'), mapExtras = mapContainer.find('.map-form-extra'),
			departments = mapContainer.find('.department'),
			select = $('#departement'), checkbox = $('#departement-etendre'),
			links = mapContainer.find('a'), mapBtn = mapContainer.find('.map-btn'),
			btnMetropole = mapContainer.find('.btn-metropole');

		function lightAdjacentsOn(){
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

		departments.on('click', function(e){
			departments.attr('class', 'department');
			$(this).attr('class', 'department active');

			var departmentCode = $(this).attr('data-department');
			var $option = select.find("option[data-value='" + departmentCode + "']");

			select.val($option.val());
			lightAdjacentsOn(checkbox);
		});

		select.on('change', function (e) {
		    departments.attr('class', 'department');

		    var departmentCode = select.find(":selected").data("value");
		    var $mapDepartment = mapContainer.find('[data-department="' + departmentCode + '"]');

		    if ($mapDepartment.length) {
		        $mapDepartment.attr('class', 'department active');

		    } else if (departmentCode == '92' || departmentCode == '93' || departmentCode == '94') {
				// ces départements sont ceux de l'ile de france et sont inclus
				// dans le département 75 dans la carte
				mapContainer.find('[data-department="75"]').attr('class', 'department active').siblings().attr('class', 'department');
			}
			lightAdjacentsOn(checkbox);
		});

		checkbox.on('change', function(e){
			lightAdjacentsOn(checkbox);
		});

		links.on('click', function(e){
			e.preventDefault();
			if($(this).parents('.map-btn').length){
				mapBtn.removeClass('active');
				btnMetropole.addClass('active');
				TweenMax.to($($(this).attr('href')), 0.2, {x: '0%', opacity: 1, zIndex: 1});
				TweenMax.to(map, 0.2, {x: '-100%', opacity: 0, zIndex: 0});
			}else{
				mapBtn.addClass('active');
				btnMetropole.removeClass('active');
				TweenMax.to(map, 0.2, {x: '0%', opacity: 1, zIndex: 1});
				TweenMax.to(mapExtras, 0.2, {x: '100%', opacity: 0, zIndex: 0});
			}
		});

		setMapFormActive = true;
	}


	function setResponsiveNavTabs(){
		if($('.nav-tabs').length){
			var nav = $('.nav-tabs');
			if(!nav.hasClass('nav-tabs-indicator')){
				if(windowWidth < 768){
					nav.height(0).find('.active').on('click', function(e){
						var heightNav = 0, i = 0, tabs = nav.find('li'), nbTabs = tabs.length;
						for(i; i<nbTabs; i++){
							if(!tabs.eq(i).hasClass('active')){
								heightNav += tabs.eq(i).outerHeight();
							}
						}
						nav.height() > 0 ? nav.height(0) : nav.height(heightNav);
						nav.toggleClass('on');
					});
				}else{
					nav.css('height', 'auto');
				}
			}
		}
	}

	function newsHeight(){
		if($('.news').length){
			TweenMax.set($('.news > li article'), { clearProps: 'height'});
			$('.news > li article').each(function(index){
				TweenMax.set($(this), {height: $(this).closest('li').height()+'px'});
			});
		}
	}


	/**** INIT ****/
	imgFit();
	newsHeight();

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

	if($('.choices').length){
		var choices = $('.choices'),
			btnsChoices = choices.find('.btn-choice'),
			visualsChoices = choices.find('.visuel'),
			nbChoices = choices.find('li').length, j = 0,
			numCols = 4, numRows = 5, frameHeight = 200, frameWidth = 200,
			steppedEase = new SteppedEase(numCols-1),
			spritesTl = [];

		for(j; j<nbChoices; j++){
			var i = 0, sprite = visualsChoices.eq(j);
			spritesTl[j] = new TimelineMax({paused: true});
			for(i; i<numRows; i++){
			   spritesTl[j].add(TweenMax.fromTo(sprite, 0.15, {backgroundPosition: '0 -'+(frameHeight*i)+'px'}, {backgroundPosition: '-'+(frameWidth*(numCols-1))+'px -'+(frameHeight*i)+'px', ease: steppedEase}));
			}
			TweenMax.set(sprite, {backgroundPosition: '0 0'});
		}

		btnsChoices.on('mouseenter', function(){
			if(!choices.hasClass('choice-1-active') && !choices.hasClass('choice-2-active') && !choices.hasClass('choice-3-active') && !choices.hasClass('choice-4-active') && !choices.hasClass('choice-5-active')){
				var index = $(this).parents('li').index();
				spritesTl[index].play();
			}
		}).on('mouseout', function(){
			var index = $(this).parents('li').index();
			spritesTl[index].reverse();
		});
	}
	if($('.choices').length){
		btnsChoices.click(function(e){
			if(windowWidth>767){
				e.preventDefault();
				if(!$(this).closest('.choices').hasClass('choice-'+($(this).closest('li').index()+1)+'-active')){
					$(this).closest('.choices').addClass('choice-'+($(this).closest('li').index()+1)+'-active choice-'+($(this).closest('li').index()+1)+'-animating');
				}else{
					var choices = $(this).closest('.choices');
					choices.removeClass('choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active');
					setTimeout(function(){
						choices.removeClass('choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating');
					}, tpsAnimChoice);
				}
				if(windowWidth<=1150){
					var liParent = $(this).closest('li');
					$('.zone-content', liParent).slideToggle(300);
				}else{
					var index = $(this).parents('li').index();
					spritesTl[index].reverse();
				}
			}
		});
	}
	$('.btn-close-choice').click(function(e){
		e.preventDefault();
		var choices = $(this).closest('.choices');
		choices.removeClass('choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active');
		setTimeout(function(){
			choices.removeClass('choice-1-animating choice-2-animating choice-3-animating choice-4-animating choice-5-animating');
		}, tpsAnimChoice);
		if(windowWidth<=1150){
			var liParent = $(this).closest('li');
			$('.zone-content', liParent).slideToggle(300);
		}
	});

	$('#logo').on('click', function(e){
		e.preventDefault();
		if(windowWidth>1280){
			body.toggleClass('sidebar-links-open');
		}else{
			if(!body.hasClass('sidebar-links-open') && !body.hasClass('nav-header-open')){
				body.addClass('nav-header-open');
			}else if(!body.hasClass('sidebar-links-open')){
				body.removeClass('nav-header-open').addClass('sidebar-links-open');
			}else{
				body.removeClass('sidebar-links-open').addClass('nav-header-open');
			}
		}
	});
	$('#mask').on('click', function(e){
		e.preventDefault();
		body.removeClass('nav-header-open sidebar-links-open sidebar-account-open sidebar-tools-open');
	});
	$('#btn-close-sidebar-links').click(function(e){
		e.preventDefault();
		if(windowWidth>1280){
			body.removeClass('sidebar-links-open');
		}else{
			body.removeClass('sidebar-links-open').addClass('nav-header-open');
		}
	});
	$('#btn-close-nav-header').click(function(e){
		e.preventDefault();
		body.removeClass('nav-header-open');
	});
	$('#btn-close-header-responsive').click(function(e){
		e.preventDefault();
		if(body.hasClass('nav-header-open')){
			body.removeClass('nav-header-open');
		}else if(body.hasClass('sidebar-links-open')){
			body.removeClass('sidebar-links-open').addClass('nav-header-open');
		}else if(body.hasClass('sidebar-account-open')){
			body.removeClass('sidebar-account-open').addClass('nav-header-open');
		}else if(body.hasClass('sidebar-tools-open')){
			body.removeClass('sidebar-tools-open').addClass('nav-header-open');
		}
	});
	$('#btn-account').on('click', function(e){
		e.preventDefault();
		body.toggleClass('sidebar-account-open');
		if(windowWidth<=1280){
			body.removeClass('nav-header-open');
		}
	});
	$('#btn-close-sidebar-account').click(function(e){
		e.preventDefault();
		body.removeClass('sidebar-account-open');
		if(windowWidth<=1280){
			body.addClass('nav-header-open');
		}
	});
	$('#btn-tools').on('click', function(e){
		e.preventDefault();
		body.toggleClass('sidebar-tools-open');
		if(windowWidth<=1280){
			body.removeClass('nav-header-open');
		}
	});
	$('#btn-close-sidebar-tools').click(function(e){
		e.preventDefault();
		body.removeClass('sidebar-tools-open');
		if(windowWidth<=1280){
			body.addClass('nav-header-open');
		}
	});
	$('.btn-heart').on('click', function(e){
		e.preventDefault();
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
		} else {
			$(this).addClass('on');
		}
	});



	// Nav tabs responsive
	setResponsiveNavTabs();


	// Creation de compte - Interactive map
	if($('#mapForm').length && windowWidth > 767){
		if(!setMapFormActive){
			setMapForm();
		}
	}

	// Mon compte - Check main checkbox from sub fields
	/*if($('.block-sub-fields').length){
		var blockSubFields = $('.block-sub-fields'),
			subInputs = blockSubFields.find('> div').find('input'),
			mainInputs = blockSubFields.find('> input');

		if(subInputs.length){
			subInputs.on('change', function(e){
				if(($(this).attr('type') !== 'checkbox' && $(this).val()) || ($(this).attr('type') === 'checkbox' && $(this).prop('checked'))){
					$(this).parents('.block-sub-fields').find('> input').prop('checked', true);
				}
			});

			mainInputs.on('click', function(e){
				var thisSubInputs = $(this).parents('.block-sub-fields').find('> div').find('input');
				if($(this).prop('checked')){
					thisSubInputs.eq(0).focus();
				}
				if((thisSubInputs.attr('type') !== 'checkbox' && thisSubInputs.val()) || (thisSubInputs.attr('type') === 'checkbox' && thisSubInputs.prop('checked'))){
					$(this).prop('checked', true);
				}
			});
		}
	}*/

	// Mon compte - Block optionnal
	if($('.block-optionnal').length){
		var i = 0, blocks = $('.block-optionnal'), nbBlocks = blocks.length;
		for(i; i<nbBlocks; i++){
			var thisBlock = blocks.eq(i), checkbox = $('#'+thisBlock.attr('data-name'));
			checkbox.on('change', function(e){
				$(this).prop('checked') ? thisBlock.addClass('hidden') : thisBlock.removeClass('hidden');
			});
		}
	}


	// Mon compte - Edit form
	$('#editForm').on('click', function(e){
		var form = $('#formToEdit'), pwd, btn = $(this);
		e.preventDefault();
		if(form.length /*&& !form.find('.p-error').length*/){
			form.toggleClass('form-disabled').find('input').toggleAttr('disabled');
			form.find('button[type=submit]').toggleClass('hidden');
			form.hasClass('form-disabled') ? btn.html(btn.attr('data-edit')) : btn.html(btn.attr('data-cancel'));
			btn.toggleClass('btn-pen').toggleClass('btn-cancel').blur();
			if(form.find('.not-filled').length){
				form.find('.not-filled').toggleClass('hidden');
			}
			if(form.find('.block-pwd').length){
				pwd = form.find('.block-pwd');
				pwd.toggleClass('hidden').find('input').toggleAttr('disabled');
				pwd.find('button').toggleClass('hidden');
				if(form.find('.block-pwd2').length){
					form.find('.block-pwd2').toggleClass('hidden');
				}
			}
			if(form.siblings('.content-footer').length){
				form.siblings('.content-footer').toggleClass('hidden');
			}
		}
	});

	$('#editPwd').on('click', function(e){
		e.preventDefault();
		var pwd, btn = $(this);
		if(btn.parents('.block-pwd').length){
			pwd = $(this).parents('.block-pwd');
			pwd.find('input').toggleAttr('disabled');
			pwd.find('input').attr('disabled') ? btn.html(btn.attr('data-edit')) : btn.html(btn.attr('data-cancel'));
			btn.toggleClass('btn-pen').toggleClass('btn-cancel').blur();
			if(pwd.find('.block-pwd2').length){
				pwd.find('.block-pwd2').toggleClass('hidden');
			}
		}
	});


	// Detect adblock
	if(isBlocked){
		$('.wrapper-pub').addClass('hidden');
	}


	scrollPage();

    $(document).scroll(function(){
    	myScroll = $(document).scrollTop();
    	if($(window).width()>979){
    		if(myScroll + $(window).height() == $(document).height()) {
    			if($('.social-footer').hasClass('closed')){
    				TweenMax.set($('.social-footer'), {className:'-=closed'});
    			}
    		}else{
    			if(!$('.social-footer').hasClass('closed')){
    				TweenMax.set($('.social-footer'), {className:'+=closed'});
    			}
    		}
    	}else{
    		TweenMax.set($('.social-footer'), {className:'-=closed'});
    	}
    });

    function resizedw(){
        // Haven't resized in 100ms!
        if($('#header nav').length){
        	$('#header nav').removeClass('no-transition');
        }
        if($('#sidebar-account').length){
        	$('#sidebar-account').removeClass('no-transition');
        }
        if($('#sidebar-tools').length){
        	$('#sidebar-tools').removeClass('no-transition');
        }
        if($('#sidebar-links').length){
        	$('#sidebar-links').removeClass('no-transition');
        }
        if($('.bg-sidebar').length){
        	$('.bg-sidebar').removeClass('no-transition');
        }
    }

    var hammertime = new Hammer(document.getElementById('sidebar-links'));
    hammertime.on('swipeleft', function(ev) {
    	if(windowWidth<=1280){
	    	if(!body.hasClass('sidebar-links-open') && !body.hasClass('nav-header-open')){
	    		body.addClass('nav-header-open');
	    	}else if(!body.hasClass('sidebar-links-open')){
	    		body.removeClass('nav-header-open').addClass('sidebar-links-open');
	    	}else{
	    		body.removeClass('sidebar-links-open').addClass('nav-header-open');
	    	}
	    }
    });

    var hammertimeNav = new Hammer(document.getElementById('nav-header'));
    hammertimeNav.on('swiperight', function(ev) {
    	if(windowWidth<=1280){
	    	if(!body.hasClass('sidebar-links-open') && !body.hasClass('nav-header-open')){
	    		body.addClass('nav-header-open');
	    	}else if(!body.hasClass('sidebar-links-open')){
	    		body.removeClass('nav-header-open').addClass('sidebar-links-open');
	    	}else{
	    		body.removeClass('sidebar-links-open').addClass('nav-header-open');
	    	}
	    }
    });

    $(window).resize(function(){
    	var nh = $(window).height(), nw = $(window).width();
    	if (nw != windowWidth){
			// Si le resize se fait sur la largeur seulement
			body.removeClass('sidebar-links-open sidebar-account-open nav-header-open sidebar-tools-open');

			if($('.choices').length){
				choices.removeClass('choice-1-active choice-2-active choice-3-active choice-4-active choice-5-active choice-1-animating choice-2-animating choice-4-animating choice-5-animating')
					   .find('.zone-content').attr('style', '');
			}

			if($('#header nav').length){
				$('#header nav').addClass('no-transition');
			}
			if($('#sidebar-account').length){
				$('#sidebar-account').addClass('no-transition');
			}
			if($('#sidebar-tools').length){
				$('#sidebar-tools').addClass('no-transition');
			}
			if($('#sidebar-links').length){
				$('#sidebar-links').addClass('no-transition');
			}
			if($('.bg-sidebar').length){
				$('.bg-sidebar').addClass('no-transition');
			}

			clearTimeout(doit);
			doit = setTimeout(resizedw, 100);
		}
		windowHeight = nh;
		windowWidth = nw;

		setResponsiveNavTabs();

		// Creation de compte - Interactive map
		if($('#mapForm').length && windowWidth > 767){
			if(!setMapFormActive){
				setMapForm();
			}
		}

		// slider
		if($('#toSlide').length>0) {
			$('#toSlide li').each(function(index, el) {
				$(this).css('left',index*$(this).width());
			});
			setPosSlides();
		}
		if($('#lb').length>0) {
			$(".lightbox-content ul li").each(function(index, el) {
				$(this).css('left',index*$(this).width()-1);
			});
			setPosSlides();
		}

		newsHeight();
	});


	$(window).load(function(){
		newsHeight();
	});

	// Slider page detail
	function showHidePrevNext() {
		if (slideIndex == 0) {
			$('.prev-slide').hide();
		} else {
			$('.prev-slide').show();
		}
		if (slideIndex == $('#toSlide li').length-1) {
			$('.next-slide').hide();
		} else {
			$('.next-slide').show();
		}
	};
	function setPosSlides() {
		var valWidth = -$('#toSlide li').eq(0).width()*slideIndex;
		TweenMax.to($('#toSlide li'), 0.2, {x: valWidth});
		// lightbox
		var valWidth2 = -$(".lightbox-content ul li").eq(0).width()*slideIndex;
		TweenMax.to($(".lightbox-content ul li"), 0.2, {x: valWidth2});
	}
	if($('#toSlide').length>0) {
		$('#toSlide').prepend('<button class="prev-slide small" />');
		$('#toSlide').append('<button class="next-slide small" />');
		$('#toSlide li').each(function(index, el) {
			$(this).css('left',index*$(this).width()-1);
		});

		showHidePrevNext();

		$('.prev-slide').click(function(event) {
			slideIndex--;
			showHidePrevNext()
			setPosSlides();
		});

		$('.next-slide').click(function(event) {
			slideIndex++;
			showHidePrevNext()
			setPosSlides();
		});

		var hammerSlide = new Hammer(document.getElementById('toSlide'));
		hammerSlide.on('swipeleft', function(ev) {
		    if (slideIndex < $('#toSlide li').length-1) {
		    	slideIndex++;
				showHidePrevNext()
				setPosSlides();
			}
		});
		hammerSlide.on('swiperight', function(ev) {
			if (slideIndex > 0) {
			    slideIndex--;
				showHidePrevNext()
				setPosSlides();
			}
		});
		//lightbox gallerie
		$("#toSlide li a").on('click', function(e){
			e.preventDefault();
			createLightbox($(this).attr('href'), true, '#toSlide');
		});
		//lightbox générique
		$(".open-lighbox").on('click', function(e){
			e.preventDefault();
			createLightbox($(this).attr('href'), false, '');
		});
	}

	// lightbox
	function createLightbox(link, isImg, sliderElt) {
		$("body,html").css('overflow', 'hidden');
		if ($("#lb").length==0) {
			$('main').append('<div id="lb"><div class="black-mask"><button class="close-btn icon-cross"></button></div><button class="prev-slide"></button><button class="next-slide"></button><div class="lightbox-content"></div></div>');
			// juste une image
			if (isImg && sliderElt == '') {
				$(".lightbox-content").html("<ul><li><img src='"+link+"' /></li></ul>");
			}
			// un slider
			if (isImg && sliderElt != '') {
				if (sliderElt != '' && $(sliderElt+" li").length>0) {
					$(".lightbox-content").html("<ul></ul>");
					$(sliderElt+" a").each(function(index, el) {
						$(".lightbox-content ul").append("<li><img src='"+$(this).attr('href')+"' /></li>");
					});
					$(".lightbox-content ul li").each(function(index, el) {
						$(this).css('left',index*$(this).width()-1);
					});
					var valWidth2 = -$(".lightbox-content ul li").eq(0).width()*slideIndex;
					TweenMax.set($(".lightbox-content ul li"), {x: valWidth2});
					showHidePrevNext();
					$('#lb .prev-slide').click(function(event) {
						slideIndex--;
						showHidePrevNext()
						setPosSlides();
					});

					$('#lb .next-slide').click(function(event) {
						slideIndex++;
						showHidePrevNext()
						setPosSlides();
					});
				}
				var hammerSlide = new Hammer(document.getElementById('lb'));
				hammerSlide.on('swipeleft', function(ev) {
				    if (slideIndex < $('#toSlide li').length-1) {
				    	slideIndex++;
						showHidePrevNext()
						setPosSlides();
					}
				});
				hammerSlide.on('swiperight', function(ev) {
					if (slideIndex > 0) {
					    slideIndex--;
						showHidePrevNext()
						setPosSlides();
					}
				});
			} else {
				$(".lightbox-content").load(link+' .lightbox-content');
			}
		}
		$("#lb").addClass('on');
		$(".black-mask").on('click', closeLightbox);
		$(".close-btn").on('click', closeLightbox);
	}
	function closeLightbox(e) {
		$("#lb").remove();
		$("body,html").css('overflow', 'auto');
	}
	// fin slider

	// selects choix accompagnement
	if ($(".select-circle").length>0) {
		$(".select-circle .circle-step > li").each(function(index, el) {
			if (!$("input[type=checkbox]",this).prop('checked')) {
				$(this).addClass('closed');
				$("ul", this).slideToggle(0);
			}
		});
		$(".select-circle .circle-step > li header").on('click', function(e){
			if (!$('#formToEdit').hasClass('form-disabled')) {
				e.preventDefault();
				if ($("input[type=checkbox]",this).prop('checked')) {
					$("input[type=checkbox]",this).prop('checked',false);
					$(this).parent().addClass('closed');
				} else {
					$("input[type=checkbox]",this).prop('checked',true);
					$(this).parent().removeClass('closed');
				}
				$(this).next("ul").slideToggle(400);
			}
		});
	}


	// Google maps
	if(typeof google !== typeof undefined && $("body").hasClass('hasMaps')) {
		var $latitudeInput = $('#latitude');
		var $longitudeInput = $('#longitude');
		// Init geocoder
		var geocoder = new google.maps.Geocoder();
		// Init map
		var initLatLng = new google.maps.LatLng($('#map-canvas').attr('data-latIni'), $('#map-canvas').attr('data-longIni'));
		var mapOptions = {
			zoom: 9,
			center: initLatLng,
		};
		var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
		// Create a marker and set its position.
		var marker;
		// Google autocomplete
		var input = (document.getElementById('geolocalisation'));
		// Create the autocomplete helper, and associate it with
		// an HTML text input box.
		var autocomplete = new google.maps.places.Autocomplete(input);
		autocomplete.bindTo('bounds', map);
		// Get the full place details when the user selects a place from the
		// list of suggestions.
		google.maps.event.addListener(autocomplete, 'place_changed', function() {
			var place = autocomplete.getPlace();
			if (!place.geometry) {
				return;
			}
			var latitude = place.geometry.location.lat();
			var longitude = place.geometry.location.lng();
			var markerLatLng = new google.maps.LatLng(latitude, longitude);
			$latitudeInput.val(latitude);
			$longitudeInput.val(longitude);
			createMarker(markerLatLng);
			map.setCenter(markerLatLng);
		});
		if ($('#map-canvas').attr('data-mode') == "edit") {
			google.maps.event.addListener(map, 'click', function(event) {
				var latitude = event.latLng.lat();
				var longitude = event.latLng.lng();
				var latLng = new google.maps.LatLng(latitude, longitude);
				$latitudeInput.val(latitude);
				$longitudeInput.val(longitude);
				createMarker(latLng);
				sync(latLng);
			});
		}
		if ($('#map-canvas').attr('data-pinLat') != undefined && $('#map-canvas').attr('data-pinLong') != undefined) {
			var latLng = new google.maps.LatLng($('#map-canvas').attr('data-pinLat'), $('#map-canvas').attr('data-pinLong'));
			createMarker(latLng);
		}
		function createMarker(latLng) {
			// Removes the markers from the map
			if(typeof marker !== typeof undefined) {
				marker.setMap(null);
			}
			// Create a marker and set its position.
			var isDrag = false;
			var image;
			if ($('#map-canvas').attr('data-mode') == "edit") {
				isDrag = true;
			} else {
				image = {
				    url: 'layoutImg/pin@2x.png',
				    scaledSize: new google.maps.Size(45, 39),
				    origin: new google.maps.Point(0, 0),
				    anchor: new google.maps.Point(12, 38)
				  };
			}

			marker = new google.maps.Marker({
				map: map,
				position: latLng,
				icon:image,
				draggable:isDrag,
				raiseOnDrag:isDrag
			});
			marker.addListener('dragend',function(event) {
				var newLatitude = event.latLng.lat();
				var newLongitude = event.latLng.lng();
				var newLatLng = new google.maps.LatLng(newLatitude, newLongitude);
				$latitudeInput.val(newLatitude);
				$longitudeInput.val(newLongitude);
				sync(newLatLng);
			});
		}
		// Sync marker with map
		function sync(latLng) {
			geocoder.geocode({ 'latLng' : latLng }, function( results, status ){
				// validate
				if( status != google.maps.GeocoderStatus.OK ) {
					console.log('Geocoder failed due to: ' + status);
					return;
				} else if( !results[0] ) {
					console.log('No results found');
					return;
				}
				// get location
				var location = results[0];
				// update input
				$('#geolocalisation').val(location.formatted_address);
			});
		}
	}

});
