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

$("#pw_content").css("display", "none");
$("#id_content").css("display", "block");
$("#id_subject").css("background-color", "#8C8C8C");
$("#id_subject").css("color", "#000");
$("#pw_subject").css("background-color", "#dde7dd");
$("#pw_subject").css("color", "#666666");

$("#id_subject").click(function () {
  $("#id_content").css("display", "block");
  $("#pw_content").css("display", "none");
  $("#id_subject").css("background-color", "#8C8C8C");
  $("#id_subject").css("color", "#000");
  $("#pw_subject").css("background-color", "#dde7dd");
  $("#pw_subject").css("color", "#666666");
});
$("#pw_subject").click(function () {
  $("#pw_content").css("display", "block");
  $("#id_content").css("display", "none");
  $("#pw_subject").css("background-color", "#8C8C8C");
  $("#pw_subject").css("color", "#000");
  $("#id_subject").css("background-color", "#dde7dd");
  $("#id_subject").css("color", "#666666");
});