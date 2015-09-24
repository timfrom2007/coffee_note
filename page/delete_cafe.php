<?php 
include("Mysql_Util.php");

$cafe = $_POST['name'];

$sql = delete_cafe($cafe);
echo $sql;

    if(mysql_query($sql)){
                echo '<br>刪除成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_cafe.php>';
    }
    else{
                echo '<br>刪除失敗!'; echo $sql;
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_cafe.php>';
    }

?>