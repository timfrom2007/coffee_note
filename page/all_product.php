<?php 
include("Mysql_Util.php");
include("File_Util.php");

$result = show_all_product();
?>
<table border="1">
<tr> <td>刪除產品資料</td><td>修改產品資料</td> <td>產品名字</td> <td>種類</td> <td>規格</td> <td>特性</td> <td>價格</td> <td>樣式</td> <td>圖片位置</td> </tr>

<?php 
while($row = mysql_fetch_row($result)){
    if($row[5]==1){ $row[5] = "咖啡機"; }
    elseif($row[5]==2) { $row[5] = "磨豆機"; }
    else { $row[5] = "耗材"; }
    ?>
    <tr> 
    <td>
    <form name="form" method="post" action="delete_product.php" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?php echo $row[0] ?>"/>
    <input type="submit" name="button" value="刪除" />
    </form>
    </td>
    <td>
    <form name="form" method="post" action="update_product.php" enctype="multipart/form-data">
    <input type="hidden" name="name" value="<?php echo $row[0] ?>"/>
    <input type="submit" name="button" value="修改" />
    </form>
    </td>
<?php 
    echo " <td>$row[0]</td> <td>$row[1]</td> <td>$row[2]</td> <td>$row[3]</td> <td>$row[4]</td> <td>$row[5]</td> <td>$row[6]</td> </tr>";
?>



<?php
    
}
?>

</table>




