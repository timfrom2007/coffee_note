$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行

$('#cost-limit li').on("mouseenter",function(){
    $(this).css("color","#FF8C00");
});
$('#cost-limit li').on("mouseleave",function(){
    $(this).css("color","#8B4513");
});

$('#cost-limit li').click(function(){
    $('#cost-limit li').css("color","black");
    $(this).css("color","red");
});
// $('#cost-limit li').on("mouseenter",function(){
// 	if($('#cost-limit li').css("color","red"))){
// 	}else{
// 		$('#cost-limit li').css("color","black");
//    		$(this).css("color","blue");
// 	}
// });
$('#time-limit li').click(function(){
    $('#time-limit li').css("color","black");
    $(this).css("color","red");
});
$('#wifi-limit li').click(function(){
    $('#wifi-limit li').css("color","black");
    $(this).css("color","red");
});
$('#plug-limit li').click(function(){
    $('#plug-limit li').css("color","black");
    $(this).css("color","red");
});
$('#pet-limit li').click(function(){
    $('#pet-limit li').css("color","black");
    $(this).css("color","red");
});
$('#articleChange-color').on("mouseenter",function(){
    $(this).css("color","#FF8C00");
});
$('#articleChange-color').on("mouseleave",function(){
    $(this).css("color","#8B4513");
});

});
