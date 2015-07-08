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
        $wifi=1; //wifi 布林射程 1
        $electronic=1;
        $plug=1;
        ?>
       <div id="main" style="width:300px; height:600px; background-color:brown;">
           <div id="checkboxes" style="">
                <input type=checkbox value="wifi" name="wifi" > Wifi
                <input type=checkbox value="electronic" name="electronic" onchange=""> Plug
                <input type=checkbox value="plug" name="plug" onchange=""> Indside Sites
            </div>
        
            <div style="float:left;" id="all-cafe">
                <br><br><br>
                <?php 
		  //hihi
                ?>
            </div>
           
       </div>
    </body>
</html>