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

function show_cafe($area, $wifi, $plug, $outdoor, $meeting_area, $parking, $credit_card, $meal, $reservation, $deliver, $book_out, $exhibition, $time_unlimit ,$classical){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM cafe where ";
    $where_str = '';
    
    if($area!=null){
        $where_str .= "`area` = '$area'";
    }
    
    if($wifi==1){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`wifi` = $wifi"; 
    }
    
    if($plug==1){ 
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`plug` = $plug"; 
    }
    
    if($outdoor==1){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`outdoor` = $outdoor"; 
    }
    
    if($meeting_area==1){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`meeeting_area` = $meeting_area"; 
    }
    
    if($parking==1){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`parking` = $parking"; 
    }
    
    if($credit_card==1){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`credit_card` = $credit_card"; 
    }
    
    if($meal==1){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`meal` = $meal"; 
    }
    
    if($reservation==1){ 
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`reservation` = $reservation"; 
    }
    
    if($deliver!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`deliver` = $deliver";
    }
    
    if($book_out!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`book_out` = $book_out";
    }
    
    if($exhibition!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`exhibition` = $exhibition";
    }
    
    if($time_unlimit!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`time_unlimit` = $time_unlimit";
    }
    
    if($classical!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`classical` = $classical";
    }
    if($where_str == ''){
        $where_str = '1';
    }
    
    $sql .= $where_str;
    
    $result = mysql_query($sql);
    return $result;
}

function update_product($name, $species, $format, $characteristic, $price, $type, $img_src){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "UPDATE `product` SET ";
    $set_str = '';
    $where_str = 'WHERE 1';
    
    if($name!=null){
        $set_str .= "`name` = '$name'";
    }
    
    if($species!=null){
        $set_str .= "`species` = '$species'";
    }

    if($format!=null){
        $set_str .= "`format` = '$format'";
    }

    if($characteristic!=null){
        $set_str .= "`characteristic` = '$characteristic'";
    }

    if($price!=null){
        $set_str .= "`price` = '$price'";
    }

    if($type!=null){
        $set_str .= "`type` = '$type'";
    }

    if($img_src!=null){
        $set_str .= "`img_src` = '$img_src'";
    }


    $sql .= $set_str;
    $sql .= $where_str;
    
    return $sql;
}

function update_cafe($cafe_name, $telphone, $address, $hours, $credit_card, $reservation, $price, $wifi, $deliver, $outdoor, $meeting_area, $book_out, $parking, $exhibition, $plug, $time_unlimit, $meal, $classical, $remark, $img_src){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "UPDATE `cafe` SET ";
    $set_str = '';
    $where_str = 'WHERE 1';
    
    if($name!=null){
        $set_str .= "`cafe_name` = '$cafe_name'";
    }
    
    if($telphone!=null){
        $set_str .= "`telphone` = '$telphone'";
    }
    
    if($address!=null){
        $set_str .= "`address` = '$address'";
    }
    
    if($hours!=null){
        $set_str .= "`hours` = '$hours'";
    }
    
    if($credit_card!=null){
        $set_str .= "`credit_card` = '$credit_card'";
    }
    
    if($reservation!=null){
        $set_str .= "`reservation` = '$reservation'";
    }
    
    if($price!=null){
        $set_str .= "`price` = '$price'";
    }
    
    if($wifi!=null){
        $set_str .= "`wifi` = '$wifi'";
    }
    
    if($deliver!=null){
        $set_str .= "`deliver` = '$deliver'";
    }
    
    if($outdoor!=null){
        $set_str .= "`outdoor` = '$outdoor'";
    }
    
    if($meeting_area!=null){
        $set_str .= "`meeting_area` = '$meeting_area'";
    }
    
    if($book_out!=null){
        $set_str .= "`book_out` = '$book_out'";
    }
    
    if($parking!=null){
        $set_str .= "`parking` = '$parking'";
    }
    
    if($exhibition!=null){
        $set_str .= "`exhibition` = '$exhibition'";
    }
    
    if($plug!=null){
        $set_str .= "`plug` = '$plug'";
    }
    
    if($time_unlimit!=null){
        $set_str .= "`time_unlimit` = '$time_unlimit'";
    }
    
    if($meal!=null){
        $set_str .= "`meal` = '$meal'";
    }
    
    if($classical!=null){
        $set_str .= "`classical` = '$classical'";
    }
    
    if($remark!=null){
        $set_str .= "`remark` = '$remark'";
    }
    

    if($img_src!=null){
        $set_str .= "`img_src` = '$img_src'";
    }


    $sql .= $set_str;
    $sql .= $where_str;
    
    return $sql;
}

