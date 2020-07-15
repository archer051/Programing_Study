$(".square").mouseover(function () {
  $(".square_top").animate({ left: "0px" }, 300);
  $(".square_right").delay(300).animate({ top: "0px" }, 300);
  $(".square_bottom").delay(600).animate({ left: "0px" }, 300);
  $(".square_left").delay(900).animate({ top: "0px" }, 300);
});

$(".square").mouseleave(function () {
  $(".square_left").animate({ top: "210px" }, 300);
  $(".square_bottom").delay(300).animate({ left: "210px" }, 300);
  $(".square_right").delay(600).animate({ top: "-210px" }, 300);
  $(".square_top").delay(900).animate({ left: "-210px" }, 300);
});