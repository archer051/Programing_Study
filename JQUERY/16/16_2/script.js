$(document).ready(function () {
  // $("#title>li").eq(0).css("background-color", "#00c63b").css("color", "white");
  // $("#contents").children().eq(0).css("display", "block");
  // $("#contents").children().eq(0).siblings().css("display", "none");

  $("#title>li").click(function () {
    var idx = $("#title>li").index(this);
    var icount = $("#title>li").length;
    //console.log("idx:" + idx + "count:" + icount);
    for (var i = 0; i < icount; i++) {
      if (i == idx)
        continue;
      else
        $("#title>li").eq(i).css("background-color", "white").css("color", "#666");
    }
    $("#title>li").eq(idx).css("background-color", "#00c63b").css("color", "white");
    $("#contents").children().eq(idx).css("display", "block");
    $("#contents").children().eq(idx).siblings().css("display", "none");
  });

});