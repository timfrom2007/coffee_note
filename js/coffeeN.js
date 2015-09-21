
function refreshList(){
    
    var data = new Object(), allCheckBoxes = $("input[type='checkbox']"), allRadioBoxes = $("input[type='radio']"), curCheck = null, curRadio = null, allSelectBox = $("select"), curSelect = null;
    
    for( var i=0 ; i<allCheckBoxes.length ; i+=1 ){
        curCheck = allCheckBoxes.eq(i);
        if(curCheck.prop('checked')){
            data[curCheck.attr('name')] = curCheck.val();
        }
    }
    
    for(var i=0 ; i<allSelectBox.length; i+=1){
        curSelect = allSelectBox.eq(i);
        data[curSelect.attr('name')] = curSelect.find(":selected").val();
    }

    console.log(data);
    
    $.ajax({
            url: window.location.origin+'/coffee_note/ajax/coffeeN_list.php',
            type: 'POST',
            data: data,
            success: function(msg){
                $('#shop').html(msg);
            },
            error: function(xhr){ //不寫也可
                console.log(xhr);
            }
    });
}


$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    
    $("#area").change(function(){
        $('#shop').html();
        refreshList(); //呼叫ajax
    });
        
    $( "#eat-item-credit" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.service-credit').addClass('is-acted');

      }else{
        $(this).parent().parent().find('.service-credit').removeClass('is-acted');
      }

    });
    
    
    $( "#eat-item-meal" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.service-meal').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.service-meal').removeClass('is-acted');
      }

    });
    
    
    $( "#eat-item-reservation" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.service-reservation').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.service-reservation').removeClass('is-acted');
      }

    });
    
    
    $( "#eat-item-deliver" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        // var hihi=$(this) ;
        // console.log(hihi);
        $(this).parent().parent().find('.service-deliver').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.service-deliver').removeClass('is-acted');
      }
    });
    
    
    $( "#eat-item-book_out" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.service-book_out').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.service-book_out').removeClass('is-acted');
      }

    });
    
    $( "#eat-item-exhibition" ).change(function() {
      if($(this).prop('checked')){
        $(this).parent().parent().find('.service-exhibition').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.service-exhibition').removeClass('is-acted');
      }
        $('#shop').html();
        refreshList(); //呼叫ajax
    });
    
    $( "#eat-item-time_unlimit" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
        
      if($(this).prop('checked')){
        $(this).parent().parent().find('.service-time_unlimit').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.service-time_unlimit').removeClass('is-acted');
      }

    });
    
    
    $( "#wifi-item-wifi" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.equipment-wifi').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.equipment-wifi').removeClass('is-acted');
      }

    });
    
    
    $( "#wifi-item-plug" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.equipment-plug').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.equipment-plug').removeClass('is-acted');
      }      

    });
    
    
    $( "#wifi-item-outdoor" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.equipment-outdoor').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.equipment-outdoor').removeClass('is-acted');
      }      

    });
 
    
    $( "#wifi-item-meeting_area" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.equipment-meeting_area').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.equipment-meeting_area').removeClass('is-acted');
      }
    });
    
    
    $( "#wifi-item-parking" ).change(function() {
        $('#shop').html();
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.equipment-parking').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.equipment-parking').removeClass('is-acted');
      }
    });
    
    
    $( "#other-item-classic" ).change(function() {
        $('#shop').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.other-classic').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.other-classic').removeClass('is-acted');
      }         

    });



    $('#articleChange-color').on("mouseenter",function(){
        $(this).css("color","#FF8C00");
    });

    $('#articleChange-color').on("mouseleave",function(){
        $(this).css("color","#8B4513");
    });
    

    
    $(document).on('click', '.shop-box div', function(){
        var cafe = $(this).parent().attr('data-name');
        
        var web = '/coffee_note/page/coffeeNS.php?cafe=';
        console.log(web);
        location.href = (web.concat(cafe));
    });

});
