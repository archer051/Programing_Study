var imgs = 2;//이미지의 최대값
var now = 0;//현재이미지
start();
function start() {
  $(".imgs>img").eq(0).css({ "opacity": "1" });
  //setInterval(함수명,단위초)
  //단위초시간별로 함수를 무한호출
  setInterval(function () { slide(); }, 2000);
}

function slide() {
  if (imgs == now) {
    now = 0;//첫번째 이미지로 초기화
  } else {
    now = now + 1;//다음이미지를 띄우기위해 증가
  }
  $(".imgs>img").eq(now - 1).stop().animate({ "opacity": "0" }, 2000);
  $(".imgs>img").eq(now).stop().animate({ "opacity": "1" }, 2000);
}