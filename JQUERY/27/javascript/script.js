var imgs=2;
var now=0;

$(document).ready(function(){
	$(".menu>li").mouseover(function(){
		$(this).children(".submenu").stop().slideDown();
	});
	$(".menu>li").mouseleave(function(){
		$(this).children(".submenu").stop().slideUp();
	});	

	start();	
});

function start(){
	$(".imgs>img").eq(0).css({"opacity":"1"});
	setInterval(function(){slide();},2000);
}
function slide(){
	if(imgs==now){
		now=0;
	}else{
		now=now+1;
	}
	$(".imgs>img").eq(now-1).stop().animate({"opacity":"0"},2000);
	$(".imgs>img").eq(now).stop().animate({"opacity":"1"},2000);
}

$(".partner img").click(function(){
	//$("#modal").show();
	$("#modal").fadeIn(2000);
});
$("#modal button").click(function(){
	//$("#modal").hide();
	$("#modal").fadeOut(2000);
});
