$(".menu>li").mouseover(function() {
	$(".submenu").stop().slideDown();
});

$(".submenu").mouseleave(function() {
	$(".submenu").stop().slideUp();
});
// $("#sub").mouseover(function(){
//   $(".submenu").css("display","block");
//   $(".submenu").siblings().css("display","none");
// });
// $("#wrap").mouseleave(function(){
//   $(".submenu").css("display","none");
var imgs=4;
var now=0;
start();
function start(){
	$(".imgslide>img").eq(0).siblings().css("margin-top","-800px");
	setInterval(function(){slide();},2000);
}
$("#partner").click(function(){
  $("#partner_up").addClass("active");
});
$("#partner_up .btnClose").click(function(){
  $("#partner_up").removeClass("active");
})


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
