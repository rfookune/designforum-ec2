
$(document).ready(function(){
	sidebarOpen();
	scrollTopDisplay();

	new WOW().init();

	$('#nav--btn-contact').on('click', function(event) {
		window.location.href = "/contact";
	});

	$('#to--top').on('click', function(event){
		event.preventDefault();
		$("html, body").animate({ scrollTop: 0 }, "slow");
	});

	$('a[data-scroll]').smoothScroll({'offset': 0});
});

$(window).scroll(function() {
	$('body').removeClass('sidebar-open');
	scrollTopDisplay();
});

function sidebarOpen() {
	$('.sidebar-toggle').click(function(event) {
		event.preventDefault();
		$('body').toggleClass('sidebar-open');

		setTimeout(function(){
			if( $('body').hasClass('sidebar-open') ) {
				$('.sidebar .sidebar-nav ul li').each(function(index){
					$(this).delay(80*index).queue(function(next){
					    $(this).addClass('animated fadeInRight').css('opacity', 0);
					    next();
					});
				});
			} else {
				$('.sidebar .sidebar-nav ul li').each(function(index){
					$(this).removeClass('animated fadeInRight').css('opacity', 0);
				});
			}

		}, 300);
	});
}

function scrollTopDisplay() {
	if ($(document).scrollTop() > 500) {
    	$('#to--top').fadeIn();
    	$('.sidebar-toggle').addClass('bg-on');
  	} else {
    	$('#to--top').fadeOut();
    	$('.sidebar-toggle').removeClass('bg-on');
  	}
}