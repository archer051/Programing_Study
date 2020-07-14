//선택자 : $(".menu>li")
//이벤트 : mouseover,mouseleave
//메서드 : slideDown()
//메서드 호출 규칙 : 메서드명 + ()로 끝난다.
$(".menu>li").mouseover(function() {
  $(this).children(".submenu").stop().slideDown();
});

$(".menu>li").mouseleave(function() {
  $(this).children(".submenu").stop().slideUp();
});
