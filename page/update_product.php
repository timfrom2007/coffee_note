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