$(document).ready(function () {
	if ($.cookie("nopopup1") != "Y") {
		$("#pop01").show();
	} else {
		$("#pop01").hide();
	}
	if ($.cookie("nopopup2") != "Y") {
		$("#pop02").show();
	} else {
		$("#pop02").hide();
	}
	//첫번째 팝업창을 체크박스 클릭하고 닫았을때..
	$("#close01").click(function () {
		if (document.frmPopUp.popup01.checked) {
			$.cookie("nopopup1", "Y", { expires: 1 });
		}
		$("#pop01").hide();
	});
	//두번째 팝업창을 체크박스 클릭하고 닫았을때..
	$("#close02").click(function () {
		if (document.frmPopUp.popup02.checked) {
			$.cookie("nopopup2", "Y", { expires: 1 });
		}
		$("#pop02").hide();
	});
});