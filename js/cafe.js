
function refreshList() {
    //var val = $(this).val(); //取道自己的 value
        //var name = $(this).attr('name'); //取自己的 name
        var data = new Object(), allCheckBoxes = $('input[type="checkbox"]'), allTextBoxes = $("input[type='text']"), curCheck = null, curText = null;
        for( var i=0 ; i<allCheckBoxes.length ; i+=1 ){
            curCheck = allCheckBoxes.eq(i);
            data[curCheck.attr('name')] = curCheck.prop('checked');
            // <a id='i_dont_know' href='/hi.php' >I am content</a>
            var hr = $('#i_dont_know').attr('href'); //取出 /hi.php, 等於 $('#i_dont_know').prop('href')
            var id = $('#i_dont_know').attr('id'); //取出 i_dont_know 等於 $('#i_dont_know').prop('id')
            
            // <input id='check' type='checkbox' checked />
            var check = $('#check').attr('checked'); //空的
            // <input id='check' type='checkbox' checked='checked' />
            var check = $('#check').attr('checked'); //取出 checked
            //var check = $('#check').attr('checked', 'checked'); //設定他為 checked
            //var check = $('#check').attr('checked', ''); //取消設定 checked 不確定
            
            var check = $('#check').prop('checked'); //上面兩種都可用，而且回傳 true v
            var check = $('#check').prop('checked', true); //設定他 check v
            var check = $('#check').prop('checked', false); //設定他不 check v  
        }
        for(var i=0 ; i<allTextBoxes.length; i+=1){
            curText = allTextBoxes.eq(i);
            data[curText.attr('name')] = curText.val();
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
        $('#all-cafe').html();
        refreshList();
    });
    
    $('input[type="text"]').change(function(){
        $('#all-cafe').html();
        refreshList();
    });
    
});