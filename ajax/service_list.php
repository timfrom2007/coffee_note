<?php session_start(); ?>
<?php include("../page/Mysql_util.php"); ?>

<?php
$wifi = ( $_POST['wifi'] == 'true' ? true : false );
$electronic = ( $_POST['electronic'] == 'true' ? true : false );
$plug = ( $_POST['plug'] == 'true' ? true : false );


    $result = show_cafe($wifi, $electronic, $plug);

    while($row = mysql_fetch_row($result)){
        echo "店家：$row[0]"."<br>";
    }





?>