<?php session_start(); ?>
<?php include("Mysql_util.php"); ?>
<html>
    <head>
        <title>All course</title>
        <link rel=stylesheet type="text/css" href="css/course_center.css">
    </head>
    
    <body>
       <div id="main-content" align="center">
           <div ><h2>所有課程</h2></div>
           
           <div class="choice_bar">
               <ul>
                   <li><a href="">所有課程</a></li>
                   <li><a href="">課程管理</a></li>
                   <li><a href="member.php">會員中心</a></li>
               </ul>
            </div>
            
            <div class="outer_frame">
                <div class="all_course">
                    <?php 
                    $count=1;
                    $sql = "SELECT * FROM course where id = '$count'";
                    $row = show_course($sql);
                    do{ ?>
                    <div class="course">
                        <div class="course_pic"><a href=""><img src="<?php echo $row[2]; ?>"></a></div>
                        <div class="course_name"><a href=""><?php echo $row[1]; ?></a></div>
                    </div>
                    <?php 
                    $count++;
                    }while($count==9) //一頁顯示九個課程 ?>
                    
                </div>
            </div>
       </div>
        
    </body>
</html>