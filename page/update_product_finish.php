<?php session_start(); ?>
<?php 
include("Mysql_Util.php");

$name = $_POST['name'];
$species = $_POST['species'];
$format = $_POST['format'];
$characteristic = $_POST['characteristic'];
$price = $_POST['price'];
$type = $_POST['type'];
$img_src = $_POST['img_src'];

$sql = update_product($name, $species, $format, $characteristic, $price, $type, $img_src);
    if(mysql_query($sql)){
                echo '<br>修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_product.php>';
    }
    else{
                echo '<br>修改失敗!'; echo $sql;
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_product.php>';
    }
?>