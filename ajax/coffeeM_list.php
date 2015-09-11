<?php include("../page/Mysql_util.php"); ?>

<?php
$coffee_machine = $_POST['coffee_machine'];
$grinder =  $_POST['grinder'];
$coffee_filter_pot = $_POST['coffee_filter_pot'];
$coffee_pot = $_POST['coffee_pot'];
$hand_pot = $_POST['hand_pot'];
$hand_filter_pot = $_POST['hand_filter_pot'];
$foamer = $_POST['foamer'] ;
$gas = $_POST['gas'];




$cafe_page = count_all_product();
$page = 1;
$count = 0;

for($x=0; $x<3; $x++){
    echo "<li class='one-shop'>";
                        
    $result = show_product($coffee_machine, $grinder, $coffee_filter_pot, $coffee_pot, $hand_pot, $hand_filter_pot, $foamer, $gas, $count, 3);
    while($row = mysql_fetch_row($result)){
        echo "<div class='shop-box'>";
            echo "<div class='shop-photo'>";
                echo "<img src='$row[6]' alt='revise later'>";
            echo "</div>";
            echo "<div class='shop-text-box'>";
                echo "<!-- shop-summery -->";
                echo "<div class='shop-name'>";
                    echo "$row[0]";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        $count +=1;
    }
    echo "</li>";
}




?>