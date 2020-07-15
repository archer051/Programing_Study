$(document).ready(function(){
	
	$(".menu>li").mouseover(function(){
		$(this).children(".submenu").stop().slideDown();
	});
	
	$(".menu>li").mouseleave(function(){
		$(this).children(".submenu").stop().slideUp();
	});
	
});

$(".btn_dot a").click(function(){
	var imgLeft=$(this).attr("imgLeft");
    $(".imgs").animate({left:imgLeft},"fast");
});

$(".partner img").click(function(){
	$(".modal").fadeIn(1000);
});

$(".modal button").click(function(){
	$(".modal").fadeOut(1000);
});