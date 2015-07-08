<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Mysql_Util.php");

if($_SESSION['id'] != null)
{
    //將$_SESSION['id']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['id'];
    $row = show_user($id);
        
?>
        <form name="form" method="post" action="update_finish.php">
            帳號：<?php echo $row[0]; ?> &nbsp; &nbsp; (此項目無法修改) <br>
            密碼：<input type="password" name="password" value="" /> <br>
            再一次輸入密碼：<input type="password" name="password2" value="" /> <br>
            信箱：<input type="text" name="email" value="" /> <br>
            <input type="submit" name="button" value="確定" />
        </form>
        
<?php
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>