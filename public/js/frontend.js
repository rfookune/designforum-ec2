
$(document).ready(function(){
	navbarCollapse();
	sidebarOn();
	sidebarOpen();
	scrollTopDisplay();

	$('#nav--btn-contact').on('click', function(event){
		event.preventDefault();
		console.log('hi!');
		$('#nav--link-contact').click();
	})

	$('#to--top').on('click', function(event){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});

	$('a[data-scroll]').smoothScroll();
});

$(window).scroll(function() {
	navbarCollapse();
	$('body').removeClass('sidebar-open');
	scrollTopDisplay();
});

$(window).resize(function() {
	sidebarOn();
});

function navbarCollapse() {
	if ($(document).scrollTop() > 50) {
    	$('nav').removeClass('large');
  	} else {
    	$('nav').addClass('large');
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