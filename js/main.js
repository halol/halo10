$(document).ready(function() {
	console.log("im ready!");

	app =  {
		init: function() {
			// init
			console.log("app init!");	
			//app.closeMenu();

			
			

		},
		openMenu: function(e) {
			$('nav').animate({
				left: 0
			}, 500);
			$('<div class="nav-background"></div>').appendTo('body').click(function() {
				app.closeMenu();
				console.log('remove');
			});

		},
		closeMenu: function() {
			$('nav').animate({
				left: -500
			}, 500, function() {
				$('.nav-background').remove();
			});
		},
		resize: function() {
			$windowWidth = $(window).width();
			if ($windowWidth <= 767) {
				app.init();
				console.log("app init po resize");
			}

			
		},
		scrollTop: function() {
			$('html, body').animate({
				scrollTop: '0px'
			}, 300);
		},
		toggleDetails: function() {

		}
	}
	
	$(window).resize(function(event) {
		/* Act on the event */
		app.resize();
		console.log("ress");
	});
	app.resize();

	$(window).scroll(function() {
		if ($(this).scrollTop()) {
	        $('.scrolltop-button:hidden').stop(true, true).fadeIn();
	    } else {
	        $('.scrolltop-button').stop(true, true).fadeOut();
	    }
	});
	$('.scrolltop-button').click(function(e) {
		e.preventDefault();
		app.scrollTop();
	});
	$('.menu-trigger').click(function(e) {
		e.preventDefault();
		app.openMenu();
		console.log('click');
	});
	$('.project-details').click(function(e) {
		$(this).parent().closest('header').find('.project-info').slideToggle();
	});
});