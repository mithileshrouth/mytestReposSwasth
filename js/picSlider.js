;(function ($) {
	$.PicSlider = function(context, options) {
		var self = this;
		self.context = context; 

		self.container = null;

		self.slides = null;

		self.current = 0; 

		self.next = 1; 

		self.length = 0; 

		self.dotWrap = null;

		self.dotes = null;

		self.classes = {

			container: 'picSlider-wrap',

			dotWrap: 'picDot-wrap'


		}

		self.defaults = {

			delay: 2000, 

			speed: 1000, 

			event: 'mouseover',

			animate: 'slide',

			selectors: {

				container: 'ul:first',

				slides: 'li',

				dotWrap: 'ol:first',

				dotes: 'li'
			}

		};

		self.options = $.extend({}, self.defaults, options);  

		self.startid = null;

		self.isstart = false;

		self.init = function(options) {

			
			self.container = self.context.find(self.options.selectors.container);
			self.slides = self.container.find(self.options.selectors.slides);
			self.length = self.slides.length;

		
			self.setup();

		
			self.on();

			self.loadOptions(options);
		
			return self.start(self.current);
		}

		self.setup = function() {
			
		
			var position = self.context.css('position');

			// 
			if(position === 'static') {
				self.context.css('position', 'relative');
			}

			self.context.css('overflow', 'hidden');
			self.container.addClass(self.classes.container)

		
			self.slides.hide();
			self.slides.eq(self.current).show();

		
			self.dotWrap = document.createElement('ol');
			self.container.after(self.dotWrap);
			self.dotWrap = self.context.find(self.options.selectors.dotWrap);
			self.dotWrap.addClass(self.classes.dotWrap);
			for (var i = 0; i < self.length; i++) {
				self.dotWrap.append('<li></li>');
			}
			self.dotes = self.dotWrap.find(self.options.selectors.dotes);
			self.dotes.eq(0).addClass('on');
		};

		self.on = function() {

		
			self.dotes.on(self.options.event, function(e) {

				
				self.stop();
				self.next = $(this).index();
				self.animate[self.options.animate](self.current,self.next);
				return self;
			});
		};

		self.loadOptions = function(options) {

		
			if(!(options.speed > 200)||!(options.delay > options.speed)) {
				options.delay = self.defaults.delay;
				options.speed = self.defaults.speed;
			}

			if(options.event !== 'mouseover') options.event = 'click';
			if(options.animate !== 'fade') options.animate = 'slide';
		}

		self.start = function() {

		
			self.isstart = true;
			self.startid = setInterval(function(){
				self.animate[self.options.animate](self.current,self.next);
			}, self.options.delay);
		};


	
		self.animate = {
		
			fade: function(current,next) {

				if(current != next) {
				
					self.dotes.removeClass('on');
					self.slides.eq(current).fadeOut(self.options.speed, function() {
					});
					self.dotes.eq(next).addClass('on');
					self.slides.eq(next).fadeIn(self.options.speed, function() {

						
						self.changeIndex();
					}

					);
				}else {

					
					self.changeIndex();
				}

			},

			slide: function(current,next) {

				if(current != next) {
					// console.log('from:'+self.current+',to:'+self.next);
					if(current < next){
						self.slides.eq(next).css('left', '1000px').show();
						self.dotes.removeClass('on');
						self.slides.eq(current).animate({left:'-1000px'},self.options.speed, function() {
							$(this).hide();
						});
						self.dotes.eq(next).addClass('on');
						self.slides.eq(next).animate({left:'0px'},self.options.speed, function() {

						
							self.changeIndex();
						}

						);
					}else{
						self.slides.eq(next).css('left', '-1000px').show();
						self.dotes.removeClass('on');
						self.slides.eq(current).animate({left:'2000px'},self.options.speed, function() {
							$(this).hide();
						});
						self.dotes.eq(next).addClass('on');
						self.slides.eq(next).animate({left:'0px'},self.options.speed, function() {

						
							self.changeIndex();
						}

						);
					}
				}else {

				
					self.changeIndex();
				}

			}
		}
		self.stop = function() {

		
			self.slides.stop(true, true); 
			clearInterval(self.startid);
			self.isstart = false;
			return self;
		}

		self.changeIndex = function() {

		
			if(self.isstart){

			
				(self.current<self.length-1)? ++self.current: self.current = 0;
				(self.next<self.length-1)? ++self.next: self.next = 0;

			}else{

				
				self.current = self.next;

				(self.next<self.length-1)? ++self.next: self.next = 0;

			
				return self.start();
			}
		}
		return self.init(self.options);
	};

	$.fn.picSlider = function (options) {
		return this.each(function () {
			var $this = $(this);

			
			if (!$.data(this, 'picSlider')) {
				$.data(this, 'picSlider', new $.PicSlider($this, options));
			}

		});
	};

})(jQuery);