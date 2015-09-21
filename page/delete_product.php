<?php 
include("Mysql_Util.php");

$product = $_POST['name'];

$sql = delete_product($product);

    if(mysql_query($sql)){
                echo '<br>刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_product.php>';
    }
    else{
                echo '<br>刪除失敗!'; echo $sql;
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_product.php>';
    }

?>