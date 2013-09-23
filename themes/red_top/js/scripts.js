$(function(){
	/* Nav Menu */
	var flyout = $('.has-flyout');
	flyout.hover(function() {
		var width = $(this).width();
		$(this).find('ul.flyout').eq(0).show();
		$(this).find('ul.flyout').eq(0).animate({opacity: '1', top: '59px'}, 200);
		//This positions sub menus to the left if they go off screen
		if ($(this).children('.flyout').length > 0) {
		  var elm = $(this).children('.flyout');
		  var off = elm.offset();
		  var l = off.left;
		  var w = elm.width();
		  var docW = $(window).width();

		  var isEntirelyVisible = (l + w <= docW);

		  if (!isEntirelyVisible) {
		    $('.flyout', this).addClass('edge');
		  }
		}
	}, function() {
	$(this).find('.flyout').eq(0).stop().fadeOut(0);
	$(this).find('.flyout').eq(0).stop().animate({opacity: '0', top: '90px'});
	});

	/* NiceScroll */
	

	/* Sequence Slider */
    (function(){
    	var options = {
	        nextButton: true,
	        prevButton: true,
	        animateStartingFrameIn: true,
	        autoPlay: true,
	        autoPlayDelay: 5000,
	        preloadTheseFrames: [1],
    	};
    	$('#sequence .pre').delay(800).fadeOut();
    	var sequence = $("#sequence").sequence(options).data("sequence");
    })();

	/* Responsive Video */
	(function(){
		var vid = $('.video');
		if (vid.length > 0) {
			$('.video').fitVids();
		}
	})();

	// Portfolio
	(function() {
		var imgCont = $('.portfolio .img-container'),
		img = imgCont.find('img'),
		top = imgCont.find('.top'),
		bottom = imgCont.find('.bottom');

		imgCont.hover(function() {
			$(this).find(img).stop().animate({opacity: '.2'});
			$(this).find(top).stop().animate({opacity: '1', top: '0'});
			$(this).find(bottom).stop().animate({opacity: '1', bottom: '0'});
		}, function() {
			$(this).find(top).stop().animate({opacity: '0', top: '-20px'});
			$(this).find(bottom).stop().animate({opacity: '0', bottom: '-20px'});
			$(this).find(img).stop().animate({opacity: '1'});
		});
	})();

	// Members
	(function() {
		var imgCont = $('.img-container'),
		img = imgCont.find('img'),
		mask = imgCont.find('.mask'),
		span = mask.find('span');

		$('.member').hover(function() {
			$(this).find(img).stop().animate({opacity: '.4'});
			$(this).find(mask).stop().animate({opacity: '1'});
			$(this).find(span).stop().animate({top: '0', opacity: '1'});
		}, function() {
			$(this).find(img).stop().animate({opacity: '1'});
			$(this).find(mask).stop().animate({opacity: '0'});
			$(this).find(span).stop().animate({top: '-30px', opacity: '0'});
		});
	})();

	/* UI Elements */
	// Tabs

	// Toggle
	$('#toggle').find('.toggle').click(function() {
		var header = $(this).find('h6');
		var text = $(this).find('.content');

		if (text.is(':hidden')) {
		  header.addClass('active');
		  text.slideDown('fast');
		} else {
		  header.removeClass('active');
		  text.slideUp('fast');
		}
	});

	

	/* Contact form */
	$('#send').click(function(){ 
		$('.error').fadeOut('slow'); 

		var error = false;

		var name = $('input#name').val();
		if(name == "" || name == " ") {
		  $('#err-name').fadeIn('slow');
		  error = true;
		}

		var email_compare = /^([A-Za-z0-9_.-]+)@([dA-Za-z.-]+).([A-Za-z.]{2,6})$/;
		var email = $('input#email').val();
		if (email == "" || email == " ") {
		  $('#err-email').fadeIn('slow');
		  error = true;
		} else if (!email_compare.test(email)) {
		  $('#err-emailvld').fadeIn('slow');
		  error = true;
		}

		if(error == true) {
		  return false;
		}

		var data_string = $('#ajax-form').serialize();

		$.ajax({
		  type: "POST",
		  url: $('#ajax-form').attr('action'),
		  data: data_string,
		  timeout: 6000,
		  error: function(request,error) {
		    if (error == "timeout") {
		      $('#err-timedout').fadeIn('slow');
		    }
		    else {
		      $('#error').slideDown('slow');
		      $("#error").html('Error! Please try again');
		    }
		  },
		  success: function() {
		    $('#ajax-form').slideUp('slow');
		    $('#email-success').fadeIn('slow');
		  }
		});

		return false; 
	}); 

	/* Isotope */
	var container = $('.portfolio');
	var $optionSets = $('.filter'), $optionLinks = $optionSets.find('a');

	container.isotope({
		itemSelector : '.column, .columns',
		resizable : 'false',
		resizesContainer : 'false',
		animationEngine : 'best-available',
		animationOptions : {
		  duration : 500
		}
	});

	$(window).smartresize(function() {
		container.isotope({
		  masonry : {
		    columnWidth : container.width() / 12
		  }
		});
	});

	// Filter
	$('a', $optionSets).click(function() {
		var selector = $(this).attr('data-filter');
		container.isotope({
		  filter : selector
		});
		return false;
	});
  
	$optionLinks.click(function() {
		var $this = $(this);
		if ($this.parents('li').hasClass('selected')) {
		  return false;
		}

		var $optionSet = $this.parents('.option-set');
		$optionSet.find('.selected').removeClass('selected');
		$this.parents('li').addClass('selected');

		return false;
	});

	$('.flexslider').flexslider({
		animation: "slide",
		controlNav: "thumbnails",
		smoothHeight: true,
		prevText: "<",
		nextText: ">"
	});

	/* Responsive Nav Menu */
  	selectnav('nav-bar');

	

	/* Scroll to top */
	

	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
		  if ($(this).scrollTop() > 100) {
		    $('#back-top').fadeIn();
		  } else {
		    $('#back-top').fadeOut();
		  }
		});

		// scroll body to 0px on click
		$('#back-top').click(function () {
		  $('body,html').animate({
		    scrollTop: 0
		  }, 800);
		  return false;
		});
	});

	/* Placeholder fallback */
	if (! ("placeholder" in document.createElement("input"))) {
		$('*[placeholder]').each(function() {
		    $this = $(this);
		    var placeholder = $(this).attr('placeholder');
		    if ($(this).val() === '') {
		        $this.val(placeholder);
		    }
		    $this.bind('focus',
		    function() {
		        if ($(this).val() === placeholder) {
		            this.plchldr = placeholder;
		            $(this).val('');
		        }
		    });
		    $this.bind('blur',
		    function() {
		        if ($(this).val() === '' && $(this).val() !== this.plchldr) {
		            $(this).val(this.plchldr);
		        }
		    });
		});
	}

	/* IE 8 Responsiveness */
	if ($('html').hasClass('ie8')) {
		$('body').append('<script src="js/respond.min.js"></script>');
	}

});