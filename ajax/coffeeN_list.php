<?php include("../page/Mysql_util.php"); ?>

<?php
$area = $_POST['area'];
$wifi = ( $_POST['wifi'] == 'true' ? true : false );
$plug = ( $_POST['plug'] == 'true' ? true : false );
$outdoor = ( $_POST['outdoor'] == 'true' ? true : false );
$meeting_area =( $_POST['meeting_area'] == 'true' ? true : false );
$parking = ( $_POST['parking'] == 'true' ? true : false );
$credit_card = ( $_POST['credit_card'] == 'true' ? true : false );

$meal = ( $_POST['meal'] == 'true' ? true : false );
$reservation = ( $_POST['reservation'] == 'true' ? true : false ); 
$deliver = ( $_POST['deliver'] == 'true' ? true : false ); 
$book_out = ( $_POST['book_out'] == 'true' ? true : false ); 
$exhibition = ( $_POST['exhibition'] == 'true' ? true : false ); 
$time_unlimit = ( $_POST['time_unlimit'] == 'true' ? true : false ); 
$classical = ( $_POST['classical'] == 'true' ? true : false ); 

$result = show_cafe($area, $wifi, $plug, $outdoor, $meeting_area, $parking, $credit_card, $meal, $reservation, $deliver, $book_out, $exhibition, $time_unlimit ,$classical);

$cafe_page = count_all_cafe();
$page = 1;

$count = 0;

while($row = mysql_fetch_row($result)){

    $count +=1;
    if($count>4){ break; }
    
  echo "<li class='one-shop'>";

    echo "<!-- <div class='shop-line'>";
        echo "<img src='../img/line.png' alt='revise later'>";
    echo "</div> -->";
    echo "<!-- ul li shop list shop item line pseudo -->";
    echo "<div class='shop-box'>";
        echo "<div class='shop-photo'>";
            echo "<img src='$row[19]' alt='revise later'>";
        echo "</div>";
        echo "<div class='shop-text-box'>";
            echo "<!-- shop-summery -->";
            echo "<div class='shop-name'>";
                echo "$row[0]";
            echo "</div>";
            echo "<div class='shop-text-item'>地址:</div>";
            echo "<p class='shop-name-text'>";
                echo "<!-- shop-address -->";
                echo "$row[2]";
            echo "</p>";
            echo "<div class='shop-text-item'>電話:</div>";
            echo "<p class='shop-name-text'>";
                echo "<!-- shop-teaser -->";
                echo "$row[1]";
            echo "</p>";
        echo "</div>";
    echo "</div>";
  echo "</li>";

}

echo "<div style='text-align:center;'>";
            echo "<h>page:</h>";
while($cafe_page>0){
    echo "<a value='$page'>$page</a>";
    $cafe_page = $cafe_page - 4;
    $page++;
}
echo "</div>";



?>