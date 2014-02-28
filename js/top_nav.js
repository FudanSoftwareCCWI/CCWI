$(document).ready(function() {
	$(window).scroll(scrollEvt);
});

function showNav2() {
	$("#top_nav").fadeIn(300);
	return false;
}

function hideNav2() {
	$("#top_nav").fadeOut(300);
	return false;
}

function scrollEvt() {
	_windowScrollTop = $(window).scrollTop();
	var opacity = 1 - (_windowScrollTop / 150);
	opacity = opacity < 0 ? 0 : opacity;
	$(".welcome_center").css('opacity', opacity);
	if (_windowScrollTop > 250) {
		showNav2();
	} else {
		hideNav2();
	}
	return false;
}