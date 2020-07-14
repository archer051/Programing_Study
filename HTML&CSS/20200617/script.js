$(".menu>li").mouseover(function () {
  $(this).children(".submenu").stop().slideDown();
});

$(".menu>li").mouseleave(function () {
  $(this).children(".submenu").stop().slideUp();
});

var dispMenu = false;

$(".gnb_menu").click(function () {
  if (dispMenu == false) {
    $("nav").css("display", "block");
    dispMenu = true;
  } else {
    $("nav").css("display", "none");
    dispMenu = false;
  }
});