$(document).ready(function(){
	/* Home Slider */

	$(".home-slider").bxSlider({
		mode: "fade",
		pager: false,
		controls: false,
		auto: true
	});


	/* Resize sections */
	function resizeSecs(){
		var height = $(window).height();
		var width = $(window).width();
		$(".article").each(function(index, value){
			var minH = $(this).css('min-height');
			minH = minH.replace('px', '');
			var maxH = $(this).css('max-height');
			maxH = maxH.replace('px', '');
			if(height >= minH){
				$(this).children('.article-padding').height(height-83);
			}else{
				$(this).children('.article-padding').height(minH-83);
			}
			if( (minH < height ) && (maxH > height ) ){
				$(this).height(height);
				if($(this).hasClass("home")){
					$(".bx-wrapper").height(height);
				}
			}
		});

		


	}

	resizeSecs();

	$(window).resize(function(){
		resizeSecs();
	});

	/* END */
	/*******************************************************************************/
	/* Parallax effects */
	
	/*var controller = $.superscrollorama();
	controller.addTween('.top-left-diamond', TweenMax.from( $('.top-left-diamond'), .25, {css:{left:'-90px', top:'25px', opacity: 1}, ease:Quad.easeInOut}), 0, 300);
	controller.addTween('.bottom-right-diamond', TweenMax.from( $('.bottom-right-diamond'), .25, {css:{left:'400px', top:'288px', opacity: 1}, ease:Quad.easeInOut}), 0, 500);

	/* with waypoints */
/*
	$(".slider-option").each(function(){
		var $opt = $(this);
		$opt.css({left: parseInt($opt.css("left"))+250+"px", opacity: 0});
		if($opt.hasClass("opt-top")) $opt.css({top: parseInt($opt.css("top"))-250+"px"});
		if($opt.hasClass("opt-bottom")) $opt.css({top: parseInt($opt.css("top"))+250+"px"});
	});*/

	$('.slider-options').each(function(index, value){ // hotel effects
		var $option = $(this);
		var optLeft = parseInt($option.data('left'));
		var optTop = parseInt($option.data('top'));
		var dur = $option.data('duration');
		$('.hotel').waypoint(function(){
			$option.animate({'left': optLeft+"px", 'top': optTop+"px", 'opacity':1}, dur);
		});
	});

	$('.slider-option').each(function(index, value){ // hotel effects
		var $option = $(this);
		var optLeft = parseInt($option.css('left'));
		var optTop = parseInt($option.css('top'));
		var dur = $option.data('duration');
		$('.hotel').waypoint(function(){
			if($option.hasClass("opt-top"))$option.animate({top: (optTop+250)+'px', left: (optLeft-250)+'px', opacity: 1}, dur);
			if($option.hasClass("opt-bottom"))$option.animate({top: (optTop-250)+'px', left: (optLeft-250)+'px', opacity: 1}, dur);
		});
	});







	$('.services').waypoint(function(){ // services effects
		$('#in-house-wrap').animate({'top': 0, 'opacity': 1}, 500);
		$('#external-wrap').animate({'bottom': 0, 'opacity': 1}, 500);
	});

	$('.events').waypoint(function(){ // events effects
		$('#corporate-wrap').show().animate({'top': 0, 'opacity': 1}, 300);
		$('#social-wrap').delay(50).show().animate({'top': 0, 'opacity': 1}, 300);
		$('#wedding-wrap').delay(100).show().animate({'top': 0, 'opacity': 1}, 300);
	});
	

	$('.rooms').waypoint(function(){
		$('.room-wrapper').show();
		$('#vroom').animate({'opacity': 1, 'top': 0});
		$('#aroom').animate({'opacity': 1, 'right': 0});
		$('#iroom').animate({'opacity': 1, 'left': 0});
		$('#nroom').animate({'opacity': 1, 'bottom':0});
	});

	/* END */
	/*******************************************************************************/
	/* Scroll to with mousewheel */

	

var Parallax = {
		utils: {
			doSlide: function(section) {
				var top = section.position().top;/*
				$('#section-wrapper').stop().animate({
					top: -top
				}, 600, 'linear', function() {
					section.addClass('slided').siblings('div.section').removeClass('slided');
				});*/
				$('body').stop().scrollTo(section, 800, {easing:'easeInOutCirc'});
				section.addClass('slided').siblings('section.section').removeClass('slided');
			}
		},
		fn: {
			setHeights: function() {
				//$('div.section').height($(window).height());
			},
			onSiteScroll: function() {
				var section = null;
				$('body').mousewheel(function(event, delta) {
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
	/* Arrow navigation */
	$('.scroll-arrow-wrap').click(function(){
		var section = $('#'+$(this).parents(".section").next('.section').attr("id"));
		Parallax.utils.doSlide(section);
	});


	$('.scroll-arrow-wrap').hover(function(){
		$(this).children('.scroll-big').animate({'margin-top': '50px', opacity: 0}, 400, 'easeInCubic', function(){
			$(this).css({'margin-top': '-50px'}).delay(100).animate({'margin-top': '0', opacity: 1}, 400, 'easeInCubic');
		} );
		$(this).children('.scroll-small').animate({'margin-top': '50px', opacity: 0}, 500, 'easeInCubic', function(){
			$(this).css({'margin-top': '-50px'}).animate({'margin-top': '0', opacity: 1}, 500, 'easeInCubic');
		} );
	}, function(){

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
	/* Waypoint fade animations */

	$('.hotel').waypoint(function(){
		$('.hotel-info-wrap').fadeIn();
	});

	/* END */
	/*******************************************************************************/
	/* SLIDER */


	



	/* slider options */
	var $act = $("#"+$(".active-opt").data("rec"));
	$act.children().children('.options-dark').css({opacity: 0}); // gives tyle to default active option
	$act.children().children('.options-diamond').show();
	var actId = $(".active-opt").attr("id");
	$(".active-opt").addClass(actId+"-visited");

	$('.slider-option').hover(function(){ // slider options hover effects
		if(!$(this).hasClass("active-opt")){
			var id = $(this).data("rec");
			$("#"+id).children().children('.options-dark').stop().animate({opacity: 0});
			$("#"+id).children().children('.options-diamond').fadeIn();
		}
	}, function(){
		if(!$(this).hasClass("active-opt")){
			var id = $(this).data("rec");
			$("#"+id).children().children('.options-dark').stop().animate({opacity: 1});
			$("#"+id).children().children('.options-diamond').fadeOut();
		}
	});

	

	/* slidershow */

	$(".option-gallery").hide();
	$(".hotel-slider").load(function(){

	});
	$(".active-slide").show();

	$(".option-gallery ul li img").each(function(){
		var $cont = $(this).parents('li');
		$(this).dilatation({container: $cont});
	});



	$(".option-gallery").each(function(i,v){
		var numSlides = $(this).children().children("li").length;
		$(this).css({'width': numSlides*443});
	});


	$('#slider-arrow-left').click(function(){
		var marLL = parseFloat($(".active-slide").css("margin-left"));
		if(marLL < 0){
			$(".active-slide").animate({"margin-left": marLL+443}, 500, 'easeInOutQuart');
		}
	});
	$('#slider-arrow-right').click(function(){
		var marL = parseFloat($(".active-slide").css("margin-left"));
		var slideLength = (($(".active-slide").children().children("li").length)*(-443))+443;
		console.log(slideLength);
		console.log(marL);
		if(marL !== slideLength){
			$(".active-slide").animate({"margin-left": marL-443}, 500, 'easeInOutQuart');
		}
	});

	$(".slider-option").click(function(){
		var $option = $(this);
		var $sel = $("#"+$(this).data("rec"));
		if(!$option.hasClass("active-opt")){ //if its not the selected option
			var $active = $("#"+$(".active-opt").data("rec"));
			var actId = $(".active-opt").attr("id");
			$(".active-opt").removeClass(actId+"-visited");
			$active.children().children('.options-dark').stop().animate({opacity: 1}); // do mouse out effects for previous active option
			$active.children().children('.options-diamond').fadeOut();
			$sel.children().children('.options-dark').css({opacity: 0}); // keep mouse over effects on selected option
			$sel.children().children('.options-diamond').show();
			$(".active-opt").removeClass("active-opt");
			$option.addClass("active-opt");
			$(".active-opt").addClass($(".active-opt").attr("id")+"-visited")
		}

		var item = $(this).data("rec").substr(8);
		var $gallery = $("#slider-"+item);
		var $active = $(".active-slide");
		if($option.hasClass("loaded")){ // if gallery is already loaded
			if($gallery.attr("id") !== $(".active-slide").attr("id")){ // if selected is not active gallery
				$active.fadeOut();
				$active.removeClass("active-slide")
				$gallery.animate({"margin-left":0}).addClass("active-slide").fadeIn();
			}
		}else{
			$active.fadeOut();
			$active.removeClass("active-slide")
			$gallery.load("galleries.html "+"#hotel #hotel-"+item+" ul", function(){ // load gallery
				$gallery.animate({"margin-left":0}).addClass("active-slide").fadeIn();
				$option.addClass("loaded")
				$option.children("ul li img").each(function(){
					var $cont = $(this).parents('li');
					$(this).dilatation({container: $cont});
					
				});
				var numSlides = $gallery.children().children("li").length;
				$gallery.css({'width': numSlides*443});
			});

		}
	});

	$(".fancybox").fancybox();


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
		var $active = $(".active-event");
		$active.children(".events-gallery").stop().animate({top: $active.children(".events-gallery").data("top")});
		$active.children(".events-item-info").stop().animate({bottom: $active.children(".events-item-info").data("bottom")});
		$active.removeClass("active-event");
		$(this).addClass("active-event");
		
		var $evG = $(this).children(".events-gallery");
		var $evI = $(this).children(".events-item-info");
		$evG.stop().animate({top: 0}, 600, "easeInOutQuart");
		$evI.stop().animate({bottom: 0}, 600, "easeInOutQuart");
	});

	/* END */
	/*******************************************************************************/
	/* ROOMS EFFECTS */


		$(".room-wrapper").addClass("rooms-closed")

		$(".room-wrapper").each(function(){
			var $room = $(this);
			var $roomG = $room.children().children(".room-gallery");
			var $roomI = $room.children().children(".room-info");
			

			
			$room.hover(function(){
				if(!$room.hasClass("active-room")){
					if($room.hasClass("rooms-closed")){
						rright = '-450px';
					}else{
						rright = '-258px';
					}
					$roomG.stop().animate({left: '-642px'});
					$roomI.stop().animate({right: rright});
				}
			}, function(){
				if(!$room.hasClass("active-room")){
					if($room.hasClass("rooms-closed")){
						rright = '-480px';
					}else{
						rright = '-288px';
					}
					$roomG.stop().animate({left: '-672px'});
					$roomI.stop().animate({right: rright});
				}
			});
		});


		

		$(".room-wrapper").click(function(){
			var $active = $(".active-room");
			if(!$(this).hasClass("active-room")){

				$active.children().children(".room-gallery").stop().animate({left: '-672px'});
				$active.children().children(".room-info").stop().animate({right: '-480px'});
				$active.removeClass("active-room");
				$(this).addClass("active-room");
				
				$(".room-wrapper").children(".room").children(".room-info").css({"right": "-480px"});
				$(".room-open").removeClass("room-open");			
				if($(this).hasClass("top-room")){
					$inactRooms = $(".bottom-room");
					$actRooms = $(".top-room");
					$openRoom = $(this).siblings(".top-room");
				}else{
					$inactRooms = $(".top-room");
					$actRooms = $(".bottom-room");
					$openRoom = $(this).siblings(".bottom-room");
				}
				$inactRooms.animate({height: "30%", width: "480px"}).addClass("rooms-closed");
				$inactRooms.find(".room-badge").animate({top: "50%", "margin-top": "-55px"}, "easeInOutQuart");
				$actRooms.removeClass("rooms-closed");
				$(this).animate({width: "70%", height: "70%"});
				$openRoom.addClass("room-open").animate({width: "30%", height: "70%"});
				$openRoom.find(".room-badge").animate({left: "50%", "margin-left": "-55px"}, "easeInOutQuart")


				var $roomG = $(this).children().children(".room-gallery");
				var $roomI = $(this).children().children(".room-info");
				$roomG.stop().animate({left: 0}, 400, "easeInOutQuart");
				$roomI.stop().animate({right: 0}, 400, "easeInOutQuart");
			}
			
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

	/**/



});

