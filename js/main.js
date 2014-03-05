$(document).ready(function() {
	
	$('.curtains').curtain({
			scrollSpeed : 2000,
			enableKeys: "true",
			curtainLinks: '.curtainLinks'			
	});
	
	
/*	Intro bokeh
	========================================= */
	
	$('.sparkles').zlayer({mass:15,confine:'y',canvas:'#splashContainer'});
	$('.bokeh1').zlayer({mass:10,force:'push',canvas:'#splashContainer'});
	/*$('.bokeh2').zlayer({mass:1,force:'push',canvas:'#splashContainer'});*/
	

/*	Bakery page
	========================================= */
	$('.bakeryPort').contentSlide({
			start : 0
		,	speed : 2000
	})

	$('a[href="#nextSlide"]').click(function(){
		$(this).closest('.wideViewport').contentSlide('next');
		// You can use:
		// $viewport.contentSlide('next')
		// $viewport.contentSlide('prev')
		// $viewport.contentSlide('to', {index})
		// Index starts @ 0
	});

	$('a[href="#prevSlide"]').click(function(){
		$(this).closest('.wideViewport').contentSlide('prev');
	});
	
	$(document).keydown(function(e){
		$visible = $('.wideViewport:visible')
		
	    if (e.keyCode == 37) { 
	       $visible.eq(0).contentSlide('prev');
	    }
	    
	    if (e.keyCode == 39) { 
	       $visible.eq(0).contentSlide('next');
	    }
	});
	
});