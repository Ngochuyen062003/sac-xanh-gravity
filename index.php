<?php

    session_start();
    include "model/pdo.php";
    include "model/user.php";
    include "model/blogs.php";
    include "model/posts.php";
    include "model/roles.php";
    include "views/header.php";
    include "global.php";

    $blogs = loadAll_blogs();
    $posts = loadAll_posts();
    $roles = load_roles_signup();

function new_name($name)
{
    $n = strlen($name);
    $new_name = $name;
    if ($n < 20) {
        echo $new_name;
    } else {
        $my_new_name = substr($new_name, 0, 30);
        echo $my_new_name;
    }

}
function new_description($description)
{
    $n = strlen($description);
    $new_description = $description;
    if ($n < 100) {
        echo $new_description;
    } else {
        $my_new_description = substr($new_description, 0, 205);
        echo $my_new_description;
    }

}

    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act = $_GET['act'];
        switch ($act) {
            case 'dang-ky':
                if (isset($_POST['dang-ky'])&&($_POST['dang-ky'])) {
                    $email = $_POST["email"];
                    $username = $_POST['username'];
                    $phonenumber = $_POST['phone-number'];
                    $email = $_POST['email'];
                    $avatar = $_FILES['avatar']['name'];
                    $fullname = $_POST['fullname'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];

                    $target_dir = "../uploads/";
                    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);

                    if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
                        // echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    
                    insert_users($fullname,$username,$phonenumber,$email,$avatar,$password,$role);
                    $thongbao = " Đăng ký thành công. Bây giờ bạn có thể đăng nhập.";
                }
                include "views/dangky.php";
                break;
            case 'dang-nhap':
                include "views/dangnhap.php";
                break;
            case 'hanh-trinh-nhan-ai':
                include "views/hanhtrinh.php";
                break;
            case 'tin-tuc':
                include "views/tintuc.php";
                break;
            case 'tich-la':
                include "views/tichla.php";
                break;
            case 'doi-diem':
                include "views/doidiem.php";
                break;
            default:
                include "views/home.php";
                break;
        }
    } 
    else {
      include "views/home.php";
  }

  include "views/footer.php";
?>