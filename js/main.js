/*var menu_selector = "#my_nav_menu"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
function onScroll(){
	var scroll_top = $(document).scrollTop();
	$("a").each(function(){
		var hash = $(this).attr("href");
		var target = $(hash);
		if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
			$("a.active").removeClass("active");
			$(this).addClass("active");
		} else {
			$(this).removeClass("active");
		}
	});
}
$(document).ready(function () {
	$(document).on("scroll", onScroll);
	$("a[href^=#]").click(function(e){
		e.preventDefault();
		$(document).off("scroll");
		$("a.active").removeClass("active");
		$(this).addClass("active");
		var hash = $(this).attr("href");
		var target = $(hash);
		$("html, body").animate({
		    scrollTop: target.offset().top
		}, 800, function(){
			window.location.hash = hash;
			$(document).on("scroll", onScroll);
		});
	});
});
var menu_selector = ".my_nav"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню. 
function onScroll(){
	var scroll_top = $(document).scrollTop();
	$(menu_selector + " a").each(function(){
		var hash = $(this).attr("href");
		var target = $(hash);
		if (target.position().top <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
			$(menu_selector + " a.active").removeClass("active");
			$(this).addClass("active");
		} else {
			$(this).removeClass("active");
		}
	});
}
$(document).ready(function () {
	$(document).on("scroll", onScroll);
	$("a[href^=#]").click(function(e){
		e.preventDefault();
		$(document).off("scroll");
		$(menu_selector + " a.active").removeClass("active");
		$(this).addClass("active");
		var hash = $(this).attr("href");
		var target = $(hash);
		$("html, body").animate({
		    scrollTop: target.offset().top
		}, 500, function(){
			window.location.hash = hash;
			$(document).on("scroll", onScroll);
		});
	});
});*/
var menu_selector = ".my_nav"; // Переменная должна содержать название класса или идентификатора, обертки нашего меню.
var menu = jQuery('#header').outerHeight();
jQuery(".my_nav li:first-child a").addClass("current");

function onScroll() {
	var scroll_top = jQuery(document).scrollTop();

	jQuery(menu_selector + " a").each(function () {
		var hash = jQuery(this).attr("href");
		var target = jQuery(hash);
		if (target.position().top - menu <= scroll_top && target.position().top + target.outerHeight() > scroll_top) {
			jQuery(menu_selector + " a.current").removeClass("current");
			jQuery(this).addClass("current");
		} else {
			jQuery(this).removeClass("current");
		}
	});
}



jQuery(document).on("scroll", onScroll);

jQuery(".my_nav a[href^=#]").click(function (e) {
	e.preventDefault();

	jQuery(document).off("scroll");
	jQuery(menu_selector + " .current").removeClass("current");
	jQuery(this).addClass("current");
	var hash = jQuery(this).attr("href");
	var target = jQuery(hash);
	jQuery("html, body").animate({
		scrollTop: target.offset().top - 50
	}, 300, function () {
		window.location.hash = hash;
		jQuery(document).on("scroll", onScroll);

	});

});


$(window).scroll(function () {
	if ($(this).scrollTop() > 1) {
		$('header').addClass("menu-scroll");
	} else {
		$('header').removeClass("menu-scroll");
	}
});
