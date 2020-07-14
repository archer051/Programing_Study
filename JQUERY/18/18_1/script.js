$(document).ready(function () {
  var now = 0;
  var imgs = 4;
  start();
  function start() {
    $(".news>p").eq(0).css("top", "0px");
    $(".news>p").eq(1).css("top", "35px");
    $(".news>p").eq(2).css("top", "70px");
    $(".news>p").eq(3).css("top", "105px");
    $(".news>p").eq(4).css("top", "140px");

    setInterval(function () { slide() }, 1000);
  }
  function slide() {
    now++;
    if (now == 5)
      now = 0;
    if (now == 1) {
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");

      $(".news>p").eq(1).animate({ "top": "0px" });
      $(".news>p").eq(2).animate({ "top": "35px" });
      $(".news>p").eq(3).animate({ "top": "70px" });
      $(".news>p").eq(4).animate({ "top": "105px" });
      $(".news>p").eq(0).animate({ "top": "140px" });
    } else if (now == 2) {
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");

      $(".news>p").eq(2).animate({ "top": "0px" });
      $(".news>p").eq(3).animate({ "top": "35px" });
      $(".news>p").eq(4).animate({ "top": "70px" });
      $(".news>p").eq(0).animate({ "top": "105px" });
      $(".news>p").eq(1).animate({ "top": "140px" });
    } else if (now == 3) {
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");

      $(".news>p").eq(3).animate({ "top": "0px" });
      $(".news>p").eq(4).animate({ "top": "35px" });
      $(".news>p").eq(0).animate({ "top": "70px" });
      $(".news>p").eq(1).animate({ "top": "105px" });
      $(".news>p").eq(2).animate({ "top": "140px" });
    } else if (now == 4) {
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");

      $(".news>p").eq(4).animate({ "top": "0px" });
      $(".news>p").eq(0).animate({ "top": "35px" });
      $(".news>p").eq(1).animate({ "top": "70px" });
      $(".news>p").eq(2).animate({ "top": "105px" });
      $(".news>p").eq(3).animate({ "top": "140px" });
    } else if (now == 0) {
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");

      $(".news>p").eq(0).animate({ "top": "0px" });
      $(".news>p").eq(1).animate({ "top": "35px" });
      $(".news>p").eq(2).animate({ "top": "70px" });
      $(".news>p").eq(3).animate({ "top": "105px" });
      $(".news>p").eq(4).animate({ "top": "140px" });
    }
  }
});