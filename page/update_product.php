<?php
include("Mysql_Util.php");

$product = $_POST['name'];
echo $product;

$sql = "SELECT * FROM `product` where `name` = '$product'";
$result = mysql_query($sql);

while($row = mysql_fetch_row($result)){

    $field = array("name", "species", "format", "characteristic", "price", "type", "img_src");
?>

<table border="1">
   <tr> <td>刪除產品資料</td><td>修改產品資料</td> <td>產品名字</td> <td>種類</td> <td>規格</td> <td>特性</td> <td>價格</td> <td>樣式</td> <td>圖片位置</td> </tr>
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
    <form name="form" method="post" action="update_product_finish.php" enctype="multipart/form-data">
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