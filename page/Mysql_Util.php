<?php

include("mysql_connect.inc.php");

function show_user($id){
    //搜尋資料庫資料
    $sql = "SELECT * FROM `user` where `id` = '$id'";
    $result = mysql_query($sql);
    $row = @mysql_fetch_row($result);
    return $row;
}

function show_all_users(){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM user";
    $result = mysql_query($sql);
    return $result;
}

function add_user($id, $password, $email){
    $sql = "insert into `user` (`id`, `password`, `email`, `permission`) values ('$id', '$password', '$email', '1')";
    return $sql;
}

function update_user($id, $password, $email){
    $sql = "update `user` set `password`='$password', `email`='$email' where `id`='$id'";
    return $sql;
}

function delete_user($id){
    $sql = "delete from user where `id`='$id'";
    return $sql;
}

function show_cafe($cost_limit, $time_limit, $wifi, $plug, $pet){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM cafe where ";
    $where_str = '';
    
    if($wifi==1){
        $where_str .= "`wifi` = $wifi"; 
    }
    if($plug==1){ 
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`plug` = $plug"; 
    }
    if($pet==1){ 
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`pet` = $pet"; 
    }
    
    if($cost_limit!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`cost_limit` <= $cost_limit";
    }
    
    if($time_limit!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`time_limit` <= $time_limit";
    }
    
    if($where_str == ''){
        $where_str = '1';
    }
    
    $sql .= $where_str;
    
    $result = mysql_query($sql);
    return $result;
}


function show_all_cafe(){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM cafe where 1";
    $result = mysql_query($sql);
    return $result;
}

function add_cafe($cafe_name, $cost_limit, $time_limit, $wifi, $plug, $pet, $pic_src, $cafe_like, $cafe_dislike){
    $sql = "INSERT INTO `cafe`(`cafe_name`, `cost_limit`, `time_limit`, `wifi`, `plug`, `pet`, `pic_src`, `cafe_like`, `cafe_dislike`) VALUES ('$cafe_name', '$cost_limit', '$time_limit', '$wifi', '$plug', '$pet', '$pic_src', '$cafe_like', '$cafe_dislike')";
    return $sql;
}

?>