var cnt=0;
$(".btn_prev").addClass("off");

$(".btn_next").click(function(){	
    if(!$("#slides li").last().is(":visible")){		
        $("#slides li:visible").hide().next("li").fadeIn("slow");
        $(".btn_prev").removeClass("off");
    }
    if($("#slides li").last().is(":visible")){
        $(".btn_next").addClass("off");
    }
    return false;
});

$(".btn_prev").click(function(){
    if(!$("#slides li").first().is(":visible")){
        $("#slides li:visible").hide().prev("li").fadeIn("slow");
        $(".btn_next").removeClass("off");
    }
    if($("#slides li").first().is(":visible")){
        $(".btn_prev").addClass("off");
    }
    return false;
});

