
$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    $( "#article-whole" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.article-item-whole').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.article-item-whole').removeClass('is-acted');
      }
    }).change();

    $( "#article-story" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.article-item-story').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.article-item-story').removeClass('is-acted');
      }
    }).change();

    $( "#article-comment" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.article-item-comment').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.article-item-comment').removeClass('is-acted');
      }
    }).change();

     $( "#article-know" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.article-item-know').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.article-item-know').removeClass('is-acted');
      }
    }).change();
     
      $( "#article-news" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.article-item-news').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.article-item-news').removeClass('is-acted');
      }
    }).change();



// $('#cost-limit li').on("mouseenter",function(){
//     $(this).css("color","#FF8C00");
// });
// $('#cost-limit li').on("mouseleave",function(){
//     $(this).css("color","black");
// });
// $('#cost-limit li').click(function(){
//     $('#cost-limit li').css("color","black");
//     $(this).css("color","red");
// });


// $('#cost-limit li').on("mouseenter",function(){
// 	var isRed=$(this).css('color');

//     if(isRed.equals"red")){
// 	}else{
// 		// $('#cost-limit li').css("color","black");
//    		$(this).css("color","blue");
// 	}
// });
// $('#time-limit li').on("mouseenter",function(){
//     $(this).css("color","#FF8C00");
// });
// $('#time-limit li').on("mouseleave",function(){
//     $(this).css("color","black");
// });
// $('#time-limit li').click(function(){
//     $('#time-limit li').css("color","black");
//     $(this).css("color","red");
// });
// $('#wifi-limit li').on("mouseenter",function(){
//     $(this).css("color","#FF8C00");
// });
// $('#wifi-limit li').on("mouseleave",function(){
//     $(this).css("color","black");
// });
// $('#wifi-limit li').click(function(){
//     $('#wifi-limit li').css("color","black");
//     $(this).css("color","red");
// });
// $('#eat-limit li').on("mouseenter",function(){
//     $(this).css("color","#FF8C00");
// });
// $('#eat-limit li').on("mouseleave",function(){
//     $(this).css("color","black");
// });
// $('#eat-limit li').click(function(){
//     $('#plug-limit li').css("color","black");
//     $(this).css("color","red");
// });
// $('#other-limit li').on("mouseenter",function(){
//     $(this).css("color","#FF8C00");
// });
// $('#other-limit li').on("mouseleave",function(){
//     $(this).css("color","black");
// });
// $('#other-limit li').click(function(){
//     $('#pet-limit li').css("color","black");
//     $(this).css("color","red");
// });
$('#articleChange-color').on("mouseenter",function(){
    $(this).css("color","#FF8C00");
});
$('#articleChange-color').on("mouseleave",function(){
    $(this).css("color","#8B4513");
});

});
