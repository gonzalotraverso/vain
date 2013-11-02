$(document).ready(function(){

	/* hotel */
	$('.slider-options').each(function(index, value){ // hotel effects
		var $option = $(this);
		var optLeft = parseInt($option.data('left'));
		var optTop = parseInt($option.data('top'));
		var dur = $option.data('duration');
		$option.css({'left': optLeft+"px", 'top': optTop+"px", 'opacity':1});
	});

	$('.slider-option').each(function(index, value){ // hotel effects
		var $option = $(this);
		var optLeft = parseInt($option.css('left'));
		var optTop = parseInt($option.css('top'));
		var dur = $option.data('duration');
		if($option.hasClass("opt-top"))$option.css({top: (optTop+250)+'px', left: (optLeft-250)+'px', opacity: 1});
		if($option.hasClass("opt-bottom"))$option.css({top: (optTop-250)+'px', left: (optLeft-250)+'px', opacity: 1});
	});

	/* menu highlight */
	$(".section").waypoint(function(direction){
		var id = $(this).attr("id");
		var $highlight = $("#mobile-menu-highlight");
		switch (id){
			case "section-1":
				$highlight.html("<h2>HOME</h2>");
				break;
			case "section-2":
				if(direction == 'down'){
					$highlight.html("<h2>HOTEL</h2>");
				}else{
					$highlight.html("<h2>HOME</h2>");
				}
				break;
			case "section-3":
				if(direction == 'down'){
					$highlight.html("<h2>SERVICES</h2>");
				}else{
					$highlight.html("<h2>HOTEL</h2>");
				}
				break;
			case "section-4":
				if(direction == 'down'){
					$highlight.html("<h2>EVENTS</h2>");
				}else{
					$highlight.html("<h2>SERVICES</h2>");
				}
				break;
			case "section-5":
				if(direction == 'down'){
					$highlight.html("<h2>ROOMS</h2>");
				}else{
					$highlight.html("<h2>EVENTS</h2>");
				}
				break;
			case "section-6":
				if(direction == 'down'){
					$highlight.html("<h2>RATES</h2>");
				}else{
					$highlight.html("<h2>ROOMS</h2>");
				}
				break;
			case "section-7":
				if(direction == 'down'){
					$highlight.html("<h2>PRESS/CONTACT</h2>");
				}else{
					$highlight.html("<h2>RATES</h2>");
				}
				break;
		}
	});

	/* all */
	function resizeAll(){
		var winW = parseInt($(window).width());

		// header

		$('#mobile-menu-highlight').width(winW-128);

		// HOME
		var homeW = parseInt($(".home-center").width());
		if(winW <= 722){
			var dW = parseInt($(".top-left-diamond").width());
			$(".diamond").height(dW);
			var homeH = homeW*1.33;
			$(".home-center").css('cssText', "height:"+homeH+'px !important');
			
		}else{
			var homeH = homeW*0.7493;
			$(".home-center").css('cssText', "height:"+homeH+'px !important');

		}
		/* home logo */
		var $logo = $(".welcome");
		var homeH = parseInt($(".home-center").height());
		var logoH = parseInt($logo.height());
		var logoT = (homeH-logoH)/2;
		$logo.css('cssText', "top:"+logoT+"px !important");

		/* rooms */
		var $roomsWrap = $('.rooms-wrap');
		if(winW > 640){
			var roomsW = parseInt($('.rooms-wrap').width());
			$roomsWrap.height(roomsW);
		}else{
			$roomsWrap.css('height', 'auto');
		}

	}

	$(window).resize(function(){
		resizeAll();
	});
	resizeAll();

});