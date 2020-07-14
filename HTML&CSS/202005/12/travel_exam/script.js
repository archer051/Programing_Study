$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});
$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});
var cnt=0;
start();
function start(){
	$(".imgs>img").eq(0).siblings().css("margin-left","-2000px");
	//2초단위로 slide함수를 끊임없이 호출하겠다.
	setInterval(function(){slide();},2000);
}
function slide(){
	cnt++;
	if(cnt==5){cnt=0;}
	$(".imgs>img").eq(cnt).siblings().css("margin-left","-2000px");
	$(".imgs>img").eq(cnt).css("margin-left","0px");
}
function login(){
	window.open("login.php","frmLogin","width=400,height=150");
}















