// 선택자, 이벤트, 메소드
// 선택자=김혁
// 이벤트=김혁의 뺨을 때렸다는 상황
// 메소드=김혁이 화를 낸다 ㅋㅋㅋㅋㅋ 맞때린다 등등

// $("선택자").이벤트(function(){

// });
// $:제이쿼리르 쓰겠다는 선언.
// "":선택자를 기입.
// function(){
// 	원하는메서드를 삽입
// }
$(".menu>li").mouseover(function(){
	$(this).children(".submenu").stop().slideDown();
});

$(".menu>li").mouseleave(function(){
	$(this).children(".submenu").stop().slideUp();
});
