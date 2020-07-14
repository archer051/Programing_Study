$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});

$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});

var i=0;
var icount=4;
startinit();
function startinit() {
	$(".imgslide>img").eq(0).siblings().css('margin-top', '-100%');
	setInterval(function(){slide();},2000);
}

function slide() {
	if(i==icount)
	{
		i=0;
		// alert(i);
	}
	else
	{
		// alert(i);
		i++;
	}
	$(".imgslide>img").eq(i-1).css('margin-top', '-100%');	
	$(".imgslide>img").eq(i).css('margin-top', '0px');	
}