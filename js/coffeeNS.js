
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
    
});
