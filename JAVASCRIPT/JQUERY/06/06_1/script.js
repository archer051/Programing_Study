$(".menu>li").mouseover(function(event) {
	/* Act on the event */
	$(this).children('.submenu').stop().slideDown();
});

$(".menu>li").mouseleave(function(event) {
	/* Act on the event */
	$(this).children('.submenu').stop().slideUp();
});

var imgs=4;
var now=0;
start();
function start(){
	$(".imgslide>img").eq(0).siblings().css("margin-top","-800px");
	setInterval(function(){slide();},2000);
}

function slide(){
	//alert("slide첫번째"+now+" ");
	if(now==imgs)
	{
		now=0;
	}else{
		now=now+1;
	}
	// alert("slide두번째"+now+" ");
	$(".imgslide>img").eq(now-1).css("margin-top","-800px");
	$(".imgslide>img").eq(now).css("margin-top","0px");
}