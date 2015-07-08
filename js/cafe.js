
function refreshList(){
    //var val = $(this).val(); //取道自己的 value
        //var name = $(this).attr('name'); //取自己的 name
        var data = new Object(), allCheckBoxes = $('input[type="checkbox"]'), curCheck = null;
        for( var i=0 ; i<allCheckBoxes.length ; i+=1 ){
            curCheck = allCheckBoxes.eq(i)
            data[curCheck.attr('name')] = curCheck.prop('checked');
        }
        
        //var data = new Object();
        //data['hihi'] = 3; //data 是 object
        //等於 data.hihi = 3;
        
        //var data = new Array();
        //data[0] = 3; //data 是 array
        
        $.ajax({
            url: '/coffee_note/ajax/service_list.php',
            type: 'post',
            data: data,
            success: function(msg){
                $('#all-cafe').html(msg);
            },
            error: function(xhr){ //不寫也可
                //
            }
        });
}

$(document).ready(function(){ //function 內的內容會在整個原始黨載入完成後執行
    //$().aaa();
    $('input[type="checkbox"]').change(function(){
        refreshList();
    });
    
});