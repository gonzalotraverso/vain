
(function(){

	var Menu = function(){
		this.$win = jQuery(window);
		this.$container = jQuery("header");
		this.$items = this.$container.find("nav ul li p");
		this.$sections = $(".section");
		this.$menuButton = this.$container.find(".mobile-menu");
		this.$highlight = this.$container.find("#mobile-menu-highlight");
		this.init();
	}

	Menu.prototype = {
		init: function(){
			this.winWidth = window.innerWidth ? window.innerWidth : $(window).width();
			this.menuHighlight();
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$menuButton.on('click', function(){
				self.displayMenu();
			});
			this.$items.on('click', function(){
				self.moveToSection($(this));
			});
		},
		displayMenu: function(){
			if(this.winWidth < 829){
				if(!this.$container.hasClass("act-menu")){
					this.$container.animate({height: "100%"});
					this.$container.addClass("act-menu");
				}else{
					this.$container.animate({height: "41px"});
					this.$container.removeClass("act-menu");
				}
			}
		},
		menuHighlight: function(){
			var self = this;
			this.$sections.waypoint(function(direction){
				var id = $(this).attr("id");
				switch (id){
					case "section-1":
						self.$highlight.html("<h2>HOME</h2>");
						break;
					case "section-2":
						if(direction == 'down'){
							self.$highlight.html("<h2>HOTEL</h2>");
						}else{
							self.$highlight.html("<h2>HOME</h2>");
						}
						break;
					case "section-3":
						if(direction == 'down'){
							self.$highlight.html("<h2>SERVICES</h2>");
						}else{
							self.$highlight.html("<h2>HOTEL</h2>");
						}
						break;
					case "section-4":
						if(direction == 'down'){
							self.$highlight.html("<h2>EVENTS</h2>");
						}else{
							self.$highlight.html("<h2>SERVICES</h2>");
						}
						break;
					case "section-5":
						if(direction == 'down'){
							self.$highlight.html("<h2>ROOMS</h2>");
						}else{
							self.$highlight.html("<h2>EVENTS</h2>");
						}
						break;
					case "section-6":
						if(direction == 'down'){
							self.$highlight.html("<h2>RATES</h2>");
						}else{
							self.$highlight.html("<h2>ROOMS</h2>");
						}
						break;
					case "section-7":
						if(direction == 'down'){
							self.$highlight.html("<h2>PRESS/CONTACT</h2>");
						}else{
							self.$highlight.html("<h2>RATES</h2>");
						}
						break;
				}
			});
		},
		moveToSection: function(clicked){
			var $section = this.$sections.closest("#"+clicked.data("to"));
			//var rect = $section.getBoundingClientRect();
			this.$win.scrollTo($section, 800);
			this.$container.animate({height: "41px"});
			this.$container.removeClass("act-menu");
		}
	}




	var ResizeAll = function(){
		this.$win = jQuery(window);
		this.$highlight = jQuery("#mobile-menu-highlight");
		this.$homeCenter = jQuery(".home-center");
		this.$diamonds = this.$homeCenter.find('.diamond')
		this.$TLDiamond = this.$homeCenter.find('.top-left-diamond');
		this.$logo = this.$homeCenter.find(".welcome");
		this.$roomsWrap = jQuery('.rooms-wrap');
		this.init();
	}

	ResizeAll.prototype = {
		init: function(){
			this.resizeStuff();
			this.bindEvents();
		},
		bindEvents: function(){
			var self = this;
			this.$win.on('resize', function(){
				self.resizeStuff();
			});
		},
		resizeStuff: function(){
			this.winW = window.innerWidth ? window.innerWidth : $(window).width();

			// header
			this.$highlight.width(this.winW-128);

			//HOME
			var homeW = parseInt(this.$homeCenter.width());
			if(this.winW <= 722){
				var dW = parseInt(this.$TLDiamond.width());
				this.$diamonds.height(dW);
				var homeH = homeW*1.33;
				this.$homeCenter.css('cssText', "height:"+homeH+'px !important');
				
			}else{
				var homeH = homeW*0.7493;
				this.$homeCenter.css('cssText', "height:"+homeH+'px !important');

			}

			var homeH = parseInt(this.$homeCenter.height());
			var logoH = parseInt(this.$logo.height());
			var logoT = (homeH-logoH)/2;
			this.$logo.css('cssText', "top:"+logoT+"px !important");

			/* rooms */
			if(this.winW > 640){
				var roomsW = parseInt(this.$roomsWrap.width());
				this.$roomsWrap.height(roomsW);
			}else{
				this.$roomsWrap.css('height', 'auto');
			}

		}
	}



	$(document).ready(function(){
		var menu = new Menu();
		var res = new ResizeAll();
	});

})();






	