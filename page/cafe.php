<?php session_start(); ?>
<?php include("Mysql_util.php"); ?>
<?php $wifi=0; $electronic=0; $plug=0;?>
<html>
    <head>
        <title>Cafe</title>
        <script src="../js/jquery-1.11.3.min.js"></script>
        <script src="../js/cafe.js"></script>
    </head>
    
    <body>
      <?php
        $wifi=1; //wifi 布林設成 1
        $electronic=1;
        $plug=1;
        ?>
       <div id="main" style="width:300px; height:600px; background-color:brown;">
           <div id="checkboxes" style="">
                <input type=checkbox value="wifi" name="wifi" > Wifi
                <input type=checkbox value="electronic" name="electronic"> Plug
                <input type=checkbox value="plug" name="plug"> Indside Sites
            </div>
        
            <div style="float:left;" id="all-cafe">
                <?php
                    $result = show_all_cafe();
                    while($row = mysql_fetch_row($result)){
                        echo "店家：$row[0]"."<br>";
                    }
                ?>
            </div>
           
       </div>
    </body>
</html>