$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    
    $('.test li').click(function(){
        $('.test li').css("color","black");
        $(this).css("color","red");
    });
    
});