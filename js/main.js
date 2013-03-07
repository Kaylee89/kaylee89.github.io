$(document).ready(function() {
	
	$('.curtains').curtain({
			scrollSpeed : 1000,
			enableKeys: "true"			
	});
	

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

});