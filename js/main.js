(function(){
	"use strict";


	var Resizer = function(){
		this.$win = jQuery(window);
		this.$sections = jQuery("section");
		this.$gallery = jQuery(".bx-wrapper");
		this.init();
	};

	Resizer.prototype = {
		init: function(){
			this.winHeight = this.$win.height();
			this.resizeSecs();
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$win.on("resize", function(){
				self.resizeSecs();
			});
		},
		resizeSecs: function(){
			var self = this;
			$.each(this.$sections, function(i,v){
				var $section = $(this);
				var minH = parseInt($section.css("min-height"));
				var maxH = parseInt($section.css("max-height"));
				if(self.winHeight >= minH){
					$section.children('.article-padding').height(self.winHeight-83);
				}else{
					$section.children('.article-padding').height(minH-83);
				}
				if( (minH < self.winHeight ) && (maxH > self.winHeight ) ){
					$section.height(self.winHeight);
					if($section.hasClass("home") && typeof this.$gallery != 'undefined'){
						this.$gallery.height(self.winHeight);
					}
				}
			});
		}
	};






	/* HOTEL WAYPOINTS EFFECTS/ */
	var HotelEffects = function(){
		this.$hotel = jQuery('.hotel');
		this.$sliderOpts = this.$hotel.find('.slider-options');
		this.$sliderOpt = this.$hotel.find('.slider-option');
		this.$info = this.$hotel.find('.hotel-info-wrap');
		this.$activeOpt = this.$sliderOpt.siblings(".active-opt");
		this.$activeOpts = this.$sliderOpts.siblings("#"+this.$activeOpt.data("rec"));
		this.$galleries = this.$hotel.find('.option-gallery');
		this.$activeSlide = this.$galleries.siblings(".active-slide");
		this.$arrLeft = this.$hotel.find('#slider-arrow-left');
		this.$arrRight = this.$hotel.find('#slider-arrow-right');
		this.init();
	};

	HotelEffects.prototype = {
		init: function(){
			this.setUpLoc();
			this.setUpGallery();
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$hotel.waypoint(function(){
				self.doAnimations();
			});
			this.$sliderOpt.on({
				mouseenter: function () {
					self.optHover('on', $(this));
			    },
			    mouseleave: function () {
					self.optHover('off', $(this));
			    }
			});
			this.$arrLeft.on('click', function(){
				self.nextSlide('left');
			});
			this.$arrRight.on('click', function(){
				self.nextSlide('right');
			});
			this.$sliderOpt.on('click', function(){
				self.changeGallery($(this));
			});

		},
		doAnimations: function(){
			if(this.$info.css('display') == 'none'){
				var self = this;
				this.$info.fadeIn();
				this.$sliderOpts.each(function(){
					var $option = $(this);
					var optLeft = parseInt($option.data('left'));
					var optTop = parseInt($option.data('top'));
					var dur = $option.data('duration');
					$option.animate({'left': optLeft, 'top': optTop, 'opacity':1}, dur);
				});
				this.$sliderOpt.each(function(){
					var $option = $(this);
					var optLeft = parseInt($option.css('left'));
					var optTop = parseInt($option.css('top'));
					var dur = $option.data('duration');
					if($option.hasClass("opt-top"))
						$option.animate({top: (optTop+250)+"px", left: (optLeft-250)+"px", opacity: 1}, dur);
					else
						$option.animate({top: (optTop-250)+"px", left: (optLeft-250)+"px", opacity: 1}, dur);
				});
			}
		},
		setUpGallery: function(){
			var self = this;

			this.$activeOpts.find('.options-dark').css({opacity: 0}); // gives style to default active option
			this.$activeOpts.find('.options-diamond').show();
			var actId = this.$activeOpt.attr("id");
			this.$activeOpt.addClass(actId+"-visited");

			this.$activeSlide.show();
			this.$galleries.each(function(){
				$(this).find('img').each(function(){
					var $cont = $(this).parents('li');
					$(this).dilatation({container: $cont});
				});
				var numSlides = $(this).find("li").length;
				$(this).css({'width': numSlides*443});
			});

			$(".fancybox").fancybox();
		},
		optHover:function(e, elem){
			if(!elem.hasClass("active-opt")){
				var id = elem.data("rec");
				var $opts = this.$sliderOpts.siblings("#"+id);
				if(e == 'on'){
					$opts.find('.options-dark').stop().animate({opacity: 0});
					$opts.find('.options-diamond').fadeIn();
				}else{
					$opts.find('.options-dark').stop().animate({opacity: 1});
					$opts.find('.options-diamond').fadeOut();
				}
			}
		},
		nextSlide: function(dir){
			var marL = parseFloat(this.$activeSlide.css("margin-left"));
			var slideLength = ((this.$activeSlide.find("li").length)*(-443))+443;
			if(dir == 'left' && marL < 0)
				this.$activeSlide.animate({"margin-left": marL+443}, 500, 'easeInOutQuart');
			else if(dir == 'right' && marL !== slideLength)
				$(".active-slide").animate({"margin-left": marL-443}, 500, 'easeInOutQuart');
		},
		changeGallery: function(elem){
			var $option = elem;
			var $sel = this.$sliderOpts.siblings("#"+$option.data("rec"));
			if(!$option.hasClass("active-opt")){ //if its not the selected option
				var actId = this.$activeOpt.attr("id");
				this.$activeOpt.removeClass(actId+"-visited");
				this.$activeOpts.find('.options-dark').stop().animate({opacity: 1}); // do mouse out effects for previous active option
				this.$activeOpts.find('.options-diamond').fadeOut();
				$sel.find('.options-dark').css({opacity: 0}); // keep mouse over effects on selected option
				$sel.find('.options-diamond').show();
				this.$activeOpt.removeClass("active-opt");
				$option.addClass("active-opt");
				this.$activeOpt = $option;
				$(".active-opt").addClass($(".active-opt").attr("id")+"-visited");
				this.$activeOpts = $sel;
			}

			var item = $option.data("rec").substr(8);
			var $gallery = this.$galleries.siblings("#slider-"+item);
			//if($option.hasClass("loaded")){ // if gallery is already loaded
				if($gallery.attr("id") !== this.$activeSlide.attr("id")){ // if selected is not active gallery
					this.$activeSlide.fadeOut();
					this.$activeSlide.removeClass("active-slide");
					$gallery.animate({"margin-left":0}).addClass("active-slide").fadeIn();
					this.$activeSlide = $gallery;
				}
			/*}else{
				console.log("entro");
				this.$activeSlide.fadeOut();
				this.$activeSlide.removeClass("active-slide");
				$gallery.load("galleries.php "+"#hotel #hotel-"+item+" ul", function(){ // load gallery
					$gallery.animate({"margin-left":0}).addClass("active-slide").fadeIn();
					this.$activeSlide = $gallery;
					$option.addClass("loaded");
					$gallery.find("img").each(function(){
						var $cont = $(this).parents('li');
						$(this).dilatation({container: $cont});
						
					});
					var numSlides = $gallery.find("li").length;
					$gallery.css({'width': numSlides*443});
				});

			}*/
		},
		setUpLoc: function(){
			var self = this;
			$("a#inline").fancybox({
				'hideOnContentClick': true,
				afterShow : function(){
					self.initMap();
				}
			});
		},
		initMap: function(){
			var noPoi = [
	            {
	                featureType: "poi.business",
	                stylers: [
	                  { visibility: "off" }
	                ]   
	              }
	            ];

            var loc_map = document.getElementById('location-map');
            var map_options = {
              center: new google.maps.LatLng(-34.583694,-58.424887),
              zoom: 15,
              mapTypeId: google.maps.MapTypeId.ROADMAP,
              styles: noPoi
            }
            var map = new google.maps.Map(loc_map, map_options)
            var iconBase = 'http://www.wearegrossa.com/vain/img/';
            var marker = new google.maps.Marker({
              position: new google.maps.LatLng(-34.583694,-58.424887),
              map: map,
              icon: {url: iconBase + 'marker.png', anchor: new google.maps.Point(32, 66)},
              //shadow: iconBase + 'schools_maps.shadow.png'
            });


            var locations = [
		      ['<h4>Subte linea D - Estación Plaza Italia</h4>', -34.580966,-58.420562],
		      ['<h4>Polo Científico y Tecnológico</h4>', -34.582530, -58.428876],
		      ['<h4>US Embassy</h4>', -34.573626, -58.418469],
		      ['<h4>La Rural</h4>', -34.578316, -58.420626],
		      ['<h4>Plaza Italia</h4>', -34.581311, -58.420862]
		    ];


		    var infowindow = new google.maps.InfoWindow({
		      maxWidth: 160
		    });

		    var newMarker;

		    for (var i = 0; i < locations.length; i++) {
		    	newMarker = new google.maps.Marker({
	        		position: new google.maps.LatLng(locations[i][1], locations[i][2]),
			        map: map,
		      	});

		      	google.maps.event.addListener(newMarker, 'click', (function(newMarker, i) {
			        return function() {
			          infowindow.setContent(locations[i][0]);
			          infowindow.open(map, newMarker);
			        }
			      })(newMarker, i));
		    };
            
		}
	};





	/* DOUBLE ARROWS */
	var DoubleArrow = function(){
		this.$bod = jQuery('body');
		this.$arrows = this.$bod.find('.scroll-arrow-wrap');
		this.$section = this.$bod.find('section').first();
		this.init();
	};

	DoubleArrow.prototype = {
		init: function(){
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$arrows.on({
				click: function(){
					self.nextSection();
				},
				mouseenter: function(){
					self.animateArrows($(this));	
				}
			});
		},
		nextSection: function(){
			var $next = this.$section.next();
			this.$bod.scrollTo($next, 800, {easing:'easeInOutCirc'});
			this.$section = $next;
		},
		animateArrows: function(elem){
			$(elem).find('.scroll-big').animate({'margin-top': '50px', opacity: 0}, 400, 'easeInCubic', function(){
				$(this).css({'margin-top': '-50px'}).delay(100).animate({'margin-top': '0', opacity: 1}, 400, 'easeInCubic');
			} );
			$(elem).find('.scroll-small').animate({'margin-top': '50px', opacity: 0}, 500, 'easeInCubic', function(){
				$(this).css({'margin-top': '-50px'}).animate({'margin-top': '0', opacity: 1}, 500, 'easeInCubic');
			} );
		}
	};


	//
	// SECTIONS NAVIGATION 
	// CURRENTLY NOT IMPLEMENTED
	//
	var SecNav = function(){
		this.$doc = jQuery(document);
		this.$bod = jQuery('body');
		this.$sections = this.$bod.find('section');
		this.$firstSection = this.$sections.first();
		this.$lastSection = this.$sections.last();
		this.$section = null;
		this.init();
	};

	SecNav.prototype = {
		init: function(){
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$bod.on('mousewheel', function(event, delta){
				self.scrollSec(event, delta);
			});
		},
		sectionInView: function(){
			var self = this;
			var docTop = jQuery(document).scrollTop();
			console.log(docTop);
			this.$sections.each(function(){
				var top = $(this).offset().top;
				var bottom = top + $(this).height();
				if (docTop >= top && docTop <= bottom){
					self.$section = $(this);
					return false;
				}
			});
		},
		scrollSec: function(e, d){
			if ($('.no-scroll:hover').length == 0) {
				this.sectionInView();
				e.preventDefault();
				if( d < 0 )
					this.moveScroll(jQuery(this.$section.next()).attr('id'), 'down');
				else
					this.moveScroll(jQuery(this.$section.prev()).attr('id'), 'up');
			}
		},
		moveScroll: function(section, dir){
			if( (dir == 'up' && this.$section != 0) || (dir == 'down' && this.$section != this.$last) ){
				console.log(section);
				this.$bod.scrollTo($(section), 800, {easing:'easeInOutCirc'});
			}

		}
	};



	// 
	// ROOMS EFFECTS
	// 
	// 	
	var RoomsEvents = function(){
		this.$rooms = jQuery(".rooms");
		this.$roomWrapper = this.$rooms.find(".room-wrapper");
		this.$bottomRooms = this.$rooms.find(".bottom-room");
		this.$topRooms = this.$rooms.find(".top-room");
		this.init();
	};

	RoomsEvents.prototype = {
		init: function(){
			this.hover = false;

			this.$roomWrapper.addClass('rooms-closed');

			this.setGalleries();
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$rooms.waypoint(function(){
				self.parallaxEffects();
			});
			this.$roomWrapper.on({
				mouseenter: function(){
					self.hoverRoom(jQuery(this), !self.hover);
				},
				mouseleave: function(){
					self.hoverRoom(jQuery(this), self.hover);
				},
				click: function(){
					self.openGallery(jQuery(this));
				}
			});
		},
		setGalleries: function(){
			this.$roomWrapper.each(function(){
				var $info = jQuery(this).find(".room-info");
				var $infoText = $info.find(".room-info-info");
				var infoHeight = ( jQuery(this).height() * 0.48 ) - 34;
				$infoText.height(infoHeight);
			});
			
		},
		parallaxEffects: function(){
			this.$roomWrapper.show();
			this.$rooms.find('#vroom').animate({'opacity': 1, 'top': 0});
			this.$rooms.find('#aroom').animate({'opacity': 1, 'right': 0});
			this.$rooms.find('#iroom').animate({'opacity': 1, 'left': 0});
			this.$rooms.find('#nroom').animate({'opacity': 1, 'bottom':0});
		},
		hoverRoom: function(elem, hov){
			var $roomG = elem.find(".room-gallery");
			var $roomI = elem.find(".room-info");

			if(!elem.hasClass('active-room')){
				if(hov){
					var right = (elem.hasClass('rooms-closed')) ? '-450px' : '-258px';
					var left = '-642px';
				}else{
					var right = (elem.hasClass('rooms-closed')) ? '-480px' : '-288px';
					var left = '-672px';
				}
				$roomG.stop().animate({left: left});
				$roomI.stop().animate({right: right});
			}	
		},
		openGallery: function(elem){
			var $active = this.$rooms.find(".active-room");
			if(!elem.is($active)){

				// close active and assign active-room class to this
				$active.find(".room-gallery").stop().animate({left: '-672px'});
				$active.find(".room-info").stop().animate({right: '-480px'});
				$active.removeClass("active-room");
				elem.addClass("active-room");

				var $roomOpen = this.$rooms.find(".room-open");
				$roomOpen.removeClass("room-open");
				this.$roomWrapper.find(".room-info").css({"right": "-480px"});

				if(elem.hasClass("top-room")){
					var $inactRooms = this.$bottomRooms;
					var $actRooms = this.$topRooms;
					var $openRoom = elem.siblings(".top-room");
				}else{
					var $inactRooms = this.$topRooms;
					var $actRooms = this.$bottomRooms;
					var $openRoom = elem.siblings(".bottom-room");
				}
				$inactRooms.animate({height: "30%", width: "480px"}).addClass("rooms-closed");
				$inactRooms.find(".room-badge").animate({top: "50%", "margin-top": "-55px"}, "easeInOutQuart");
				$actRooms.removeClass("rooms-closed");
				elem.animate({width: "70%", height: "70%"});
				$openRoom.addClass("room-open").animate({width: "30%", height: "70%"});
				$openRoom.find(".room-badge").animate({left: "50%", "margin-left": "-55px"}, "easeInOutQuart");

				var $roomG = elem.find(".room-gallery");
				var $roomI = elem.find(".room-info");
				$roomG.stop().animate({left: 0}, 400, "easeInOutQuart");
				$roomI.stop().animate({right: 0}, 400, "easeInOutQuart");

				var $info = elem.find(".room-info-info");
				if(!$info.hasClass('mCustomScrollbar'))
					$info.mCustomScrollbar();
			}
		}
	};



	$(document).ready(function(){
		$(".home-slider").bxSlider({
			mode: "fade",
			pager: false,
			controls: false,
			auto: true
		});



		var res = new Resizer();
		var hotel = new HotelEffects();
		var arrows = new DoubleArrow();
		//var secnav = new SecNav();
		var rooms = new RoomsEvents();

		/* Home Slider */

		


		/* END */
		/*******************************************************************************/
		/* Parallax effects */





		$('.services').waypoint(function(){ // services effects
			$(".services-sections").show();
			$('#in-house-wrap').animate({'top': 0, 'opacity': 1}, 500);
			$('#external-wrap').animate({'bottom': 0, 'opacity': 1}, 500);
			if(!$(".services-sections").hasClass("services-on")){
				$(".services-sections").mCustomScrollbar({
		                    theme: "dark-thin"
		                });
			}
			$(".services-sections").addClass("services-on")
		});

		$('.events').waypoint(function(){ // events effects
			$('#corporate-wrap').show().animate({'top': 0, 'opacity': 1}, 300);
			$('#social-wrap').delay(50).show().animate({'top': 0, 'opacity': 1}, 300);
			$('#wedding-wrap').delay(100).show().animate({'top': 0, 'opacity': 1}, 300);
		});
		


		/* END */
		/*******************************************************************************/
		/* Scroll to with mousewheel */

		

	var Parallax = {
			utils: {
				doSlide: function(section) {
					var top = section.position().top;
					
					$('body').stop().scrollTo(section, 800, {easing:'easeInOutCirc'});
					section.addClass('slided').siblings('section.section').removeClass('slided');
				}
			},
			fn: {
				
				onSiteScroll: function() {
					var section = null;
					$('body').on('mousewheel', function(event, delta) {
						if ($('.no-scroll:hover').length == 0) {
							event.preventDefault();
							if(!$('body').is(':animated')){
								if (delta < 0) {
									section = ($('.slided').length) ? $('.slided') : $('#section-1');
									var next = (section.next().length) ? section.next() : section;
									Parallax.utils.doSlide(next);
								}
								else if(delta > 0) {
									section = ($('.slided').length) ? $('.slided') : $('#section-1');
									var prev = (section.prev().length) ? section.prev() : $('#section-1');
									Parallax.utils.doSlide(prev);
								}
							}
						}
					});

				}
			},

			init: function() {
				for (var prop in this.fn) {
					if (typeof this.fn[prop] === 'function') {
						this.fn[prop]();
					}
				}
			}
		};

		
		Parallax.init();
		






		/* END */
		/*******************************************************************************/
		/* ScrollTo menu */
		$('nav ul li p').click(function(){
			var section = $('#'+$(this).attr("data-to"));
			Parallax.utils.doSlide(section);
		});

		$('.header-logo').click(function(){
			Parallax.utils.doSlide($("#section-1"));
		});
		
		/* END */
		/*******************************************************************************/
		/* Waypoints - menu active */
		$('.article').each( function(index, value){
			$(this).waypoint(function(){
				$('nav ul li p').css({'color':'#5f5c5e'});
				$('nav ul li p').children("span").css({opacity:0});
				$('#to-'+$(this).attr('id')).css({'color':'#c26192'});
				$('#to-'+$(this).attr('id')).children("span").css({opacity:1});
			});

		});

		$('.article-end').each(function(){
			$(this).waypoint(function(){
				$('nav ul li p').css({'color':'#5f5c5e'});
				$('nav ul li p').children("span").css({opacity:0});
				$('#to-'+$(this).attr('id').substring(0, 9)).css({'color':'#c26192'});
				$('#to-'+$(this).attr('id').substring(0, 9)).children("span").css({opacity:1});
			});
		});


		
		

		


		/* END */
		/*******************************************************************************/
		/* EVENTS EFFECTS */

		$('.events-gallery').css({height: (parseFloat($(window).height())-83)*0.63});

		

		$(".events-gallery").each(function(i,v){
			var $gall = $(this);
			var gallH = -$gall.parent().height()*0.63;
			$gall.attr('data-top', gallH);
			$gall.css({top: gallH});
		});
		
		

		$(".events-item-info").each(function(i,v){
			var $info = $(this);
			var infoH = -$info.parent().height()*0.37;
			$info.attr('data-bottom', infoH);
			$info.css({bottom: infoH});
			
		});


		$(".events-items").hover(function(){
			if(!$(this).hasClass("active-event")){
				var $evG = $(this).children(".events-gallery");
				var $evI = $(this).children(".events-item-info");
				$evG.stop().animate({top: parseFloat($evG.data('top'))+30});
				$evI.stop().animate({bottom: parseFloat($evI.data('bottom'))+30});
			}
		}, function(){
			if(!$(this).hasClass("active-event")){
				var $evG = $(this).children(".events-gallery");
				var $evI = $(this).children(".events-item-info");
				$evG.stop().animate({top: parseFloat($evG.data('top'))-30});
				$evI.stop().animate({bottom: parseFloat($evI.data('bottom'))-30});
			}
		});

		$(".events-items").click(function(){
			var $item = $(this);
			var $active = $(".active-event");
			var $info = $item.find(".events-info");
			var $itemInfo = $item.find(".events-item-info");
			var evH = $itemInfo.height();
			$info.css({height: evH-70});

			$active.children(".events-gallery").stop().animate({top: $active.children(".events-gallery").data("top")});
			$active.find(".events-item-info").stop().animate({bottom: $active.children(".events-item-info").data("bottom")}, function(){
				$active.find(".events-info").mCustomScrollbar("destroy");
			});
			if(!$info.hasClass("mCustomScrollbar")){
				$info.mCustomScrollbar({
		            theme: "light-thin"
		        });
			}
			$active.removeClass("active-event");
			$item.addClass("active-event");


			
			var $evG = $item.children(".events-gallery");
			var $evI = $item.children(".events-item-info");
			$evG.stop().animate({top: 0}, 600, "easeInOutQuart");
			$evI.stop().animate({bottom: 0}, 600, "easeInOutQuart");
		});

		

		/* END */
		/*******************************************************************************/
		/* RATES EFFECTS */
		
		$(".left-rate").css({left:"-500px", opacity: 0});
		$(".right-rate").css({left:"500px", opacity: 0});
		$(".rates").waypoint(function(){
			$(".inner-rate").animate({left: 0, opacity: 1});
			$(".outer-rate").delay(100).animate({left: 0, opacity: 1});
		});

		/* END */
		/*******************************************************************************/
		/* BEING GREEN */

		$(".beinggreen").css({top: -(parseInt($(".beinggreen").height())+2)});

		$("#green").click(function(event){
			event.preventDefault();
			$(".beinggreen").animate({top:0}, 400, "easeInOutQuart");
		});

		$("#close-green").click(function(event){
			event.preventDefault()
			$(".beinggreen").animate({top:-(parseInt($(".beinggreen").height())+2)}, 400, "easeInOutQuart");
		});

		/* END */
		/*******************************************************************************/
		/* EVENTS/ROOMS SLIDER */

		$('.room-gallery, .events-gallery').each(function(){
			var $cont = $(this);
			$cont.find("img").dilatation({container: $cont});
		});


		

		$(".events-gallery").each(function(){
			var $controls = $(this).next().children(".events-gallery-controls");
			$(this).rubberO({
				controls: $controls
			});
		});

		$(".room-gallery").each(function(){
			var $controls = $(this).next().children(".room-gallery-controls");
			$(this).rubberO({
				controls: $controls
			});
		});


		/* END */
		/*******************************************************************************/
		/* FIXED LOCATION */
		var $loc = $("#fixed-location"); 
		var locW = $loc.outerWidth();
		var $arrow = $("#fixed-location-arrow");
		$arrow.css({"background-position": "center bottom"});
		$loc.css({left: -locW+50});
		$('#fixed-location-right').on("click", function(){
			var $loc = $("#fixed-location"); 
			var locW = $loc.outerWidth();
			var $arrow = $("#fixed-location-arrow");
			if($loc.hasClass("open")){
				$loc.animate({left: -locW+50})
				$arrow.css({"background-position": "center bottom"});
				$loc.removeClass("open")		
			}else{
				$loc.animate({left: 0});
				$arrow.css({"background-position": "center top"});
				$loc.addClass("open")
			}
			
		});

		/* END */
		/*******************************************************************************/
		/* CANCELATION */
		$("#cancelation").click(function(){
			$("#cancelation-policy").fadeIn();
		});

		$("#cancelation-policy").find(".loc-cross").on('click', function(){
			$("#cancelation-policy").fadeOut();
		});


		/* END */
		/*******************************************************************************/





	});

})();