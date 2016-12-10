
$(document).ready(function(){
	navbarCollapse();
	sidebarOn();
	sidebarOpen();
	scrollTopDisplay();

	new WOW().init();

	$('#nav--btn-contact').on('click', function(event) {
		window.location.href = "/contact";
	})

	$('#to--top').on('click', function(event){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});

	$('a[data-scroll]').smoothScroll({'offset': -150});
});

$(window).scroll(function() {
	navbarCollapse();
	$('body').removeClass('sidebar-open');
	scrollTopDisplay();
});

$(window).resize(function() {
	sidebarOn();
	navbarCollapse();
});

function navbarCollapse() {
	if ( $(window).width() > 991 ) {
		if ($(document).scrollTop() > 50) {
	    	$('nav').removeClass('large');
	    	$('nav .btn-contact').removeClass('btn-transparent-white').addClass('btn-color');
	  	} else {
	    	$('nav').addClass('large');
	    	$('nav .btn-contact').removeClass('btn-color').addClass('btn-transparent-white');
	  	}
	} else {
    	$('nav').removeClass('large');
    	$('nav .btn-contact').removeClass('btn-transparent-white').addClass('btn-color');
  	}
		
}

function sidebarOpen() {
	$('.sidebar-toggle').click(function(event) {
		event.preventDefault();
		$('body').toggleClass('sidebar-open');
	});
}


function sidebarOn() {
	if ($(window).width() > 992) {
    	$('body').removeClass('sidebar-on').removeClass('sidebar-open');
  	} else {
    	$('body').addClass('sidebar-on');
  	}
}

function scrollTopDisplay() {
	if ($(document).scrollTop() > 500) {
    	$('#to--top').show();
  	} else {
    	$('#to--top').hide();
  	}
}