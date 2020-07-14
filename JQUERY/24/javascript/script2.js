var imgs=4;
var now=0;

$(document).ready(function(){
	
	$(".menu>li").mouseover(function(){
		$(this).children(".submenu").stop().slideDown();
	});
	
	$(".menu>li").mouseleave(function(){
		$(this).children(".submenu").stop().slideUp();
	});
	
	start();
	
	$(".partner img").click(function(){
		$("#partner_up").addClass("active");
	});
	
	$("#partner_up button").click(function(){
		$("#partner_up").removeClass("active");
	});
	
});
function start(){	
	$("#imgslide>img").eq(0).css("opacity","1");
	setInterval(function(){slide();},3000);
}
function slide(){
	if(now==imgs){
		now=0;
	}else{
		now=now+1;	
	}
	$("#imgslide>img").eq(now-1).stop().animate({"opacity":"0"},2000);
	$("#imgslide>img").eq(now).stop().animate({"opacity":"1"},2000);	
}

