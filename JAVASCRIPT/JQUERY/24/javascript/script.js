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
	$("#imgslide>img").eq(0).siblings().css({"margin-top":"-800px"});
	setInterval(function(){slide();},2000);
}
function slide(){
	if(now==imgs){
		now=0;
	}else{
		now=now+1;	
	}
	$("#imgslide>img").eq(now-1).css({"margin-top":"-800px"});
	$("#imgslide>img").eq(now).css({"margin-top":"0px"});	
}
