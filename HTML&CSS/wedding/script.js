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
	"margin-left","-1000px");
	setInterval(function(){slide();},2000);
}
function slide(){
	if(now==2){
		now=0;
	}else{
		now=now+1;
	}
	$(".imgs>img").eq(now-1).css("margin-left","-1000px");
	$(".imgs>img").eq(now).css("margin-left","0px");
}
var dispMenu = false;
$(".gnb_menu").click(function() {
  if (dispMenu === false) {
    $("nav").css("display", "block");
    dispMenu = true;
  } else {
    $("nav").css("display", "none");
    dispMenu = false;
  }
})
