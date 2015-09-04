<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("Mysql_util.php"); ?>
<html>
    <head>
        <title>Cafe</title>
        <script src="../js/jquery-1.11.3.min.js"></script>
        <script src="../js/cafe.js"></script>
    </head>
    
    <body>
       <div id="main" style="width:1500px; height:1500px; background-color:brown;">
            <div id="checkboxes" style="">
                金額限制<input type=text name="cost_limit"><br>
                時間限制<input type=text name="time_limit"><br>
                Wifi<input type=checkbox value="wifi" name="wifi"><br>
                Plug<input type=checkbox value="plug" name="plug"><br>
                Pet<input type=checkbox value="pet" name="pet"><br>
                
            </div>
        
            <div style="float:left;" id="all-cafe">
                <?php
                    $result = show_all_cafe();
                    while($row = mysql_fetch_row($result)){
                        echo "<img src='$row[6]'>";
                        echo "店家：$row[0]"."<br>";
                    }
                ?>
            </div>
           
       </div>
    </body>
</html>