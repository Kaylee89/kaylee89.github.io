/*	======================================
		ContentSlide Plugin
		For sliding large divs within curtain.js
		Cover's.
		====================================== */
!function($) {

	var ContentSlide = function($instance, opts) {
		this.options   = $.extend({}, $.fn.contentSlide.defaults, opts)
		this.$viewport = $instance
		this.init()
	}

	ContentSlide.prototype = {
			init	: function() {
				this.$strip  = this.$viewport.find('.contentStrip')
				this.$slides = this.$viewport.find('.contentWrapper')
				this.current = this.options.start
				this.$viewport.scrollLeft(this.$slides.eq(this.current).position().left)
			}
		,	next	: function() {
				this.to(this.current+1)
			}
		,   prev	: function() {
				this.to(this.current-1)
			}
		,	to	: function(index) {

				if( index + 1 > this.$slides.length ) {
					index = (index+1) % this.$slides.length - 1;
				}

				this.current = index
				this.$viewport.animate({
					scrollLeft	: this.$slides.eq(index).position().left
				}, this.options.speed)
			}
	}

	$.fn.contentSlide = function(opts, param) {
		this.length && this.each(function() {
			var	$this = $(this)
			,	data    = $this.data('contentSlideInstance')
			,	options
			if( typeof opts === 'object' ) options = opts
			else options = {}
			if( !data ) $this.data('contentSlideInstance', (data = new ContentSlide($this, options)))
			if( typeof opts === 'string' ) data[opts](param)
		})
		return this
	}

	$.fn.contentSlide.defaults = {
			start : 0
		,	speed : 2000
	}

}(jQuery);
