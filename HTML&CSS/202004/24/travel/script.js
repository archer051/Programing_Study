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
//어제했던 script.js 파일
// 프로그래밍 언어
// 변수,함수,조건문,반복문
// 변수 : 임시로 보관하는 장소
// 함수 : 실행해야할 문장의 조합들
// 조건문 :
// --함수나 변수를 개발자가 원하는 형태로 조합하기 위해 필요한
// --조건문 : for, if, while
// 제목:나만의 필살레시파라면 ->함수명
// 라면을 끓인다.
// 1.물을 끓인다.
// 2.펄펄 끓는 물에 스프를 먼저 넣는다.
// 3.면을 살포시 쪼개서 넣는다.
// 4.파,김치를 넣고 약 2분간 계속해서 끓인다. <반복문>
// 5.면이 퍼지지 않게 젓가락으로 들었다 놨다를 10번 반복한다. <반복문>
// 6.계란을 터뜨리지 않고 넣는다.
// 7.이쁜 그릇에 담는다.<변수> 앞접시<변수>에다가 호호불면 면을 건져먹는다.
// 9.만약 싱거우면 고춧가루를 팍팍 뿌려 먹는다.<조건문if>

// 변수선언
// var
var cnt=0;
// 함수선언 이미지중에서 첫번째 이미지의 형제요소들을  숨겨버리는 
// 함수를 만든다 function 가변이름(){}
start();
function start(){
	// setInterval(사용자정의함수,시간ms);
	setInterval(function()
	{
		slide();
	}
	,2000
	);
}
function slide(){
	cnt=cnt+1;
	// cnt++;
	if(cnt==5)
	{
		cnt=0;
	}
	// eq(0) 첫번째 이미지
	// siblings() 형제들을?
	// jquery 에서 CSS를 관여 가능.
	// $(".imgs>img").eq(0).siblings().css("margin-left","-2000px");
	$(".imgs>img").eq(cnt).siblings().css("margin-left","-2000px");
	$(".imgs>img").eq(cnt).css("margin-left","0px");
}
