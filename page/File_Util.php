<?php

function file_getimagesize($file_tmp_name){
    
    $check = getimagesize($file_tmp_name);
    
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
    return $uploadOk;
}


function check_file_exists($target_file){
    
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    return $uploadOk;
}


function check_fileSize_limit($file_size, $size_limit){
    
    if ($file_size > $size_limit) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    return $uploadOk;
}


function check_file_type($imageFileType, $type_array){
    
    foreach($type_array as $type){
        if($imageFileType != $type) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
    }
    return $uploadOk;
}


function upload_file($file_tmp_name, $target_file, $file_name){

    
    
}

?>