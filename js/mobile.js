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



	/* all */
	function resizeAll(){
		var winW = parseInt($(window).width());
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
		if(winW > 640){
			var $roomsWrap = $('.rooms-wrap');
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