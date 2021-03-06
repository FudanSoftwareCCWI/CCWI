$(document).ready(function() {
	initCSS();
	initCourse();
});


function initCourse() {
	var op = $('#initop').text();
	var showpart = $('#initshow').text();
	if (op != '') {
		$(op).find(".sidebar-title").addClass("select_txt");
		$(showpart).fadeIn(300);
	}
	var sidebar_title = $(".sidebar-row1");
	var cat_len = sidebar_title.length;
	for ( var i = 0; i < cat_len; i++) {
		var sidebar_title_li = $(sidebar_title[i]).find("li");
		var cat_li_len = sidebar_title_li.length;
		for ( var j = 0; j <= cat_li_len; j++) {
			var title = "#"+(i+1)+"-"+j;
			$(title).bind('click',function(){
				var content_str = "#content-"+$(this).attr('id');
				console.log($(this));
				$(".showpart").css('display', 'none');
				$(content_str).fadeIn(300);
				return false;
			});
		}
	}
}

function initCSS() {
	$(".showpart").css('display', 'none');
	$(".showpart").first().css('display', 'block');
	$(".sidebar-title").hover(function() {
		$(this).addClass("hltxt");
	}, function() {
		$(this).removeClass("hltxt");
	});
	$(".sidebar-content>li").hover(function() {
		$(this).addClass("hlbg");
	}, function() {
		$(this).removeClass("hlbg");
	});

	$(".sidebar-title").click(function() {
		highlight_sidebar_title(this);
	});

	$(".sidebar-content > li").click(function() {
		highlight_sidebar(this);
	});
}

function highlight_sidebar_title(obj) {
	$(".main_content").find(".sidebar-title").removeClass("select_txt");
	$(".main_content").find("li").removeClass("select_bg");
	$(this).addClass("select_txt");
}

function highlight_sidebar(obj) {
	$(".main_content").find("li").removeClass("select_bg");
	$(".main_content").find(".sidebar-title").removeClass("select_txt");
	$(obj).parent().siblings(".sidebar-title").addClass("select_txt");
	$(obj).addClass("select_bg");
}