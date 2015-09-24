<?php
include("Mysql_Util.php");

$product = $_POST['name'];
echo $product;

$sql = "SELECT * FROM `cafe` where `cafe_name` = '$product'";
$result = mysql_query($sql);

while($row = mysql_fetch_row($result)){

    $field = array("cafe_name", "telphone", "address", "hours", "credit_card", "reservation", "price", "wifi", "deliver", "outdoor", "meeting_area", "book_out", "parking", "exhibition", "plug", "time_unlimit", "meal", "classical", "remark", "img_src");
?>

<table border="1">
   <tr><td>咖啡店名</td> <td>電話</td> <td>地址</td> <td>營業時間</td> <td>信用卡</td> <td>訂位</td> <td>價格</td> <td>Wifi</td> <td>外送</td> <td>戶外場地</td> <td>會議廳</td> <td>包場</td> <td>停車場</td> <td>展演</td> <td>插座</td> <td>沒有時間限制</td> <td>簡餐</td> <td>經典門市</td> <td>備註</td> <td>圖片位址</td> </tr>
    <tr>
        <?php 
        for($x=0;$x<count($row);$x++){
            echo "<td>$row[$x]</td>";
            
        }
        ?>
    </tr>
    <tr>
    <?php for($x=0;$x<count($field);$x++){ ?>
    <td>
    <form name="form" method="post" action="update_cafe_finish.php" enctype="multipart/form-data">
    <TextArea Name="<?php echo $field[$x] ?>" Cols="40" Rows="3"></TextArea>
    <input type="submit" name="button" value="修改"/>
    </form>
    </td>
       
        
        
            
    <?php    }
    ?>
    </tr>
</table>    


<?php

}
?>