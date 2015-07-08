<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Mysql_Util.php");
echo '<a href="logout.php">登出</a>  <br><br>';

//此判斷為判定觀看此頁有沒有權限
//說不定是路人或不相關的使用者
//因此要給予排除
if($_SESSION['id'] != null){
    if($_SESSION['permission'] == 0){  // Root權限，可新增修改刪除
        echo '<a href="register.php">新增</a>&nbsp;';
        echo '<a href="update.php">修改</a>&nbsp;';
        echo '<a href="delete.php">刪除</a>  <br><br>';
        
        $result = show_all_users();
        
        while($row = mysql_fetch_row($result)){
                 echo "名字(帳號)：$row[0], " . "信箱：$row[2]<br>";
        }
    }
    
    elseif($_SESSION['permission'] > 0){  // 一般使用者權限，僅可修改
        echo '<a href="update.php">修改</a>'.'<br>';
        
        $row = show_user($_SESSION['id']);
        echo "名字(帳號)：$row[0]" .'<br>'. "信箱：$row[2]<br>";
    }
        
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}
?>