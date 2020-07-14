$(document).ready(function () {
  var curr_index = 0;
  var imgLeft;
  $(".prev").addClass("off");

  $(".next").click(function () {
    if (curr_index > -2) {
      curr_index--;
      imgLeft = curr_index * 120;
      $(".imgs").css("margin-left", imgLeft);
      $(".prev").removeClass("off");
    }
    if (curr_index == -2) {
      $(".next").addClass("off");
    }

  });

  $(".prev").click(function () {
    if (curr_index < 0) {
      curr_index++;
      imgLeft = curr_index * 120;
      $(".imgs").css("margin-left", imgLeft);
      $(".next").removeClass("off");
    }
    if (curr_index == 0) {
      $(".prev").addClass("off");
    }
  });
});