<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
//連接資料庫
//只要此頁面上有用到連接MySQL就要include它
include("Mysql_Util.php");
$id = $_POST['id'];
$password = $_POST['password'];

$row = show_user($id);

//判斷帳號與密碼是否為空白
//以及MySQL資料庫裡是否有這個會員
if($id != null && $password != null && $row[0] == $id && $row[1] == $password)
{
        //將帳號寫入session，方便驗證使用者身份
        $_SESSION['id'] = $id;
        $_SESSION['permission'] = $row[3];
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=member.php>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=login.html>';
}
?>