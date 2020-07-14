$(document).ready(function () {
  //문서가 스크롤 될 때를 의미하는 이벤트
  $(window).scroll(function () {
    if ($(this).scrollTop() > 0) {//스크롤움직임
      $(".top").fadeIn();
      $(".bottom").fadeIn();
    } else {//스크롤 상태 0
      $(".top").fadeOut();
      $(".bottom").fadeOut();
    }
  });

  //탑버튼을 클릭하면 윈도우창이 맨위로 이동하는 animate기능구현
  $(".top").click(function () {
    $("body,html").animate({ scrollTop: 0 }, "fast");
  });
  $(".bottom").click(function () {
    var bottomheight = screen.height;
    $("body,html").animate({ scrollTop: bottomheight }, "fast");
  });
});