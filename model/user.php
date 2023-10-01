<?php
function insert_users($fullname,$username,$phonenumber,$email,$avatar,$password,$role){
    $sql="insert into users(full_name,user_name,phone_number,email,avatar,password,role_id) values('$fullname','$username','$phonenumber','$email','$avatar','$password','$role')";
    pdo_execute($sql);
}
function check_user($username,$password){
    $sql ="select * from users where username='".$username."' and password='".$password."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function check_quenmk($tendn,$email){
    $sql ="select * from users where username='".$tendn."' and  email='".$email."'";
    $tk=pdo_query_one($sql);
    return $tk;
}
function update_users($id,$username,$password,$email,$address,$phone,$role){
    $sql="update users set username='".$username."', password='".$password."', email='".$email."', address='".$address."', phone='".$phone."', role='".$role."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_users(){
    $sql = "select * from users order by id desc";
    $listusers=pdo_query($sql);
    return $listusers;
}
function load_one_user($id){
    $sql = "select * from users where id=".$id;
    $listusers=pdo_query_one($sql);
    return $listusers;
}
function delete_user($id){
    $sql = "delete from users where id=".$id;
    pdo_execute($sql);
}
?>