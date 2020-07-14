$(".menu>li").mouseover(function() {
	/* Act on the event */
	$(this).children('.submenu').stop().slideDown();
});

$(".menu>li").mouseleave(function() {
	/* Act on the event */
	$(this).children('.submenu').stop().slideUp();
});

var imgs=4;
var now=0;
start();
function start() {
	$(".imgslide>img").eq(0).siblings().css("magin-top","-800px");
	setInterval(function() {
		slide();},2000);
}

function slide() {
	if(now==imgs) {
		now=0;
	}else{
		now=now+1;
	}
	$(".imgslide>img").eq(now-1).css("margin-top","-800px");
}