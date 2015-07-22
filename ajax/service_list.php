<?php session_start(); ?>
<?php include("../page/Mysql_util.php"); ?>

<?php
$cost_limit = $_POST['cost_limit'];
$time_limit = $_POST['time_limit'];
$wifi = ( $_POST['wifi'] == 'true' ? true : false );
$plug = ( $_POST['plug'] == 'true' ? true : false );
$pet = ( $_POST['pet'] == 'true' ? true : false );


$result = show_cafe($cost_limit, $time_limit, $wifi, $plug, $pet);

while($row = mysql_fetch_row($result)){
    echo "<img src='$row[6]'>";
    echo "店家：$row[0]"."<br>";
}



?>