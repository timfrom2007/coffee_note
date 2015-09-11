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

function show_all_product($begin, $limit){
    $sql = "SELECT * FROM `product` limit $begin, $limit";
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
        $where_str .= "`coffee_machine` = '$coffee_machine'";
    }
    
    if($grinder!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`grinder` = $grinder"; 
    }
    
    if($coffee_filter_pot!=null){ 
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`coffee_filter_pot` = $coffee_filter_pot"; 
    }
    
    if($coffee_pot!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`coffee_pot` = $coffee_pot"; 
    }
    
    if($hand_pot!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`hand_pot` = $hand_pot"; 
    }
    
    if($hand_filter_pot!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`hand_filter_pot` = $hand_filter_pot"; 
    }
    
    if($foamer!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`foamer` = $foamer"; 
    }
    
    if($gas!=null){
        if($where_str != ''){
            $where_str .= " AND ";
        }
        $where_str .= "`gas` = $gas"; 
    }
    
    if($where_str == ''){
        $where_str = '1';
    }
    
    $sql .= $where_str;
    $sql .= " limit $begin, $limit".
    
    $result = mysql_query($sql);
    return $result;
}

function add_cafe($cafe_name, $area, $cost_limit, $time_limit, $wifi, $plug, $coffee, $meal, $dessert, $pet, $seat_order, $enter,$target_file, $address, $characteristic, $cafe_like, $cafe_dislike){
    $sql = "INSERT INTO `cafe`(`cafe_name`, `area`, `cost_limit`, `time_limit`, `wifi`, `plug`, `coffee`, `meal`, `dessert`, `pet`, `seat_order`, `enter`, `pic_src`, `address`, `characteristic`, `cafe_like`, `cafe_dislike`) VALUES ('$cafe_name', '$area', '$cost_limit', '$time_limit', '$wifi', '$plug', '$coffee', '$meal', '$dessert', '$pet', '$seat_order', '$enter','$target_file', '$address', '$characteristic', '0', '0')";
    return $sql;
}

?>