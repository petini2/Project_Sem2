$(document).ready(function () {
	"use strict"; // start of use strict

	/*==============================
	Menu
	==============================*/
	$('.header__btn').on('click', function() {
		$(this).toggleClass('header__btn--active');
		$('.header__nav').toggleClass('header__nav--active');
		$('.body').toggleClass('body--active');

		if ($('.header__search-btn').hasClass('active')) {
			$('.header__search-btn').toggleClass('active');
			$('.header__search').toggleClass('header__search--active');
		}
	});

	/*==============================
	Search
	==============================*/
	$('.header__search-btn').on('click', function() {
		$(this).toggleClass('active');
		$('.header__search').toggleClass('header__search--active');

		if ($('.header__btn').hasClass('header__btn--active')) {
			$('.header__btn').toggleClass('header__btn--active');
			$('.header__nav').toggleClass('header__nav--active');
			$('.body').toggleClass('body--active');
		}
	});

	/*==============================
	Home
	==============================*/
	$('.home__bg').owlCarousel({
		animateOut: 'fadeOut',
		animateIn: 'fadeIn',
		mouseDrag: false,
		touchDrag: false,
		items: 1,
		dots: false,
		loop: true,
		autoplay: false,
		smartSpeed: 600,
		margin: 0,
	});

	$('.home__bg .item').each( function() {
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	$('.home__carousel').owlCarousel({
		mouseDrag: false,
		touchDrag: false,
		dots: false,
		loop: true,
		autoplay: false,
		smartSpeed: 600,
		margin: 30,
		responsive : {
			0 : {
				items: 2,
			},
			576 : {
				items: 2,
			},
			768 : {
				items: 3,
			},
			992 : {
				items: 4,
			},
			1200 : {
				items: 4,
			},
		}
	});

	$('.home__nav--next').on('click', function() {
		$('.home__carousel, .home__bg').trigger('next.owl.carousel');
	});
	$('.home__nav--prev').on('click', function() {
		$('.home__carousel, .home__bg').trigger('prev.owl.carousel');
	});

	$(window).on('resize', function() {
		var itemHeight = $('.home__bg').height();
		$('.home__bg .item').css("height", itemHeight + "px");
	});
	$(window).trigger('resize');

	/*==============================
	Tabs
	==============================*/
	$('.content__mobile-tabs-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.content__mobile-tabs-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.content__mobile-tabs').attr('id');
		$('#'+id).find('.content__mobile-tabs-btn input').val(text);
	});

	/*==============================
	Section bg
	==============================*/
	$('.section--bg, .details__bg').each( function() {
		if ($(this).attr("data-bg")){
			$(this).css({
				'background': 'url(' + $(this).data('bg') + ')',
				'background-position': 'center center',
				'background-repeat': 'no-repeat',
				'background-size': 'cover'
			});
		}
	});

	/*==============================
	Filter
	==============================*/
	$('.filter__item-menu li').each( function() {
		$(this).attr('data-value', $(this).text().toLowerCase());
	});

	$('.filter__item-menu li').on('click', function() {
		var text = $(this).text();
		var item = $(this);
		var id = item.closest('.filter__item').attr('id');
		$('#'+id).find('.filter__item-btn input').val(text);
	});

	/*==============================
	Scroll bar
	==============================*/
	$('.scrollbar-dropdown').mCustomScrollbar({
		axis: "y",
		scrollbarPosition: "outside",
		theme: "custom-bar"
	});

	$('.accordion').mCustomScrollbar({
		axis: "y",
		scrollbarPosition: "outside",
		theme: "custom-bar2"
	});

	/*==============================
	Morelines
	==============================*/
	$('.card__description--details').moreLines({
		linecount: 6,
		baseclass: 'b-description',
		basejsclass: 'js-description',
		classspecific: '_readmore',
		buttontxtmore: "",
		buttontxtless: "",
		animationspeed: 400
	});

	/*==============================
	Gallery
	==============================*/
	var initPhotoSwipeFromDOM = function(gallerySelector) {
		// parse slide data (url, title, size ...) from DOM elements 
		// (children of gallerySelector)
		var parseThumbnailElements = function(el) {
			var thumbElements = el.childNodes,
				numNodes = thumbElements.length,
				items = [],
				figureEl,
				linkEl,
				size,
				item;

			for(var i = 0; i < numNodes; i++) {

				figureEl = thumbElements[i]; // <figure> element

				// include only element nodes 
				if(figureEl.nodeType !== 1) {
					continue;
				}

				linkEl = figureEl.children[0]; // <a> element

				size = linkEl.getAttribute('data-size').split('x');

				// create slide object
				item = {
					src: linkEl.getAttribute('href'),
					w: parseInt(size[0], 10),
					h: parseInt(size[1], 10)
				};

				if(figureEl.children.length > 1) {
					// <figcaption> content
					item.title = figureEl.children[1].innerHTML; 
				}

				if(linkEl.children.length > 0) {
					// <img> thumbnail element, retrieving thumbnail url
					item.msrc = linkEl.children[0].getAttribute('src');
				} 

				item.el = figureEl; // save link to element for getThumbBoundsFn
				items.push(item);
			}

			return items;
		};

		// find nearest parent element
		var closest = function closest(el, fn) {
			return el && ( fn(el) ? el : closest(el.parentNode, fn) );
		};

		// triggers when user clicks on thumbnail
		var onThumbnailsClick = function(e) {
			e = e || window.event;
			e.preventDefault ? e.preventDefault() : e.returnValue = false;

			var eTarget = e.target || e.srcElement;

			// find root element of slide
			var clickedListItem = closest(eTarget, function(el) {
				return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
			});

			if(!clickedListItem) {
				return;
			}

			// find index of clicked item by looping through all child nodes
			// alternatively, you may define index via data- attribute
			var clickedGallery = clickedListItem.parentNode,
				childNodes = clickedListItem.parentNode.childNodes,
				numChildNodes = childNodes.length,
				nodeIndex = 0,
				index;

			for (var i = 0; i < numChildNodes; i++) {
				if(childNodes[i].nodeType !== 1) { 
					continue; 
				}

				if(childNodes[i] === clickedListItem) {
					index = nodeIndex;
					break;
				}
				nodeIndex++;
			}

			if(index >= 0) {
				// open PhotoSwipe if valid index found
				openPhotoSwipe( index, clickedGallery );
			}
			return false;
		};

		// parse picture index and gallery index from URL (#&pid=1&gid=2)
		var photoswipeParseHash = function() {
			var hash = window.location.hash.substring(1),
			params = {};

			if(hash.length < 5) {
				return params;
			}

			var vars = hash.split('&');
			for (var i = 0; i < vars.length; i++) {
				if(!vars[i]) {
					continue;
				}
				var pair = vars[i].split('=');  
				if(pair.length < 2) {
					continue;
				}           
				params[pair[0]] = pair[1];
			}

			if(params.gid) {
				params.gid = parseInt(params.gid, 10);
			}

			return params;
		};

		var openPhotoSwipe = function(index, galleryElement, disableAnimation, fromURL) {
			var pswpElement = document.querySelectorAll('.pswp')[0],
				gallery,
				options,
				items;

			items = parseThumbnailElements(galleryElement);

			// define options (if needed)
			options = {

				// define gallery index (for URL)
				galleryUID: galleryElement.getAttribute('data-pswp-uid'),

				getThumbBoundsFn: function(index) {
					// See Options -> getThumbBoundsFn section of documentation for more info
					var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
						pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
						rect = thumbnail.getBoundingClientRect(); 

					return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
				}

			};

			// PhotoSwipe opened from URL
			if(fromURL) {
				if(options.galleryPIDs) {
					// parse real index when custom PIDs are used 
					// http://photoswipe.com/documentation/faq.html#custom-pid-in-url
					for(var j = 0; j < items.length; j++) {
						if(items[j].pid == index) {
							options.index = j;
							break;
						}
					}
				} else {
					// in URL indexes start from 1
					options.index = parseInt(index, 10) - 1;
				}
			} else {
				options.index = parseInt(index, 10);
			}

			// exit if index not found
			if( isNaN(options.index) ) {
				return;
			}

			if(disableAnimation) {
				options.showAnimationDuration = 0;
			}

			// Pass data to PhotoSwipe and initialize it
			gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
			gallery.init();
		};

		// loop through all gallery elements and bind events
		var galleryElements = document.querySelectorAll( gallerySelector );

		for(var i = 0, l = galleryElements.length; i < l; i++) {
			galleryElements[i].setAttribute('data-pswp-uid', i+1);
			galleryElements[i].onclick = onThumbnailsClick;
		}

		// Parse URL and open gallery if it contains #&pid=3&gid=1
		var hashData = photoswipeParseHash();
		if(hashData.pid && hashData.gid) {
			openPhotoSwipe( hashData.pid ,  galleryElements[ hashData.gid - 1 ], true, true );
		}
	};
	// execute above function
	initPhotoSwipeFromDOM('.gallery');

	/*==============================
	Player
	==============================*/
	function initializePlayer() {
		if ($('#player').length) {
			const player = new Plyr('#player');
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializePlayer());

	/*==============================
	Range sliders
	==============================*/
	/*1*/
	function initializeFirstSlider() {
		if ($('#filter__years').length) {
			var firstSlider = document.getElementById('filter__years');
			noUiSlider.create(firstSlider, {
				range: {
					'min': 2000,
					'max': 2018
				},
				step: 1,
				connect: true,
				start: [2005, 2015],
				format: wNumb({
					decimals: 0,
				})
			});
			var firstValues = [
				document.getElementById('filter__years-start'),
				document.getElementById('filter__years-end')
			];
			firstSlider.noUiSlider.on('update', function( values, handle ) {
				firstValues[handle].innerHTML = values[handle];
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeFirstSlider());

	/*2*/
	function initializeSecondSlider() {
		if ($('#filter__imbd').length) {
			var secondSlider = document.getElementById('filter__imbd');
			noUiSlider.create(secondSlider, {
				range: {
					'min': 0,
					'max': 10
				},
				step: 0.1,
				connect: true,
				start: [2.5, 8.6],
				format: wNumb({
					decimals: 1,
				})
			});

			var secondValues = [
				document.getElementById('filter__imbd-start'),
				document.getElementById('filter__imbd-end')
			];

			secondSlider.noUiSlider.on('update', function( values, handle ) {
				secondValues[handle].innerHTML = values[handle];
			});

			$('.filter__item-menu--range').on('click.bs.dropdown', function (e) {
				e.stopPropagation();
				e.preventDefault();
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeSecondSlider());

	/*3*/
	function initializeThirdSlider() {
		if ($('#slider__rating').length) {
			var thirdSlider = document.getElementById('slider__rating');
			noUiSlider.create(thirdSlider, {
				range: {
					'min': 0,
					'max': 10
				},
				connect: [true, false],
				step: 0.1,
				start: 8.6,
				format: wNumb({
					decimals: 1,
				})
			});

			var thirdValue = document.getElementById('form__slider-value');

			thirdSlider.noUiSlider.on('update', function( values, handle ) {
				thirdValue.innerHTML = values[handle];
			});
		} else {
			return false;
		}
		return false;
	}
	$(window).on('load', initializeThirdSlider());
});

$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 3
            }
        }]
    });
});
                    $j(window).load(function() {
                        var city = $j('.cinemas-area li span').filter('.siteactive').attr('id');
                        $j('.cinemas-list .' + city).show();
                        $j('#cgv_site_004').parent('li').addClass('current');
                        $j('.cgv-onlyone:first-child').addClass('current');
                        showtimestabs('tabs-cgv-showtimes');
                        $j('.iframe').colorbox({
                            iframe: true,
                            width: "80%",
                            height: "80%"
                        });
                        $j('.cinemas-area li').click(function() {
                            $j('.cinemas-list li').hide();
                            $j('.cinemas-list li').removeClass('current');
                            $j('.theater-container').html(''); //remove content
                            // Current city
                            var city = $j(this).find('span').attr('id');
                            $j('.cinemas-area li span').removeClass('siteactive');
                            $j('.cinemas-area li span#' + city).addClass('siteactive');
                            $j('.cinemas-list .' + city).show();
                        });
                        $j(".carousel").carousel();
                        $j('#loading-mask').hide();
                    });

                    function site(url, obj) {
                        var msBeforeAjaxCall = new Date().getTime();
                        $j('.cinemas-list li').removeClass('current');
                        $j(obj).parent('li').addClass('current');
                        history.pushState({}, '', url);
                        $j.ajax({
                            url: url,
                            beforeSend: function() {
                                $j('.slideshow-container .slideshow').cycle('destroy');
                                $j('.theater-container').empty();
                                $j('#loading-mask').show();
                            },
                        }).done(function(result) {
                            var html = $j(result).find('div.theater-container').children();
                            if (html.length === 0) {
                                location.reload(false);
                            }
                            $j('.theater-container').html(html);
                            // Send warning log message if response took longer than 2 seconds
                            // var msAfterAjaxCall = new Date().getTime();
                            // var timeTakenInMs = msAfterAjaxCall - msBeforeAjaxCall;
                            // if (timeTakenInMs > 2000){
                            // }
                            $j('.slideshow-container .slideshow').cycle({
                                slides: '> li',
                                pager: '.slideshow-pager',
                                pagerTemplate: '<span class="pager-box"></span>',
                                speed: 600,
                                pauseOnHover: true,
                                swipe: true,
                                prev: '.slideshow-prev',
                                next: '.slideshow-next',
                                fx: 'scrollHorz',
                                log: false
                            });
                            showtimestabs('tabs-format-cgv');
                            showtimestabs('tabs-cgv-showtimes');
                            $j('.cgv-onlyone:first-child').addClass('current');
                            $j(".carousel").carousel();
                            $j('.iframe').colorbox({
                                iframe: true,
                                width: "80%",
                                height: "80%"
                            });
                            $j('#loading-mask').hide();
                        });
                    }

                    function showtimestabs(clss) {
                        $j('.' + clss).each(function() {
                            var datewrapper = $j(this);
                            var hasTabs = datewrapper.hasClass('tabs');
                            var hasAccordion = datewrapper.hasClass('accordion');
                            var startOpen = datewrapper.hasClass('open');
                            var dl = datewrapper.children('dl:first');
                            var dts = dl.children('dt');
                            var panes = dl.children('dd');
                            var groups = new Array(dts, panes);
                            //Create a ul for tabs if necessary.
                            // $j('.toggle-tabs').remove();//remove to stop inserting duplicatedly
                            if (hasTabs) {
                                var ul = $j('<ul class="toggle-tabs"></ul>');
                                dts.each(function() {
                                    var dt = $j(this);
                                    var li = $j('<li></li>');
                                    li.html(dt.html());
                                    ul.append(li);
                                });
                                ul.insertBefore(dl);
                                var lis = ul.children();
                                groups.push(lis);
                            }
                            //Add "last" classes.
                            var i;
                            for (i = 0; i < groups.length; i++) {
                                groups[i].filter(':last').addClass('last');
                            }

                            function toggleClasses(clickedItem, group) {
                                var index = group.index(clickedItem);
                                var i;
                                for (i = 0; i < groups.length; i++) {
                                    groups[i].removeClass('current');
                                    groups[i].eq(index).addClass('current');
                                }
                            }
                            //Toggle on tab (dt) click.
                            dts.on('click', function(e) {
                                //They clicked the current dt to close it. Restore the datewrapper to unclicked state.
                                if ($j(this).hasClass('current') && datewrapper.hasClass('accordion-open')) {
                                    datewrapper.removeClass('accordion-open');
                                } else {
                                    //They're clicking something new. Reflect the explicit user interaction.
                                    datewrapper.addClass('accordion-open');
                                }
                                toggleClasses($j(this), dts);
                            });
                            //Toggle on tab (li) click.
                            if (hasTabs) {
                                lis.on('click', function(e) {
                                    toggleClasses($j(this), lis);
                                });
                                //Open the first tab.
                                lis.eq(0).trigger('click');
                            }
                            //Open the first accordion if desired.
                            if (startOpen) {
                                dts.eq(0).trigger('click');
                            }
                        });
                    }
                    (function($j) {
                        $j.fn.carousel = function(options) {
                            var settings = {
                                slider: ".datewrapper",
                                slide: "li",
                                previous: ".previous",
                                next: ".next"
                            };
                            options = $j.extend(settings, options);
                            return this.each(function() {
                                var $element = $j(this),
                                    $slider = $element.find(options.slider),
                                    $slide = $slider.find(options.slide),
                                    $previous = $element.find(options.previous),
                                    $next = $element.find(options.next),
                                    $item_w = (($j('.datewrapper').outerWidth()) / ($slide.eq(0).outerWidth() + 2)),
                                    $element_count = 0;
                                $element.find("> div").css("overflow", "hidden");
                                var showSlide = function(direction) {
                                    var singleWidth = $slide.eq(0).outerWidth() + 2,
                                        left = (direction == 1) ? "+=" + singleWidth : "-=" + singleWidth;

                                    $slider.stop(true, true).
                                    animate({
                                        scrollLeft: left
                                    }, 500);

                                };
                                $previous.on("click", function(e) {
                                    e.preventDefault();
                                    if ($element_count >= 1) {
                                        $element_count--;
                                        showSlide(-1);
                                    }
                                });
                                $next.on("click", function(e) {
                                    e.preventDefault();
                                    if ((($slide.length - $element_count) + 1) >= $item_w) {
                                        $element_count++;
                                        showSlide(1);
                                    }
                                });
                            });
                        };
                    })(jQuery);

                    function getscheduledate(data, obj) {
                        //var tempScrollTop = $j(window).scrollTop();
                        if ($j(obj).hasClass('current')) {
                            return;
                        }
                        //$j('.cinemas-list li').removeClass('current');
                        $j('.cgv-onlyone').removeClass('current');
                        $j(obj).addClass('current');
                        history.pushState({}, '', $j(location).attr('href'));
                        $j.ajax({
                            type: "POST",
                            url: $j(location).attr('href'),
                            data: {
                                "selecteddate": data
                            },
                            beforeSend: function() {
                                $j('.tabs-cgv-showtimes').empty();
                                $j('#loading-mask').show();
                                $j('.tab-container.last').removeClass('current');
                                $j('ul.toggle-tabs li').not(':first').removeClass('current');
                                $j('ul.toggle-tabs li:first').addClass('current');
                                $j('.datewrapper li').addClass('nocursor');
                            },
                        }).done(function(result) {
                            //$j(window).scrollTop(tempScrollTop);
                            var html = $j(result).find('div.tabs-cgv-showtimes').children();
                            if (!$j(html).hasClass('film-list')) {
                                html = 'No schedules available !';
                            }
                            $j('.tabs-cgv-showtimes').html(html);
                            //showtimestabs('tabs-cgv-showtimes');
                            //showtimestabs('tabs-format-cgv');
                            //showtimestabs('tabs-cgv-showtimes');
                            $j('.tab-container:first').addClass('current');
                            $j('li.cgv-onlyone').closest('ul.toggle-tabs').not(':first').remove();
                            $j('.tabs-cgv-showtimes li').removeClass('current');
                            $j("#" + obj.id).parent('li').addClass('current');
                            //$j('.cinemas-list li').removeClass('current');
                            //$j("#"+obj.lang).parent('li').addClass('current');
                            //$j('.iframe').colorbox({iframe:true, width:"80%", height:"80%"});
                            $j('.datewrapper li').removeClass('nocursor');
                            $j('#loading-mask').hide();
                        });
                    }
 


