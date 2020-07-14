$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});

var now=0;
start();
function start(){
	$(".imgs>img").eq(0).siblings().css(
	"margin-left","-2000px");
	setInterval(function(){slide();},2000);
}
function slide(){
	if(now==3){
		now=0;
	}else{
		now=now+1;
	}
	$(".imgs>img").eq(now-1).css("margin-left","-2000px");
	$(".imgs>img").eq(now).css("margin-left","0px");
}

var gd = 0;
gd1();
function gd1(){
	$(".pimg>img").eq(0).siblings().css(
	"margin-left","-2000px");
	setInterval(function(){gd2();}, 2000);
}
function gd2(){
	if(gd==2){
		gd=0;
	}else{
		gd=gd+1;
	}
	$(".pimg>img").eq(gd-1).css("margin-left","-2000px");
	$(".pimg>img").eq(gd).css("margin-left","0px");
}