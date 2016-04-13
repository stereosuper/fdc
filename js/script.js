/**** VARIABLES ****/

// Alternative au CSS object-fit
// Fonction pour adapter la taille d'une image à son container
// Basé sur le script de Primož Cigler https://medium.com/@primozcigler/neat-trick-for-css-object-fit-fallback-on-edge-and-other-browsers-afbc53bbb2c3#.n2teu1z9m
function imgFit(){
	if ( ! Modernizr.objectfit ) {
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
$(function(){
	imgFit();
    $(document).scroll(function(){
    });

    $(window).resize(function(){
	});

	$(window).load(function(){
	});

});