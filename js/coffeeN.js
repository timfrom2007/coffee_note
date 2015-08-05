
$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    $( "#cost-item-0" ).change(function() {
      if($(this).prop('checked')){  //先將所有選取改成false,另外再把此改成true
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#cost-limit input").prop('checked', false);  
        $("#cost-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.cost-0').addClass('is-acted');
      }else{
        
        $(this).parent().parent().find('.cost-0').removeClass('is-acted');
      }
    }).change();
    
    $( "#cost-item-100" ).change(function() {  //先將所有選取改成false,另外再把此改成true
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#cost-limit input").prop('checked', false);
        $("#cost-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.cost-100').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.cost-100').removeClass('is-acted');
      }
    }).change();
    
    $( "#cost-item-drink" ).change(function() {  //先將所有選取改成false,另外再把此改成true
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#cost-limit input").prop('checked', false);
        $("#cost-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.cost-drink').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.cost-drink').removeClass('is-acted');
      }
    }).change();
    
    $( "#cost-item-eat" ).change(function() {  //先將所有選取改成false,另外再把此改成true
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#cost-limit input").prop('checked', false);
        $("#cost-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.cost-eat').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.cost-eat').removeClass('is-acted');
      }
    }).change();
    
    $( "#time-item-0" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#time-limit input").prop('checked', false);
        $("#time-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.time-0').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.time-0').removeClass('is-acted');
      }
    }).change();
    
    $( "#time-item-1" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#time-limit input").prop('checked', false);
        $("#time-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.time-1').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.time-1').removeClass('is-acted');
      }
    }).change();
    
    $( "#time-item-2" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $("#time-limit input").prop('checked', false);
        $("#time-limit li").removeClass('is-acted');
        $(this).prop('checked', true);
        $(this).parent().parent().find('.time-2').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.time-2').removeClass('is-acted');
      }
    }).change();
    
    $( "#wifi-item-wifi" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.wifi-wifi').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.wifi-wifi').removeClass('is-acted');
      }
    }).change();
    $( "#wifi-item-plug" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.wifi-plug').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.wifi-plug').removeClass('is-acted');
      }
    }).change();
    $( "#eat-item-coffee" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.eat-coffee').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.eat-coffee').removeClass('is-acted');
      }
    }).change();
    $( "#eat-item-eat" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.eat-eat').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.eat-eat').removeClass('is-acted');
      }
    }).change();
    $( "#eat-item-cake" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.eat-cake').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.eat-cake').removeClass('is-acted');
      }
    }).change();
    $( "#other-item-pet" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.other-pet').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.other-pet').removeClass('is-acted');
      }
    }).change();
    $( "#other-item-order" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.other-order').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.other-order').removeClass('is-acted');
      }
    }).change();
    $( "#other-item-enter" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.other-enter').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.other-enter').removeClass('is-acted');
      }
    }).change();



    $('#articleChange-color').on("mouseenter",function(){
        $(this).css("color","#FF8C00");
    });

    $('#articleChange-color').on("mouseleave",function(){
        $(this).css("color","#8B4513");
    });

});
