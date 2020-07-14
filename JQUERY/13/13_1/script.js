var imgs = 4;//이미지의 최대갯수
var now = 0;//현재이미지
var sp = screen.width / 2 - 300;
var previndex;
var play;
var mode = true;//true값은 움직이는 모드,false값은 멈춤
start();

$(".btn_play").click(function () {
  clearInterval(play);
  $(this).css("display", "none");
  $(".btn_stop").css("display", "block");
  mode = false;
});

$(".btn_stop").click(function () {
  play = setInterval(function () { slide(); }, 3000);
  $(this).css("display", "none");
  $(".btn_play").css("display", "block");
  mode = true;
});

$(".btn_prev a").click(function () {
  if (now == 0) {
    now = 4;
  } else {
    now--;
  }
  clearInterval(play);
  curr_slide(now);
  if (mode == true) {
    play = setInterval(function () { slide(); }, 3000);
  }
  previndex = now;
});

$(".btn_next a").click(function () {
  if (imgs == now) {
    now = 0;
  } else {
    now++;
  }
  clearInterval(play);
  curr_slide(now);
  if (mode == true) {
    play = setInterval(function () { slide(); }, 3000);
  }
  previndex = now;
});

$("#btn_dot .dot").click(function () {
  //일단 이미지슬라이드의 setInterval함수를 멈춘다 
  now = $(this).index();
  // clearInterval(멈추는대상)
  clearInterval(play);
  curr_slide(now);
  if (mode == true) {
    play = setInterval(function () { slide(); }, 3000);
  }
  previndex = now;
});

function start() {
  $(".btn_play").css("display", "block");
  $(".imgs>img").eq(0).css({ "left": -1220 + sp });
  $(".imgs>img").eq(1).css({ "left": -610 + sp });
  $(".imgs>img").eq(2).css({ "left": 0 + sp });
  $(".imgs>img").eq(3).css({ "left": 610 + sp });
  $(".imgs>img").eq(4).css({ "left": 1220 + sp });
  previndex = 0;
  $("#btn_dot").children().eq(0).css({ "background-color": "purple" });
  play = setInterval(function () { slide(); }, 3000);
}

function slide() {
  if (imgs == now) {
    now = 0;
  } else {
    now++;
  }
  curr_slide(now);
}

function curr_slide(e) {
  if (e == 1) {
    $(".imgs>img").eq(1).css({ "left": -1220 + sp });
    $(".imgs>img").eq(2).css({ "left": -610 + sp });
    $(".imgs>img").eq(3).css({ "left": 0 + sp });
    $(".imgs>img").eq(4).css({ "left": 610 + sp });
    $(".imgs>img").eq(0).css({ "left": 1220 + sp });
    $("#btn_dot").children().eq(previndex).css({ "background-color": "#aaa" });
    $("#btn_dot").children().eq(1).css({ "background-color": "purple" });
    previndex = 1;

    // $("#btn_dot").children().eq(0).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(1).css({ "background-color": "purple" });
    // $("#btn_dot").children().eq(2).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(3).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(4).css({ "background-color": "#aaa" });
  } else if (e == 2) {
    $(".imgs>img").eq(2).css({ "left": -1220 + sp });
    $(".imgs>img").eq(3).css({ "left": -610 + sp });
    $(".imgs>img").eq(4).css({ "left": 0 + sp });
    $(".imgs>img").eq(0).css({ "left": 610 + sp });
    $(".imgs>img").eq(1).css({ "left": 1220 + sp });
    $("#btn_dot").children().eq(previndex).css({ "background-color": "#aaa" });
    $("#btn_dot").children().eq(2).css({ "background-color": "purple" });
    previndex = 2;
    // $("#btn_dot").children().eq(0).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(1).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(2).css({ "background-color": "purple" });
    // $("#btn_dot").children().eq(3).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(4).css({ "background-color": "#aaa" });
  } else if (e == 3) {
    $(".imgs>img").eq(3).css({ "left": -1220 + sp });
    $(".imgs>img").eq(4).css({ "left": -610 + sp });
    $(".imgs>img").eq(0).css({ "left": 0 + sp });
    $(".imgs>img").eq(1).css({ "left": 610 + sp });
    $(".imgs>img").eq(2).css({ "left": 1220 + sp });
    $("#btn_dot").children().eq(previndex).css({ "background-color": "#aaa" });
    $("#btn_dot").children().eq(3).css({ "background-color": "purple" });
    previndex = 3;
    // $("#btn_dot").children().eq(0).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(1).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(2).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(3).css({ "background-color": "purple" });
    // $("#btn_dot").children().eq(4).css({ "background-color": "#aaa" });
  } else if (e == 4) {
    $(".imgs>img").eq(4).css({ "left": -1220 + sp });
    $(".imgs>img").eq(0).css({ "left": -610 + sp });
    $(".imgs>img").eq(1).css({ "left": 0 + sp });
    $(".imgs>img").eq(2).css({ "left": 610 + sp });
    $(".imgs>img").eq(3).css({ "left": 1220 + sp });
    $("#btn_dot").children().eq(previndex).css({ "background-color": "#aaa" });
    $("#btn_dot").children().eq(4).css({ "background-color": "purple" });
    previndex = 4;
    // $("#btn_dot").children().eq(0).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(1).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(2).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(3).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(4).css({ "background-color": "purple" });
  } else {
    $(".imgs>img").eq(0).css({ "left": -1220 + sp });
    $(".imgs>img").eq(1).css({ "left": -610 + sp });
    $(".imgs>img").eq(2).css({ "left": 0 + sp });
    $(".imgs>img").eq(3).css({ "left": 610 + sp });
    $(".imgs>img").eq(4).css({ "left": 1220 + sp });
    $("#btn_dot").children().eq(previndex).css({ "background-color": "#aaa" });
    $("#btn_dot").children().eq(0).css({ "background-color": "purple" });
    previndex = 0;
    // $("#btn_dot").children().eq(0).css({ "background-color": "purple" });
    // $("#btn_dot").children().eq(1).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(2).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(3).css({ "background-color": "#aaa" });
    // $("#btn_dot").children().eq(4).css({ "background-color": "#aaa" });
  }
}