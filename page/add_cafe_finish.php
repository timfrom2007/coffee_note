<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

include("Mysql_Util.php");
include("File_Util.php");

$cafe_name = $_POST['cafe_name'];
$telphone = $_POST['telphone'];
$address = $_POST['address'];
$hours = $_POST['hours'];
$credit_card = $_POST['credit_card'];
$reservation = $_POST['reservation'];
$price = $_POST['price'];
$wifi = $_POST['wifi'];
$deliver = $_POST['deliver'];
$outdoor = $_POST['outdoor'];
$meeting_area = $_POST['meeting_area'];
$book_out = $_POST['book_out'];
$parking = $_POST['parking'];
$exhibition = $_POST['exhibition'];
$plug = $_POST['plug'];
$time_unlimit = $_POST['time_unlimit'];
$meal = $_POST['meal'];
$classical = $_POST['classical'];
$remark = $_POST['remark'];


$file_name = $_FILES["fileToUpload"]["name"]; //上傳檔案的原始名稱。
$file_type = $_FILES["fileToUpload"]["type"]; //上傳的檔案類型。
$file_size = $_FILES["fileToUpload"]["size"]; //上傳的檔案原始大小。
$file_tmp_name = $_FILES["fileToUpload"]["tmp_name"]; //上傳檔案後的暫存資料夾位置。
$file_error = $_FILES["fileToUpload"]["error"]; //如果檔案上傳有錯誤，可以顯示錯誤代碼。

$target_dir = "../img/cafe/";
$target_file = $target_dir . basename($file_name);  //絕對位置圖片Url ＋ 檔名
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);  //檔案副檔名

$uploadOk = 1;

if(isset($_POST["submit"])){
    
    $uploadOk = file_getimagesize($file_tmp_name); // Check if image file is a actual image or fake image
    
    $uploadOk = check_file_exists($target_file); // Check if file already exists
    $uploadOk = ckeck_fileSize_limit($file_size, 500000);// Check file size, file_size_limit($file_size, $size_limit)

    $file_type = array("jpg", "png", "jpeg", "gif");
    $uploadOk = check_fileType($imageFileType, $type_array);// Allow certain file formats
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    
// if everything is ok, try to upload file
}
else{
    if (move_uploaded_file($file_tmp_name, $target_file)) {
        echo "The file ". basename( $file_name ). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    
    $sql = add_cafe($cafe_name, $telphone, $address, $hours, $credit_card, $reservation, $price, $wifi, $deliver, $outdoor, $meeting_area, $book_out, $parking, $exhibition, $plug, $time_unlimit, $meal, $classical, $remark, $target_file);
    if(mysql_query($sql)){
                echo '<br>新增成功!';
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=add_cafe.html>';
        echo $sql;
    }
    else{
                echo '<br>新增失敗!'; echo $sql;
                //echo '<meta http-equiv=REFRESH CONTENT=2;url=add_cafe.html>';
    }
    
}


?>