/*!
* reSlider v1.3
* Copyright (c) 2013 Brandon Miller
* Dual licensed under the MIT and GPL licenses:
* http://www.opensource.org/licenses/mit-license.php
* http://www.gnu.org/licenses/gpl.html
**/
(function($){
	$.fn.reSlider = function(options) {
		// Variables
		var $sliderWrap = $(this),
			$slider = $sliderWrap.find(".reslider"),
			$sliderItems = $sliderWrap.find(".reslider > li"),
			slideLen = $sliderItems.length,
			num = -1,
			theDelay = '',
			$curSlide = '',
			$nxtSlide = '',
			$nav = '',
			$navLinks = '',
			animType = '',
			bulletNavClicked = false,
			goToPrevious = false;
		// Defaults
		var defaults = {
			speed: 500,
			delay: 9000,
			animation: "fade",
			buildBulletNav: true,
			buildDirNav: true,
			buildThumbNav: false,
			autoPlay: true
		};
		// Combine Defaults and Options into Settings
		var settings = $.extend({}, defaults, options);

		// Make overflow visible for Items that go outside box (arrows)
		$slider.css({ "overflow": "visible" });

		var plugin = {

			// Build Bullet Navigation
			buildBulletNav: function() {
				//Declare Variables before Loop
				var bulletItems = '', 
					bulletNum;
				for (var i = 0; i < slideLen; i++) {
					bulletNum = i + 1;
					bulletItems += '<span class="bullet-link">' + bulletNum + '</span>';
				}
				$sliderWrap.append('<div class="reslider-nav">' + bulletItems + '</div>');
				$nav = $sliderWrap.find('.reslider-nav');
				$navLinks = $nav.find('.bullet-link');
				$navLinks.eq(0).addClass("current");
				// click setup
				$navLinks.on("click", function(){
					var index = $(this).index();
					// Set Current/Next Slides, reset Delay, start animation
					$curSlide = $slider.find($(".current"));
					$nxtSlide = $($sliderItems[index]);
					// Don't Call if You click on the current link
					if ($curSlide.index() !== $nxtSlide.index()) {
						num = (index - 2);
						bulletNavClicked = true;
						plugin.delayTimer("clear");
						settings.animation();
					}
				});
			},

			// Build Directional Navigation
			buildDirNav: function() {
				$sliderWrap.append('<div class="dir-nav"><span class="dir-link prev">&laquo;</span> <span class="dir-link next">&raquo;</span></div>');
				var $prev = $sliderWrap.find(".prev"),
					$next = $sliderWrap.find(".next");
				$prev.on("click", function(){
					if (! $slider.is(':animated')) { // prevent over clicking
						num = num - 2;
						goToPrevious = true;
						plugin.delayTimer("clear");
						settings.animation();
					}
				});
				$next.on("click", function(){
					if (! $slider.is(':animated')) { // prevent over clicking
						plugin.delayTimer("clear");
						settings.animation();
					}
				});
			},
			
			// Build Thumbnail Navigation
			buildThumbNav: function() {
				// html should look like.. 
				// <div class="thumb-nav"><span class="thumb-link"><img></span></div>
				$thumbNav = $sliderWrap.find('.thumb-nav');
				$thumbLinks = $thumbNav.find('.thumb-link');
				$thumbLinks.eq(0).addClass("current");
				// click setup
				$thumbLinks.on("click", function(){
					var index = $(this).index();
					// Set Current/Next Slides, reset Delay, start animation
					$curSlide = $slider.find($(".current"));
					$nxtSlide = $($sliderItems[index]);
					// Don't Call if You click on the current link
					if ($curSlide.index() !== $nxtSlide.index()) {
						num = (index - 2);
						bulletNavClicked = true;
						plugin.delayTimer("clear");
						settings.animation();
					}
				});
			},

			// Set Widths
			setWidths: function() {
				var totalWidth = slideLen * 100 + "%",
					slideWidth = 100 / slideLen;
				$slider.width(totalWidth);
				$sliderItems.each(function() {
					$(this).outerWidth(slideWidth +"%");
				});
			},
			
			// Order Nav
			orderNav: function() {
				if (animType === 'carousel') {
					var navIndex = (num >= (slideLen-4)) ? 0 : num + 2; // Reset Index if max slide reached.. accounts for duplicate slides
				} else {
					var navIndex = (num >= (slideLen-2)) ? 0 : num + 2; // Reset Index if max slide reached
				}
				if (settings.buildBulletNav) {
					$navLinks.removeClass("current");
					$navLinks.eq(navIndex).addClass("current");
				}
				if (settings.buildThumbNav) {
					$thumbLinks.removeClass("current");
					$thumbLinks.eq(navIndex).addClass("current");
				}
			},

			// Stop Slider on Hover.. Start on Mouse Out
			pauseSlider: function() {
				$slider.mouseover(function(){
					plugin.delayTimer("clear");
				});
				$slider.mouseout(function(){
					plugin.delayTimer();
				});
			},

			// Infinite Carousel (sliding)
			carousel: function() {
				plugin.orderNav();
				//if (num >= 2) num = 2; // prevent over clicking
				num++;
				$slider.animate({
					left:"-" + (num + 2) + "00%"
				}, settings.speed, function(){
					// if last slide... switch to first
					if (num >= (slideLen - 3)) { 
						$slider.css({ left:"-100%" }); // switch to first
						num = -1;
					}
					// if first slide (and going left)... switch to last
					if (num < -1) { 
						$slider.css({ left:"-" + (slideLen - 2) + "00%" }); // switch to last
						num = slideLen - 4;
					}
				});
				plugin.delayTimer();
			}, 

			// Slide
			slide: function() {
				plugin.orderNav();
				num++;
				if (num === (slideLen - 1)) { // if last slide... reset
					$slider.animate({
						left:"0"
					}, settings.speed);
					num = -1;
					plugin.delayTimer();
				} else if (num < -1) { // if first slide (and going left)
					$slider.animate({
						left:"-" + (slideLen - 1) + "00%"
					}, settings.speed);
					num = slideLen - 2;
					plugin.delayTimer();
				} else { 
					$slider.animate({
						left:"-" + (num + 1) + "00%"
					}, settings.speed);
					plugin.delayTimer();
				}
			},

			// Fade
			fade: function() {
				plugin.orderNav();
				num++;
				// If bulletNav NOT Clicked
				if (!bulletNavClicked) {
					//$curSlide = (num < 0) ? $($sliderItems[slideLen - 1]) : $($sliderItems[num]); 
					if (num === (slideLen - 1)) { // if last slide
						$curSlide = $($sliderItems[num]);
						$nxtSlide = $($sliderItems[0]);
						num = -1;
					} else if (num < -1) { // if first slide (and going left)
						$curSlide = $($sliderItems[0]);
						$nxtSlide = $($sliderItems[slideLen - 1]);
						num = slideLen - 2;
					} else {
						// 
						$curSlide = (goToPrevious) ? $($sliderItems[num + 2]) : $($sliderItems[num]);
						$nxtSlide = $($sliderItems[num + 1]);
					}
				}
				// Fade Out Current, Fade In Next
				$nxtSlide.show(0, function(){
					$curSlide.fadeOut(settings.speed, function(){
						$curSlide.removeClass("current");
						$nxtSlide.addClass("current");
						plugin.delayTimer();
					});
				});
				bulletNavClicked = false;
				goToPrevious = false;
			},

			// Animation Type
			animControl: function() {
				animType = settings.animation;
				switch (animType) 
				{
					case "fade":
						settings.animation = plugin.fade;
						$sliderWrap.addClass("rs-fade");
						$sliderItems.eq(0).addClass("current");
						$sliderItems.not(":eq(0)").hide();
						break;
					case "slide":
						settings.animation = plugin.slide;
						plugin.setWidths();
						$sliderWrap.addClass("rs-slide");
						break;
					case "carousel":
						settings.animation = plugin.carousel;
						$sliderWrap.addClass("rs-slide");
						// Duplicate / Starting Pt
						$sliderItems.eq(0).clone().appendTo($slider);
						$sliderItems.eq(slideLen - 1).clone().prependTo($slider);
						$slider.css({left:"-100%"});
						// Reset Widths w/new duplicated slides
						$sliderItems = $sliderWrap.find(".reslider > li");
						slideLen = $sliderItems.length;
						$slider.width(slideLen * 100 + "%");
						$sliderItems.each(function() {
							$(this).outerWidth((100 / slideLen) +"%");
						});
						break;
				}
				plugin.delayTimer();
			},

			// Clear Timeout
			clearDelay: function() {
				clearTimeout(theDelay);
			},

			// Timer
			delayTimer: function(clear) {
				if (settings.autoPlay) {
					plugin.clearDelay();
					if (clear === undefined || null) theDelay = setTimeout(settings.animation, settings.delay); // Start timer unless clear was
				}
			}, 

			// Init
			init: function() {
				$slider.wrap('<div class="reslider-inner"></div>');
				if (slideLen < 2) return; // Don't do anything if there is only one item or no items.
				if (settings.buildBulletNav) plugin.buildBulletNav();
				if (settings.buildDirNav) plugin.buildDirNav();
				if (settings.buildThumbNav) plugin.buildThumbNav();
				// Start
				plugin.animControl();
				plugin.pauseSlider();
			}
		};
		// START IT ALL
		plugin.init();
	};
})(jQuery);