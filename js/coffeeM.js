function refreshList(){
    
    var data = new Object(), allCheckBoxes = $("input[type='checkbox']"),  curCheck = null;
    
    for( var i=0 ; i<allCheckBoxes.length ; i+=1 ){
        curCheck = allCheckBoxes.eq(i);
        if(curCheck.prop('checked')){
            data[curCheck.attr('name')] = curCheck.val();
        }
    }

    console.log(data);
    
    $.ajax({
            url: window.location.origin+'/coffee_note/ajax/coffeeM_list.php',
            type: 'POST',
            data: data,
            success: function(msg){
                $('#product').html(msg);
            },
            error: function(xhr){ //不寫也可
                console.log(xhr);
            }
    });
}

$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    
    $( "#bean-item-dry" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-deal-dry').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-deal-dry').removeClass('is-acted');
      }
    }).change();
    
    
    $( "#bean-item-mo" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-deal-mo').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-deal-mo').removeClass('is-acted');
      }
    }).change();

    
    $( "#bean-item-pot" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-boil-pot').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-pot').removeClass('is-acted');
      }
    }).change();
    
    
    $( "#bean-item-hand" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-boil-hand').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-hand').removeClass('is-acted');
      }
    }).change();
    
    
    $( "#bean-item-handcup" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-boil-handcup').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-handcup').removeClass('is-acted');
      }
    }).change();
    
    
    $( "#bean-item-milk" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-boil-milk').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-milk').removeClass('is-acted');
      }
    }).change();
    
    
    $( "#bean-item-fire" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-boil-fire').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-fire').removeClass('is-acted');
      }
    }).change();
    
    
    $( "#bean-item-paper" ).change(function() {
        $('#product').html();  //清空內頁
        refreshList(); //呼叫ajax
      if($(this).prop('checked')){
        $(this).parent().parent().find('.bean-boil-paper').addClass('is-acted');
      }else{
        $(this).parent().parent().find('.bean-boil-paper').removeClass('is-acted');
      }
    }).change();
    
});
