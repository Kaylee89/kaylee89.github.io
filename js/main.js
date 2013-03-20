$(document).ready(function() {
	
	$('.curtains').curtain({
			scrollSpeed : 1000,
			enableKeys: "true"			
	});
	
	
/*	Intro bokeh
	========================================= */
	
	$('.background').zlayer({mass:15,confine:'y',canvas:'#container'});
	$('.bokeh1').zlayer({mass:8,force:'push',canvas:'#container'});
	$('.bokeh2').zlayer({mass:5,force:'push',canvas:'#container'});
	

/*	Bakery page
	========================================= */
	$('#bakeryPort').contentSlide({
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