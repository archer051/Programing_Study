// alert("jquery 응답 확인");
$(".topmenu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});

$(".topmenu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});

var i=0;
startinit();
function startinit(){
	$(".imgslide>img").eq(0).siblings().css("margin-left","-1000px");
	setInterval(function(){fimgslide();},2000);
}

function fimgslide(){
	if (i==4) 
	{
		i=0;
	}else{
		i++;
	}
	$(".imgslide>img").eq(i-1).css("margin-left","-1000px");
	$(".imgslide>img").eq(i).css("margin-left","0px");
}