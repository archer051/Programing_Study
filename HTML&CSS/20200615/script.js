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