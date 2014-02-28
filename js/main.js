$(document).ready(function() {
	$(".item_content").bind('mouseenter', showItemLink);
	$(".item_content").bind('mouseleave', hideItemLink);
	$(window).scroll(scrollEvt);
	//initFadeBackground();
	$(window).resize(resize);
	resize();
});

function resize() {
	_windowWidth = $(window).width();
	var left = _windowWidth / 2 - 250;
	console.log(_windowWidth / 2);
	$("#fade_bg").css("left", left);
	var item_width = $(".item").width();
	$(".item").css("height", item_width);
	$(".item_content").css("height", item_width - 20);
}

function initFadeBackground() {
	$("#aboutUs").click(function() {
		resize();
		$("#fade_bg").fadeIn(500);
		$("#hide_bg").fadeIn(500);
		return false;
	});
	$(".enrollPanel").click(function(event) {
		$("#fade_bg").fadeOut(500);
		$("#hide_bg").fadeOut(500);
		var e = window.event || event;
		if (e.stopPropagation) {
			e.stopPropagation();
		}
		return false;
	});
}

function showItemLink() {
	$(this).find(".item_link").fadeIn(300);
	return false;
}

function hideItemLink() {
	$(this).find(".item_link").fadeOut(200);
	return false;
}