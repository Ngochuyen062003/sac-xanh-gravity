<?php
function insert_role($name){
    $sql="insert into roles(name) values('$name')";
    pdo_execute($sql);
}

function update_roles($id, $name){
    $sql="update roles set name='".$name."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_roles(){
    $sql = "select * from roles ";
    $listroles=pdo_query($sql);
    return $listroles;
}

function load_roles_signup(){
    $sql = "select * from roles where id > 1";
    $listroles=pdo_query($sql);
    return $listroles;
}
function load_one_role($id){
    $sql = "select * from roles where id=".$id;
    $role=pdo_query_one($sql);
    return $role;
}
function delete_role($id){
    $sql = "delete from roles where id=".$id;
    pdo_execute($sql);
}
?>