function count_all_cafe(){
    $sql = "SELECT count(*) FROM `cafe` where 1";
    $result = mysql_query($sql);
    $row = mysql_fetch_row($result);
    return $row[0];
}

function count_all_product(){
    $sql = "SELECT count(*) FROM `product` where 1";
    $result = mysql_query($sql);
    $row = mysql_fetch_row($result);
    return $row[0];
}

function show_some_product($begin, $limit){
    $sql = "SELECT * FROM `product` limit $begin, $limit";
    $result = mysql_query($sql);
    return $result;
}

function show_all_product(){
    $sql = "SELECT * FROM `product` where 1";
    $result = mysql_query($sql);
    return $result;
}

function show_all_cafe(){
    //將資料庫裡的所有咖啡店資料顯示在畫面上
    $sql = "SELECT * FROM `cafe` where 1";
    $result = mysql_query($sql);
    return $result;
}

function show_coffeeNS($cafe){
    $sql = "SELECT * FROM `cafe` where `cafe_name`= '$cafe' ";
    $result = mysql_query($sql);
    return $result;
}

function show_product($coffee_machine, $grinder, $coffee_filter_pot, $coffee_pot, $hand_pot, $hand_filter_pot, $foamer, $gas, $begin, $limit){
    //將資料庫裡的所有會員資料顯示在畫面上
    $sql = "SELECT * FROM `product` where ";
    $where_str = '';
    
    if($coffee_machine!=null){
        $where_str .= "`type` = '$coffee_machine'";
    }
    
    if($grinder!=null){
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $grinder"; 
    }
    
    if($coffee_filter_pot!=null){ 
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $coffee_filter_pot"; 
    }
    
    if($coffee_pot!=null){
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $coffee_pot"; 
    }
    
    if($hand_pot!=null){
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $hand_pot"; 
    }
    
    if($hand_filter_pot!=null){
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $hand_filter_pot"; 
    }
    
    if($foamer!=null){
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $foamer"; 
    }
    
    if($gas!=null){
        if($where_str != ''){
            $where_str .= " OR ";
        }
        $where_str .= "`type` = $gas"; 
    }
    
    if($where_str == ''){
        $where_str = '1';
    }
    
    $sql .= $where_str;
    $sql .= " limit $begin, $limit".
    
    $result = mysql_query($sql);
    return $result;
}

function add_cafe($cafe_name, $telphone, $address, $hours, $credit_card, $reservation, $price, $wifi, $deliver, $outdoor, $meeting_area, $book_out, $parking, $exhibition, $plug, $time_ulimit, $meal, $classical, $remark, $target_file){
    $sql = "INSERT INTO `cafe`(`cafe_name`, `telphone`, `address`, `hours`, `credit_card`, `reservation`, `price`, `wifi`, `deliver`, `outdoor`, `meeting_area`, `book_out`, `parking`, `exhibition`, `plug`, `time_unlimit`, `meal`, `classical`, `remark`, `img_src`) VALUES ('$cafe_name', '$telphone', '$address', '$hours', '$credit_card', '$reservation', '$price', '$wifi', '$deliver', '$outdoor', '$meeting_area', '$book_out', '$parking', '$exhibition', '$plug', '$time_ulimit', '$meal', '$classical', '$remark', '$target_file')";
    return $sql;
}

function add_product($name, $species, $format, $characteristic, $price, $type, $target_file){
    $sql = "INSERT INTO `product`(`name`, `species`, `format`, `characteristic`, `price`, `type`, `img_src`) VALUES ('$name', '$species', '$format', '$characteristic', '$price', '$type', '$target_file')";
    return $sql;
}

function delete_product($name){
    $sql = "DELETE FROM `product` WHERE `name` = '$name'";
    return $sql;
}

function delete_cafe($name){
    $sql = "DELETE FROM `cafe` WHERE `cafe_name` = '$name'";
    return $sql;
}

?>