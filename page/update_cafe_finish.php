<?php session_start(); ?>
<?php 
include("Mysql_Util.php");

$cafe_name = $_POST['name'];
$telphone = $_POST['telphone'];
$address = $_POST['address'];
$hours = $_POST['hours'];
$credit_card = $_POST['credit_card'];
$reservation = $_POST['reservation'];
$price = $_POST['price'];
$wifi = $_POST['wifi'];
$deliver = $_POST['deliver'];
$outdoor = $_POST['outdoor'];
$meeting_area = $_POST['meeting_area'];
$book_out = $_POST['book_out'];
$parking = $_POST['parking'];
$exhibition = $_POST['exhibition'];
$plug = $_POST['plug'];
$time_unlimit = $_POST['time_unlimit'];
$meal = $_POST['meal'];
$classical = $_POST['classical'];
$remark = $_POST['remark'];
$img_src = $_POST['img_src'];

$sql = update_cafe($cafe_name, $telphone, $address, $hours, $credit_card, $reservation, $price, $wifi, $deliver, $outdoor, $meeting_area, $book_out, $parking, $exhibition, $plug, $time_unlimit, $meal, $classical, $remark, $img_src);
    if(mysql_query($sql)){
                echo '<br>修改成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_cafe.php>';
    }
    else{
                echo '<br>修改失敗!'; echo $sql;
                echo '<meta http-equiv=REFRESH CONTENT=2;url=all_cafe.php>';
    }
?>