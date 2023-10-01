<?php
function insert_posts($title, $description, $create_at,$is_active){
    $sql="insert into posts(username,password,email) values('$title','$description','$is_active')";
    pdo_execute($sql);
}

function update_posts($id, $title,$description,$create_at,$is_active){
    $sql="update posts set title='".$title."', description='".$description."', create_at='".$create_at."', is_active='".$is_active."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_posts(){
    $sql = "select * from posts order by id desc limit 4";
    $listposts=pdo_query($sql);
    return $listposts;
}
function load_one_post($id){
    $sql = "select * from posts where id=".$id;
    $post=pdo_query_one($sql);
    return $post;
}
function delete_post($id){
    $sql = "delete from posts where id=".$id;
    pdo_execute($sql);
}
?>