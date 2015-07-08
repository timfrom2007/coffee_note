<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
include("Mysql_Util.php");

$id = $_POST['id'];
$password = $_POST['password'];
$password2 = $_POST['password2'];
$email = $_POST['email'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if($id != null && $password != null && $password2 != null && $password == $password2)
{
        //新增資料進資料庫語法
        $sql = add_user($id, $password, $email);
        if(mysql_query($sql))
        {
                echo '新增成功!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
        else
        {
                echo '新增失敗!';
                echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
        }
}
else
{
        echo '您無權限觀看此頁面!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=login.html>';
}
?>