//선택자 : $(".menu>li")
//이벤트 : mouseover,mouseleave
//메서드 : slideDown(),slideUp()
//메서드 호출 규칙 : 메서드명 + ()로 끝난다.
$(".menu>li").mouseover(function() {
  $(".submenu").stop().slideDown();
});

$(".submenu").mouseleave(function() {
  $(".submenu").stop().slideUp();
});
