$(document).ready(function(){


	/* Resize sections */
	function resizeSecs(){
		var height = $(window).height();
		$(".article").each(function(index, value){
			var minH = $(this).css('min-height');
			minH = minH.replace('px', '');
			var maxH = $(this).css('max-height');
			maxH = maxH.replace('px', '');
			if(height >= 768){
				$(this).children('.article-padding').height(height-83);
			}else{
				$(this).children('.article-padding').height(685);			
			}
			if( (minH < height ) && (maxH > height ) ){
				$(this).height(height);
				
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


	//$('body').mousewheel(function(event, delta){
		$('.slider-options').each(function(index, value){ // hotel effects
			var $option = $(this);
			var optLeft = $option.data('left');
			var optTop = $option.data('top');
			var dur = $option.data('duration');
			$('.hotel').waypoint(function(){
				//if(delta < 0){
					$option.animate({'left': optLeft, 'top': optTop, 'opacity':1}, dur);
				/*}else if (delta>0) {
					if ($option.hasClass("options-bottom")) {
						$option.animate({'left': optLeft+250, 'top': optTop+250, 'opacity':0}, dur);
					}else{
						$option.animate({'left': optLeft+250, 'top': optTop-250, 'opacity':0}, dur);
					}
				}*/
			});
		//});

		
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
		$('.room').show();
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
				if(parseInt($(window).height()) >= 768){
					$('#section-wrapper').mousewheel(function(event, delta) {
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

	$(".active-opt").siblings('.options-dark').css({opacity: 0}); // gives tyle to default active option
	$(".active-opt").siblings('.options-diamond').show();
	$(".active-opt").addClass("slider-option-active");

	$('.slider-option').hover(function(){ // slider options hover effects
		if(!$(this).hasClass("active-opt")){
			$(this).siblings('.options-dark').stop().animate({opacity: 0});
			$(this).siblings('.options-diamond').fadeIn();
		}
	}, function(){
		if(!$(this).hasClass("active-opt")){
			$(this).siblings('.options-dark').stop().animate({opacity: 1});
			$(this).siblings('.options-diamond').fadeOut();
		}
	});

	

	/* slidershow */

	$(".option-gallery").hide();
	$(".hotel-slider").load(function(){

	});
	$(".active-slide").show();


	$(".option-gallery ul li img").each(function(i, v){
		var $img = $(this);
		var imgW = $img.width();
		var imgH = $img.height();
		if(imgW > imgH){
			$img.addClass("landscape");
			var newP = Math.abs(-(($img.height()-443)/2));
			$img.css({'left': -newP+'px'});
		}else{
			$img.addClass("portrait");
			var newP = Math.abs(-(($img.height()-443)/2));
			$img.css({'top': -newP+'px'});
		}
		

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
		if(marL !== slideLength){
			$(".active-slide").animate({"margin-left": marL-443}, 500, 'easeInOutQuart');
		}
	});

	$(".slider-option").click(function(){
		var $option = $(this);
		if(!$option.hasClass("active-opt")){ //if its not the selected option
			$(".active-opt").siblings('.options-dark').stop().animate({opacity: 1}); // do mouse out effects for previous active option
			$(".active-opt").siblings('.options-diamond').fadeOut();
			$option.siblings('.options-dark').css({opacity: 0}); // keep mouse over effects on selected option
			$option.siblings('.options-diamond').show();
			$(".active-opt").removeClass("active-opt");
			$option.addClass("active-opt");
		}
		var item = $(this).parent().parent().attr("id").substr(8);
		var $gallery = $("#slider-"+item);
		var $active = $(".active-slide");
		if($gallery.attr("id") !== $(".active-slide").attr("id")){
			$active.fadeOut();
			$active.removeClass("active-slide")
			$gallery.animate({"margin-left":0}).addClass("active-slide").fadeIn();
		}
	});


	/* END */
	/*******************************************************************************/
	/* EVENTS EFFECTS */

	$(".events-gallery ul li img").each(function(i, v){
		var $img = $(this);
		
		$img.addClass("landscape");
		var newP = Math.abs(-(($img.width()-443)/2));
		$img.css({'left': -newP});
		
		
	});

	
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
	$(function(){

		

		$(".room ul li img").each(function(){
			var $img = $(this);
			$img.one('load', function() {
				var imgW = $img.width();
				var imgH = $img.height();
				var gallH = parseFloat($img.parents(".room").height());
				//var refRatio = 480/gallH;
				//if(imgW/imgH < refRatio){
					$img.addClass("portrait");

					var newP = (imgH-gallH)/2;
					$img.css({'top': -newP+'px'});
				/*}else{
					$img.addClass("landscape");
					var newP = Math.abs(-(($img.width()-480)/2));
					$img.css({'left': -newP+'px'});
				}*/
			}).each(function() {
				if(this.complete) $(this).load();
			});
		});

		$(".room").hover(function(){
			if(!$(this).hasClass("active-room")){
				var $roomG = $(this).children("ul");
				var $roomI = $(this).children(".room-info");
				$roomG.stop().animate({left: '-450px'});
				$roomI.stop().animate({right: '-450px'});
			}
		}, function(){
			if(!$(this).hasClass("active-room")){
				var $roomG = $(this).children("ul");
				var $roomI = $(this).children(".room-info");
				$roomG.stop().animate({left: '-480px'});
				$roomI.stop().animate({right: '-480px'});
			}
		});

		$(".room").click(function(){
			var $active = $(".active-room");
			$active.children("ul").stop().animate({left: '-480px'});
			$active.children(".room-info").stop().animate({right: '-480px'});
			$active.removeClass("active-room");
			$(this).addClass("active-room");
			
			var $roomG = $(this).children("ul");
			var $roomI = $(this).children(".room-info");
			$roomG.stop().stop().animate({left: 0}, 400, "easeInOutQuart");
			$roomI.stop().stop().animate({right: 0}, 400, "easeInOutQuart");
		});
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



});

