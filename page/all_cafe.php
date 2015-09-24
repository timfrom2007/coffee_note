<?php 
include("Mysql_Util.php");
include("File_Util.php");

$result = show_all_cafe();
?>
<table border="1">
<tr> <td>刪除產品資料</td><td>修改產品資料</td> <td>咖啡店名</td> <td>電話</td> <td>地址</td> <td>營業時間</td> <td>信用卡</td> <td>訂位</td> <td>價格</td> <td>Wifi</td> <td>外送</td> <td>戶外場地</td> <td>會議廳</td> <td>包場</td> <td>停車場</td> <td>展演</td> <td>插座</td> <td>沒有時間限制</td> <td>簡餐</td> <td>經典門市</td> <td>備註</td> <td>圖片位址</td> </tr>

<?php 
while($row = mysql_fetch_row($result)){
    
    ?>
    <tr> 
    <td>
    <form name="form" method="post" action="delete_cafe.php" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?php echo $row[0] ?>"/>
    <input type="submit" name="button" value="刪除" />
    </form>
    </td>
    <td>
    <form name="form" method="post" action="update_cafe.php" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?php echo $row[0] ?>"/>
    <input type="submit" name="button" value="修改" />
    </form>
    </td>
<?php 
    for($x=0; $x<count($row); $x++){
        if($row[$x]=='1'){
            $row[$x] = "✓";
        }
        
        if($row[$x]=='0'){
            $row[$x] = "X";
        }
        echo "<td>$row[$x]</td>";
    }
?>



<?php
    
}
?>

</table>




