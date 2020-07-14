$(document).ready(function () {
  var now = 0;
  var imgs = 4;
  start();

  function start() {
    $(".news>p").eq(0).css("left", "0px");
    $(".news>p").eq(1).css("left", "500px");
    $(".news>p").eq(2).css("left", "1000px");
    $(".news>p").eq(3).css("left", "1500px");
    $(".news>p").eq(4).css("left", "2000px");

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

      $(".news>p").eq(1).animate({ "left": "0px" });
      $(".news>p").eq(2).animate({ "left": "500px" });
      $(".news>p").eq(3).animate({ "left": "1000px" });
      $(".news>p").eq(4).animate({ "left": "1500px" });
      $(".news>p").eq(0).animate({ "left": "2000px" });
    } else if (now == 2) {
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");

      $(".news>p").eq(2).animate({ "left": "0px" });
      $(".news>p").eq(3).animate({ "left": "500px" });
      $(".news>p").eq(4).animate({ "left": "1000px" });
      $(".news>p").eq(0).animate({ "left": "1500px" });
      $(".news>p").eq(1).animate({ "left": "2000px" });
    } else if (now == 3) {
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");

      $(".news>p").eq(3).animate({ "left": "0px" });
      $(".news>p").eq(4).animate({ "left": "500px" });
      $(".news>p").eq(0).animate({ "left": "1000px" });
      $(".news>p").eq(1).animate({ "left": "1500px" });
      $(".news>p").eq(2).animate({ "left": "2000px" });
    } else if (now == 4) {
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");

      $(".news>p").eq(4).animate({ "left": "0px" });
      $(".news>p").eq(0).animate({ "left": "500px" });
      $(".news>p").eq(1).animate({ "left": "1000px" });
      $(".news>p").eq(2).animate({ "left": "1500px" });
      $(".news>p").eq(3).animate({ "left": "2000px" });
    } else if (now == 0) {
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");

      $(".news>p").eq(0).animate({ "left": "0px" });
      $(".news>p").eq(1).animate({ "left": "500px" });
      $(".news>p").eq(2).animate({ "left": "1000px" });
      $(".news>p").eq(3).animate({ "left": "1500px" });
      $(".news>p").eq(4).animate({ "left": "2000px" });
    }
  }

  //var previndex;
  $(".prev").click(function () {
    //console.log("now:" + now);
    now--;
    if (now < 0)
      now = 0;
    if (now == 5)
      now = 0;
    if (now == 1) {
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");

      $(".news>p").eq(1).animate({ "left": "0px" });
      $(".news>p").eq(2).animate({ "left": "500px" });
      $(".news>p").eq(3).animate({ "left": "1000px" });
      $(".news>p").eq(4).animate({ "left": "1500px" });
      $(".news>p").eq(0).animate({ "left": "2000px" });
    } else if (now == 2) {
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");

      $(".news>p").eq(2).animate({ "left": "0px" });
      $(".news>p").eq(3).animate({ "left": "500px" });
      $(".news>p").eq(4).animate({ "left": "1000px" });
      $(".news>p").eq(0).animate({ "left": "1500px" });
      $(".news>p").eq(1).animate({ "left": "2000px" });
    } else if (now == 3) {
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");

      $(".news>p").eq(3).animate({ "left": "0px" });
      $(".news>p").eq(4).animate({ "left": "500px" });
      $(".news>p").eq(0).animate({ "left": "1000px" });
      $(".news>p").eq(1).animate({ "left": "1500px" });
      $(".news>p").eq(2).animate({ "left": "2000px" });
    } else if (now == 4) {
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");

      $(".news>p").eq(4).animate({ "left": "0px" });
      $(".news>p").eq(0).animate({ "left": "500px" });
      $(".news>p").eq(1).animate({ "left": "1000px" });
      $(".news>p").eq(2).animate({ "left": "1500px" });
      $(".news>p").eq(3).animate({ "left": "2000px" });
    } else if (now == 0) {
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");

      $(".news>p").eq(0).animate({ "left": "0px" });
      $(".news>p").eq(1).animate({ "left": "500px" });
      $(".news>p").eq(2).animate({ "left": "1000px" });
      $(".news>p").eq(3).animate({ "left": "1500px" });
      $(".news>p").eq(4).animate({ "left": "2000px" });
    }
  });

  $(".next").click(function () {
    now++;
    if (now > 5)
      now = 0;
    if (now == 5)
      now = 0;
    if (now == 1) {
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");

      $(".news>p").eq(1).animate({ "left": "0px" });
      $(".news>p").eq(2).animate({ "left": "500px" });
      $(".news>p").eq(3).animate({ "left": "1000px" });
      $(".news>p").eq(4).animate({ "left": "1500px" });
      $(".news>p").eq(0).animate({ "left": "2000px" });
    } else if (now == 2) {
      $(".news>p").eq(1).css("display", "block");
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "none");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");

      $(".news>p").eq(2).animate({ "left": "0px" });
      $(".news>p").eq(3).animate({ "left": "500px" });
      $(".news>p").eq(4).animate({ "left": "1000px" });
      $(".news>p").eq(0).animate({ "left": "1500px" });
      $(".news>p").eq(1).animate({ "left": "2000px" });
    } else if (now == 3) {
      $(".news>p").eq(2).css("display", "block");
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "none");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");

      $(".news>p").eq(3).animate({ "left": "0px" });
      $(".news>p").eq(4).animate({ "left": "500px" });
      $(".news>p").eq(0).animate({ "left": "1000px" });
      $(".news>p").eq(1).animate({ "left": "1500px" });
      $(".news>p").eq(2).animate({ "left": "2000px" });
    } else if (now == 4) {
      $(".news>p").eq(3).css("display", "block");
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "none");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");

      $(".news>p").eq(4).animate({ "left": "0px" });
      $(".news>p").eq(0).animate({ "left": "500px" });
      $(".news>p").eq(1).animate({ "left": "1000px" });
      $(".news>p").eq(2).animate({ "left": "1500px" });
      $(".news>p").eq(3).animate({ "left": "2000px" });
    } else if (now == 0) {
      $(".news>p").eq(4).css("display", "block");
      $(".news>p").eq(0).css("display", "block");
      $(".news>p").eq(1).css("display", "none");
      $(".news>p").eq(2).css("display", "none");
      $(".news>p").eq(3).css("display", "none");

      $(".news>p").eq(0).animate({ "left": "0px" });
      $(".news>p").eq(1).animate({ "left": "500px" });
      $(".news>p").eq(2).animate({ "left": "1000px" });
      $(".news>p").eq(3).animate({ "left": "1500px" });
      $(".news>p").eq(4).animate({ "left": "2000px" });
    }
  });
});