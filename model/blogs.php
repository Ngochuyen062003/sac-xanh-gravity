<?php
function insert_blogs($title, $description, $create_at,$is_active){
    $sql="insert into blogs(username,password,email) values('$title','$description','$is_active')";
    pdo_execute($sql);
}

function update_blogs($id, $title,$description,$id_blogger,$create_at,$is_active){
    $sql="update blogs set title='".$title."', description='".$description."', create_at='".$create_at."', id_blogger='".$id_blogger."', is_active='".$is_active."' where id=".$id;
    pdo_execute($sql);
}
function loadAll_blogs(){
    $sql = "select * from blogs order by id desc limit 4";
    $listblogs=pdo_query($sql);
    return $listblogs;
}
function load_one_blog($id){
    $sql = "select * from blogs where id=".$id;
    $blog=pdo_query_one($sql);
    return $blog;
}
function delete_blog($id){
    $sql = "delete from blogs where id=".$id;
    pdo_execute($sql);
}
?>