
$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    $( "#bean-item-dry" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-deal-dry').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-deal-dry').removeClass('is-acted');
      }
    }).change();
    $( "#bean-item-mo" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-deal-mo').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-deal-mo').removeClass('is-acted');
      }
    }).change();

    $( "#bean-item-pot" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-boil-pot').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-pot').removeClass('is-acted');
      }
    }).change();
    $( "#bean-item-hand" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-boil-hand').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-hand').removeClass('is-acted');
      }
    }).change();
    $( "#bean-item-handcup" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-boil-handcup').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-handcup').removeClass('is-acted');
      }
    }).change();
    $( "#bean-item-milk" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-boil-milk').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-milk').removeClass('is-acted');
      }
    }).change();
    $( "#bean-item-fire" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-boil-fire').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-fire').removeClass('is-acted');
      }
    }).change();
    $( "#bean-item-paper" ).change(function() {
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.bean-boil-paper').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-paper').removeClass('is-acted');
      }
    }).change();
    



});
